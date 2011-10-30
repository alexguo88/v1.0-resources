<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_English.php,v 1.92 2007/01/01 11:58:43 pc_freak Exp $
	
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
	Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

	This file was translated into Hebrew by Dan_y2k.
	Translation website: http://y2k.official.ws
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = '������� ���� �����';
$lang['AdminPasswordExplain'] = '������ ���������, ��� ���� ������ �� ����� ������ ��� ��� ������ ���� ��� ���� ���� ������.';

$lang['RunningBadACPModule'] = 'UseBB ���� ����� ����� ����� �� ���� ���� �� ���� �������� ��� (������� $usebb_module �� ���� �/�� ���� ���� ������� run_module()).';

$lang['Category-main'] = '����';
$lang['Category-forums'] = '�������';
$lang['Category-various'] = '�����';
$lang['Category-members'] = '�����';
$lang['Category-pruning'] = '�����';
$lang['Category-security'] = '�����';
$lang['Item-index'] = '������ ��� ���� ���� ������';
$lang['Item-version'] = '����� �����';
$lang['Item-config'] = '����� �����';
$lang['Item-categories'] = '����� ��������';
$lang['Item-forums'] = '����� �������';
$lang['Item-iplookup'] = '����� ����� IP';
$lang['Item-sqltoolbox'] = '���� ��� SQL';
$lang['Item-modules'] = '������ ��� ���� ���� ������';
$lang['Item-members'] = '����� �����';
$lang['Item-delete_members'] = '����� �����';
$lang['Item-register_members'] = '����� �����';
$lang['Item-activate_members'] = '����� �����';
$lang['Item-prune_forums'] = '����� �������';
$lang['Item-prune_members'] = '����� �����';
$lang['Item-dnsbl'] = '������ DNSBL';
$lang['Item-badwords'] = '���� ����� ����';
$lang['Item-mass_email'] = '���� �������� ��� ������';
$lang['Item-bans'] = '����� ������';

$lang['IndexWelcome'] = '���� ��� ���� ���� ���� ������ �� ����� UseBB ���. ���� ��� ���� ����� �� �� ������� �� ������ ���, ����� ������, ����� �� �������, �����, ������.';
$lang['IndexSystemInfo'] = '���� �����';
$lang['IndexUseBBVersion'] = '����� UseBB';
$lang['IndexPHPVersion'] = '����� PHP';
$lang['IndexSQLServer'] = '������ ��� �-SQL';
$lang['IndexHTTPServer'] = '��� HTTP';
$lang['IndexOS'] = '����� �����';
$lang['IndexServerLoad'] = '���� ���� ���';
$lang['IndexLinks'] = '�������';
$lang['IndexUnactiveMembers'] = '����� ��� ������';
$lang['IndexNoUnactiveMembers'] = '��� ����� �������� ������ ���� �����.';
$lang['IndexOneUnactiveMember'] = '���� ��� ��� ������ ������ ���� �����.';
$lang['IndexMoreUnactiveMembers'] = '���� %d ����� �������� ������ ���� �����.';
$lang['IndexWarning'] = '�����!';
$lang['IndexUnwritableConfig'] = '���� ��, %s ���� ���� ������ �� ��� PHP. �� ���� �����. ��� ����� ���� ���� ������, ��� �� ������ ����� �� ����� FTP �� ��� ����� chmod (0777) ����. ��� ��� �� ������ ��� ����� �� �����.';

$lang['VersionFailed'] = '������ �� ���� ����� ��� ������ ������� (%s ������). ����� ���� ������ ������ %s ��� ����� ��� �� �� ������ �������.';
$lang['VersionLatestVersionTitle'] = '���� ������ �������';
$lang['VersionLatestVersion'] = '����� �� ������ �� ��� UseBB %s ����� ������ ������ �������.';
$lang['VersionNeedUpdateTitle'] = '����� ���� �����!';
$lang['VersionNeedUpdate'] = '����� �� ����� �� UseBB ����� %s ������ ������� ������ %s ��� ������ ������� ���� �����! ��� �-%s ��� ������ �� ������ �������.';
$lang['VersionBewareDevVersionsTitle'] = '����� ����� �����';
$lang['VersionBewareDevVersions'] = '����� �� ����� �� ����� %s ����� ��� %s ��� ����� ������ ������ �������. ����� ������� ��� ������� ������� ����� ������ �������� �����.';

