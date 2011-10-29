<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id: lang_Polish.php - 10.05.2011 00:33 pc_freak $
	
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
	
	Wykonano przez: bryan
        Wykonano dla: UseBB.pl - Polskie oficjalne wsparcie Usable Bulletin Board.
        Usuni�cie tego wpisu jest r�wnoznacze ze z�amaniem warunk�w u�ytkowania skryptu.
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

//
// Define translations
//

$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'pl';
$lang['text_direction'] = 'ltr';

$lang['date_translations'] = array(
	'Mon' => 'Pon',
	'Tue' => 'Wto',
	'Wed' => '�r',
	'Thu' => 'Czw',
	'Fri' => 'Pi�',
	'Sat' => 'Sob',
	'Sun' => 'Nie',
	'Monday' => 'maandag',
	'Tuesday' => 'dinsdag',
	'Wednesday' => 'woensdag',
	'Thursday' => 'donderdag',
	'Friday' => 'vrijdag',
	'Saturday' => 'zaterdag',
	'Sunday' => 'zondag',
	'Jan' => 'Stycze�',
	'Feb' => 'Luty',
	'Mar' => 'Marzec',
	'Apr' => 'Kwiecie�',
	'May' => 'Maj',
	'Jun' => 'Czerwiec',
	'Jul' => 'Lipiec',
	'Aug' => 'Sierpie�',
	'Sep' => 'Wrzesie�',
	'Oct' => 'Pa�dziernik',
	'Nov' => 'Listopad',
	'Dec' => 'Grudzie�',
	'January' => 'Stycze�',
	'February' => 'Luty',
	'March' => 'Marzec',
	'April' => 'Kwiecie�',
	'May' => 'Maj',
	'June' => 'Czerwiec',
	'July' => 'Lipiec',
	'August' => 'Sierpie�',
	'September' => 'Wrzesie�',
	'October' => 'Pa�dziernik',
	'November' => 'Listopad',
	'December' => 'Grudzie�',
	'st' => 'ste',
	'nd' => 'de',
	'th' => 'de'
);

$lang['Home'] = 'Strona g��wna';
$lang['Rules'] = 'Regulamin';
$lang['YourPanel'] = 'Tw�j panel';
$lang['Register'] = 'Rejestracja';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Szukaj';
$lang['ActiveTopics'] = 'Aktywne tematy';
$lang['LogIn'] = 'Zaloguj';
$lang['LogOut'] = 'Wyloguj (%s)';
$lang['MemberList'] = 'Lista u�ytkownik�w';
$lang['StaffList'] = 'Ekipa';
$lang['Statistics'] = 'Statystyki';
$lang['ContactAdmin'] = 'Kontakt z Adminem';
$lang['Forum'] = 'Forum';
$lang['Topics'] = 'Tematy';
$lang['Posts'] = 'Posty';
$lang['LatestPost'] = 'Ostatni post';
$lang['RSSFeed'] = 'RSS';
$lang['NewPosts'] = 'Nowe posty';
$lang['NoNewPosts'] = 'Brak nowych post�w';
$lang['LockedNewPosts'] = 'Zamkni�ty (nowe posty)';
$lang['LockedNoNewPosts'] = 'Zamkni�ty (brak nowych post�w)';
$lang['Locked'] = 'Zamkni�ty';
$lang['LastLogin'] = 'Ostatnie logowanie';
$lang['VariousInfo'] = 'Rozmaite informacje';
$lang['IndexStats'] = 'To forum liczy %d post�w w %d tematach oraz posiada %d zarejestrowanych u�ytkownik�w.';
$lang['NewestMemberExtended'] = 'Powitajmy najnowszego u�ytkownika: %s.';
$lang['Username'] = 'Login';
$lang['CurrentPassword'] = 'Aktualne has�o';
$lang['UserID'] = 'ID u�ytkownika';
$lang['NoSuchForum'] = 'Dzia� %s ju� nie istnieje na tym forum!';
$lang['WrongPassword'] = 'Przepraszamy, Twoje has�o nie jest prawid�owe! U�yj opcji wys�ania nowego has�a, je�li je zapomnia�e�.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Wy�lij nowe has�o';
$lang['RegisterNewAccount'] = 'Zarejestruj nowe konto';
$lang['RememberMe'] = 'Zapami�taj mnie';
$lang['Yes'] = 'Tak';
$lang['No'] = 'Nie';
$lang['NotActivated'] = 'Twoje konto %s nie jest jeszcze aktywne. Prosz� sprawd� swoj� skrzynk� e-mail, a w nim otrzymasz instrukcje jak aktywowa� konto.';
$lang['Error'] = 'B��d';
$lang['Profile'] = 'Profil %s';
$lang['Level'] = 'Poziom';
$lang['Administrator'] = 'Administrator';
$lang['Moderator'] = 'Moderator';
$lang['Registered'] = 'Zarejestrowany';
$lang['Email'] = 'Adres e-mail';
$lang['ContactInfo'] = 'Informacje kontaktowe';
$lang['Password'] = 'Has�o';
$lang['PasswordAgain'] = 'Has�o (ponownie)';
$lang['EverythingRequired'] = 'Wszystkie pozycje s� wymagane!';
$lang['RegisteredNotActivated'] = 'Twoje konto %s zosta�o utworzone. Poczta by�a wysy�ana na e-mail %s z instrukcjami jak aktywowa� konto. Lecz jeszcze nie zosta�o aktywowane.';
$lang['RegisteredActivated'] = 'Twoje konto %s zosta�o utworzone. Mo�esz si� zalogowa�.';
$lang['Never'] = 'Nigdy';
$lang['Member'] = 'U�ytkownik';
$lang['RegistrationActivationEmailBody'] = 'Witaj,

