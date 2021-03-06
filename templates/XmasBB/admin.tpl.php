<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/templates/default/admin.tpl.php,v 1.5 2006/01/07 14:02:28 pc_freak Exp $
	
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

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Admin templates
//

$templates['login_form'] = '
	{form_begin}
	<table id="adminlogin">
		<tr>
			<th colspan="2">{l_AdminLogin}</th>
		</tr>
		<tr>
			<td colspan="2">{l_AdminPasswordExplain}</td>
		</tr>
		<tr>
			<td class="fieldtitle">{l_Password}</td><td>{password_input}</td>
		</tr>
		<tr>
			<td colspan="2" class="formcontrols">{submit_button}</td>
		</tr>
	</table>
	{form_end}
';

$templates['main'] = '
	<div id="adminmenu">
		{admin_menu}
	</div>
	
	<h1 id="admintitle">{admin_title}</h1>
	
	<div id="admincontent">
		{admin_content}
	</div>
	
	<div id="adminbottomfix"></div>
';

?>