$lang['ConfigInfo'] = '����� �� ��� ���� ����� �� �� ������� �� ����� �-UseBB ���. ����� ��� ����� ����� ���� �������. ���� �������� �� ������ (*) ���� ������.';
$lang['ConfigSet'] = '������ ����� �����. ���� ���� ����� ���� ���� ����� ���� ���.';
$lang['ConfigMissingFields'] = '��� ���� ��� ����� �� �� ������ (������ ���� ���� ���� ���� ����� ����). ����� ���� �� ����� �����:';
$lang['ConfigBoard-type'] = '���';
$lang['ConfigBoard-server'] = '���';
$lang['ConfigBoard-username'] = '�� �����';
$lang['ConfigBoard-passwd'] = '�����';
$lang['ConfigBoard-dbname'] = '�� ���� �������';
$lang['ConfigBoard-prefix'] = '������ ����';
$lang['ConfigBoardSection-general'] = '����� �����';
$lang['ConfigBoardSection-cookies'] = '������';
$lang['ConfigBoardSection-cookies-info'] = '��� ���� ������ �� ��� ����� ���� ����� �������.';
$lang['ConfigBoardSection-sessions'] = '���������';
$lang['ConfigBoardSection-page_counts'] = '������ ����';
$lang['ConfigBoardSection-date_time'] = '������� &amp; �����';
$lang['ConfigBoardSection-date_time-info'] = '������ �� ������� �������� �����.';
$lang['ConfigBoardSection-database'] = '����� ���� ������';
$lang['ConfigBoardSection-database-info'] = '��� �� �� �� ����� ���� �������� ����� ������.';
$lang['ConfigBoardSection-advanced'] = '������ �������';
$lang['ConfigBoardSection-email'] = '���� ��������';
$lang['ConfigBoardSection-additional'] = '������ ������';
$lang['ConfigBoardSection-user_rights'] = '������ �����';
$lang['ConfigBoardSection-min_levels'] = '���� ���� ���������';
$lang['ConfigBoardSection-min_levels-info'] = '��� �� ����� ���������� ������� ���� ��� ����.';
$lang['ConfigBoardSection-layout'] = '������ ��������';
$lang['ConfigBoardSection-security'] = '�����';
$lang['ConfigBoard-admin_email'] = '����� ���� �������� �� ���� ������';
$lang['ConfigBoard-board_descr'] = '����� ������';
$lang['ConfigBoard-board_keywords'] = '����� ���� �� ������';
$lang['ConfigBoard-board_keywords-info'] = '������� �� ��� ������.';
$lang['ConfigBoard-board_name'] = '�� ������';
$lang['ConfigBoard-date_format'] = '���� �����';
$lang['ConfigBoard-date_format-info'] = '���� ������ ��� �-date() �� PHP.';
$lang['ConfigBoard-language'] = '��� ����� �����';
$lang['ConfigBoard-language-info'] = '����� �� �� ������ ��� ������� ����� ������.';
$lang['ConfigBoard-session_name'] = '�� �������';
$lang['ConfigBoard-session_name-info'] = '�� ���� ������ �������, ��� ������. ���� ����� ����� ��� ���.';
$lang['ConfigBoard-template'] = '����� ����� �����';
$lang['ConfigBoard-template-info'] = '����� �� �� ������ ��� ������� ����� ������.';
$lang['ConfigBoard-active_topics_count'] = '����� ������ ������';
$lang['ConfigBoard-avatars_force_height'] = '����� ���� �� ����� ������� (�������)';
$lang['ConfigBoard-avatars_force_width'] = '����� ���� �� ������� ������� (�������)';
$lang['ConfigBoard-avatars_force_width-info'] = '���� ��� �� ��� �������.';
$lang['ConfigBoard-debug'] = '��� ����� ������';
$lang['ConfigBoard-email_view_level'] = '��� ����� ����� ��������';
$lang['ConfigBoard-flood_interval'] = '����� ���� (�����)';
$lang['ConfigBoard-members_per_page'] = '����� �����';
$lang['ConfigBoard-online_min_updated'] = '������� ������� ���� ����� ��������';
$lang['ConfigBoard-output_compression'] = '����� ���';
$lang['ConfigBoard-passwd_min_length'] = '���� ����� �������';
$lang['ConfigBoard-posts_per_page'] = '������ �����';
$lang['ConfigBoard-rss_items_count'] = '����� ����� RSS';
$lang['ConfigBoard-search_limit_results'] = '����� ������ ����� �-x ������';
$lang['ConfigBoard-search_nonindex_words_min_length'] = '���� ���� ���� �������� ������';
$lang['ConfigBoard-session_max_lifetime'] = '��� ��� ������� ����� (����)';
$lang['ConfigBoard-show_edited_message_timeout'] = '��� ��� ���� ����� �����';
$lang['ConfigBoard-show_edited_message_timeout-info'] = '�������� ����� ������ ���� ���� ������, ����� ������ ����� �����.';
$lang['ConfigBoard-topicreview_posts'] = '����� ����� ����� ����';
$lang['ConfigBoard-topics_per_page'] = '������ �����';
$lang['ConfigBoard-view_active_topics_min_level'] = '������ ������';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = '����� ������� ������';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = '���� ����������';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = '��� �������� ���� ����� ������ ���� �������� �������';
$lang['ConfigBoard-view_memberlist_min_level'] = '����� �����';
$lang['ConfigBoard-view_search_min_level'] = '���� �����';
$lang['ConfigBoard-view_stafflist_min_level'] = '����� ����';
$lang['ConfigBoard-view_stats_min_level'] = '���� ����������';
$lang['ConfigBoard-view_contactadmin_min_level'] = '����� ����� ��� �� ���� ������';
$lang['ConfigBoard-allow_multi_sess'] = '����� ��� ��������� ��� IP';
$lang['ConfigBoard-board_closed'] = '����� ������';
$lang['ConfigBoard-board_closed-info'] = '����� ����� ����� ����� ������.';
$lang['ConfigBoard-cookie_secure'] = '������ ������';
$lang['ConfigBoard-cookie_secure-info'] = '������ ������� (HTTPS ����)';
$lang['ConfigBoard-cookie_httponly'] = '������ ������ HTTP ����';
$lang['ConfigBoard-cookie_httponly-info'] = '����� ��� httpOnly �������, ����� ���� ����� �������� ��� XSS.';
$lang['ConfigBoard-dst'] = '���� ����� ��� ���';
$lang['ConfigBoard-enable_contactadmin'] = '������ ����� ����� ��� �� ���� ������';
$lang['ConfigBoard-enable_detailed_online_list'] = '������ ����� ������� ������';
$lang['ConfigBoard-enable_forum_stats_box'] = '������ ���� ���������� ������';
$lang['ConfigBoard-enable_memberlist'] = '������ ����� �����';
$lang['ConfigBoard-enable_quickreply'] = '������ ����� �����';
$lang['ConfigBoard-enable_rss'] = '������ ���� RSS';
$lang['ConfigBoard-enable_stafflist'] = '������ ����� ����';
$lang['ConfigBoard-enable_stats'] = '������ ���� ����������';
$lang['ConfigBoard-friendly_urls'] = '������ ������ ���������';
$lang['ConfigBoard-friendly_urls-info'] = '����� Apache �-mod_rewrite. ����� �� ����� ����� ����� ��������.';
$lang['ConfigBoard-guests_can_access_board'] = '������ ������ ���� ������';
$lang['ConfigBoard-guests_can_see_contact_info'] = '������ ������ ����� ���� ����� ��� ���������';
$lang['ConfigBoard-guests_can_view_profiles'] = '������ ������ ����� �������� �����';
$lang['ConfigBoard-hide_avatars'] = '����� �� ������� �������';
$lang['ConfigBoard-hide_signatures'] = '����� �� �������';
$lang['ConfigBoard-hide_userinfo'] = '����� ���� �����';
$lang['ConfigBoard-rel_nofollow'] = '������ nofollow �� Google';
$lang['ConfigBoard-rel_nofollow-info'] = '�� ����� �-Google ������ ��� ������ ��� BB.';
$lang['ConfigBoard-return_to_topic_after_posting'] = '���� ����� ���� ������';
$lang['ConfigBoard-sig_allow_bbcode'] = '������ ��� BB �������';
$lang['ConfigBoard-sig_allow_smilies'] = '������ ������� �������';
$lang['ConfigBoard-sig_max_length'] = '���� ����� �����';
$lang['ConfigBoard-single_forum_mode'] = '��� ����� ����';
$lang['ConfigBoard-single_forum_mode-info'] = '���� �� �� ������ ����� ������ ���� ������ ��������.';
$lang['ConfigBoard-target_blank'] = '������ ��� BB ������ ����� ���';
// $lang['ConfigBoard-target_blank-info'] = '���� ����� ������ ������ XHTML!';
$lang['ConfigBoard-activation_mode'] = '��� �����';
$lang['ConfigBoard-activation_mode0'] = '��� �����';
$lang['ConfigBoard-activation_mode1'] = '����� ����� ��������';
$lang['ConfigBoard-activation_mode2'] = '����� �� ��� ���� �����';
$lang['ConfigBoard-board_closed_reason'] = '���� ����� ������';
$lang['ConfigBoard-board_url'] = '����� ������';
$lang['ConfigBoard-board_url-info'] = '����� ���� ���� ����� ����; ��� ���� ����� �������.';
$lang['ConfigBoard-cookie_domain'] = '������ �����';
$lang['ConfigBoard-cookie_path'] = '���� �����';
$lang['ConfigBoard-session_save_path'] = '���� ����� �������';
$lang['ConfigBoard-session_save_path-info'] = '���� ����� ����� ������� ������� �����; �� ���� ������ �������.';
$lang['ConfigBoard-exclude_forums_active_topics'] = '����� ������� �������� �������';
$lang['ConfigBoard-exclude_forums_rss'] = '����� ������� ����� RSS';
$lang['ConfigBoard-exclude_forums_stats'] = '����� ������� ����� �����������';
$lang['ConfigBoard-timezone'] = '���� ���';
$lang['ConfigBoard-debug0'] = '������';
$lang['ConfigBoard-debug1'] = '���� (��� ���� �������)';
$lang['ConfigBoard-debug2'] = '����� (���� + ������� SQL)';
$lang['ConfigBoard-email_view_level0'] = '����� �� ������ ����� ���������';
$lang['ConfigBoard-email_view_level1'] = '������ ���� ���� ��������';
$lang['ConfigBoard-email_view_level2'] = '���� ���� ����� ���';
$lang['ConfigBoard-email_view_level3'] = '���� �����';
$lang['ConfigBoard-output_compression0'] = '�������';
$lang['ConfigBoard-output_compression1'] = '����� HTML';
$lang['ConfigBoard-output_compression2'] = '������ Gzip';
$lang['ConfigBoard-output_compression3'] = '����� HTML + Gzip';
$lang['ConfigBoard-level0'] = '������';
$lang['ConfigBoard-level1'] = '�����';
$lang['ConfigBoard-level2'] = '����� �������';
$lang['ConfigBoard-level3'] = '����� �����';
$lang['ConfigBoard-enable_acp_modules'] = '������ ������ ��� ���� ���� ������';
$lang['ConfigBoard-disable_registrations'] = '������ ������ �������';
$lang['ConfigBoard-disable_registrations-info'] = '������� ����� ����� ������ ��� ��� ���� ���� ������.';
$lang['ConfigBoard-disable_registrations_reason'] = '���� ������ ������ �������';
$lang['ConfigBoard-allow_duplicate_emails'] = '����� ������ ���� �������� ����';
$lang['ConfigBoard-enable_badwords_filter'] = '������ ���� ����� ����';
$lang['ConfigBoard-enable_ip_bans'] = '������ ����� ����� IP';
$lang['ConfigBoard-show_raw_entities_in_code'] = '���� ������ ������ ���� [code].';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = '���� ���� ��� ����� ����� ����� �-HTML.';
$lang['ConfigBoard-username_min_length'] = '���� �� ����� �������';
$lang['ConfigBoard-username_max_length'] = '���� �� ����� �����';
$lang['ConfigBoard-show_never_activated_members'] = '���� ����� ��� ������ �� ���';
$lang['ConfigBoard-show_never_activated_members-info'] = '���� �� ��� ����� ����������� ������ ������.';
$lang['ConfigBoard-enable_registration_log'] = '������ ���� �����';
$lang['ConfigBoard-enable_registration_log-info'] = '���� ���� ����� ����� ����.';
$lang['ConfigBoard-registration_log_file'] = '���� ���� �����';
$lang['ConfigBoard-registration_log_file-info'] = '���� ������� ������, �� ���� �����.';
$lang['ConfigBoard-enable_email_dns_check'] = '������ ����� DNS �� ����� ���� ��������';
$lang['ConfigBoard-enable_email_dns_check-info'] = '���� ���� �� ��� ����� ��� ������ MX. �� ���� �� ����� �� �� ��������� �������.';
$lang['ConfigBoard-edit_post_timeout'] = '��� ��� ����� �����';
$lang['ConfigBoard-edit_post_timeout-info'] = '����� ���� ����� �� �������� �� ���� x ����� ���� ������.';
$lang['ConfigBoard-disable_xhtml_header'] = '������ ����� XHTML ���� ������ XHTML.';
$lang['ConfigBoard-disable_xhtml_header-info'] = '���� ������ ���� ���� XHTML �� ������� ��� 100% ����� ����. �� ���� ������ ���� ������� ��� ����� XHTML.';
$lang['ConfigBoard-email_reply-to_header'] = '����� ������ �����-��';