Na forum [board_name], posiadasz zarejestrowane konto o nazwie [account_name], lecz nie jest jeszcze aktywne. Prosz� kliknij w poni�szy link je�li chcesz aktywowa� konto:

[activate_link]

lub skopiuj go do swojej przegl�darki. Wtedy b�dziesz m�g� zalogowa� si� podaj�c poni�sze dane:

Login: [account_name]
Has�o: [password]

Je�eli zgubisz swoje has�o, mo�esz prosi� o nowe po przez opcj� "Nowe has�o". Dzi�kuj� za rejestracje!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Forum jest puste. Administrator nie utworzy� jeszcze �adnego dzia�u.';
$lang['AlreadyActivated'] = 'Konto o ID %d zosta�o aktywowane.';
$lang['Activate'] = 'Aktywacja';
$lang['Activated'] = 'Twoje konto %s zosta�o zreaktywowane. Zostaniesz zalogowany automatycznie.';
$lang['WrongActivationKey'] = 'Nie jeste�my zdolni do aktywowania Twojego konta o ID %d. Kod aktywacyjny jest nie prawid�owy. Czy jeste� pewien �e nie prosi�e� o nowe has�o?';
$lang['RegisterIt'] = 'Mo�esz si� zarejestrowa� klikaj�c na link \'Rejestracja\'.';
$lang['BoardClosed'] = 'Forum zamkni�te';
$lang['SendpwdEmailBody'] = 'Witaj,

N forum [board_name], prosi�e� o nowe has�o do swojego konta o nazwie [account_name]. Mo�esz si� zalogowa� podaj�c poni�sze dane:

Login: [account_name]
Has�o: [password]

Je�li zgubisz swoje has�o, mo�esz prosi� o nowe po przez opcj� "Nowe Has�o".

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nowe has�o';
$lang['SendpwdActivated'] = 'Nowe has�o dla konta %s zosta�o wys�ane do %s. Mo�esz si� zalogowa� u�ywaj�c nowego has�a.';
$lang['ForumIndex'] = 'Strona g��wna';
$lang['MissingFields'] = 'Pozycje s� opuszczone lub nieprawid�owo wype�nione: %s.';
$lang['TermsOfUseContent'] = 'Zgadzasz si� nie pisa� obra�liwej, nieprzyzwoitej lub niew�a�ciwej tre�ci i przestrzega� regulaminu forum. Nie przestrzeganie tych zasad mo�e by� spowodowane wystawieniem ostrze�enia przez administrator�w b�d� moderator�w,
co w konsekwencji mo�e doprowadzi� do zablokowania konta. Wraz z ka�d� Twoj� korespondencj� zapisywany jest Tw�j numer IP. Zgadzasz si� r�wnie�,
aby administratorzy i moderatorzy mogli redagowa�, usuwa�, przesuwa� lub zamyka� Twoje tematy. Wszystkie korespondencje jakie zostawiasz na forum s� zapisywane w bazie danych. Aby gromadzi� wszystkie tymczasowe informacje tzn. "ciasteczka" s� zapisywane na twoim komputerze. Ponadto w "ciasteczkach" zaszyfrowane s� takie informacje jak ID u�ytkownika i has�o w razie gdyby� zapomnia�
has�a do Swojego konta.

