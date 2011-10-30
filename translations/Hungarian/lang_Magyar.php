<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.126 2007/01/01 11:58:43 pc_freak Exp $
	
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
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

//
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'hu';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Otthon';
$lang['YourPanel'] = 'Saj�t Adatok';
$lang['Register'] = 'Regisztr�lj';
$lang['FAQ'] = 'GYIK';
$lang['Search'] = 'Keres�s';
$lang['ActiveTopics'] = 'Akt�v T�m�k';
$lang['LogIn'] = 'Bejelentkez�s';
$lang['LogOut'] = 'Kijelentkez�s (%s)';
$lang['MemberList'] = 'Tag Lista';
$lang['StaffList'] = 'Karbantart� List';
$lang['Statistics'] = 'Statisztik�k';
$lang['ContactAdmin'] = 'Admin Kapcsolat';
$lang['Forum'] = 'F�rum';
$lang['Topics'] = 'T�m�k';
$lang['Posts'] = 'Hozz�sz�l�s';
$lang['LatestPost'] = 'Utols� Hozz�sz�l�s';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = '�j hozz�sz�l�sok';
$lang['NoNewPosts'] = 'Nincsenek �j hozz�sz�l�sok';
$lang['LockedNewPosts'] = 'Z�rolva (�j hozz�sz�l�sok)';
$lang['LockedNoNewPosts'] = 'Z�rolva (nincsenek �j hozz�sz�l�sok)';
$lang['Locked'] = 'Z�rolva';
$lang['LastLogin'] = 'Utols� bejelentkez�s';
$lang['VariousInfo'] = 'K�l�nb�z� inform�ci�k';
$lang['IndexStats'] = 'This board contains %d posts in %d topics and has %d registered members.';
$lang['NewestMemberExtended'] = '�dv�z�lj�k a leg�jabb tagunkat: %s.';
$lang['Username'] = 'Felhaszn�l�n�v';
$lang['CurrentPassword'] = 'Jelenlegi jelsz�';
$lang['UserID'] = 'Felhaszn�l� ID';
$lang['NoSuchForum'] = 'A %s f�rum nem l�tezik (t�bb�) ezen az oldalon!';
$lang['WrongPassword'] = 'Sajn�lom, de a jelsz� nem megfelel�! K�rj�l egy �j jelsz�t a bejelentkez� oldalon, ha elfelejtetted.';
$lang['Reset'] = 'T�rl�s';
$lang['SendPassword'] = '�j jelsz� k�ld�se';
$lang['RegisterNewAccount'] = '�j tags�g regisztr�l�sa';
$lang['RememberMe'] = 'Eml�kezz r�m';
$lang['Yes'] = 'Igen';
$lang['No'] = 'Nem';
$lang['NotActivated'] = 'A tags�god %s m�g nincs aktiv�lva. K�rlek ellen�rizd az email fi�kodat, amivel regisztr�lt�l ide. Ott talal�sz le�r�st mit kell tenned az aktiv�l�shoz';
$lang['Error'] = 'Hiba';
$lang['Profile'] = '%s profilja';
$lang['Level'] = 'Szint';
$lang['Administrator'] = 'Adminisztr�tor';
$lang['Moderator'] = 'Moder�tor';
$lang['Registered'] = 'Regisztr�lt';
$lang['Email'] = 'E-mail c�m';
$lang['ContactInfo'] = 'Kapcsolat';
$lang['Password'] = 'Jelsz�';
$lang['PasswordAgain'] = 'Jelsz� (�jra)';
$lang['EverythingRequired'] = 'Az �sszes mez�t ki kell t�lteni!';
$lang['RegisteredNotActivated'] = 'A %s nev� tags�god l�trehozva. K�ldt�nk egy e-mailt %s c�mre, melyben megtal�lod hogyan aktiv�ld a tags�godat. Aktiv�l�s n�lk�l, nem tudsz bejelentkezni.';
$lang['RegisteredActivated'] = 'A %s nev� regisztr�ci�d l�trhozva. Jelentkezz be.';
$lang['Never'] = 'Soha';
$lang['Member'] = 'Tag';
$lang['RegistrationActivationEmailBody'] = 'Hello,