$lang['ConfigBoard-email_reply-to_header-info'] = '����� ������-�� ����� ���� ���� ����� ����� ��������� �� ������ (���� ���� ���������).';
$lang['ConfigBoard-mass_email_msg_recipients'] = '����� ����� ����� ���� �������� ��� �������';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = '������ ������ ������ �� ��� ������� ����� ����.';

$lang['CategoriesInfo'] = '���� �� ���� �� �� ������ �� �� ��������� ������ ������� ������ ���.';
$lang['CategoriesAddNewCat'] = '����� ������� ����';
$lang['CategoriesAdjustSortIDs'] = '����� ����� ����� �� ������';
$lang['CategoriesSortAutomatically'] = '����� �������� �������';
$lang['CategoriesNoCatsExist'] = '����� �� ���� ����� �������� ����� �����.';
$lang['CategoriesCatName'] = '�� ��������';
$lang['CategoriesSortID'] = '���� ����� �� ������';
$lang['CategoriesMissingFields'] = '��� ���� ������ ��� �����. ����� ��� ���� �����.';
$lang['CategoriesSortChangesApplied'] = '�������� ��� ������ ����� ������ �����.';
$lang['CategoriesConfirmCatDelete'] = '����� ����� �������';
$lang['CategoriesConfirmCatDeleteContent'] = '��� ���� ���� ���� ����� �� �������� %s? ����� �� ���� ���� �����!';
$lang['CategoriesMoveContents'] = '����� ������ �� �������� �� %s';
$lang['CategoriesDeleteContents'] = '����� ������';
$lang['CategoriesEditingCat'] = '����� �������� %s';

