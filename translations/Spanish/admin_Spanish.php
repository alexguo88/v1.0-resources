<?php

/*
	Copyright (C) 2003-2010 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/admin_English.php,v 1.104 2010/08/23 18:33:43 pc_freak Exp $
	
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

	***Traducido al espa�ol por Javier Rivero (jarive) de USEBB HISPANO en http://www.usebbhispano.co.cc
*/

//
// Die when called directly in browser
//
if ( !defined('INCLUDED') )
	exit();

$lang['AdminLogin'] = 'Admin Login';
$lang['AdminPasswordExplain'] = 'Por razones de seguridad, debe introducir la contrase�a de su cuenta para iniciar sesi�n en la ACP.';

$lang['RunningBadACPModule'] = 'UseBB no puede ejecutar este m�dulo porque uno o m�s aspectos faltan (no $usebb_module objeto encontrado y/o desaparecido run_module() m�todo de objeto).';

$lang['Category-main'] = 'General';
$lang['Category-forums'] = 'Foros';
$lang['Category-various'] = 'Varios';
$lang['Category-members'] = 'Miembros';
$lang['Category-pruning'] = 'Depurar';
$lang['Category-security'] = 'Seguridad';
$lang['Item-index'] = 'ACP Inicio';
$lang['Item-version'] = 'Comprobar Versi�n';
$lang['Item-config'] = 'Configuraci�n General';
$lang['Item-categories'] = 'Administrar Categorias';
$lang['Item-forums'] = 'Administrar Foros';
$lang['Item-iplookup'] = 'Buscar Direcci�n IP';
$lang['Item-sqltoolbox'] = 'SQL Caja de Herramientas';
$lang['Item-modules'] = 'ACP Modulos';
$lang['Item-members'] = 'Editar Miembros';
$lang['Item-delete_members'] = 'Borrar Miembros';
$lang['Item-register_members'] = 'Registrar Miembros';
$lang['Item-activate_members'] = 'Activar Miembros';
$lang['Item-prune_forums'] = 'Depurar Foros';
$lang['Item-prune_members'] = 'Depurar Miembros';
$lang['Item-dnsbl'] = 'DNSBL Expulsiones';
$lang['Item-badwords'] = 'Filtro palabras prohibidas';
$lang['Item-mass_email'] = 'Correo Masivo';
$lang['Item-bans'] = 'Administrar Expulsiones';

$lang['IndexWelcome'] = 'Bienvenido al Panel de Administraci�n de su foro UseBB. Desde aqu� usted puede controlar todos los aspectos de su comunidad, el establecimiento de la configuraci�n, foros de control, miembros, etc.';
$lang['IndexSystemInfo'] = 'Informaci�n del Sistema';
$lang['IndexUseBBVersion'] = 'UseBB version';
$lang['IndexPHPVersion'] = 'PHP version';
$lang['IndexSQLServer'] = 'SQL contralador del servidor';
$lang['IndexHTTPServer'] = 'HTTP servidor';
$lang['IndexOS'] = 'Sistema Operativo';
$lang['IndexServerLoad'] = 'Valores de Carga del Servidor';
$lang['IndexLinks'] = 'Enlaces';
$lang['IndexUnactiveMembers'] = 'Miembros Inactivos';
$lang['IndexNoUnactiveMembers'] = 'No hay miembros en espera de la activaci�n del admin.';
$lang['IndexOneUnactiveMember'] = 'Hay un miembro esperando la activaci�n del admin.';
$lang['IndexMoreUnactiveMembers'] = 'Hay %d miembros esperando la activaci�n del admin.';
$lang['IndexWarning'] = 'Atenci�n!';
$lang['IndexUnwritableConfig'] = 'Por el momento, %s no es escribible por PHP. Esto no es lo recomendado. Para hacerlo escribible, cambia los permisos del archivo con un cliente FTP o realiza una operaci�n de chmod (0777) en �l. Contacta con tu host en caso de problemas.';
$lang['IndexMultibyteUsage'] = 'Tenga en cuenta que actualmente est� usando una traducci�n escrita en un conjunto de caracteres multibyte (%s). Estas traducciones y juegos de caracteres no cuentan con apoyo oficial en UseBB 1.';

$lang['VersionFailed'] = 'El foro no pudo determinar la versi�n m�s reciente. Por favor, compruebe con frecuencia %s que dispone de la �ltima versi�n.';
$lang['VersionLatestVersionTitle'] = 'Esta es la �ltima versi�n';
$lang['VersionLatestVersion'] = 'El foro es powered by UseBB %s que es la �ltima versi�n estable..';
$lang['VersionNeedUpdateTitle'] = 'Nueva versi�n disponible!';
$lang['VersionNeedUpdate'] = 'El foro usa UseBB %s necesitas actualizar a la versi�n %s para permanecer seguro y libre de bugs! Visita %s para descargar la �ltima versi�n.';
$lang['VersionBewareDevVersionsTitle'] = 'Versi�n de desarrollo encontrada';
$lang['VersionBewareDevVersions'] = 'Este foro usa %s sin embargo %s sigue siendo la �ltima versi�n estable. Tenga cuidado con los problemas e incompatibilidades que puedan existir con las versiones de desarrollo.';

