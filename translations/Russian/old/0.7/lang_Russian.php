<?php
/*
	Copyright (C) 2005 Druid VAV [druidvav@gmail.com]
	updated by buzz [fly-x@mail.ru]
	
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
if ( !defined('INCLUDED') )	exit();

//
// Initialize a new translations holder array
//
$lang = array();
$lang['character_encoding'] = 'windows-1251';
//
// Define translations
//
$lang['Home'] = '������';
$lang['YourPanel'] = '��� �������';
$lang['Register'] = '�����������';
$lang['FAQ'] = '����';
$lang['Search'] = '�����';
$lang['ActiveTopics'] = '�������� ����';
$lang['LogIn'] = '�����';
$lang['LogOut'] = '����� (%s)';
$lang['MemberList'] = '������ �������������';
$lang['StaffList'] = '�������������';
$lang['Statistics'] = '����������';
$lang['ContactAdmin'] = '����� � ���������������';
$lang['Forum'] = '�����';
$lang['Topics'] = '����';
$lang['Posts'] = '���������';
$lang['LatestPost'] = '��������� ���������';
$lang['RSSFeed'] = 'RSS';
$lang['NewPosts'] = '����� ���������';
$lang['NoNewPosts'] = '��� ����� ���������';
$lang['LockedNewPosts'] = '������� (����� ���������)';
$lang['LockedNoNewPosts'] = '������� (��� ����� ���������)';
$lang['Locked'] = '�������';
$lang['LastLogin'] = '��������� ���������';
$lang['VariousInfo'] = '������ ����������';
$lang['IndexStats'] = '�� ������ %d ��������� � %d ����� � %d ������������������ ������������.';
$lang['NewestMember'] = '������������ ������ �������: %s.';
$lang['NewestMemberExtended'] = '������������ ������� �� ����� %s.';
$lang['UsersOnline'] = '����� �������� %d ������������� � %d ������ (�� ��������� %d �����).';
$lang['Username'] = '��� ������������ (�����)';
$lang['CurrentPassword'] = '������� ������';
$lang['UserID'] = 'ID ������������';
$lang['NoSuchForum'] = '����� %s �� ����������!';
$lang['WrongPassword'] = '�������� ���� ������ �� �����. ��������� ����� ������ ����� ����� ����� ���� �� ������ ���.';
$lang['Reset'] = '��������';
$lang['SendPassword'] = '������� ����� ������';
$lang['RegisterNewAccount'] = '���������������� ������ ������������';
$lang['RememberMe'] = '��������� ����';
$lang['Yes'] = '��';
$lang['No'] = '���';
$lang['NotActivated'] = '��� ������� %s ��� �� �����������. ��������� ���� �������� ���� (�� ������� �� �������������� ���� �������) �� ������� ������ � ������������ �� ��������� ��������.';
$lang['Error'] = '������';
$lang['Profile'] = '������� ������������ %s';
$lang['Level'] = '�������';
$lang['Administrator'] = '�������������';
$lang['Moderator'] = '���������';
$lang['Registered'] = '������������';
$lang['Email'] = '����� E-mail';
$lang['ContactInfo'] = '���������� ����������';
$lang['Password'] = '������';
$lang['PasswordAgain'] = '������ (��� ���)';
$lang['EverythingRequired'] = '��� ���� �������� �������������!';
$lang['UserAlreadyExists'] = '������� %s ��� ���������������. ���� �� ���, �� ������� ��� ��������� ����� ������. ���� ��� - �������� ������ ��� ������������.';
$lang['RegisteredNotActivated'] = '������� %s ������. �� ��� e-mail ������� ������ � ������������ �� ��������� ��������. �� ������ ������������ ������� ������ ��� �����.';
$lang['RegisteredActivated'] = '������� %s ������. �� ��� e-mail ������� ���������� �� ��������. �� ������ ����� ����� ������!';
$lang['Never'] = '�������';
$lang['Member'] = '������������';
$lang['RegistrationActivationEmailBody'] = '������������,

��� ��������� [board_name]. �� ���������������� ������� [account_name] �� ����� ������, �� �� ��� �� �����������.
��� ��������� �������� ����������� ������: 
[activate_link]

��� ����� ����������� ��� ������:

��� ������������: [account_name]
������: [password]

���� �� �������� ������, �� ������ ��� ����� �� ���� �� �����. ������� �� �����������!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdActivationEmailSubject'] = '����� ������';
$lang['NoForums'] = '������������� �� ������ �� ������ ������.';
$lang['AlreadyActivated'] = '������� #%d ��� �����������.';
$lang['Activate'] = '������������';
$lang['Activated'] = '��� ������� %s �����������. ������ �� ������ �����, ��������� ��� ��� ������������ � ������.';
$lang['WrongActivationKey'] = '���������� ������������ ������� #%d, ��� ��� ���� ��������� �������.';
$lang['RegisterIt'] = '�� ������ ������� ������� ������� �� ������ "�����������".';
$lang['BoardClosed'] = '������ �������';
$lang['SendpwdActivationEmailBody'] = '������������,

��� ��������� [board_name]. �� ��������� ����� ������ ��� �������� [account_name] � ������ �������
����� ��������������, ��� ���� �� ������ ������������ ������: 
[activate_link]

��� ����� ����������� ��� ������:

��� ������������: [account_name]
������: [password]

���� �� �������� ������, �� ������ ��� ����� �� ���� �� �����. ������� �� �����������!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailBody'] = '������������,

��� ��������� [board_name]. �� ��������� ����� ������ ��� �������� [account_name].

��� ����� ����������� ��� ������:
��� ������������: [account_name]
������: [password]

���� �� �������� ������, �� ������ ��� ����� �� ���� �� �����. ������� �� �����������!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = '����� ������';
$lang['SendpwdActivated'] = '����� ������ ��� �������� %s ������ �� %s. ������ �� ������ ����� ��������� ����� ������.';
$lang['SendpwdNotActivated'] = '����� ������ ��� �������� %s ������ �� %s, ��� �� ��� � ���������� �� ����������� ��������.';
$lang['ForumIndex'] = '������ �������';
$lang['MissingFields'] = '��������� ���� �� ��������� ��� ��������� �������: %s.';
$lang['TermsOfUseContent'] = '
���� �������������� � ���������� ����� ������ ��������� ������� ��� ������������� ������������ ��������� ��� ����� �������, ��� ��������� ����������� ����������. ����� �������, �� ��������, ��� ��������� �� ���� ������� �������� ����� ������ �� �������, � �� ������������� ������� (����� ���������, ����������� � ���������������) � ������������� �� ����� ���� ������������ �� �� ����������.

�� ������������ �� ��������� ��������������, ����������, �������������� ���������, ���������������� ���������, �������� � ������������ ����� � ������ ���������, ������� �������� ��������������� ������. ������� ���������� ����� ��������� ����� �������� � ������ ������������ ���������� �� ������� (��� ���� ��� ��������� ����� ��������� � �����������). IP ������ ���� ��������� ����������� ��� ����������� ���������� ����� ��������.

�� ������������ � ���, ��� �������������� ������ ����� ����� �������, ���������������, ��������� ��� ������� ����� ���� � ����� ����� �� ������ ����������. ��� ������������ �� �������� � ���, ��� �������� ���� ���������� ����� ��������� � ���� ������. ���� ��� ���������� �� ����� ������� ������� ����� ��� ������ ����������, ������������� ������� �� ����� ���� ������������ �� �������� �������, ������� ����� �������� � �������������������� ������� � ���.

��� ������ ���������� cookies ��� �������� ���������� �� ����� ����������. ��� cookie �� �������� ������� ���������� �� �������� ���� � ������ ���� ��� ��������� �������� ������ �������. ��� e-mail ����� ������������ ���� ��� ������������� ����� ����������� � ������ (� ��� ������� ������ ������ ���� �� �������� �������).

�������� �� ������ ����������� �� ������������� ��� �������� � ����� ���������.';
$lang['TermsOfUse'] = '���������������� ����������';
$lang['RegistrationActivationEmailSubject'] = '��������� ��������';
$lang['NeedToBeLoggedIn'] = '�� ������ ���� ����������������, ����� ������� ���. ����������� ������ \'�����\'  ����� ����� ��� \'�����������\' ����� ������� ����� �������.';
$lang['WrongEmail'] = '%s - ������������ ����� ����������� ����� ��� �������� %s. ���� �� �� ������ ��������� ��� ����� ����������� �����, ���������� � ��������������.';
$lang['Topic'] = '����';
$lang['Author'] = '�����';
$lang['Replies'] = '�������';
$lang['Views'] = '����������';
$lang['Note'] = '�������';
$lang['Hidden'] = '������';
$lang['ACP'] = '������ ��������������';
$lang['SendMessage'] = '��������� ���������';
$lang['NoViewableForums'] = '��� ��������� ������������� ��� ������ � ���� ���������������� �������. ���� �� �� ���������������� - �����������������. ���� �� ����������������, �� �������� �� ������ ���� ����� :)';
$lang['Rank'] = '����';
$lang['Location'] = '���������������';
$lang['Website'] = '����';
$lang['Occupation'] = '��� ������������';
$lang['Interests'] = '��������';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber';
$lang['BannedIP'] = '��� IP ����� %s ������������.';
$lang['Avatar'] = '������';
$lang['AvatarURL'] = 'URL �������';
$lang['BannedUser'] = '��������������� �������';
$lang['BannedUserExplain'] = '��� ������� %s ������������. �������:';
$lang['BannedUsername'] = '��� ������������ %s ���������. ����������, �������� ������.';
$lang['BannedEmail'] = '����� ����������� ����� %s ������������. ����������, �������� ������.';
$lang['PostsPerDay'] = '��������� � ����';
$lang['BoardClosedOnlyAdmins'] = '������ ������������� ����� �������, ����� ������ �������.';
$lang['NoPosts'] = '��� ���������';
$lang['NoActivetopics'] = '�� ������ ������ �������� ���� �����������.';
$lang['AuthorDate'] = '����� -  %s, ���� - %s';
$lang['ByAuthor'] = '�����: %s';
$lang['OnDate'] = '����: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = '��������� ������ ��� %s';
$lang['SendEmail'] = '��������� ��������� ��� %s';
$lang['NoMails'] = '���� ������������ �������� �������� ��� ���������.';
$lang['UserEmailBody'] = '������������,

��� ��������� [board_name]. ������������ [username] �������� ��� ����� ������ ��� ������. ����� ������ ������� ����

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'E-mail ��� %s ��������� �������!';
$lang['To'] = '���';
$lang['From'] = '��';
$lang['Subject'] = '����';
$lang['Body'] = '�����';
$lang['Send'] = '���������';
$lang['EditProfile'] = '������������� �������';
$lang['EditOptions'] = '���������';
$lang['EditPasswd'] = '����� ������';
$lang['PanelHome'] = '������ ������������';
$lang['NewEmailNotActivated'] = '��� ������� ������� �������, �� ��� ��� �� �������� ���� ����� e-mail, �� �� ������ �������������� �������. ������ � ����������� ���������� �� ����� �����.';
$lang['Required'] = '�����������';
$lang['ViewProfile'] = '�������� �������';
$lang['NewEmailActivationEmailBody'] = '������������,

��� ��������� [board_name]. �� �������� ���� e-mail ����� ��� �������� [account_name] � ������ �������
����� ��������������, ��� ���� �� ������ ������������ ������: 
[activate_link]

��� ����� ����������� ��� ������:
��� ������������: [account_name]
������: [password]

���� �� �������� ������, �� ������ ��� ����� �� ���� �� �����. ������� �� �����������!

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = '��������� ��������';
$lang['Signature'] = '�������';
$lang['SessionInfo'] = '���������� � ������';
$lang['SessionID'] = 'ID ������';
$lang['IPAddress'] = 'IP �����';
$lang['Seconds'] = '���.';
$lang['Updated'] = '����������';
$lang['Pages'] = '�������';
$lang['AutoLogin'] = '��������';
$lang['Enabled'] = '��������';
$lang['Disabled'] = '���������';
$lang['Enable'] = '��������';
$lang['Disable'] = '���������';
$lang['AutoLoginSet'] = '�������� ������� ��������������� �����.';
$lang['AutoLoginUnset'] = '������� ��������������� ����� ���������.';
$lang['RegistrationEmailBody'] = '������������,

��� ��������� [board_name]. �� ���������������� ������� [account_name] �� ����� ������.
��� ����� ����������� ��� ������:

��� ������������: [account_name]
������: [password]

���� �� �������� ������, �� ������ ��� ����� �� ���� �� �����. ������� �� �����������!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = '����������� ��������';
$lang['PublicEmail'] = '���������� ����� e-mail';
$lang['PublicLastLogin'] = '���������� ���� ���������� ���������';
$lang['DateFormat'] = '������ ����';
$lang['DateFormatHelp'] = '��������� ��������� � ����������� ������� %s � PHP.';
$lang['Again'] = '��� ���';
$lang['NewPassword'] = '����� ������';
$lang['NewPasswordAgain'] = '����� ������ (��� ���)';
$lang['PasswordEdited'] = '��� ������ ������ ������.';
$lang['DetailedOnlineList'] = '��������� ������';
$lang['Detailed'] = '��������';
$lang['OptionsEdited'] = '��������� ��������� �������.';
$lang['ProfileEdited'] = '��� ������� ������� �������.';
$lang['Started'] = '������';
$lang['Minutes'] = '���.';
$lang['Hours'] = '���.';
$lang['Days'] = '��.';
$lang['Weeks'] = '���.';
$lang['TotalTime'] = '����� �����';
$lang['NoTopics'] = '� ���� ������ ��� ���.';
$lang['NotPermitted'] = '� ��� ��� ����������� ����.';
$lang['Language'] = '����';
$lang['Template'] = '������';
$lang['NoSuchMember'] = '������������ %s �� ����������.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = '��� ����������� ���������, ��� ��� ����� �� ����� ���������� ��� ��������� ���������, ����������� � ����� �������� (cookies).';
$lang['LogOutConfirm'] = '�� ������������� ������ �����? ������� �������������� ����� ����� ���������!';
$lang['Cancel'] = '������';
$lang['Timezone'] = '������� ����';
$lang['DST'] = '������/������ �����';
$lang['Sticky'] = '������';
$lang['PostNewTopic'] = '����� ����';
$lang['ForumIsLocked'] = '����� ������';
$lang['NoSuchTopic'] = '���� %s �� ����������.';
$lang['PostReply'] = '��������';
$lang['TopicIsLocked'] = '���� �������';
$lang['Post'] = '���������';
$lang['Edit'] = '�������';
$lang['Delete'] = '�������';
$lang['Quote'] = '������';
$lang['Wrote'] = '%s �����(�)';
$lang['ViewingIP'] = 'IP: %s';
$lang['ReplyTo'] = '����� �� "%s"';
$lang['TopicIsLockedExplain'] = '����, � ������� �� ��������� ������������ ����� �������.';
$lang['Content'] = '����������';
$lang['Options'] = '���������';
$lang['EnableBBCode'] = '�������� BBCode.';
$lang['EnableSmilies'] = '�������� ������.';
$lang['EnableSig'] = '������������ �������.';
$lang['EnableHTML'] = '�������� HTML.';
$lang['LockTopicAfterPost'] = '������� ���� ����� ����������.';
$lang['Guest'] = '�����';
$lang['BackToPrevious'] = '��������� � ���������� ��������';
$lang['NoSuchPost'] = '��������� %s �� ����������.';
$lang['UserPostedImage'] = '������������ ��������� �����������';
$lang['ForumIsLockedExplain'] = '���� ����� ������. ������ �������������� ������������ ����� ��������� ����� ����.';
$lang['MakeTopicSticky'] = '�������� ���� ��� "������".';
$lang['QuickReply'] = '������� �����';
$lang['ReturnToTopicAfterPosting'] = '��������� � ���� ����� ����������.';
$lang['ModeratorList'] = '����������: %s.';
$lang['Nobody'] = '�����������';
$lang['DeleteTopic'] = '������� ����';
$lang['MoveTopic'] = '��������� ����';
$lang['LockTopic'] = '������� ����';
$lang['UnlockTopic'] = '������� ����';
$lang['MakeSticky'] = '������� ������ �����';
$lang['ConfirmDeleteTopic'] = '�� ������������� ������ ������� ���� %s �� ������ %s?';
$lang['MakeNormalTopic'] = '������� ������� �����';
$lang['OldForum'] = '������ �����';
$lang['NewForum'] = '����� �����';
$lang['IAccept'] = '� ��������';
$lang['IDontAccept'] = '� �� ��������';
$lang['OpenLinksNewWindow'] = '��������� ������� ������ � ����� ����';
$lang['HideAllAvatars'] = '�� ���������� �������';
$lang['HideUserinfo'] = '�� ���������� ���������� � ������������';
$lang['HideAllSignatures'] = '�� ���������� �������';
$lang['HideFromOnlineList'] = '�������� ���������� �� ������';
$lang['PageLinks'] = '��������: %s';
$lang['Preview'] = '������������';
$lang['DeletePost'] = '�������� ���������';
$lang['ConfirmDeletePost'] = '�� �������, ��� ������ ������� ��� ��������� �� ���� %s?';
$lang['EditPost'] = '�������������� ���������';
$lang['PostEditInfo'] = '��������� ��� ��������������� %s %s.';
$lang['PasswdInfo'] = '������ �� ����� ��������� ������� � �������. ����������� ����� ���������� %d ��������.';
$lang['SubscribeTopic'] = '����������� �� ����������';
$lang['UnsubscribeTopic'] = '���������� �� ����������';
$lang['NewReplyEmailBody'] = '������������,

��� ��������� [board_name]. [poster_name] ����������� ����� � ���� "[topic_title]", �� ������� �� ���������.
��� ��������� ������ �������� �� ������: [topic_link].

����� ���������� �� ���������� �������� �� ���� ������ (���������� ����� � �����): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = '����� ����� � ���� "%s"';
$lang['SubscribedTopic'] = '������ �� ��������� �� ���������� ���� ����.';
$lang['UnsubscribedTopic'] = '������ �� �������� �� ���������� ���� ����.';
$lang['SubscribeToThisTopic'] = '�������� �� ���������� � ����.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = '��������';
$lang['NoSubscribedTopics'] = '�� �� ��������� �� �� ���� ����.';
$lang['LatestUpdate'] = '��������� ����������';
$lang['Unknown'] = '����������';
$lang['PostingTopic'] = '���������� ���� � %s';
$lang['PostingReply'] = '���������� ������ � %s';
$lang['MovingTopic'] = '������� ���� %s';
$lang['DeletingTopic'] = '�������� ���� %s';
$lang['EditingPost'] = '�������������� ������ %s';
$lang['DeletingPost'] = '�������� ������ �� %s';
$lang['DebugMode'] = '����� �������';
$lang['ParseTime'] = '����� ���������';
$lang['ServerLoad'] = '�������� �������';
$lang['TemplateSections'] = '�������';
$lang['SQLQueries'] = 'SQL �������';
$lang['RealName'] = '��������� ���';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = '��������������';
$lang['Moderators'] = '����������';
$lang['SortBy'] = '����������� ��: %s';
$lang['TopicReview'] = '���������� ����';
$lang['ViewMorePosts'] = '��� ���������';
$lang['DisplayedName'] = '��������� ���';
$lang['UsernameInfo'] = '��� ������������ ������ ��������� ������ �����, ��������� ����� � ������� _ � - (��� ��������).';
$lang['Code'] = '���';
$lang['Img'] = '��������';
$lang['URL'] = 'URL';
$lang['Color'] = '����';
$lang['Size'] = '������';
$lang['ViewingForum'] = '�����: %s.';
$lang['ViewingTopic'] = '����: %s.';
$lang['FloodIntervalWarning'] = '������������� ������ ����� ������������ ����� ����������� ��������� � ����������� ���������� %d ������. ���������� ��������� ����� �����.';
$lang['AutoSubscribe'] = '������������� �������������';
$lang['OnPostingNewTopics'] = '��� �������� ���';
$lang['OnPostingNewReplies'] = '��� ���������� ������';
$lang['UnsubscribeSelected'] = '���������� �� ����������';
$lang['SelectedTopicsUnsubscribed'] = '�� ���������� �� ��������� ���.';
$lang['TrashTopic'] = '������� � �������';
$lang['ConfirmTrashTopic'] = '�� ������� ��� ������ ������� ���� %s �� ������ %s � �������?';
$lang['Birthday'] = '���� ��������';
$lang['Age'] = '�������';
$lang['Month'] = '�����';
$lang['Day'] = '����';
$lang['PoweredBy'] = '%s �������� �� ������ %s';
$lang['GeneralStats'] = '����� ����������';
$lang['Members'] = '������������';
$lang['TopicsPerDay'] = '��� � ����';
$lang['MembersPerDay'] = '������������� � ����';
$lang['BoardStarted'] = '����� ���������� ��������';
$lang['BoardAge'] = '������� ����� ����������';
$lang['NewestMember'] = '��� �������';
$lang['MostActiveTopics'] = '����� �������� ����';
$lang['MostViewedTopics'] = '����� ���������� ����';
$lang['PostsPerMember'] = '������� ���-�� ��������� �� ������������';
$lang['PostsPerForum'] = '������� ���-�� ��������� � ������';
$lang['Categories'] = '���������';
$lang['Forums'] = '������';
$lang['TopicsPerMember'] = '������� ���-�� ��� �� ������������';
$lang['TopicsPerForum'] = '������� ���-�� ��������� � ������';
$lang['MostActiveMembers'] = '����� �������� ������������';
$lang['MostActiveForums'] = '����� �������� ������';
$lang['DisplayedNameTaken'] = '��������, %s ��� ������������ ��� ��� ������������ ��� ��������� ���.';
$lang['SearchKeywords'] = '�������� ����� ��� ������';
$lang['SearchMode'] = '����� ������';
$lang['SearchAuthor'] = '������ �� ������';
$lang['SearchForums'] = '������ �� �������';
$lang['AllForums'] = '��� ������';
$lang['AllKeywords'] = '��� �����';
$lang['OneOrMoreKeywords'] = '���� ��� ����� ����';
$lang['NoSearchResults'] = '��������, ������ �� �������.';
$lang['SearchMembersPosts'] = '��������� ������������';
$lang['CurrentPage'] = '������� ��������';
$lang['MemberGuestOnline'] = '�� ��������� %d �����, %d ������������ (%d �������) � %d ����� �������� �����.';
$lang['MembersGuestOnline'] = '�� ��������� %d �����, %d ������������� (%d �������) � %d ����� �������� �����.';
$lang['MemberGuestsOnline'] = '�� ��������� %d �����, %d ������������ (%d �������) � %d ������ �������� �����.';
$lang['MembersGuestsOnline'] = '�� ��������� %d �����, %d ������������� (%d �������) � %d ������ �������� �����.';
$lang['WhosOnline'] = '��� ������ �� �����';
$lang['Done'] = '�������';
$lang['KeywordsExplain'] = '����� �����, �� �� ����� %d ��������, ����������� ���������.';
$lang['BCCMyself'] = '������� ����� �� ����� ���� ����������� �����.';
$lang['Save'] = '���������';
$lang['Add'] = '��������';
$lang['MarkAllAsRead'] = '�������� ��� ��� �����������';
$lang['MarkAllAsReadDone'] = '��� ������ � ���� �������� ������ ��� �����������.';
$lang['StringTooShort'] = '%s ������� ��������, ��� ������� ���������� %d ��������.';
$lang['StringTooLong'] = '%s ������� �������, �������� ������ �� ������, ��� %d c�������.';
$lang['Upload'] = '���������';
$lang['RegistrationsDisabled'] = '����������� ���������';
$lang['PostFormShortcut'] = '������� Alt+S (Cmd+S �� ��������) ��� ������� ��������.';

//
// Date translations
//
$lang['date_translations'] = array(
	'Mon' => '��',
	'Tue' => '��',
	'Wed' => '��',
	'Thu' => '��',
	'Fri' => '��',
	'Sat' => '��',
	'Sun' => '��',
	'Monday' => '�����������',
	'Tuesday' => '�������',
	'Wednesday' => '�����',
	'Thursday' => '�������',
	'Friday' => '�������',
	'Saturday' => '�������',
	'Sunday' => '�����������',
	'Jan' => '���',
	'Feb' => '���',
	'Mar' => '���',
	'Apr' => '���',
	'May' => '���',
	'Jun' => '���',
	'Jul' => '���',
	'Aug' => '���',
	'Sep' => '���',
	'Oct' => '���',
	'Nov' => '���',
	'Dec' => '���',
	'January' => '������',
	'February' => '�������',
	'March' => '����',
	'April' => '������',
	'May' => '���',
	'June' => '����',
	'July' => '����',
	'August' => '������',
	'September' => '��������',
	'October' => '�������',
	'November' => '������',
	'December' => '�������',
	'st' => '��',
	'nd' => '��',
	'th' => '��'
);
?>
