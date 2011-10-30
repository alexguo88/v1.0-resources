<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.109 2006/01/07 14:02:27 pc_freak Exp $
	
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
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'cs';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = '�vod';
$lang['YourPanel'] = 'Nastaven�';
$lang['Register'] = 'Registrace';
$lang['FAQ'] = 'N�pov�da';
$lang['Search'] = 'Vyhled�v�n�';
$lang['ActiveTopics'] = 'Kde to �ije';
$lang['LogIn'] = 'P�ihl�en�';
$lang['LogOut'] = 'Odhl�en� (%s)';
$lang['MemberList'] = 'Seznam u�ivatel�';
$lang['StaffList'] = 'Seznam spr�vc�';
$lang['Statistics'] = 'Statistiky';
$lang['ContactAdmin'] = 'Kontakt na administr�tora';
$lang['Forum'] = 'F�rum';
$lang['Topics'] = 'T�mata';
$lang['Posts'] = 'P��sp�vky';
$lang['LatestPost'] = 'Posledn� p��sp�vek';
$lang['RSSFeed'] = 'RSS kan�l';
$lang['NewPosts'] = 'Nov� p��sp�vky';
$lang['NoNewPosts'] = '��dn� nov� p��sp�vky';
$lang['LockedNewPosts'] = 'Uzam�eno (nov� p��sp�vky)';
$lang['LockedNoNewPosts'] = 'Uzam�eno (��dn� nov� p��sp�vky)';
$lang['Locked'] = 'Uzam�eno';
$lang['LastLogin'] = 'Posledn� p�ihl�en�';
$lang['VariousInfo'] = 'Dal�� informace';
$lang['IndexStats'] = 'F�rum obsahuje %d p��sp�vk� v %d t�matech. Registrov�no je %d u�ivatel�.';
$lang['NewestMemberExtended'] = 'Posledn� registrovan� u�ivatel: %s.';
$lang['Username'] = 'U�ivatelsk� jm�no';
$lang['CurrentPassword'] = 'Sou�asn� heslo';
$lang['UserID'] = 'U�ivatelsk� ID';
$lang['NoSuchForum'] = 'F�rum %s neexistuje!';
$lang['WrongPassword'] = 'Omlouv�me se, ale heslo nebylo zad�no spr�vn�! Pokud jste heslo zapomn�li, vy��dejte si pomoc� p�ihla�ovac�ho formul��e nov�.';
$lang['Reset'] = 'Vynulovat';
$lang['SendPassword'] = 'Poslat nov� heslo';
$lang['RegisterNewAccount'] = 'Registrace nov�ho ��tu';
$lang['RememberMe'] = 'Pamatovat si p�ihl�en�';
$lang['Yes'] = 'Ano';
$lang['No'] = 'Ne';
$lang['NotActivated'] = 'V� ��et %s je�t� nebyl aktivov�n. Zkontrolujte, zda v�m ji� na va�i e-mailovou adresu do�ly informace, jak ��et aktivovat.';
$lang['Error'] = 'Chyba';
$lang['Profile'] = 'Profil u�ivatele %s';
$lang['Level'] = 'Postaven�';
$lang['Administrator'] = 'Administr�tor';
$lang['Moderator'] = 'Moder�tor';
$lang['Registered'] = 'Registrov�n';
$lang['Email'] = 'E-mailov� adresa';
$lang['ContactInfo'] = 'Kontakt';
$lang['Password'] = 'Heslo';
$lang['PasswordAgain'] = 'Heslo (znovu)';
$lang['EverythingRequired'] = 'V�echna pol��ka jsou povinn�!';
$lang['RegisteredNotActivated'] = 'V� ��et %s byl vytvo�en. P�ed p�ihl�en�m je v�ak nutn� jej aktivovat. Proto jsme v�m na adresu %s zaslali informace, jak aktivaci prov�st.';
$lang['RegisteredActivated'] = 'V� ��et %s byl vytvo�en. Nyn� se m��ete p�ihl�sit.';
$lang['Never'] = 'Nikdy';
$lang['Member'] = 'Registrovan� u�ivatel';
$lang['RegistrationActivationEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. Zaregistrovali jste si ��et [account_name], ale je�t� je nutn� jej aktivovat. ��et aktivujete kliknut�m na n�sleduj�c� odkaz:

[activate_link]

nebo si jej zkop�rujte a n�sledn� otev�ete v prohl�e�i. Pak se budete moci p�ihl�sit n�sleduj�c�mi �daji:

U�ivatelsk� jm�no: [account_name]
Heslo: [password]

Pokud zapomenete heslo, m��ete si nov� vy��dat p�es odkaz, kter� naleznete u formul��e pro p�ihl�en�. D�kujeme za registraci!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Je�t� nebyla vytvo�ena ��dn� f�ra.';
$lang['AlreadyActivated'] = '��et ID %d byl ji� aktivov�n.';
$lang['Activate'] = 'Aktivovat';
$lang['Activated'] = 'V� ��et %s byl aktivov�n. Nyn� se m��ete p�ihl�sit.';
$lang['WrongActivationKey'] = '��et s ID %d nelze aktivovat. Aktiva�n� kl�� nen� spr�vn�. Ujist�te se, �e jste si d��ve nevy��dali nov� heslo.';
$lang['RegisterIt'] = 'M��ete jej vytvo�it pomoc� odkazu "registrace".';
$lang['BoardClosed'] = 'F�rum je uzav�eno';
$lang['SendpwdEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. Vy��dali jste si nov� heslo k ��tu [account_name]. P�ihl�sit se m��ete pomoc� n�sleduj�c�ch �daj�:

U�ivatelsk� jm�no: [account_name]
Heslo: [password]

Pokud zapomenete heslo, m��ete si nov� vy��dat p�es odkaz, kter� naleznete u formul��e pro p�ihl�en�.

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nov� heslo';
$lang['SendpwdActivated'] = 'Heslo k va�emu ��tu %s bylo odesl�no na adresu %s. Pomoc� nov�ho hesla se nyn� m��ete p�ihl�sit.';
$lang['ForumIndex'] = '�vod';
$lang['MissingFields'] = 'N�sleduj�c� pol��ka chyb� nebo nejsou vypln�na spr�vn�: %s.';
$lang['TermsOfUseContent'] = 'Berete na v�dom�, �e v�echny p��sp�vky ve f�rech vyjad�uj� n�zory jejich autor�, nikoliv spr�vc� t�chto f�r (s v�jimkou p��sp�vk�, kter� psali sami spr�vci).

Souhlas�te, �e nebudete pos�lat ��dn� nevhodn�, hanliv�, ur�liv� nebo neslu�n� p��sp�vky a ani ��dn� jin� materi�ly, kter� jsou v rozporu se z�konem. Pos�l�n� takov�chto p��sp�vk� m��e b�t potrest�no smaz�n�m va�eho ��tu a p��padn� kontaktov�n�m va�eho poskytovatele p�ipojen� k internetu (ISP). Pro p��pad vynucen� t�chto podm�nek jsou zaznamen�v�ny IP adresy autor� jednotliv�ch p��sp�vk�. Berete na v�dom�, �e administr�to�i a moder�to�i jsou opr�vn�ni upravovat, mazat, p�esouvat nebo uzamykat t�mata v p��pad�, �e nevyhovuj� t�mto podm�nk�m.

V�echny informace, kter� ode�lete do f�ra, budou ulo�eny do datab�ze syst�mu a budou j�m vyu��v�ny. Administr�to�i nebudou poskytovat tyto informace bez va�eho svolen� t�et� stran�. Webmaste�i, administr�to�i, moder�to�i a ani auto�i UseBB nejsou zodpov�dni za �kody zp�soben� mo�n�mi hackersk�mi pokusy, kter� by mohly v�st ke kompromitaci dat.

K ukl�d�n� pot�ebn�ch do�asn�ch informac� vyu��v� f�rum cookies na va�em po��ta�i. Do cookie m��e b�t tak� ulo�eno va�e u�ivatelsk� ��slo (ID) a za�ifrovan� heslo, a to v p��pad�, �e povol�te automatick� p�ihla�ov�n� do f�ra. Pokud nechcete, aby byly cookies vyu��v�ny, provedete p��slu�n� nastaven� ve va�em prohl�e�i.

Kliknut�m na tla��tko "Souhlas�m" souhlas�te s t�mito ustanoven�mi a podm�nkami.';
$lang['TermsOfUse'] = 'Podm�nky registrace';
$lang['RegistrationActivationEmailSubject'] = 'Aktivace ��tu';
$lang['NeedToBeLoggedIn'] = 'Nejste p�ihl�eni. Pokud nem�te sv�j ��et, m��ete si jej zalo�it pomoc� odkazu "registrace".';
$lang['WrongEmail'] = 'Omlouv�me se, ale %s nen� e-mailov� adresa ��tu %s. Pokud jste e-mailovou adresu zapomn�li, kontaktujte administr�tora.';
$lang['Topic'] = 'T�ma';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Odpov�di';
$lang['Views'] = 'Zobrazen�';
$lang['Note'] = 'Pozn�mka';
$lang['Hidden'] = 'Skryt�';
$lang['ACP'] = 'Admin';
$lang['SendMessage'] = 'Poslat zpr�vu';
$lang['NoViewableForums'] = 'Nem�te opr�vn�n� prohl�et si diskusn� f�ra. Nejste-li p�ihl�eni, u�i�te tak. Pokud p�ihl�en� jste, tak zde pravd�podobn� nem�te v�bec b�t.';
$lang['Rank'] = 'Postaven�';
$lang['Location'] = 'Bydli�t�';
$lang['Website'] = 'Webov� str�nky';
$lang['Occupation'] = 'Zam�stn�n�';
$lang['Interests'] = 'Z�jmy';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Vstup do f�ra s va�� IP adresou %s je blokov�n.';
$lang['Avatar'] = 'Ikonka';
$lang['AvatarURL'] = 'Adresa ikonky';
$lang['BannedUser'] = 'Zablokovan� ��et';
$lang['BannedUserExplain'] = 'V� ��et %s je zablokov�n. D�vod:';
$lang['BannedUsername'] = 'U�ivatelsk� jm�no %s je blokov�no. Vyberte si, pros�me, jin�.';
$lang['BannedEmail'] = 'E-mailov� adresa %s nen� povolena. Vyberte si, pros�me, jinou.';
$lang['PostsPerDay'] = 'P��sp�vk� za den';
$lang['BoardClosedOnlyAdmins'] = 'Kdy� je f�rum uzav�eno, sm� se p�ihl�sit pouze administr�to�i.';
$lang['NoPosts'] = '��dn� p��sp�vky';
$lang['NoActivetopics'] = 'Nyn� nejsou k dispozici ��dn� t�mata.';
$lang['AuthorDate'] = 'Od %s v %s';
$lang['ByAuthor'] = 'Od: %s';
$lang['OnDate'] = 'V: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Poslat e-mail pro %s';
$lang['SendEmail'] = 'Poslat zpr�vu pro %s';
$lang['NoMails'] = 'Tento u�ivatel si nep�eje p�ij�mat ��dn� e-mailov� zpr�vy.';
$lang['UserEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. U�ivatel [username] v�m poslal z f�ra zpr�vu.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'E-mail pro %s byl �sp�n� odesl�n!';
$lang['To'] = 'Komu';
$lang['From'] = 'Od';
$lang['Subject'] = 'P�edm�t';
$lang['Body'] = 'T�lo';
$lang['Send'] = 'Odeslat';
$lang['EditProfile'] = 'Upravit profil';
$lang['EditOptions'] = 'Upravit nastaven�';
$lang['EditPasswd'] = 'Zm�nit heslo';
$lang['PanelHome'] = 'Nastaven� - �vod';
$lang['NewEmailNotActivated'] = 'V� profil byl �sp�n� upraven. Zm�nili jste e-mailovou adresu k va�emu ��tu %s, proto je nezbytn� ��et znovu aktivovat. Na e-mailovou adresu %s v�m byl zasl�n dopis s instrukcemi, jak ��et aktivovat. Ne� tak u�in�te, nebudete se moci p�ihl�sit.';
$lang['Required'] = 'Vy�adov�no';
$lang['ViewProfile'] = 'Zobrazit profil';
$lang['NewEmailActivationEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. Zm�nili jste e-mailovou adresu u ��tu [account_name], tak�e je nutn� jej znovu aktivovat. ��et aktivujete kliknut�m na n�sleduj�c� odkaz:

[activate_link]

nebo si jej zkop�rujte a n�sledn� otev�ete v prohl�e�i. 

Pokud zapomenete heslo, m��ete si nov� vy��dat p�es odkaz, kter� naleznete u formul��e pro p�ihl�en�.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Aktivace ��tu';
$lang['Signature'] = 'Podpis';
$lang['SessionInfo'] = 'Informace o relaci';
$lang['SessionID'] = 'ID relace';
$lang['IPAddress'] = 'IP adresa';
$lang['Seconds'] = 'Sekundy';
$lang['Updated'] = 'Zm�n�no';
$lang['Pages'] = 'Str�nky';
$lang['AutoLogin'] = 'Automatick� p�ihl�en�';
$lang['Enabled'] = 'Povoleno';
$lang['Disabled'] = 'Zak�z�no';
$lang['Enable'] = 'Povolit';
$lang['Disable'] = 'Zak�zat';
$lang['AutoLoginSet'] = 'Cookie pro automatick� p�ihla�ov�n� byla nastavena.';
$lang['AutoLoginUnset'] = 'Cookie pro automatick� p�ihla�ov�n� byla zru�ena.';
$lang['RegistrationEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. Registrovali jste si ��et [account_name]. M��ete se p�ihl�sit n�sleduj�c�mi �daji:

U�ivatelsk� jm�no: [account_name]
Heslo: [password]

Pokud zapomenete heslo, m��ete si nov� vy��dat p�es odkaz, kter� naleznete u formul��e pro p�ihl�en�. D�kujeme za registraci!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registrace ��tu';
$lang['PublicEmail'] = 'Ve�ejn� e-mailov� adresa';
$lang['PublicLastLogin'] = 'Ve�ejn� �as posledn�ho p�ihl�en�';
$lang['DateFormat'] = 'Form�t data';
$lang['DateFormatHelp'] = 'Syntaxe data je shodn� s PHP funkc� %s.';
$lang['Again'] = 'Znovu';
$lang['NewPassword'] = 'Nov� heslo';
$lang['NewPasswordAgain'] = 'Nov� heslo (znovu)';
$lang['PasswordEdited'] = 'Va�e heslo bylo �sp�n� zm�n�no.';
$lang['DetailedOnlineList'] = 'Podrobn� seznam p��tomn�ch u�ivatel�';
$lang['Detailed'] = 'Podrobn�';
$lang['OptionsEdited'] = 'Nastaven� f�ra bylo �sp�n� upraveno.';
$lang['ProfileEdited'] = 'Profil byl �sp�n� upraven.';
$lang['Started'] = 'Za��tek';
$lang['Minutes'] = 'Minuty';
$lang['Hours'] = 'Hodiny';
$lang['Days'] = 'Dny';
$lang['Weeks'] = 'T�dny';
$lang['TotalTime'] = 'Celkov� �as';
$lang['NoTopics'] = 'F�rum neobsahuje ��dn� t�mata. M��ete zalo�it prvn�!';
$lang['NotPermitted'] = 'K t�to akci nem�te pot�ebn� opr�vn�n�. Pochybujete-li o tom, kontaktujte administr�tora.';
$lang['Language'] = 'Jazyk';
$lang['Template'] = '�ablona';
$lang['NoSuchMember'] = 'U�ivatel %s neexistuje.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Tato vlastnost je zak�z�na, proto�e nastaven� va�eho prohl�e�e neumo��uje f�ru nastavovat nebo ��st cookies.';
$lang['LogOutConfirm'] = 'Opravdu se chcete odhl�sit? Cookie pro automatick� p�ihla�ov�n� bude vymaz�na!';
$lang['Cancel'] = 'Storno';
$lang['Timezone'] = '�asov� p�smo';
$lang['DST'] = 'Letn� �as';
$lang['Sticky'] = 'D�le�it�';
$lang['PostNewTopic'] = 'Nov� t�ma';
$lang['ForumIsLocked'] = 'F�rum je uzam�eno';
$lang['NoSuchTopic'] = 'T�ma %s neexistuje.';
$lang['PostReply'] = 'Odpov�d�t';
$lang['TopicIsLocked'] = 'T�ma je uzam�eno';
$lang['Post'] = 'P��sp�vek';
$lang['Edit'] = 'Upravit';
$lang['Delete'] = 'Smazat';
$lang['Quote'] = 'Citovat';
$lang['Wrote'] = '%s napsal';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'T�ma, do kter�ho chcete p�isp�t, je uzam�eno. P�isp�vat do n�j sm� pouze autorizovan� u�ivatel�.';
$lang['Content'] = 'Obsah';
$lang['Options'] = 'Volby';
$lang['EnableBBCode'] = 'Povolit BBCode.';
$lang['EnableSmilies'] = 'Povolit smajl�ky.';
$lang['EnableSig'] = 'Povolit podpis.';
$lang['EnableHTML'] = 'Povolit HTML.';
$lang['LockTopicAfterPost'] = 'Po odesl�n� uzamknout.';
$lang['Guest'] = 'Host';
$lang['BackToPrevious'] = 'Zp�t na p�edchoz� str�nku';
$lang['NoSuchPost'] = 'P��sp�vek %s neexistuje.';
$lang['UserPostedImage'] = 'Obr�zek vlo�en� u�ivatelem';
$lang['ForumIsLockedExplain'] = 'Toto f�rum je uzam�eno. Jen autorizovan� u�ivatel� sm� p�isp�vat.';
$lang['MakeTopicSticky'] = 'Ozna�it t�ma jako d�le�it�.';
$lang['QuickReply'] = 'Rychl� odpov��';
$lang['ReturnToTopicAfterPosting'] = 'Po odesl�n� p��sp�vku se vr�tit na t�ma';
$lang['ModeratorList'] = 'Moder�to�i: %s.';
$lang['Nobody'] = 'Nikdo';
$lang['DeleteTopic'] = 'Smazat t�ma';
$lang['MoveTopic'] = 'P�esunout t�ma';
$lang['LockTopic'] = 'Uzamknout t�ma';
$lang['UnlockTopic'] = 'Odemknout t�ma';
$lang['MakeSticky'] = 'Ozna�it jako d�le�it�';
$lang['ConfirmDeleteTopic'] = 'Opravdu chcete t�ma %s z f�ra %s nen�vratn� smazat?';
$lang['MakeNormalTopic'] = 'Ozna�it t�ma jako b�n�';
$lang['OldForum'] = 'Star� f�rum';
$lang['NewForum'] = 'Nov� f�rum';
$lang['IAccept'] = 'Souhlas�m';
$lang['IDontAccept'] = 'Nesouhlas�m';
$lang['OpenLinksNewWindow'] = 'Otev�rat odkazy na jin� str�nky do nov�ho okna';
$lang['HideAllAvatars'] = 'Skr�t v�echny ikonky';
$lang['HideUserinfo'] = 'Skr�t informace o u�ivateli';
$lang['HideAllSignatures'] = 'Skr�t v�echny podpisy';
$lang['HideFromOnlineList'] = 'Nezobrazovat v seznamu p��tomn�ch u�ivatel�';
$lang['PageLinks'] = 'Str�nka: %s';
$lang['Preview'] = 'N�hled';
$lang['DeletePost'] = 'Smazat p��sp�vek';
$lang['ConfirmDeletePost'] = 'Opravdu chcete tento p��sp�vek k t�matu %s nen�vratn� smazat?';
$lang['EditPost'] = 'Upravit p��sp�vek';
$lang['PostEditInfo'] = 'Posledn� �pravu provedl(a) %s v %s.';
$lang['PasswdInfo'] = 'Heslo m��e obsahovat pouze alfanumerick� znaky. Minim�ln� d�lka hesla je %d znak�.';
$lang['SubscribeTopic'] = 'Odeb�rat';
$lang['UnsubscribeTopic'] = 'Odhl�sit odb�r';
$lang['NewReplyEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. N�kdo ([poster_name]) p�idal p��sp�vek k t�matu ("[topic_title]"), k jeho� odeb�r�n� jste p�ihl�eni. P��sp�vek si m��ete p�e��st na n�sleduj�c� adrese: [topic_link].

Pokud si p�ejete odhl�sit odb�r t�matu, klikn�te na n�sleduj�c� odkaz (vy�aduje p�ihl�en�): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nov� p��sp�vek v "%s"';
$lang['SubscribedTopic'] = 'Nyn� jste p�ihl�en k odb�ru t�matu.';
$lang['UnsubscribedTopic'] = 'Odeb�r�n� t�matu bylo zru�eno.';
$lang['SubscribeToThisTopic'] = 'Odeb�rat toto t�ma.';
$lang['OK'] = 'Odeslat';
$lang['Subscriptions'] = 'Odb�r t�mat';
$lang['NoSubscribedTopics'] = 'Nejste p�ihl�en k odb�ru ��dn�ch t�mat.';
$lang['LatestUpdate'] = 'Posledn� aktivita';
$lang['Unknown'] = 'Nezn�m�';
$lang['PostingTopic'] = 'P�e p��sp�vek v %s';
$lang['PostingReply'] = 'P�e odpov�� v %s';
$lang['MovingTopic'] = 'P�esouv� t�ma %s';
$lang['DeletingTopic'] = 'Ma�e t�ma %s';
$lang['EditingPost'] = 'Upravuje p��sp�vek v %s';
$lang['DeletingPost'] = 'Ma�e p��sp�vek v %s';
$lang['DebugMode'] = 'Debug mode';
$lang['ParseTime'] = 'Parsov�n�';
$lang['ServerLoad'] = 'Zat�en� serveru';
$lang['TemplateSections'] = '�ablony';
$lang['SQLQueries'] = 'SQL dotazy';
$lang['RealName'] = 'Skute�n� jm�no';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administr�to�i';
$lang['Moderators'] = 'Moder�to�i';
$lang['SortBy'] = '�adit podle: %s';
$lang['TopicReview'] = 'P�ehled t�matu';
$lang['ViewMorePosts'] = 'Zobrazit v�ce p��sp�vk�';
$lang['DisplayedName'] = 'Zobrazovan� jm�no';
$lang['UsernameInfo'] = 'U�ivatelsk� jm�no m��e obsahovat pouze alfanumerick� znaky, mezery, podtr��tko a poml�ku.';
$lang['Code'] = 'K�d';
$lang['Img'] = 'Obr�zek';
$lang['URL'] = 'Odkaz';
$lang['Color'] = 'Barva';
$lang['Size'] = 'Velikost';
$lang['ViewingForum'] = 'F�rum: %s';
$lang['ViewingTopic'] = 'T�ma: %s';
$lang['FloodIntervalWarning'] = 'Administr�to�i ur�ili, �e p��sp�vky je mo�n� pos�lat nejm�n� v intervalu %d sekund. Pros�me, po�kejte a po�lete p��sp�vek a� za chvilku.';
$lang['AutoSubscribe'] = 'Automatick� odeb�r�n�';
$lang['OnPostingNewTopics'] = 'P�i vytvo�en� t�matu';
$lang['OnPostingNewReplies'] = 'P�i zasl�n� odpov�di';
$lang['UnsubscribeSelected'] = 'Neodeb�rat vybran�';
$lang['SelectedTopicsUnsubscribed'] = 'Nyn� ji� vybran� t�mata nebudete odeb�rat.';
$lang['Birthday'] = 'Narozeniny';
$lang['Age'] = 'V�k';
$lang['Month'] = 'M�s�c';
$lang['Day'] = 'Den';
$lang['Year'] = 'Rok';
$lang['PoweredBy'] = '%s je poh�n�no syst�mem %s';
$lang['GeneralStats'] = 'Obecn� statistika';
$lang['Members'] = 'Registrovan� u�ivatel�';
$lang['TopicsPerDay'] = 'T�mat za den';
$lang['MembersPerDay'] = 'Registrac� za den';
$lang['BoardStarted'] = 'Datum spu�t�n�';
$lang['BoardAge'] = 'St��� f�ra';
$lang['NewestMember'] = 'Posledn� registrovan�';
$lang['MostActiveTopics'] = 'T�mata s nejv�ce p��sp�vky';
$lang['MostViewedTopics'] = 'Nejnav�t�vovan�j�� t�mata';
$lang['PostsPerMember'] = 'P��sp�vk� na u�ivatele';
$lang['PostsPerForum'] = 'P��sp�vk� na f�rum';
$lang['Categories'] = 'Kategorie';
$lang['Forums'] = 'F�ra';
$lang['TopicsPerMember'] = 'T�mat na u�ivatele';
$lang['TopicsPerForum'] = 'T�mat na f�rum';
$lang['MostActiveMembers'] = 'Nejaktivn�j�� u�ivatel�';
$lang['MostActiveForums'] = 'F�ra s nejv�ce p��sp�vky';
$lang['DisplayedNameTaken'] = 'Omlouv�me se, jm�no %s ji� vyu��v� n�kdo jin�.';
$lang['SearchKeywords'] = 'Kl��ov� slova';
$lang['SearchMode'] = 'Zp�sob hled�n�';
$lang['SearchAuthor'] = 'Hledat podle u�ivatele';
$lang['SearchForums'] = 'Prohledat f�ra';
$lang['AllForums'] = 'V�echna f�ra';
$lang['AllKeywords'] = 'V�echna kl��ov� slova';
$lang['OneOrMoreKeywords'] = 'Jedno nebo v�ce kl��ov�ch slov';
$lang['NoSearchResults'] = 'Pro zadan� kl��ov� slova nebyla nalezena ��dn� t�mata.';
$lang['SearchMembersPosts'] = 'Hledat p��sp�vky u�ivatele';
$lang['CurrentPage'] = 'Sou�asn� str�nka';
$lang['MemberGuestOnline'] = 'B�hem posledn�ch %d minut zde diskutoval %d registrovan� (%d skryt�ch) a %d neregistrovan� u�ivatel.';
$lang['MembersGuestOnline'] = 'B�hem posledn�ch %d minut zde diskutovalo %d registrovan�ch (%d skryt�ch) a %d neregistrovan� u�ivatel.';
$lang['MemberGuestsOnline'] = 'B�hem posledn�ch %d minut zde diskutoval %d registrovan� (%d skryt�ch) a %d neregistrovan�ch u�ivatel�.';
$lang['MembersGuestsOnline'] = 'B�hem posledn�ch %d minut zde diskutovalo %d registrovan�ch (%d skryt�ch) a %d neregistrovan�ch u�ivatel�.';
$lang['WhosOnline'] = 'Kdo je online';
$lang['Done'] = 'Hotovo';
$lang['KeywordsExplain'] = 'Libovoln� slova o alespo� %d znac�ch odd�len� mezerami.';
$lang['BCCMyself'] = 'Poslat kopii na moji e-mailovou adresu.';
$lang['Save'] = 'Ulo�it';
$lang['Add'] = 'P�idat';
$lang['MarkAllAsRead'] = 'Ozna�it v�e jako p�e�ten�';
$lang['MarkAllAsReadDone'] = 'V�echna f�ra a t�mata jsou ozna�ena jako p�e�ten�.';
$lang['StringTooShort'] = '%s je p��li� kr�tk�, mus� obsahovat alespo� %d znak�.';
$lang['StringTooLong'] = '%s je p��li� dlouh�, sm� obsahovat maxim�ln� %d znak�.';
$lang['Upload'] = 'Nahr�t';
$lang['RegistrationsDisabled'] = 'Registrace jsou zak�z�ny';
$lang['PostFormShortcut'] = 'Stiskn�te Alt+S (Cmd+S na Applu) pro odesl�n� formul��e.';
$lang['EditThisMember'] = 'Upravit profil u�ivatele';
$lang['EmailTaken'] = 'E-mailovou adresu %s ji� pou��v� n�kdo jin�. Vyberte si, pros�me, jinou.';
$lang['RegisteredNotActivatedByAdmin'] = 'V� ��et %s byl vytvo�en. Administr�tor f�ra v�m nyn� mus� ��et aktivovat, co� m��e n�jakou dobu trvat. Pak se budete moci p�ihl�sit.';
$lang['AdminActivationEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. Registrovali jste si ��et [account_name]. Administr�tor f�ra v�m je�t� mus� ��et aktivovat. Pak se budete moci p�ihl�sit pomoc� n�sleduj�c�ch �daj�:

U�ivatelsk� jm�no: [account_name]
Heslo: [password]

Pokud zapomenete heslo, m��ete si nov� vy��dat p�es odkaz, kter� naleznete u formul��e pro p�ihl�en�. D�kujeme za registraci!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = '��et �ek� na aktivaci';
$lang['NewEmailNotActivatedByAdmin'] = 'V� profil byl �sp�n� upraven. Proto�e byla zm�n�na e-mailov� adresa k va�emu ��tu %s, administr�tor f�ra jej mus� znovu aktivovat. Pak se budete moci p�ihl�sit.';
$lang['NewEmailAdminActivationEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. E-mailov� adresa k ��tu [account_name] byla zm�n�na. Administr�tor f�ra nyn� mus� v� ��et znovu aktivovat, co� m��e n�jakou dobu trvat.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = '��et �ek� aktivaci';
$lang['AdminActivatedAccountEmailBody'] = 'Dobr� den,

Tento e-mail byl odesl�n diskusn�m f�rem [board_name]. Administr�tor aktivoval v� ��et [account_name]. Nyn� se m��ete p�ihl�sit.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = '��et byl aktivov�n';

//
// Date translations
//
$lang['date_translations'] = array(
	'Mon' => 'po',
	'Tue' => '�t',
	'Wed' => 'st',
	'Thu' => '�t',
	'Fri' => 'p�',
	'Sat' => 'so',
	'Sun' => 'ne',
	'Monday' => 'pond�l�',
	'Tuesday' => '�ter�',
	'Wednesday' => 'st�eda',
	'Thursday' => '�tvrtek',
	'Friday' => 'p�tek',
	'Saturday' => 'sobota',
	'Sunday' => 'ned�le',
	'Jan' => 'led',
	'Feb' => '�n',
	'Mar' => 'b�e',
	'Apr' => 'dub',
	'May' => 'kv�',
	'Jun' => '�en',
	'Jul' => '�ec',
	'Aug' => 'srp',
	'Sep' => 'z��',
	'Oct' => '��j',
	'Nov' => 'lis',
	'Dec' => 'pro',
	'January' => 'leden',
	'February' => '�nor',
	'March' => 'b�ezen',
	'April' => 'duben',
	'May' => 'kv�ten',
	'June' => '�erven',
	'July' => '�ervenec',
	'August' => 'srpen',
	'September' => 'z���',
	'October' => '��jen',
	'November' => 'listopad',
	'December' => 'prosinec',
	'st' => '.',
	'nd' => '.',
	'th' => '.'
);

?>