$lang['ConfigInfo'] = 'En esta p�gina usted puede editar todos los ajustes de su foro UseBB. Tenga cuidado de alterar la configuraci�n de la base de datos. Los campos marcados con un asterisco (*) son obligatorios.';
$lang['ConfigSet'] = 'La nueva configuraci�n se ha establecido. Ser� visible al cargar una p�gina nueva.';
$lang['ConfigMissingFields'] = 'Algunos de los campos estan incompletos o incorrectos (ej. texto donde se esperaba un n�mero). Por favor revisa los siguientes campos:';
$lang['ConfigBoard-type'] = 'Tipo';
$lang['ConfigBoard-server'] = 'Servidor';
$lang['ConfigBoard-username'] = 'Usuario';
$lang['ConfigBoard-passwd'] = 'Contrase�a';
$lang['ConfigBoard-dbname'] = 'Nombre de la Base de datos';
$lang['ConfigBoard-prefix'] = 'Prefijo de las tablas';
$lang['ConfigBoardSection-general'] = 'Tablero General';
$lang['ConfigBoardSection-cookies'] = 'Cookies';
$lang['ConfigBoardSection-cookies-info'] = 'Usted puede dejarlo en blanco para la detecci�n automatica.';
$lang['ConfigBoardSection-sessions'] = 'Sesiones';
$lang['ConfigBoardSection-page_counts'] = 'Contador de P�ginas';
$lang['ConfigBoardSection-date_time'] = 'Fechas &amp; Horas';
$lang['ConfigBoardSection-date_time-info'] = 'S�lo se aplica a los invitados y nuevas cuentas.';
$lang['ConfigBoardSection-database'] = 'Configuraci�n de la Base de Datos';
$lang['ConfigBoardSection-database-info'] = 'S�lo cambie cuando est� seguro de la configuraci�n para trabajar de inmediato.';
$lang['ConfigBoardSection-advanced'] = 'Configuraci�n avanzada';
$lang['ConfigBoardSection-email'] = 'Correo Electronico';
$lang['ConfigBoardSection-additional'] = 'Caracter�sticas adicionales';
$lang['ConfigBoardSection-user_rights'] = 'Permisos de usuario';
$lang['ConfigBoardSection-min_levels'] = 'Niveles m�nimos de acceso';
$lang['ConfigBoardSection-min_levels-info'] = 'Estos son los niveles m�nimos necesarios para acceder a cada elemento.';
$lang['ConfigBoardSection-layout'] = 'Configuraci�n de dise�o';
$lang['ConfigBoardSection-security'] = 'Seguridad';
$lang['ConfigBoard-admin_email'] = 'Correo Electronico del admin';
$lang['ConfigBoard-board_descr'] = 'Descripci�n del foro';
$lang['ConfigBoard-board_keywords'] = 'Palabras Clave del foro';
$lang['ConfigBoard-board_keywords-info'] = 'Separadas por comas.';
$lang['ConfigBoard-board_name'] = 'Nombre del Foro';
$lang['ConfigBoard-date_format'] = 'Formato de Fecha';
$lang['ConfigBoard-date_format-info'] = 'Igual que la sintaxis PHP\'s date().';
$lang['ConfigBoard-language'] = 'Idioma por Defecto';
$lang['ConfigBoard-language-info'] = 'S�lo se aplica a los invitados y nuevas cuentas.';
$lang['ConfigBoard-session_name'] = 'Nombre de sesi�n';
$lang['ConfigBoard-session_name-info'] = 'S�lo caracteres alfanum�ricos, sin espacios. Debe contener al menos una letra.';
$lang['ConfigBoard-template'] = 'Plantilla por Defecto';
$lang['ConfigBoard-template-info'] = 'S�lo se aplica a los invitados y nuevas cuentas.';
$lang['ConfigBoard-active_topics_count'] = 'Temas activos se contar�n';
$lang['ConfigBoard-avatars_force_height'] = 'Max avatar altura (px)';
$lang['ConfigBoard-avatars_force_height-info'] = 'Cero para ilimitado.';
$lang['ConfigBoard-avatars_force_width'] = 'Max avatar ancho (px)';
$lang['ConfigBoard-avatars_force_width-info'] = 'Cero para ilimitado.';
$lang['ConfigBoard-debug'] = 'Modo de depuraci�n';
$lang['ConfigBoard-email_view_level'] = 'Formato para ver Correo Electronico';
$lang['ConfigBoard-flood_interval'] = 'Intervalo entre envios (segundos)';
$lang['ConfigBoard-members_per_page'] = 'Miembros por p�gina';
$lang['ConfigBoard-online_min_updated'] = 'Usuarios en l�nea durante los �ltimos minutos';
$lang['ConfigBoard-output_compression'] = 'Salida de compresi�n';
$lang['ConfigBoard-passwd_min_length'] = 'Contrase�a longitud m�nima';
$lang['ConfigBoard-posts_per_page'] = 'Mensajes por p�gina';
$lang['ConfigBoard-rss_items_count'] = 'RSS elementos se contar�n';
$lang['ConfigBoard-search_limit_results'] = 'Limitar los resultados de b�squeda a x elementos';
$lang['ConfigBoard-search_nonindex_words_min_length'] = 'Buscar palabra clave longitud m�nima';
$lang['ConfigBoard-session_max_lifetime'] = 'M�xima duraci�n de per�odo de sesiones (minutos)';
$lang['ConfigBoard-show_edited_message_timeout'] = 'Editar mensaje de tiempo de espera';
$lang['ConfigBoard-show_edited_message_timeout-info'] = 'Cuando el mensaje se edita en estos segundos despu�s de publicarlo, la nota enviada aparece oculta..';
$lang['ConfigBoard-topicreview_posts'] = 'Revisar temas escritos se contar�n';
$lang['ConfigBoard-topics_per_page'] = 'Temas por p�gina';
$lang['ConfigBoard-view_active_topics_min_level'] = 'Temas activos';
$lang['ConfigBoard-view_detailed_online_list_min_level'] = 'Lista En Linea detallada';
$lang['ConfigBoard-view_forum_stats_box_min_level'] = 'Caja de Estadisticas';
$lang['ConfigBoard-view_hidden_email_addresses_min_level'] = 'Nivel minimo para ver las direcciones de correo ocultas';
$lang['ConfigBoard-view_memberlist_min_level'] = 'Lista de miembros';
$lang['ConfigBoard-view_search_min_level'] = 'Motor de Busqueda';
$lang['ConfigBoard-view_stafflist_min_level'] = 'Staff list';
$lang['ConfigBoard-view_stats_min_level'] = 'P�gina de estadisticas';
$lang['ConfigBoard-view_contactadmin_min_level'] = 'Enlace para contactar con el admin';
$lang['ConfigBoard-allow_multi_sess'] = 'Permitir multiples sesiones por IP';
$lang['ConfigBoard-board_closed'] = 'Cerrar la Comunidad';
$lang['ConfigBoard-board_closed-info'] = 'Administradores a�n podr�n acceder.';
$lang['ConfigBoard-cookie_secure'] = 'Cookies Seguras';
$lang['ConfigBoard-cookie_secure-info'] = 'Cookies encriptadas (S�lo HTTPS)';
$lang['ConfigBoard-cookie_httponly'] = 'Activar cookies s�lo HTTP';
$lang['ConfigBoard-cookie_httponly-info'] = 'Agrega una bandera a las cookies s�lo HTTP , haci�ndolas m�s seguras contra XSS.';
$lang['ConfigBoard-dst'] = 'Horario de Verano';
$lang['ConfigBoard-enable_contactadmin'] = 'Activar enlace Contactar Administrador';
$lang['ConfigBoard-enable_detailed_online_list'] = 'Activar lista En Linea detallada';
$lang['ConfigBoard-enable_forum_stats_box'] = 'Activar caja de estadisticas del foro';
$lang['ConfigBoard-enable_memberlist'] = 'Activar lista de miembros';
$lang['ConfigBoard-enable_quickreply'] = 'Activar respuesta r�pida';
$lang['ConfigBoard-enable_rss'] = 'Activar RSS feed general (temas activos)';
$lang['ConfigBoard-enable_rss_per_forum'] = 'Activar RSS feeds por foro';
$lang['ConfigBoard-enable_rss_per_topic'] = 'Activar RSS feeds por tema';
$lang['ConfigBoard-enable_stafflist'] = 'Activar staff list';
$lang['ConfigBoard-enable_stats'] = 'Activar pagina de estadisticas';
$lang['ConfigBoard-friendly_urls'] = 'Activar URL amigables';
$lang['ConfigBoard-friendly_urls-info'] = 'Requiere Apache y mod_rewrite. Se desactivar�n URL sesiones ID.';
$lang['ConfigBoard-guests_can_access_board'] = 'Invitados pueden acceder a la comunidad';
$lang['ConfigBoard-guests_can_see_contact_info'] = 'Invitados pueden ver informaci�n de contacto en perfiles';
$lang['ConfigBoard-guests_can_view_profiles'] = 'Invitados pueden ver perfiles de los miembros';
$lang['ConfigBoard-hide_avatars'] = 'Ocultar todos los avatares';
$lang['ConfigBoard-hide_signatures'] = 'Ocultar todas las firmas';
$lang['ConfigBoard-hide_userinfo'] = 'Ocultar informaci�n de usuario';
$lang['ConfigBoard-rel_nofollow'] = 'Activar Google\'s nofollow';
$lang['ConfigBoard-rel_nofollow-info'] = 'Esto har� a Google ignorar todos los enlaces BBCode.';
$lang['ConfigBoard-return_to_topic_after_posting'] = 'Volver al tema despues de postear';
$lang['ConfigBoard-sig_allow_bbcode'] = 'Activar BBCode en firmas';
$lang['ConfigBoard-sig_allow_smilies'] = 'Activar smilies en firmas';
$lang['ConfigBoard-sig_max_length'] = 'Max longitud de la firma';
$lang['ConfigBoard-single_forum_mode'] = 'Modo Unico foro';
$lang['ConfigBoard-single_forum_mode-info'] = 'Muestra solo los foros visibles en el Indice del foro.';
$lang['ConfigBoard-target_blank'] = 'Enlaces BBCode se abren en nueva ventana';
$lang['ConfigBoard-activation_mode'] = 'Modo Activaci�n';
$lang['ConfigBoard-activation_mode0'] = 'No activaci�n';
$lang['ConfigBoard-activation_mode1'] = 'E-mail activaci�n';
$lang['ConfigBoard-activation_mode2'] = 'Admin activaci�n';
$lang['ConfigBoard-board_closed_reason'] = 'Foro cerrado raz�n';
$lang['ConfigBoard-board_url'] = 'Foro URL';
$lang['ConfigBoard-board_url-info'] = 'Completa la URL incluyendo barra final; en blanco para autodetectar.';
$lang['ConfigBoard-cookie_domain'] = 'Cookie dominio';
$lang['ConfigBoard-cookie_path'] = 'Cookie ruta';
$lang['ConfigBoard-session_save_path'] = 'Ruta de guardado de sesiones';
$lang['ConfigBoard-session_save_path-info'] = 'Personalizar ruta de guardado de sesiones; solo nombres absolutos de directorio.';
$lang['ConfigBoard-exclude_forums_active_topics'] = 'Excluir foro de los temas activos';
$lang['ConfigBoard-exclude_forums_rss'] = 'Excluir foros del RSS feed general';
$lang['ConfigBoard-exclude_forums_stats'] = 'Excluir foros de la pagina de estadisticas';
$lang['ConfigBoard-timezone'] = 'Zona Horaria';
$lang['ConfigBoard-debug0'] = 'Desactivado';
$lang['ConfigBoard-debug1'] = 'Simple (tiempo de an�lisis y recuentos)';
$lang['ConfigBoard-debug2'] = 'Extendido (simple + SQL consultas)';
$lang['ConfigBoard-email_view_level0'] = 'Ocultar todos los e-mail';
$lang['ConfigBoard-email_view_level1'] = 'Activar formulario e-mail';
$lang['ConfigBoard-email_view_level2'] = 'Mostrar prueba de spam';
$lang['ConfigBoard-email_view_level3'] = 'Sin formato';
$lang['ConfigBoard-output_compression0'] = 'Disabled';
$lang['ConfigBoard-output_compression1'] = 'Compresi�n HTML';
$lang['ConfigBoard-output_compression2'] = 'Activar Gzip';
$lang['ConfigBoard-output_compression3'] = 'Compresi�n HTML + Gzip';
$lang['ConfigBoard-level0'] = 'Invitados';
$lang['ConfigBoard-level1'] = 'Miembros';
$lang['ConfigBoard-level2'] = 'Moderadores';
$lang['ConfigBoard-level3'] = 'Administradores';
$lang['ConfigBoard-enable_acp_modules'] = 'Activar M�dulos ACP';
$lang['ConfigBoard-disable_registrations'] = 'Desactivar registros de usuarios';
$lang['ConfigBoard-disable_registrations-info'] = 'Los usuarios todav�a pueden registrarse a trav�s de la ACP.';
$lang['ConfigBoard-disable_registrations_reason'] = 'Raz�n para desactivar los registros de usuarios';
$lang['ConfigBoard-allow_duplicate_emails'] = 'Permitir correos electronicos duplicados';
$lang['ConfigBoard-enable_badwords_filter'] = 'Activar filtro de palabras';
$lang['ConfigBoard-enable_ip_bans'] = 'Activar expulsiones por IP';
$lang['ConfigBoard-show_raw_entities_in_code'] = 'Entidades sin formato en [code] etiquetas.';
$lang['ConfigBoard-show_raw_entities_in_code-info'] = 'Mostrar sin formato el c�digo en lugar de su representaci�n HTML.';
$lang['ConfigBoard-username_min_length'] = 'Longitud minima nombre de usuario';
$lang['ConfigBoard-username_max_length'] = 'Longitud m�xima nombre de usuario';
$lang['ConfigBoard-show_never_activated_members'] = 'Mostrar los miembros nunca activados';
$lang['ConfigBoard-show_never_activated_members-info'] = 'Mostrar estos en el cuadro de estad�sticas y la lista de miembros.';
$lang['ConfigBoard-enable_registration_log'] = 'Activar registro de inscripci�n';
$lang['ConfigBoard-enable_registration_log-info'] = 'Escribe un registro de inscripci�n en un archivo de texto.';
$lang['ConfigBoard-registration_log_file'] = 'Archivo de Registro';
$lang['ConfigBoard-registration_log_file-info'] = 'En relaci�n al directorio del foro, o ruta absoluta.';
$lang['ConfigBoard-enable_email_dns_check'] = 'Activar comprobacion de e-mail por direcci�n DNS';
$lang['ConfigBoard-enable_email_dns_check-info'] = 'Validar mediante la b�squeda de registros MX. Esto puede no funcionar en todos los dominios v�lidos.';
$lang['ConfigBoard-edit_post_timeout'] = 'Editar tiempo de espera al publicar';
$lang['ConfigBoard-edit_post_timeout-info'] = 'Un usuario s�lo puede editar sus mensajes dentro de x segundos despu�s del env�o.';
$lang['ConfigBoard-disable_xhtml_header'] = 'Desactivar cabeceras XHTML para plantillas XHTML.';
$lang['ConfigBoard-disable_xhtml_header-info'] = 'El contenido tipo XHMTL solo se puede utilizar si est� 100% bien formado. Esto se encuentra siempre desactivado para navegadores no-XHTML.';
$lang['ConfigBoard-email_reply-to_header'] = 'Utilice cabecera Responder a';
$lang['ConfigBoard-email_reply-to_header-info'] = 'Use (Responder a) en lugar de (De) en la direcci�n de correo electronico del usuario (requerido en algunos host).';
$lang['ConfigBoard-mass_email_msg_recipients'] = 'Contador de receptores de correo electronico masivo';
$lang['ConfigBoard-mass_email_msg_recipients-info'] = 'Varios mensajes se enviaran hasta que todos los receptores lo tengan enviado.';
$lang['ConfigBoard-sendmail_sender_parameter'] = 'Activar parametro de sendmail -f.';
$lang['ConfigBoard-sendmail_sender_parameter-info'] = 'Esto puede romper la funcion de correo electr�nico en algunas hosts.';
$lang['ConfigBoard-antispam_question_mode'] = 'Modo pregunta Anti-Spam';
$lang['ConfigBoard-antispam_question_mode-info'] = 'Plantea una pregunta antes de darle a los invitados acceso a registrarse, publicar nuevo tema y formularios de respuesta.';
$lang['ConfigBoard-antispam_question_mode0'] = 'Desactivado';
$lang['ConfigBoard-antispam_question_mode1'] = 'Pregunta de matematicas al azar';
$lang['ConfigBoard-antispam_question_mode2'] = 'Elegir pregunta al azar personalizada';
$lang['ConfigBoard-antispam_question_questions'] = 'Personalizar preguntas Anti-spam';
$lang['ConfigBoard-antispam_question_questions-info'] = 'Preguntas en formato de &quot;pregunta|respuesta&quot; (sin las comillas), separadas por barra. La respuesta distingue entre mayuscula y minuscula.';
$lang['ConfigBoard-enable_error_log'] = 'Activar resgitro de error';
$lang['ConfigBoard-enable_error_log-info'] = 'Registros de errores utilizando el mecanismo de registro de PHP. Mira la opci�n de configuraci�n del PHP error_log.';
$lang['CategoriesInfo'] = 'Esta secci�n le da el control sobre las distintas categor�as que existen en su foro.';
$lang['CategoriesAddNewCat'] = 'A�adir nueva categor�a';
$lang['CategoriesAdjustSortIDs'] = 'Ajustar el orden de ID';
$lang['CategoriesSortAutomatically'] = 'Ordenar categor�as automaticamente';
$lang['CategoriesNoCatsExist'] = 'ESte foro no contiene ninguna categor�a aun.';
$lang['CategoriesCatName'] = 'Nombre de Categor�a';
$lang['CategoriesSortID'] = 'Ordenar ID';
$lang['CategoriesMissingFields'] = 'Algunos campos obligatorios faltan. Por favor, rellene correctamente.';
$lang['CategoriesSortChangesApplied'] = 'Tus cambios ordenando por ID han sido aplicados.';
$lang['CategoriesConfirmCatDelete'] = 'Confirma eliminaci�n de categor�a';
$lang['CategoriesConfirmCatDeleteContent'] = '�Estas seguro que quieres eliminar la categor�a %s? Esta acci�n es irreversible!';
$lang['CategoriesMoveContents'] = 'Mover los contenidos de la categor�a a %s';
$lang['CategoriesDeleteContents'] = 'Eliminar los contenidos';
$lang['CategoriesEditingCat'] = 'Editando categor�a %s';

