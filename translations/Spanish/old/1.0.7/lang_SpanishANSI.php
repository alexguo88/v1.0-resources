<?php

/*
	Copyright (C) 2003-2007 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_English.php,v 1.129 2007/05/09 16:20:51 pc_freak Exp $
	
	Este archivo es parte de UseBB.
	
        UseBB es software libre; Usted puede redistribuir y/o modificarlo 
        bajo los t�rminos de la GNU General Public Licence publicada por 
        la Free Software Foundation; cualquier versi�n 2 de la licencia, 
        o (a su opci�n)  cualquier versi�n posterior.

        UseBB es distribuido esperando que sea �til,
        pero SIN NINGUNA GARANTIA; incluso sin la garant�a impl�cita de 
        COMERCIALIZACI�N o CONVENIENCIA PARA UN PROPOSITO EN PARTICULAR.
        Vea la GNU General Public Licence para m�s detalles.

        Usted debe haber recibido una copia de la GNU General Public Licence 
        junto con UseBB: en caso contrario, escriba a la Free Software 
        Foundation, Inc. , 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

//
// Termina cuando es llamado directamente desde el navegador.
//
if ( !defined('INCLUDED') )
	exit();

//
// Inicializa un nuevo array de traducciones
//
$lang = array();

//
// Configuraci�n de traducci�n.
// Descomente y cambie cuando sea necesario para las traducciones.
//
#$lang['character_encoding'] = 'iso-8859-1';
#$lang['language_code'] = 'es';
#$lang['text_direction'] = 'ltr';

//
// Traducciones definidas
//

$lang['Home'] = 'Principal';
$lang['YourPanel'] = 'Su panel';
$lang['Register'] = 'Registro';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'B�squeda';
$lang['ActiveTopics'] = 'Temas Activos';
$lang['LogIn'] = 'Acceder';
$lang['LogOut'] = 'Desconectarse (%s)';
$lang['MemberList'] = 'Lista de miembros';
$lang['StaffList'] = 'Lista de personal';
$lang['Statistics'] = 'Estad�sticas';
$lang['ContactAdmin'] = 'Contactar administrador';
$lang['Forum'] = 'Foro';
$lang['Topics'] = 'Temas';
$lang['Posts'] = 'Mensajes';
$lang['LatestPost'] = '�ltimos mensajes';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nuevos mensajes';
$lang['NoNewPosts'] = 'No hay mensajes nuevos';
$lang['LockedNewPosts'] = 'Bloqueado (nuevos mensajes)';
$lang['LockedNoNewPosts'] = 'Bloqueado (no hay mensajes nuevos)';
$lang['Locked'] = 'Bloqueado';
$lang['LastLogin'] = 'Ultimo acceso';
$lang['VariousInfo'] = 'Informaci�n variada';
$lang['IndexStats'] = 'Este foro contiene %d mensajes en %d temas y tiene %d miembros registrados.';
$lang['NewestMemberExtended'] = 'Bienvenido nuevo miembro: %s.';
$lang['Username'] = 'Nombre de usuario';
$lang['CurrentPassword'] = 'Contrase�a Actual';
$lang['UserID'] = 'ID de usuario';
$lang['NoSuchForum'] = 'El foro %s no existe (ya) en este sitio!';
$lang['WrongPassword'] = 'Lo sentimos, pero esta contrase�a no es correcta! Solicite una contrase�a nueva a trav�s del formulario de registro si la ha olvidado.';
$lang['Reset'] = 'Resetear';
$lang['SendPassword'] = 'Enviar una contrase�a nueva';
$lang['RegisterNewAccount'] = 'Registrar una cuenta nueva';
$lang['RememberMe'] = 'Recordarme';
$lang['Yes'] = 'Si';
$lang['No'] = 'No';
$lang['NotActivated'] = 'Su cuenta %s no ha sido a�n activada. Por favor revise su bandeja de correo en el cual encontrara instrucciones sobre como activar su cuenta.';
$lang['Error'] = 'Error';
$lang['Profile'] = 'Perfil de %s';
$lang['Level'] = 'Nivel';
$lang['Administrator'] = 'Administrador';
$lang['Moderator'] = 'Moderador';
$lang['Registered'] = 'Registrado';
$lang['Email'] = 'Direcci�n de e-mail';
$lang['ContactInfo'] = 'Informaci�n de contacto';
$lang['Password'] = 'Contrase�a';
$lang['PasswordAgain'] = 'Contrase�a (otra vez)';
$lang['EverythingRequired'] = 'Todos los campos son requeridos!';
$lang['RegisteredNotActivated'] = 'Su cuenta %s ha sido creada. Un e-mail ha sido enviado a %s con instrucciones sobre como activar su cuenta.';
$lang['RegisteredActivated'] = 'Su cuenta %s ha sido creada. Puede ahora acceder al foro.';
$lang['Never'] = 'Nunca';
$lang['Member'] = 'Miembro';
$lang['RegistrationActivationEmailBody'] = 'Hola,

Este es el software del foro [board_name]. Usted ha registrado una cuenta llamada [account_name], pero no ha sido activada a�n. Por favor de click al link de abajo para activar su cuenta:

[activate_link]

o copie-y-p�guelo en su navegador. Despu�s podr� acceder usando este nombre de usuario y contrase�a:

Nombre de usuario: [account_name]
Contrase�a: [password]

Si olvida su contrase�a, puede solicitar una nueva por medio del enlace en el formulario de acceso. Gracias por registrarse!

[board_name]
[board_link]
[admin_email]';
$lang['NoForums'] = 'Este es un foro vac�o. El administrador no ha creado nada hasta el momento.';
$lang['AlreadyActivated'] = 'La cuenta con ID %d ya ha sido activada.';
$lang['Activate'] = 'Activar';
$lang['Activated'] = 'Su cuenta %s ha sido (re)activada. Usted acceder� autom�ticamente.';
$lang['WrongActivationKey'] = 'Fuimos incapaces de activar su cuenta con ID %d. La clave de activaci�n es incorrecta. Intente crear una cuenta nueva.';
$lang['RegisterIt'] = 'Puede crearla a trav�s del link \'Registro\'.';
$lang['BoardClosed'] = 'Foro Cerrado';
$lang['SendpwdEmailBody'] = 'Hola,

Este es software del foro [board_name]. Ha solicitado una nueva contrase�a para la cuenta [account_name]. Puede acceder utilizando este nombre de usuario y contrase�a:

Nombre de usuario: [account_name]
Contrase�a: [password]

Si olvida su contrase�a, puede solicitar una nueva mediante el link que se encuentra en el formulario de acceso. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nueva contrase�a';
$lang['SendpwdActivated'] = 'La nueva contrase�a para su cuenta %s ha sido enviada a %s. Esta ahora habilitado para poder acceder al foro.';
$lang['ForumIndex'] = '�ndice del foro';
$lang['MissingFields'] = 'Los siguientes campos requeridos est�n vac�os o son incorrectos: %s.';
$lang['TermsOfUseContent'] = 'Usted reconoce que todos los mensajes encontrados en este foro son las opiniones de sus autores y no de los administradores, moderadores o del webmaster, excepto por los mensajes escritos por cada uno de ellos.

Esta de acuerdo en no colocar ning�n mensaje con contenido abusivo, ofensivo, obsceno o inapropiado o prohibido por las leyes de este foro. Haci�ndolo puede causar que su cuenta en este foro sea expulsada o removida y su proveedor de servicios de Internet ser� eventualmente informado acerca de su comportamiento. Por consiguiente, su direcci�n IP es almacenada con cada mensaje que coloque. Usted tambi�n esta de acuerdo que los administradores pueden editar, borrar, mover o bloquear sus temas cuando piensen que es necesario.

Toda la informaci�n que coloca en estos foros, es almacenada en sistema de base de datos para futuras referencias. El administrador del foro no re-distribuir� esta informaci�n sin su permiso u obligaci�n por emisiones legales. Sin embargo, ni el webmaster, administradores o moderadores, ni el UseBB Team pueden hacerse responsables cuando alg�n tipo de informaci�n es perdida como resultado de un hackeo.

Este foro utiliza cookies para almacenar en su computadora temporalmente informacion necesitada por el foro. Tambi�n, una cookie puede almacenar su nombre de usuario y su contrase�a en una forma encriptada para habilitar el acceso autom�tico de su cuenta si usted ha habilitado esta caracter�stica. Si usted no quiere que las cookies sean almacenadas en su sistema, consulte como deshabilitar las cookies en el manual de su navegador.

Dando click en el bot�n "Acepto", usted esta de acuerdo con estos t�rminos y condiciones.';
$lang['TermsOfUse'] = 'T�rminos de uso';
$lang['RegistrationActivationEmailSubject'] = 'Activaci�n de cuenta';
$lang['NeedToBeLoggedIn'] = 'Usted necesita acceder para poder hacer esto. De click en el link \'Acceder\' para acceder o \'Registro\' para crear una cuenta nueva.';
$lang['WrongEmail'] = 'Lo sentimos, pero %s no es una direcci�n de e-mail correcta para su cuenta %s. Si no puede recordar su direcci�n de e-mail, por favor contacte al administrador del foro.';
$lang['Topic'] = 'Tema';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Respuestas';
$lang['Views'] = 'Visitas';
$lang['Note'] = 'Nota';
$lang['Hidden'] = 'Oculto';
$lang['ACP'] = 'ACP';
$lang['SendMessage'] = 'Enviar un mensaje';
$lang['NoViewableForums'] = 'No tiene permisos para ver el foro con este nivel de usuario. Si no ha accedido, h�galo. Si ya ha accedido, probablemente no deber�a estar aqu�.';
$lang['Rank'] = 'Rank';
$lang['Location'] = 'Localizaci�n';
$lang['Website'] = 'Sitio Web';
$lang['Occupation'] = 'Ocupaci�n';
$lang['Interests'] = 'Intereses';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo! Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber/XMPP';
$lang['BannedIP'] = 'Su direcci�n IP %s ha sido expulsada de este foro.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Cuenta expulsada';
$lang['BannedUserExplain'] = 'Su cuenta %s esta expulsada de este foro. La raz�n es:';
$lang['BannedUsername'] = 'El nombre de usuario %s esta expulsado de este foro. Por favor seleccione otro.';
$lang['BannedEmail'] = 'La direcci�n de e-mail %s esta expulsada de este foro. Por favor seleccione otra.';
$lang['PostsPerDay'] = 'Mensajes por d�a';
$lang['BoardClosedOnlyAdmins'] = 'Solo administradores pueden acceder cuando el foro esta cerrado.';
$lang['NoPosts'] = 'No hay mensajes';
$lang['NoActivetopics'] = 'Este foro no tiene actualmente ning�n tema activo.';
$lang['AuthorDate'] = 'Por %s en %s';
$lang['ByAuthor'] = 'Por: %s';
$lang['OnDate'] = 'En: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Enviar un e-mail a %s';
$lang['SendEmail'] = 'Enviar un mensaje a %s';
$lang['NoMails'] = 'Este usuario ha seleccionado no recibir e-mails.';
$lang['UserEmailBody'] = 'Hola,

Este es software del foro [board_name]. El usuario [username] le ha enviado este mensaje a trav�s de nuestro foro. El cuerpo del mensaje es el siguiente.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = 'Su e-mail a %s ha sido enviado con �xito!';
$lang['To'] = 'A';
$lang['From'] = 'De';
$lang['Subject'] = 'Asunto';
$lang['Body'] = 'Cuerpo';
$lang['Send'] = 'Enviar';
$lang['EditProfile'] = 'Editar perfil';
$lang['EditOptions'] = 'Editar opciones';
$lang['EditPasswd'] = 'Editar contrase�a';
$lang['PanelHome'] = 'Panel Principal';
$lang['NewEmailNotActivated'] = 'Su perfil ha sido editado exitosamente. Debido a que ha cambiado la direcci�n de e-mail para su cuenta %s, necesitara reactivarla. Un e-mail ha sido enviado a %s con instrucciones sobre como hacerlo. Ser� desconectado en un momento.';
$lang['Required'] = 'Requerido';
$lang['ViewProfile'] = 'Ver perfil';
$lang['NewEmailActivationEmailBody'] = 'Hola,

Este es software del foro [board_name]. Usted ha solo alterado la direcci�n de e-mail de su cuenta [account_name], pero esta no ha sido reactivada a�n. Por favor de click en el link de abajo para reactivar su cuenta:

[activate_link]

o copie-y-p�guelo en su navegador.

Si olvida su contrase�a, puede solicitar una nueva mediante el link que se encuentra en el formulario de acceso.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Re-activaci�n de cuenta';
$lang['Signature'] = 'Firma';
$lang['SessionInfo'] = 'Informacion de sesi�n';
$lang['SessionID'] = 'ID de sesi�n';
$lang['IPAddress'] = 'Direcci�n IP';
$lang['Seconds'] = 'Segundos';
$lang['Updated'] = 'Actualizado';
$lang['Pages'] = 'Paginas';
$lang['AutoLogin'] = 'Auto Acceso';
$lang['Enabled'] = 'Habilitado';
$lang['Disabled'] = 'Deshabilitado';
$lang['Enable'] = 'Habilitar';
$lang['Disable'] = 'Deshabilitar';
$lang['AutoLoginSet'] = 'La cookie de auto-acceso ha sido colocada.';
$lang['AutoLoginUnset'] = 'La cookie de auto-acceso ha sido eliminada.';
$lang['RegistrationEmailBody'] = 'Hola,

Este es software del foro [board_name]. Usted solo ha registrado una cuenta llamada [account_name]. Puede acceder utilizando este nombre de usuario y contrase�a:

Nombre de usuario: [account_name]
Contrase�a: [password]

Si olvida su contrase�a, puede solicitar una nueva mediante el link que se encuentra en el formulario de acceso. Gracias por registrarse!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registro de cuenta';
$lang['PublicEmail'] = 'Direcci�n de e-mail publica';
$lang['PublicLastLogin'] = 'Ultimo periodo de acceso publico';
$lang['DateFormat'] = 'Formato de fecha';
$lang['DateFormatHelp'] = 'La sintaxis del formato de fecha es igual a la funci�n %s en PHP.';
$lang['Again'] = 'Otra vez';
$lang['NewPassword'] = 'Nueva Contrase�a';
$lang['NewPasswordAgain'] = 'Nueva contrase�a (Otra vez)';
$lang['PasswordEdited'] = 'Su contrase�a ha sido editada exitosamente.';
$lang['DetailedOnlineList'] = 'Lista detallada en l�nea';
$lang['Detailed'] = 'Detallado';
$lang['OptionsEdited'] = 'Sus opciones de sitio han sido editadas exitosamente.';
$lang['ProfileEdited'] = 'SU perfil ha sido editado exitosamente.';
$lang['Started'] = 'Iniciado';
$lang['Minutes'] = 'Minutos';
$lang['Hours'] = 'Horas';
$lang['Days'] = 'D�as';
$lang['Weeks'] = 'Semanas';
$lang['TotalTime'] = 'Tiempo total';
$lang['NoTopics'] = 'Este foro no contiene ning�n tema. Puede colocar el primero!';
$lang['NotPermitted'] = 'No tiene los permisos apropiados para hacer esto. Si tiene dudas, contacte al administrador.';
$lang['Language'] = 'Idioma';
$lang['Template'] = 'Plantilla';
$lang['NoSuchMember'] = 'El miembro %s no existe (ya) en este foro.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Esta caracter�stica esta deshabilitada porque este foro no puede colocar o leer cookies con su navegador.';
$lang['LogOutConfirm'] = 'Esta seguro que desea desconectarse?';
$lang['Cancel'] = 'Cancelar';
$lang['Timezone'] = 'Zona Horaria';
$lang['DST'] = 'Momentos guardados diariamente';
$lang['Sticky'] = 'Adherido';
$lang['PostNewTopic'] = 'Nuevo tema';
$lang['ForumIsLocked'] = 'El foro esta cerrado';
$lang['NoSuchTopic'] = 'El tema %s no existe (ya) en este foro.';
$lang['PostReply'] = 'Responder mensaje';
$lang['TopicIsLocked'] = 'El tema esta cerrado';
$lang['Post'] = 'Mensaje';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Borrar';
$lang['Quote'] = 'Citar';
$lang['Wrote'] = '%s escrito';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'El tema donde esta intentando redactar esta bloqueado. Solo personas autorizadas pueden todav�a redactar respuestas.';
$lang['Content'] = 'Contenido';
$lang['Options'] = 'Opciones';
$lang['EnableBBCode'] = 'Habilitar BBCode.';
$lang['EnableSmilies'] = 'Habilitar smilies.';
$lang['EnableSig'] = 'Habilitar firma.';
$lang['EnableHTML'] = 'Habilitar HTML.';
$lang['LockTopicAfterPost'] = 'Cerrar tema despu�s de colocar mensaje.';
$lang['Guest'] = 'Invitado';
$lang['BackToPrevious'] = 'Regresar a la pagina anterior';
$lang['NoSuchPost'] = 'El mensaje %s no existe (ya) en este foro.';
$lang['UserPostedImage'] = 'Imagen de mensaje del usuario';
$lang['ForumIsLockedExplain'] = 'Este foro esta bloqueado. Solo personas autorizadas pueden colocar nuevos temas.';
$lang['MakeTopicSticky'] = 'Hacer tema adherible.';
$lang['QuickReply'] = 'Respuesta r�pida';
$lang['ReturnToTopicAfterPosting'] = 'Regresar al tema despu�s de colocar mensaje';
$lang['ModeratorList'] = 'Moderadores: %s.';
$lang['Nobody'] = 'Nadie';
$lang['DeleteTopic'] = 'Borrar tema';
$lang['MoveTopic'] = 'Mover tema';
$lang['LockTopic'] = 'Cerrar tema';
$lang['UnlockTopic'] = 'Desbloquear tema';
$lang['MakeSticky'] = 'Hacer adherible';
$lang['ConfirmDeleteTopic'] = 'Esta seguro que quiere borrar este tema %s dentro del foro %s? Esto es irreversible!';
$lang['MakeNormalTopic'] = 'Hacer tema normal';
$lang['OldForum'] = 'Foro pasado';
$lang['NewForum'] = 'Foro nuevo';
$lang['IAccept'] = 'Acepto';
$lang['IDontAccept'] = 'No acepto';
$lang['OpenLinksNewWindow'] = 'Abrir links externos en una nueva pagina';
$lang['HideAllAvatars'] = 'Ocultar todos los avatars';
$lang['HideUserinfo'] = 'Ocultar informacion del usuario';
$lang['HideAllSignatures'] = 'Ocultar todas las firmas';
$lang['HideFromOnlineList'] = 'Ocultar de la lista en l�nea';
$lang['PageLinks'] = 'Pagina: %s';
$lang['Preview'] = 'Previsualizar';
$lang['DeletePost'] = 'Borrar mensaje';
$lang['ConfirmDeletePost'] = 'Esta seguro que quiere borrar este mensaje dentro del tema %s? Esto es irreversible!';
$lang['EditPost'] = 'Editar mensaje';
$lang['PostEditInfo'] = 'Ultima editaci�n por %s en %s.';
$lang['PasswdInfo'] = 'La contrase�a puede solo contener caracteres alfanum�ricos y tener una longitud m�nima de %d caracteres.';
$lang['SubscribeTopic'] = 'Suscribir';
$lang['UnsubscribeTopic'] = 'Desuscribir';
$lang['NewReplyEmailBody'] = 'Hola,

Este es software del foro [board_name]. Alguien ([poster_name]) escribi� una respuesta a un tema en el que esta subscrito ("[topic_title]"). Para ver la respuesta, por favor de click en el siguiente link: [topic_link].

De click en el siguiente link si desea desubscribirse de este tema (requiere acceso): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nueva repuesta en "%s"';
$lang['SubscribedTopic'] = 'Usted esta ahora subscrito a este tema.';
$lang['UnsubscribedTopic'] = 'Usted esta ahora desubscrito de este tema.';
$lang['SubscribeToThisTopic'] = 'Subscribirse a este tema.';
$lang['OK'] = 'OK';
$lang['Subscriptions'] = 'Subscripciones';
$lang['NoSubscribedTopics'] = 'No esta actualmente subscrito a ning�n tema.';
$lang['LatestUpdate'] = 'Ultima actualizaci�n';
$lang['Unknown'] = 'Desconocido';
$lang['PostingTopic'] = 'Redactar un tema en %s';
$lang['PostingReply'] = 'Redactar una respuesta en %s';
$lang['MovingTopic'] = 'Moviendo tema %s';
$lang['DeletingTopic'] = 'Borrando tema %s';
$lang['EditingPost'] = 'Editando tema %s';
$lang['DeletingPost'] = 'Borrando mensaje en %s';
$lang['DebugMode'] = 'Modo de depuraci�n';
$lang['ParseTime'] = 'Tiempo de an�lisis';
$lang['ServerLoad'] = 'Servidor cargado';
$lang['TemplateSections'] = 'Secciones de plantilla';
$lang['SQLQueries'] = 'Consultas SQL';
$lang['RealName'] = 'Nombre real';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administradores';
$lang['Moderators'] = 'Moderadores';
$lang['TopicReview'] = 'Revisar tema';
$lang['ViewMorePosts'] = 'Ver mas mensajes';
$lang['DisplayedName'] = 'Nombre mostrado';
$lang['UsernameInfo'] = 'Un nombre de usuario puede solo contener caracteres alfanum�ricos, espacios, _ y -.';
$lang['Code'] = 'C�digo';
$lang['Img'] = 'Imagen';
$lang['URL'] = 'URL';
$lang['Color'] = 'Color';
$lang['Size'] = 'Tama�o';
$lang['ViewingForum'] = 'Foro: %s';
$lang['ViewingTopic'] = 'Tema: %s';
$lang['FloodIntervalWarning'] = 'El administrador ha especificado que usted solo puede redactar con intervalos de %d segundos. Por favor espere por lo menos %d segundos antes de re-enviar el formulario.';
$lang['AutoSubscribe'] = 'Auto-subscribir';
$lang['OnPostingNewTopics'] = 'En temas redactados';
$lang['OnPostingNewReplies'] = 'En respuestas redactadas';
$lang['UnsubscribeSelected'] = 'Desubscribir selecci�n';
$lang['SelectedTopicsUnsubscribed'] = 'Esta ahora desubscrito de los temas seleccionados.';
$lang['Birthday'] = 'Cumplea�os';
$lang['Age'] = 'Edad';
$lang['Month'] = 'Mes';
$lang['Day'] = 'Dia';
$lang['Year'] = 'A�o';
$lang['PoweredBy'] = '%s es potenciado por %s';
$lang['ForumSoftware'] = 'Software del foro';
$lang['GeneralStats'] = 'Estad�sticas generales';
$lang['Members'] = 'Miembros';
$lang['TopicsPerDay'] = 'Temas por d�a';
$lang['MembersPerDay'] = 'Miembros por d�a';
$lang['BoardStarted'] = 'Foro iniciado';
$lang['BoardAge'] = 'Edad del foro';
$lang['NewestMember'] = 'Miembro mas nuevo';
$lang['MostActiveTopics'] = 'Temas mas activos';
$lang['MostViewedTopics'] = 'Temas mas vistos';
$lang['PostsPerMember'] = 'Mensajes por miembro';
$lang['PostsPerForum'] = 'Mensajes por foro';
$lang['Categories'] = 'Categor�as';
$lang['Forums'] = 'Foros';
$lang['TopicsPerMember'] = 'Temas por miembro';
$lang['TopicsPerForum'] = 'Temas por foro';
$lang['MostActiveMembers'] = 'Miembros mas activos';
$lang['MostActiveForums'] = 'Foros mas activos';
$lang['DisplayedNameTaken'] = 'Lo sentimos, %s ya ha sido tomado como nombre de usuario o nombre para mostrar.';
$lang['SearchKeywords'] = 'Palabras clave de b�squeda';
$lang['SearchMode'] = 'Modo b�squeda';
$lang['SearchAuthor'] = 'Buscar autor';
$lang['SearchForums'] = 'Buscar foros';
$lang['AllForums'] = 'Todos los foros';
$lang['NoSearchResults'] = 'Lo sentimos, pero no han sido encontrados resultados que coincidan con su criterio de b�squeda.';
$lang['SearchMembersPosts'] = 'Buscar mensajes de miembros';
$lang['CurrentPage'] = 'Pagina actual';
$lang['MemberGuestOnline'] = 'En los �ltimos %d minutos, %d miembro (%d oculto) y %d invitado han visitado los foros.';
$lang['MembersGuestOnline'] = 'En los �ltimos %d minutos, %d miembros (%d oculto) y %d invitado han visitados los foros.';
$lang['MemberGuestsOnline'] = 'En los �ltimos %d minutos, %d miembro (%d oculto) y %d invitados han visitado los foros.';
$lang['MembersGuestsOnline'] = 'En los �ltimos %d minutos, %d miembros (%d oculto) y %d invitados han visitado los foros.';
$lang['WhosOnline'] = 'Quien esta en l�nea?';
$lang['Done'] = 'Hecho';
$lang['KeywordsExplain'] = 'Palabras clave cualquiera de por lo menos %d caracteres separados por espacios.';
$lang['BCCMyself'] = 'Enviar una copia a mi propia direcci�n de correo electr�nico.';
$lang['Save'] = 'Guardar';
$lang['Add'] = 'Agregar';
$lang['MarkAllAsRead'] = 'Marcar todo como le�do';
$lang['MarkAllAsReadDone'] = 'Todos los foros y temas est�n ahora marcados como le�dos.';
$lang['StringTooShort'] = '%s es demasiado corto, por lo menos %d caracteres son requeridos.';
$lang['StringTooLong'] = '%s es demasiado largo, solo %d caracteres son permitidos.';
$lang['Upload'] = 'Subir';
$lang['RegistrationsDisabled'] = 'Registros deshabilitados';
$lang['PostFormShortcut'] = 'Presione Alt+S (Control+S en Apple) para enviar r�pidamente este foro.';
$lang['EditThisMember'] = 'Editar este miembro';
$lang['EmailTaken'] = 'La direccion de e-mail %s ya esta utilizada en este foro. Por favor escriba otra.';
$lang['RegisteredNotActivatedByAdmin'] = 'Su cuenta %s ha sido creada. Antes de que pueda acceder, el administrador de este foro necesita activar su cuenta. Por favor perm�tale un poco de tiempo para este proceso.';
$lang['AdminActivationEmailBody'] = 'Hola,

Este es software del foro [board_name]. Usted ha registrado una cuenta llamada [account_name]. El administrador del foro todav�a necesita activar su cuenta. Una vez que esto suceda, podr� acceder utilizando los siguientes datos:

Nombre de usuario: [account_name]
Contrase�a: [password]

Si olvida su contrase�a, puede solicitar una nueva mediante el link que se encuentra en el formulario de acceso. Gracias por registrarse!

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivationEmailSubject'] = 'Cuenta esperando activaci�n';
$lang['NewEmailNotActivatedByAdmin'] = 'Su perfil ha sido editado exitosamente. Debido a que ha cambiado la direcci�n de e-mail para su cuenta %s, el administrador de este foro necesita reactivarla. Ser� ahora desconectado.';
$lang['NewEmailAdminActivationEmailBody'] = 'Hola,

Este es software del foro [board_name]. Usted ha alterado la direcci�n de e-mail de su cuenta [account_name], pero esta no ha sido activada a�n. El administrador de este foro necesita primero activar su cuenta. Por favor perm�tale un poco de tiempo para hacerlo.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailAdminActivationEmailSubject'] = 'Cuenta esperando re-activaci�n';
$lang['AdminActivatedAccountEmailBody'] = 'Hola,

Este es software del foro [board_name]. El administrador ha activado su cuenta [account_name]. Usted puede ahora acceder al foro.

[board_name]
[board_link]
[admin_email]';
$lang['AdminActivatedAccountEmailSubject'] = 'Cuenta activada';
$lang['Sort'] = 'Ordenar';
$lang['SortBy'] = 'Ordenar por';
$lang['SortBy-displayed_name'] = 'Nombre de usuario';
$lang['SortBy-real_name'] = 'Nombre real';
$lang['SortBy-level'] = 'Nivel';
$lang['SortBy-rank'] = 'Rango';
$lang['SortBy-regdate'] = 'Registrado';
$lang['SortBy-posts'] = 'Mensajes';
$lang['SortBy-latest_post'] = '�ltimos mensajes';
$lang['SortBy-topic_title'] = 'Titulo de tema';
$lang['SortBy-forum'] = 'Foro';
$lang['SortBy-author'] = 'Autor';
$lang['SortBy-replies'] = 'Respuestas';
$lang['SortBy-views'] = 'Visitas';
$lang['SortOrder-asc'] = 'Ascendente';
$lang['SortOrder-desc'] = 'Descendente';
$lang['NoUsersFound'] = 'No se han encontrado miembros.';
$lang['SaveConfigManually'] = 'Debido a que config.php no tiene permiso de escritura, UseBB no puede guardar sus valores de configuraci�n. Por favor guarde el siguiente contenido en config.php y s�balo si es necesario.';
$lang['ShowResultsAs'] = 'Mostrar resultados como';
$lang['ShowMode-topics'] = 'Temas';
$lang['ShowMode-posts'] = 'Mensajes';
$lang['Mode-and'] = 'Todas las palabras clave (Y)';
$lang['Mode-or'] = 'Cualquier palabra clave (O)';
$lang['ExactMatch'] = 'Coincidencia exacta';
$lang['IncludeGuests'] = 'Incluyendo invitados';
$lang['Top'] = 'Arriba';
$lang['Bottom'] = 'Abajo';
$lang['Action'] = 'Accion';
$lang['AntiSpamQuestion'] = 'Pregunta Anti-spam';
$lang['AntiSpamQuestionInfo'] = 'Como una medida anti-spam, necesitara responder esta pregunta correctamente para acceder a este componente del foro. Solo se har� una pregunta por sesi�n. Gracias por su comprensi�n.';
$lang['Question'] = 'Pregunta';
$lang['Answer'] = 'Respuesta';
$lang['AntiSpamQuestionMathPlus'] = 'Cuanto es %d + %d?';
$lang['AntiSpamQuestionMathMinus'] = 'Cuanto es %d - %d?';
$lang['AntiSpamWrongAnswer'] = 'El resultado enviado es incorrecto. Por favor envi� el resultado correcto para acceder a este componente.';

?>