$lang['ForumsInfo'] = '���� �� ���� �� �� ������ �� �� �������� ������ ������� ������ ���.';
$lang['ForumsAddNewForum'] = '����� ����� ���';
$lang['ForumsAdjustSortIDs'] = '����� ����� ����� �� ������';
$lang['ForumsSortAutomatically'] = '����� ������� �������';
$lang['ForumsNoForumsExist'] = '����� �� ���� ����� ������� ����� �����.';
$lang['ForumsForumName'] = '�� ������';
$lang['ForumsCatName'] = '������� �����';
$lang['ForumsDescription'] = '�����';
$lang['ForumsDescriptionExplain'] = '���� �� ���� ������ HTML. �� ��� ���� ������ ������ �������, ���� ���� ����� ������� �-HTML �������� (������ &amp;amp; ����� &amp;).';
$lang['ForumsStatus'] = '���';
$lang['ForumsStatusOpen'] = '����';
$lang['ForumsAutoLock'] = '����� ��������';
$lang['ForumsAutoLockXReplies'] = '����� ���� %s ������.';
$lang['ForumsIncreasePostCount'] = '����� ���� ������ ������';
$lang['ForumsModerators'] = '����� ������';
$lang['ForumsModeratorsExplain'] = '���� ������� (�� ���� �����), ������� �� ��� ������. ��� ������ ������� ������ ������.';
$lang['ForumsModeratorsUnknown'] = '����� �� ������: %s.';
$lang['ForumsHideModsList'] = '����� ����� ����� ������';
$lang['ForumsSortID'] = '���� ����� �� ������';
$lang['ForumsMissingFields'] = '��� ���� ������ ��� �����. ����� ��� ���� �����.';
$lang['ForumsSortChangesApplied'] = '�������� ��� ������ ����� ������ �����.';
$lang['ForumsConfirmForumDelete'] = '����� ����� �����';
$lang['ForumsConfirmForumDeleteContent'] = '��� ���� ���� ���� ����� �� ������ %s? ����� �� ���� ���� �����!';
$lang['ForumsMoveContents'] = '����� ������ �� ������ �� %s';
$lang['ForumsMoveModerators'] = '����� ����� �����, ���� �� �� ����� ������.';
$lang['ForumsDeleteContents'] = '����� ������';
$lang['ForumsEditingForum'] = '����� ������ %s';
$lang['ForumsGeneral'] = '������ ������';
$lang['ForumsAuth'] = '������ �����';
$lang['ForumsAuthNote'] = '������� ���� ������� ��� �������!';
$lang['Forums-level0'] = '������';
$lang['Forums-level1'] = '�����';
$lang['Forums-level2'] = '����� �������';
$lang['Forums-level3'] = '����� �����';
$lang['Forums-auth0'] = '����� ������';
$lang['Forums-auth1'] = '����� ������';
$lang['Forums-auth2'] = '������ ������ �����';
$lang['Forums-auth3'] = '������ ����� �������';
$lang['Forums-auth4'] = '����� ������ �� �����';
$lang['Forums-auth5'] = '����� ������';
$lang['Forums-auth6'] = '����� ������ �������';
$lang['Forums-auth7'] = '����� ������';
$lang['Forums-auth8'] = '������ ������';
$lang['Forums-auth9'] = '������ ���� HTML (�����)';

