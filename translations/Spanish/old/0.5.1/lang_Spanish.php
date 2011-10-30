<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/lang_Spanish.php,v 1.70 2005/05/21 16:31:22 pc_freak Exp $
	
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
#$lang['character_encoding'] = 'iso-8859-1';
#$lang['language_code'] = 'es';
#$lang['text_direction'] = 'ltr';

//
// Define translations
//
$lang['Home'] = 'Home';
$lang['YourPanel'] = 'Tu panel';
$lang['Register'] = 'Registrarse';
$lang['FAQ'] = 'FAQ';
$lang['Search'] = 'Buscar';
$lang['ActiveTopics'] = 'Topics Activos';
$lang['LogIn'] = 'Loguearse';
$lang['LogOut'] = 'Desloguearse (%s)';
$lang['MemberList'] = 'Lista de Miembros';
$lang['StaffList'] = 'Lista del Staff';
$lang['Statistics'] = 'Estad�sticas';
$lang['ContactAdmin'] = 'Contactar Admin';
$lang['Forum'] = 'Foro';
$lang['Topics'] = 'Topics';
$lang['Posts'] = 'Posts';
$lang['LatestPost'] = '�ltimo Post';
$lang['RSSFeed'] = 'RSS Feed';
$lang['NewPosts'] = 'Nuevos posts';
$lang['NoNewPosts'] = 'No hay nuevos posts';
$lang['LockedNewPosts'] = 'Bloqueados (nuevos posts)';
$lang['LockedNoNewPosts'] = 'Bloqueados (no hay nuevos posts)';
$lang['Locked'] = 'Bloqueados';
$lang['LastLogin'] = '�ltimo login';
$lang['VariousInfo'] = 'Informaci�n Varia';
$lang['IndexStats'] = 'Esta tabla contiene %d posts en %d topics posteados por %d miembros.';
$lang['NewestMemberExtended'] = 'Demos la bienvenida a: %s.';
$lang['UsersOnline'] = 'Hab�a %d miembros (%d escondidos) y %d invitados conectados en los �ltimos %d minutos.';
$lang['Username'] = 'Nombre de Usuario';
$lang['CurrentPassword'] = 'Contrase�a Actual';
$lang['UserID'] = 'User ID';
$lang['NoSuchForum'] = 'El foro %s no existe en esta tabla!';
$lang['WrongPassword'] = 'Lo siento, pero este password no es correcto! Pide un nuevo password mediante el formulario de login, si lo olvidaste.';
$lang['Reset'] = 'Reset';
$lang['SendPassword'] = 'Enviame un nuevo password';
$lang['RegisterNewAccount'] = 'Registrar una nueva cuenta';
$lang['RememberMe'] = 'Recordarme';
$lang['Yes'] = 'Si';
$lang['No'] = 'No';
$lang['NotActivated'] = 'Tu cuenta %s todav�a no ha sido activada. Porfavor consulta tu correo para activar tu cuenta.';
$lang['Error'] = 'Error';
$lang['Profile'] = 'Perfil de %s';
$lang['Level'] = 'Nivel';
$lang['Administrator'] = 'Administrador';
$lang['Moderator'] = 'Moderador';
$lang['Registered'] = 'Registrado';
$lang['Email'] = 'Direcci�n de correo';
$lang['ContactInfo'] = 'Informaci�n de contacto';
$lang['Password'] = 'Contrase�a';
$lang['PasswordAgain'] = 'Contrase�a (otra vez)';
$lang['EverythingRequired'] = '�Todo los campos son requeridos!';
$lang['RegisteredNotActivated'] = 'Tu cuenta %s ha sido creada. Un correo ha sido enviado a %s con las instrucciones para activar tu cuenta. Necesitas activarla antes de loguearte.';
$lang['RegisteredActivated'] = 'Tu cuenta %s ha sido creada. Un correo ha sido enviado a  %s con las instrucciones. Te puedes loguear de todas formas ahora.';
$lang['Never'] = 'Nunca';
$lang['Member'] = 'Miembro';
$lang['RegistrationActivationEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Acabas de registrar una cuenta con este nombre: [account_name], pero todav�a no esta activa. Porfavor clickea en el link inferior para activarla:

[activate_link]

o copia y pega en tu navegador. Una vez hecho esto, ya puedes loguearte:

login: [account_name]
contrase�a: [password]

Si olvidas el password, puedes pedir otro en el formulario de login. Gracias por registrate!

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdActivationEmailSubject'] = 'Nuevo password';
$lang['NoForums'] = 'La tabla esta vac�a. El administrador todav�a no ha creado ning�n foro.';
$lang['AlreadyActivated'] = 'La cuenta con ID %d ha sido activada.';
$lang['Activate'] = 'Activar';
$lang['Activated'] = 'Tu cuenta %s ha sido (re)activada. Ahora puedes loguearte con el nombre y el password que has recibido.';
$lang['WrongActivationKey'] = 'No hemos podido activar la cuenta con ID %d. La clave es incorrecta. �Est�s seguro de no pedir otro password?';
$lang['RegisterIt'] = 'Puedes crearla clickeando el link \'Register\' .';
$lang['BoardClosed'] = 'Tabla cerrada';
$lang['SendpwdActivationEmailBody'] = 'Hola,

Te damos la bienvenida desde  [board_name] . Acabas de pedir un password para esta cuenta: [account_name]. Porfavor pulsa en el link inferior para reactivarla:

[activate_link]

o copy y pega en tu navegador. Una vez hecho, tu puedes loguearte:

login: [account_name]
contrase�a: [password]

Si olvidas tu password, puedes pedir uno en el formulario de login. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailBody'] = 'Hola,

Te damos la bienvenida desde  [board_name] . Acabas de pedir un nuevo password para esta cuenta: [account_name]. Puedes loguearte usando este login y password:

login: [account_name]
contrase�a: [password]

Si olvidas la contrase�a, puedes pedir otro en el formulario de login. 

[board_name]
[board_link]
[admin_email]';
$lang['SendpwdEmailSubject'] = 'Nuevo password';
$lang['SendpwdActivated'] = 'Tu nuevo password para tu cuenta %s ha sido enviado a %s. Ya puedes loguearte con el nuevo password.';
$lang['SendpwdNotActivated'] = 'El nuevo password para tu cuenta %s ha sido enviado a %s, junto con la informaci�n para reactivar tu cuenta.';
$lang['ForumIndex'] = '�ndice del foro';
$lang['MissingFields'] = 'Los siguientes campos estan vac�os o son incorrectos: %s.';
$lang['TermsOfUseContent'] = 'Le hacemos saber que todos los post encontrados en esta tabla son opiniones de los autores y no del website\'s webmasters, administradores del foro o moderadores, excepto los posts escritos por ellos.

Te comprometes a no postear contenido ofensivo, obsceno o inapropiado. Tambi�n queda prohibido el contenido que este al margen de la ley en estos foros. Haci�ndolo puede ocurrir que tu cuenta en los foros pueda ser banneada o borrada e incluso tu isp puede tomar medidas contra ti. De todas formas, tu direcci�n IP address es guardada cada vez que realizas un post. Tambi�n estas de acuerdo en que los administradores y moderadores tienen permiso para editar, borrar, mover o bloquear los topics cuando ellos crean que es necesario.

Toda la informaci�n que postees en este foro se almacena en una base de datos para futuras referencias. Los administrados no distribuir�n esta informaci�n sin tu permiso solamente lo har�n por obligaci�n legal. Sin embargo, ni los webmasters, administradores, moderadores, ni el equipo de UseBB pueden hacerse responsables cuando cualquier informaci�n pueda ser robada como resultado de un ataque hacker.

Este foro usa cookies para almacenar informaci�n temporal  en tu ordenador local necesaria por el sistema de foros. Tambi�n, una cookie puede almacenar tu user ID y tu password en un formulario encriptado para activar el logueo autom�tico de cuenta si optas por ello. Si no quieres que se almacene ninguna cookie en tu ordenador, configura tu navegador manualmente inhabilitando las cookies.

Clickeando en el bot�n "Yo acepto", tu aceptas estos t�rminos y condiciones.';
$lang['TermsOfUse'] = 'Condiciones de uso';
$lang['RegistrationActivationEmailSubject'] = 'Activaci�n de cuenta';
$lang['NeedToBeLoggedIn'] = 'Necesitas loguearte para hacer esto. Cliquea en \'Log In\' link para loguearte o en \'Register\' para crear una nueva cuenta.';
$lang['WrongEmail'] = 'Lo siento, pero %s no es la direcci�n de correo correcta de la cuenta %s. Si no puedes recordad tu direcci�n de correo, porfavor contacta con el administador de los foros.';
$lang['Topic'] = 'Topic';
$lang['Author'] = 'Autor';
$lang['Replies'] = 'Replies';
$lang['Views'] = 'Views';
$lang['Note'] = 'Note';
$lang['Hidden'] = 'Escondido';
$lang['ACP'] = 'Panel de control Admin';
$lang['SendMessage'] = 'Envia un mensaje';
$lang['NoViewableForums'] = 'No tienes permiso para ver cualquier foro con este nivel de usuario. Si no estas logueado, hazlo. Si estas logueado, probablemente no deber�as estar aqu�.';
$lang['Rank'] = 'Ranking';
$lang['Location'] = 'Localizaci�n';
$lang['Website'] = 'P�gina Web';
$lang['Occupation'] = 'Ocupaci�n';
$lang['Interests'] = 'Intereses';
$lang['MSNM'] = 'MSN Messenger';
$lang['YahooM'] = 'Yahoo Messenger';
$lang['AIM'] = 'AIM';
$lang['ICQ'] = 'ICQ';
$lang['Jabber'] = 'Jabber';
$lang['BannedIP'] = 'Tu direcci�n IP %s ha sido baneada de esta tabla.';
$lang['Avatar'] = 'Avatar';
$lang['AvatarURL'] = 'Avatar URL';
$lang['BannedUser'] = 'Cuenta de usuario baneada';
$lang['BannedUserExplain'] = 'Tu cuenta %s ha sido baneada de este foro. La raz�n es:';
$lang['BannedUsername'] = 'EL usuario %s ha sido baneado de este foro. Porfavor elija otro.';
$lang['BannedEmail'] = 'La direcci�n de correo %s ha sido baneada. Porfavor elija otra.';
$lang['PostsPerDay'] = 'Post por d�a';
$lang['BoardClosedOnlyAdmins'] = 'S�lo los administradores pueden loguearse cuando el foro esta cerrado.';
$lang['NoPosts'] = 'Ning�n Posts';
$lang['NoActivetopics'] = 'Esta tabla no tiene actualmente ning�n post activo.';
$lang['AuthorDate'] = 'Por %s en %s';
$lang['ByAuthor'] = 'Por: %s';
$lang['OnDate'] = 'en: %s';
$lang['Re'] = 'Re:';
$lang['MailForm'] = 'Envia un correo a %s';
$lang['SendEmail'] = 'Envia un mensaje a %s';
$lang['NoMails'] = 'Este usuario ha elegido no recibir ning�n correo.';
$lang['UserEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . El usuario [username] ha enviado este mensaje desde el foro. El mensaje es el siguiente.

[board_name]
[board_link]
[admin_email]

-----

[body]';
$lang['EmailSent'] = '�Tu correo a %s se ha realizado con �xito!';
$lang['To'] = 'a';
$lang['From'] = 'Desde';
$lang['Subject'] = 'Asunto';
$lang['Body'] = 'Cuerpo del mensaje';
$lang['Send'] = 'Enviar';
$lang['EditProfile'] = 'Editar Perfil';
$lang['EditOptions'] = 'Editar Opciones';
$lang['EditPasswd'] = 'Editar Password';
$lang['PanelHome'] = 'Panel Control';
$lang['NewEmailNotActivated'] = 'El perfil ha sido editado con �xito. Al haber cambiado el correo electr�nico de tu cuenta %s, es necesario reactivarla. Un correo se te ha enviado %s con las instrucciones necesarias. Ahora usted saldr� de la sesi�n.';
$lang['Required'] = 'Requerido';
$lang['ViewProfile'] = 'Ver Perfil';
$lang['NewEmailActivationEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Usted acaba de cambiar la direcci�n de correo electr�nico de su cuenta [account_name], pero no ha sido reactivada todav�a. Porfavor haga click en el link inferior para reactivarla:

[activate_link]

o copie y pegue en su navegador. Despu�s puede loguearse con este login y password:

login: [account_name]
contrase�a: [password]
Si olvidas tu contrase�a, Si olvidas tu contrase�a puedes pedir otra en el formulario de login.

[board_name]
[board_link]
[admin_email]';
$lang['NewEmailActivationEmailSubject'] = 'Reactivaci�n de la Cuenta';
$lang['Signature'] = 'Firma';
$lang['SessionInfo'] = 'Informaci�n de la Sesi�n';
$lang['SessionID'] = 'Session ID';
$lang['IPAddress'] = 'Direcci�n IP';
$lang['Seconds'] = 'Segundos';
$lang['Updated'] = 'Actualizado';
$lang['Pages'] = 'P�ginas';
$lang['AutoLogin'] = 'Auto login';
$lang['Enabled'] = 'Activado';
$lang['Disabled'] = 'Desactivado';
$lang['Enable'] = 'Activar';
$lang['Disable'] = 'Desactivar';
$lang['AutoLoginSet'] = 'El auto login ha sido activado.';
$lang['AutoLoginUnset'] = 'El auto login ha sido desactivado.';
$lang['RegistrationEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Acabas de registrar una cuenta con este nombre [account_name]. Puedes loguearte usando login y contrase�a:

login: [account_name]
contrase�a: [password]

Si olvidas la contrase�a, puedes pedir una en el formulario de login. �Gracias por registrate!

[board_name]
[board_link]
[admin_email]';
$lang['RegistrationEmailSubject'] = 'Registro de Cuenta';
$lang['PublicEmail'] = 'Cuenta de correo p�blica';
$lang['PublicLastLogin'] = '�ltima vez que alguien se logueo';
$lang['DateFormat'] = 'Formato Fecha';
$lang['DateFormatHelp'] = 'El formato de fecha es igual a %s funci�n en PHP.';
$lang['Again'] = 'Otra vez';
$lang['NewPassword'] = 'Nueva contrase�a';
$lang['NewPasswordAgain'] = 'Nueva contrase�a (otra vez)';
$lang['PasswordEdited'] = 'Tu contrase�a ha sido editada correctamente.';
$lang['DetailedOnlineList'] = 'Lista detallada online';
$lang['Detailed'] = 'Detailed';
$lang['OptionsEdited'] = 'Las opciones del foro se han editado correctamente.';
$lang['ProfileEdited'] = 'Tu perfil se ha editado correctamente.';
$lang['Started'] = 'Comenzado';
$lang['Minutes'] = 'Minutps';
$lang['Hours'] = 'Houras';
$lang['Days'] = 'D�as';
$lang['Weeks'] = 'Semanas';
$lang['TotalTime'] = 'Tiempo total';
$lang['NoTopics'] = 'Este foro no contiene topics. �Podr�as ser el primero en postear!';
$lang['NotPermitted'] = 'No tienes los permisos adecuados para hacer esto. Si tienes alguna duda, contacta con el Administrador.';
$lang['Language'] = 'Lenguaje';
$lang['Template'] = 'Aspecto';
$lang['NoSuchMember'] = 'El socio %s no existe en este foro.';
$lang['FeatureDisabledBecauseCookiesDisabled'] = 'Esta caracter�stica ha sido deshabilitada porque este foro no puede almacenar cookies con tu navegador actual.';
$lang['LogOutConfirm'] = '�Est�s seguro de que quieres salir? �El autologin ser� eliminado!';
$lang['Cancel'] = 'Cancelar';
$lang['Timezone'] = 'Zona horaria';
$lang['DST'] = 'Activar Horario de Verano';
$lang['Sticky'] = 'Sticky';
$lang['PostNewTopic'] = 'Nuevo Topic';
$lang['ForumIsLocked'] = 'Foro bloqueado';
$lang['NoSuchTopic'] = 'El topic %s no existe en este foro.';
$lang['PostReply'] = 'Post Reply';
$lang['TopicIsLocked'] = 'Topic esta bloqueado';
$lang['Post'] = 'Post';
$lang['Edit'] = 'Editar';
$lang['Delete'] = 'Borrar';
$lang['Quote'] = 'Cuota';
$lang['Wrote'] = '%s escribi�';
$lang['ViewingIP'] = 'IP: %s';
$lang['TopicIsLockedExplain'] = 'En el topic que estas intentado postear esta bloqueado. S�lo gente autorizada puede postear.';
$lang['Content'] = 'Contenido';
$lang['Options'] = 'Opciones';
$lang['EnableBBCode'] = 'Activar BBCode.';
$lang['EnableSmilies'] = 'Activar smilies.';
$lang['EnableSig'] = 'Activar firma.';
$lang['EnableHTML'] = 'Activar HTML.';
$lang['LockTopicAfterPost'] = 'Bloquear topic despu�s de postear.';
$lang['Guest'] = 'Invitado';
$lang['BackToPrevious'] = 'Volver a la p�gina anterior';
$lang['NoSuchPost'] = 'El post %s ya no existe en este foro.';
$lang['UserPostedImage'] = 'El usuario poste� una imagen';
$lang['ForumIsLockedExplain'] = 'Este foro esta bloqueado. S�lo gente autorizada puede postear.';
$lang['MakeTopicSticky'] = 'Haz este topic sticky.';
$lang['QuickReply'] = 'Reply r�pido';
$lang['ReturnToTopicAfterPosting'] = 'Volver al topic despu�s de postear';
$lang['ModeratorList'] = 'Moderadores: %s.';
$lang['Nobody'] = 'Nadie';
$lang['DeleteTopic'] = 'Borrar topic';
$lang['MoveTopic'] = 'Mover topic';
$lang['LockTopic'] = 'Bloquear topic';
$lang['UnlockTopic'] = 'Desbloquear topic';
$lang['MakeSticky'] = 'Hacer sticky';
$lang['ConfirmDeleteTopic'] = '� Est�s seguro de querer borrar el topic %s en el foro %s? �Esto ser� irreversible!';
$lang['MakeNormalTopic'] = 'Haz normal el topic';
$lang['OldForum'] = 'Foro antiguo';
$lang['NewForum'] = 'Nuevo foro';
$lang['IAccept'] = 'Yo acepto';
$lang['IDontAccept'] = 'No acepto';
$lang['OpenLinksNewWindow'] = 'Abrir links en ventanas nuevas';
$lang['HideAllAvatars'] = 'Ocultar todos los avatares';
$lang['HideUserinfo'] = 'Ocultar la informaci�n del usuario';
$lang['HideAllSignatures'] = 'Ocultar todas las firmas';
$lang['HideFromOnlineList'] = 'Ocultar de la lista online';
$lang['PageLinks'] = 'P�gina: %s';
$lang['Preview'] = 'Previsualizar';
$lang['DeletePost'] = 'Borrar post';
$lang['ConfirmDeletePost'] = '�Est�s seguro de que querer borrar este post en el topic %s? �Esto ser� irreversible!';
$lang['EditPost'] = 'Editar post';
$lang['PostEditInfo'] = '�ltimo en editar %s en %s.';
$lang['PasswdInfo'] = 'La contrase�a s�lo puede contener car�cteres alfanum�ricos y una longitud m�nima de %d car�cteres.';
$lang['SubscribeTopic'] = 'Suscribirse';
$lang['UnsubscribeTopic'] = 'Desuscribirse';
$lang['NewReplyEmailBody'] = 'Hola,

Te damos la bienvenida desde [board_name] . Alguien ([poster_name]) poste� una r�plica al topic que esta subscr�to ("[topic_title]"). Para ver la r�plica, porfavor clickea en el link siguiente: [topic_link].

Clickea en el siguiente link si quieres desuscribirte (requiere login): [unsubscribe_link].

[board_name]
[board_link]
[admin_email]';
$lang['NewReplyEmailSubject'] = 'Nueva R�plica en "%s"';
$lang['SubscribedTopic'] = 'Ahora est�s suscrito a este topic.';
$lang['UnsubscribedTopic'] = 'Ya no est�s suscrito a este topic.';
$lang['SubscribeToThisTopic'] = 'Suscribirse a este topic.';
$lang['OK'] = 'Aceptar';
$lang['Subscriptions'] = 'Suscripciones';
$lang['NoSubscribedTopics'] = 'Actualmente no est�s suscrito a ning�n topic.';
$lang['LatestUpdate'] = '�ltima actualizaci�n';
$lang['Unknown'] = 'Desconocido';
$lang['PostingTopic'] = 'Posteando un topic en %s';
$lang['PostingReply'] = 'Posteando una r�plica en %s';
$lang['MovingTopic'] = 'Moviendo topic %s';
$lang['DeletingTopic'] = 'Borrando topic %s';
$lang['TrashingTopic'] = 'Eliminando topic %s';
$lang['EditingPost'] = 'Editando post en %s';
$lang['DeletingPost'] = 'Borrando post en %s';
$lang['DebugMode'] = 'Modo Debug';
$lang['ParseTime'] = 'Parse time';
$lang['ServerLoad'] = 'Carga del Servidor';
$lang['TemplateSections'] = 'Secci�n Aspecto (temas)';
$lang['SQLQueries'] = 'SQL queries';
$lang['RealName'] = 'Nombre Real';
$lang['Skype'] = 'Skype';
$lang['Administrators'] = 'Administradores';
$lang['Moderators'] = 'Moderadores';
$lang['SortBy'] = 'Ordenado por: %s';
$lang['TopicReview'] = 'Revisi�n de Topic';
$lang['ViewMorePosts'] = 'Ver m�s posts';
$lang['DisplayedName'] = 'Nombre mostrado';
$lang['UsernameInfo'] = 'El nombre mostrado solo puede tener car�cteres alfanum�ricos, _ y - (no espacios).';
$lang['Code'] = 'C�digo';
$lang['Img'] = 'Imagen';
$lang['URL'] = 'URL';
$lang['Color'] = 'Color';
$lang['Size'] = 'Tama�o';
$lang['ViewingForum'] = 'Viendo foro: %s.';
$lang['ViewingTopic'] = 'Viendo topic: %s.';
$lang['FloodIntervalWarning'] = 'El administrador ha especificado que s�lo puedes postear con un int�rvalo de %d segundos. Porfavor espere y repita el env�o un poco m�s tarde.';
$lang['AutoSubscribe'] = 'Auto suscribir';
$lang['OnPostingNewTopics'] = 'En los nuevos topics';
$lang['OnPostingNewReplies'] = 'En las nuevas r�plicas';
$lang['UnsubscribeSelected'] = 'Desuscribirse de lo seleccionado';
$lang['SelectedTopicsUnsubscribed'] = 'Ahora ya no est�s suscrito a los topics seleccionados.';
$lang['TrashTopic'] = 'Topic basura';
$lang['ConfirmTrashTopic'] = '�Est�s seguro de que quieres mover el topic %s del foro %s a la basura?';
$lang['Birthday'] = 'Cumplea�os';
$lang['Age'] = 'Edad';
$lang['Month'] = 'Mes';
$lang['Day'] = 'D�a';
$lang['PoweredBy'] = '%s gracias a %s';
$lang['GeneralStats'] = 'Estad�sticas generales';
$lang['Members'] = 'Miembros';
$lang['TopicsPerDay'] = 'Topics por d�a';
$lang['MembersPerDay'] = 'Miembros por d�a';
$lang['BoardStarted'] = 'Tabla empezada';
$lang['BoardAge'] = 'Tiempo de la tabla';
$lang['NewestMember'] = 'Nuevo Miembro';
$lang['MostActiveTopics'] = 'Topics m�s activos';
$lang['MostViewedTopics'] = 'Topics m�s vistos';
$lang['PostsPerMember'] = 'Posts por miembro';
$lang['PostsPerForum'] = 'Posts por foro';
$lang['Categories'] = 'Categor�as';
$lang['Forums'] = 'Foros';
$lang['TopicsPerMember'] = 'Topics por miembros';
$lang['TopicsPerForum'] = 'Topics por foros';
$lang['MostActiveMembers'] = 'Miembros m�s activos';
$lang['MostActiveForums'] = 'Foros m�s activos';
$lang['DisplayedNameTaken'] = 'Lo siento, %s ya ha sido registrado como login, escoja otro.';
$lang['SearchKeywords'] = 'Buscar palabras clave';
$lang['SearchMode'] = 'Modo de b�squeda';
$lang['SearchAuthor'] = 'Buscar por autor';
$lang['SearchForums'] = 'Buscar foro';
$lang['AllForums'] = 'Todos los foros';
$lang['AllKeywords'] = 'Todas las palabras clave';
$lang['OneOrMoreKeywords'] = 'Una o m�s palabras clave';
$lang['NoSearchResults'] = 'Lo siento, pero no hubo resultados con este criterio.';
$lang['SearchMembersPosts'] = 'Buscar posts';
$lang['CurrentPage'] = 'P�gina actual';

?>
