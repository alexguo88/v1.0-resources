<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id: faq_Polish.php - 09.05.2011 23:57 pc_freak $
	
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
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'pl';
$lang['text_direction'] = 'ltr';

$faq[] = array('--', 'Konta u�ytkownik�w');
$faq[] = array('Czy musz� si� zarejestrowa�?', ' Rejestracja mo�e by� konieczna do pisania/tworzenia temat�w na tym forum, to zale�y od tego, czy administrator pozwoli� na udzielanie si� i zak�adanie nowych w�tk�w go�ciom. Og�lnie rzecz bior�c, rejestracja jest dobrym pomys�em, poniewa� daje wiele dodatkowych funkcji.');
$faq[] = array('Jakie s� korzy�ci z rejestracji?', ' Przede wszystkim, masz swoje osobiste konto o unikatowym, rozpoznawalnym nicku, kt�ry b�dzie dost�pny tylko dla Ciebie. Zapraszamy r�wnie� na profil osobisty, gdzie mo�esz dodawa� dodatkowe informacje o sobie, je�li chcesz mo�esz dostosowa� forum do swoich potrzeb i wymaga� za po�rednictwem funkcji Edytuj opcje, w kt�rej mo�esz r�wnie� wybra� j�zyk i ustawienia szablonu. Bardzo ciekawa jest mo�liwo�� subskrypcji temat�w.');
$faq[] = array('Co trzeba zrobi�, aby zarejestrowa� konto?', ' Aby si� zarejestrowa�, musisz wybra� sw�j nick (login), kt�ry b�dzie niezb�dny aby si� zalogowa� do Twojego konta. Je�li chcesz, mo�esz tak�e u�y� swoje prawdziwe nazwisko, zamiast pseudonimu. Oczywi�cie nie ma mo�liwo�ci zmiany nazwy u�ytkownika po zarejestrowaniu, lecz masz mo�liwo�� zmiany nazwy wy�wietlanej, w dowolnym momencie, podczas gdy nazwa u�ytkownika pozostaje taka sama. Musisz tak�e posiada� dzia�aj�cy adres e-mail (poniewa� mo�e by� wymagany do aktywacji konta) oraz wybra� has�o (kt�re mo�na zmieni� p�niej).');
$faq[] = array('Nie dotar� do mnie e-mail aktywacyjny!', ' Sprawd� czy jeste� w stanie zalogowa� si� bez aktywacji po przez e-mail. Je�li nie, spr�buj wys�a� pro�b� o nowe has�o. Je�eli to nie zadzia�a, skontaktuj si� z administratorem.');
$faq[] = array('Co zrobi�, je�li zapomnia�em swojego loginu lub adresu e-mail?', ' Zawsze mo�esz poprosi� o nowe has�o, klikaj�c w link na stronie logowania. Je�li adres e-mail ju� nie jest aktywny lub je�li nie pami�tasz go, skontaktuj si� z administratorem. On poda Ci Tw�j adres e-mail u�yty podczas rejestracji konta lub dostosuje Tw�j nowy, dzia�aj�cy adres e-mail.');
$faq[] = array('Kim s� Moderatorzy i Administratorzy?', ' Moderator to osoba, kt�ra sprawdza na jednym lub kilku forach posty pisane przez u�ytkownik�w. Mo�e on r�wnie� pom�c u�ytkownikom forum. Administrator jest moderatorem na wszystkich forach, ma mo�liwo�� przydzielenia rangi moderatora u�ytkownikom oraz ma dost�p do pe�nej konfiguracji forum w Panelu Administratora.');
$faq[] = array('Jak mog� zosta� Moderatorem lub Administratorem?', ' Mo�esz nim zosta� dopiero wtedy gdy zg�osisz si� do administratora forum i poprosisz go o t� rang�.');
$faq[] = array('Czy mog� zmieni� swoj� rang�?', ' Nie, tylko Administrator ma mo�liwo�� podwy�szenia rang u�ytkownikom.');

$faq[] = array('--', 'Subskrypcje');
$faq[] = array('Jak w��czy� subskrypcje temat�w?', ' Na dole ka�dego tematu, znajdziesz link do w��czenia subskrypcji. Jest to mo�liwe dopiero gdy jeste� zalogowany/a');
$faq[] = array('Jak wy��czy� subskrypcje temat�w?', ' Mo�esz tego dokona�, w panelu u�ytkownika.');