$lang['ForumsInfo'] = 'Esta secci�n le da el control sobre los diversos foros que existen en su comunidad.';
$lang['ForumsAddNewForum'] = 'A�adir un nuevo foro';
$lang['ForumsAdjustSortIDs'] = 'Ajustar el orden de ID';
$lang['ForumsSortAutomatically'] = 'Ordenar foros automaticamente';
$lang['ForumsNoForumsExist'] = 'La comunidad no contiene foros todavia.';
$lang['ForumsForumName'] = 'Nombre del foro';
$lang['ForumsCatName'] = 'Categor�a padre';
$lang['ForumsDescription'] = 'Descripci�n';
$lang['ForumsDescriptionExplain'] = 'Este es un campo habilitado HTML. Si desea utilizar caracteres especiales, aseg�rese de usar sus respectivas entidades HTML (por ejemplo &amp;amp; en luegar de &amp;).';
$lang['ForumsStatus'] = 'Estado';
$lang['ForumsStatusOpen'] = 'Abierto';
$lang['ForumsAutoLock'] = 'Auto bloqueo';
$lang['ForumsAutoLockXReplies'] = 'Bloquear despues de %s respuestas.';
$lang['ForumsIncreasePostCount'] = 'Aumentar el contador de mensajes de usuario';
$lang['ForumsModerators'] = 'Moderadores';
$lang['ForumsModeratorsExplain'] = 'Usuarios (no se muestran nombres), separados por comas. Distingue mayuscula y minuscula.';
$lang['ForumsModeratorsUnknown'] = 'Miembro(s) desconocido: %s.';
$lang['ForumsHideModsList'] = 'Ocultar lista de moderadores';
$lang['ForumsSortID'] = 'Ordenar por ID';
$lang['ForumsMissingFields'] = 'Algunos campos obligatorios faltan. Por favor, rellene correctamente.';
$lang['ForumsSortChangesApplied'] = 'Tus cambios ordenando por ID han sido aplicados.';
$lang['ForumsConfirmForumDelete'] = 'Confirma eliminaci�n del foro';
$lang['ForumsConfirmForumDeleteContent'] = '�Estas seguro que quieres eliminar el foro %s? Esta acci�n es irreversible!';
$lang['ForumsMoveContents'] = 'Mover los contenidos del foro a %s';
$lang['ForumsMoveModerators'] = 'Cuando el contenido es movido, tambi�n se mueven los moderadores.';
$lang['ForumsDeleteContents'] = 'Eliminar los contenidos';
$lang['ForumsEditingForum'] = 'Editando foro %s';
$lang['ForumsGeneral'] = 'Ajustes generales';
$lang['ForumsAuth'] = 'Ajustes de autorizaci�n';
$lang['ForumsAuthNote'] = 'Los valores no se heredan entre s�!';
$lang['Forums-level0'] = 'Invitados';
$lang['Forums-level1'] = 'Miembros';
$lang['Forums-level2'] = 'Moderadores';
$lang['Forums-level3'] = 'Administradores';
$lang['Forums-auth0'] = 'Ver foro';
$lang['Forums-auth1'] = 'Leer temas';
$lang['Forums-auth2'] = 'Publicar nuevos temas';
$lang['Forums-auth3'] = 'Responder a temas';
$lang['Forums-auth4'] = 'Editar otros mensajes';
$lang['Forums-auth5'] = 'Mover temas';
$lang['Forums-auth6'] = 'Eliminar temas y mensajes';
$lang['Forums-auth7'] = 'Bloquear temas';
$lang['Forums-auth8'] = 'Pegar temas';
$lang['Forums-auth9'] = 'Publicar en HTML (peligroso)';