Klikaj�c na "Akceptuj" zgadzasz si� na powy�sze warunki.';
$lang['TermsOfUse'] = 'Czas u�ywania';
$lang['RegistrationActivationEmailSubject'] = 'Aktywacja konta';
$lang['NeedToBeLoggedIn'] = 'Musisz by� zalogowany. Kliknij na link \'Zaloguj\' aby si� zalogowa� lub na link \'Rejestracja\' aby utworzy� nowe konto.';
$lang['WrongEmail'] = 'Przepraszamy, lecz %s nie jest prawid�owym adresem e-mail dla konta %s. Je�li nie pami�tasz swojego adresu, prosz� skontaktuj si� z Administratorem forum.';
$lang['Topic'] = 'Temat';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Odpowiedzi';
$lang['Views'] = 'Odwiedzin';
$lang['Note'] = 'Notatka';
$lang['Hidden'] = 'Ukryty';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Wy�lij wiadomo��';
$lang['NoViewableForums'] = 'Nie masz uprawnie� do ogl�dania for�w. Zaloguj si�, lub je�li nie masz konta, zarejestruj.';
$lang['Rank'] = 'Ranga';
$lang['Location'] = 'Sk�d';
$lang['Website'] = 'Strona WWW';
$lang['Occupation'] = 'Zaw�d';
$lang['Interests'] = 'Zainteresowania';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'Gadu-Gadu';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Tw�j adres IP %s zosta� zbanowany na tym forum.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Adres avatara';
$lang['BannedUser'] = 'Konto zbanowane';
$lang['BannedUserExplain'] = 'Twoje konto %s jest zbanowane na tym forum. The reason is:';
$lang['BannedUsername'] = 'Login %s jest zbanowany na tym forum. Prosz� wybra� inne.';
$lang['BannedEmail'] = 'Adres e-mail %s jest zbanowany na tym forum. Prosz� wybierz inny.';
$lang['PostsPerDay'] = 'Post�w dziennie';
$lang['BoardClosedOnlyAdmins'] = 'Tylko Administratorzy mog� si� zalogowa� na forum poniewa� jest zamkni�te.';
$lang['NoPosts'] = 'Brak post�w';
$lang['NoActivetopics'] = 'To forum nie posiada �adnych aktywnych temat�w.';
$lang['AuthorDate'] = 'Przez %s w %s';
$lang['ByAuthor'] = 'Przez: %s';
$lang['OnDate'] = 'W: %s';
$lang['Re'] = 'Od:';
$lang['MailForm'] = 'Wy�lij e-mail do %s';
$lang['SendEmail'] = 'Wy�lij wiadomo�� do %s';
$lang['NoMails'] = 'Ten u�ytkownik nie chce by przychodzi�y do niego e-maile.';
$lang['UserEmailBody'] = 'Witaj,

Na forum [board_name], u�ytkownik [username] wys�a� do Ciebie prywatn� wiadomo��.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Tw�j e-mail do %s zosta� wys�any prawid�owo!';
$lang['To'] = 'Do';
$lang['From'] = 'Od';
$lang['Subject'] = 'Temat';
$lang['Body'] = 'Budowa';
$lang['Send'] = 'Wy�lij';
$lang['EditProfile'] = 'Edytuj profil';
$lang['EditOptions'] = 'Edytuj opcje';
$lang['EditPasswd'] = 'Edytuj has�o';
$lang['PanelHome'] = 'Strona g��wna panelu';
$lang['NewEmailNotActivated'] = 'Tw�j profil zosta� zaktualizowany poprawnie. I� zmienia�e� adres e-mail w swoim koncie %s, potrzebujesz reaktywacja konta. Na Tw�j e-mail zosta�y wys�ane instrukcje jak aktywowa� je.';
$lang['Required'] = 'Wymagane';
$lang['ViewProfile'] = 'Zobacz profil';
$lang['NewEmailActivationEmailBody'] = 'Witaj,

