<?php

/*
	Copyright (C) 2003-2004 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/profile.php,v 1.21 2004/06/23 09:00:08 pc_freak Exp $
	
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
if ( !empty($_GET['id']) && is_numeric($_GET['id']) ) {
	
	//
	// Update and get the session information
	//
	$session->update('profile:'.$_GET['id']);
	
	//
	// Include the page header
	//
	require(ROOT_PATH.'sources/page_head.php');
	
	if ( !$functions->get_config('guests_can_view_profiles') && $session->sess_info['user_id'] == 0 ) {
		
		$functions->redir_to_login();
		
	} else {
		
		//
		// Get the user information
		//
		if ( $_GET['id'] == $session->sess_info['user_id'] ) {
			
			//
			// This user is viewing his own profile, so we don't need a new query
			//
			$own_profile = TRUE;
			
		} else {
			
			//
			// This user is not viewing his own profile, so we need a new query
			//
			$own_profile = FALSE;
			
			if ( !($result = $db->query("SELECT * FROM ".TABLE_PREFIX."users WHERE id = ".$_GET['id'])) )
				$functions->usebb_die('SQL', 'Unable to get user information!', __FILE__, __LINE__);
			
		}
		
		if ( $db->num_rows($result) || $own_profile ) {
			
			//
			// The user exists, show its profile
			//
			
			if ( $own_profile )
				$profiledata = $session->sess_info['user_info'];
			else
				$profiledata = $db->fetch_result($result);
			
			$template->set_page_title(sprintf($lang['Profile'], $profiledata['name']));
			
			if ( $own_profile ) {
				
				//
				// View the panel menu if the user is viewing his own profile
				//
				$template->parse('panel_menu', array(
					'yourpanel' => $lang['YourPanel'],
					'panel_home' => '<a href="'.$functions->make_url('panel.php').'">'.$lang['PanelHome'].'</a>',
					'view_profile' => '<a href="'.$functions->make_url('profile.php', array('id' => $session->sess_info['user_info']['id'])).'"><b>'.$lang['ViewProfile'].'</b></a>',
					'panel_profile' => '<a href="'.$functions->make_url('panel.php', array('act' => 'editprofile')).'">'.$lang['EditProfile'].'</a>',
					'panel_options' => '<a href="'.$functions->make_url('panel.php', array('act' => 'editoptions')).'">'.$lang['EditOptions'].'</a>',
					'panel_passwd' => '<a href="'.$functions->make_url('panel.php', array('act' => 'editpwd')).'">'.$lang['EditPasswd'].'</a>',
				    'panel_messenger' => '<a href="'. $functions->make_url('panel.php', array('act' => 'messenger')).'">'.$lang['MyMessenger'].'</a>',

                
                ));
				
			}
			
			switch ( $profiledata['level'] ) {
				
				case 3:
					$level = $lang['Administrator'];
					break;
				case 2:
					$level = $lang['Moderator'];
					break;
				case 1:
					$level = $lang['Member'];
					break;
				
			}
			
			if ( $profiledata['last_login_show'] || $own_profile || $functions->get_user_level() == 3 )
				$last_login = ( $profiledata['last_login'] != 0 ) ? $functions->make_date($profiledata['last_login']) : $lang['Never'];
			else
				$last_login = $lang['Hidden'];
			
			if ( !$profiledata['avatar_type'] )
				$avatar = '';
			elseif ( intval($profiledata['avatar_type']) === 1 )
				$avatar = '<img src="'.$profiledata['avatar_remote'].'" alt="'.$profiledata['name'].'" />';
			
			$days_since_registration = ( ( gmmktime() - $profiledata['regdate'] ) / 86400 );
			if ( $days_since_registration <= 1 )
				$posts_per_day = $profiledata['posts'];
			else
				$posts_per_day = round($profiledata['posts'] / $days_since_registration, 2);
			
			$template->parse('profile', array(
				'title'         => sprintf($lang['Profile'], $profiledata['name']),
				'username'      => $lang['Username'],
				'username_v'    => $profiledata['name'],
				'userid'        => $lang['UserID'],
				'userid_v'      => $_GET['id'],
				'level'         => $lang['Level'],
				'level_v'       => $level,
				'rank'          => $lang['Rank'],
				'rank_v'        => ( !empty($profiledata['rank']) ) ? stripslashes($profiledata['rank']) : '',
				'avatar'        => $lang['Avatar'],
				'avatar_v'      => $avatar,
				'regdate'       => $lang['Registered'],
				'regdate_v'     => $functions->make_date($profiledata['regdate']),
				'posts'         => $lang['Posts'],
				'posts_v'       => $profiledata['posts'],
				'postsperday'   => $lang['PostsPerDay'],
				'postsperday_v' => $posts_per_day,
				'lastlogin'     => $lang['LastLogin'],
				'lastlogin_v'   => $last_login,
				'location'      => $lang['Location'],
				'location_v'    => htmlentities(stripslashes($profiledata['location'])),
				'website'       => $lang['Website'],
				'website_v'     => ( !empty($profiledata['website']) ) ? '<a href="'.htmlentities(stripslashes($profiledata['website'])).'" target="_blank">'.htmlentities(stripslashes($profiledata['website'])).'</a>' : '',
				'occupation'    => $lang['Occupation'],
				'occupation_v'  => htmlentities(stripslashes($profiledata['occupation'])),
				'interests'     => $lang['Interests'],
				'interests_v'   => htmlentities(stripslashes($profiledata['interests'])),
				'signature'     => $lang['Signature'],
				'signature_v'   => $functions->markup(stripslashes($profiledata['signature']), $functions->get_config('sig_allow_bbcode'), $functions->get_config('sig_allow_smilies')),
				'contact_info'  => $lang['ContactInfo'],
				'email'         => $lang['Email'],
				'email_v'       => $functions->show_email($profiledata),
				'msnm'          => $lang['MSNM'],
				'msnm_v'        => ( preg_match(EMAIL_PREG, $profiledata['msnm']) ) ? '<a href="http://members.msn.com/'.$profiledata['msnm'].'" target="_blank">'.$profiledata['msnm'].'</a>' : htmlentities(stripslashes($profiledata['msnm'])),
				'yahoom'        => $lang['YahooM'],
				'yahoom_v'      => ( !empty($profiledata['yahoom']) ) ? '<a href="http://edit.yahoo.com/config/send_webmesg?.target='.htmlentities(stripslashes($profiledata['yahoom'])).'" target="_blank">'.htmlentities(stripslashes($profiledata['yahoom'])).'</a>' : '',
				'aim'           => $lang['AIM'],
				'aim_v'         => ( !empty($profiledata['aim']) ) ? '<a href="aim:goim?screenname='.htmlentities(stripslashes($profiledata['aim'])).'&amp;message=Hi.+Are+you+there?">'.htmlentities(stripslashes($profiledata['aim'])).'</a>' : '',
				'icq'           => $lang['ICQ'],
				'icq_v'         => ( is_numeric($profiledata['icq']) ) ? '<a href="http://web.icq.com/whitepages/about_me/1,,,00.html?Uin='.intval($profiledata['icq']).'" target="_blank">'.intval($profiledata['icq']).'</a>' : htmlentities(stripslashes($profiledata['icq'])),
				'icq_status'    => ( is_numeric($profiledata['icq']) ) ? '<img src="http://web.icq.com/whitepages/online?icq='.intval($profiledata['icq']).'&amp;img=25" alt="'.intval($profiledata['icq']).'" />' : '',
				'jabber'        => $lang['Jabber'],
				'jabber_v'      => htmlentities(stripslashes($profiledata['jabber']))
			));
			
		} else {
			
			//
			// This user does not exist, show an error
			//
			$template->set_page_title($lang['Error']);
			$template->parse('msgbox', array(
				'box_title' => $lang['Error'],
				'content' => sprintf($lang['NoSuchMember'], 'ID '.$_GET['id'])
			));
			
		}
		
	}
	
	//
	// Include the page footer
	//
	require(ROOT_PATH.'sources/page_foot.php');
	
} else {
	
	//
	// There's no user ID! Get us back to the index...
	//
	header('Location: '.$functions->make_url('index.php', array(), false));
	
}

?>
