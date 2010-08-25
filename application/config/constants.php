<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
|--------------------------------------------------------------------------
| File and Directory Modes
|--------------------------------------------------------------------------
|
| These prefs are used when checking and setting modes when working
| with the file system.  The defaults are fine on servers with proper
| security, but you may wish (or even need) to change the values in
| certain environments (Apache running a separate process for each
| user, PHP under CGI with Apache suEXEC, etc.).  Octal values should
| always be used to set the mode correctly.
|
*/
define('FILE_READ_MODE', 0644);
define('FILE_WRITE_MODE', 0666);
define('DIR_READ_MODE', 0755);
define('DIR_WRITE_MODE', 0777);

/*
|--------------------------------------------------------------------------
| File Stream Modes
|--------------------------------------------------------------------------
|
| These modes are used when working with fopen()/popen()
|
*/

define('FOPEN_READ', 				'rb');
define('FOPEN_READ_WRITE',			'r+b');
define('FOPEN_WRITE_CREATE_DESTRUCTIVE', 	'wb'); // truncates existing file data, use with care
define('FOPEN_READ_WRITE_CREATE_DESTRUCTIVE', 	'w+b'); // truncates existing file data, use with care
define('FOPEN_WRITE_CREATE', 			'ab');
define('FOPEN_READ_WRITE_CREATE', 		'a+b');
define('FOPEN_WRITE_CREATE_STRICT', 		'xb');
define('FOPEN_READ_WRITE_CREATE_STRICT',	'x+b');


/*
|--------------------------------------------------------------------------
| NOMBRE DE LAS TABLAS (BASE DE DATO)
|--------------------------------------------------------------------------
*/
define('TBL_USERS',              'users');
define('TBL_USERS_CLUB',         'users_club');
define('TBL_USERS_CLUB_PIC',     'users_club_picgallery');
define('TBL_USERS_CLUB_VID',     'users_club_videogallery');
define('TBL_USERS_DEP',          'users_dep');
define('TBL_USERS_DEP_DISC',     'users_dep_disc');
define('TBL_USERS_DEP_LANG',     'users_dep_lang');
define('TBL_USERS_DEP_PIC',      'users_dep_picgallery');
define('TBL_USERS_DEP_VID',      'users_dep_videogallery');
define('TBL_USERS_PREPFIS',      'users_prepfisico');
define('TBL_USERS_PREPFIS_PIC',  'users_prepfisico_picgallery');
define('TBL_USERS_PREPFIS_VID',  'users_prepfisico_videogallery');
define('TBL_USERS_REPR',         'users_repr');
define('TBL_USERS_REPR_LANG',    'users_repr_lang');
define('TBL_USERS_REPR_PIC',     'users_repr_picgallery');
define('TBL_USERS_REPR_VID',     'users_repr_videogallery');
define('TBL_USERS_SPONSORS',     'users_sponsors');
define('TBL_USERS_SPONSORS_PIC', 'users_sponsors_picgallery');
define('TBL_USERS_SPONSORS_VID', 'users_sponsors_videogallery');
define('TBL_USERS_TRAINER',      'users_trainer');
define('TBL_USERS_TRAINER_PIC',  'users_trainer_picgallery');
define('TBL_USERS_TRAINER_VID',  'users_trainer_videogallery');

define('TBL_LIST_COUNTRY',  'list_country');
define('TBL_LIST_STATES',   'list_states');
define('TBL_LIST_TIPODOC',  'list_tipodoc');
define('TBL_LIST_PASSPORT', 'list_passport');
define('TBL_LIST_LANG',     'list_lang');
define('TBL_LIST_TIPODISC', 'list_tipodisc');
define('TBL_LIST_WORKS',    'list_works');
define('TBL_LIST_SPORTS',   'list_sports');
define('TBL_LIST_CARGO',    'list_cargo');
define('TBL_LIST_RUBRO',    'list_rubro');

define('TBL_CONTENT',  'content');


/*
|--------------------------------------------------------------------------
| MENSAJES DE ERROR PARA UPLOAD
|--------------------------------------------------------------------------
*/
define('ERR_UPLOAD_NOTUPLOAD', 'El archivo no ha podido llegar al servidor.');
define('ERR_UPLOAD_MAXSIZE', 'El tamaño del archivo debe ser menor a %s MB.');
define('ERR_UPLOAD_FILETYPE', 'El tipo de archivo es incompatible.');

