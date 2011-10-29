<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/topic.php,v 1.24 2005/02/18 18:12:09 pc_freak Exp $
	
	This file is part of UseBB.
	
	UseBB is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

define('INCLUDED', true);
define('ROOT_PATH', './');

//
// Include usebb engine
//
require(ROOT_PATH.'sources/common.php');

//
// If an ID has been passed
//
if ( ( !empty($_GET['id']) && is_numeric($_GET['id']) ) || ( !empty($_GET['post']) && is_numeric($_GET['post']) ) ) {
	
	//
	// Look up the topic ID for post ID's
	//
	if ( !empty($_GET['post']) && is_numeric($_GET['post']) ) {
		
		if ( !($result = $db->query("SELECT p1.topic_id, COUNT(p2.id) AS post_in_topic FROM ".TABLE_PREFIX."topics t, ".TABLE_PREFIX."posts p1, ".TABLE_PREFIX."posts p2 WHERE p1.id = ".$_GET['post']." AND t.id = p1.topic_id AND p2.topic_id = p1.topic_id AND p2.id <= ".$_GET['post']." GROUP BY p1.topic_id")) )
			$functions->usebb_die('SQL', 'Unable to get parent topic!', __FILE__, __LINE__);
		
		if ( $db->num_rows($result) ) {
			
			$out = $db->fetch_result($result);
			$requested_topic = $out['topic_id'];
			$post_in_topic = $out['post_in_topic'];
			
		} else {
			
			//
			// Update and get the session information
			//
			$session->update();
			
			//
			// Include the page header
			//
			require(ROOT_PATH.'sources/page_head.php');
			
			//
			// This post does not exist, show an error
			//
			$template->set_page_title($lang['Error']);
			$template->parse('msgbox', 'global', array(
				'box_title' => $lang['Error'],
				'content' => sprintf($lang['NoSuchPost'], 'ID '.$_GET['post'])
			));
			
			//
			// Include the page header
			//
			require(ROOT_PATH.'sources/page_foot.php');
			
			exit();
			
		}
		
	} else {
		
		$requested_topic = $_GET['id'];
		
	}
	
	//
	// Update and get the session information
	//
	$session->update('topic:'.$requested_topic);
	
	//
	// Include the page header
	//
	require(ROOT_PATH.'sources/page_head.php');
	
	if ( !($result = $db->query("SELECT t.topic_title, t.status_locked, t.status_sticky, t.count_replies, t.forum_id, f.id AS forum_id, f.name AS forum_name, f.status AS forum_status, f.auth FROM ".TABLE_PREFIX."topics t, ".TABLE_PREFIX."forums f WHERE t.id = ".$requested_topic." AND f.id = t.forum_id")) )
		$functions->usebb_die('SQL', 'Unable to get topic information!', __FILE__, __LINE__);
	
	if ( !$db->num_rows($result) ) {
		
		//
		// This topic does not exist, show an error
		//
		$template->set_page_title($lang['Error']);
		$template->parse('msgbox', 'global', array(
			'box_title' => $lang['Error'],
			'content' => sprintf($lang['NoSuchTopic'], 'ID '.$requested_topic)
		));
		
	} else {
		
		$topicdata = $db->fetch_result($result);
		
		if ( $functions->auth($topicdata['auth'], 'read', $topicdata['forum_id']) ) {
			
			//
			// The user may view this topic
			//
			
			$_SESSION['viewed_items']['topic:'.$requested_topic] = time();
			
			$template->set_page_title(htmlspecialchars(stripslashes($topicdata['topic_title'])));
			
			//
			// Make the location bar
			//
			
			$location_bar = '<a href="'.$functions->make_url('index.php').'">'.htmlspecialchars($functions->get_config('board_name')).'</a> '.$template->get_config('locationbar_item_delimiter').' <a href="'.$functions->make_url('forum.php', array('id' => $topicdata['forum_id'])).'">'.htmlspecialchars(stripslashes($topicdata['forum_name'])).'</a> '.$template->get_config('locationbar_item_delimiter').' '.htmlspecialchars(stripslashes($topicdata['topic_title']));
			$template->parse('location_bar', 'global', array(
				'location_bar' => $location_bar
			));
			
			//
			// Get all the posts in one query
			//
			
			$forum_moderators = $functions->get_mods_list($topicdata['forum_id']);
			
			$new_topic_link = ( $functions->auth($topicdata['auth'], 'post', $topicdata['forum_id']) && ( $topicdata['forum_status'] || $functions->get_user_level() == 3 ) ) ? '<a href="'.$functions->make_url('post.php', array('forum' => $topicdata['forum_id'])).'"><img src="templates/'.$functions->get_config('template').'/gfx/'.$functions->get_config('language').'/'.$template->get_config('new_topic_button').'" alt="'.$lang['PostNewTopic'].'" /></a>' : '';
			
			$reply_link = ( ( !$topicdata['status_locked'] || $functions->auth($topicdata['auth'], 'lock', $topicdata['forum_id']) ) && ( $topicdata['forum_status'] || $functions->get_user_level() == 3 ) && $functions->auth($topicdata['auth'], 'reply', $topicdata['forum_id']) ) ? '<a href="'.$functions->make_url('post.php', array('topic' => $requested_topic)).'"><img src="templates/'.$functions->get_config('template').'/gfx/'.$functions->get_config('language').'/'.$template->get_config('reply_button').'" alt="'.$lang['PostReply'].'" /></a>' : '';
			
			//
			// Get page number
			//
			$numpages = ceil(intval($topicdata['count_replies']+1) / $functions->get_config('posts_per_page'));
			if ( empty($post_in_topic) )
				$page = ( !empty($_GET['page']) && is_numeric($_GET['page']) && intval($_GET['page']) <= $numpages ) ? intval($_GET['page']) : 1;
			else
				$page = ceil(intval($post_in_topic) / $functions->get_config('posts_per_page'));
			$limit_start = ( $page - 1 ) * $functions->get_config('posts_per_page');
			$limit_end = $functions->get_config('posts_per_page');
			$page_links = $functions->make_page_links($numpages, $page, $topicdata['count_replies']+1, $functions->get_config('posts_per_page'), 'topic.php', $requested_topic);
			
			//
			// Output the posts
			//
			$template->parse('topic_header', 'topic', array(
				'topic_name' => '<a href="'.$functions->make_url('topic.php', array('id' => $requested_topic)).'">'.htmlspecialchars(stripslashes($topicdata['topic_title'])).'</a>',
				'forum_moderators' => sprintf($lang['Moderators'], $forum_moderators),
				'new_topic_link' => $new_topic_link,
				'reply_link' => $reply_link,
				'page_links' => $page_links,
				'author' => $lang['Author'],
				'post' => $lang['Post']
			));
			
			$avatars_query_part = ( !$functions->get_config('hide_avatars') ) ? ', u.avatar_type, u.avatar_remote' : '';
			$userinfo_query_part = ( !$functions->get_config('hide_userinfo') ) ? ', u.posts, u.regdate, u.location' : '';
			$signatures_query_part1 = ( !$functions->get_config('hide_signatures') ) ? ', p.enable_sig' : '';
			$signatures_query_part2 = ( !$functions->get_config('hide_signatures') ) ? ', u.signature' : '';
			
			if ( !($result = $db->query("SELECT p.id, p.poster_id, p.poster_guest, p.poster_ip_addr, p.content, p.post_time, p.enable_bbcode, p.enable_smilies".$signatures_query_part1.", p.enable_html, p.post_edit_time, p.post_edit_by, u.name AS poster_name, u.level AS poster_level, u.rank".$avatars_query_part.$userinfo_query_part.$signatures_query_part2." FROM ( ".TABLE_PREFIX."posts p LEFT JOIN ".TABLE_PREFIX."members u ON p.poster_id = u.id ) WHERE p.topic_id = ".$requested_topic." ORDER BY p.post_time ASC LIMIT ".$limit_start.", ".$limit_end)) )
				$functions->usebb_die('SQL', 'Unable to get posts in topic!', __FILE__, __LINE__);
			
			$i = ( $page - 1 ) * $functions->get_config('posts_per_page');
			
			while ( $postsdata = $db->fetch_result($result) ) {
				
				//
				// Loop through the posts
				//
				
				//
				// Used for switching colors in template
				//
				$colornum = ( !isset($colornum) || $colornum !== 1 ) ? 1 : 2;
				
				//
				// Post count
				//
				$i++;
				
				//
				// This poster was logged in
				//
				if ( !empty($postsdata['poster_id']) ) {
					
					//
					// Its name and profile link
					//
					$poster_name = $functions->make_profile_link($postsdata['poster_id'], $postsdata['poster_name'], $postsdata['poster_level']);
					
					//
					// Its rank
					// If he has a custom rank, use it, otherwise use the level information
					//
					if ( !empty($postsdata['rank']) ) {
						
						$poster_rank = stripslashes($postsdata['rank']);
						
					} else {
						
						switch ( $postsdata['poster_level'] ) {
							
							case 3:
								$poster_rank = $lang['Administrator'];
								break;
							case 2:
								$poster_rank = $lang['Moderator'];
								break;
							case 1:
								$poster_rank = $lang['Member'];
								break;
							
						}
						
					}
					
					//
					// User's avatar
					//
					if ( $functions->get_config('hide_avatars') || !$postsdata['avatar_type'] )
						$avatar = '';
					elseif ( intval($postsdata['avatar_type']) === 1 )
						$avatar = '<img src="'.$postsdata['avatar_remote'].'" alt="" />';
					
				} else {
					
					//
					// The poster was a guest
					//
					$poster_name = $postsdata['poster_guest'];
					$poster_rank = $lang['Guest'];
					$avatar = '';
					
				}
				
				
				$topic_title  = ( $i > 1 ) ? $lang['Re'].' ' : '';
					$topic_title .= htmlspecialchars(stripslashes($topicdata['topic_title']));
				
				//
				// Links used to control posts: quote, edit, delete...
				//
				$post_links = array();
				if ( $session->sess_info['user_id'] && $postsdata['poster_id'] == $session->sess_info['user_id'] || $functions->auth($topicdata['auth'], 'edit', $topicdata['forum_id']) )
					$post_links[] = '<a href="'.$functions->make_url('edit.php', array('post' => $postsdata['id'])).'"><img src="templates/'.$functions->get_config('template').'/gfx/'.$functions->get_config('language').'/'.$template->get_config('edit_button').'" alt="'.$lang['Edit'].'" /></a>';
				if ( $functions->auth($topicdata['auth'], 'delete', $topicdata['forum_id']) )
					$post_links[] = '<a href="'.$functions->make_url('edit.php', array('post' => $postsdata['id'], 'act' => 'delete')).'"><img src="templates/'.$functions->get_config('template').'/gfx/'.$functions->get_config('language').'/'.$template->get_config('delete_button').'" alt="'.$lang['Delete'].'" /></a>';
				if ( ( !$topicdata['status_locked'] || $functions->auth($topicdata['auth'], 'lock', $topicdata['forum_id']) ) && ( $topicdata['forum_status'] || $functions->get_user_level() == 3 ) && $functions->auth($topicdata['auth'], 'reply', $topicdata['forum_id']) )
					$post_links[] = '<a href="'.$functions->make_url('post.php', array('topic' => $requested_topic, 'quotepost' => $postsdata['id'])).'"><img src="templates/'.$functions->get_config('template').'/gfx/'.$functions->get_config('language').'/'.$template->get_config('quote_button').'" alt="'.$lang['Quote'].'" /></a>';
				if ( count($post_links) )
					$post_links = join(' ', $post_links);
				else
					$post_links = '';
				
				if ( $postsdata['post_edit_time'] ) {
					
					if ( !($result2 = $db->query("SELECT name, level FROM ".TABLE_PREFIX."members WHERE id = ".$postsdata['post_edit_by'])) )
						$functions->usebb_die('SQL', 'Unable to get post editer!', __FILE__, __LINE__);
					$editer_info = $db->fetch_result($result2);
					$post_editinfo = sprintf($template->get_config('post_editinfo_format'), sprintf($lang['PostEditInfo'], $functions->make_profile_link($postsdata['post_edit_by'], $editer_info['name'], $editer_info['level']), $functions->make_date($postsdata['post_edit_time'])));
					
				} else {
					
					$post_editinfo = '';
					
				}
				
				//
				// Output the post
				//
				$template->parse('topic_post', 'topic', array(
					'poster_name' => $poster_name,
					'poster_rank' => $poster_rank,
					'poster_avatar' => $avatar,
					'posts' => ( !empty($postsdata['poster_id']) && !$functions->get_config('hide_userinfo') ) ? $lang['Posts'].': '.$postsdata['posts'] : '',
					'registered' => ( !empty($postsdata['poster_id']) && !$functions->get_config('hide_userinfo') ) ? $lang['Registered'].': '.date('M y', $postsdata['regdate']) : '',
					'location' => ( !empty($postsdata['poster_id']) && !empty($postsdata['location']) && !$functions->get_config('hide_userinfo') ) ? $lang['Location'].': '.htmlspecialchars(stripslashes($postsdata['location'])) : '',
					'topic_title' => $topic_title,
					'post_anchor' => '<a href="'.$functions->make_url('topic.php', array('post' => $postsdata['id'])).'#post'.$postsdata['id'].'" name="post'.$postsdata['id'].'">#'.$i.'</a>',
					'post_date' => $functions->make_date($postsdata['post_time']),
					'post_links' => $post_links,
					'post_content' => $functions->markup(stripslashes($postsdata['content']), $postsdata['enable_bbcode'], $postsdata['enable_smilies'], $postsdata['enable_html']),
					'poster_sig' => ( !$functions->get_config('hide_signatures') && !empty($postsdata['signature']) && $postsdata['enable_sig'] ) ? sprintf($template->get_config('sig_format'), $functions->markup(stripslashes($postsdata['signature']), $functions->get_config('sig_allow_bbcode'), $functions->get_config('sig_allow_smilies'))) : '',
					'post_editinfo' => $post_editinfo,
					'poster_ip_addr' => ( !empty($postsdata['poster_ip_addr']) && $functions->get_user_level() == 3 ) ? sprintf($lang['ViewingIP'], $postsdata['poster_ip_addr']) : '',
					'colornum' => $colornum
				));
				
			}
			
			//
			// Links for controlling topics: delete, move, lock, sticky...
			//
			$action_links = array();
			if ( $functions->auth($topicdata['auth'], 'delete', $topicdata['forum_id']) )
				$action_links[] = '<a href="'.$functions->make_url('edit.php', array('topic' => $requested_topic, 'act' => 'delete')).'">'.$lang['DeleteTopic'].'</a>';
			if ( $functions->auth($topicdata['auth'], 'move', $topicdata['forum_id']) && intval($functions->get_stats('forums')) > 1 )
				$action_links[] = '<a href="'.$functions->make_url('edit.php', array('topic' => $requested_topic, 'act' => 'move')).'">'.$lang['MoveTopic'].'</a>';
			if ( $functions->auth($topicdata['auth'], 'lock', $topicdata['forum_id']) ) {
				
				if ( $topicdata['status_locked'] )
					$action_links[] = '<a href="'.$functions->make_url('edit.php', array('topic' => $requested_topic, 'act' => 'unlock')).'">'.$lang['UnlockTopic'].'</a>';
				else
					$action_links[] = '<a href="'.$functions->make_url('edit.php', array('topic' => $requested_topic, 'act' => 'lock')).'">'.$lang['LockTopic'].'</a>';
				
			}
			if ( $functions->auth($topicdata['auth'], 'sticky', $topicdata['forum_id']) ) {
				
				if ( $topicdata['status_sticky'] )
					$action_links[] = '<a href="'.$functions->make_url('edit.php', array('topic' => $requested_topic, 'act' => 'unsticky')).'">'.$lang['MakeNormalTopic'].'</a>';
				else
					$action_links[] = '<a href="'.$functions->make_url('edit.php', array('topic' => $requested_topic, 'act' => 'sticky')).'">'.$lang['MakeSticky'].'</a>';
				
			}
			$action_links = join(' '.$template->get_config('item_delimiter').' ', $action_links);
			
			$template->parse('topic_footer', 'topic', array(
				'new_topic_link' => $new_topic_link,
				'reply_link' => $reply_link,
				'page_links' => $page_links,
				'action_links' => $action_links
			));
			
			//
			// Neat feature: the quick reply
			// Only shown if enabled, if user can reply and if user can post in lcoked forum...
			//
			if ( $functions->get_config('enable_quickreply') && ( !$topicdata['status_locked'] || $functions->auth($topicdata['auth'], 'lock', $topicdata['forum_id']) ) && ( $topicdata['forum_status'] || $functions->get_user_level() == 3 ) && $functions->auth($topicdata['auth'], 'reply', $topicdata['forum_id']) ) {
				
				//
				// Get session saved guest's username if there is one
				//
				$username = ( !$session->sess_info['user_id'] && !empty($_SESSION['user']) ) ? $_SESSION['user'] : '';
				
				$template->parse('quick_reply', 'topic', array(
					'form_begin' => '<form action="'.$functions->make_url('post.php', array('topic' => $requested_topic)).'" method="post" name="msgpost">',
					'quick_reply' => $lang['QuickReply'],
					'username' => $lang['Username'],
					'username_input' => ( $session->sess_info['user_id'] ) ? '<a href="'.$functions->make_url('profile.php', array('id' => $session->sess_info['user_info']['id'])).'">'.$session->sess_info['user_info']['name'].'</a>' : '<input type="text" size="25" maxlength="'.$functions->get_config('username_max_length').'" name="user" value="'.$username.'" />',
					'content' => $lang['Content'],
					'content_input' => '<textarea rows="'.$template->get_config('quick_reply_textarea_rows').'" cols="'.$template->get_config('textarea_cols').'" name="content"></textarea>',
					'submit_button' => '<input type="submit" name="submit" value="'.$lang['PostReply'].'" /><input type="hidden" name="enable_bbcode" value="1" /><input type="hidden" name="enable_smilies" value="1" /><input type="hidden" name="enable_sig" value="1" />',
					'preview_button' => '<input type="submit" name="preview" value="'.$lang['Preview'].'" />',
					'reset_button' => '<input type="reset" value="'.$lang['Reset'].'" />',
					'form_end' => '</form>'
					,'bbcodes_panel' => str_replace(array('{form}', '{element}'), array('msgpost', 'content'), $bbcodes_panel)
				));
				
			}
			
			$template->parse('location_bar', 'global', array(
				'location_bar' => $location_bar
			));
			
			//
			// Update views count
			//
			if ( !($result = $db->query("UPDATE ".TABLE_PREFIX."topics SET count_views = count_views+1 WHERE id = ".$requested_topic)) )
				$functions->usebb_die('SQL', 'Unable to update topic views count!', __FILE__, __LINE__);
			
		} else {
			
			//
			// The user is not granted to view this topic
			//
			$functions->redir_to_login();
			
		}
		
	}
	
	//
	// Include the page footer
	//
	require(ROOT_PATH.'sources/page_foot.php');
	
} else {
	
	//
	// There's no forum ID! Get us back to the index...
	//
	header('Location: '.$functions->get_config('board_url').$functions->make_url('index.php', array(), false));
	
}

?>