$lang['IPLookupSearchHostname'] = '����� �� �����';
$lang['IPLookupSearchUsernames'] = '����� ���� �������';
$lang['IPLookupHostname'] = '�� �����';
$lang['IPLookupHostnameNotFound'] = '�� ���� �� ����� �����.';
$lang['IPLookupUsernames'] = '���� �������';
$lang['IPLookupUsernamesNotFound'] = '�� ����� ���� ������� �������.';

$lang['SQLToolboxWarningTitle'] = '����� �����!';
$lang['SQLToolboxWarningContent'] = '����� ��� ����� ���� ������� �����. ����� ALTER, DELETE, TRUNCATE �� ����� ����� �� ������� ������ ����� ��� ���� ���� ������ ���! ����� �� ����� ���� �� ��� ����.';
$lang['SQLToolboxExecuteQuery'] = '����� ������';
$lang['SQLToolboxExecuteQueryInfo'] = '���� ������ SQL ������. ����, ������ ����� ����� ����� ������.';
$lang['SQLToolboxExecute'] = '�����';
$lang['SQLToolboxExecutedSuccessfully'] = '������ ����� ������.';
$lang['SQLToolboxMaintenance'] = '������';
$lang['SQLToolboxMaintenanceInfo'] = '�������� ��� ������� (�������) �� ������ �-SQL �������� �� ��� UseBB. ����� ������� ������ ������ ����� ���� ����� ������� ������.';
$lang['SQLToolboxRepairTables'] = '����� ������';
$lang['SQLToolboxOptimizeTables'] = '����� ������';
$lang['SQLToolboxMaintenanceNote'] = '����: �� ���� ����� ������ ������ ����� ����� �������.';