Na forum [board_name], zosta� zmieniony przez Ciebie adres e-mail do konta o nazwie [account_name], lecz jeszcze nie zosta� zreaktywowany. Kliknij na poni�szy link aby reaktywowa� swoje konto:

[activate_link]

lub skopiuj go do swojej przegl�darki.

Je�eli zgubisz swoje has�o, mo�esz prosi� o nowe po przez opcj� "Nowe has�o".

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Reaktywacja konta';
$lang['Signature'] = 'Sygnatura';
$lang['SessionInfo'] = 'Informacja o sesji';
$lang['SessionID'] = 'ID Sesji';
$lang['IPAddress'] = 'Adres IP';
$lang['Seconds'] = 'Sekund';
$lang['Updated'] = 'Zaktualizowany';
$lang['Pages'] = 'Stron';
$lang['AutoLogin'] = 'Automatyczne logowanie';
$lang['Enabled'] = 'W��czone';
$lang['Disabled'] = 'Wy��czone';
$lang['Enable'] = 'W��cz';
$lang['Disable'] = 'Wy��cz';
$lang['AutoLoginSet'] = 'Ciasteczka auto logowania s� umieszczone.';
$lang['AutoLoginUnset'] = 'Ciasteczka auto logowania nie zosta�y umieszczone.';
$lang['RegistrationEmailBody'] = 'Witaj,

Na forum [board_name], zarejestrowa�e� konto o nazwie [account_name]. Mo�esz si� zalogowa� u�ywaj�c poni�szych danych:

Login: [account_name]
Has�o: [password]