$lang['IPLookupSearchHostname'] = 'Buscar nombre de host';
$lang['IPLookupSearchUsernames'] = 'Buscar usuario(s)';
$lang['IPLookupHostname'] = 'Nombre de Host';
$lang['IPLookupHostnameNotFound'] = 'Nombre de host encontrado no corresponde.';
$lang['IPLookupUsernames'] = 'Usuarios';
$lang['IPLookupUsernamesNotFound'] = 'Nombres de usuario encontrados no corresponden.';

$lang['SQLToolboxWarningTitle'] = 'Aviso Importante!';
$lang['SQLToolboxWarningContent'] = 'Tenga mucho cuidado utilizando la herramienta de consulta de formato. Ejecutando ALTER, DELETE, TRUNCATE u otros tipo de consultas puede da�ar irreversiblemente su foro! Solo use esto cuando sepa lo que est� haciendo.';
$lang['SQLToolboxExecuteQuery'] = 'Ejecutar consulta';
$lang['SQLToolboxExecuteQueryInfo'] = 'Escriba una consulta SQL para ejecutar. Finalmente, los resultados se mostrar�n en un segundo cuadro de texto.';
$lang['SQLToolboxExecute'] = 'Ejecutar';
$lang['SQLToolboxExecutedSuccessfully'] = 'Consulta ejecutada exitosamente.';
$lang['SQLToolboxMaintenance'] = 'Mantenimiento';
$lang['SQLToolboxMaintenanceInfo'] = 'Estas funciones optimizan (y reparan) las tablas SQL usadas por UseBB. Optimizar las tablas con la suficiente frecuencia se recomienda para las grandes comunidades.';
$lang['SQLToolboxRepairTables'] = 'Reparar tablas';
$lang['SQLToolboxOptimizeTables'] = 'Optimizar tablas';
$lang['SQLToolboxMaintenanceNote'] = 'Nota: esto no restaura cualquier p�rdida de datos en la base de datos.';

