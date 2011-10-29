<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/templates/default/stafflist.tpl.php,v 1.6 2006/02/08 16:42:28 pc_freak Exp $
	
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
// Member list templates
//

$templates['header'] = '
	<table class="maintable">
		<tr>
			<th>{l_Username} / {l_RealName}</th>
			<th>{l_Rank}</th>
			<th>{l_Email}</th>
		</tr>
';

$templates['cat_header'] = '
		<tr>
			<td colspan="3" class="forumcat">&raquo; {level}</td>
		</tr>
';

$templates['user'] = '
		<tr>
			<td>{username}<div class="jump-in-data">{real_name}</div></td>
			<td>{rank}</td>
			<td>{email}</td>
		</tr>
';

$templates['cat_footer'] = '
';

$templates['footer'] = '
	</table>
';

?>