[board_name] f�rum sz�l hozz�d. Regisztr�lt�l [account_name] n�ven, de m�g nincs aktiv�lva. K�rlek kattints az al�bbi linkre, hogy aktiv�ld a tags�godat:

[activate_link]

vagy m�sold be a b�ng�sz�dbe. Azut�n m�r be tudsz jelentkezni az al�bbi adatokkal:

Felhaszn�l�n�v: [account_name]
Jelsz�: [password]

Ha elfelejtetted a jelszavad a bejelentkez�si oldalon tudsz �jat k�rni. K�sz�nj�k a regisztr�ci�dat!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'This is an empty board. The administrator has not yet created any forums.';
$lang['AlreadyActivated'] = 'Account with ID %d has already been activated.';
$lang['Activate'] = 'Aktiv�l�s';
$lang['Activated'] = 'A %s tags�god (�jra)aktiv�lva. Automatikusan bel�ptet�nk.';
$lang['WrongActivationKey'] = 'We were unable to activate your account with ID %d. The activation key is incorrect. Are you sure you didn\'t request a new password in the mean time?';
$lang['RegisterIt'] = 'You can create it via the \'Register\' link.';
$lang['BoardClosed'] = 'Oldal Z�rva';
$lang['SendpwdEmailBody'] = 'Hello,

[board_name] f�rum sz�l hozz�d. �j jelsz�t ig�nyelt�l [account_name]. Az al�bbi adatokkal tudsz bejelntkezni:

Felhaszn�l�n�v: [account_name]
Jelsz�: [password]

Ha elfelejtetted a jelszavad a bejelentkez�si oldalon tudsz �jat k�rni.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = '�j Jelsz�';
$lang['SendpwdActivated'] = 'Az �j jelszavad %s ell lett k�ldve %s. Jelentkezz be az �j jelszavaddal.';
$lang['ForumIndex'] = 'F�rum Index';
$lang['MissingFields'] = 'A k�vetkez� mez�k hib�sak vagy hi�nyoznak: %s.';
$lang['TermsOfUseContent'] = 'Az oldal �zemeltet�je nem v�llal felel�s�get a bek�ld�tt hozz�sz�l�sok�rt.
Ne haszn�lj cs�nya szavakat. Viselkedj norm�lisan. Ellenkez� esetben kitiltunk a f�rumr�l.

A s�tiket enged�lyezd a b�ng�sz�dben.

