<?php

/*
	Copyright (C) 2003-2005 UseBB Team
	http://www.usebb.net
	
	$Header: /cvsroot/usebb/UseBB/languages/faq_Spanish.php,v 1.5 2005/05/18 09:22:12 pc_freak Exp $
	
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
// Initialize a new faq holder array
//
$faq = array();

//
// Define headings and questions
//

$faq[] = array('--', 'Cuentas de Usuario');
$faq[] = array('�Necesito Registrarme?', 'Para postear en el foro debes estar registrado, esto depende de si el administrador del foro ha activado la opci�n de que los usuarios invitados puedan postear o no (puede ser por secci�n). Generalmente, registrarse es una buena idea y te da muchas caracter�sticas adicionales.');
$faq[] = array('�Cuales son los beneficios de registrarse?', 'Lo primero de todo, Conseguiras una cuenta personal con tu nick que sera �nico en el foro y s�lo disponible para ti. Tambi�n tendr�s un perfil personal donde puedes a�adir informaci�n sobre ti y si quieres ajustar el foro como desees utilizando las opciones de edici�n, en donde puedes elegir el lenguaje y el aspecto del foro. Una interesante caracter�stica es la posibilidad de suscribirte a los topics.');
$faq[] = array('�Qu� necesito para registrar una cuenta?', 'Para registrar, Necesitas escojer un nick(nombreusuario) que lo utilizaras para entrar en el foro. Si quieres, puedes usar tu nombre real como nick. Nota:  puedes cambiar el nombre usuario despu�s de registrarte, tambi� puedes cambiar el nombre que se muestra en cualquier momento mientras el nombre de usuario sigue siendo el mismo. Tambi�n necesitas tener una direcci�n de correo electr�nico que funcione ( es necesario para activar tu cuenta) y elegir una contrase�a (que podr�s cambiar cuando quieras).');
$faq[] = array('�No he recibido el correo de activaci�n!', 'Entonces podras loguearte sin activar nada. Si no es eso, intenta pedir una nueva contrase�a. Si esto tampoco funciona, contacta con el administrador.');
$faq[] = array('�Qu� ocurre si olvido mi informaci�n para loguearme o mi direcci�n de correo no funciona?', 'Puedes pedir una nueva contrase�a mediante el link en el formulario de login. Si la direcci�n de correo no funciona o si la has olvidado, conctacta con el administrador. El te dar� la direcci�n de correo con la que te registraste o ajustar� tu cuenta a tu nueva cuenta de correo electr�nico que le facilites.');
$faq[] = array('�Qu�s es un moderador y un administrador?', 'Un moderador es una persona que verifica uno o m�s foros para mantenerlos correctamente funcionando.�l/Ella deber�a tambi�n ayudar a los usuarios en el foro. Un administrador es un moderador en todas las tablas y foros, tambi�n �l/ella puede asignar moderadores y cambiar todas las opciones de configuraci�n de los foros.');
$faq[] = array('�Como puedo llegar a ser un moderador o administrador?', 'Normalmente, no puedes, pero intenta preguntar al administrador a lo mejor esta interesado.');
$faq[] = array('�Puedo cambiar mi nivel o rank?', 'No, s�lo los administradores pueden cambiar el rank.');

$faq[] = array('--', 'Suscripciones');
$faq[] = array('�C�mo puedo suscribirme a los topics?', 'En la parte de abajo de cada topic, puedes encontrar un link para suscribirte. Puedes solamente suscribirte a topics si est�s logueado.');
$faq[] = array('�C�mo puedo dejar de estar suscrito a un topic?', 'Puedes desuscribirte clickeando  en el link desuscribir o en la vista de suscripciones que esta en tu panel.');

$faq[] = array('--', 'Tu perfil');
$faq[] = array('�C�mo puedo cambiar mi nombre de usuario?', 'No puedes cambiar tu nombre de usuario (login) tu mismo. Solamente el administrador de la tabla tiene permisos suficientes para hacerlo. Sin embargo se puede cambiar el nombre que muestras en cualquier momento.');
$faq[] = array('�Cu�l es la diferencia entre nombre de usuario, nombre que se muestra y nombre real?', 'El nombre de usuario, es el que utilizas para loguearte en los foros, es �nico, y no puedes cambiarlo. El nombre que muestras (cuando te registras es el mismo que el nombre de usuario) es el nombre que muestras a la gente. Siempre podr�s cambiar este nombre. Nota: Siempre vas a tener que loguearte con el mismo nombre de usuario. El nombre real, que es opcional, s�lo se muestra en la p�gina del perfil.');
$faq[] = array('�No tengo traducci�n del foro a mi idioma!', 'Pregunta al administrador si le gustar�a a�adir una traducci�n a tu lenguaje.');
$faq[] = array('�Por qu� no puedo seleccionar otro aspecto para el foro?', 'Probablemente, no existan otros aspectos para el foro.');

$faq[] = array('--', 'Topics and Posts');
$faq[] = array('�Qu� son los topics y los posts?', 'Un topic es un grupo de mensajes (posts) en un foro. si clickeas en el nombre del foro, puedes ver una lista de topics.');
$faq[] = array('�Qu� son los topics stiycky?', 'Los topics Sticky son para estar siempre arriba en la vista del foro. Generalmente, los usuarios normales no pueden crear topics sticky, pero moderadores y administradores si pueden.');
$faq[] = array('�Por qu� no puedo postear nuevos posts o replies?', 'Si no aparece el link para crear nuevos topics o post, no tienes permiso para crear nuevos topics o post en el foro. Esto es porque el foro o el topic han sido cerrados por el administrador o moderador. Si tienes duda, contacta con el administador.');
$faq[] = array('�Qu� son BBCode y smilies?', 'BBCode son etiquetas que puedes usar para a�adir ciertos elementos al post. Intenta algunas y clickea en preview para ver el efecto. Smilies se usan para expresar emociones en tus posts.');
$faq[] = array('�El contador de posts no se incrementa cuando posteo!', 'En ciertos foros, el contador ha sido deshabilitado. Esto se hace a modo de test o para chat general.');
$faq[] = array('�Por qu� tengo que esperar un cierto tiempo entre posteo y posteo?', 'La protecci�n contra flood se usa para combatir el spamming o flooding contra el servidor mediante los posteos masivos. Porfavor espera un momento y vuelve a enviar el post.');

$faq[] = array('--', 'Varios');
$faq[] = array('�No he recibido ning�n email del foro!', 'El administrador del foro debe haber deshabilitado los mails informativos o tu direcci�n de correo no funciona correctamente.');
$faq[] = array('�Qu� es un RSS feed?', 'RSS feeds se usan para que la informaci�n reciente de una web o forum la puedan leer los lectores de RSS o algunos navegadores.');

$faq[] = array('--', 'Acerca de UseBB');
$faq[] = array('�Qui�n hizo este foro? �Qu� es UseBB?', 'Es un foro, called <em>UseBB</em>, programado por el UseBB team. UseBB es de c�digo abierto liberado bajo la licencia GPL. Puedes bajarte UseBB de <a href="http://www.usebb.net">www.usebb.net</a>. Nota: El administador(s) del foro/p�gina web puede a�adir cualquier funcionalidad libremente.');
$faq[] = array('�Son los creadores del UseBB responsables del foro?', 'No, este foro es mantenido por el website\'s webmaster(s). El UseBB Team no puede hacerse responsable de este foro de ninguna manera.');
$faq[] = array('Si tengo alguna queja de este foro. �A qui�n deber�a dirigirme?', 'Si tienes una queja sobre el software en si, no sobre el contenido, ser�s bienvenido en <a href="http://www.usebb.net">cuentaselo al UseBB Team</a>. Para cualquier otra pregunta, porfavor contacta con el administrador(s) del foro/p�gina web.');

?>
