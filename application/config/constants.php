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
define('TBL_USERS_CLUB_SEDES',        'users_club_sedes');
define('TBL_USERS_CLUB_PIC',     'users_club_picgallery');
define('TBL_USERS_CLUB_VID',     'users_club_videogallery');
define('TBL_USERS_MA_OBSERVACIONES',     'users_ma_observaciones');
define('TBL_USERS_DEP',          'users_dep');
define('TBL_USERS_DEP_DISC',     'users_dep_disc');
define('TBL_USERS_DEP_LANG',     'users_dep_lang');
define('TBL_USERS_DEP_PIC',      'users_dep_picgallery');
define('TBL_USERS_DEP_VID',      'users_dep_videogallery');
define('TBL_USERS_PREPFIS',      'users_prepfisico');
define('TBL_USERS_PREPFIS_PIC',  'users_prepfisico_picgallery');
define('TBL_USERS_PREPFIS_VID',  'users_prepfisico_videogallery');
define('TBL_USERS_REPR',         'users_repr');
define('TBL_USERS_REPR_DEP',     'users_repr_sports');
define('TBL_USERS_CLUB_DEP',     'users_club_sports');
define('TBL_USERS_REPR_LANG',    'users_repr_lang');
define('TBL_USERS_REPR_PIC',     'users_repr_picgallery');
define('TBL_USERS_REPR_VID',     'users_repr_videogallery');
define('TBL_USERS_SPONSORS',     'users_sponsors');
define('TBL_USERS_SPONSORS_PIC', 'users_sponsors_picgallery');
define('TBL_USERS_SPONSORS_VID', 'users_sponsors_videogallery');
define('TBL_USERS_TRAINER',      'users_trainer');
define('TBL_USERS_TRAINER_PIC',  'users_trainer_picgallery');
define('TBL_USERS_TRAINER_VID',  'users_trainer_videogallery');

define('TBL_PERFIL',              'perfil');
define('TBL_PERFIL_EXPERIENCIA',  'perfil_experiencia');
define('TBL_PERFIL_LESION',       'perfil_lesiones');
define('TBL_PERFIL_BECAS',        'perfil_becas');
define('TBL_PERFIL_BEXEO_LICENCIA' ,   'perfil_boxeo_licencia');

define('TBL_HISTORIAL',              'historial');


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
define('TBL_LIST_LESION',   'list_lesion');
define('TBL_LIST_SELECCIONADO',   'list_seleccionado');
define('TBL_LIST_RESISTENCIA',   'list_resistencia');
define('TBL_LIST_FUERZA',   'list_fuerza');
define('TBL_LIST_POTENCIA',   'list_potencia');
define('TBL_LIST_CAPACIDAD',   'list_capacidad');
define('TBL_LIST_SALTOS_SIMPLES',   'list_potencia_simples');
define('TBL_LIST_SALTOS_CONTINUOS',   'list_potencia_continuos');

define('TBL_LIST_VELOCIDAD',   'list_velocidad');
define('TBL_LIST_FLEXIBILIDAD',   'list_flexibilidad');
define('TBL_LIST_COORDINACION',   'list_coordinacion');
define('TBL_LIST_EQUILIBRIO',   'list_equilibrio');
define('TBL_LIST_AGILIDAD',   'list_agilidad');
define('TBL_LIST_OTROS_TEST',   'list_fuerza_otrostest');
define('TBL_LIST_TEST_DINAMICOS',   'list_fuerza_testdinamicos');
define('TBL_LIST_TEST_LEY',   'list_fuerza_testley');



define('TBL_LIST_BOXEO_RESULTADO',   'list_boxeo_resultado');
define('TBL_LIST_BOXEO_CATEGORIA',   'list_boxeo_categoria');

define('TBL_LIST_ARCO_ESPECIALIDAD',   'list_arco_especialidad');
define('TBL_LIST_ARCO_CATEGORIA',   'list_arco_categoria');

define('TBL_LIST_TIRO_MODALIDAD',   'list_tiro_modalidad');
define('TBL_LIST_TIRO_CATEGORIA',   'list_tiro_categoria');