/*
|--------------------------------------------------------------------------
| EMAIL FORM REGISTRO
|--------------------------------------------------------------------------
*/
$msg = '<p>¡Bienvenido!</p>
    
<p>¡Acabas de registrarte en LexerSports.com!</p>

<p>En LexerSports podrás publicar, mantener y actualizar totalmente gratis tu Currículum Vitae Deportivo, registrando tu Carrera Deportiva con el fin de ofrecer al mundo todo tu talento!</p>
 
<p>Para completar tu registro, sigue este enlace:
{link}<br />
(Este enlace nos confirma que ningún tercero te ha registrado sin tu consentimiento)</p>

<p>No olvides, tus datos para iniciar sesión en LexerSports son:</p>

Usuario: {email}<br />
Clave: {password}

<p>Empieza ya a disfrutar de todos los beneficios que te brinda LexerSports!</p>

¡Gracias!
';

define('EMAIL_REG_FROM_MAIL', 'no-reply@lexersports.com');
define('EMAIL_REG_FROM_NAME', 'LexerSports.com');
define('EMAIL_REG_SUBJECT', 'Confirmación de Registro en LexerSports!');
define('EMAIL_REG_MESSAGE', $msg);

/*
|--------------------------------------------------------------------------
| EMAIL RECORDAR CONTRASEÑA
|--------------------------------------------------------------------------
*/
$msg = "Hola!<br /><br />";
$msg.= "¿No recuerda su contrase&ntilde;a?<br />";
$msg.= "Puede sucederle a cualquiera.<br /><br />";
$msg.= "Por favor abra este link en su navegador:<br /><br />";
$msg.= '<a href="{link}">{link}</a><br /><br />';
$msg.= 'Esto resetear&aacute; su contrase&ntilde;a<br />';
$msg.= 'Usted puede luego ingresar y cambiarla por alguna que recuerde.<br /><br />';
$msg.= 'Atentamente,<br />';
$msg.= 'LexerSports.com';

define('EMAIL_RP_FROM', 'no-reply@lexersports.com');
define('EMAIL_RP_NAME', 'LexerSports.com');
define('EMAIL_RP_SUBJECT', 'Resetear su contraseña de AlquileresTemporarios.org');
define('EMAIL_RP_MESSAGE', $msg);

/*
|--------------------------------------------------------------------------
| EMAIL FORM CONTACTO
|--------------------------------------------------------------------------
*/
$msg = '<b>Nombre:</b> %s<br /><br />';
$msg = '<b>Email:</b> %s<br /><br />';
$msg.= '<b>Consulta:</b><hr color="#000000" />%s';
define('EMAIL_CONTACT_SUBJECT', 'Formulario de Consulta');
define('EMAIL_CONTACT_MESSAGE', $msg);


/*
|--------------------------------------------------------------------------
| UPLOAD FILE
|--------------------------------------------------------------------------
*/
define('UPLOAD_FILETYPE', 'gif|jpg|png');
define('UPLOAD_MAXSIZE', 2048); //Expresado en Kylobytes

define('UPLOAD_PATH_GALLERY', './uploads/gallery/');
define('UPLOAD_PATH_CV', './uploads/cv/');

define('IMAGE_CV_THUMB_WIDTH', 200);
define('IMAGE_CV_THUMB_HEIGHT', 250);
define('IMAGE_GALLERY_THUMB_WIDTH', 100);
define('IMAGE_GALLERY_THUMB_HEIGHT', 80);
define('IMAGE_GALLERY_ORIGINAL_WIDTH', 450);
define('IMAGE_GALLERY_ORIGINAL_HEIGHT', 300);

/*
|--------------------------------------------------------------------------
| METADATA TITLE
|--------------------------------------------------------------------------
*/
define('TITLE_GLOBAL', 'Lexer Sports');
define('TITLE_INDEX', '');

/*
|--------------------------------------------------------------------------
| METADATA KEYWORDS
|--------------------------------------------------------------------------
*/
define('META_KEYWORDS_GLOBAL', '');
define('META_KEYWORDS_INDEX', '');


/*
|--------------------------------------------------------------------------
| METADATA DESCRIPTIONS
|--------------------------------------------------------------------------
*/
define('META_DESCRIPTION_GLOBAL', '');
define('META_DESCRIPTION_INDEX', '');



/* End of file constants.php */
/* Location: ./system/application/config/constants.php */