$lang['ModulesInfo'] = 'Los modulos ACP le ayudan a extender el ACP con sus propias caracter�sticas o funciones realizadas por otros programadores. Los m�dulos se pueden encontrar en la p�gina web UseBB: %s.';
$lang['ModulesLongName'] = 'Nombre largo';
$lang['ModulesShortName'] = 'Nombre corto';
$lang['ModulesCategory'] = 'Categoria';
$lang['ModulesFilename'] = 'Nombre de archivo';
$lang['ModulesDeleteNotPermitted'] = 'No permitido';
$lang['ModulesDisabled'] = 'Los m�dulos ACP se han desactivado en la configuraci�n de los foros.';
$lang['ModulesNoneAvailable'] = 'No hay m�dulos disponibles en este momento.';
$lang['ModulesUpload'] = 'Cargar m�dulo';
$lang['ModulesUploadInfo'] = 'Entre un nombre de archivo local de un m�dulo ACP de UseBB para cargarlo.';
$lang['ModulesUploadDuplicateModule'] = 'Un m�dulo bajo el nombre de archivo %s ya existe. Por favor remuevalo primero.';
$lang['ModulesUploadNoValidModule'] = 'El archivo %s no es un m�dulo UseBB v�lido.';
$lang['ModulesUploadFailed'] = 'No se pudo instalar el m�dulo %s. Copia fallida.';
$lang['ModulesUploadDisabled'] = 'El directorio de m�dulos no es escribible. La carga ha sido desactivada. Para activar, haga el directorio %s escribible por el servidor (pruebe chmod 777).';
$lang['ModulesConfirmModuleDelete'] = 'Confirme eliminaci�n de m�dulo';
$lang['ModulesConfirmModuleDeleteInfo'] = '�Est� seguro que quiere eliminar el m�dulo %s (%s)?';