$lang['ModulesInfo'] = '������ ��� ���� ���� ������ ������� �� ������ �� ��� ���� ���� ������ �� ������� ��� �� ������ ������ �� ��� ������� ��� �����. ������� ������ ������ ��� ��� UseBB: %s.';
$lang['ModulesLongName'] = '�� ����';
$lang['ModulesShortName'] = '�� ���';
$lang['ModulesCategory'] = '�������';
$lang['ModulesFilename'] = '�� ����';
$lang['ModulesDeleteNotPermitted'] = '�� �����';
$lang['ModulesDisabled'] = '������ ��� ���� ���� ������ ������ ������ ������.';
$lang['ModulesNoneAvailable'] = '��� ������� ������ ����.';
$lang['ModulesUpload'] = '����� �����';
$lang['ModulesUploadInfo'] = '���� �� ���� ���� �� ����� ��� ���� ���� ����� UseBB ��� ������ ����.';
$lang['ModulesUploadDuplicateModule'] = '����� ��� �� ����� %s ���� ���. ����� ��� ���� ����.';
$lang['ModulesUploadNoValidModule'] = '����� %s ���� ����� UseBB ����.';
$lang['ModulesUploadFailed'] = '�� ���� ������ �� ������ %s. ����� �����.';
$lang['ModulesUploadDisabled'] = '������ �������� ���� ����� ������. ����� ������. ��� �����, ���� �� ������� %s ������ ������ �� ��� ��� �������� (��� chmod 777).';
$lang['ModulesConfirmModuleDelete'] = '����� ����� �����';
$lang['ModulesConfirmModuleDeleteInfo'] = '��� ���� ���� ���� ����� �� ������ %s (%s)?';