define('TBL_LIST_ATLETISMO_DISCIPLINA',   'list_atletismo_disciplina');
define('TBL_LIST_ATLETISMO_CATEGORIA',   'list_atletismo_categoria');
define('TBL_LIST_MARCIALES_MODALIDAD',   'list_marciales_modalidad');
define('TBL_LIST_BASQUET_POSICION',   'list_basquet_posicion');
define('TBL_LIST_CICLISMO_ESPECIALIDAD',   'list_ciclismo_especialidad');
define('TBL_LIST_CICLISMO_CATEGORIA',   'list_ciclismo_categoria');
define('TBL_LIST_CICLISMO_MODALIDAD',   'list_ciclismo_modalidad');
define('TBL_LIST_ESCALADA_MODALIDAD',   'list_escalada_modalidad');
define('TBL_LIST_FUTBOL_POSICION',   'list_futbol_posicion');
define('TBL_LIST_FUTBOL_CATEGORIA',   'list_futbol_categoria');
define('TBL_LIST_FUTSAL_POSICION',   'list_futsal_posicion');
define('TBL_LIST_FUTSAL_CATEGORIA',   'list_futsal_categoria');
define('TBL_LIST_HALTEROFILIA_CATEGORIA',   'list_halterofilia_categoria');
define('TBL_LIST_HALTEROFILIA_DIVISION',   'list_halterofilia_division');
define('TBL_LIST_HANDBALL_POSICION',   'list_handball_posicion');
define('TBL_LIST_HANDBALL_CATEGORIA',   'list_handball_categoria');
define('TBL_LIST_HOCKEYC_SUPERFICIE',   'list_hockeyc_superficie');
define('TBL_LIST_HOCKEYC_CATEGORIAS',   'list_hockeyc_categoria');
define('TBL_LIST_HOCKEYC_POSICION',   'list_hockeyc_posicion');
define('TBL_LIST_HOCKEYC_GOLPE',   'list_hockeyc_golpe');
define('TBL_LIST_PADEL_GOLPE',   'list_padel_golpe');
define('TBL_LIST_NATACION_MODALIDAD',   'list_natacion_modalidad');
define('TBL_LIST_NATACION_CATEGORIA',   'list_natacion_categoria');
define('TBL_LIST_NATACION_PRUEBA',   'list_natacion_prueba');
define('TBL_LIST_RUGBY_CATEGORIA',   'list_rugbi_categoria');
define('TBL_LIST_TENIS_CATEGORIA',   'list_tenis_categoria');
define('TBL_LIST_RUGBY_POSICION',   'list_rugbi_posicion');
define('TBL_LIST_RUGBY_GOLPE',   'list_rugbi_golpe');
define('TBL_LIST_SOFTBOL_HABILIDAD',   'list_softbol_habilidad');
define('TBL_LIST_SOFTBOL_CATEGORIA',   'list_softbol_categoria');
define('TBL_LIST_SOFTBOL_POSICION',   'list_softbol_posicion');
define('TBL_LIST_SOFTBOL_HABILIDAD_RECURSOS',   'list_softbol_habilidad_recursos');
define('TBL_LIST_VOLEY_POSICION',   'list_voley_posicion');
define('TBL_LIST_VOLEY_CATEGORIA',   'list_voley_categoria');
define('TBL_LIST_VOLEYPLAYA_CATEGORIA',   'list_voleyplaya_categoria');


define('TBL_LIST_CLUB_CATEGORIAS', 'list_club_categoria');


define('TBL_TEST',   'test');


define('TBL_HISTORIAL_MARCIALES','historial_marciales');
define('TBL_HISTORIAL_MARCIALES_TORNEOS','historial_marciales_torneos');
define('TBL_HISTORIAL_MARCIALES_PALMARES','historial_marciales_palmares');

define('TBL_HISTORIAL_CICLISMO','historial_ciclismo');
define('TBL_HISTORIAL_CICLISMO_NACIONALES','historial_ciclismo_nacionales');
define('TBL_HISTORIAL_CICLISMO_INTERNACIONALES','historial_ciclismo_internacionales');
define('TBL_HISTORIAL_CICLISMO_PALMARES','historial_ciclismo_palmares');