$lang['MembersSearchMember'] = 'Buscar miembro';
$lang['MembersSearchMemberInfo'] = 'Introduzca un (o parte de uno) usuario o el nombre a mostrar para editar.';
$lang['MembersSearchMemberExplain'] = 'Usuario o nombre a mostar';
$lang['MembersSearchMemberNotFound'] = 'No hay miembros con ese nombre de usuario o nombre a mostrar %s encontrados.';
$lang['MembersSearchMemberList'] = 'Se encontraron los siguientes nombres';
$lang['MembersEditingMember'] = 'Editando miembro %s';
$lang['MembersEditingMemberInfo'] = 'Actualiza la informaci�n del usuario y env�a el formulario. Los campos marcados con un asterisco (*) son obligatorios.';
$lang['MembersEditingMemberUsernameExists'] = 'El usuario %s ya existe como un nombre de usuario o nombre a mostrar.';
$lang['MembersEditingMemberDisplayedNameExists'] = 'El nombre a mostrar %s ya existe como un nombre de usuario o nombre a mostrar.';
$lang['MembersEditingMemberBanned'] = 'Expulsado';
$lang['MembersEditingMemberBannedReason'] = 'Raz�n por expulsi�n';
$lang['MembersEditingMemberCantChangeOwnLevel'] = 'Usted no puede cambiar su propio nivel.';
$lang['MembersEditingMemberCantBanSelf'] = 'No puede expulsarse usted mismo.';
$lang['MembersEditingComplete'] = 'El perfil del miembro %s se ha editado exitosamente.';
$lang['MembersEditingLevelModInfo'] = 'Para hacer moderador a alguien, edite un foro y a�ada el nombre del miembro en el campo de entrada de moderador.';