Kattints az  "Elfogadom" gombra, ha egyet�rtesz a felt�telekkel.';
$lang['TermsOfUse'] = 'Haszn�lati felt�telek';
$lang['RegistrationActivationEmailSubject'] = 'Tags�g Aktiv�l�s';
$lang['NeedToBeLoggedIn'] = 'You need to be logged in to do this. Click the \'Log In\' link to log in or \'Register\' to create a new account.';
$lang['WrongEmail'] = 'Sorry, but %s isn\'t the correct e-mail address for your account %s. If you can\'t remember your e-mail address, please contact the board admin.';
$lang['Topic'] = 'T�ma';
$lang['Author'] = 'Szerz�';
$lang['Replies'] = 'V�laszok';
$lang['Views'] = 'Olvast�k';
$lang['Note'] = 'Megjegyz�s';
$lang['Hidden'] = 'Rejtett';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = '�zenet k�ld�se';
$lang['NoViewableForums'] = 'You don\'t have permission to view any forums with this user level. If you are not logged in, do so. If you are logged in, you probably shouldn\'t be here.';
$lang['Rank'] = 'Rang';
$lang['Location'] = 'Lakhely';
$lang['Website'] = 'Weboldal';
$lang['Occupation'] = 'Occupation';
$lang['Interests'] = '�rdekl�d�si k�r';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'A te %s IP c�med ki van tiltva az oldalr�l.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Tiltott Tags�g';
$lang['BannedUserExplain'] = 'Your account %s is being banned from this board. The reason is:';
$lang['BannedUsername'] = 'The username %s is being banned from this board. Please choose another one.';
$lang['BannedEmail'] = 'The e-mail address %s is being banned from this board. Please choose another one.';
$lang['PostsPerDay'] = 'V�laszok / nap';
$lang['BoardClosedOnlyAdmins'] = 'Only administrators can log in when the board is closed.';
$lang['NoPosts'] = 'Nincsnek v�laszok';
$lang['NoActivetopics'] = 'This board currently does not have any active topics.';
$lang['AuthorDate'] = 'By %s on %s';
$lang['ByAuthor'] = 'Ki: %s';
$lang['OnDate'] = 'Mikor: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'E-mail k�ld�se %s r�sz�re';
$lang['SendEmail'] = '�zenet k�ld�se %s r�sz�re';
$lang['NoMails'] = 'Ez a felhaszn�l� nem k�v�n e-mail-t fogadni.';
$lang['UserEmailBody'] = 'Hello,

[board_name] f�rum sz�l hozz�d. Ez a felhaszn�l� [username] �zenetet k�ld�tt neked. Al�bb az �zenet.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Az e-mail %s r�sz�re elpost�zva!';
$lang['To'] = 'Cimzett';
$lang['From'] = 'Kit�l';
$lang['Subject'] = 'T�rgy';
$lang['Body'] = 'T�rzs';
$lang['Send'] = 'K�ld';
$lang['EditProfile'] = 'Profil Szerkeszt�se';
$lang['EditOptions'] = 'Be�ll�t�sok';
$lang['EditPasswd'] = 'Jelsz� szerkeszt�se';
$lang['PanelHome'] = 'Panel Kezd�s';
$lang['NewEmailNotActivated'] = 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, you need to reactivate it. An e-mail has been sent to %s with instructions on how to do this. You will be logged out in the mean time.';
$lang['Required'] = 'K�telez�';
$lang['ViewProfile'] = 'Profil Megtekint�se';
$lang['NewEmailActivationEmailBody'] = 'Hello,

[board_name] f�rum sz�l hozz�d. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. Please click the link below to reactivate your account:

[activate_link]

or copy-n-paste it to your browser.

Ha elfelejtetted a jelszavad a bejelentkez�si oldalon tudsz �jat k�rni.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Tags�g �jraaktiv�l�sa';
$lang['Signature'] = 'Al��r�s';
$lang['SessionInfo'] = 'Folyamat Inform�ci�';
$lang['SessionID'] = 'Folyamat ID';
$lang['IPAddress'] = 'IP c�m';
$lang['Seconds'] = 'M�sodpercek';
$lang['Updated'] = 'Friss�tve';
$lang['Pages'] = 'Oldalak';
$lang['AutoLogin'] = 'Automatikus bejelentkez�s';
$lang['Enabled'] = 'Bekapcsolva';
$lang['Disabled'] = 'Kikapcsolva';
$lang['Enable'] = 'Bekapcsol';
$lang['Disable'] = 'Kikapcsol';
$lang['AutoLoginSet'] = 'Az automatikus bejelentkez�s s�ti be�ll�tva.';
$lang['AutoLoginUnset'] = 'Az automatikus bejelentkez�s s�ti t�r�lve.';
$lang['RegistrationEmailBody'] = 'Hello,

[board_name] f�rum sz�l hozz�d. Regisztr�lt�l egy tagot [account_name] n�ven. Az al�bbi felhaszn�l�n�v �s jelsz� p�rossal tudsz bejelentkezni:

Felhaszn�l�n�v: [account_name]
Jelsz�: [password]