define('TBL_HISTORIAL_ATLETISMO','historial_atletismo');
define('TBL_HISTORIAL_ATLETISMO_CATEGORIA_PRUEBA','historial_atletismo_categoria_prueba');
define('TBL_HISTORIAL_ATLETISMO_CATEGORIA','historial_atletismo_categoria');
define('TBL_HISTORIAL_ATLETISMO_PALMARES','historial_atletismo_palmares');
define('TBL_HISTORIAL_ATLETISMO_EVOLUCION','historial_atletismo_evolucion');

define('TBL_HISTORIAL_BASQUET','historial_basquet');
define('TBL_HISTORIAL_BASQUET_DATOS','historial_basquet_datos');
define('TBL_HISTORIAL_BASQUET_PALMARES','historial_basquet_palmares');

define('TBL_HISTORIAL_FUTBOL','historial_futbol');
define('TBL_HISTORIAL_FUTBOL_DATOS','historial_futbol_datos');
define('TBL_HISTORIAL_FUTBOL_PALMARES','historial_futbol_palmares');

define('TBL_HISTORIAL_FUTBOLSALA','historial_futbolsala');
define('TBL_HISTORIAL_FUTBOLSALA_DATOS','historial_futbolsala_datos');
define('TBL_HISTORIAL_FUTBOLSALA_PALMARES','historial_futbolsala_palmares');

define('TBL_HISTORIAL_GOLF','historial_golf');
define('TBL_HISTORIAL_GOLF_TOUR','historial_golf_tour');
define('TBL_HISTORIAL_GOLF_PALMARES','historial_golf_palmares');

define('TBL_HISTORIAL_HALTEROFILIA','historial_halterofilia');
define('TBL_HISTORIAL_HALTEROFILIA_CATEGORIA','historial_halterofilia_categoria');
define('TBL_HISTORIAL_HALTEROFILIA_PALMARES','historial_halterofilia_palmares');

define('TBL_HISTORIAL_BOXEO','historial_boxeo');
define('TBL_HISTORIAL_BOXEO_PELEAS','historial_boxeo_peleas');
define('TBL_HISTORIAL_BOXEO_PALMARES','historial_boxeo_palmares');

define('TBL_HISTORIAL_HOCKEY','historial_hockey');
define('TBL_HISTORIAL_HOCKEY_PALMARES','historial_hockey_palmares');
define('TBL_HISTORIAL_HOCKEY_DATOS','historial_hockey_datos');
define('TBL_HISTORIAL_HOCKEY_TORNEOS','historial_hockey_torneos');


define('TBL_HISTORIAL_HANDBALL','historial_handball');
define('TBL_HISTORIAL_HANDBALL_PALMARES','historial_handball_palmares');
define('TBL_HISTORIAL_HANDBALL_DATOS','historial_handball_datos');
define('TBL_HISTORIAL_HANDBALL_LANZAMIENTOS','historial_handball_lanzamientos');

define('TBL_HISTORIAL_RUGBY','historial_rugby');
define('TBL_HISTORIAL_RUGBY_PALMARES','historial_rugby_palmares');
define('TBL_HISTORIAL_RUGBY_DATOS','historial_rugby_datos');

define('TBL_HISTORIAL_ARCO','historial_arco');
define('TBL_HISTORIAL_ARCO_PALMARES','historial_arco_palmares');
define('TBL_HISTORIAL_ARCO_TORNEOS','historial_arco_torneos');

define('TBL_HISTORIAL_TIRO','historial_tiro');
define('TBL_HISTORIAL_TIRO_PALMARES','historial_tiro_palmares');
define('TBL_HISTORIAL_TIRO_EVENTOS',   'historial_tiro_eventos');

define('TBL_HISTORIAL_VOLEY','historial_voley');
define('TBL_HISTORIAL_VOLEY_PALMARES','historial_voley_palmares');

define('TBL_HISTORIAL_VOLEYPLAYA','historial_voleyplaya');
define('TBL_HISTORIAL_VOLEYPLAYA_PALMARES','historial_voleyplaya_palmares');