Je�eli zgubisz swoje has�o, mo�esz prosi� o nowe po przez opcj� "Nowe has�o". Dzi�kuj� za rejestracje!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Rejestracja konta';
$lang['PublicEmail'] = 'Publiczny adres e-mail';
$lang['PublicLastLogin'] = 'Publiczne ostatnie logowanie';
$lang['DateFormat'] = 'Format daty';
$lang['DateFormatHelp'] = 'Format daty %s jest taki sam jak funkcja sk�adni w PHP.';
$lang['Again'] = 'Jeszcze raz';
$lang['NewPassword'] = 'Nowe has�o';
$lang['NewPasswordAgain'] = 'Nowe has�o (ponownie)';
$lang['PasswordEdited'] = 'Twoje has�o zosta�o zedytowane poprawnie.';
$lang['DetailedOnlineList'] = 'Detale listy aktywnych u�ytkownik�w';
$lang['Detailed'] = 'Detale';
$lang['OptionsEdited'] = 'Twoje forum zosta�o zedytowane poprawnie.';
$lang['ProfileEdited'] = 'Tw�j profil zosta� zedytowany poprawnie.';
$lang['Started'] = 'Start';
$lang['Minutes'] = 'Minut/y';
$lang['Hours'] = 'Godzin/y';
$lang['Days'] = 'Dni';
$lang['Weeks'] = 'Tygodnie';
$lang['TotalTime'] = 'Og�lny czas';
$lang['NoTopics'] = 'To forum nie posiada �adnych temat�w. Stw�rz nowy!';
$lang['NotPermitted'] = 'Je�li nie masz pozwolenia na zrobienie tego, lub je�eli masz w�tpliwo�ci, skontaktuj si� z administratorem..';
$lang['Language'] = 'J�zyk';
$lang['Template'] = 'Styl';
$lang['NoSuchMember'] = 'U�ytkownik %s ju� nie istnieje na forum.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Uruchom ciasteczka w swojej przegl�darce aby zobaczy� zawarto��.';
$lang['LogOutConfirm'] = 'Czy jeste� pewny/a �e chcesz si� wylogowa�?';
$lang['Cancel'] = 'Wyj�cie';
$lang['Timezone'] = 'Strefa czasowa';
$lang['DST'] = 'Czas zmiany dnia na noc';
$lang['Sticky'] = 'Przyklejony';
$lang['PostNewTopic'] = 'Nowy temat';
$lang['ForumIsLocked'] = 'Forum jest zablokowane';
$lang['NoSuchTopic'] = 'Temat %s ju� nie istnieje na forum.';
$lang['PostReply'] = 'Odpowiedz';
$lang['TopicIsLocked'] = 'Temat jest zablokowany';
$lang['Post'] = 'Post';
$lang['Edit'] = 'Edytuj';
$lang['Delete'] = 'Usu�';
$lang['Quote'] = 'Cytuj';
$lang['Wrote'] = '%s napisa�';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'Temat na kt�rym pr�bujesz napisa� posta jest zamkni�ty. Tylko osoby z uprawnieniami mog� pisa� nowe posty.';
$lang['Content'] = 'Zawarto��';
$lang['Options'] = 'Opcje';
$lang['EnableBBCode'] = 'W��cz BBCode.';
$lang['EnableSmilies'] = 'W��cz emotikony.';
$lang['EnableSig'] = 'W��cz sygnatury.';
$lang['EnableHTML'] = 'W��cz HTML.';
$lang['LockTopicAfterPost'] = 'Zablokuj temat po napisaniu posta.';
$lang['Guest'] = 'Go��';
$lang['BackToPrevious'] = 'Powr�t do poprzedniej strony';
$lang['NoSuchPost'] = 'Post %s ju� nie istnieje na tym forum.';
$lang['UserPostedImage'] = 'U�ytkownik wys�a� obrazek';
$lang['ForumIsLockedExplain'] = 'To forum jest zablokowane. Tylko osoby z uprawnieniami mog� tworzy� nowe tematy.';
$lang['MakeTopicSticky'] = 'Przyklej temat.';
$lang['QuickReply'] = 'Szybka odpowied�';
$lang['ReturnToTopicAfterPosting'] = 'Powr�� do tematu po napisaniu posta';
$lang['ModeratorList'] = 'Moderatorzy: %s.';
$lang['Nobody'] = 'Nikt';
$lang['DeleteTopic'] = 'Usu� temat';
$lang['MoveTopic'] = 'Przenie� temat';
$lang['LockTopic'] = 'Zablokuj temat';
$lang['UnlockTopic'] = 'Odblokuj temat';
$lang['MakeSticky'] = 'Przyklej';
$lang['ConfirmDeleteTopic'] = 'Czy jeste� pewien/na �e chcesz usun�� temat %s w forum %s? To nieodwracalne!';
$lang['MakeNormalTopic'] = 'Normalny temat';
$lang['OldForum'] = 'Stare forum';
$lang['NewForum'] = 'Nowe forum';
$lang['IAccept'] = 'Akceptuje';
$lang['IDontAccept'] = 'Nie akceptuje';
$lang['OpenLinksNewWindow'] = 'Otw�rz linki w nowym oknie';
$lang['HideAllAvatars'] = 'Ukryj wszystkie avatary';
$lang['HideUserinfo'] = 'Ukryj informacje o u�ytkowniku';
$lang['HideAllSignatures'] = 'Ukryj wszystkie sygnatury';
$lang['HideFromOnlineList'] = 'Ukryj list� aktywnych u�ytkownik�w';
$lang['PageLinks'] = 'Strona: %s';
$lang['Preview'] = 'Podgl�d';
$lang['DeletePost'] = 'Usu� post';
$lang['ConfirmDeletePost'] = 'Czy jeste� pewien/na �e chcesz usuna� ten post w temacie %s? To nieodwracalne!';
$lang['EditPost'] = 'Edytuj post';
$lang['PostEditInfo'] = 'Ostatnia edycja %s w %s.';
$lang['PasswdInfo'] = 'Has�o musi posiada� minimum %d znak�w.';
$lang['SubscribeTopic'] = 'Subskrybuj';
$lang['UnsubscribeTopic'] = 'Nie subskrybuj';
$lang['NewReplyEmailBody'] = 'Witaj,