$faq[] = array('--', 'Tw�j profil');
$faq[] = array('Mog� zmieni� nazw� u�ytkownika?', ' Nie mo�na zmieni� swojej nazwy u�ytkownika (loginu) samodzielnie. Tylko administrator mo�e to zrobi�. Mo�na jednak zmieni� nazw� wy�wietlan� w dowolnym momencie.');
$faq[] = array('Jaka jest r�nica pomi�dzy Nazw� u�ytkownika a Nazw� wy�wietlan�?', ' Twoja nazwa u�ytkownika, kt�rej u�ywasz do logowania si� na forum, jest sta�a, nie mo�na jej zmieni�. Nazwa wy�wietlana, to nazwa wy�wietlana publicznie. Zawsze j� mo�esz zmieni�. Pami�taj, �e zmieni�j�c nazw� wy�wietlan�, musisz logowa� si� na forum nazw� u�ytkownika (loginem).');
$faq[] = array('Mojego j�zyka nie ma na forum!', ' Zapytaj administratora czy nie doda�by dodatkowego t�umaczenia do forum.');
$faq[] = array('Dlaczego nie mog� wybra� innego szablonu?', ' Prawdopodobnie �adne inne szablony nie s� dost�pne na tym forum.');

$faq[] = array('--', 'Tematy oraz posty');
$faq[] = array('Tematy i posty?', ' Temat jest grup� wiadomo�ci (post�w) w pewnym forum. Je�li klikniesz na nazw� forum, masz mo�liwo�� przegl�dania temat�w w tym forum.');
$faq[] = array('Czym s� tematy przyklejone? ', ' Tematy przyklejone zosta�y zaprojektowane, aby zawsze pozosta� na szczycie w danym forum posr�d innych temat�w w nim zawartych. Og�lnie rzecz bior�c, zwykli u�ytkownicy nie mog� przyklei� tematu, ale moderatorzy i administratorzy owszem.');
$faq[] = array('Dlaczego nie mog� dodawa� nowych temat�w i odpowiedzi? ', ' Je�eli nie pojawi si� opcja do tworzenia nowych temat�w lub post�w, nie masz uprawnie� do tworzenia nowych temat�w lub post�w na tym forum, b�d� jest on zamkni�ty przez moderatora. W razie w�tpliwo�ci skontaktuj si� z administratorem.');
$faq[] = array('Co to BBCode oraz Emotikony? ', ' BBCode s� to tagi, kt�re mo�na wykorzysta�, aby doda� pewne elementy do Twojego posta. U�yj jaki� z nich i naci�nij podgl�d postu, aby zobaczy� efekt. U�mieszki s� u�ywane do wyra�ania emocji w Twoich postach.');
$faq[] = array('Liczba post�w nie wzros�a po wys�aniu!', ' W niekt�rych forach, zwi�kszenie liczby post�w mo�e by� wy��czone. To jest dla wszystkich u�ytkownik�w, np. w forum "Og�lne rozmowy".');
$faq[] = array('Dlaczego musz� czeka� okre�lon� ilo�� czasu na wys�anie postu? ', ' Jest to po to aby pomin�� niepotrzebny spam oraz �eby nie obici��a� a� tak serwera. Poczekaj chwil� i ponownie wy�lij.');

$faq[] = array('--', 'R�ne');
$faq[] = array('Nie otrzymuje e-maili z tego forum! ',' Upewnij si�, �e e-maile nie s� zablokowane przez oprogramowanie antyspam. Je�li nie, adres e-mail ustawiony w Twoim profilu mo�e si� r�ni� od Twojego aktualnego.');
$faq[] = array('Czym jest RSS? ', ' Kana�y RSS s�u�� do pobierania najnowszych informacji ze strony internetowej lub forum, by zobaczy� news / czytnik RSS w niekt�rych przegl�darkach.');
$faq[] = array('Gdzie w moim profilu mog� umie�ci� moje konto Google Talk? ', ' Google Talk IM mo�esz umie�ci� w polu sieci Jabber / XMPP. Mo�esz umie�ci� nazw� konta (w ca�o�ci, w tym nazwy domeny).');

$faq[] = array('--', 'Na temat UseBB');
$faq[] = array('Kto zrobi� to forum? Czym jest UseBB? ', ' Skrypt o nazwie UseBB, jest rozwijany przez UseBB Project. UseBB jest oprogramowaniem Open Source wydany na licencji GPL. Mo�esz pobra� go za darmo z oficjalnej strony UseBB <a href="http://www.usebb.net"> www.usebb.net</a>');
$faq[] = array('Czy tw�rcy UseBB s� odpowiedzialni za to forum? ',' Nie, to forum jest prowadzone przez administratora wi�c, autor projektu UseBB nie mo�e by� poci�gni�ty do odpowiedzialno�ci za to forum w jakikolwiek spos�b.');
$faq[] = array('Mam zarzut co do tego forum. Do kogo mam si� zg�osi� bezpo�rednio? ',' Je�li chcesz z�o�y� skarg� na to forum, zapraszamy do <a href="http://www.usebb.net">UseBB Project</a>. W przypadku innych pyta� prosimy o kontakt z administratorem forum.');

?>
