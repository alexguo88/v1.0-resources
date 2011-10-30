<?php

/*
	Copyright (C) 2003-2006 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_English.php,v 1.53 2006/02/08 16:59:34 pc_freak Exp $
	
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

$lang['AdminLogin'] = 'P�ihl�en� do administrativy';
$lang['AdminPasswordExplain'] = 'Z bezpe�nostn�ch d�vod� mus�te pro p�ihl�en� do administrativy zadat va�e heslo.';

$lang['RunningBadACPModule'] = 'UseBB nem��e tento modul vyu��vat, proto�e jedna nebo v�ce jeho ��st� nen� dostupn�ch (nebyl nalezen ��dn� objekt $usebb_module a/nebo chyb� metoda run_module()).';

$lang['Category-main'] = 'Obecn�';
$lang['Item-index'] = 'Admin - �vod';
$lang['Item-version'] = 'Ov��en� verze';
$lang['Item-config'] = 'Obecn� nastaven�';
$lang['Category-forums'] = 'F�ra';
$lang['Item-categories'] = 'Spr�va kategori�';
$lang['Item-forums'] = 'Spr�va f�r';
$lang['Category-various'] = 'R�zn�';
$lang['Item-iplookup'] = 'Vyhled�n� IP adresy';
$lang['Item-sqltoolbox'] = 'N�stroje pro SQL';
$lang['Item-modules'] = 'Moduly do administrativy';
$lang['Category-members'] = 'Registrovan� u�ivatel�';
$lang['Item-members'] = '�prava u�ivatele';
$lang['Item-delete_members'] = 'Smaz�n� u�ivatele';
$lang['Item-register_members'] = 'Registrace u�ivatele';
$lang['Item-activate_members'] = 'Aktivace u�ivatel�';
$lang['Item-prune_forums'] = 'Pro�i�t�n� f�ra';

$lang['IndexWelcome'] = 'V�tejte v administrativ� UseBB f�ra. M��ete zde upravovat nastaven� cel�ho f�ra, spravovat jednotliv� f�ra, kategorie, u�ivatele, atd.';
$lang['IndexSystemInfo'] = 'Informace o syst�mu';
$lang['IndexUseBBVersion'] = 'Verze UseBB';
$lang['IndexPHPVersion'] = 'Verze PHP';
$lang['IndexSQLServer'] = 'SQL serverov� ovlada�';
$lang['IndexHTTPServer'] = 'HTTP server';
$lang['IndexOS'] = 'Opera�n� syst�m';
$lang['IndexLinks'] = 'Odkazy';
$lang['IndexUnactiveMembers'] = 'Neaktivovan� u�ivatel�';
$lang['IndexNoUnactiveMembers'] = '��dn� u�ivatel ne�ek� na aktivaci ��tu.';
$lang['IndexOneUnactiveMember'] = 'Jeden u�ivatel �ek� na aktivaci ��tu';
$lang['IndexMoreUnactiveMembers'] = 'N�kolik (%d) u�ivatel� �ek� na aktivaci ��tu.';

$lang['VersionFailed'] = 'Nelze zjistit, zda existuje nov�j�� verze syst�mu (%s zak�z�no). Sledujte proto pravideln� adresu %s, kde nov� verze naleznete.';
$lang['VersionLatestVersionTitle'] = 'Toto je posledn� verze syst�mu UseBB';
$lang['VersionLatestVersion'] = 'Toto f�rum je poh�n�no syst�mem UseBB %s, co� je nejnov�j�� stabiln� verze.';
$lang['VersionNeedUpdateTitle'] = 'K dispozici je nov� verze!';
$lang['VersionNeedUpdate'] = 'Toto f�rum poh�n� syst�m verze %s a m�l by b�t aktualizov�n na verzi %s. Aktualizace opravuj� bezpe�nostn� probl�my a chyby st�vaj�c� verze. Novou verzi UseBB f�ra naleznete na adrese %s.';
$lang['VersionBewareDevVersionsTitle'] = 'Byla nalezena v�vojov� verze';
$lang['VersionBewareDevVersions'] = 'Toto f�rum poh�n� syst�m %s, nicm�n� posledn� stabiln� verz� je %s. Dejte si proto pozor na probl�my a nekompatibility, kter� se mohou ve v�vojov� verzi vyskytnout.';

$lang['ConfigInfo'] = 'Na t�to str�nce m��ete upravovat v�echna nastaven� f�ra. Bu�te opatrn� zejm�na p�i �prav� konfigurace datab�ze. Pol��ka ozna�en� hv�zdi�kou (*) jsou povinn�.';
$lang['ConfigSet'] = 'Nastaven� f�ra bylo zm�n�no. Zm�ny se projev� a� p�i dal��m na�ten� str�nky.';
$lang['ConfigMissingFields'] = 'N�kter� pol��ka chyb� nebo jsou chybn� vypln�na (nap�. text m�sto ��sla). Opravte, pros�me, n�sleduj�c� pol��ka:';
$lang['ConfigBoard-type'] = 'Typ';
$lang['ConfigBoard-server'] = 'Server';
$lang['ConfigBoard-username'] = 'U�ivatelsk� jm�no';
$lang['ConfigBoard-passwd'] = 'Heslo';
$lang['ConfigBoard-dbname'] = 'Jm�no datab�ze';
$lang['ConfigBoard-prefix'] = 'Prefix tabulek';
$lang['ConfigBoardSection-general'] = 'F�rum obecn�';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-sessions'] = 'Sessions';
$lang['ConfigBoardSection-page_counts'] = 'Po�ty';
$lang['ConfigBoardSection-date_time'] = 'Datum a �as';
$lang['ConfigBoardSection-database'] = 'Nastaven� datab�ze';
$lang['ConfigBoardSection-advanced'] = 'Pokro�il� nastaven�';
$lang['ConfigBoardSection-email'] = 'E-mail';
$lang['ConfigBoardSection-additional'] = 'Dal�� vlastnosti';
$lang['ConfigBoardSection-user_rights'] = 'U�ivatelsk� pr�va';
$lang['ConfigBoardSection-layout'] = 'Nastaven� vzhledu';
$lang['ConfigBoard-admin_email'] = 'E-mailov� adresa administr�tora';
$lang['ConfigBoard-board_descr'] = 'Popis f�ra';
$lang['ConfigBoard-board_keywords'] = 'Kl��ov� slova f�ra (odd�len� ��rkou)';
$lang['ConfigBoard-board_name'] = 'N�zev f�ra';
$lang['ConfigBoard-date_format'] = 'Form�t data';
$lang['ConfigBoard-language'] = 'V�choz� jazyk';
$lang['ConfigBoard-session_name'] = 'N�zev session';
$lang['ConfigBoard-template'] = 'V�choz� �ablona';
$lang['ConfigBoard-active_topics_count'] = 'Po�et t�mat v sekci "Kde to �ije"';
$lang['ConfigBoard-avatars_force_width'] = 'Vynutit ���ku ikonky (pixely)';
$lang['ConfigBoard-avatars_force_height'] = 'Vynutit v��ku ikonky (pixely)';
$lang['ConfigBoard-debug'] = 'Debug m�d';
$lang['ConfigBoard-email_view_level'] = 'Zobrazen� e-mailov�ch adres';
$lang['ConfigBoard-flood_interval'] = 'Minim�ln� rozestup mezi dv�ma p��sp�vky jednoho u�ivatele v sekund�ch';
$lang['ConfigBoard-members_per_page'] = 'U�ivatel� na str�nce';
$lang['ConfigBoard-online_min_updated'] = 'P��tomn�ch u�ivatel� b�hem posledn�ch x minut';
$lang['ConfigBoard-output_compression'] = 'Komprimace v�stupu';
$lang['ConfigBoard-passwd_min_length'] = 'Minim�ln� d�lka hesla';
$lang['ConfigBoard-posts_per_page'] = 'P��sp�vk� na str�nce';
$lang['ConfigBoard-rss_items_count'] = 'Po�et polo�ek v RSS kan�lu';
$lang['ConfigBoard-search_limit_results'] = 'Omezit po�et v�sledk� vyhled�v�n� na x polo�ek';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Minim�ln� d�lka kl��ov�ho slova p�i vyhled�v�n�';
$lang['ConfigBoard-session_max_lifetime'] = 'Maxim�ln� doba platnosti session (v sekund�ch)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Zobrazit zpr�vu o �prav� p��sp�vku pouze pokud je upraven minim�ln� x sekund od vlo�en� p��sp�vku';
$lang['ConfigBoard-topicreview_posts'] = 'Po�et p��sp�vk� v p�ehledu t�matu';
$lang['ConfigBoard-topics_per_page'] = 'T�mat na str�nce';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Minim�ln� postaven� pro zobrazen� podrobn�ho seznamu p��tomn�ch u�ivatel�';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Minim�ln� postaven� pro zobrazen� stru�n� statistiky';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Minim�ln� postaven� pro zobrazen� skryt�ch e-mailov�ch adres';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Minim�ln� postaven� pro zobrazen� seznamu u�ivatel�';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Minim�ln� postaven� pro zobrazen� seznamu spr�vc�';
$lang['ConfigBoard-view_stats_min_level'] = 'Minim�ln� postaven� pro zobrazen� statistik';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Minim�ln� postaven� pro zobrazen� odkazu "kontakt na administr�tora"';
$lang['ConfigBoard-allow_multi_sess'] = 'Povolit v�ce sessions na IP';
$lang['ConfigBoard-board_closed'] = 'Uzav��t f�rum';
$lang['ConfigBoard-cookie_secure'] = 'Bezpe�n� cookies (for HTTPS)';
$lang['ConfigBoard-dst'] = 'Letn� �as';
$lang['ConfigBoard-enable_contactadmin'] = 'Povolit zobrazen� odkazu "kontakt na administr�tora';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Povolit podrobn� seznam p��tomn�ch u�ivatel�';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Povolit pole se stru�nou statistikou f�ra';
$lang['ConfigBoard-enable_memberlist'] = 'Povolit seznam u�ivatel�';
$lang['ConfigBoard-enable_quickreply'] = 'Povolit pole pro rychlou odpov��';
$lang['ConfigBoard-enable_rss'] = 'Povolit RSS kan�l';
$lang['ConfigBoard-enable_stafflist'] = 'Povolit seznam spr�vc�';
$lang['ConfigBoard-enable_stats'] = 'Povolit statistiky';
$lang['ConfigBoard-friendly_urls'] = 'Povolit p�kn� adresy';
$lang['ConfigBoard-friendly_urls-info'] = 'Vy�aduje Apache s modulem mod_rewrite. Zak�e zobrazen� ID relace (session_id) v adrese str�nky.';
$lang['ConfigBoard-guests_can_access_board'] = 'Neregistrovan� maj� na f�rum p��stup';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Neregistrovan� si mohou prohl�et u�ivatelsk� profily';
$lang['ConfigBoard-hide_avatars'] = 'Skr�t v�echny ikonky';
$lang['ConfigBoard-hide_signatures'] = 'Skr�t v�echny podpisy';
$lang['ConfigBoard-hide_userinfo'] = 'Skr�t informace o u�ivateli';
$lang['ConfigBoard-rel_nofollow'] = 'Povolit nofollow Googlu pro odkazy v BBCode';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Zp�t na t�ma po odesl�n� p��sp�vku';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Povolit BBCode v podpisech';
$lang['ConfigBoard-sig_allow_smilies'] = 'Povolit smajl�ky v podpisech';
$lang['ConfigBoard-sig_max_length'] = 'Maxim�ln� d�lka podpisu';
$lang['ConfigBoard-single_forum_mode'] = 'Zapnout m�d samostatn� f�rum (je-li to mo�n�)';
$lang['ConfigBoard-target_blank'] = 'Odkazy z BBCode se otev�ou do nov�ho okna';
$lang['ConfigBoard-activation_mode'] = 'Zp�sob aktivace';
$lang['ConfigBoard-activation_mode0'] = 'Bez aktivace';
$lang['ConfigBoard-activation_mode1'] = 'Aktivace e-mailem';
$lang['ConfigBoard-activation_mode2'] = 'Aktivace administr�torem';
$lang['ConfigBoard-board_closed_reason'] = 'D�vod uzav�en� f�ra';
$lang['ConfigBoard-board_url'] = 'Adresa f�ra (pro automatick� zji�t�n� ponechte pr�zdn�)';
$lang['ConfigBoard-cookie_domain'] = 'Dom�na cookie';
$lang['ConfigBoard-cookie_path'] = 'Cookie path';
$lang['ConfigBoard-session_save_path'] = 'Session save path';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Nezobrazovat p��sp�vky z f�r v sekci "Kde to �ije"';
$lang['ConfigBoard-exclude_forums_rss'] = 'Nezobrazovat p��sp�vky z f�r v RSS kan�lu';
$lang['ConfigBoard-exclude_forums_stats'] = 'Nepo��tat statistiky z f�r';
$lang['ConfigBoard-timezone'] = '�asov� p�smo';
$lang['ConfigBoard-debug0'] = 'Zak�z�no';
$lang['ConfigBoard-debug1'] = 'Jednoduch� lad�c� informace';
$lang['ConfigBoard-debug2'] = 'Roz���en� lad�c� informace';
$lang['ConfigBoard-email_view_level0'] = 'Skr�t v�echny e-mailov� adresy';
$lang['ConfigBoard-email_view_level1'] = 'Formul�� pro odesl�n� zpr�vy';
$lang['ConfigBoard-email_view_level2'] = 'Zobrazit e-mail jako obt�n� �iteln� pro spamov� roboty';
$lang['ConfigBoard-email_view_level3'] = 'Zobrazit e-mail bez omezen�';
$lang['ConfigBoard-output_compression0'] = 'Zak�z�no';
$lang['ConfigBoard-output_compression1'] = 'Komprimovat HTML';
$lang['ConfigBoard-output_compression2'] = 'Povolit Gzip';
$lang['ConfigBoard-output_compression3'] = 'Komprimovat HTML + Gzip';
$lang['ConfigBoard-level0'] = 'Neregistrovan� u�ivatel�';
$lang['ConfigBoard-level1'] = 'Registrovan� u�ivatel�';
$lang['ConfigBoard-level2'] = 'Moder�to�i';
$lang['ConfigBoard-level3'] = 'Administr�to�i';
$lang['ConfigBoard-enable_acp_modules'] = 'Povolit moduly administrativy';
$lang['ConfigBoard-disable_registrations'] = 'Zak�zat registrace';
$lang['ConfigBoard-disable_registrations_reason'] = 'D�vod z�kazu registrac�';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Povolit duplicitn� e-mailov� adresy';

$lang['CategoriesInfo'] = 'V t�to sekci m��ete spravovat kategorie, do kter�ch lze za�azovat jednotliv� f�ra.';
$lang['CategoriesAddNewCat'] = 'P�idat novou kategorii';
$lang['CategoriesAdjustSortIDs'] = 'Srovnat priority �azen�';
$lang['CategoriesSortAutomatically'] = '�adit kategorie automaticky';
$lang['CategoriesNoCatsExist'] = 'F�rum je�t� neobsahuje ��dn� kategorie.';
$lang['CategoriesCatName'] = 'N�zev kategorie';
$lang['CategoriesSortID'] = 'Priorita';
$lang['CategoriesMissingFields'] = 'N�kter� povinn� pol��ka nebyla vypln�na.';
$lang['CategoriesSortChangesApplied'] = 'Zm�ny v priorit� �azen� byly provedeny.';
$lang['CategoriesConfirmCatDelete'] = 'Potvrzen� smaz�n� kategorie';
$lang['CategoriesConfirmCatDeleteContent'] = 'Opravdu chcete nen�vratn� smazat kategorii %s?';
$lang['CategoriesMoveContents'] = 'P�esunout obsah kategorie do %s';
$lang['CategoriesDeleteContents'] = 'Smazat obsah';
$lang['CategoriesEditingCat'] = '�prava kategorie %s';

$lang['ForumsInfo'] = 'V t�to sekci m��ete spravovat jednotliv� f�ra.';
$lang['ForumsAddNewForum'] = 'P�idat nov� f�rum';
$lang['ForumsAdjustSortIDs'] = 'Srovnat priority �azen�';
$lang['ForumsSortAutomatically'] = '�adit f�ra automaticky';
$lang['ForumsNoForumsExist'] = 'Zat�m neexistuje ��dn� f�rum.';
$lang['ForumsForumName'] = 'N�zev f�ra';
$lang['ForumsCatName'] = 'Kategorie';
$lang['ForumsDescription'] = 'Popis';
$lang['ForumsStatus'] = 'Status';
$lang['ForumsStatusOpen'] = 'Otev�eno';
$lang['ForumsAutoLock'] = 'Automaticky uzamknout t�ma po x p��sp�vc�ch';
$lang['ForumsIncreasePostCount'] = 'Po��tat u�ivatel�m po�et p��sp�vk�';
$lang['ForumsModerators'] = 'Moder�to�i';
$lang['ForumsModeratorsExplain'] = 'U�ivatelsk� jm�na (ne zobrazovan�), odd�len� ��rkami. Na velikosti p�smen nez�le��.';
$lang['ForumsModeratorsUnknown'] = 'Nezn�m� u�ivatel(�): %s.';
$lang['ForumsHideModsList'] = 'Skr�t seznam moder�tor�';
$lang['ForumsSortID'] = 'Priorita';
$lang['ForumsMissingFields'] = 'N�kter� povinn� pol��ka nebyla vypln�na.';
$lang['ForumsSortChangesApplied'] = 'Zm�ny v priorit� �azen� byly provedeny.';
$lang['ForumsConfirmForumDelete'] = 'Potvrzen� smaz�n� f�ra';
$lang['ForumsConfirmForumDeleteContent'] = 'Opravdu chcete nen�vratn� smazat f�rum %s?';
$lang['ForumsMoveContents'] = 'P�esunout obsah f�ra do %s';
$lang['ForumsMoveModerators'] = 'P�i p�esunu obsahu p�esunout tak� moder�tory.';
$lang['ForumsDeleteContents'] = 'Smazat obsah';
$lang['ForumsEditingForum'] = '�prava f�ra %s';
$lang['ForumsGeneral'] = 'Obecn� nastaven�';
$lang['ForumsAuth'] = 'Nastaven� autorizace';
$lang['ForumsAuthNote'] = 'Nastaven� autorizace jednotliv�ch f�r se navz�jem ned�d�!';
$lang['Forums-level0'] = 'Neregistrovan� u�ivatel�';
$lang['Forums-level1'] = 'Registrovan� u�ivatel�';
$lang['Forums-level2'] = 'Moder�to�i';
$lang['Forums-level3'] = 'Administr�to�i';
$lang['Forums-auth0'] = 'Zobrazit f�rum';
$lang['Forums-auth1'] = '��st t�mata';
$lang['Forums-auth2'] = 'Zakl�dat nov� t�mata';
$lang['Forums-auth3'] = 'P�isp�vat do t�mat';
$lang['Forums-auth4'] = 'Upravovat p��sp�vky ostatn�ch u�ivatel�';
$lang['Forums-auth5'] = 'P�esouvat t�mata';
$lang['Forums-auth6'] = 'Mazat t�mata a p��sp�vky';
$lang['Forums-auth7'] = 'Zamykat t�mata';
$lang['Forums-auth8'] = 'Ozna�ovat t�mata za d�le�it�';
$lang['Forums-auth9'] = 'Ps�t p��sp�vky v HTML (nebezpe�n�)';

$lang['IPLookupSearchHostname'] = 'Vyhledat n�zev po��ta�e';
$lang['IPLookupSearchUsernames'] = 'Vyhledat u�ivatele';
$lang['IPLookupResult'] = 'N�zev po��ta�e odpov�daj�c� IP adrese %s je %s.';
$lang['IPLookupNotFound'] = 'K IP adrese %s nebyl nalezen ��dn� odpov�daj�c� n�zev po��ta�e.';
$lang['IPLookupUsernamesSingular'] = 'U�ivatel %s pos�lal zpr�vy z adresy %s.';
$lang['IPLookupUsernamesPlural'] = '%d u�ivatel� (%s) psalo zpr�vy z adresy %s.';
$lang['IPLookupUsernamesNotFound'] = 'Nebyli nalezeni ��dn� u�ivatel� s adresou %s.';

$lang['SQLToolboxWarningTitle'] = 'D�le�it� upozorn�n�!';
$lang['SQLToolboxWarningContent'] = 'Bu�te velmi opatrn� p�i pou��v�n� dotazovac�ho n�stroje. Vykon�v�n�m dotaz� jako ALTER, DELETE, TRUNCATE nebo dal��mi m��ete f�rum nen�vratn� po�kodit! Pou��vejte tento n�stroj pouze pokud opravdu v�te, co d�l�te.';
$lang['SQLToolboxExecuteQuery'] = 'Prov�st dotaz';
$lang['SQLToolboxExecuteQueryInfo'] = 'Zapi�te SQL dotaz. P��padn� v�sledky se uk�� v nov�m textov�m poli.';
$lang['SQLToolboxExecute'] = 'Prov�st';
$lang['SQLToolboxExecutedSuccessfully'] = 'Dotaz byl �sp�n� proveden.';
$lang['SQLToolboxMaintenance'] = '�dr�ba';
$lang['SQLToolboxMaintenanceInfo'] = 'Tyto funkce optimalizuj� (a opravuj�) datab�zov� tabulky. Pro velk� f�ra je doporu�eno prov�d�t optimalizaci �ast�ji.';
$lang['SQLToolboxRepairTables'] = 'Opravit tabulky';
$lang['SQLToolboxOptimizeTables'] = 'Optimalizovat tabulky';
$lang['SQLToolboxMaintenanceNote'] = 'Pozn�mka: tyto funkce neobnov� ��dn� ztracen� data.';

$lang['ModulesInfo'] = 'Moduly umo��uj� roz���it administrativu o r�zn� dal�� vlastnosti. Tyto moduly si m��ete sami napsat nebo si ji� existuj�c� vyhledat pomoc� webov� str�nky UseBB: %s.';
$lang['ModulesLongName'] = 'Dlouh� n�zev';
$lang['ModulesShortName'] = 'Kr�tk� n�zev';
$lang['ModulesCategory'] = 'kategorie';
$lang['ModulesFilename'] = 'jm�no souboru';
$lang['ModulesDeleteNotPermitted'] = 'Nepovoleno';
$lang['ModulesDisabled'] = 'Moduly administrativy jsou zak�z�ny.';
$lang['ModulesNoneAvailable'] = '��dn� moduly nejsou k dispozici.';
$lang['ModulesUpload'] = 'Nahr�t modul';
$lang['ModulesUploadInfo'] = 'Zadejte cestu k modulu, kter� chcete nahr�t.';
$lang['ModulesUploadDuplicateModule'] = 'Modul se jm�nem souboru %s ji� existuje. Chcete-li jej p�esto nahr�t, p�vodn� modul odstra�te.';
$lang['ModulesUploadNoValidModule'] = 'Soubor %s nen� ��dn�m UseBB modulem.';
$lang['ModulesUploadFailed'] = 'Modul %s nen� mo�n� nainstalovat, proto�e nastala chyba p�i kop�rov�n�.';
$lang['ModulesUploadDisabled'] = 'Do adres��e s moduly nen� mo�n� zapisovat. Nen� tak mo�n� nahr�t ��dn� modul. Chcete-li nahr�v�n� povolit, nastavte adres��i %s na serveru p��slu�n� p��stupov� pr�va (mus� b�t mo�n� zapisovat).';
$lang['ModulesConfirmModuleDelete'] = 'Potvrzen� smaz�n� modulu';
$lang['ModulesConfirmModuleDeleteInfo'] = 'Opravdu chcete smazat modul %s (%s)?';

$lang['MembersSearchMember'] = 'Vyhledat u�ivatele';
$lang['MembersSearchMemberInfo'] = 'Zadejte ��st nebo cel� u�ivatelsk� jm�no (resp. zobrazovan� jm�no).';
$lang['MembersSearchMemberExplain'] = 'U�ivatelsk� nebo zobrazovan� jm�no';
$lang['MembersSearchMemberNotFound'] = '��dn� u�ivatel s u�ivatelsk�m nebo zobrazovan�m jm�nem %s nebyl nalezen.';
$lang['MembersSearchMemberList'] = 'Byli nalezeni n�sleduj�c� u�ivatel�';
$lang['MembersEditingMember'] = '�prava u�ivatele %s';
$lang['MembersEditingMemberInfo'] = 'Upravte informace o u�ivateli a n�sledn� formul�� ode�lete. Pol��ka ozna�en� hv�zdi�kou (*) jsou povinn�.';
$lang['MembersEditingMemberUsernameExists'] = 'Jm�no %s ji� pou��v� n�kdo jin�.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'Jm�no %s ji� pou��v� n�kdo jin�.';
$lang['MembersEditingMemberBanned'] = 'Zablokov�n';
$lang['MembersEditingMemberBannedReason'] = 'D�vod zablokov�n�';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Nem��ete zm�nit sv� vlastn� postaven�.';
$lang['MembersEditingMemberCantBanSelf'] = 'Nem��ete zablokovat sv�j vlastn� ��et.';
$lang['MembersEditingComplete'] = 'Profil u�ivatele %s byl �sp�n� upraven.';

$lang['DeleteMembersSearchMember'] = 'Vyhledat u�ivatele';
$lang['DeleteMembersSearchMemberInfo'] = 'Zadejte ��st nebo cel� u�ivatelsk� jm�no (resp. zobrazovan� jm�no).';
$lang['DeleteMembersSearchMemberExplain'] = 'U�ivatelsk� nebo zobrazovan� jm�no';
$lang['DeleteMembersSearchMemberNotFound'] = '��dn� u�ivatel s u�ivatelsk�m nebo zobrazovan�m jm�nem %s nebyl nalezen.';
$lang['DeleteMembersSearchMemberList'] = 'Byli nalezeni n�sleduj�c� u�ivatel�';
$lang['DeleteMembersConfirmMemberDelete'] = 'Potvrzen� smaz�n� u�ivatele';
$lang['DeleteMembersConfirmMemberDeleteContent'] = 'Opravdu chcete nen�vratn� smazat u�ivatele %s?';
$lang['DeleteMembersComplete'] = 'U�ivatel %s byl smaz�n.';

$lang['RegisterMembersExplain'] = 'Zde m��ete p�edregistrovat u�ivatelsk� ��ty. Sta�� jen vyplnit informace pro vytvo�en� ��tu.';
$lang['RegisterMembersComplete'] = 'U�ivatelsk� ��et %s byl zaregistrov�n. U�ivatel se m��e ihned p�ihl�sit.';

$lang['ActivateMembersExplain'] = 'Toto je seznam u�ivatel�, kte�� �ekaj� na aktivaci ��tu. Zde je m��ete schv�lit. Hv�zdi�ka (*) znamen�, �e byl ji� d��ve ��et aktivov�n.';
$lang['ActivateMembersNoMembers'] = 'Seznam je pr�zdn�.';
$lang['ActivateMembersListAdmin'] = 'Aktivace administr�torem';
$lang['ActivateMembersListEmail'] = 'Aktivace e-mailem';
$lang['ActivateMembersListAll'] = 'V�echny';

$lang['PruneForumsStart'] = 'Pro�istit';
$lang['PruneForumsExplain'] = 'Pro�i�t�n�m f�ra m��ete smazat nebo p�esunout star� t�mata.';
$lang['PruneForumsForums'] = 'F�rum na pro�i�t�n�';
$lang['PruneForumsAction'] = 'Akce';
$lang['PruneForumsActionMove'] = 'P�esunout t�mata';
$lang['PruneForumsActionDelete'] = 'Smazat t�mata';
$lang['PruneForumsMoveTo'] = 'P�esunout t�mata do';
$lang['PruneForumsTopicAge'] = 'St��� t�matu';
$lang['PruneForumsTopicAgeField'] = 'Posledn� odpov�� je %s dn� star�.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'Nelze p�esunout t�mata do stejn�ho f�ra, ve kter�m se ji� nach�z�.';
$lang['PruneForumsConfirm'] = 'Potvrzen�';
$lang['PruneForumsConfirmText'] = 'Jsem si v�dom, �e tato akce je nen�vratn�.';
$lang['PruneForumsNotConfirmed'] = 'Nejprve mus�te tuto akci potvrdit.';
$lang['PruneForumsDone'] = 'Hotovo. %d t�mat bylo pro�i�t�no.';
$lang['PruneForumsExcludeStickies'] = 'Vyjma d�le�it�ch t�mat';

?>