Na forum [board_name], kto� ([poster_name]) wys�a� odpowied� do subskrybowanego przez Ciebie tematu ("[topic_title]"). Aby zobaczy� odpowied�
kliknij na link do tematu: [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nowa odpowied� w "%s"';
$lang['SubscribedTopic'] = 'B�dziesz teraz subskrybowa� ten temat.';
$lang['UnsubscribedTopic'] = 'Od teraz nie subskrybujesz tego tematu.';
$lang['SubscribeToThisTopic'] = 'Subskrybuj ten temat.';
$lang['OK'] = 'Ok';
$lang['Subscriptions'] = 'Opcje subskrypcji';
$lang['NoSubscribedTopics'] = 'Nie subskrybujesz �adnego tematu.';
$lang['LatestUpdate'] = 'Ostatnia aktualizacja';
$lang['Unknown'] = 'Nieznane';
$lang['PostingTopic'] = 'Post�w w temacie %s';
$lang['PostingReply'] = 'Odpowiedzi %s';
$lang['MovingTopic'] = 'Przenie� temat %s';
$lang['DeletingTopic'] = 'Usu� temat %s';
$lang['EditingPost'] = 'Edytuj post w %s';
$lang['DeletingPost'] = 'Usu� post w %s';
$lang['DebugMode'] = 'W�a�ciwo�ci';
$lang['ParseTime'] = 'Parsuj czas';
$lang['ServerLoad'] = '�adowanie serwera';
$lang['TemplateSections'] = 'Sekcje stylu';
$lang['SQLQueries'] = 'Zapytania SQL';
$lang['RealName'] = 'Prawdziwe imi�';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administratorzy';
$lang['Moderators'] = 'Moderatorzy';
$lang['TopicReview'] = 'Podgl�d tematu';
$lang['ViewMorePosts'] = 'Zobacz wi�cej post�w';
$lang['DisplayedName'] = 'Pokazywana nazwa';
$lang['UsernameInfo'] = 'Login mo�e zawiera� cyfry, liczby oraz spacje, _ i -.';
$lang['Code'] = 'Code';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Kolor';
$lang['Size'] = 'Wielko��';
$lang['ViewingForum'] = 'Forum: %s';
$lang['ViewingTopic'] = 'Temat: %s';
$lang['FloodIntervalWarning'] = 'Administrator wyszczeg�lni�, �e mo�esz pisa� nowe posty z odst�pem o %d sekund, przed ponownym wys�aniem nast�pnego.';
$lang['AutoSubscribe'] = 'Auto subskrypcja';
$lang['OnPostingNewTopics'] = 'Pisa� posty w tematach';
$lang['OnPostingNewReplies'] = 'Odpowiada� na posty';
$lang['UnsubscribeSelected'] = 'Nie subskrybuj wybranych';
$lang['SelectedTopicsUnsubscribed'] = 'Przesta�e� subskrybowa� wybrane tematy.';
$lang['Birthday'] = 'Urodziny';
$lang['Age'] = 'Wiek';
$lang['Month'] = 'Miesi�c';
$lang['Day'] = 'Dzie�';
$lang['Year'] = 'Rok';
$lang['PoweredBy'] = '%s jest zasilane przez %s';
$lang['GeneralStats'] = 'Generalne statystyki';
$lang['Members'] = 'U�ytkownik�w';
$lang['TopicsPerDay'] = 'Temat�w dziennie';
$lang['MembersPerDay'] = 'U�ytkownik�w dziennie';
$lang['BoardStarted'] = 'Start forum';
$lang['BoardAge'] = 'Wiek forum';
$lang['NewestMember'] = 'Nowy u�ytkownik';
$lang['MostActiveTopics'] = 'Najaktywniejsze tematy';
$lang['MostViewedTopics'] = 'Najcz�ciej odzwiedzane tematy';
$lang['PostsPerMember'] = 'Post�w u�ytkownik�w';
$lang['PostsPerForum'] = 'Post�w na forum';
$lang['Categories'] = 'Kategorie';
$lang['Forums'] = 'Fora';
$lang['TopicsPerMember'] = 'Temat�w u�ytkownika';
$lang['TopicsPerForum'] = 'Temat�w w forum';
$lang['MostActiveMembers'] = 'Najaktywniejsi u�ytkownicy';
$lang['MostActiveForums'] = 'Najaktywniejsze tematy';
$lang['DisplayedNameTaken'] = 'Przepraszamy, %s by�o do tej pory przyjmowane jako login lub nazwa wy�wietlana.';
$lang['SearchKeywords'] = 'Szukaj wyra�e�';
$lang['SearchMode'] = 'Tryb wyszukiwania';
$lang['SearchAuthor'] = 'Szukaj autor�w';
$lang['SearchForums'] = 'Szukaj for';
$lang['AllForums'] = 'Wszystkie fora';
$lang['NoSearchResults'] = 'Przepraszamy, brak rezultat�w wyszukiwania.';
$lang['SearchMembersPosts'] = 'Szukaj posty u�ytkownika';
$lang['CurrentPage'] = 'Aktualna strona';
$lang['MemberGuestOnline'] = 'Przez ostatnie %d minut, %d u�ytkownik�w (%d ukrytych) oraz %d go�ci, odzwiedzi�o nasze forum.';
$lang['MembersGuestOnline'] = 'Przez ostatnie %d minut, %d u�ytkownik�w (%d ukrytych) oraz %d go�ci, odzwiedzi�o nasze forum.';
$lang['MemberGuestsOnline'] = 'Przez ostatnie %d minut, %d u�ytkownik (%d ukrytych) oraz %d go�ci, odzwiedzi�o nasze forum.';
$lang['MembersGuestsOnline'] = 'Przez ostatnie %d minut, %d u�ytkownik�w (%d ukrytych) oraz %d go�ci, odzwiedzi�o nasze forum.';
$lang['WhosOnline'] = 'Kto jest na forum?';
$lang['Done'] = 'Zrobione';
$lang['KeywordsExplain'] = 'Jakiekolwiek s�owa kluczowe, przynajmniej %d znaki, oddzielone spacjami.';
$lang['BCCMyself'] = 'Mo�esz wys�a� kopie wiadomo�ci PW na swoj adres e-mail.';
$lang['Save'] = 'Zapisz';
$lang['Add'] = 'Dodaj';
$lang['MarkAllAsRead'] = 'Oznacz wszystkie posty jako przeczytane';
$lang['MarkAllAsReadDone'] = 'Wszystkie fora s� oznaczone jako przeczytane.';
$lang['StringTooShort'] = '%s jest za kr�tkie, co najmniej %d znaki s� wymagane.';
$lang['StringTooLong'] = '%s jest za d�ugie, tylko %d znak�w jest dozwolonych.';
$lang['Upload'] = 'Upload';
$lang['RegistrationsDisabled'] = 'Rejestracja wy��czona';
$lang['PostFormShortcut'] = 'Naci�nij Alt+S, aby wys�a� dotychczasow� form� posta.';
$lang['EditThisMember'] = 'Edytuj tego u�ytkownika';
$lang['EmailTaken'] = 'Ten adres e-mail %s jest ju� u�ywany. Prosz� wybierz inny.';
$lang['RegisteredNotActivatedByAdmin'] = 'Twoje konto %s zosta�o utworzone. Zanim si� zalogujesz, Administrator forum musi aktywowa� Twoje konto. Prosz� cierpliwie czeka�.';
$lang['AdminActivationEmailBody'] = 'Witaj,

Na forum [board_name], masz zarejestrowane konto o nazwie [account_name]. Administrator forum musi aktywowa� konto. Gdy to si� ju� stanie, b�dziesz m�g� si� zalogowa� u�ywaj�c poni�szych danych:

Login: [account_name]
Has�o: [password]

Je�eli zgubisz swoje has�o, mo�esz prosi� o nowe po przez opcj� "Nowe has�o". Dzi�kuj� za rejestracje!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Konto oczekuje na aktywacje';
$lang['NewEmailNotActivatedByAdmin'] = 'Tw�j profil zosta� zaktualizowany pozytywnie. Poniewa� zmienia�e� adres e-mail w swoim koncie %s, Administrator forum musi zreaktywowa� je. Prosz� czeka� cierpliwie.';
$lang['NewEmailAdminActivationEmailBody'] = 'Witaj,

Na forum [board_name], zmienia�e� adres e-mail do konta o nazwie [account_name], lecz jeszcze nie zosta� zreaktywowany. Administrator forum jako pierwszy musi reaktywowa� Twoje konto. Prosz� czeka� cierpliwie.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Konto oczekuje na reaktywacje';
$lang['AdminActivatedAccountEmailBody'] = 'Witaj,

Na forum [board_name], Administrator forum aktywowa� Twoje konto o nazwie [account_name]. Mo�esz si� teraz zalogowa�.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Konto aktywne';
$lang['Sort'] = 'Sortuj';
$lang['SortBy'] = 'Sortuj przez';
$lang['SortBy-displayed_name'] = 'Login';
$lang['SortBy-real_name'] = 'Prawdziwe imi�';
$lang['SortBy-level'] = 'Poziom';
$lang['SortBy-rank'] = 'Ranga';
$lang['SortBy-regdate'] = 'Zarejestrowany';
$lang['SortBy-posts'] = 'Posty';
$lang['SortBy-latest_post'] = 'Ostatni post';
$lang['SortBy-topic_title'] = 'Tytu� tematu';
$lang['SortBy-forum'] = 'Forum';
$lang['SortBy-author'] = 'Autor';
$lang['SortBy-replies'] = 'Odpowiedzi';
$lang['SortBy-views'] = 'Odwiedzin';
$lang['SortOrder-asc'] = 'Rosn�co';
$lang['SortOrder-desc'] = 'Malej�co';
$lang['NoUsersFound'] = 'Brak u�ytkownik�w.';
$lang['SaveConfigManually'] = 'Plik config.php nie jest zapisywalny, tak wi�c UseBB nie mo�e zapisa� zmian konfiguracyjnych. Prosz� ustaw CHMODY na 777 po przez FTP.';
$lang['ShowResultsAs'] = 'Poka� rezultat';
$lang['ShowMode-topics'] = 'Tematy';
$lang['ShowMode-posts'] = 'Posty';
$lang['Mode-and'] = 'Wszystkie s�owa (AND)';
$lang['Mode-or'] = 'Kt�rekolwiek s�owo/wyra�enie (OR)';
$lang['ExactMatch'] = 'Dok�adne odpowiedzi';
$lang['IncludeGuests'] = 'Uwzgl�dnia� go�ci';
$lang['Top'] = 'G�ra';
$lang['Bottom'] = 'D�';
$lang['Action'] = 'Akcja';
$lang['AntiSpamQuestion'] = 'Anty-Spamowe pytania';
$lang['AntiSpamQuestionInfo'] = 'Podczas zak�adania konta napotkasz kontrole anty-spamow�, aby zako�czy� rejestracje b�dziesz musia� odpowiedzie� poprawnie na pytanie.';
$lang['Question'] = 'Pytanie';
$lang['Answer'] = 'Odpowied�';
$lang['AntiSpamQuestionMathPlus'] = 'Ile jest %d doda� %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Ile jest %d odj�� %d?';
$lang['AntiSpamWrongAnswer'] = 'Je�li pojawi si� b�ad, prosz� wr�ci� i poprawi� b��dne dane.';
$lang['WrongUsernamePassword'] = 'Login (%s) oraz has�o jest niepoprawne. Spr�buj prosz� jeszcze raz.';
$lang['WrongUsernameEmail'] = 'Login (%s) oraz adres e-mail nie istnieje. Spr�buj jeszcze raz.';
$lang['All'] = 'Wszystko';
$lang['Staff'] = 'Za�oga';
$lang['Guests'] = 'Go�cie';
$lang['ShowOnly'] = 'Poka� tylko';
$lang['InvalidFormTokenNotice'] = 'Zabiezpieczaj�cy token jest niepoprawny lub jego wa�no�� wygas�a.

If you were led here through a third-party link or website, please ignore this page!

If you were making changes and submitting the form yourself, please resubmit.';
$lang['InvalidURLTokenNotice']  = 'Zabiezpieczaj�cy token jest niepoprawny lub jego wa�no�� wygas�a.

If you were led here through a third-party link or website, please ignore this page!

Otherwise, please reload the original page and revisit the link.';

?>
