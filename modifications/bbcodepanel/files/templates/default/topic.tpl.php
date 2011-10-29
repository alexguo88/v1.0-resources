<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/templates/default/topic.tpl.php,v 1.15 2005/02/08 19:05:34 pc_freak Exp $
	
	This file is part of UseBB.
	
	UseBB is free software; you can redistribute it and/or modify
	it under the terms of the GNU General Public License as published by
	the Free Software Foundation; either version 2 of the License, or
	(at your option) any later version.
	
	UseBB is distributed in the hope that it will be useful,
	but WITHOUT ANY WARRANTY; without even the implied warranty of
	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.	See the
	GNU General Public License for more details.
	
	You should have received a copy of the GNU General Public License
	along with UseBB; if not, write to the Free Software
	Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA	02111-1307	USA
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Topic templates
//

$templates['topic_header'] = '
	<h3 id="forumname">{topic_name}</h3>
	<p id="forummods">{forum_moderators}</p>
	<p id="toolbartop">{new_topic_link} {reply_link}</p>
	<p id="pagelinkstop">{page_links}</p>
	<table class="maintable">
		<tr>
			<th>{author}</th>
			<th>{post}</th>
		</tr>
';

$templates['topic_post'] = '
		<tr class="tr{colornum}">
			<td class="postername">
				{poster_name}
			</td>
			<td class="postinfo">
				<div class="postlinks">{post_links}</div>
				<div class="postdate">{post_anchor} {post_date}</div>
			</td>
		</tr>
		<tr class="tr{colornum}">
			<td class="posterinfo">
				{poster_rank}
				<div class="avatar">{poster_avatar}</div>
				<div class="field">{registered}</div>
				<div class="field">{posts}</div>
				<div class="field">{location}</div>
			</td>
			<td class="postcontent">
				<div class="post">{post_content}{poster_sig}{post_editinfo}</div>
				<div class="poster-ip-addr">{poster_ip_addr}</div>
			</td>
		</tr>
		<tr class="postseperator">
			<td colspan="2">&nbsp;</td>
		</tr>
';

$templates['topic_footer'] = '
	</table>
	<p id="toolbarbottom">{new_topic_link} {reply_link}</p>
	<p id="pagelinksbottom">{page_links}</p>
	<div id="bottomfix"></div>
	<p id="actionlinks">{action_links}</p>
';

$templates['quick_reply'] = '
	{form_begin}
	<table class="maintable">
		<tr>
			<th colspan="2">{quick_reply}</th>
		</tr>
		<tr>
			<td class="fieldtitle">{username}</td><td>{username_input}</td>
		</tr>
		<tr>
			<td colspan="2">{bbcodes_panel}{content_input}</td>
		</tr>
		<tr>
			<td colspan="2" class="formcontrols">{submit_button}&nbsp;{preview_button}</td>
		</tr>
	</table>
	{form_end}
';

?>