$lang['DeleteMembersSearchMember'] = 'Buscar miembro';
$lang['DeleteMembersSearchMemberInfo'] = 'Introduzca un (o parte de uno) usuario o nombre a mostrar para eliminar.';
$lang['DeleteMembersSearchMemberExplain'] = 'Usuario o nombre a mostrar';
$lang['DeleteMembersSearchMemberNotFound'] = 'No hay miembros con ese nombre de usuario o nombre a mostrar %s encontrados.';
$lang['DeleteMembersSearchMemberList'] = 'Se encontraron los siguientes nombres';
$lang['DeleteMembersConfirmMemberDelete'] = 'Confirma eliminaci�n del miembro';
$lang['DeleteMembersConfirmMemberDeleteContent'] = '�Est� seguro que desea eliminar al miembro %s? Esto es irreversible!';
$lang['DeleteMembersComplete'] = 'Eliminaci�n del miembro %s completado.';
$lang['DeleteMembersDeletePosts'] = 'Tambi�n se eliminan definitivamente los mensajes del usuario (�til para spam).';
$lang['DeleteMembersBanEmail'] = 'Expulsar direcci�n de correo';

$lang['RegisterMembersExplain'] = 'Aqu� usted puede pre-registrar cuentas de usuario. Rellena los siguientes datos para crear una cuenta.';
$lang['RegisterMembersComplete'] = 'Registro del usuario %s completado. El usuario puede acceder de inmediato.';

$lang['ActivateMembersExplain'] = 'Esta es una lista de los miembros no activados en su foro. Aqui puede aprobar las cuentas manualmente. Un asterisco (*) significa que la cuenta de usuario ha sido activada antes.';
$lang['ActivateMembersNoMembers'] = 'No hay miembros a listar.';
$lang['ActivateMembersListAdmin'] = 'Aprobar Admin';
$lang['ActivateMembersListEmail'] = 'Aprobar Email';
$lang['ActivateMembersListAll'] = 'Todo';

$lang['PruneForumsStart'] = 'Iniciar depurado';
$lang['PruneForumsExplain'] = 'Depurando foros, usted puede eliminar o mover temas antiguos y dejar su foro limpio.';
$lang['PruneForumsForums'] = 'Foros a depurar';
$lang['PruneForumsAction'] = 'Acci�n';
$lang['PruneForumsActionLock'] = 'Bloquear';
$lang['PruneForumsActionMove'] = 'Mover';
$lang['PruneForumsActionDelete'] = 'Eliminar';
$lang['PruneForumsMoveTo'] = 'Mover temas a';
$lang['PruneForumsTopicAge'] = 'Edad del tema';
$lang['PruneForumsTopicAgeField'] = 'Ultima respuesta hace %s d�as.';
$lang['PruneForumsMoveToForumSelectedForPruning'] = 'El &quot;movido to&quot; foro no se puede seleccionar para depurar.';
$lang['PruneForumsConfirm'] = 'Confirmar';
$lang['PruneForumsConfirmText'] = 'Yo entiendo que esta acci�n es irreversible.';
$lang['PruneForumsNotConfirmed'] = 'Usted necesita confirmar esta acci�n primero.';
$lang['PruneForumsDone'] = 'Depurado completo. %d temas depurados.';
$lang['PruneForumsExcludeStickies'] = 'Excluir temas pegados';

