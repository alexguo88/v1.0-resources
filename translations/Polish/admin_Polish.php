<?php

/*
	Copyright (C) 2003-2011 UseBB Team
	http://www.usebb.net
	
	$Id: admin_Polish.php - 10.05.2011 01:16 pc_freak $
	
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
	
	Wykonano przez: dewholer/bryan
        Wykonano dla: UseBB.pl - Polskie oficjalne wsparcie Usable Bulletin Board.
        Usuni�cie tego wpisu jest r�wnoznacze ze z�amaniem warunk�w u�ytkowania skryptu.
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['character_encoding'] = 'iso-8859-2';
$lang['language_code'] = 'pl';
$lang['text_direction'] = 'ltr';

$lang['AdminLogin'] = 'Logowanie Administratora';
$lang['AdminPasswordExplain'] = 'By zachowa� zasady bezpiecze�stwa musisz ponownie poda� swoje has�o by wej�� do ACP.';

$lang['RunningBadACPModule'] = 'Nie mo�na uruchomi� tego modu�u, poniewa� jeden lub wi�cej aspekt�w jest brakuj�cy (no $usebb_module object found and/or missing run_module() object method).';

$lang['Category-main'] = 'G��wna kategoria';
$lang['Category-forums'] = 'Fora';
$lang['Category-various'] = 'R�ne';
$lang['Category-members'] = 'U�ytkownicy';
$lang['Category-pruning'] = 'Pruning';
$lang['Category-security'] = 'Bezpiecze�stwo';
$lang['Item-index'] = 'Strona g��wna ACP';
$lang['Item-version'] = 'Sprawdzanie wersji';
$lang['Item-config'] = 'Generalna konfiguracja';
$lang['Item-categories'] = 'Zarz�dzaj kategoriami';
$lang['Item-forums'] = 'Zarz�dzaj forami';
$lang['Item-iplookup'] = 'Narz�dzia IP';
$lang['Item-sqltoolbox'] = 'Narz�dzia SQL';
$lang['Item-modules'] = 'Modu�y ACP';
$lang['Item-members'] = 'Edytuj u�ytkownik�w';
$lang['Item-delete_members'] = 'Usu� u�ytkownik�w';
$lang['Item-register_members'] = 'Zarejestruj u�ytkownik�w';
$lang['Item-activate_members'] = 'Aktywuj u�ytkownik�w';
$lang['Item-prune_forums'] = 'Usu� fora';
$lang['Item-prune_members'] = 'Usu� u�ytkownik�w';
$lang['Item-dnsbl'] = 'Bany DNSBL';
$lang['Item-badwords'] = 'Cenzura';
$lang['Item-mass_email'] = 'Masowe wiadomo�ci';
$lang['Item-logout'] = 'Wyloguj si� z ACP';

$lang['IndexWelcome'] = 'Witamy w twoim panelu amdinistratora. Tutaj mo�esz dodawa�, usuwa� i edytowa� fora i u�ytkownik�w.';
$lang['IndexSystemInfo'] = 'Informacje o systemie';
$lang['IndexUseBBVersion'] = 'Wersja UseBB';
$lang['IndexPHPVersion'] = 'Wersja PHP';
$lang['IndexSQLServer'] = 'Wersja sterownika SQL';
$lang['IndexHTTPServer'] = 'Serwer HTTP';
$lang['IndexOS'] = 'System operacyjny';
$lang['IndexServerLoad'] = 'Obci�zenie serwera';
$lang['IndexLinks'] = 'Linki';
$lang['IndexUnactiveMembers'] = 'Nieaktywowani u�ytkownicy';
$lang['IndexNoUnactiveMembers'] = '�aden u�ytkownik nie oczekuje na aktywacj�.';
$lang['IndexOneUnactiveMember'] = 'Jeden u�ytkownik oczekuje na aktywacj�.';
$lang['IndexMoreUnactiveMembers'] = '%d u�ytkownik�w oczekuje na aktywacj�.';
$lang['IndexWarning'] = 'Ostrze�enie!';
$lang['IndexUnwritableConfig'] = 'W tym momencie, %s nie ma odpowiednich praw zapisu. Prosz� zmieni� CHMODy na 777 u�ywaj�c klijenta FTP.';
$lang['IndexMultibyteUsage'] = 'Zwr�� uwag�, �e u�ywasz t�umaczenia pisemne w wielobajtowego zestawu znak�w (% s). Te t�umaczenia i zestawy znak�w nie s� oficjalnie wspierane na UseBB 1.';
$lang['IndexDevelopmentEnvironment'] = 'UseBB jest aktualnie ustawiony do pracy w �rodowisku deweloperskim. Spowoduje to wy�wietlenie mo�liwie wielu zawiadomie� PHP u�ytkownikom a nie obejmuje pewnych �rodk�w bezpiecze�stwa. W �rodowisku produkcyjnym nie jest to zalecane.';

$lang['VersionFailed'] = 'Skrypt nie mo�e sprawdzi� wersji UseBB. Odwied� %s by wiedzie� o najnowszych wersjach useBB.';
$lang['VersionLatestVersionTitle'] = 'U�ywasz aktualnej wersji UseBB';
$lang['VersionLatestVersion'] = 'Forum jest oparte na UseBB %s czyli na ostaniej aktualnej wersji UseBB.';
$lang['VersionNeedUpdateTitle'] = 'Dost�pna jest nowa wersja Usable Bulletin Board!';
$lang['VersionNeedUpdate'] = 'U�ywasz UseBB %s i musisz zaktualizowa� skrypt do wersji %s by forum by�o bezpieczne i wolne od b��d�w. Odwied� %s by pobra� oficjaln� paczk� UseBB..';
$lang['VersionBewareDevVersionsTitle'] = 'Wersja deweloperska zosta�a odnaleziona.';
$lang['VersionBewareDevVersions'] = 'Na forum forum jest uruchomiony % s% s jednak nadal forum jest w najnowszej stabilnej wersji, uwa�aj na komplikacje oraz problemy zawarte w wersjach rozwojowych.';

$lang['ConfigInfo'] = 'Na tej stronie mo�esz edytowa� wszysktie ustawienia twojej kopii UseBB. B�d� ostro�ny przy konfigurowaniu bazy danych. Pola zaznaczone (*) s� wymagane.';
$lang['ConfigSet'] = 'Konfiguracja zosta�a zapisana. Zmiany b�d� widoczne przy za�adowaniu nowej strony.';
$lang['ConfigMissingFields'] = 'Niekt�re pola nie s� wype�nione:';
$lang['ConfigBoard-type'] = 'Typ';
$lang['ConfigBoard-server'] = 'Serwer';
$lang['ConfigBoard-username'] = 'Nick';
$lang['ConfigBoard-passwd'] = 'Has�o';
$lang['ConfigBoard-dbname'] = 'Nazwa bazy danych';
$lang['ConfigBoard-prefix'] = 'Prefix tabel';
$lang['ConfigBoardSection-general'] = 'G��wne forum';
$lang['ConfigBoardSection-cookies'] = 'Ciasteczka';
$lang['ConfigBoardSection-cookies-info'] = 'Mo�esz pozostawi� puste aby skrypt sam uzupe�ni� te pola.';
$lang['ConfigBoardSection-sessions'] = 'Sesje';
$lang['ConfigBoardSection-page_counts'] = 'Numeracja strony';
$lang['ConfigBoardSection-date_time'] = 'Daty &amp; Czas�w';
$lang['ConfigBoardSection-date_time-info'] = 'Dzia�a tylko dla go�ci i nowych kont.';
$lang['ConfigBoardSection-database'] = 'Konfiguracja bazy danych';
$lang['ConfigBoardSection-database-info'] = 'Te pola zmieniaj tylko je�eli jeste� pewien, �e podawane dane s� poprawne.';
$lang['ConfigBoardSection-advanced'] = 'Zaawansowane ustawienia';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Dodatkowe funkcje';
$lang['ConfigBoardSection-user_rights'] = 'Prawa u�ytkownika';
$lang['ConfigBoardSection-min_levels'] = 'Minimalne ustawienia dost�pu';
$lang['ConfigBoardSection-min_levels-info'] = 'Tutaj masz mo�liwo�� ustawienia minimalnych praw dost�pu.';
$lang['ConfigBoardSection-layout'] = 'Ustawienia layoutu';
$lang['ConfigBoardSection-security'] = 'Bezpiecze�stwo';
$lang['ConfigBoard-admin_email'] = 'Adres e-mail administratora';
$lang['ConfigBoard-board_descr'] = 'Opis forum';
$lang['ConfigBoard-board_keywords'] = 'S�owa kluczowe';
$lang['ConfigBoard-board_keywords-info'] = 'Oddzielaj przecinkami.';
$lang['ConfigBoard-board_name'] = 'Nazwa forum';
$lang['ConfigBoard-date_format'] = 'Format daty';
$lang['ConfigBoard-date_format-info'] = 'Same syntax as PHP\'s date().';
$lang['ConfigBoard-language'] = 'Domy�lny j�zyk';
$lang['ConfigBoard-language-info'] = 'Dzia�a tylko dla go�ci i nowych kont.';
$lang['ConfigBoard-session_name'] = 'Nazwa sesji';
$lang['ConfigBoard-session_name-info'] = 'Tylko znaki alfanumeryczne, bez spacji. Musi zawiera� conajmniej jedn� liter�..';
$lang['ConfigBoard-template'] = 'Domy�lna sk�rka';
$lang['ConfigBoard-template-info'] = 'Dzia�a tylko dla go�ci i nowych kont.';
$lang['ConfigBoard-active_topics_count'] = 'Liczba aktywnych temat�w';
$lang['ConfigBoard-avatars_force_height'] = 'Maksymalna wysoko�� avatara (w pixelach)';
$lang['ConfigBoard-avatars_force_height-info'] = '0 dla nielimitowanej wysoko�ci.';
$lang['ConfigBoard-avatars_force_width'] = 'Maksymalna wysoko�� avatara (w pixelach)';
$lang['ConfigBoard-avatars_force_width-info'] = '0 dla nielimitowanej wysokosci.';
$lang['ConfigBoard-debug'] = 'Tryb debugowania';
$lang['ConfigBoard-email_view_level'] = 'Poziom ogl�dania e-maila';
$lang['ConfigBoard-flood_interval'] = 'Zabezpieczenie przeciw floodowe (w sekundach)';
$lang['ConfigBoard-members_per_page'] = 'U�ytkownik�w na stron�';
$lang['ConfigBoard-online_min_updated'] = 'Aktywnych u�ytkownik�w w ostatnim czasie';
$lang['ConfigBoard-output_compression'] = 'Kompresja wychodz�ca';
$lang['ConfigBoard-passwd_min_length'] = 'Minimalna d�ugo�� has�a';
$lang['ConfigBoard-posts_per_page'] = 'Post�w na stron�';
$lang['ConfigBoard-rss_items_count'] = 'Ilo�� przedmiot�w w RSS';
$lang['ConfigBoard-search_limit_results'] = 'Ogranicz ilo�� wyszukanych do X';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Minimalna d�ugo�c wyszukiwanego s�owa';
$lang['ConfigBoard-session_max_lifetime'] = 'Maksymalna d�ugo�� sesji (w minutach)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Edited message note timeout';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'Je�eli post zosta� edytowany w czasie X sekund po jego napisaniu informacja o tym zostanie ukryta.';
$lang['ConfigBoard-topicreview_posts'] = 'Topic review post count';
$lang['ConfigBoard-topics_per_page'] = 'Temat�w na stron�';
$lang['ConfigBoard-view_active_topics_min_level'] = 'Aktywnych temat�w';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Szczeg�owa lista online';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Statystyki';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Minimalny poziom wymagany do ogl�dania ukrytych adres�w e-mail';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Lista u�ytkownik�w';
$lang['ConfigBoard-view_search_min_level'] = 'Wyszukiwarka';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Ekipa forum';
$lang['ConfigBoard-view_stats_min_level'] = 'Strona statystyk';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Link do kontaktu z administratorem';
$lang['ConfigBoard-allow_multi_sess'] = 'Dopu�� mulitesyjno�c z jednego  numeru IP';
$lang['ConfigBoard-board_closed'] = 'Zamknij forum';
$lang['ConfigBoard-board_closed-info'] = 'Administratorzy wci�� b�d� mogli widzie� forum.';
$lang['ConfigBoard-cookie_secure'] = 'Zabezpieczaj ciasteczka';
$lang['ConfigBoard-cookie_secure-info'] = 'Zabiezpiecz ciasteczka (HTTPS Only)';
$lang['ConfigBoard-cookie_httponly'] = 'W��cz tylko ciasteczka HTTPS';
$lang['ConfigBoard-cookie_httponly-info'] = 'Dodaj do ciasteczek wpis "HTTPOnly" by zabezpieczy� je bardziej przed XSS.';
$lang['ConfigBoard-dst'] = 'Daylight saving times';
$lang['ConfigBoard-enable_contactadmin'] = 'W��cz link kontaktowy administratora';
$lang['ConfigBoard-enable_detailed_online_list'] = 'W��cz szczeg�ow� list� on-line.';
$lang['ConfigBoard-enable_forum_stats_box'] = 'W��cz skrzynk� ze statystykami forum';
$lang['ConfigBoard-enable_memberlist'] = 'W��cz list� u�ytkownik�w.';
$lang['ConfigBoard-enable_quickreply'] = 'W��cz szybk� odpowied�';
$lang['ConfigBoard-enable_rss'] = 'W��cz pola RSS';
$lang['ConfigBoard-enable_stafflist'] = 'W��cz stron� "Ekipa forum"';
$lang['ConfigBoard-enable_stats'] = 'W��cz stron� ze statystykami';
$lang['ConfigBoard-friendly_urls'] = 'W��cz przyjazne URL';
$lang['ConfigBoard-friendly_urls-info'] = 'Wymaga Apache i mod_rewrite.';
$lang['ConfigBoard-guests_can_access_board'] = 'Go�cie mog� widzie� forum.';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'Go�cie mog� widzie� informacje kontaktowe zamieszcozne w profilach.';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Go�cie moga widzie� profile uzytkownik�w.';
$lang['ConfigBoard-hide_avatars'] = 'Ukryj wsyzstkie avatary.';
$lang['ConfigBoard-hide_signatures'] = 'Ukryj wszystkie sygnaturki.';
$lang['ConfigBoard-hide_userinfo'] = 'Ukryj informacje o u�ytkownikach';
$lang['ConfigBoard-rel_nofollow'] = 'W��cz "nofollow" googla.';
$lang['ConfigBoard-rel_nofollow-info'] = 'Ta opcja sprawi, �e google b�dzie omija� wszystkie linki BBcode.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Powracaj do tematu po zamieszczeniu posta.';
$lang['ConfigBoard-sig_allow_bbcode'] = 'W��cz obs�ug� BBcode w sygnaturkach.';
$lang['ConfigBoard-sig_allow_smilies'] = 'W��cz u�mieszki w sygnaturkach.';
$lang['ConfigBoard-sig_max_length'] = 'Maksymalna d�ugo�� sygnaturki.';
$lang['ConfigBoard-single_forum_mode'] = 'Tryb pojedy�czego forum.';
$lang['ConfigBoard-single_forum_mode-info'] = 'Ustawia jedyne widoczne forum indexem forum.';
$lang['ConfigBoard-target_blank'] = 'Linki BBcode otwieraj� nowe okno przegl�darki.';
$lang['ConfigBoard-activation_mode'] = 'Metoda aktywacji';
$lang['ConfigBoard-activation_mode0'] = 'Brak aktywacji';
$lang['ConfigBoard-activation_mode1'] = 'Aktywacja poprzez e-mail';
$lang['ConfigBoard-activation_mode2'] = 'Aktywacja poprzez administratora';
$lang['ConfigBoard-board_closed_reason'] = 'Pow�d zamkni�cia forum.';
$lang['ConfigBoard-board_url'] = 'Adres forum';
$lang['ConfigBoard-board_url-info'] = 'Kompletny adres forum. Pozostaw puste aby skrypt wype�ni� sam.';
$lang['ConfigBoard-cookie_domain'] = 'Domena ciasteczek';
$lang['ConfigBoard-cookie_path'] = 'Katalog ciasteczek';
$lang['ConfigBoard-session_save_path'] = 'Katalog zapisu sesji';
$lang['ConfigBoard-session_save_path-info'] = 'Custom session data save path; only absolute directory names.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Wyklucz forum ze strony aktywnych temat�w';
$lang['ConfigBoard-exclude_forums_rss'] = 'Wyklucz fora z RSS';
$lang['ConfigBoard-exclude_forums_stats'] = 'Wyklucz fora ze strony statystyk';
$lang['ConfigBoard-timezone'] = 'Strefa czasowa';
$lang['ConfigBoard-debug0'] = 'Wy��czone';
$lang['ConfigBoard-debug1'] = 'Proste (parse time and counts)';
$lang['ConfigBoard-debug2'] = 'Extended (simple + SQL queries)';
$lang['ConfigBoard-email_view_level0'] = 'Ukryj wszytkie adresy e-mail';
$lang['ConfigBoard-email_view_level1'] = 'W��cz formularz e-mailowy';
$lang['ConfigBoard-email_view_level2'] = 'Show spam proof';
$lang['ConfigBoard-email_view_level3'] = 'Show raw';
$lang['ConfigBoard-output_compression0'] = 'Wy��czone';
$lang['ConfigBoard-output_compression1'] = 'Zmniejszaj HTML';
$lang['ConfigBoard-output_compression2'] = 'W��cz gzip';
$lang['ConfigBoard-output_compression3'] = 'Zmniejszaj HTMl + gzip';
$lang['ConfigBoard-level0'] = 'Go�cie';
$lang['ConfigBoard-level1'] = 'U�ytkownicy';
$lang['ConfigBoard-level2'] = 'Moderatorzy';
$lang['ConfigBoard-level3'] = 'Administratorzy';
$lang['ConfigBoard-enable_acp_modules'] = 'W��cz modu�y ACP';
$lang['ConfigBoard-disable_registrations'] = 'Wy��cz rejestracj�';
$lang['ConfigBoard-disable_registrations-info'] = 'U�ytkownicy wci�� b�d� mogli by� rejestrowani poprzez ACP.';
$lang['ConfigBoard-disable_registrations_reason'] = 'Pow�d wy��czenia rejestracji';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Dopu�� duplikowanie adres�w e-mail';
$lang['ConfigBoard-enable_badwords_filter'] = 'W��cz cenzur� brzydkich s��w';
$lang['ConfigBoard-enable_ip_bans'] = 'W��cz banowanie adres�w IP';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'Show raw entities in [code] tags.';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'Show the raw entity code instead of its HTML representation.';
$lang['ConfigBoard-username_min_length'] = 'Minimalna d�ugo�� loginu';
$lang['ConfigBoard-username_max_length'] = 'Maksymalna d�ugo�� loginu';
$lang['ConfigBoard-show_never_activated_members'] = 'Pokazuj nigdy nie aktywowanych u�ytkownik�w';
$lang['ConfigBoard-show_never_activated_members-info'] = 'Pokazuj tych u�ytkownik�w na stronie statystyk oraz li�cie on-line.';
$lang['ConfigBoard-enable_registration_log'] = 'W��cz logi rejestracji';
$lang['ConfigBoard-enable_registration_log-info'] = 'Zapisuje logi rejestracji w pliku tekstowym na serwerze.';
$lang['ConfigBoard-registration_log_file'] = 'Plik log�w rejestracji';
$lang['ConfigBoard-registration_log_file-info'] = 'Podaj adres, do kt�rego b�d� zapisywane logi rejestracji.';
$lang['ConfigBoard-enable_email_dns_check'] = 'W��cz sprawdaznie DNS�w adres�w e-mail';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'Validates by looking for MX records. This may not work on all valid domains.';
$lang['ConfigBoard-rules'] = 'Regulamin Forum';
$lang['ConfigBoard-rules-info'] = 'Mo�esz zawsze zaktualizowa� Regulamin Strony';
$lang['ConfigBoard-edit_post_timeout'] = 'Czas zamkni�cia mo�liwo�ci edycji postu';
$lang['ConfigBoard-edit_post_timeout-info'] = 'U�ytkownik moze edytowa� tylko do up�ywu X sekund od czasu napisania postu.';
$lang['ConfigBoard-disable_xhtml_header'] = 'Wy��cz nag��wki HTML dla szablon�w xHTML.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'An XHTML Content-Type can only be used when the content is 100% well-formed. This is always disabled for non-XHTML browsers.';
$lang['ConfigBoard-email_reply-to_header'] = 'U�yj nag��wka odpowiedz-do';
$lang['ConfigBoard-email_reply-to_header-info'] = 'U�yj "odpowiedz-do" zamiast e-mailu u�ytkownika (wymagane na niekt�rych hostach).';
$lang['ConfigBoard-mass_email_msg_recipients'] = 'Liczba odbiorc�w masowej wiadomo�ci';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'Masowa wiadomo�� b�dzie wysy�ana dop�ki wszyscy u�ytkownicy jej nie otrzymaj�.';
$lang['ConfigBoard-sendmail_sender_parameter'] = 'W��cz parametr "sendmail -f".';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = 'to mo�e popsu� funkcjonalno�c meili na niekt�rych maszynach.';
$lang['ConfigBoard-antispam_question_mode'] = 'Pytania anty-spamowe';
$lang['ConfigBoard-antispam_question_mode-info'] = 'Wyswietla przypadkowe pytanie przed tym jak go�c uzyska dost�p do rejestracji lub pisania post�w.';
$lang['ConfigBoard-antispam_question_mode0'] = 'Wy��czone';
$lang['ConfigBoard-antispam_question_mode1'] = 'Przypadkowe pytania';
$lang['ConfigBoard-antispam_question_mode2'] = 'Pytania wybrane przez Ciebie';
$lang['ConfigBoard-antispam_question_questions'] = 'Utw�rz/Edytuj swoje pytania anty-spamowe';
$lang['ConfigBoard-antispam_question_questions-info'] = 'Questions in the form of &quot;question|answer&quot; (without quotes), separated by newlines. The answer is case-insensitive.';
$lang['ConfigBoard-enable_error_log'] = 'W��cz dziennik b��d�w';
$lang['ConfigBoard-enable_error_log-info'] = 'Logs errors using PHP\'s logging mechanism. See PHP error_log configuration option.';
$lang['ConfigBoard-error_log_log_hidden'] = 'Logowanie b��d�w ukryte';
$lang['ConfigBoard-error_log_log_hidden-info'] = 'On production environments, some error types are hidden for users. Enabling this will still log them if possible.';
$lang['ConfigBoard-show_posting_links_to_guests'] = 'Poka� nowe tematy i nowe posty dla go�ci.';
$lang['ConfigBoard-show_posting_links_to_guests-info'] = 'Shown if members can post. &ndash; Will redirect to login.';
$lang['ConfigBoard-acp_auto_logout'] = 'Auto logout from ACP after x minutes inactivity';
$lang['ConfigBoard-acp_auto_logout-info'] = 'This is disabled for pages with large forms, such as General Configuration.';
$lang['ConfigBoard-enable_dnsbl_powered_banning'] = 'Enable DNSBL powered banning';
$lang['ConfigBoard-enable_dnsbl_powered_banning-info'] = 'Requires IP address banning to be enabled.';

$lang['CategoriesInfo'] = 'W tej sekcji mo�esz zarz�dza� kategoriami na swoim forum.';
$lang['CategoriesAddNewCat'] = 'Dodaj now� kategori�';
$lang['CategoriesAdjustSortIDs'] = 'Zmie� sortowanie ID.';
$lang['CategoriesSortAutomatically'] = 'Automatycznie sortuj kategorie';
$lang['CategoriesNoCatsExist'] = 'To forum nie zawiera jeszcze �adnych kategorii.';
$lang['CategoriesCatName'] = 'Nazwa kategorii';
$lang['CategoriesSortID'] = 'ID sortowania';
$lang['CategoriesMissingFields'] = 'Niekt�re wymagane pola nie ozsta�y wype�nione. Wr�� i wype�nij je poprawnie.';
$lang['CategoriesSortChangesApplied'] = 'Zmiany wprowadzone w sortowaniu ID zosta�y zapisane.';
$lang['CategoriesConfirmCatDelete'] = 'Potwierd� usuni�cie kategori';
$lang['CategoriesConfirmCatDeleteContent'] = 'Czy jeste� pewnien, ze chcesz usun�� kategori� %s? Ta akcja jest nieodwracalna!';
$lang['CategoriesMoveContents'] = 'Przenie� zawarto�� kategori do %s';
$lang['CategoriesDeleteContents'] = 'Usu� zawarto�� kategori';
$lang['CategoriesEditingCat'] = 'Edytowanie kategori %s';

$lang['ForumsInfo'] = 'W tej sekcji mo�esz zarz�dza� forami.';
$lang['ForumsAddNewForum'] = 'Dodaj nowe forum';
$lang['ForumsAdjustSortIDs'] = 'Zmie� sortowanie ID';
$lang['ForumsSortAutomatically'] = 'Sortuj fora automatycznie';
$lang['ForumsNoForumsExist'] = 'To forum dyskusyjne nie zawiera jeszcze �adnego forum.';
$lang['ForumsForumName'] = 'Nazwa forum';
$lang['ForumsCatName'] = 'Nadrz�dna kategoria';
$lang['ForumsDescription'] = 'Opis';
$lang['ForumsDescriptionExplain'] = 'W tym polu mozesz u�ywa� HTML.';
$lang['ForumsStatus'] = 'Status';
$lang['ForumsStatusOpen'] = 'Otwarte';
$lang['ForumsAutoLock'] = 'Automatycznie zablokuj';
$lang['ForumsAutoLockXReplies'] = 'Zablokluj po %s odpowiedziach.';
$lang['ForumsIncreasePostCount'] = 'Zaliczaj do licznika post�w u�ytkownika';
$lang['ForumsModerators'] = 'Moderatorzy';
$lang['ForumsModeratorsExplain'] = 'Nazwy u�ytkownik�w (nie nazwy wyswietlane) oddzielane spacj�';
$lang['ForumsModeratorsUnknown'] = 'Nieznany u�ytkownik (u�ytkownicy): %s.';
$lang['ForumsHideModsList'] = 'Ukryj list� moderator�w';
$lang['ForumsSortID'] = 'Sortowanie ID';
$lang['ForumsMissingFields'] = 'Niekt�re wymagane pola nie zosta�y poprawnie wype�nione.';
$lang['ForumsSortChangesApplied'] = 'Zmiany wprowadzone w sortowaniu ID zosta�y zapisane.';
$lang['ForumsConfirmForumDelete'] = 'Potwierd� usuni�cie forum';
$lang['ForumsConfirmForumDeleteContent'] = 'Czy jeste� pewnien, �e chcesz usun�� forum %s? Tej akcji nie da si� cofn��!';
$lang['ForumsMoveContents'] = 'Przenie� zawarto�� forum do %s';
$lang['ForumsMoveModerators'] = 'Przeniesienie zawarto�ci forum spowoduje r�wnie� przeniesienie moderator�w.';
$lang['ForumsDeleteContents'] = 'usu� zawarto��';
$lang['ForumsEditingForum'] = 'Edytowanie forum %s';
$lang['ForumsGeneral'] = 'G��wne ustawienia';
$lang['ForumsAuth'] = 'Ustawienia autoryzacji';
$lang['ForumsAuthNote'] = 'Ustawienia nie s� dziedziczne!';
$lang['Forums-level0'] = 'Go�cie';
$lang['Forums-level1'] = 'U�ytkownicy';
$lang['Forums-level2'] = 'Moderatorzy';
$lang['Forums-level3'] = 'Administratorzy';
$lang['Forums-auth0'] = 'Ogl�danie forum';
$lang['Forums-auth1'] = 'Czytanie temat�w';
$lang['Forums-auth2'] = 'Pisanie temat�w';
$lang['Forums-auth3'] = 'Odpowiadanie na tematy';
$lang['Forums-auth4'] = 'Edytowanie post�w innych u�ytkownik�w';
$lang['Forums-auth5'] = 'Przenoszenie temat�w';
$lang['Forums-auth6'] = 'Usuwanie post�w i temat�w';
$lang['Forums-auth7'] = 'Zamykanie temat�w';
$lang['Forums-auth8'] = 'Przypinanie temat�w';
$lang['Forums-auth9'] = 'U�ywanie HTML (niebezpieczne)';

$lang['IPLookupSearchHostname'] = 'Szukaj po nazwie hosta';
$lang['IPLookupSearchUsernames'] = 'Szukaj u�ytkownika (u�ytkownik�w)';
$lang['IPLookupHostname'] = 'Nazwa hosta';
$lang['IPLookupHostnameNotFound'] = 'Nie znaleziono odpowiedniej nazwy hosta.';
$lang['IPLookupUsernames'] = 'Loginy';
$lang['IPLookupUsernamesNotFound'] = 'Nie znaleziono odpowiadaj�cych login�w.';

$lang['SQLToolboxWarningTitle'] = 'Wa�ne ostrze�enie!';
$lang['SQLToolboxWarningContent'] = 'Be very careful using the raw query tool. Executing ALTER, DELETE, TRUNCATE or other types of queries may irreversibly damage your forum! Only use this when you know what you are doing.';
$lang['SQLToolboxExecuteQuery'] = 'Execute Query';
$lang['SQLToolboxExecuteQueryInfo'] = 'Enter an SQL query to execute. Eventually, results will be shown in a second text box.';
$lang['SQLToolboxExecute'] = 'Execute';
$lang['SQLToolboxExecutedSuccessfully'] = 'Query executed successfully.';
$lang['SQLToolboxMaintenance'] = 'Maintenance';
$lang['SQLToolboxMaintenanceInfo'] = 'These functions optimize (and repair) the SQL tables used by UseBB. Optimizing the tables often enough is recommended for larger boards.';
$lang['SQLToolboxRepairTables'] = 'Napraw tabele';
$lang['SQLToolboxOptimizeTables'] = 'Optymalizuj tabele';
$lang['SQLToolboxMaintenanceNote'] = 'Note: this does not restore any lost data in the database.';

$lang['ModulesInfo'] = 'Modu� ACP pozwalaj� ci na dodanie do ACP nowych mo�liwo�ci. Modu�y mo�na znale�� na stronie UseBB: %s.';
$lang['ModulesLongName'] = 'D�uga nazwa';
$lang['ModulesShortName'] = 'Kr�tka nazwa';
$lang['ModulesCategory'] = 'Kategoria';
$lang['ModulesFilename'] = 'Nazwa pliku';
$lang['ModulesDeleteNotPermitted'] = 'Brak uprawnie�';
$lang['ModulesDisabled'] = 'Modu�y ACP zosta�y wy��czone w konfiguracji forum.';
$lang['ModulesNoneAvailable'] = 'Nie ma modu��w do wy�wietlenia.';
$lang['ModulesUpload'] = 'Wrzu� modu�';
$lang['ModulesUploadInfo'] = 'Podaj nazw� lokalnego pliku lub nazw� modu�u ACP skryptu UseBB by wrzuci� go na serwer.';
$lang['ModulesUploadDuplicateModule'] = 'Modu� nazwany %s istnieje ju� na serwerze. Prosz� go wpierw usun��.';
$lang['ModulesUploadNoValidModule'] = 'Plik %s nie jest poprawnym modu�em UseBB.';
$lang['ModulesUploadFailed'] = 'Nie mo�na zainstalowa� modu�u %s. Nie uda�o si� skopiowa�.';
$lang['ModulesUploadDisabled'] = 'Katalog uploadu modu��w nie jest zapisywalny. Wrzucanie modu��w wy��czone. By je w��czy� nadaj kategorii %s CHMOD 777.';
$lang['ModulesConfirmModuleDelete'] = 'Potwierd� usuni�cie modu�u';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Czy jeste� pewien, ze chcesz usun�� modu� %s (%s modu�y)?';

$lang['MembersSearchMember'] = 'Szukaj u�ytkownika';
$lang['MembersSearchMemberInfo'] = 'Podaj nick (lub jego cz��).';
$lang['MembersSearchMemberExplain'] = 'Nick lub nazwa wy�wietlana';
$lang['MembersSearchMemberNotFound'] = 'Nie znaleziono nazwy u�ytkownika %s .';
$lang['MembersSearchMemberList'] = 'Nast�puj�cy u�ytkownicy zostali znalezieni';
$lang['MembersEditingMember'] = 'Edytowanie u�ytkownika %s';
$lang['MembersEditingMemberInfo'] = 'Zako�cz edycj� profilu i zatwierd� formularz. Pola zaznaczone (*) s� wymagane.';
$lang['MembersEditingMemberUsernameExists'] = 'U�ytkownik %s ju� istnieje.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Wy�wietlana nazwa %s ju� istnieje.';
$lang['MembersEditingMemberBanned'] = 'Zbanowany';
$lang['MembersEditingMemberBannedReason'] = 'Przyczyna bana';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Nie mo�esz zmienia� swojego w�asnego poziomu.';
$lang['MembersEditingMemberCantBanSelf'] = 'Nie mo�esz sam siebie zbanowa�.';
$lang['MembersEditingComplete'] = 'Profil u�ytkownika %s zosta� poprawnie wyedytowany.';
$lang['MembersEditingLevelModInfo'] = 'Aby zrobi� z kogo� moderatora, edytuj wybrane forum oraz dodaj login u�ytkownika w miejsce "Moderator".';

$lang['DeleteMembersSearchMember'] = 'Szukaj u�ytkownika';
$lang['DeleteMembersSearchMemberInfo'] = 'Podaj nick lub jego cz�� by usun�� wybranego u�ytkownika.';
$lang['DeleteMembersSearchMemberExplain'] = 'Nick lub wy�wietlana nazwa';
$lang['DeleteMembersSearchMemberNotFound'] = 'Nie znaleziono u�ytkownika o nicku %s .';
$lang['DeleteMembersSearchMemberList'] = 'Znaleziono nast�puj�ce konta';
$lang['DeleteMembersConfirmMemberDelete'] = 'Potwierd� usuni�cie u�ytkownika';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Czy jeste� pewien, �e chcesz usun�� u�ytkownika %s? Ta akcja jest nie odwracalna!';
$lang['DeleteMembersComplete'] = 'Usuni�cie u�ytkownika %s powiod�o si�.';
$lang['DeleteMembersDeletePosts'] = 'Usu� posty wybranego u�ytkownika.';
$lang['DeleteMembersBanEmail'] = 'Adres e-mail do zbanowania';

$lang['RegisterMembersExplain'] = 'Tutaj mo�esz stworzy� nowego u�ytkownika. Wype�nij wymagane pola.';
$lang['RegisterMembersComplete'] = 'Zarejstrowano u�ytkownika %s . Mo�esz si� zalogowa�.';
$lang['RegisterMembersEditMember'] = 'Mo�esz edytowa� utworzone konto u�ytkownika: %s.';

$lang['ActivateMembersExplain'] = 'Tutaj znajduje si� lista u�ytkownik�w oczekuj�cych na aktywacj�. Nazwy oznaczone (*) oznaczaj� konta, kt�re by�y wcze�niej aktywne.';
$lang['ActivateMembersNoMembers'] = 'Nie ma u�ytkownik�w do wy�wietlenia.';
$lang['ActivateMembersListAdmin'] = 'Aktywacja administratora';
$lang['ActivateMembersListEmail'] = 'Aktywacja e-mailem';
$lang['ActivateMembersListAll'] = 'Wszystkie';

$lang['PruneForumsStart'] = 'Zacznij usuwanie';
$lang['PruneForumsExplain'] = 'Usuwaj�c fora mozesz oczy�ci� baz� ze starych post�w i temat�w.';
$lang['PruneForumsForums'] = 'Fora do usuni�cia';
$lang['PruneForumsAction'] = 'Akcja';
$lang['PruneForumsActionLock'] = 'Zablokuj';
$lang['PruneForumsActionMove'] = 'Przenie�';
$lang['PruneForumsActionDelete'] = 'Usu�';
$lang['PruneForumsMoveTo'] = 'Przenie� tematy do';
$lang['PruneForumsTopicAge'] = 'Wiek temat�w';
$lang['PruneForumsTopicAgeField'] = 'Ostatnia odpowied� napisana zosta�a %s dni wcze�niej.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'The &quot;move to&quot; forum cannot be selected for pruning.';
$lang['PruneForumsConfirm'] = 'Potwierd�';
$lang['PruneForumsConfirmText'] = 'Rozumiem, �e ta akcja jest nieodwracalna.';
$lang['PruneForumsNotConfirmed'] = 'Musisz potwierdzi� t� akcj� przed usuni�ciem for.';
$lang['PruneForumsDone'] = 'Usuwanie zako�czone. %d temat�w zosta�o usuni�tych.';
$lang['PruneForumsExcludeStickies'] = 'Nie usuwaj przyklejonych temat�w';

$lang['PruneMembersExplain'] = 'Usuwaj�c nieaktywnych u�ytkownik�w oczy�cisz swoj� baz�.';
$lang['PruneMembersTypeNeverActivated'] = 'Nigdy nieaktywowani u�ytkownicy';
$lang['PruneMembersRegisteredDaysAgo'] = 'Zarejestrowany przynajmniej %s dni temu.';
$lang['PruneMembersTypeNeverPosted'] = 'U�ytkownicy, kt�rzy nigdy nie napisali �adnego posta';
$lang['PruneMembersTypeInactive'] = 'Nieaktywni u�ytkownicy';
$lang['PruneMembersLastLoggedIn'] = 'Ostanio zalogowani %s dni temu.';
$lang['PruneMembersExclude'] = 'Wyeliminuj';
$lang['PruneMembersPreview'] = 'Przegl�daj u�ytkownik�w';
$lang['PruneMembersPreviewList'] = 'With the submitted settings, %d members will be pruned.';
$lang['PruneMembersUsesCurrentSettings'] = 'Uwaga! % s u�ywa aktualnie wybranych ustawie�, nie ostatni podgl�d listy cz�onk�w.';
$lang['PruneMembersExclude'] = 'Wyklucz';
$lang['PruneMembersConfirmText'] = 'Rozumiem, �e ta akcja jest nie odwracalna.';
$lang['PruneMembersStart'] = 'Zacznij usuwanie';
$lang['PruneMembersNotConfirmed'] = 'Musisz wpierw potwierdzi� akcj�.';
$lang['PruneMembersDone'] = 'Usuwanie zako�czono. %d uzytkownik� zosta�o usuni�tych.';

$lang['DNSBLIPBansDisabled'] = 'Banowanie adres�w IP jest wy��czone';
$lang['DNSBLIPBansDisabledInfo'] = 'For DNSBL powered banning to work, IP address banning must be enabled.';
$lang['DNSBLGeneralInfo'] = 'Open proxies are often used to post spam or abusive messages. Using UseBB\'s protection system, most of these proxies can be detected and banned automatically. Herefore blacklists are queried for information about the visitor\'s IP address.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'Enable DNSBL powered banning';
$lang['DNSBLServers'] = 'DNS BlackList (DNSBL) servers';
$lang['DNSBLServersInfo'] = 'One DNSBL server per line. Note using many of these blacklists together may cause slowness upon creating a new session on your forum.';
$lang['DNSBLMinPositiveHits'] = 'At least %s positive hits are required to ban an IP address.';
$lang['DNSBLRecheckMinutes'] = 'Recheck allowed IP addresses every %s minutes (0 to disable).';
$lang['DNSBLSettingsSaved'] = 'DNSBL banning settings saved.';
$lang['DNSBLWhitelist'] = 'Bia�a lista';
$lang['DNSBLWhitelistInfo'] = 'One IP address or hostname per line (* and ? can be used as wildcards).';
$lang['DNSBLGlobally'] = 'Perform checking globally instead of only for registering/posting (not recommended).';

$lang['BadwordsInfo'] = 'Brzydkie s�owa mog� zosta� usuni�te lub ewentualnie "zagwiazdkowane".';
$lang['BadwordsDisabled'] = 'Cenzor jest wy��czony';
$lang['BadwordsDisabledInfo'] = 'Cenzura zosta�a wy�aczona w konfiguracji forum.';
$lang['BadwordsNoBadwordsExist'] = '�adne filtry nie istniej� na tym forum.';
$lang['BadwordsAddBadwordWord'] = 'S�owo';
$lang['BadwordsAddBadwordReplacement'] = 'Zamiennik';

$lang['MassEmailInfo'] = 'Wysy�a masow� wiadomo�� e-mail do wszystkich u�ytkownik�w lub do wybranej grupy.';
$lang['MassEmailRecipients'] = 'Odbiorcy';
$lang['MassEmailRecipients-admins'] = 'Administratorzy';
$lang['MassEmailRecipients-mods'] = 'Moderatorzy';
$lang['MassEmailRecipients-members'] = 'U�ytkownicy';
$lang['MassEmailSubject'] = 'Temat';
$lang['MassEmailBody'] = 'Tekst';
$lang['MassEmailTemplate'] = 'Witaj,

To jest mail od administracji [board_name].

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'Masowy e-mail zosta� wys�any do %d u�ytkownik�w. Wys�ano %d wiadomo�ci.';
$lang['MassEmailOptions'] = 'Opcje';
$lang['MassEmailPublicEmailsOnly'] = 'Wysy�ane tylko do publicznie widocznych adresow e-mail';
$lang['MassEmailExcludeBanned'] = 'Wyklucz zbanowanych uzytkownik�w';

$lang['BansInfo'] = 'Tutaj mozesz kontrolowa� wszystkie aspekty banowania na twoim forum.';
$lang['Bans-username'] = 'Loginy';
$lang['Bans-email'] = 'Adresy e-mail';
$lang['Bans-ip_addr'] = 'Adresy IP';
$lang['BansUsername'] = 'Nick';
$lang['BansEmail'] = 'Adres e-mail';
$lang['BansIp_addr'] = 'Adres IP';
$lang['BansNoBansExist'] = 'Nie ma ban�w tego typu na tym forum.';
$lang['BansIPBansDisabledInfo'] = 'Banowanie adres�w IP zosta�o wy�aczone w konfiguracji forum.';

?>