$lang['MembersSearchMember'] = '����� ���';
$lang['MembersSearchMemberInfo'] = '���� (��� �) �� ����� �� �� ����� ������.';
$lang['MembersSearchMemberExplain'] = '�� ����� �� �� �����';
$lang['MembersSearchMemberNotFound'] = '��� ����� �� �� ������ �� �� ������ %s ������.';
$lang['MembersSearchMemberList'] = '������ ����� �����';
$lang['MembersEditingMember'] = '����� ���� %s';
$lang['MembersEditingMemberInfo'] = '���� �� ���� ������ ���� �� �����. ���� �������� �� ������ (*) ���� ������.';
$lang['MembersEditingMemberUsernameExists'] = '�� ������ %s ���� ��� ���� �� ����� �� �� �����.';
$lang['MembersEditingMemberDisplayedNameExists'] = '�� ������ %s ���� ��� ���� �� ����� �� �� �����.';
$lang['MembersEditingMemberBanned'] = '����';
$lang['MembersEditingMemberBannedReason'] = '���� ������';
$lang['MembersEditingMemberCantChangeOwnLevel'] = '���� ���� ����� �� ���� ���.';
$lang['MembersEditingMemberCantBanSelf'] = '���� ���� ����� �� ����.';
$lang['MembersEditingComplete'] = '������� �� ���� %s ���� ������.';

$lang['DeleteMembersSearchMember'] = '����� ���';
$lang['DeleteMembersSearchMemberInfo'] = '���� (��� �) �� ����� �� �� ����� ������.';
$lang['DeleteMembersSearchMemberExplain'] = '� ����� �� �� �����';
$lang['DeleteMembersSearchMemberNotFound'] = '��� ����� �� �� ������ �� �� ������ %s ������.';
$lang['DeleteMembersSearchMemberList'] = '������ ����� �����';
$lang['DeleteMembersConfirmMemberDelete'] = '����� ����� ���';
$lang['DeleteMembersConfirmMemberDeleteContent'] = '��� ���� ���� ���� ����� �� ���� %s? �� ���� ���� ����!';
$lang['DeleteMembersComplete'] = '����� ���� %s ������.';

$lang['RegisterMembersExplain'] = '��� ��� ���� ����� ���� ������� �����. ���� ��� �� ����� ��� ��� ����� �����.';
$lang['RegisterMembersComplete'] = '������ �� ������ %s ������. ������ ���� ������ ���� ��.';

$lang['ActivateMembersExplain'] = '���� ����� �� ����� �� ������� ������ ���. ��� ��� ���� ���� ������� �����. ������ (*) ������� ������ ������ ��� ���� ����.';
$lang['ActivateMembersNoMembers'] = '��� ����� ������.';
$lang['ActivateMembersListAdmin'] = '����� ���� �����';
$lang['ActivateMembersListEmail'] = '����� ����� ��������';
$lang['ActivateMembersListAll'] = '����';

$lang['PruneForumsStart'] = '����� �����';
$lang['PruneForumsExplain'] = '�� ��� ����� �������, ��� ���� ����� �� ������ ������ ����� ������ �� ������ ��� �����.';
$lang['PruneForumsForums'] = '������� ������';
$lang['PruneForumsAction'] = '�����';
$lang['PruneForumsActionLock'] = '�����';
$lang['PruneForumsActionMove'] = '�����';
$lang['PruneForumsActionDelete'] = '�����';
$lang['PruneForumsMoveTo'] = '����� ������ ��';
$lang['PruneForumsTopicAge'] = '��� ����';
$lang['PruneForumsTopicAgeField'] = '����� ������ ���� %s ����.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = '����� &quot;������&quot; ���� ���� ������ ���� �����.';
$lang['PruneForumsConfirm'] = '�����';
$lang['PruneForumsConfirmText'] = '��� ���� ������ �� ���� ���� �����.';
$lang['PruneForumsNotConfirmed'] = '��� ���� ���� ����� �� ����.';
$lang['PruneForumsDone'] = '����� �����. %d ������ �����.';
$lang['PruneForumsExcludeStickies'] = '����� ������ ������';

$lang['PruneMembersExplain'] = '�� ��� ����� ����� ��� ���� ����� �� ���� �������� �� ������ �� ��� ���� ������� ������� ��� ������ �� �� ������.';
$lang['PruneMembersTypeNeverActivated'] = '����� ��� ������ �� ���';
$lang['PruneMembersRegisteredDaysAgo'] = '����� ���� ����� %s ����.';
$lang['PruneMembersTypeNeverPosted'] = '����� ��� ������ �� ���';
$lang['PruneMembersTypeInactive'] = '����� �� ������';
$lang['PruneMembersLastLoggedIn'] = '������ ���� ������� ���� ����� %s ����.';
$lang['PruneMembersExclude'] = '�����';
$lang['PruneMembersConfirmText'] = '��� ���� ������ �� ���� ���� �����.';
$lang['PruneMembersStart'] = '����� �����';
$lang['PruneMembersNotConfirmed'] = '��� ���� ���� ����� �� ����.';
$lang['PruneMembersDone'] = '������ �����. %d ����� �����.';

