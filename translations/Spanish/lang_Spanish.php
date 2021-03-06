<?php

/*
	Copyright (C) 2003-2010 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.131 2010/08/22 19:50:15 pc_freak Exp $
	
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

//
// Initialize a new translations holder array
//
$lang = array();

//
// Translation settings
// Uncomment and change when necessary for translations
//
#$lang['character_encoding'] = 'iso-8859-15';
#$lang['language_code'] = 'es';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Inicio';
$lang['YourPanel'] = 'Tu Panel';
$lang['Register'] = 'Registrar';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Buscar';
$lang['ActiveTopics'] = 'Temas Activos';
$lang['LogIn'] = 'Entrar';
$lang['LogOut'] = 'Salir (%s)';
$lang['MemberList'] = 'Miembros';
$lang['StaffList'] = 'Staff List';
$lang['Statistics'] = 'Estad�sticas';
$lang['ContactAdmin'] = 'Contactar Administrador';
$lang['Forum'] = 'Foro';
$lang['Topics'] = 'Temas';
$lang['Posts'] = 'Mensajes';
$lang['LatestPost'] = 'Ultimo Mensaje';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nuevos Mensajes';
$lang['NoNewPosts'] = 'No hay nuevos mensajes';
$lang['LockedNewPosts'] = 'Bloqueado (nuevos mensajes)';
$lang['LockedNoNewPosts'] = 'Bloqueado (no hay nuevos mensajes)';
$lang['Locked'] = 'Bloqueado';
$lang['LastLogin'] = 'Ultima entrada';
$lang['VariousInfo'] = 'Informaci�n Variada';
$lang['IndexStats'] = 'Esta comunidad contiene %d mensajes en %d temas y tiene %d miembros registrados.';
$lang['NewestMemberExtended'] = 'Bienvenido a nuestro miembro m�s reciente: %s.';
$lang['Username'] = 'Usuario';
$lang['CurrentPassword'] = 'Contrase�a actual';
$lang['UserID'] = 'ID de Usuario';
$lang['NoSuchForum'] = 'El foro %s no existe (nunca m�s) en esta comunidad!';
$lang['WrongPassword'] = 'Lo sentimos, pero que la contrase�a no es correcta! Solicite una nueva contrase�a a trav�s del formulario de acceso si la ha olvidado.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Enviar una nueva contrase�a';
$lang['RegisterNewAccount'] = 'Registrar una nueva cuenta';
$lang['RememberMe'] = 'Recordarme';
$lang['Yes'] = 'Si';
$lang['No'] = 'No';
$lang['NotActivated'] = 'Tu cuenta %s no ha sido activada aun. Por favor revise su buz�n de correo electr�nico que usted registr� con en este foro para obtener instrucciones sobre c�mo activar su cuenta.';
$lang['Error'] = 'Error';
$lang['Profile'] = 'Perfil de %s';
$lang['Level'] = 'Nivel';
$lang['Administrator'] = 'Administrador';
$lang['Moderator'] = 'Moderador';
$lang['Registered'] = 'Registrado';
$lang['Email'] = 'Correo Electr�nico';
$lang['ContactInfo'] = 'Informaci�n de Contacto';
$lang['Password'] = 'Contrase�a';
$lang['PasswordAgain'] = 'Contrase�a (otra vez)';
$lang['EverythingRequired'] = 'Todos los campos son obligatorios!';
$lang['RegisteredNotActivated'] = 'Tu cuenta %s ha sido creada. Un correo electr�nico ha sido enviado a %s con las instrucciones sobre c�mo activar su cuenta. Usted necesita activarla para iniciar sesi�n con su cuenta.';
$lang['RegisteredActivated'] = 'Tu cuenta %s ha sido creada. Puedes acceder cuando quieras.';
$lang['Never'] = 'Nunca';
$lang['Member'] = 'Miembro';
$lang['RegistrationActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de registrar una cuenta llamada [account_name], pero no esta activada a�n. Por favor, haga clic en el enlace de abajo para activar su cuenta:

[activate_link]

o copie y peguelo en su navegador. Luego podra iniciar la sesi�n usando el siguiente usuario y contrase�a:

Usuario: [account_name]
Contrase�a: [password]

Si olvid� su contrase�a, usted puede solicitar una nueva a trav�s del enlace en el formulario de entrada. Gracias por registrarse!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Esto es una comunidad vacia. El administrador a�n no ha creado algun foro.';
$lang['AlreadyActivated'] = 'La cuenta con ID %d ha sido activada.';
$lang['Activate'] = 'Activar';
$lang['Activated'] = 'Tu cuenta %s ha sido (re)activada. Usted entrar� de forma autom�tica.';
$lang['WrongActivationKey'] = 'No hemos podido activar su cuenta con ID %d. La clave de activaci�n es incorrecta. �Est� seguro de que no ha solicitado una nueva contrase�a en el alg�n momento?';
$lang['RegisterIt'] = 'Usted puede crearlo a trav�s del \'Register\' de enlace.';
$lang['BoardClosed'] = 'Comunidad cerrada';
$lang['SendpwdEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted ha solicitado una nueva contrase�a para la cuenta [account_name]. Usted puede entrar usando este usuario y contrase�a:

Usuario: [account_name]
Contrase�a: [password]

Si no recuerda su contrase�a, puede solicitar una nueva a trav�s del enlace en el formulario de entrada.. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nueva Contrase�a';
$lang['SendpwdActivated'] = 'La nueva contrase�a para su cuenta %s ha sido enviada a %s. Usted est� ahora en condiciones de ingresar con su nueva contrase�a.';
$lang['ForumIndex'] = 'Foros de discusi�n';
$lang['MissingFields'] = 'Los siguientes campos requeridos estan perdido o incorrectos: %s.';
$lang['TermsOfUseContent'] = 'Usted reconoce que todos los mensajes encontrados en este foro son las opiniones de sus autores y no del webmaster del sitio, los administradores o moderadores del foro, con excepci�n de los mensajes escritos por cada uno de ellos.

Usted acepta no publicar material abusivo, ofensivo, obsceno o de contenido inapropiado o contenido que est� prohibido por la ley en estos foros. Si lo hace, puede hacer que su cuenta en estos foros sea borrada, y si reitera en su comportamiento ser� notificado de su comportamiento a su proveedor de internet. Por lo tanto, su direcci�n IP se almacena con todos los env�os que usted pone. Tambi�n acepta que los administradores y moderadores tienen permiso para editar, borrar, mover o bloquear sus temas cuando se piensa que esto es necesario.

Toda la informaci�n que escriba en estos foros se almacena en una base de datos para futuras referencias. El administrador del foro no redistribuir� esta informaci�n sin su permiso o por obligaci�n de cuestiones jur�dicas. Sin embargo, ni el webmaster, administradores o moderadores, ni el Equipo de UseBB pueden ser considerados responsables cuando la informaci�n se filtr� como resultado de un intento de "hacking".

Esta comunidad utiliza cookies para almacenar informaci�n temporal que necesita el sistema de foros en el equipo local. Adem�s, una cookie puede almacenar su nombre de usuario y su contrase�a en forma encriptada para permitir la conexi�n autom�tica de su cuenta, si opta por permitir esto. Si no quieres que las cookies se almacenen en su ordenador, consulte el manual de su navegador acerca de c�mo deshabilitar las cookies

Al pulsar en "Acepto", usted est� de acuerdo con estos t�rminos y condiciones.';
$lang['TermsOfUse'] = 'Terminos De Uso';
$lang['RegistrationActivationEmailSubject'] = 'Activaci�n de la cuenta';
$lang['NeedToBeLoggedIn'] = 'You need to be logged in to do this. Click the \'Log In\' link to log in or \'Register\' to create a new account.';
$lang['WrongEmail'] = 'Sorry, but %s isn\'t the correct e-mail address for your account %s. If you can\'t remember your e-mail address, please contact the board admin.';
$lang['Topic'] = 'Tema';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Respuestas';
$lang['Views'] = 'Vistas';
$lang['Note'] = 'Nota';
$lang['Hidden'] = 'Oculto';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Enviar un mensaje';
$lang['NoViewableForums'] = 'Usted no tiene permiso para ver cualquier foro con el nivel de este usuario. Si no est� registrado, h�galo. Si usted se ha identificado, probablemente no deber�a estar aqu�.';
$lang['Rank'] = 'Rango';
$lang['Location'] = 'Localizaci�n';
$lang['Website'] = 'Pagina Web';
$lang['Occupation'] = 'Ocupaci�n';
$lang['Interests'] = 'Intereses';
$lang['MSNM'] = 'Windows Live Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Su direcci�n IP %s ha sido expulsada de este foro.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Cuenta Expulsada';
$lang['BannedUserExplain'] = 'Su cuenta %s ha sido expulsada de este foro. La raz�n es:';
$lang['BannedUsername'] = 'El nombre de usuario %s ha sido expulsado de este foro. Por favor elija otro.';
$lang['BannedEmail'] = 'El correo electronico %s ha sido expulsado de este foro. Por favor elija otro.';
$lang['PostsPerDay'] = 'Mensajes por d�a';
$lang['BoardClosedOnlyAdmins'] = 'S�lo los administradores pueden iniciar sesi�n cuando el foro est� cerrado.';
$lang['NoPosts'] = 'Ning�n mensaje';
$lang['NoActivetopics'] = 'Esta foro no tiene actualmente ning�n tema activo.';
$lang['AuthorDate'] = 'Por %s en %s';
$lang['ByAuthor'] = 'Por: %s';
$lang['OnDate'] = 'En: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Enviar un e-mail a %s';
$lang['SendEmail'] = 'Enviar un mensaje a %s';
$lang['NoMails'] = 'Este usuario ha elegido no recibir correos electr�nicos.';
$lang['UserEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. El usuario [username] le ha enviado este mensaje a trav�s del foro. El mensaje dice lo siguiente.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'El correo electronico a %s ha sido enviado con �xito!';
$lang['To'] = 'A';
$lang['From'] = 'De';
$lang['Subject'] = 'Asunto';
$lang['Body'] = 'Cuerpo';
$lang['Send'] = 'Enviar';
$lang['EditProfile'] = 'Editar Perfil';
$lang['EditOptions'] = 'Editar Opciones';
$lang['EditPasswd'] = 'Editar Contrase�a';
$lang['PanelHome'] = 'Panel Inicio';
$lang['NewEmailNotActivated'] = 'Tu perfil ha sido editado con �xito. Como has cambiado el correo electronico de tu cuenta %s, necesitas reactivarla. Un correo electronico ha sido enviado a %s con instrucciones de como hacer esto. La sesi�n se cerrar� en breves momentos.';
$lang['Required'] = 'Requerido';
$lang['ViewProfile'] = 'Ver Perfil';
$lang['NewEmailActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de modificar la direcci�n de correo electr�nico de su cuenta [account_name], pero no se ha reactivado a�n. Por favor, haga clic en el siguiente enlace para reactivar su cuenta:

[activate_link]

o copie y peguelo en su navegador.

Si olvid� su contrase�a, usted puede solicitar una nueva a trav�s del enlace en el formulario de entrada.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Reactivaci�n de la cuenta';
$lang['Signature'] = 'Firma';
$lang['SessionInfo'] = 'Informaci�n de la sesi�n';
$lang['SessionID'] = 'ID de Sesi�n';
$lang['IPAddress'] = 'Direcci�n IP';
$lang['Seconds'] = 'Segundos';
$lang['Updated'] = 'Actualizado';
$lang['Pages'] = 'Paginas';
$lang['AutoLogin'] = 'Inicio de Sesi�n Automatico';
$lang['Enabled'] = 'Activado';
$lang['Disabled'] = 'Desactivado';
$lang['Enable'] = 'Activado';
$lang['Disable'] = 'Desactivado';
$lang['AutoLoginSet'] = 'La cookie de inicio de sesi�n autom�tico ya se ha establecido.';
$lang['AutoLoginUnset'] = 'La cookie de inicio de sesi�n autom�tico ha sido desactivada.';
$lang['RegistrationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de registrar una cuenta llamada [account_name]. Puede iniciar sesi�n usando este nombre de usuario y contrase�a:

Username: [account_name]
Password: [password]

Si olvid� su contrase�a, usted puede solicitar una nueva a trav�s del enlace en el formulario de entrada. Gracias por registrarte!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registro de Cuenta';
$lang['PublicEmail'] = 'Direcci�n de correo electr�nico publica';
$lang['PublicLastLogin'] = 'D�a de la �ltima visita p�blica';
$lang['DateFormat'] = 'Formato de fecha';
$lang['DateFormatHelp'] = 'La sintaxis de formato de fecha es igual a %s la funci�n en PHP.';
$lang['Again'] = 'Otra vez';
$lang['NewPassword'] = 'Nueva contrase�a';
$lang['NewPasswordAgain'] = 'Nueva contrase�a (otra vez)';
$lang['PasswordEdited'] = 'Su contrase�a ha sido modificada con �xito.';
$lang['DetailedOnlineList'] = 'Lista detallada en l�nea';
$lang['Detailed'] = 'Detallada';
$lang['OptionsEdited'] = 'Sus opciones del foro han sido modificadas con �xito.';
$lang['ProfileEdited'] = 'Tu perfil ha sido modificado con �xito.';
$lang['Started'] = 'Iniciado';
$lang['Minutes'] = 'Minutos';
$lang['Hours'] = 'Horas';
$lang['Days'] = 'Dias';
$lang['Weeks'] = 'Semanas';
$lang['TotalTime'] = 'Tiempo total';
$lang['NoTopics'] = 'Este foro no contiene ning�n tema. Usted puede publicar el primero!';
$lang['NotPermitted'] = 'No tiene los permisos adecuados para hacerlo. En caso de duda, contacte con el administrador.';
$lang['Language'] = 'Lenguaje';
$lang['Template'] = 'Plantilla';
$lang['NoSuchMember'] = 'El miembro %s no existe (ya) en este foro.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Esta funci�n est� desactivada, porque este foro no puede establecer o leer las cookies en tu navegador.';
$lang['LogOutConfirm'] = '�Est� seguro que desea salir?';
$lang['Cancel'] = 'Cancelar';
$lang['Timezone'] = 'Zona Horaria';
$lang['DST'] = 'Horario de Verano';
$lang['Sticky'] = 'Pegado';
$lang['PostNewTopic'] = 'Nuevo Tema';
$lang['ForumIsLocked'] = 'El foro est� cerrado';
$lang['NoSuchTopic'] = 'El tema %s no existe (ya) en este foro.';
$lang['PostReply'] = 'Responder';
$lang['TopicIsLocked'] = 'El tema est� cerrado';
$lang['Post'] = 'Mensaje';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Borrar';
$lang['Quote'] = 'Citar';
$lang['Wrote'] = '%s escribi�';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'El tema que en el que est�s intentando escribir un mensaje est� bloqueado. Solamente las personas autorizadas pueden enviar respuestas.';
$lang['Content'] = 'Contenido';
$lang['Options'] = 'Opciones';
$lang['EnableBBCode'] = 'Habilitar BBCode.';
$lang['EnableSmilies'] = 'Habilitar smilies.';
$lang['EnableSig'] = 'Activar Firma.';
$lang['EnableHTML'] = 'Activar HTML.';
$lang['LockTopicAfterPost'] = 'Bloquear tema despu�s de publicar.';
$lang['Guest'] = 'Invitado';
$lang['BackToPrevious'] = 'Volver a la p�gina anterior';
$lang['NoSuchPost'] = 'El mensaje %s no existe (ya) en este foro.';
$lang['UserPostedImage'] = 'El usuario fij� la imagen';
$lang['ForumIsLockedExplain'] = 'Este foro est� bloqueado. Solamente las personas autorizadas pueden publicar nuevos temas.';
$lang['MakeTopicSticky'] = 'Pegar el tema.';
$lang['QuickReply'] = 'Respuesta rapida';
$lang['ReturnToTopicAfterPosting'] = 'Regresar al tema despu�s de publicar';
$lang['ModeratorList'] = 'Moderadores: %s.';
$lang['Nobody'] = 'Nadie';
$lang['DeleteTopic'] = 'Borrar tema';
$lang['MoveTopic'] = 'Mover tema';
$lang['LockTopic'] = 'Bloquear tema';
$lang['UnlockTopic'] = 'Desbloquear tema';
$lang['MakeSticky'] = 'Pegar';
$lang['ConfirmDeleteTopic'] = '�Est� seguro que desea eliminar el tema %s en el foro %s? Esto es irreversible!';
$lang['MakeNormalTopic'] = 'Despegar';
$lang['OldForum'] = 'Antiguo foro';
$lang['NewForum'] = 'Nuevo foro';
$lang['IAccept'] = 'Acepto';
$lang['IDontAccept'] = 'No acepto';
$lang['OpenLinksNewWindow'] = 'Abrir enlaces externos en nueva ventana';
$lang['HideAllAvatars'] = 'Ocultar todos los avatares';
$lang['HideUserinfo'] = 'Ocultar la informaci�n del usuario';
$lang['HideAllSignatures'] = 'Ocultar todas las firmas';
$lang['HideFromOnlineList'] = 'Ocultar la lista en linea';
$lang['PageLinks'] = 'Pagina: %s';
$lang['Preview'] = 'Previsualizar';
$lang['DeletePost'] = 'Borrar mensaje';
$lang['ConfirmDeletePost'] = '�Est�s seguro que quieres eliminar este mensaje en el tema %s? Esto es irreversible!';
$lang['EditPost'] = 'Editar mensaje';
$lang['PostEditInfo'] = 'Ultima edici�n por %s en %s.';
$lang['PasswdInfo'] = 'La contrase�a s�lo puede contener caracteres alfanum�ricos y tener una longitud m�nima de %d caracteres.';
$lang['SubscribeTopic'] = 'Suscribir';
$lang['UnsubscribeTopic'] = 'Darse de baja';
$lang['NewReplyEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Alguien ([poster_name]) ha publicado una respuesta en el tema que estas suscrito ("[topic_title]"). Para ver la respuesta, por favor pulsa en el siguiente enlace: [topic_link].

Pulse en el siguiente enlace si desea darse de baja de este tema (requiere identificarse): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nueva respuesta en "%s"';
$lang['SubscribedTopic'] = 'Tu estas ahora suscrito a este tema.';
$lang['UnsubscribedTopic'] = 'Tu estas ahora dado de baja de este tema.';
$lang['SubscribeToThisTopic'] = 'Suscribete a este tema.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Suscripciones';
$lang['NoSubscribedTopics'] = 'Actualmente no est�s suscrito a ning�n tema.';
$lang['LatestUpdate'] = '�ltima actualizaci�n';
$lang['Unknown'] = 'Desconocido';
$lang['PostingTopic'] = 'Publicar un tema en %s';
$lang['PostingReply'] = 'Publicar una respuesta en %s';
$lang['MovingTopic'] = 'Moviendo tema %s';
$lang['DeletingTopic'] = 'Borrando tema %s';
$lang['EditingPost'] = 'Editando mensaje en %s';
$lang['DeletingPost'] = 'Borrando mensaje en %s';
$lang['DebugMode'] = 'Modo de depuraci�n';
$lang['ParseTime'] = 'Analizar el tiempo';
$lang['ServerLoad'] = 'Carga del servidor';
$lang['TemplateSections'] = 'Secciones de Plantillas';
$lang['SQLQueries'] = 'SQL consultas';
$lang['RealName'] = 'Nombre real';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administradores';
$lang['Moderators'] = 'Moderadores';
$lang['TopicReview'] = 'Revisar tema';
$lang['ViewMorePosts'] = 'Ver mas mensajes';
$lang['DisplayedName'] = 'Nombre a mostrar';
$lang['UsernameInfo'] = 'Un nombre de usuario s�lo pueden contener caracteres alfanum�ricos, espacios, _ y -.';
$lang['Code'] = 'Codigo';
$lang['Img'] = 'Img';
$lang['URL'] = 'URL';
$lang['Color'] = 'Color';
$lang['Size'] = 'Tama�o';
$lang['ViewingForum'] = 'Foro: %s';
$lang['ViewingTopic'] = 'Tema: %s';
$lang['FloodIntervalWarning'] = 'El administrador ha especificado que s�lo se pueden escribir con intervalos de %d segundos. Por favor espera por lo menos %d segundos antes de volver a presentar el formulario.';
$lang['AutoSubscribe'] = 'Auto suscribir';
$lang['OnPostingNewTopics'] = 'En los temas que publicar';
$lang['OnPostingNewReplies'] = 'En las respuestas que publicar';
$lang['UnsubscribeSelected'] = 'Anular seleccionados';
$lang['SelectedTopicsUnsubscribed'] = 'Ahora est� de baja de los temas seleccionados.';
$lang['Birthday'] = 'Cumplea�os';
$lang['Age'] = 'Edad';
$lang['Month'] = 'Mes';
$lang['Day'] = 'D�a';
$lang['Year'] = 'A�o';
$lang['PoweredBy'] = '%s is powered by %s';
$lang['ForumSoftware'] = 'Forum Software';
$lang['GeneralStats'] = 'Estadisticas generales';
$lang['Members'] = 'Miembros';
$lang['TopicsPerDay'] = 'Temas por dia';
$lang['MembersPerDay'] = 'Miembros por dia';
$lang['BoardStarted'] = 'Comunidad iniciada';
$lang['BoardAge'] = 'Edad de la comunidad';
$lang['NewestMember'] = 'Miembro mas reciente';
$lang['MostActiveTopics'] = 'Temas mas activos';
$lang['MostViewedTopics'] = 'Temas mas vistos';
$lang['PostsPerMember'] = 'Mensajes por miembro';
$lang['PostsPerForum'] = 'Mensajes por foro';
$lang['Categories'] = 'Categorias';
$lang['Forums'] = 'Foros';
$lang['TopicsPerMember'] = 'Temas por miembro';
$lang['TopicsPerForum'] = 'Temas por foro';
$lang['MostActiveMembers'] = 'Miembro mas activo';
$lang['MostActiveForums'] = 'Foro mas activo';
$lang['DisplayedNameTaken'] = 'Lo sentimos, %s ya ha sido tomado como un nombre de usuario o un nombre a mostrar.';
$lang['SearchKeywords'] = 'B�squeda de palabras clave';
$lang['SearchMode'] = 'Modo de b�squeda';
$lang['SearchAuthor'] = 'Buscar autor';
$lang['SearchForums'] = 'Buscar foros';
$lang['AllForums'] = 'Todos los foros';
$lang['NoSearchResults'] = 'Lo sentimos, pero no se encontraron resultados que coincidan con los criterios que ha suministrado.';
$lang['SearchMembersPosts'] = 'Buscar mensajes de los miembros';
$lang['CurrentPage'] = 'Pagina actual';
$lang['MemberGuestOnline'] = 'En los �ltimos %d minutos, %d miembro (%d oculto) y %d invitado han visitado los foros.';
$lang['MembersGuestOnline'] = 'En los �ltimos %d minutos, %d miembros (%d oculto) y %d invitado han visitado los foros.';
$lang['MemberGuestsOnline'] = 'En los �ltimos %d minutos, %d miembro (%d oculto) y %d invitados han visitado los foros.';
$lang['MembersGuestsOnline'] = 'En los �ltimos %d minutos, %d miembros (%d oculto) y %d invitados han visitado los foros.';
$lang['WhosOnline'] = 'Quien est� en l�nea';
$lang['Done'] = 'Hecho';
$lang['KeywordsExplain'] = 'Algunas palabras clave por lo menos %d caracteres separados por espacios.';
$lang['BCCMyself'] = 'Enviar una copia a mi propia direcci�n de e-mail.';
$lang['Save'] = 'Guardar';
$lang['Add'] = 'A�adir';
$lang['MarkAllAsRead'] = 'Marcar todo como leido';
$lang['MarkAllAsReadDone'] = 'Todos los foros y los temas son marcados como le�dos.';
$lang['StringTooShort'] = '%s es demasiado corto, por lo menos %d caracteres son necesarios.';
$lang['StringTooLong'] = '%s es demasiado largo, solo %d caracteres estan permitidos.';
$lang['Upload'] = 'Cargar';
$lang['RegistrationsDisabled'] = 'Registros desactivados';
$lang['PostFormShortcut'] = 'Presione Alt+S (Control+S en Apple) para enviar r�pidamente este formulario.';
$lang['EditThisMember'] = 'Editar este miembro';
$lang['EmailTaken'] = 'La direcci�n de correo electronico %s ya se est� utilizando en este foro. Por favor, elija una direcci�n distinta.';
$lang['RegisteredNotActivatedByAdmin'] = 'Tu cuenta %s ahora se ha creado. Antes de que usted sea capaz de iniciar sesi�n, el administrador de este foro debe activar su cuenta. Por favor, espere un tiempo para que esto suceda.';
$lang['AdminActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de registrar una cuenta llamada [account_name]. El administrador del foro todav�a tiene que activar su cuenta. Una vez que esto ha sucedido, se puede acceder usando lo siguiente:

Usuario: [account_name]
Contrase�a: [password]

Si no recuerda su contrase�a, puede solicitar uno nueva a trav�s del enlace en el formulario de entrada. Gracias por registrarse!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Cuenta a la espera de activaci�n';
$lang['NewEmailNotActivatedByAdmin'] = 'Su perfil ha sido editado con �xito. Debido a que ha cambiado la direcci�n de correo electr�nico de su cuenta %s, el administrador de este foro tiene que volver a activarlo. Usted ser� desconectado ahora.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. Usted acaba de modificar la direcci�n de correo electr�nico de su cuenta [account_name], pero no se ha reactivado todav�a. El administrador de la comunidad tiene que reactivar su cuenta. Por favor, espere un tiempo para que esto suceda.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Cuenta la espera de la reactivaci�n';
$lang['AdminActivatedAccountEmailBody'] = 'Hola,

Le escribimos desde el foro de [board_name]. El administrador ha activado su cuenta [account_name]. Ahora puede iniciar sesi�n.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Cuenta activa';
$lang['Sort'] = 'Ordenar';
$lang['SortBy'] = 'Ordenar por';
$lang['SortBy-displayed_name'] = 'Usuario';
$lang['SortBy-real_name'] = 'Nombre real';
$lang['SortBy-level'] = 'Nivel';
$lang['SortBy-rank'] = 'Rango';
$lang['SortBy-regdate'] = 'Registrado';
$lang['SortBy-posts'] = 'Mensajes';
$lang['SortBy-latest_post'] = 'Ultimo mensaje';
$lang['SortBy-topic_title'] = 'T�tulo del tema';
$lang['SortBy-forum'] = 'Foro';
$lang['SortBy-author'] = 'Autor';
$lang['SortBy-replies'] = 'Respuestas';
$lang['SortBy-views'] = 'Vistas';
$lang['SortOrder-asc'] = 'Ascendente';
$lang['SortOrder-desc'] = 'Descendente';
$lang['NoUsersFound'] = 'Ning�n miembro encontrado.';
$lang['SaveConfigManually'] = 'Porque config.php no es escribible, UseBB no puede grabar los valores de configuraci�n por si mismo. Por favor, guardar el contenido siguiente para config.php y subelo si es necesario.';
$lang['ShowResultsAs'] = 'Mostrar los resultados como';
$lang['ShowMode-topics'] = 'Temas';
$lang['ShowMode-posts'] = 'Mensajes';
$lang['Mode-and'] = 'Todas las palabras clave (Y)';
$lang['Mode-or'] = 'Algunas palabras clave (O)';
$lang['ExactMatch'] = 'B�squeda exacta';
$lang['IncludeGuests'] = 'Incluir invitados';
$lang['Top'] = 'Arriba';
$lang['Bottom'] = 'Abajo';
$lang['Action'] = 'Acci�n';
$lang['AntiSpamQuestion'] = 'Pregunta Anti-spam';
$lang['AntiSpamQuestionInfo'] = 'Como una medida anti-spam, necesita responder a esta pregunta correctamente para poder acceder a este componente del foro. S�lo una pregunta por sesi�n se preguntar�, mientras se registraba lo desactivar� por completo. Gracias por su comprensi�n.';
$lang['Question'] = 'Pregunta';
$lang['Answer'] = 'Respuesta';
$lang['AntiSpamQuestionMathPlus'] = '�Cu�nto es %d m�s %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Cu�nto es %d menos %d?';
$lang['AntiSpamWrongAnswer'] = 'La respuesta es incorrecta. Por favor, rellene la respuesta correcta para acceder a este componente.';
$lang['WrongUsernamePassword'] = 'El usuario (%s) y la contrase�a no es correcta. Por favor intentelo de nuevo.';

$lang['date_translations'] = array(
	'Mon' => 'Lun',
	'Tue' => 'Mar',
	'Wed' => 'Mie',
	'Thu' => 'Jue',
	'Fri' => 'Vie',
	'Sat' => 'Sab',
	'Sun' => 'Dom',
	'Monday' => 'Lunes',
	'Tuesday' => 'Martes',
	'Wednesday' => 'Miercoles',
	'Thursday' => 'Jueves',
	'Friday' => 'Viernes',
	'Saturday' => 'Sabado',
	'Sunday' => 'Domingo',
	'Jan' => 'ene',
	'Feb' => 'feb',
	'Mar' => 'mar',
	'Apr' => 'abr',
	'May' => 'may',
	'Jun' => 'jun',
	'Jul' => 'jul',
	'Aug' => 'ago',
	'Sep' => 'sep',
	'Oct' => 'oct',
	'Nov' => 'nov',
	'Dec' => 'dic',
	'January' => 'Enero',
	'February' => 'Febrero',
	'March' => 'Marzo',
	'April' => 'April',
	'May' => 'Mayo',
	'June' => 'Junio',
	'July' => 'Julio',
	'August' => 'Agosto',
	'September' => 'Septiembre',
	'October' => 'Octubre',
	'November' => 'Noviembre',
	'December' => 'Diciembre',
	'st' => 'er',
	'nd' => 'o',
	'th' => 'er'
);

?>