$lang['PruneMembersExplain'] = 'Depurando miembros usted puede limpiar la base del foro de usuarios mediante la eliminaci�n de cuentas de usuario sin activar o inactivo.';
$lang['PruneMembersTypeNeverActivated'] = 'Nunca miembros activados';
$lang['PruneMembersRegisteredDaysAgo'] = 'Registrado por lo menos hace %s d�as.';
$lang['PruneMembersTypeNeverPosted'] = 'Miembros que nunca han publicado';
$lang['PruneMembersTypeInactive'] = 'Miembros inactivos';
$lang['PruneMembersLastLoggedIn'] = 'Se conect� la �ltima vez por lo menos hace %s d�as.';
$lang['PruneMembersExclude'] = 'Excluir';
$lang['PruneMembersPreview'] = 'Vista previa de Miembros';
$lang['PruneMembersPreviewList'] = 'Con los ajustes enviados, %d miembros han sido depurados.';
$lang['PruneMembersUsesCurrentSettings'] = 'Alerta! %s usa la configuraci�n actual que ha enviado, no la �ltima vista previa de la lista de miembros.';
$lang['PruneMembersConfirmText'] = 'Yo entiendo que esta acci�n es irreversible.';
$lang['PruneMembersStart'] = 'Empezar depurado';
$lang['PruneMembersNotConfirmed'] = 'Tu necesitas confirmar esta acci�n primero.';
$lang['PruneMembersDone'] = 'Depuraci�n completa. %d miembros depurados.';

$lang['DNSBLIPBansDisabled'] = 'Expulsi�n por IP desactivado';
$lang['DNSBLIPBansDisabledInfo'] = 'Para que la expulsi�n por DNSBL funcione, expulsi�n por IP tiene que estar activado.';
$lang['DNSBLGeneralInfo'] = 'Abrir proxies a menudo se utiliza para enviar spam o mensajes abusivos. Usando la protecci�n del sistema UseBB, la mayor�a de estos proxies pueden ser detectados y expulsados automaticamente. Aqu� una lista negra se consultan para obtener informaci�n acerca de la direcci�n IP del visitante.';
$lang['DNSBLEnableOpenDNSBLBan'] = 'Activar expulsi�n por DNSBL';
$lang['DNSBLServers'] = 'DNS Lista negra (DNSBL) servidores';
$lang['DNSBLServersInfo'] = 'Un servidor DNSBL por linea. Nota utilizando muchas de estas listas negras juntas puede provocar una ralentizaci�n en la creaci�n de una nueva sesi�n en su foro.';
$lang['DNSBLMinPositiveHits'] = 'Por lo menos %s positivos son obligados a expulsar una direcci�n IP.';
$lang['DNSBLRecheckMinutes'] = 'Vuelva a permitir revisar todas las direcciones IP cada %s minutos (0 para desactivar).';
$lang['DNSBLSettingsSaved'] = 'Ajustes para expulsiones por DNSBL guardadas.';
$lang['DNSBLWhitelist'] = 'Lista Blanca';
$lang['DNSBLWhitelistInfo'] = 'Una direcci�n IP o nombre de host por linea (* y ? se pueden usar como comodines).';

$lang['BadwordsInfo'] = 'Palabras pueden ser filtradas o sustituidas, eventualmente usando una coincidencia parcial (usando *).';
$lang['BadwordsDisabled'] = 'Filtro palabras prohibidas desactivado';
$lang['BadwordsDisabledInfo'] = 'Filtro palabras prohibidas ha sido desactivado en los ajustes del foro.';
$lang['BadwordsNoBadwordsExist'] = 'Ning�n filtro existe en este foro.';
$lang['BadwordsAddBadwordWord'] = 'Palabra';
$lang['BadwordsAddBadwordReplacement'] = 'Sustituir';

$lang['MassEmailInfo'] = 'Enviar correos masivos a todos los miembros o un grupo de nivel.';
$lang['MassEmailRecipients'] = 'Destinatarios';
$lang['MassEmailRecipients-admins'] = 'Administradores';
$lang['MassEmailRecipients-mods'] = 'Moderadores';
$lang['MassEmailRecipients-members'] = 'Miembros normales';
$lang['MassEmailSubject'] = 'Asunto';
$lang['MassEmailBody'] = 'Cuerpo';
$lang['MassEmailTemplate'] = 'Hola,

Le escribimos desde el foro de [board_name]. El administrador ha enviado este correo masivo a traves del foro. El mensaje dice lo siguiente.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['MassEmailSent'] = 'El mensaje de correo masivo ha sido enviado a %d miembros usando %d mensaje(s).';
$lang['MassEmailOptions'] = 'Opciones';
$lang['MassEmailPublicEmailsOnly'] = 'S�lo enviar a direcciones de correo publicas';
$lang['MassEmailExcludeBanned'] = 'Excluir miembros expulsados';

$lang['BansInfo'] = 'Aqu� puede controlar casi todos los aspectos de las expulsiones de su foro. Coincidencias parciales (usando *) son posibles. Las cuentas individuales se les puede expulsar a trav�s del panel de edici�n miembros.';
$lang['Bans-username'] = 'Usuarios';
$lang['Bans-email'] = 'Direcciones de correo';
$lang['Bans-ip_addr'] = 'Direcciones IP';
$lang['BansUsername'] = 'Usuario';
$lang['BansEmail'] = 'Direcci�n de correo';
$lang['BansIp_addr'] = 'Direcci�n IP';
$lang['BansNoBansExist'] = 'No existen expulsiones de este tipo en el foro.';
$lang['BansIPBansDisabledInfo'] = 'Expulsiones por direcci�n IP se han desactivado en los ajustes del foro.';

?>
