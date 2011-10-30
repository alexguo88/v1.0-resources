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
#$lang['character_encoding'] = 'iso-8859-1';
#$lang['language_code'] = 'en';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Hjem';
$lang['YourPanel'] = 'Dit Panel';
$lang['Register'] = 'Registr�r';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'S�g';
$lang['ActiveTopics'] = 'Aktive Emne';
$lang['LogIn'] = 'Log Ind';
$lang['LogOut'] = 'Log Ud (%s)';
$lang['MemberList'] = 'Medlems Liste';
$lang['StaffList'] = 'Staff List';
$lang['Statistics'] = 'Statistik';
$lang['ContactAdmin'] = 'Kontakt Admin';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Emner';
$lang['Posts'] = 'Indl�g';
$lang['LatestPost'] = 'Seneste Indl�g';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nye indl�g';
$lang['NoNewPosts'] = 'Ingen ny indl�g';
$lang['LockedNewPosts'] = 'L�st (nye indl�g)';
$lang['LockedNoNewPosts'] = 'L�st (ingen nye indl�g)';
$lang['Locked'] = 'L�st';
$lang['LastLogin'] = 'Sidste login';
$lang['VariousInfo'] = 'Diverse information';
$lang['IndexStats'] = 'Dette board har %d indl�g i %d emner og har %d registerede medlemmer.';
$lang['NewestMemberExtended'] = 'Velkommen til vores nyeste medlem: %s.';
$lang['Username'] = 'Brugernavn';
$lang['CurrentPassword'] = 'Nuv�rende password';
$lang['UserID'] = 'Bruger ID';
$lang['NoSuchForum'] = 'Forumet %s eksisterer ikke l�ngere!';
$lang['WrongPassword'] = 'Beklager, passwordet er ikke korrekt! F� tilsendt et nyt via login formen hvis du har glemt det.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Send et nyt password';
$lang['RegisterNewAccount'] = 'Registr�r en ny konto';
$lang['RememberMe'] = 'Husk mig';
$lang['Yes'] = 'Ja';
$lang['No'] = 'Nej';
$lang['NotActivated'] = 'Din konto %s er ikke blevet aktiveret endnu. Tjek venligst din mail for insktruktioner om hvordan aktivering udf�res';
$lang['Error'] = 'Fejl';
$lang['Profile'] = '%s\' profil';
$lang['Level'] = 'Level';
$lang['Administrator'] = 'Administrator';
$lang['Moderator'] = 'Moderator';
$lang['Registered'] = 'Registreret';
$lang['Email'] = 'E-mail addresse';
$lang['ContactInfo'] = 'Kontact Information';
$lang['Password'] = 'Password';
$lang['PasswordAgain'] = 'Password (igen)';
$lang['EverythingRequired'] = 'Alle punkter er p�kr�vet!';
$lang['RegisteredNotActivated'] = 'Din konto %s er nu blevet oprettet. En email er blevet sendt til %s med instruktioner om hvordan du aktiverer din konto. Aktivering er p�kr�vet f�r brug af login.';
$lang['RegisteredActivated'] = 'Din konto %s er nu oprettet. Du kan logge ind med det samme..';
$lang['Never'] = 'Aldrig';
$lang['Member'] = 'Medlem';
$lang['RegistrationActivationEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name].  Du har netop registreret kontoen [account_name], men den er endnu ikke aktiveret. Klik venligt f�lgende link for at aktivere:

[activate_link]

eller copy-paste det ind i din browser. Efterf�lgende kan du logge ind med f�lgende:

Brugernavn: [account_name]
Password: [password]

Hvis du glemmer dit password, kan du f� tilsendt et nyt via vores forum. Tak for din registrering.

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Dette board er tomt. Admin har endnu ikke oprette nogle emner.';
$lang['NoForums'] = 'This is an empty board. The administrator has not yet created any forums.';
$lang['AlreadyActivated'] = 'Konto med ID %d er allerede aktiveret.';
$lang['Activate'] = 'Aktiver';
$lang['Activated'] = 'Din konto %s er nu genaktiveret. Du blive logget ind automatisk';
$lang['Activated'] = 'Your account %s has now been (re)activated. You will be logged in automatically.';
$lang['WrongActivationKey'] = 'Vi var ikke istand til at aktivere din konto med ID %d. Aktiverings n�glen er ikke korrekt. Er du sikker p�, at du ikke har f�et tilsendt et nyt password i mellemtiden?';
$lang['RegisterIt'] = 'Du kan oprette via \'Registrer\' linket.';
$lang['BoardClosed'] = 'Board Lukket';
$lang['SendpwdEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name].  Du har efterspurgt et nyt login til kontoen [account_name]. Du kan nu logge ind med f�lgende:

Brugernavn: [account_name]
Password: [password]

Hvis du glemmer dit password, kan du f� tilsendt et nyt via vores forum.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nyt Password';
$lang['SendpwdActivated'] = 'Dit nye password for kontoen %s er blevet sendt til %s. Du er nu istand til at logge ind med dit nye password.';
$lang['ForumIndex'] = 'Forum Index';
$lang['MissingFields'] = 'F�lgende felter mangler, eller er ikke udfyldt korrekt: %s.';
$lang['TermsOfUseContent'] = 'You acknowledge that all posts found at this board are the opinions of its authors and not of the web site\'s webmaster, forum administrators or moderators, except for posts written by one of them.

You agree not to post any abusive, offensive, obscene or inappropriate content or content that is forbidden by law on these forums. Doing so can cause your account on these forums to get banned or removed and your internet service provider eventually noticed about your behaviour. Therefore, your IP address is stored with every post you place. You also agree that administrators and moderators are permitted to edit, delete, move or lock your topics when they think this is needed.

All information you post to these forums is being stored in a database system for future reference. The board administrators will not redistribute this information without your permission or obligation by legal issues. However, nor the webmaster, administrators or moderators nor the UseBB Team can be held responsible when any information is being leaked as a result of a hacking attempt.

This board uses cookies to store temporary information needed by the forum system on your local computer. Also, a cookie can store your user ID and your password in an encrypted form to enable automatic login of your account if you chose to enable this. If you don\'t want any cookies to be stored on your computer, refer to your browser\'s manual about disabling cookies.

By clicking the "I accept" button, you agree to these terms and conditions.';
$lang['TermsOfUse'] = 'Regler';
$lang['RegistrationActivationEmailSubject'] = 'Konto aktivering';
$lang['NeedToBeLoggedIn'] = 'Login er p�kr�vet. Klik \'Log Ind\' linket for at logge ind, eller opret en ny konto.';
$lang['WrongEmail'] = '%s er ikke den rigtige email til kontoen %s. Hvis du ikke kan huske din email, kan du kontakte administratoren.';
$lang['Topic'] = 'Emne';
$lang['Author'] = 'Forfatter';
$lang['Replies'] = 'Besvarelser';
$lang['Views'] = 'Visninger';
$lang['Note'] = 'Note';
$lang['Hidden'] = 'Skjuly';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Send en meddelelse';
$lang['NoViewableForums'] = 'Du har ikke tilladelse til at se nogle forumer p� dette bruger niveau. Hvis du ikke er logget ind, s� g�r venligst dette. Hvis du er logget ind skulle du sikkert ikke v�re her.';
$lang['Rank'] = 'Rank';
$lang['Location'] = 'Lokation';
$lang['Website'] = 'Webside';
$lang['Occupation'] = 'Besk�ftigelse';
$lang['Interests'] = 'Interesser';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Din IP  %s er blevet udelukket!.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Udelukket konto';
$lang['BannedUserExplain'] = 'Din konto er %s er udelukket fra dette forum. Af f�lgende grund:';
$lang['BannedUsername'] = 'Brugeren %s er udelukket fra dette forum.';
$lang['BannedEmail'] = 'E-mail addressen %s er udelukket fra dette forum.';
$lang['PostsPerDay'] = 'Poster pr dag';
$lang['BoardClosedOnlyAdmins'] = 'Kun administrator kan logge ind, n�r boardet er l�st.';
$lang['NoPosts'] = 'Ingen Posts';
$lang['NoActivetopics'] = 'Der er ingen aktive emner.';
$lang['AuthorDate'] = 'Af %s den %s';
$lang['ByAuthor'] = 'Af: %s';
$lang['OnDate'] = 'Den: %s';
$lang['Re'] = 'Sv:';
$lang['MailForm'] = 'Send en e-mail til %s';
$lang['SendEmail'] = 'Send en besked til %s';
$lang['NoMails'] = 'Denne bruger har valgt, ikke at kunne modtage e-mails.';
$lang['UserEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name]. Brugeren [username] har sendt dig en besked:

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Din e-mail til %s er blevet sendt.';
$lang['To'] = 'Til';
$lang['From'] = 'Fra';
$lang['Subject'] = 'Emne';
$lang['Body'] = 'Tekst';
$lang['Send'] = 'Send';
$lang['EditProfile'] = 'Rediger Profil';
$lang['EditOptions'] = 'Rediger Muligheder';
$lang['EditPasswd'] = 'Rediger Password';
$lang['PanelHome'] = 'Panel Hjem';
$lang['NewEmailNotActivated'] = 'Din profil er blevet �ndret. Da du har �ndret emailen for din konto %s, skal du gen-aktivere den. En email er blevet tilsendt med instruktioner, i mellemtiden vil du blive logget ud.';
$lang['Required'] = 'P�kr�vet';
$lang['ViewProfile'] = 'Vis Profil';
$lang['NewEmailActivationEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name]. Du har �ndret emailen p� din konto ([account_name]), men den er ikke blevet gen-aktiveret endnu. Brug venligt f�lgende link for gen-aktivering:

[activate_link]

eller copy-paste det ind i din browser.

Hvis du glemmer dit password, kan du f� tilsendt et nyt via vores forum. Tak for din registrering.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Konto gen-aktivering';
$lang['Signature'] = 'Signatur';
$lang['SessionInfo'] = 'Session Information';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = 'IP addresse';
$lang['Seconds'] = 'Sekunder';
$lang['Updated'] = 'Updateret';
$lang['Pages'] = 'Sider';
$lang['AutoLogin'] = 'Auto login';
$lang['Enabled'] = 'Sl� til';
$lang['Disabled'] = 'Sl� fra';
$lang['Enable'] = 'Sl� til';
$lang['Disable'] = 'Sl� fra';
$lang['AutoLoginSet'] = 'Auto login er nu sl�et til.';
$lang['AutoLoginUnset'] = 'Auto login er nu sl�et fra.';
$lang['RegistrationEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name]. Du har oprettet kontoen [account_name]. Du kan nu logge ind med f�lgende:

Brugernavn: [account_name]
Password: [password]

Hvis du glemmer dit password, kan du f� tilsendt et nyt via vores forum. Tak for din registrering.

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Konto registrering';
$lang['PublicEmail'] = 'Offentlig e-mail addresse';
$lang['PublicLastLogin'] = 'Offentlig sidste login tid';
$lang['DateFormat'] = 'Dato format';
$lang['DateFormatHelp'] = 'Dette dato format er tilsvarende %s funktionen i PHP.';
$lang['Again'] = 'Igen';
$lang['NewPassword'] = 'Nyt password';
$lang['NewPasswordAgain'] = 'Nyt password (igen)';
$lang['PasswordEdited'] = 'Din password er gemt.';
$lang['DetailedOnlineList'] = 'Detajleret online liste';
$lang['Detailed'] = 'Detaljeret';
$lang['OptionsEdited'] = 'Dine �ndringer er gemt.';
$lang['ProfileEdited'] = 'Din profil er blevet �ndret.';
$lang['Started'] = 'Startet';
$lang['Minutes'] = 'Minutter';
$lang['Hours'] = 'Timer';
$lang['Days'] = 'Dage';
$lang['Weeks'] = 'Uger';
$lang['TotalTime'] = 'Total tid';
$lang['NoTopics'] = 'Dette forum indeholde endnu ingen emner, du er velkommen til at oprette den f�rste!';
$lang['NotPermitted'] = 'Du har ikke tilladelse til dette.';
$lang['Language'] = 'Sprog';
$lang['Template'] = 'Skabelon';
$lang['NoSuchMember'] = 'Medlemmet %s eksisterer ikke l�ngere.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Denne feature er ikke tilg�ngelig, da cookies ikke er sl�et til i din browser.';
$lang['LogOutConfirm'] = 'Er du sikker p� at du vil logge ud?';
$lang['Cancel'] = 'Annuller';
$lang['Timezone'] = 'Tidszone';
$lang['DST'] = 'Daylight saving times';
$lang['Sticky'] = 'S�t fast';
$lang['PostNewTopic'] = 'Nyt Emne';
$lang['ForumIsLocked'] = 'Forumet er l�st';
$lang['NoSuchTopic'] = 'Emnet %s eksisterer ikke l�ngere.';
$lang['PostReply'] = 'Send svar';
$lang['TopicIsLocked'] = 'Emne er l�st';
$lang['Post'] = 'Post';
$lang['Edit'] = 'Rediger';
$lang['Delete'] = 'Slet';
$lang['Quote'] = 'Quote';
$lang['Wrote'] = '%s skrev';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Emnet du pr�ver at poste til er l�st. Kun tilladte brugere kan besvare .';
$lang['TopicIsLockedExplain'] = 'The topic you are trying to post in is locked. Only authorized people can still post replies.';
$lang['Content'] = 'Indhold';
$lang['Options'] = 'Muligheder';
$lang['EnableBBCode'] = 'Sl� BBCode til.';
$lang['EnableSmilies'] = 'Sl� smilies til.';
$lang['EnableSig'] = 'Sl� signatur til.';
$lang['EnableHTML'] = 'Sl� HTML til.';
$lang['LockTopicAfterPost'] = 'L�s emne efter post.';
$lang['Guest'] = 'G�st';
$lang['BackToPrevious'] = 'Tlbage til sidste side';
$lang['NoSuchPost'] = 'Posten %s eksisterer ikke l�ngere.';
$lang['UserPostedImage'] = 'Bruger posted billede';
$lang['ForumIsLockedExplain'] = 'Dette forum er l�st. Kun tilladte brugere kan poste nye emner.';
$lang['MakeTopicSticky'] = 'S�t emnet fast.';
$lang['QuickReply'] = 'Hurtig svar';
$lang['ReturnToTopicAfterPosting'] = 'Vend tilbage til emne efter opslag';
$lang['ModeratorList'] = 'Moderatorer: %s.';
$lang['Nobody'] = 'Ingen';
$lang['DeleteTopic'] = 'Slet emne';
$lang['MoveTopic'] = 'Flyt emne';
$lang['LockTopic'] = 'L�s emne';
$lang['UnlockTopic'] = 'L�s emne op';
$lang['MakeSticky'] = 'S�t fast';
$lang['ConfirmDeleteTopic'] = 'Are you sure you want to delete the topic %s in the forum %s? This is irreversible!';
$lang['ConfirmDeleteTopic'] = 'Er du sikker p� at du vil slette dette emne %s? i forum %s Dette kan ikke fortrydes!';
$lang['MakeNormalTopic'] = '�nre til normalt emne';
$lang['OldForum'] = 'Gammelt forum';
$lang['NewForum'] = 'Nyt forum';
$lang['IAccept'] = 'Jeg accepterer';
$lang['IDontAccept'] = 'Jeg accepterer ikke';
$lang['OpenLinksNewWindow'] = '�bn eksterne links i ny browser';
$lang['HideAllAvatars'] = 'Gem alle avatarer';
$lang['HideUserinfo'] = 'Gem bruger info';
$lang['HideAllSignatures'] = 'Gem alle signaturer';
$lang['HideFromOnlineList'] = 'Gem fra online liste';
$lang['PageLinks'] = 'Side: %s';
$lang['Preview'] = 'Visning';
$lang['DeletePost'] = 'Slet post';
$lang['ConfirmDeletePost'] = 'Er du sikker p� at du vil slette denne post i emne %s? Dette kan ikke fortrydes!';
$lang['EditPost'] = 'Edit post';
$lang['PostEditInfo'] = 'Sidst �ndret af %s d. %s.';
$lang['PasswdInfo'] = 'Passwordet kan kun indeholde alphanumeriske bogstaver og skal have en minimum l�ngde p� %d bogstaver';
$lang['SubscribeTopic'] = 'Tilmeld';
$lang['UnsubscribeTopic'] = 'Frameld';
$lang['NewReplyEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name]. [poster_name] har lagt en besked p� et emne du er tilmeldt ("[topic_title]").
Brug f�lgende link for at se besvarelsen: [topic_link].

Klik f�lgende link hvis du �nsker at framelde dig emnet (kr�ver login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nyt svar i "%s"';
$lang['SubscribedTopic'] = 'Du er nu tilmeldt dette emne';
$lang['UnsubscribedTopic'] = 'Du er nu frameldt dette emne.';
$lang['SubscribeToThisTopic'] = 'Tilmeld dette emne.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Tilmeldinger';
$lang['NoSubscribedTopics'] = 'Du er ikke tilmeldt nogle emner.';
$lang['LatestUpdate'] = 'Seneste opdatering';
$lang['Unknown'] = 'Ukendt';
$lang['PostingTopic'] = 'Poster et emne i %s';
$lang['PostingReply'] = 'Poster et svar p� %s';
$lang['MovingTopic'] = 'Moving topic %s';
$lang['DeletingTopic'] = 'Sletter emne %s';
$lang['EditingPost'] = '�ndrede post p� %s';
$lang['DeletingPost'] = 'Sletede post p� %s';
$lang['DebugMode'] = 'Debug mode';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = 'Server load';
$lang['TemplateSections'] = 'Template sektioner';
$lang['SQLQueries'] = 'SQL queries';
$lang['RealName'] = 'Rigtige navn';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administratorer';
$lang['Moderators'] = 'Moderatorer';
$lang['TopicReview'] = 'Emne vurdering';
$lang['ViewMorePosts'] = 'Se flere poster';
$lang['DisplayedName'] = 'Viste navn';
$lang['UsernameInfo'] = 'Et brugernavn m� kun indeholde alphanumeriske bogstaver, mellemrum, _ og -.';
$lang['Code'] = 'Code';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Farve';
$lang['Size'] = 'St�rrelse';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Emne: %s';
$lang['FloodIntervalWarning'] = 'The administrator has specified that you can only post with intervals of %d seconds. Please wait at least %d seconds before resubmitting the form.';
$lang['AutoSubscribe'] = 'Auto tilmeld';
$lang['OnPostingNewTopics'] = 'Ved at poste emner';
$lang['OnPostingNewReplies'] = 'Ved at poste svar';
$lang['UnsubscribeSelected'] = 'Frameld valgte';
$lang['SelectedTopicsUnsubscribed'] = 'Du er nu frameldt de valgte emner.';
$lang['Birthday'] = 'F�dselsdag';
$lang['Age'] = 'Alder';
$lang['Month'] = 'M�ned';
$lang['Day'] = 'Dag';
$lang['Year'] = '�r';
$lang['PoweredBy'] = '%s bruger %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'Generel statistik';
$lang['Members'] = 'Medlemmer';
$lang['TopicsPerDay'] = 'Emner pr dag';
$lang['MembersPerDay'] = 'Medlemmer pr dag';
$lang['BoardStarted'] = 'Board startet';
$lang['BoardAge'] = 'Board alder';
$lang['NewestMember'] = 'Nyester medlemmer';
$lang['MostActiveTopics'] = 'Mest aktive emner';
$lang['MostViewedTopics'] = 'Mest l�ste emner';
$lang['PostsPerMember'] = 'Poster per medlem';
$lang['PostsPerForum'] = 'Poster per forum';
$lang['Categories'] = 'Kategorier';
$lang['Forums'] = 'Forumer';
$lang['TopicsPerMember'] = 'Emner per medlem';
$lang['TopicsPerForum'] = 'Emner per forum';
$lang['MostActiveMembers'] = 'Mest aktiver medlemmer';
$lang['MostActiveForums'] = 'Mest aktive forumer';
$lang['DisplayedNameTaken'] = 'Beklager, %s er allerede i brug.';
$lang['SearchKeywords'] = 'S�geord';
$lang['SearchMode'] = 'S�ge m�de';
$lang['SearchAuthor'] = 'S�g forfatter';
$lang['SearchForums'] = 'S�g forum';
$lang['AllForums'] = 'Alle forumer';
$lang['NoSearchResults'] = 'Ingen s�geresultater fundet.';
$lang['SearchMembersPosts'] = 'S�g i meldlemers poster';
$lang['CurrentPage'] = 'Nuv�rende side';
$lang['MemberGuestOnline'] = 'I de sidste %d minutter har %d medlemmer (%d skjulte) og %d g�ster bes�gt forumerne.';
$lang['MembersGuestOnline'] = 'I de sidste %d minutter har %d medlemmer (%d skjulte) og %d g�ster bes�gt forumerne.';
$lang['MemberGuestsOnline'] = 'I de sidste %d minutter har %d medlemmer (%d skjulte) og %d g�ster bes�gt forumerne.';
$lang['MembersGuestsOnline'] = 'I de sidste %d minutter har %d medlemmer (%d skjulte) og %d g�ster bes�gt forumerne.';
$lang['WhosOnline'] = 'Hvem er online';
$lang['Done'] = 'F�rdig';
$lang['KeywordsExplain'] = 'Any keywords of at least %d characters separated by spaces.';
$lang['BCCMyself'] = 'Send en kopi til min egen email.';
$lang['Save'] = 'Gem';
$lang['Add'] = 'Tilf�j';
$lang['MarkAllAsRead'] = 'Mark�r alle som l�st';
$lang['MarkAllAsReadDone'] = 'Alle forumer og emner er nu valgt.';
$lang['StringTooShort'] = '%s er for kort, mindst %d bogstaver er p�kr�vet.';
$lang['StringTooLong'] = '%s er for langt, maks %d bogstaver er tilladt';
$lang['Upload'] = 'Upload';
$lang['RegistrationsDisabled'] = 'Registrering sl�et fra.';
$lang['PostFormShortcut'] = 'Hold Alt+S (Control+S p� Apple) for hurtigt at sende denne form.';
$lang['EditThisMember'] = 'Rediger dette medlem';
$lang['EmailTaken'] = 'Din email %s er allerede i brug. V�lg venligst en anden.';
$lang['RegisteredNotActivatedByAdmin'] = 'Din konto %s er nu blevet oprettet. F�r du kan logge ind, skal din konto aktiveres. Dette kan tage lidt tid, vi takker for din t�lmodighed.';
$lang['AdminActivationEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name]. Du har registreret kontoen [account_name]. Administratoren vil aktivere din konto snarest. N�r dette er sket, kan du logge ind med f�lgende:

Brugernavn: [account_name]
Password: [password]

Hvis du glemmer dit password, kan du f� tilsendt et nyt via vores forum. Tak for din registrering.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Konto venter p� aktivering';
$lang['NewEmailNotActivatedByAdmin'] = 'Din profil er blevet �ndret. Da du har �ndret din email, vil du blive logget ud indtil du har aktiveret din konto';
$lang['NewEmailAdminActivationEmailBody'] = 'Hello,

Dette er en autogenereret besked fra forummet [board_name]. Du har �ndret emailen i kontoen [account_name], men den er endnu ikke aktiveret. Administratoren skal f�rst genaktivere din konto. Vi takker for din t�lmodighed.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Konto venter p� gen-aktivering';
$lang['AdminActivatedAccountEmailBody'] = 'Hej,

Dette er en autogenereret besked fra forummet [board_name]. Vi har aktiveret din konto [account_name]. Du er nu velkommen til at logge ind.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Konto aktiveret';
$lang['Sort'] = 'Sorter';
$lang['SortBy'] = 'Sorter efter';
$lang['SortBy-displayed_name'] = 'Brugernavn';
$lang['SortBy-real_name'] = 'Rigtige navn';
$lang['SortBy-level'] = 'Level';
$lang['SortBy-rank'] = 'Rank';
$lang['SortBy-regdate'] = 'Registeret';
$lang['SortBy-posts'] = 'Poster';
$lang['SortBy-latest_post'] = 'Sidste post';
$lang['SortBy-topic_title'] = 'Emne titel';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Forfatter';
$lang['SortBy-replies'] = 'Svar';
$lang['SortBy-views'] = 'Visninger';
$lang['SortOrder-asc'] = 'Stigende';
$lang['SortOrder-desc'] = 'Faldende ';
$lang['NoUsersFound'] = 'Ingen medlemmer fundet.';
$lang['SaveConfigManually'] = 'Because config.php is not writable, UseBB cannot save the configuration values itself. Please save the following contents to config.php and upload if necessary.';
$lang['ShowResultsAs'] = 'Vis resultat som';
$lang['ShowMode-topics'] = 'Emner';
$lang['ShowMode-posts'] = 'Poster';
$lang['Mode-and'] = 'Alle ord (AND)';
$lang['Mode-or'] = 'Nogle ord (OR)';
$lang['ExactMatch'] = 'N�jagtig';
$lang['IncludeGuests'] = 'Inkluder g�ster';
$lang['Top'] = 'Top';
$lang['Bottom'] = 'Bund';
$lang['Action'] = 'Handling';

?>