Ha elfelejtetted a jelszavad a bejelentkez�si oldalon tudsz �jat k�rni. K�sz�nj�k a regisztr�ci�dat!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Tags�g Regisztr�l�sa';
$lang['PublicEmail'] = 'E-mail c�m l�that�';
$lang['PublicLastLogin'] = 'Utols� bejelentkez�s ideje l�that�';
$lang['DateFormat'] = 'D�tum form�tuma';
$lang['DateFormatHelp'] = 'A d�tum form�tuma megegyezik a PHP %s funkci�j�val.';
$lang['Again'] = '�jra';
$lang['NewPassword'] = '�j jelsz�';
$lang['NewPasswordAgain'] = '�j jelsz� (�jra)';
$lang['PasswordEdited'] = 'Jelszavad sikeresen megv�ltoztatva.';
$lang['DetailedOnlineList'] = 'R�szletes online lista';
$lang['Detailed'] = 'R�szletes';
$lang['OptionsEdited'] = 'Az oldal be�llit�said sikeresen megv�ltoztatva.';
$lang['ProfileEdited'] = 'A profilod sikeresen megv�ltoztatva.';
$lang['Started'] = 'Ind�tva';
$lang['Minutes'] = 'Percek';
$lang['Hours'] = '�r�k';
$lang['Days'] = 'Napok';
$lang['Weeks'] = 'Hetek';
$lang['TotalTime'] = '�ssz. id�';
$lang['NoTopics'] = 'Ez a f�rum nem tartalmaz t�m�t. Neked kell megtenni az els�t!';
$lang['NotPermitted'] = 'You don\'t have the appropriate permissions to do this. If in doubt, contact the administrator.';
$lang['Language'] = 'Nyelv';
$lang['Template'] = 'Kin�zet';
$lang['NoSuchMember'] = 'The member %s does not exist (anymore) at this board.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'This feature is disabled because this board can not set or read cookies with your browser.';
$lang['LogOutConfirm'] = 'Biztos ki akarsz l�pni?';
$lang['Cancel'] = 'M�gse';
$lang['Timezone'] = 'Id�z�na';
$lang['DST'] = 'Daylight saving times';
$lang['Sticky'] = 'Sticky';
$lang['PostNewTopic'] = '�j T�ma';
$lang['ForumIsLocked'] = 'Forum is locked';
$lang['NoSuchTopic'] = 'The topic %s does not exist (anymore) at this board.';
$lang['PostReply'] = 'V�lasz k�ld�se';
$lang['TopicIsLocked'] = 'A t�ma z�rolva';
$lang['Post'] = 'Hozz�sz�l';
$lang['Edit'] = 'Szerkeszt';
$lang['Delete'] = 'T�r�l';
$lang['Quote'] = 'Id�z';
$lang['Wrote'] = '%s �rta';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'The topic you are trying to post in is locked. Only authorized people can still post replies.';
$lang['Content'] = 'Tartalom';
$lang['Options'] = 'Be�ll�t�sok';
$lang['EnableBBCode'] = 'BBCode bekapcsol�sa.';
$lang['EnableSmilies'] = 'Mosolyg�sok bekapcsol�sa.';
$lang['EnableSig'] = 'Al��r�s bekapcsol�sa.';
$lang['EnableHTML'] = 'HTML bekapcsol�sa.';
$lang['LockTopicAfterPost'] = 'Lock topic after posting.';
$lang['Guest'] = 'Vend�g';
$lang['BackToPrevious'] = 'Back to the previous page';
$lang['NoSuchPost'] = 'The post %s does not exist (anymore) at this board.';
$lang['UserPostedImage'] = 'User posted image';
$lang['ForumIsLockedExplain'] = 'This forum is locked. Only authorized people can post new topics.';
$lang['MakeTopicSticky'] = 'Make the topic sticky.';
$lang['QuickReply'] = 'Gyors v�lasz';
$lang['ReturnToTopicAfterPosting'] = 'Return to the topic after posting';
$lang['ModeratorList'] = 'Moderators: %s.';
$lang['Nobody'] = 'Senki';
$lang['DeleteTopic'] = 'Delete topic';
$lang['MoveTopic'] = 'Move topic';
$lang['LockTopic'] = 'Lock topic';
$lang['UnlockTopic'] = 'Unlock topic';
$lang['MakeSticky'] = 'Make sticky';
$lang['ConfirmDeleteTopic'] = 'Are you sure you want to delete the topic %s in the forum %s? This is irreversible!';
$lang['MakeNormalTopic'] = 'Make normal topic';
$lang['OldForum'] = 'R�gi f�rum';
$lang['NewForum'] = '�j f�rum';
$lang['IAccept'] = 'Elfogadom';
$lang['IDontAccept'] = 'Nem fogadom el';
$lang['OpenLinksNewWindow'] = 'Open external links in new windows';
$lang['HideAllAvatars'] = 'Hide all avatars';
$lang['HideUserinfo'] = 'Hide user information';
$lang['HideAllSignatures'] = 'Hide all signatures';
$lang['HideFromOnlineList'] = 'Hide from online list';
$lang['PageLinks'] = 'Oldal: %s';
$lang['Preview'] = 'El�n�zet';
$lang['DeletePost'] = 'Delete post';
$lang['ConfirmDeletePost'] = 'Are you sure you want to delete this post in the topic %s? This is irreversible!';
$lang['EditPost'] = 'Edit post';
$lang['PostEditInfo'] = 'Last edit by %s on %s.';
$lang['PasswdInfo'] = 'A jelsz� csak bet�ket �s sz�mokat tartalmazhat �s minimum %d karakter hossz�nak kell lennie.';
$lang['SubscribeTopic'] = 'Feliratkoz�s';
$lang['UnsubscribeTopic'] = 'Leiratkoz�s';
$lang['NewReplyEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. Someone ([poster_name]) posted a reply to a topic you are subscribed to ("[topic_title]"). To view the reply, please click the following link: [topic_link].

Click the following link if you wish to unsubscribe from the topic (requires login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = '�j v�lasz "%s"';
$lang['SubscribedTopic'] = 'Feliratkozt�l erre a t�m�ra.';
$lang['UnsubscribedTopic'] = 'Leiratkozt�l err�l a t�m�r�l.';
$lang['SubscribeToThisTopic'] = 'Feliratkoz�s a t�m�ra.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Feliratkoz�sok';
$lang['NoSubscribedTopics'] = 'Jelenleg egyetlen t�m�ra se iratkozt�l fel.';
$lang['LatestUpdate'] = 'Utolj�ra friss�tve';
$lang['Unknown'] = 'Ismeretlen';
$lang['PostingTopic'] = 'Hozz�sz�l�s k�ld�se a %s t�m�ban';
$lang['PostingReply'] = 'V�lasz k�ld�se a %s t�m�ban';
$lang['MovingTopic'] = '%s t�ma mozgat�sa';
$lang['DeletingTopic'] = '%s t�ma t�rl�se';
$lang['EditingPost'] = 'Hozz�sz�l�sok szerkeszt�se %s t�m�ban';
$lang['DeletingPost'] = 'Hozz�sz�l�sok t�rl�se %s t�m�ban';
$lang['DebugMode'] = 'Debug mode';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = 'Server load';
$lang['TemplateSections'] = 'Template sections';
$lang['SQLQueries'] = 'SQL queries';
$lang['RealName'] = 'Val�di n�v';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administrators';
$lang['Moderators'] = 'Moderators';
$lang['TopicReview'] = 'Topic review';
$lang['ViewMorePosts'] = 'View more posts';
$lang['DisplayedName'] = 'Megjelen�tend� n�v';
$lang['UsernameInfo'] = 'A felhaszn�l�n�v csak bet�ket �s sz�mokat tartalmazhat, meg sz�k�zt, _ �s -.';
$lang['Code'] = 'K�d';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Sz�n';
$lang['Size'] = 'M�ret';
$lang['ViewingForum'] = 'F�rum: %s';
$lang['ViewingTopic'] = 'T�ma: %s';
$lang['FloodIntervalWarning'] = 'The administrator has specified that you can only post with intervals of %d seconds. Please wait at least %d seconds before resubmitting the form.';
$lang['AutoSubscribe'] = 'Auto subscribe';
$lang['OnPostingNewTopics'] = 'On posting topics';
$lang['OnPostingNewReplies'] = 'On posting replies';
$lang['UnsubscribeSelected'] = 'Unsubscribe selected';
$lang['SelectedTopicsUnsubscribed'] = 'You are now unsubscribed from the selected topics.';
$lang['Birthday'] = 'Sz�let�snap';
$lang['Age'] = 'Kor';
$lang['Month'] = 'H�nap';
$lang['Day'] = 'Nap';
$lang['Year'] = '�v';
$lang['PoweredBy'] = '%s szolg�ltatva %s �ltal';
$lang['ForumSoftware'] = 'F�rum Softwre';
$lang['GeneralStats'] = 'Altal�nos statisztik�k';
$lang['Members'] = 'Tagok';
$lang['TopicsPerDay'] = 'Topics per day';
$lang['MembersPerDay'] = 'Members per day';
$lang['BoardStarted'] = 'Board started';
$lang['BoardAge'] = 'Board age';
$lang['NewestMember'] = 'Newest member';
$lang['MostActiveTopics'] = 'Most active topics';
$lang['MostViewedTopics'] = 'Most viewed topics';
$lang['PostsPerMember'] = 'Posts per member';
$lang['PostsPerForum'] = 'Posts per forum';
$lang['Categories'] = 'Categories';
$lang['Forums'] = 'Forums';
$lang['TopicsPerMember'] = 'Topics per member';
$lang['TopicsPerForum'] = 'Topics per forum';
$lang['MostActiveMembers'] = 'Most active members';
$lang['MostActiveForums'] = 'Most active forums';
$lang['DisplayedNameTaken'] = 'Sorry, %s has already been taken as a login name or a displayed name.';
$lang['SearchKeywords'] = 'Keres�si szavak';
$lang['SearchMode'] = 'Keres�si m�d';
$lang['SearchAuthor'] = 'Szerz� keres�se';
$lang['SearchForums'] = 'F�rumokban keres';
$lang['AllForums'] = '�sszes f�rum';
$lang['NoSearchResults'] = 'Nincs tal�lat.';
$lang['SearchMembersPosts'] = 'Search member\'s posts';
$lang['CurrentPage'] = 'Aktu�lis oldal';
$lang['MemberGuestOnline'] = 'In the last %d minutes, %d member (%d hidden) and %d guest have visited the forums.';
$lang['MembersGuestOnline'] = 'In the last %d minutes, %d members (%d hidden) and %d guest have visited the forums.';
$lang['MemberGuestsOnline'] = 'In the last %d minutes, %d member (%d hidden) and %d guests have visited the forums.';
$lang['MembersGuestsOnline'] = 'In the last %d minutes, %d members (%d hidden) and %d guests have visited the forums.';
$lang['WhosOnline'] = 'Who\'s Online';
$lang['Done'] = 'K�sz';
$lang['KeywordsExplain'] = 'Any keywords of at least %d characters separated by spaces.';
$lang['BCCMyself'] = 'Send a copy to my own e-mail address.';
$lang['Save'] = 'Ment';
$lang['Add'] = 'Hozz�ad';
$lang['MarkAllAsRead'] = '�sszes olvasotnak jel�l�se';
$lang['MarkAllAsReadDone'] = 'All forums and topics are now marked as read.';
$lang['StringTooShort'] = '%s is too short, at least %d characters are required.';
$lang['StringTooLong'] = '%s is too long, only %d characters are allowed.';
$lang['Upload'] = 'Felt�ltve';
$lang['RegistrationsDisabled'] = 'Regisztr�ci� kikapcsolva';
$lang['PostFormShortcut'] = 'Press Alt+S (Control+S on Apple) to quickly send this form.';
$lang['EditThisMember'] = 'Edit this member';
$lang['EmailTaken'] = 'The e-mail address %s is already being used on this board. Please choose an other address.';
$lang['RegisteredNotActivatedByAdmin'] = 'Your account %s has now been created. Before you will be able to login, the administrator of this forum must activate your account. Please allow some time for this to happen.';
$lang['AdminActivationEmailBody'] = 'Hello,

[board_name] f�rum sz�l hozz�d. Regisztr�lt�l egy tags�got [account_name] n�ven. A f�rum adminisztr�tornak aktiv�lnia kell a tags�godat. Ha ez megt�rt�nt bel�phetsz az al�bbi adatokkal:

Felhaszn�l�n�v: [account_name]
Jelsz�: [password]

Ha elfelejtetted a jelszavad a bejelentkez�si oldalon tudsz �jat k�rni. K�sz�nj�k a regisztr�ci�dat!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'A tags�g aktiv�l�sra v�r';
$lang['NewEmailNotActivatedByAdmin'] = 'Your profile has been edited succesfully. Because you have changed the e-mail address for your account %s, the admin of this board needs to reactivate it. You will be logged out in the mean time.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hello,

This is the forum software of [board_name] speaking. You have just altered the e-mail address of your account [account_name], but it has not been reactivated yet. The administrator of the board first needs to reactivate your account. Please allow some time for this to happen.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'A tags�g �jraaktiv�l�sra v�r';
$lang['AdminActivatedAccountEmailBody'] = 'Hello,

[board_name] f�rum sz�l hozz�d. Az adminisztr�tor aktiv�lta a tags�godat [account_name]. Most m�r bejelentkezhetsz.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Tags�g aktiv�lva';
$lang['Sort'] = 'Rendez�s';
$lang['SortBy'] = 'Rendezve';
$lang['SortBy-displayed_name'] = 'Felhaszn�l�n�v';
$lang['SortBy-real_name'] = 'Val�di n�v';
$lang['SortBy-level'] = 'Szint';
$lang['SortBy-rank'] = 'Rang';
$lang['SortBy-regdate'] = 'Regisztr�lt';
$lang['SortBy-posts'] = 'Hoz�sz�l�sok';
$lang['SortBy-latest_post'] = 'Utols� hozz�sz�l�s';
$lang['SortBy-topic_title'] = 'T�ma c�me';
$lang['SortBy-forum'] = 'F�rum';
$lang['SortBy-author'] = 'Szerz�';
$lang['SortBy-replies'] = 'V�laszok';
$lang['SortBy-views'] = 'Megn�zve';
$lang['SortOrder-asc'] = 'N�vekv�';
$lang['SortOrder-desc'] = 'Cs�kken�';
$lang['NoUsersFound'] = 'Nincs tag.';
$lang['SaveConfigManually'] = 'Because config.php is not writable, UseBB cannot save the configuration values itself. Please save the following contents to config.php and upload if necessary.';
$lang['ShowResultsAs'] = 'Eredm�nyek mutat�sa mint';
$lang['ShowMode-topics'] = 'T�m�k';
$lang['ShowMode-posts'] = 'Hozz�sz�l�sok';
$lang['Mode-and'] = '�sszes kulcssz� (AND)';
$lang['Mode-or'] = 'B�rmelyik kulcssz� (OR)';
$lang['ExactMatch'] = 'Teljes egyez�s';
$lang['IncludeGuests'] = 'Vend�gek is';
$lang['Top'] = 'Teteje';
$lang['Bottom'] = 'Alja';
$lang['Action'] = 'M�velet';

?>