$lang['DNSBLIPBansDisabled'] = '����� ������ IP ������';
$lang['DNSBLIPBansDisabledInfo'] = '��� ������ ������� �� ��� DNSBL �����, ����� ������ IP ����� ����� �������.';
$lang['DNSBLGeneralInfo'] = '������� ������ ���� ������� ������ ������ ��� ����� ��� �� ������ ������. ����� ������ ����� �� UseBB, ��� �������� ���� ������ ����� ������� ������� ��������. ��� �� ������ ������ ������ ���� ����� ����� �-IP �� �����.';
$lang['DNSBLEnableOpenDNSBLBan'] = '������ ����� ������� �� ��� DNSBL';
$lang['DNSBLServers'] = '����� ����� �� ���� DNS (DNSBL)';
$lang['DNSBLServersInfo'] = '��� DNS ��� ��� ����. ��� �� ��� ����� �� �� ������ ������ ��� ���� ���� ����� ������ ��� ����� ������� ���� ������ ���.';
$lang['DNSBLMinPositiveHits'] = '����� %s ������ ������� ���� ������ ��� ����� ����� IP.';
$lang['DNSBLRecheckMinutes'] = '���� ���� ������ IP ������ �� %s ���� (0 ��� �����).';
$lang['DNSBLEnableOpenDNSBLBanWildcard'] = '���� ����� ����� %s (�� �����)';
$lang['DNSBLSettingsSaved'] = '������ ����� DNSBL �����.';
$lang['DNSBLWhitelist'] = '����� ����';
$lang['DNSBLWhitelistInfo'] = '����� IP ��� �� �� ����� ��� ��� ���� (* �-? ������ ���� �������).';

$lang['BadwordsInfo'] = '����� ���� ������ ����� ������� �� �������, ���� ����� ������ ����� (��� ����� �-*).';
$lang['BadwordsDisabled'] = '���� ����� ���� ������';
$lang['BadwordsDisabledInfo'] = '���� ����� ���� ����� ������ ������.';
$lang['BadwordsNoBadwordsExist'] = '�� ������ ������ ������ ��.';
$lang['BadwordsAddBadwordWord'] = '����';
$lang['BadwordsAddBadwordReplacement'] = '�����';

$lang['MassEmailInfo'] = '����� ����� ���� �������� ��� ������ ��� �� ������ ���.';
$lang['MassEmailRecipients'] = '������';
$lang['MassEmailRecipients-admins'] = '����� �����';
$lang['MassEmailRecipients-mods'] = '����� �������';
$lang['MassEmailRecipients-members'] = '����� ������';
$lang['MassEmailSubject'] = '����';
$lang['MassEmailBody'] = '���';
$lang['MassEmailTemplate'] = '����,

���� ����� �������� �� [board_name] �����. ���� ������ ��� ����� ���� �������� �� ���� ��������� ��� ������ ����. ��� ������ ���� ����.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = '����� ����� ��������� ����� � -%d �����.';
$lang['MassEmailSent'] = '����� ����� ��������� ��� �������� ����� �� %d ����� ��� ��� ����� �-%d ������.';
$lang['MassEmailOptions'] = '��������';
$lang['MassEmailPublicEmailsOnly'] = '����� �� ������� ���� �������� ��������';
$lang['MassEmailExcludeBanned'] = '����� ������ ������';

$lang['BansInfo'] = '��� ��� ���� ����� ����� �� ����� ������ �� ������ ���. ����� ����� (����� *) ������. ������� ������ ������ ������ ��� ��� ����� ����.';
$lang['Bans-username'] = '���� �������';
$lang['Bans-email'] = '������ ���� ��������';
$lang['Bans-ip_addr'] = '������ IP';
$lang['BansUsername'] = '�� �����';
$lang['BansEmail'] = '����� ���� ��������';
$lang['BansIp_addr'] = '����� IP';
$lang['BansNoBansExist'] = '��� ������ ���� �� ������� ������ ��.';
$lang['BansIPBansDisabledInfo'] = '����� ������ IP ������  ������ ������.';

?>