define('TBL_HISTORIAL_PADEL','historial_padel');
define('TBL_HISTORIAL_PADEL_PALMARES','historial_padel_palmares');

define('TBL_HISTORIAL_NATACION','historial_natacion');
define('TBL_HISTORIAL_NATACION_COMPETENCIAS','historial_natacion_competencias');
define('TBL_HISTORIAL_NATACION_PALMARES','historial_natacion_palmares');

define('TBL_HISTORIAL_TENIS','historial_tenis');
define('TBL_HISTORIAL_TENIS_FINALES_SINGLES','historial_tenis_finales_singles');
define('TBL_HISTORIAL_TENIS_FINALES_DOBLES','historial_tenis_finales_dobles');
define('TBL_HISTORIAL_TENIS_TITULOS_SINGLES','historial_tenis_titulos_singles');
define('TBL_HISTORIAL_TENIS_TITULOS_DOBLES','historial_tenis_titulos_dobles');
define('TBL_HISTORIAL_TENIS_PALMARES_SINGLES','historial_tenis_palmares_singles');
define('TBL_HISTORIAL_TENIS_PALMARES_DOBLES','historial_tenis_palmares_dobles');

define('TBL_HISTORIAL_SOFTBOL','historial_softball');
define('TBL_HISTORIAL_SOFTBOL_PALMARES','historial_softball_palmares');

define('TBL_REL_SPORTS', 'rel_sports_perfil_historial');
define('TBL_REL_SELECCIONADO', 'rel_sports_to_seleccionado');

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
$msg = '
Hola!<br /><br />
<p>Su contrase&ntilde;a es: <b>{pass}</b></p>

Atentamente,<br />
LexerSports.com
';

define('EMAIL_RP_FROM', 'no-reply@lexersports.com');
define('EMAIL_RP_NAME', 'LexerSports.com');
define('EMAIL_RP_SUBJECT', 'Contraseña de LexerSports.org');
define('EMAIL_RP_MESSAGE', $msg);

/*
|--------------------------------------------------------------------------
| EMAIL FORM CONTACTO
|--------------------------------------------------------------------------
*/
$msg = '
<b>Nombre:</b> {name}<br /><br />
<b>Email:</b> {mail}<br /><br />
<b>Asunto:</b> {subject}<br /><br />
<b>Consulta:</b><hr color="#000000" />{message}
';
define('EMAIL_CONTACT_SUBJECT', 'Formulario de Consulta');
define('EMAIL_CONTACT_MESSAGE', $msg);


/*
|--------------------------------------------------------------------------
| EMAIL RECOMENDACION
|--------------------------------------------------------------------------
*/
$msg = '
<table id="tblLang" cellpadding="0" cellspacing="0" class="table-lang">
    <tr>
        <td>
<b>Apellido y Nombre:</b> {lastname}, {firstname}<br />
<b>Telefono:</b> {phone_area} {phone_city} {phone_num} <br />
<b>Celular:</b> {celu_area} {celu_city} {celu_num} <br />
<b>E-mail:</b> {email}<br />

<b>Enlace cv: {enlace} <br/>
       </td>
       <td>
                   {logo_lexter}
       </td>
   </tr>
</table>';

define('EMAIL_RECOMENDACION_MESSAGE', $msg);


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
define('TITLE_CONTACTO', '');

/*
|--------------------------------------------------------------------------
| METADATA KEYWORDS
|--------------------------------------------------------------------------
*/
define('META_KEYWORDS_GLOBAL', '');
define('META_KEYWORDS_INDEX', '');
define('META_KEYWORDS_CONTACTO', '');


/*
|--------------------------------------------------------------------------
| METADATA DESCRIPTIONS
|--------------------------------------------------------------------------
*/
define('META_DESCRIPTION_GLOBAL', '');
define('META_DESCRIPTION_INDEX', '');
define('META_DESCRIPTION_CONTACTO', '');

define('OBJECT_CODE_VIDEO', '<object width="250" height="200"><param name="movie" value=""></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="250" height="200"></embed></object>');


/* End of file constants.php */
/* Location: ./system/application/config/constants.php */