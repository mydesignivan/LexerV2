-- phpMyAdmin SQL Dump
-- version 3.3.8
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2010 a las 22:16:49
-- Versión del servidor: 5.1.37
-- Versión de PHP: 5.2.10-2ubuntu6.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lexersports`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `session_id` varchar(40) NOT NULL DEFAULT '0',
  `ip_address` varchar(16) NOT NULL DEFAULT '0',
  `user_agent` varchar(50) NOT NULL,
  `last_activity` int(10) unsigned NOT NULL DEFAULT '0',
  `user_data` varchar(500) NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `ci_sessions`
--

INSERT INTO `ci_sessions` (`session_id`, `ip_address`, `user_agent`, `last_activity`, `user_data`) VALUES
('39c6462eadfc1e9245b2c300212dc4ac', '0.0.0.0', 'Mozilla/5.0 (X11; U; Linux i686; es-AR; rv:1.9.2.1', 1288400655, 'a:11:{s:8:"users_id";s:1:"5";s:10:"users_type";s:9:"users_dep";s:8:"username";s:7:"damianx";s:5:"email";s:16:"fede@hotmail.com";s:10:"newsletter";s:1:"";s:5:"token";s:0:"";s:6:"active";s:1:"1";s:5:"level";s:1:"0";s:10:"date_added";s:19:"2010-09-20 12:13:40";s:13:"last_modified";s:19:"0000-00-00 00:00:00";s:9:"logged_in";s:1:"1";}');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `reference` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `date_added` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`content_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `content`
--

INSERT INTO `content` (`content_id`, `reference`, `title`, `content`, `date_added`, `last_modified`) VALUES
(1, 'acerca-de-lexersports', 'Acerca de LexerSports', '<h2>Que es LexerSports.com?</h2>\r\n<p><b>Es una plataforma gratuita online</b> donde todos los Deportistas Profesionales y Amateurs, pueden realizar, modificar, actualizar, ofrecer y mantener su <b>Curriculum Vitae Deportivo</b> (CVD) en Internet a la vista de todo el mundo, las 24 hs. del d&iacute;a, m&aacute;s espec&iacute;ficamente al alcance inmediato de Clubes, Representantes, Instituciones, Empresas Patrocinadoras y dem&aacute;s gente allegada al deporte, con el fin de <b>ofrecer sus habilidades deportivas</b> de una forma profesional y <b>acortar tiempos</b> en lo que respecta <b>a posibles pruebas, futuras transferencias, contratos</b>, etc.<br />\r\nLos Clubes, Instituciones, Representantes y Empresas Patrocinadoras tambi&eacute;n podr&aacute;n contactarse entre ellos para una posible publicidad o futuro contrato.</p>\r\n\r\n<h2>La Misi&oacute;n</h2>\r\n<p>Millones de deportistas desean llegar a vivir del deporte y demostrarle al mundo y a ellos mismos el talento y las habilidades que poseen. Ya sea por no tener Representante, por no conocer la manera de venderse, por no tener cerca una Instituci&oacute;n donde ofrecer su talento, por razones econ&oacute;micas, o tal vez por falta de convencimiento, el deportista deja pasar el tiempo sin siquiera intentar llegar a ser un profesional. <br />\r\n<b>LexerSports</b> naci&oacute; con la idea de darle la posibilidad a todos los deportistas de las distintas disciplinas poder ofrecer su CVD a todo el mundo, los 365 d&iacute;as del año. De esta manera podr&aacute;n mostrarse y contactarse con Representantes, Instituciones, Clubes, Sponsors y Empresas Patrocinadoras del Gran Mundo Deportivo de una manera m&aacute;s <b>simple, r&aacute;pida</b> y, por sobre todo, <b>m&aacute;s profesional</b>.</p>\r\n\r\n<h2>La Visi&oacute;n</h2>\r\n<p><b>LexerSports</b> desea convertirse en la plataforma gratuita online m&aacute;s convocada donde millones de niños, adolescentes, hombres y mujeres del mundo ofrezcan sus habilidades deportivas a Clubes, Representantes, Instituciones y personas allegadas al deporte para que estos puedan analizar, seleccionar, contactar, y contratar a los deportistas profesionales m&aacute;s habilidosos de cada disciplina.</p>\r\n', '2010-08-25 12:44:20', '2010-08-25 12:44:26'),
(2, 'como-funciona-lexersports', 'Como funciona LexerSports', '<p>La funcionalidad de LexerSports es muy simple y con enormes beneficios.</p>\r\n\r\n<p>Cada deportista podrá realizar su CVD (Currículum Vitae Deportivo) <b>GRATIS</b> incorporando sus Datos Personales, Perfil e Historial Deportivo, Estadísticas, Premios y/o Reconocimientos, Videos, Fotos, agregar enlaces de: Fotos, Entrevistas, Recomendaciones, Revistas, Diarios, Sitios, etc., y todo lo que el deportista crea conveniente para poder ofrecer sus habilidades deportivas.\r\n    Otro de los enormes beneficios que te brida LexerSports es ver tu evolución deportiva, agregando tus registros de pruebas, test, entrenamientos, marcas, tiempos, etc., controlar tu peso, tu índice de masa muscular, etc. y mejorar día a día todas las áreas que creas conveniente para seguir creciendo profesionalmente con tu Deporte.</p>\r\n\r\n<p>El CVD podrá modificarse y mantenerse actualizado con solo agregar el nombre de Usuario y la contraseña que cada Usuario deberá proporcionar al crear su CVD.</p>\r\n\r\n<p>Para poder ver todos los CVD todos los Usuarios deberán estar registrados en <b>LexerSports</b> sin excepción alguna.</p>\r\n\r\n<p>Te podrás registrar como Jugador, como Club, como Representante o como Sponsor. </p>\r\n\r\n<p>Recuerda que la Registración y la Publicación son TOTALMENTE GRATUITAS!!!</p>\r\n\r\n\r\n<p>Las <b>VENTAJAS</b> que te brinda <b>LexerSports</b> son muchas:</p>\r\n\r\n- Si eres un <b>Deportista Profesional</b>, o un <b>Deportista Amateur o Juvenil</b> con el deseo de convertirte en Profesional, <b>LexerSports</b> te da la posibilidad que muestres al Mundo entero tus habilidades deportivas y de esta manera, poder encontrar el Club o la Institución donde siempre quisiste jugar e intentar dedicarte y vivir exclusivamente del Deporte que realices.<br />\r\n- Si formas parte de una <b>Institución</b> o <b>Club</b> podrás ver todos los CVD completos de todos los Jugadores registrados en <b>LexerSports</b> sin importar el Deporte que realicen. Así, podrás contactarte con los Deportistas que hayas seleccionado para que puedan llegar a un acuerdo e incorporarlo a tu Institución.<br />\r\n- Si eres un <b>Representante Independiente</b> o formas parte de un <b>Grupo Empresario o Agencia</b> podrás ver todos los CVD completos de todos los Jugadores registrados en <b>LexerSports</b> sin importar el Deporte que realicen. Así, podrás buscar, analizar, seleccionar y contactar a los Deportistas que a tu entender tengan las condiciones necesarias para que lo puedas representar. <br />\r\n- Si tienes una <b>Empresa</b> y quieres patrocinar o sponsorear algún Deportista que la represente también te podrás registrar y poner en contacto con los Deportistas más destacados de <b>LexerSports</b> que harán de tu Empresa, una “Marca” más reconocida y a la vez, lo estarás ayudando a seguir creciendo como Deportista Profesional.\r\n\r\n<p>Todavía no estás registrado, ¿Que esperas? <a href="http://www.lexersports.com/account" class="link-4">Regístrate Gratis ahora en LexerSports!!!</a></p>\r\n', '2010-08-25 13:08:26', '2010-08-25 13:08:31'),
(3, 'como-recomendar-mi-cv', 'C&oacute;mo recomendar mi CV', '<p>Como recomendar mi Curr&iacute;culum Vitae Deportivo (CVD)</p>\r\n\r\n<p>¡En LexerSports podr&aacute;s recomendar tu CVD de una manera f&aacute;cil, r&aacute;pida y muy profesional!</p>\r\n\r\n<p>Hay dos formas de recomendar tu CVD:</p>\r\n\r\n<ul>\r\n    <li><u>Entre Usuarios:</u> Todos los Usuarios podr&aacute;n recomendar su CVD entre ellos por medio de un link de Contacto ubicado en cada CVD debajo de la foto de perfil. Por ejemplo, si eres un Jugador de F&uacute;tbol y quieres contactar con un Representante que te han recomendado dentro de <b>LexerSports</b>, deber&aacute;s clickear en el link Contacto en el CVD del Representante, y autom&aacute;ticamente le estar&aacute;s enviando una recomendaci&oacute;n de tu CVD redactada por <b>LexerSports</b> con todos tus datos personales y datos de contacto para que pueda ver y analizar tu CVD.</li>\r\n    <li><u>A No Usuarios:</u> Tambi&eacute;n podr&aacute;s recomendar tu CVD a personas que no sean Usuarios de <b>LexerSports</b>. Dentro de tu cuenta (“Mi Cuenta”) tendr&aacute;s un link “Recomendar mi CVD” donde con solo agregar una o varias direcciones de correo del o los destinatarios, le estar&aacute;s enviando una recomendaci&oacute;n de tu CVD redactada por <b>LexerSports</b> con tus Datos Personales y Datos de Contacto para que pueda ver y analizar tu CVD. </li>\r\n</ul>\r\n\r\n<p>Recuerda que las personas que no son Usuarios de <b>LexerSports</b> deber&aacute;n registrarse para poder ver tu CVD completo, sin excepci&oacute;n, para mantener la seguridad de los Usuarios y la del Sitio.</p>\r\n\r\n<p>¡LexerSports te permite ofrecer todas tus habilidades deportivas al mundo entero y jugar en el equipo que siempre so&ntilde;aste!</p>\r\n\r\n<p>Todav&iacute;a no est&aacute;s registrado, ¿qu&eacute; esperas? <a href="http://lexersports.com/registrate">Reg&iacute;strate Gratis ahora en LexerSports!</a></p>\r\n\r\n', '2010-08-25 13:17:45', '2010-08-25 13:17:48'),
(4, 'ventajas-de-publicar-mi-cv', 'Ventajas de publicar mi CV', '', '2010-08-25 13:30:03', '2010-08-25 13:30:06'),
(5, 'preguntas-frecuentes', 'Preguntas frecuentes', '<p>LexerSports pone a disposición de todos los Usuarios un Listado de Preguntas Frecuentes para que te saques todas las dudas que tengas respecto a tu Curriculum Vitae Deportivo (CVD); en caso que ninguna de ellas te la haya aclarado, puedes escribirnos a ayuda@lexersports.com y te responderemos a la mayor brevedad posible.</p>\r\n\r\n<h2>Registro</h2>\r\n\r\n<ul>\r\n    <li><a href="preguntas-frecuentes#res1">¿Cuánto cuesta publicar mi CVD en LexerSports?</a></li>\r\n    <li><a href="preguntas-frecuentes#res2">¿Cómo me registro en LexerSports?</a></li>\r\n    <li><a href="preguntas-frecuentes#res3">Ya estoy registrado pero no logro ingresar a LexerSports porque recibo un mensaje de que mis Datos de Usuario son incorrectos. (Usuario y Contraseña)</a></li>\r\n    <li><a href="preguntas-frecuentes#res4">No recibí el e-mail para activar mi Usuario, ¿Cómo hago para activarlo?</a></li>\r\n    <li><a href="preguntas-frecuentes#res5">Olvidé mi Usuario y/o Contraseña, ¿Cómo los recupero?</a></li>\r\n    <li><a href="preguntas-frecuentes#res6">¿Qué ventajas tengo al publicar mi CVD?</a></li>\r\n</ul>\r\n\r\n\r\n<h2>Registro</h2>\r\n\r\n<p id="res1"><b>¿Cuánto cuesta publicar mi CVD en LexerSports?</b></p>\r\n\r\n<p>El servicio es totalmente gratuito. Tanto las publicaciones como las búsquedas son gratuitas, el único requisito es ser Usuario de LexerSports.<br />\r\nLexerSports esta hecho por deportistas y sabe el esfuerzo que lleva intentar vivir exclusivamente del deporte. Es por eso que brinda un sitio profesional y gratuito donde puedas volcar todos tus registros y llevar un control de tu evolución en el deporte que escogiste.<br />\r\nTodos los Usuarios sean deportistas, representantes, clubes o sponsors podrán publicar su CVD gratis y contactarse entre si para una futura contratación o representación.\r\n</p>\r\n\r\n<p id="res2"><b>Cómo me registro en LexerSports?</b></p>\r\n\r\n<p>Registrarse en LexerSports es muy simple y rápido. En la parte superior derecha de la página principal de LexerSports hay un botón “Regístrate Gratis!” donde clickeando en él y completando los campos con tus datos personales, estarás registrado en LexerSports. Para completar el proceso de registración, una vez que te registres, se te enviará un mail a tu casilla de correo para que actives tu CVD. <br />\r\n    Este paso nos permite corroborar que ningún tercero se ha registrado sin tu consentimiento.</p>\r\n\r\n\r\n<p id="res3"><b>Ya estoy registrado pero no logro ingresar a LexerSports porque recibo un mensaje de que mis Datos de Usuario son incorrectos. (Usuario y Contraseña)</b></p>\r\n\r\n<p>Si no puedes ingresar a LexerSports puede ser por los siguientes motivos:</p>\r\n\r\n- Tus Datos de Usuario y Contraseña sean incorrectos, por favor verifícalos. Si has olvidado tu Contraseña puedes recuperarla haciendo click aquí.<br />\r\n- Está activada la tecla de Mayúsculas (Bloq Mayús), comprueba que no lo este y vuelve a intentarlo.<br />\r\n- Esté inhabilitado el uso de cookies de tu navegador, por favor habilítalo. Para activar las cookies ingresa a Herramientas en la Barra de tu navegador, Opciones, y cambia la Configuración de Cookies: “Permitir todas las cookies”. (Navegador Google Chrome)\r\n\r\n<p id="res4"><b>No recibí el e-mail para activar mi CVD, ¿Cómo hago para activarlo?</b></p>\r\n\r\n<p>Por favor, verifica que tu dirección de e-mail sea correcta. Si lo es, configura tu correo y agrega a www.lexersports.com dentro de tu lista segura de correo.<br />\r\n    Si aún sigues sin recibir tu mail de activación, por favor, contáctate con nosotros para solucionar tu problema haciendo click aquí.</p>\r\n\r\n<p id="res5"><b>Olvidé mi Usuario y/o Contraseña, ¿Cómo los recupero?</b></p>\r\n\r\n<p>Si olvidaste tus Datos de Usuario, clickea en el link “Olvidé mi Contraseña” ubicado en la parte superior derecha de LexerSports y completando tu dirección de mail se te enviará automáticamente tu Usuario y Contraseña.</p>\r\n\r\n<p id="res6"><b>Qué ventajas tengo al publicar mi CVD?</b></p>\r\n\r\n<p>LexerSports nació con la idea de darles la posibilidad a todos los deportistas de poder ofrecer sus habilidades deportivas a todo el mundo y llegar a vivir exclusivamente del deporte.<br />\r\nLa ventaja mas importante es que podrás crear, mantener y actualizar totalmente gratis tu Curriculum Vitae Deportivo (CVD) y así, ofrecer tu talento a millones de personas de todo el mundo aún mientras descanses, trabajes, entrenes o estés de vacaciones.<br />\r\nOtra de las ventajas importantes que tiene LexerSports es que podrás llevar un registro de toda tu carrera deportiva: tus pruebas físicas, tiempos, marcas, medidas antropométricas, etc., para que puedas ver la evolución que has logrado con el correr del tiempo.</p>\r\n\r\n<p>¿Todavía no estás registrado, qué esperas? <a href="http://www.lexersports.com/registrate" class="link-4">Regístrate Gratis ahora en LexerSports!</a></p>\r\n\r\n\r\n<h2>Carga tu CVD</h2>\r\n\r\n<p>Tu Curriculum Vitae Deportivo (CVD):</p>\r\n<ul>\r\n    <li><a href="preguntas-frecuentes#res7">¿Qué es mi CVD?</a></li>\r\n    <li><a href="preguntas-frecuentes#res8">¿Qué es mi Perfil Deportivo?</a></li>\r\n    <li><a href="preguntas-frecuentes#res9">¿Qué es mi Historial Deportivo?</a></li>\r\n    <li><a href="preguntas-frecuentes#res10">¿Qué son mis Capacidades Físicas?</a></li>\r\n    <li><a href="preguntas-frecuentes#res11">¿Qué son mis Medidas Antropométricas?</a></li>\r\n    <li><a href="preguntas-frecuentes#res12">¿Que son mis Fotos? ¿Cómo publico una foto en mi CVD? ¿Cuántas puedo publicar?</a></li>\r\n    <li><a href="preguntas-frecuentes#res13">De que formato y calidad tienen que ser las fotos que publique?</a></li>\r\n    <li><a href="preguntas-frecuentes#res14">¿Que son mis Videos? ¿Cómo publico un video en mi CVD? ¿Cuántos puedo publicar?</a></li>\r\n    <li><a href="preguntas-frecuentes#res15">De que formato y calidad tienen que ser los videos que publique?</a></li>\r\n    <li><a href="preguntas-frecuentes#res16">¿Qué son mis Recomendaciones?</a></li>\r\n    <li><a href="preguntas-frecuentes#res17">¿Puedo publicar mi CVD en LexerSports aunque sea Amateur?</a></li>\r\n    <li><a href="preguntas-frecuentes#res18">¿Cómo hago para cargar mi CVD en LexerSports?</a></li>\r\n    <li><a href="preguntas-frecuentes#res19">¿Cómo modifico o actualizo mi CVD?</a></li>\r\n    <li><a href="preguntas-frecuentes#res20">¿Cómo elimino mi CVD?</a></li>\r\n    <li><a href="preguntas-frecuentes#res21">¿Quiénes pueden ver mi CVD?</a></li>\r\n</ul>\r\n\r\n<p id="res7"><b>Qué es mi CVD?</b></p>\r\n<p>Tu CVD son las siglas de tu Curriculum Vitae Deportivo. Tu CVD consta de varias partes: tus Datos Personales, tu Perfil Deportivo, tus Historiales Deportivos, tus Capacidades Físicas, tus Medidas Antropométricas, tus Fotos, tus Videos, tus Recomendaciones y todos aquellos contenidos que agregues en tu CVD.<br />\r\n    LexerSports brinda una solución única para todos los deportistas. Podrás crear, mantener y actualizar tu CVD, tener un registro de tu Evolución Deportiva y, a la vez, ofrecer tus habilidades a todo el mundo.</p>\r\n\r\n<p id="res8"><b>¿Qué es mi Perfil Deportivo?</b></p>\r\n<p>El Perfil Deportivo es la sección donde podrás anotar todos los datos específicos de tu deporte que son independientes de los resultados que vayan obteniendo en tu carrera con el correr del tiempo. Algunos ejemplos serían: desde hace cuanto tiempo practicas tu deporte, si estás rankeado nacional o internacionalmente, si tu pase te pertenece o pertenece a un tercero, compañero de equipo, mejor golpe, etc., y todos los datos que creas conveniente para ofrecer tu CVD de una manera más profesional.</p>\r\n\r\n<p id="res9"><b>¿Qué es mi Historial Deportivo?</b></p>\r\n<p>El Historial Deportivo es la sección donde podrás anotar los resultados o acontecimientos que vayas obteniendo en tu carrera por temporada. Esta misma sección la podrás repetir todas las veces que quieras según tu trayectoria, y así, agregar año tras año, todos tus logros deportivos.</p>\r\n\r\n<p id="res10"><b>¿Qué son mis Capacidades Físicas?</b></p>\r\n<p>Las Capacidades Físicas son las condiciones genéticas internas que posee cada ser humano para realizar cualquier actividad motriz, en este caso, nos concentraremos en los movimientos deportivos específicos de cada deporte.<br />\r\n    Ésta sección estará dividida en las capacidades más comunes: Velocidad, Fuerza, Resistencia, Potencia, Flexibilidad, Coordinación, etc., aunque podrás agregar otras capacidades que sean necesarias según el deporte que realices. De esta manera, podrás agregar todos tus test y pruebas físicas que quieras y tendrás un registro de todos tus tiempos, marcas, distancias, pesos y demás datos que permitan evaluar tu rendimiento físico.</p>\r\n\r\n<p id="res11"><b>¿Qué son mis Medidas Antropométricas?</b></p>\r\n<p>Las Medidas Antropométricas son las medidas del cuerpo humano. Si bien podemos incluirlas en las Capacidades Físicas anteriores, pensamos que son importantes para que tengan una sección propia. Cada deportista podrá anotar todas sus medidas antropométricas que crea conveniente para su deporte. Entre ellas podemos nombrar el Peso, la Atura, la Medida de Pliegues, Índice de masa corporal, Porcentaje de grasa corporal, el Perímetro de Masa Muscular, etc.,</p>\r\n\r\n<p id="res12"><b>¿Que son mis Fotos? ¿Cómo publico una foto en mi CVD? ¿Cuántas fotos puedo publicar?</b></p>\r\n\r\n<p>Mis Fotos son las secciones destinadas a que publiques todas las fotos que creas conveniente para ofrecer tu CVD. Para publicar una foto debes ser Usuario de LexerSports y luego ingresar a “Mi Cuenta”, donde encontrarás un link “Mis Fotos” y podrás publicar hasta un máximo de treinta (30) fotos. Allí, también encontrarás otro link “Fotos de Perfil” donde podrás publicar hasta un máximo de cinco (5) fotos que estarán a la vista cuando los demás Usuarios observen tu CVD.</p>\r\n\r\n<p id="res13"><b>¿De que formato y calidad tienen que ser las fotos que publique?</b></p>\r\n<p>Los formatos pueden ser (.jpg, .gif, .png) y no deben superar los 2 megas (Mb).</p>\r\n\r\n<p id="res14"><b>¿Que son mis Videos? ¿Cómo publico un video en mi CVD? ¿Cuántos videos puedo publicar?</b></p>\r\n<p>Mis Videos es aquella sección en la que podrás publicar todos los videos que creas conveniente para ofrecer tu CVD. Para publicar un video debes ser Usuario de LexerSports y luego ingresar a “Mi Cuenta”, donde encontrarás un link “Mis Videos” para poder subir hasta un máximo de 400 MB de video. No importa que publiques uno o varios videos, el único requisito es que no te sobrepases del límite de MB permitido.</p>\r\n\r\n<p id="res15"><b>¿De que formato y calidad tienen que ser los videos que publique?</b></p>\r\n<p></p>\r\n\r\n<p id="res16"><b>¿Qué son mis Recomendaciones?</b></p>\r\n<p>Tus Recomendaciones es la sección en la cual los demás Usuarios podrán escribirte comentarios o “recomendaciones” para que el toda la comunidad de LexerSports los vean.</p>\r\n\r\n<p id="res17"><b>¿Puedo publicar mi CVD en LexerSports aunque sea Amateur?</b></p>\r\n\r\n<p>Por supuesto que SI! No importa que deporte realices o cuantos años tengas, LexerSports te quiere acompañar en todo momento en tu carrera deportiva y desea que llegues a ser todo un profesional en tu deporte.<br />\r\n    Recuerda una sola cosa: ¡Solo depende de ti!</p>\r\n\r\n<p id="res18"><b>¿Cómo hago para cargar mi CVD en LexerSports?</b></p>\r\n<p>Completar tu CVD en LexerSports es muy simple. Una vez que te registres y hayas activado tu cuenta en LexerSports, debes loguearte e ingresar a “Mi Cuenta”. Para esto debes introducir tu Nombre de Usuario y Contraseña en la parte derecha de la barra superior de LexerSports. Dentro de tu Cuenta, en la parte izquierda de la pantalla encontrarás todas las secciones que componen tu CVD para que empieces a completarlo.</p>\r\n\r\n<p id="res19"><b>¿Cómo modifico o actualizo mi CVD?</b></p>\r\n<p>Cada CVD consta de varias secciones para que se muestre toda tu Carrera Deportiva de una forma organizada y muy profesional.<br />\r\n    Para editar, modificar, o actualizar cada una de las secciones de tu CVD deberás entrar en “Mi Cuenta”. En la barra superior derecha de LexerSports encontraras los campos de Usuario y Contraseña donde deberás “loguearte” y entrar a “Mi Cuenta”. Allí, encontrarás un link “Editar mi CVD” y podrás realizar todos los cambios que desees.</p>\r\n\r\n<p id="res20"><b>¿Como elimino mi CVD?</b></p>\r\n<p>Para eliminar tu CVD deberás entrar en “Mi Cuenta”. En la barra superior de la página de LexerSports encontraras los campos de Usuario y Contraseña donde deberás “loguearte” y entrar en tu cuenta. Allí encontrarás un link “Eliminar mi CVD” y podrás darte de baja de LexerSports sin ningún inconveniente.</p>\r\n\r\n<p id="res21"><b>¿Quiénes pueden ver mi CVD?</b></p>\r\n<p>Si un cibernauta solicita ver tu CVD se le pedirá su identificación por medio de su Usuario y Contraseña, o en su defecto, que se registre en LexerSports. Para resguardar la seguridad de los Usuarios y la de toda la comunidad de LexerSports solamente los Usuarios registrados podrán ver tu CVD completo. Tus datos personales relevantes como DNI y Teléfono/s, se mantendrán siempre ocultos.</p>\r\n\r\n\r\n<p>¿Todavía no estás registrado, qué esperas? <a href="http://www.lexersports.com/registrate" class="link-4">Regístrate Gratis ahora en LexerSports!</a></p>\r\n\r\n\r\n<h2>Búsqueda</h2>\r\n<ul>\r\n    <li><a href="preguntas-frecuentes#res22">¿Puedo buscar un CVD sin estar registrado?</a></li>\r\n    <li><a href="preguntas-frecuentes#res23">¿Cómo encuentro el Deportista, Representante, Club o Sponsor que busco?</a></li>\r\n    <li><a href="preguntas-frecuentes#res24">¿Cómo funciona la Búsqueda Avanzada?</a></li>\r\n    <li><a href="preguntas-frecuentes#res25">¿Cómo recomendar a un Usuario?</a></li>\r\n    <li><a href="preguntas-frecuentes#res26">¿Cómo contacto a otro Usuario?</a></li>\r\n    <li><a href="preguntas-frecuentes#res27">¿Cómo recomiendo mi CVD?</a></li>\r\n    <li><a href="preguntas-frecuentes#res28">¿LexerSports me asegura encontrar el Deportista, Representante, Club o Sponsor que busco?</a></li>\r\n</ul>\r\n\r\n<p id="#res22"><b>¿Puedo buscar un CVD sin estar registrado?</b></p>\r\n<p>Puedes buscar los CVD que quieras sin estar registrado pero solo podrás ver el listado del resultado de esa búsqueda. Si deseas ver un CVD completo tienes que ser Usuario de LexerSports, sin excepción. Esta política se aplica para mantener la seguridad de todos los Usuarios y la del Sitio.</p>\r\n\r\n<p id="#res23"><b>¿Cómo encuentro el Deportista, Representante, Club o Sponsor que busco?</b></p>\r\n<p>En la página principal de LexerSports habrá una búsqueda donde podrás encontrar a todos los Deportistas, Representantes, Clubes o Sponsors que se hayan registrado en LexerSports ya sea por su Nombre o Apellido, por Tipo de Usuario, por Deporte y/o por País.</p>\r\n\r\n<p id="#res24"><b>¿Cómo funciona la Búsqueda Avanzada?</b></p>\r\n<p>Si deseas realizar una búsqueda más exhaustiva lo podrás hacer clickeando en la “Búsqueda Avanzada” (ubicada debajo de la búsqueda) donde podrás buscar, además de las anteriores opciones, por Posición o Especialidad según el deporte, por Edad, por Sexo, por Peso, por Altura, por Tipo de Pasaporte, por Ciudad, por Mano hábil, etc. y muchas opciones mas.</p>\r\n\r\n<p id="#res25"><b>¿Cómo recomendar a un Usuario?</b></p>\r\n<p>Para recomendar a un Usuario deberás loguearte y viendo el CVD del Usuario al que quieres recomendar, al hacer click en la solapa Recomendaciones, podrás agregar una recomendación o un comentario. Recuerda que las recomendaciones tienen que ser positivas para el Usuario y solo con la intención de mejorar su imagen y sus referencias deportivas en su CVD. Por ningún motivo se aceptarán comentarios que no tengan que ver con la visión y la misión de LexerSports.<br />\r\n    En el caso que se encuentren comentarios fuera de lugar, LexerSports podrá, a su sola discreción, darle de baja al Usuario que ha realizado el comentario sin que este pueda exigir resarcimiento alguno de ningún tipo.</p>\r\n\r\n<p id="#re26"><b>¿Cómo contacto a otro Usuario?</b></p>\r\n<p>Para poder contactar a otro Usuario deberás estar logueado. Debajo de la Foto de Perfil de todos los CVD encontrarás un link de “Contacto” donde con solo hacer click en él, se le enviará automáticamente un mail prearmado por LexerSports con tus datos para que se contacte con vos.</p>\r\n\r\n<p id="#res27"><b>¿Cómo recomiendo mi CVD?</b></p>\r\n<p>Recomendar mi propio CVD en LexerSports es muy simple y rápido! Tienes que  loguearte, entrar en “Mi Cuenta” y clickear el link “Recomendar mi CVD”. Una vez dentro, lo único que deberás hacer es agregar las direcciones de mail de los destinatarios, sin importar si están registrados o no, y automáticamente recibirán un mail prearmado por LexerSports recomendando tu CVD completo.</p>\r\n\r\n<p id="#res28"><b>¿LexerSports me asegura encontrar el Deportista, Representante, Club o Sponsor que busco? </b></p>\r\n<p>LexerSoports lo único que hace es de intermediario entre Deportistas, Representantes, Clubes o Sponsors. LexerSports participa en los contactos, negociaciones o transferencias que se concreten a traves del Sitio.<br />\r\nLexerSports no garantiza que encuentres o te contactes con el Club o Jugador que buscas. Tu mismo debes encargarte de hacer tu contacto o de recomendar tu CVD.<br />\r\nEl equipo de LexerSports, realiza continuamente campañas de publicidad para promocionar el Sitio, en varios idiomas, y ayudarte a que tu CVD sea visto en todo el mundo.</p>\r\n\r\n<p>Si tienes alguna otra duda, tienes a tu disposición las Políticas de Privacidad. o Contáctatanos y te responderemos a la mayor brevedad posible.</p>\r\n\r\n<p>¿Todavía no estás registrado, qué esperas? <a href="http://www.lexersports.com/registrate" class="link-4">Regístrate Gratis ahora en LexerSports!</a></p>\r\n\r\n', '2010-08-25 13:46:24', '2010-08-25 13:46:27');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial`
--

CREATE TABLE IF NOT EXISTS `historial` (
  `historial_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `sports_id` int(11) NOT NULL,
  PRIMARY KEY (`historial_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `historial`
--

INSERT INTO `historial` (`historial_id`, `users_id`, `sports_id`) VALUES
(2, 1, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_arco`
--

CREATE TABLE IF NOT EXISTS `historial_arco` (
  `arco_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `especialidad` int(11) NOT NULL,
  `especialidad_other` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`arco_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_arco`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_arco_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_arco_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `logros` varchar(255) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_arco_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_arco_torneos`
--

CREATE TABLE IF NOT EXISTS `historial_arco_torneos` (
  `torneos_id` int(11) NOT NULL,
  `historial_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `torneo` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `posicion` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `historial_arco_torneos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_atletismo`
--

CREATE TABLE IF NOT EXISTS `historial_atletismo` (
  `atletismo_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  PRIMARY KEY (`atletismo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `historial_atletismo`
--

INSERT INTO `historial_atletismo` (`atletismo_id`, `historial_id`) VALUES
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_atletismo_categoria`
--

CREATE TABLE IF NOT EXISTS `historial_atletismo_categoria` (
  `pruebas_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`pruebas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_atletismo_categoria`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_atletismo_categoria_prueba`
--

CREATE TABLE IF NOT EXISTS `historial_atletismo_categoria_prueba` (
  `categorias_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `prueba` int(11) NOT NULL,
  `prueba_other` varchar(255) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `federacion` varchar(255) NOT NULL,
  `fecha` char(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`categorias_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_atletismo_categoria_prueba`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_atletismo_evolucion`
--

CREATE TABLE IF NOT EXISTS `historial_atletismo_evolucion` (
  `prueba_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `prueba_num` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `prueba` int(11) NOT NULL,
  `prueba_other` varchar(255) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`prueba_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `historial_atletismo_evolucion`
--

INSERT INTO `historial_atletismo_evolucion` (`prueba_id`, `historial_id`, `prueba_num`, `fecha`, `prueba`, `prueba_other`, `observaciones`) VALUES
(1, 2, 0, '1288170540', 3, '', 'prueba0'),
(2, 2, 0, '1288170540', 4, '', 'prueba0'),
(3, 2, 1, '1288170540', 5, '', 'prueba1');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_atletismo_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_atletismo_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `prueba` int(11) NOT NULL,
  `prueba_other` varchar(255) NOT NULL,
  `marca` varchar(100) NOT NULL,
  `puesto` varchar(100) NOT NULL,
  `year` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `historial_atletismo_palmares`
--

INSERT INTO `historial_atletismo_palmares` (`palmares_id`, `historial_id`, `prueba`, `prueba_other`, `marca`, `puesto`, `year`, `descripcion`) VALUES
(1, 2, 4, '', '4', '4', 2000, ''),
(2, 2, 3, '', '6', '6', 2001, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_basquet`
--

CREATE TABLE IF NOT EXISTS `historial_basquet` (
  `basquet_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `otros_datos` varchar(255) NOT NULL,
  `partidos_jugados` int(11) NOT NULL,
  `partidos_titular` int(11) NOT NULL,
  `minutos_cancha` int(11) NOT NULL,
  `puntos_totales` int(11) NOT NULL,
  `simples` int(11) NOT NULL,
  `dobles` int(11) NOT NULL,
  `triples` int(11) NOT NULL,
  `puntos_promedio` int(11) NOT NULL,
  `faltas` int(11) NOT NULL,
  `expulsiones` int(11) NOT NULL,
  `tapas` int(11) NOT NULL,
  `recuperaciones` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`basquet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_basquet`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_basquet_datos`
--

CREATE TABLE IF NOT EXISTS `historial_basquet_datos` (
  `datos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `opcion` varchar(255) NOT NULL,
  `dato` varchar(255) NOT NULL,
  PRIMARY KEY (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_basquet_datos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_basquet_handball`
--

CREATE TABLE IF NOT EXISTS `historial_basquet_handball` (
  `datos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `opcion` varchar(255) NOT NULL,
  `dato` varchar(255) NOT NULL,
  PRIMARY KEY (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_basquet_handball`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_basquet_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_basquet_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_basquet_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_boxeo`
--

CREATE TABLE IF NOT EXISTS `historial_boxeo` (
  `boxeo_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `nivel` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `cant_peleas` int(11) NOT NULL,
  `ko_ganadas` int(11) NOT NULL,
  `ko_perdidas` int(11) NOT NULL,
  `ko_empates` int(11) NOT NULL,
  `ko_nodisp` int(11) NOT NULL,
  `ko_tecnico_ganadas` int(11) NOT NULL,
  `ko_tecnico_perdidas` int(11) NOT NULL,
  `ko_tecnico_empates` int(11) NOT NULL,
  `ko_tecnico_nodisp` int(11) NOT NULL,
  `puntos_ganadas` int(11) NOT NULL,
  `puntos_perdidas` int(11) NOT NULL,
  `puntos_empates` int(11) NOT NULL,
  `puntos_nodisp` int(11) NOT NULL,
  `accidente_ganadas` int(11) NOT NULL,
  `accidente_perdidas` int(11) NOT NULL,
  `accidente_empates` int(11) NOT NULL,
  `accidente_nodisp` int(11) NOT NULL,
  `lesion_ganadas` int(11) NOT NULL,
  `lesion_perdidas` int(11) NOT NULL,
  `lesion_empates` int(11) NOT NULL,
  `lesion_nodisp` int(11) NOT NULL,
  `abandono_ganadas` int(11) NOT NULL,
  `abandono_perdidas` int(11) NOT NULL,
  `abandono_empates` int(11) NOT NULL,
  `abandono_nodisp` int(11) NOT NULL,
  `inferioridad_ganadas` int(11) NOT NULL,
  `inferioridad_perdidas` int(11) NOT NULL,
  `inferioridad_empates` int(11) NOT NULL,
  `inferioridad_nodisp` int(11) NOT NULL,
  `nulo_ganadas` int(11) NOT NULL,
  `nulo_perdidas` int(11) NOT NULL,
  `nulo_empates` int(11) NOT NULL,
  `nulo_nodisp` int(11) NOT NULL,
  `desicion_ganadas` int(11) NOT NULL,
  `desicion_perdidas` int(11) NOT NULL,
  `desicion_empates` int(11) NOT NULL,
  `desicion_nodisp` int(11) NOT NULL,
  `descalificacion_ganadas` int(11) NOT NULL,
  `descalificacion_perdidas` int(11) NOT NULL,
  `descalificacion_empates` int(11) NOT NULL,
  `descalificacion_nodisp` int(11) NOT NULL,
  PRIMARY KEY (`boxeo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_boxeo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_boxeo_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_boxeo_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `peso` varchar(15) NOT NULL,
  `organizacion` varchar(255) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_boxeo_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_boxeo_peleas`
--

CREATE TABLE IF NOT EXISTS `historial_boxeo_peleas` (
  `peleas_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `peso` varchar(10) NOT NULL,
  `adversario` varchar(255) NOT NULL,
  `organizacion` varchar(255) NOT NULL,
  `resultado` int(11) NOT NULL,
  `round` int(11) NOT NULL,
  PRIMARY KEY (`peleas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_boxeo_peleas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_ciclismo`
--

CREATE TABLE IF NOT EXISTS `historial_ciclismo` (
  `ciclismo_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada` int(11) NOT NULL,
  `representa` int(11) NOT NULL,
  `nombre_institucion` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `especialidad` int(11) NOT NULL,
  `especialidad_other` varchar(255) NOT NULL,
  `modalidad` int(11) NOT NULL,
  `modalidad_other` varchar(255) NOT NULL,
  PRIMARY KEY (`ciclismo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_ciclismo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_futbol`
--

CREATE TABLE IF NOT EXISTS `historial_futbol` (
  `futbol_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_inicio` int(11) NOT NULL,
  `temporada_fin` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `otros` varchar(255) NOT NULL,
  `partidos_jugados` int(11) NOT NULL,
  `partidos_titular` int(11) NOT NULL,
  `minutos_cancha` int(11) NOT NULL,
  `goles_marcados` int(11) NOT NULL,
  `penales_ejecutados` int(11) NOT NULL,
  `penales_convertidos` int(11) NOT NULL,
  `penales_atajados` int(11) NOT NULL,
  `asistencias` int(11) NOT NULL,
  `promedio_goles` int(11) NOT NULL,
  `tarjetas_amarillas` int(11) NOT NULL,
  `tarjetas_rojas` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`futbol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_futbol`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_futbolsala`
--

CREATE TABLE IF NOT EXISTS `historial_futbolsala` (
  `futbol_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_inicio` int(11) NOT NULL,
  `temporada_fin` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `otros` varchar(255) NOT NULL,
  `partidos_jugados` int(11) NOT NULL,
  `partidos_titular` int(11) NOT NULL,
  `minutos_cancha` int(11) NOT NULL,
  `goles_marcados` int(11) NOT NULL,
  `penales_ejecutados` int(11) NOT NULL,
  `penales_convertidos` int(11) NOT NULL,
  `penales_atajados` int(11) NOT NULL,
  `asistencias` int(11) NOT NULL,
  `promedio_goles` int(11) NOT NULL,
  `tarjetas_amarillas` int(11) NOT NULL,
  `tarjetas_rojas` int(11) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`futbol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_futbolsala`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_futbolsala_datos`
--

CREATE TABLE IF NOT EXISTS `historial_futbolsala_datos` (
  `datos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `opcion` varchar(255) NOT NULL,
  `dato` varchar(255) NOT NULL,
  PRIMARY KEY (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_futbolsala_datos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_futbolsala_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_futbolsala_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_futbolsala_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_futbol_datos`
--

CREATE TABLE IF NOT EXISTS `historial_futbol_datos` (
  `datos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `opcion` varchar(255) NOT NULL,
  `dato` varchar(255) NOT NULL,
  PRIMARY KEY (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_futbol_datos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_futbol_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_futbol_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_futbol_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_golf`
--

CREATE TABLE IF NOT EXISTS `historial_golf` (
  `futbol_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_inicio` int(11) NOT NULL,
  `temporada_fin` int(11) NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `ranking` int(11) NOT NULL,
  `tour_name` varchar(255) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`futbol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_golf`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_golf_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_golf_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `historial_golf_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_golf_tour`
--

CREATE TABLE IF NOT EXISTS `historial_golf_tour` (
  `tour_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `torneo` varchar(255) NOT NULL,
  `posicion` varchar(100) NOT NULL,
  `r1` int(11) NOT NULL,
  `r2` int(11) NOT NULL,
  `r3` int(11) NOT NULL,
  `r4` int(11) NOT NULL,
  `par` int(11) NOT NULL,
  `ganancia` decimal(6,2) NOT NULL,
  PRIMARY KEY (`tour_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_golf_tour`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_halterofilia`
--

CREATE TABLE IF NOT EXISTS `historial_halterofilia` (
  `halterofilia_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`halterofilia_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_halterofilia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_halterofilia_categoria`
--

CREATE TABLE IF NOT EXISTS `historial_halterofilia_categoria` (
  `halterofilia_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `division` int(11) NOT NULL,
  `division_other` varchar(255) NOT NULL,
  `arranque` int(11) NOT NULL,
  `envion` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `fecha` char(10) NOT NULL,
  `evento` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`halterofilia_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_halterofilia_categoria`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_halterofilia_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_halterofilia_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_halterofilia_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_handball`
--

CREATE TABLE IF NOT EXISTS `historial_handball` (
  `handball_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_1` int(11) NOT NULL,
  `temporada_2` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `partidos_jugados` decimal(10,0) NOT NULL,
  `goles_marcados` decimal(10,0) NOT NULL,
  `lanzamientos` decimal(10,0) NOT NULL,
  `ataques` decimal(10,0) NOT NULL,
  `perdidas` decimal(10,0) NOT NULL,
  `asistencias` decimal(10,0) NOT NULL,
  `recuperaciones` decimal(10,0) NOT NULL,
  `parciales` decimal(10,0) NOT NULL,
  `amonestaciones` decimal(10,0) NOT NULL,
  `expulsiones` decimal(10,0) NOT NULL,
  `descalificaciones` decimal(10,0) NOT NULL,
  `comentarios` text NOT NULL,
  PRIMARY KEY (`handball_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_handball`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_handball_datos`
--

CREATE TABLE IF NOT EXISTS `historial_handball_datos` (
  `datos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `opcion` varchar(255) NOT NULL,
  `dato` varchar(255) NOT NULL,
  PRIMARY KEY (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_handball_datos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_handball_lanzamientos`
--

CREATE TABLE IF NOT EXISTS `historial_handball_lanzamientos` (
  `handball_id` int(11) NOT NULL,
  `historial_id` int(11) NOT NULL,
  `competicion` varchar(255) NOT NULL,
  `goles_9` int(11) NOT NULL,
  `lanzamientos_9` int(11) NOT NULL,
  `goles_6` int(11) NOT NULL,
  `lanzamientos_6` int(11) NOT NULL,
  `goles_7` int(11) NOT NULL,
  `lanzamientos_7` int(11) NOT NULL,
  `goles_contrataque` int(11) NOT NULL,
  `lanzamientos_contrataque` int(11) NOT NULL,
  `goles_pivote` int(11) NOT NULL,
  `lanzamientos_pivote` int(11) NOT NULL,
  `goles_extremo` int(11) NOT NULL,
  `lanzamientos_extremo` int(11) NOT NULL,
  `goles_fly` int(11) NOT NULL,
  `lanzamientos_fly` int(11) NOT NULL,
  `goles_global` int(11) NOT NULL,
  `lanzamientos_global` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `historial_handball_lanzamientos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_handball_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_handball_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_handball_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_hockey`
--

CREATE TABLE IF NOT EXISTS `historial_hockey` (
  `hockey_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_1` int(11) NOT NULL,
  `temporada_2` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `superficie` int(11) NOT NULL,
  `superficie_other` varchar(255) NOT NULL,
  `partidos_jugados` int(11) NOT NULL,
  `partidos_titular` int(11) NOT NULL,
  `goles_convertidos` int(11) NOT NULL,
  `penales_ejecutados` int(11) NOT NULL,
  `penales_convertidos` int(11) NOT NULL,
  `tarjetas_verdes` int(11) NOT NULL,
  `tarjetas_amarillas` int(11) NOT NULL,
  `tarjetas_rojas` int(11) NOT NULL,
  `otros_datos` text NOT NULL,
  `corner_defensivo` int(11) NOT NULL,
  `observaciones_defensivo` int(11) NOT NULL,
  `corner_ofensivo` int(11) NOT NULL,
  `observaciones_ofensivo` int(11) NOT NULL,
  `otras_actividades` int(11) NOT NULL,
  `otras_actividades_other` varchar(255) NOT NULL,
  `categoria_actividades` int(11) NOT NULL,
  `categoria_actividades_other` varchar(255) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`hockey_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_hockey`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_hockey_datos`
--

CREATE TABLE IF NOT EXISTS `historial_hockey_datos` (
  `datos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `opcion` varchar(255) NOT NULL,
  `dato` varchar(255) NOT NULL,
  PRIMARY KEY (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_hockey_datos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_hockey_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_hockey_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_hockey_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_hockey_torneos`
--

CREATE TABLE IF NOT EXISTS `historial_hockey_torneos` (
  `torneos_id` int(11) NOT NULL,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `puesto` int(11) NOT NULL,
  `torneo` varchar(255) NOT NULL,
  `lugar` varchar(255) NOT NULL,
  `observaciones` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `historial_hockey_torneos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_marciales`
--

CREATE TABLE IF NOT EXISTS `historial_marciales` (
  `marciales_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `ciudad` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `graduacion` varchar(255) NOT NULL,
  `observaciones_torneos` varchar(255) NOT NULL,
  PRIMARY KEY (`marciales_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `historial_marciales`
--

INSERT INTO `historial_marciales` (`marciales_id`, `historial_id`, `temporada`, `club`, `ciudad`, `state`, `country`, `categoria`, `graduacion`, `observaciones_torneos`) VALUES
(1, 1, 1980, 'clubx', 'mendoza', 174, 13, 'alguna categoria', 'alguna graduacion', ''),
(2, 1, 1981, 'clubx2', 'mendoza', 174, 13, 'alguna categoria2', 'alguna graduacion2', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_marciales_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_marciales_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `historial_marciales_palmares`
--

INSERT INTO `historial_marciales_palmares` (`palmares_id`, `historial_id`, `year`, `descripcion`) VALUES
(1, 1, 1978, 'trofeo copa de leche');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_marciales_torneos`
--

CREATE TABLE IF NOT EXISTS `historial_marciales_torneos` (
  `torneos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `torneo` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`torneos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_marciales_torneos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_rugby`
--

CREATE TABLE IF NOT EXISTS `historial_rugby` (
  `rugby_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_1` int(11) NOT NULL,
  `temporada_2` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(144) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `otros` varchar(255) NOT NULL,
  `partidos_jugados` decimal(6,2) NOT NULL,
  `partidos_titular` decimal(6,2) NOT NULL,
  `minutos_cancha` decimal(10,0) NOT NULL,
  `scrumms` decimal(6,2) NOT NULL,
  `tries` decimal(6,2) NOT NULL,
  `tacles` decimal(6,2) NOT NULL,
  `lines` decimal(3,2) NOT NULL,
  `tarjetas_amarillas` decimal(3,2) NOT NULL,
  `tarjetas_rojas` decimal(3,2) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`rugby_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_rugby`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_rugby_datos`
--

CREATE TABLE IF NOT EXISTS `historial_rugby_datos` (
  `datos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `opcion` varchar(255) NOT NULL,
  `dato` varchar(255) NOT NULL,
  PRIMARY KEY (`datos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_rugby_datos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_rugby_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_rugby_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_rugby_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_softball`
--

CREATE TABLE IF NOT EXISTS `historial_softball` (
  `softball_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_1` int(11) NOT NULL,
  `temporada_2` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  `partidos_jugados` decimal(6,2) NOT NULL,
  `strike` decimal(6,2) NOT NULL,
  `bases_cedidas` decimal(6,2) NOT NULL,
  `jugadores_golpeados` decimal(6,2) NOT NULL,
  `hist` decimal(6,2) NOT NULL,
  `efecto` decimal(6,2) NOT NULL,
  `velocidad` decimal(6,2) NOT NULL,
  `asistencias` decimal(6,2) NOT NULL,
  `errores` decimal(6,2) NOT NULL,
  `orden` decimal(6,2) NOT NULL,
  `turno` decimal(6,2) NOT NULL,
  `strike_bateador` decimal(6,2) NOT NULL,
  `bases_ganadas` decimal(6,2) NOT NULL,
  `hit_bateador` decimal(6,2) NOT NULL,
  `home_run` decimal(6,2) NOT NULL,
  `carreras_anotadas` decimal(6,2) NOT NULL,
  `bases_robadas` decimal(6,2) NOT NULL,
  `errores_corredor` decimal(6,2) NOT NULL,
  `hits_largo` decimal(6,2) NOT NULL,
  `observaciones` text NOT NULL,
  PRIMARY KEY (`softball_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_softball`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_softball_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_softball_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `observaciones` text NOT NULL,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_softball_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_tiro`
--

CREATE TABLE IF NOT EXISTS `historial_tiro` (
  `tiro_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `especialidad` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `obsercaciones` text NOT NULL,
  PRIMARY KEY (`tiro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_tiro`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_tiro_eventos`
--

CREATE TABLE IF NOT EXISTS `historial_tiro_eventos` (
  `eventos_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `evento` varchar(255) NOT NULL,
  `pos` int(11) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `t` int(11) NOT NULL,
  `l` int(11) NOT NULL,
  `primera` int(11) NOT NULL,
  `segunda` int(11) NOT NULL,
  `tercera` int(11) NOT NULL,
  `cuarta` int(11) NOT NULL,
  `quinta` int(11) NOT NULL,
  `sexta` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `final` int(11) NOT NULL,
  `total_general` int(11) NOT NULL,
  PRIMARY KEY (`eventos_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_tiro_eventos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_tiro_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_tiro_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `rk` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` int(11) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  `evento` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `comp` varchar(255) NOT NULL,
  `final` varchar(255) NOT NULL,
  `total` varchar(255) NOT NULL,
  `record` varchar(255) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_tiro_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_voley`
--

CREATE TABLE IF NOT EXISTS `historial_voley` (
  `voley_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_1` int(11) NOT NULL,
  `temporada_2` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `otros` varchar(255) NOT NULL,
  `partidos_jugados` int(11) NOT NULL,
  `minutos_cancha` int(11) NOT NULL,
  `saque_aciertos` int(11) NOT NULL,
  `saque_puntos` int(11) NOT NULL,
  `saque_errores` int(11) NOT NULL,
  `recepcion_efectividad` int(11) NOT NULL,
  `recepcion_errores` int(11) NOT NULL,
  `armado_puntos` int(11) NOT NULL,
  `armado_errores` int(11) NOT NULL,
  `ataque_puntos` int(11) NOT NULL,
  `ataque_errores` int(11) NOT NULL,
  `bloqueo_efectivo` int(11) NOT NULL,
  `bloqueo_errores` int(11) NOT NULL,
  `amonestaciones` int(11) NOT NULL,
  `castigos` int(11) NOT NULL,
  `expulsiones` int(11) NOT NULL,
  `descalificaciones` int(11) NOT NULL,
  `observaciones` int(11) NOT NULL,
  PRIMARY KEY (`voley_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_voley`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_voleyplaya`
--

CREATE TABLE IF NOT EXISTS `historial_voleyplaya` (
  `voley_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `temporada_1` int(11) NOT NULL,
  `temporada_2` int(11) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `pareja` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `otros` varchar(255) NOT NULL,
  `partidos_jugados` int(11) NOT NULL,
  `minutos_cancha` int(11) NOT NULL,
  `saque_aciertos` int(11) NOT NULL,
  `saque_puntos` int(11) NOT NULL,
  `saque_errores` int(11) NOT NULL,
  `recepcion_efectividad` int(11) NOT NULL,
  `recepcion_errores` int(11) NOT NULL,
  `armado_puntos` int(11) NOT NULL,
  `armado_errores` int(11) NOT NULL,
  `ataque_puntos` int(11) NOT NULL,
  `ataque_errores` int(11) NOT NULL,
  `bloqueo_efectivo` int(11) NOT NULL,
  `bloqueo_errores` int(11) NOT NULL,
  `amonestaciones` int(11) NOT NULL,
  `castigos` int(11) NOT NULL,
  `expulsiones` int(11) NOT NULL,
  `descalificaciones` int(11) NOT NULL,
  `observaciones` int(11) NOT NULL,
  PRIMARY KEY (`voley_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_voleyplaya`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_voleyplaya_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_voleyplaya_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_voleyplaya_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historial_voley_palmares`
--

CREATE TABLE IF NOT EXISTS `historial_voley_palmares` (
  `palmares_id` int(11) NOT NULL AUTO_INCREMENT,
  `historial_id` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `country` int(11) NOT NULL,
  PRIMARY KEY (`palmares_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `historial_voley_palmares`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_agilidad`
--

CREATE TABLE IF NOT EXISTS `list_agilidad` (
  `agilidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`agilidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `list_agilidad`
--

INSERT INTO `list_agilidad` (`agilidad_id`, `name`) VALUES
(1, 'Test de Lanzamiento a Diana'),
(2, 'Test del Slalom con Balón'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_arco_categoria`
--

CREATE TABLE IF NOT EXISTS `list_arco_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_arco_categoria`
--

INSERT INTO `list_arco_categoria` (`categoria_id`, `name`) VALUES
(1, 'Cadetes'),
(2, 'Juveniles'),
(3, 'Mayores'),
(4, 'Veteranos'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_arco_especialidad`
--

CREATE TABLE IF NOT EXISTS `list_arco_especialidad` (
  `especialidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`especialidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `list_arco_especialidad`
--

INSERT INTO `list_arco_especialidad` (`especialidad_id`, `name`) VALUES
(1, 'Compuesto Libre'),
(2, 'Recurvado Olímpico'),
(3, 'Compuesto Cazador'),
(4, 'Compuesto Cazador con Gatillo'),
(5, 'Tradicional Long Bow'),
(6, 'Tradicional Raso'),
(7, 'Tradicional Recurvo'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_atletismo_categoria`
--

CREATE TABLE IF NOT EXISTS `list_atletismo_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_atletismo_categoria`
--

INSERT INTO `list_atletismo_categoria` (`categoria_id`, `name`) VALUES
(1, 'mayores'),
(2, 'cadetes'),
(3, 'juveniles'),
(4, 'menores'),
(-1, 'otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_atletismo_disciplina`
--

CREATE TABLE IF NOT EXISTS `list_atletismo_disciplina` (
  `disciplina_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`disciplina_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcar la base de datos para la tabla `list_atletismo_disciplina`
--

INSERT INTO `list_atletismo_disciplina` (`disciplina_id`, `name`) VALUES
(1, '50 metros llanos'),
(2, '60 metros llanos'),
(3, '100 metros llanos'),
(4, '200 metros llanos'),
(5, '300 metros llanos'),
(6, '400 metros llanos'),
(7, '800 metros llanos'),
(8, '1.000 metros llanos'),
(9, '1.500 metros llanos'),
(10, 'Una Milla'),
(11, '3.000 metros llanos'),
(12, '5.000 metros llanos'),
(13, '10.000 metros llanos'),
(14, 'Posta 4 x 100 metros'),
(15, 'Posta 4 x 400 metros'),
(16, '60 metros con vallas'),
(17, '100 metros con vallas'),
(18, '110 metros con vallas'),
(19, '400 metros con vallas'),
(20, '3.000 metros con obstáculos'),
(21, '2.000 metros con obstáculos'),
(22, '10 Km'),
(23, '5 Km'),
(24, '15 Km'),
(25, '10 Millas'),
(26, '20 Km'),
(27, '25 Km'),
(28, '30 Km'),
(29, '50 Km'),
(30, 'Medio Maratón'),
(31, 'Maratón'),
(32, 'Decathlon'),
(33, 'Heptathlon'),
(34, 'Salto En Alto'),
(35, 'Salto con Garrocha'),
(36, 'Salto en Largo'),
(37, 'Salto Triple'),
(38, 'Lanzamiento de Bala'),
(39, 'Lanzamiento de Disco'),
(40, 'Lanzamiento de Jabalina'),
(41, 'Lanzamiento de Martillo'),
(-2, 'Combinadas'),
(-3, 'Varias'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_basquet_categoria`
--

CREATE TABLE IF NOT EXISTS `list_basquet_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `list_basquet_categoria`
--

INSERT INTO `list_basquet_categoria` (`categoria_id`, `name`) VALUES
(1, 'Mini'),
(2, 'Pre-Infantiles'),
(3, 'Infantiles'),
(4, 'Pasarela'),
(5, 'Cadetes'),
(6, 'Juveniles'),
(7, 'Primera'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_basquet_posicion`
--

CREATE TABLE IF NOT EXISTS `list_basquet_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_basquet_posicion`
--

INSERT INTO `list_basquet_posicion` (`posicion_id`, `name`) VALUES
(1, 'Base'),
(2, 'Alero'),
(3, 'Escolta'),
(4, 'Ala-Pivot'),
(5, 'Pivot'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_boxeo_categoria`
--

CREATE TABLE IF NOT EXISTS `list_boxeo_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `nivel` tinyint(4) NOT NULL COMMENT '1 - profecional. 2- aficionado. 3-amateur',
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Volcar la base de datos para la tabla `list_boxeo_categoria`
--

INSERT INTO `list_boxeo_categoria` (`categoria_id`, `nivel`, `name`) VALUES
(1, 1, 'Mínimo o paja - menos de 47.7 kg'),
(2, 1, 'Minimosca -  hasta 49 kg'),
(3, 1, 'Mosca - hasta 50,8 kg'),
(4, 1, 'Supermosca - hasta 52,2 kg'),
(5, 1, 'Gallo - hasta 53,5 kg'),
(6, 1, 'Supergallo - hasta 55,3 kg'),
(7, 1, 'Pluma - hasta 57,2 kg'),
(8, 1, 'Superpluma o ligero junior - hasta 59 kg'),
(9, 1, 'Ligero - hasta 61,2 kg'),
(10, 1, 'Superligero o welter junior - hasta 63,5 kg'),
(11, 1, 'Welter o medio mediano- hasta 66,7 kg'),
(12, 1, 'Superwelter o medio juniors - hasta 69,9 kg'),
(13, 1, 'Mediano - hasta 72,6 kg'),
(14, 1, 'Supermediano - hasta 76,2 kg'),
(15, 1, 'Mediopesado - hasta 79,4 kg'),
(16, 1, 'Crucero - hasta 90,72 kg. Solo para varones.'),
(17, 1, 'Peso pesado: Varones:  90,72 kg Mujeres:  79,37 kg'),
(18, 2, 'Peso Mosca Ligero (48 kg hombre, 46 kg mujeres)'),
(19, 2, 'Peso Mosca (51 kg hombres , 48 kg mujeres)'),
(20, 2, 'Peso Gallo (54 kg hombres , 51 kg mujeres)'),
(21, 2, 'Peso Pluma  (57 kg hombres , 54 kg mujeres)'),
(22, 2, 'Peso Ligero  (60 kg hombres , 48 kg mujeres)'),
(23, 2, 'Peso Welter Ligero(64 kg hombres , 60 kg mujeres)'),
(24, 2, 'Peso Welter  (69 kg hombres , 64 kg mujeres)'),
(25, 2, 'Peso Medio  (75 kg hombres , 69 kg mujeres)'),
(26, 2, 'Peso Semi Pesado  (81 kg hombres , 75 kg mujeres)'),
(27, 2, 'Peso Pesado  (91 kg hombres , 81 kg mujeres)'),
(28, 2, 'Peso super pesado (mas 91 kg hombres , mas 81 kg mujeres)'),
(29, 3, 'Paja (hasta 41 kg)'),
(30, 3, 'Mosca - Ligero (41 hombres  -48 kg mujeres)'),
(31, 3, 'Mosca (48 hombres  - 51 kg mujeres)'),
(32, 3, 'Gallo (51 hombres  - 54 kg mujeres)'),
(33, 3, 'Pluma (54  hombres - 57 kg mujeres)'),
(34, 3, 'Ligero (57 hombres - 60 kg mujeres)'),
(35, 3, 'Súper - Ligero (60 hombres - 64 kg mujeres)'),
(36, 3, 'Welter (64 hombres - 69 kg mujeres)'),
(37, 3, 'Medio (69 hombres - 75 kg mujeres)'),
(38, 3, 'Semi - Pesado (75 kg hombres - 81 kg mujeres)'),
(39, 3, 'Pesado (81 kg hombres - 91 kg mujeres)'),
(40, 3, 'Súper - Pesado (más de 91 kg mujeres)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_boxeo_resultado`
--

CREATE TABLE IF NOT EXISTS `list_boxeo_resultado` (
  `resultado_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`resultado_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Volcar la base de datos para la tabla `list_boxeo_resultado`
--

INSERT INTO `list_boxeo_resultado` (`resultado_id`, `name`) VALUES
(1, 'V.P. .- Vence por Puntos'),
(2, 'V.A. .- Vence por accidente'),
(3, 'P.P.  .- Pierde por puntos'),
(4, 'P.A.  .- Pierde por accidente'),
(5, 'V.K.O.  - Vence por fuera de combate'),
(6, 'V.R.S.C..- Vence por lesión'),
(7, 'P.K.O.  .- Pierde por fuera de combate'),
(8, 'P.R.S.C..- Pierde por lesión'),
(9, 'V.A.B.   .- Vence por abandono'),
(10, 'P.A.B.  .- Pierde por abandono'),
(11, 'V.K.O.T..- Vence por inferioridad'),
(12, 'C.N.      .- Combate nulo'),
(13, 'P.K.O.T..- Pierde por inferioridad'),
(14, ' V.D.       .- Vence por descalificación'),
(15, 'N.C.      .- Sin decisión'),
(16, 'P.D.      .- Pierde por descalificación');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_capacidad`
--

CREATE TABLE IF NOT EXISTS `list_capacidad` (
  `capacidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`capacidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `list_capacidad`
--

INSERT INTO `list_capacidad` (`capacidad_id`, `name`) VALUES
(1, 'Resistencia'),
(2, 'Fuerza'),
(3, 'Velocidad'),
(4, 'Potencia'),
(5, 'Flexibilidad'),
(6, 'Coordinacion'),
(7, 'Equilibrio'),
(8, 'Agilidad');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_cargo`
--

CREATE TABLE IF NOT EXISTS `list_cargo` (
  `cargo_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`cargo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `list_cargo`
--

INSERT INTO `list_cargo` (`cargo_id`, `name`) VALUES
(1, 'Presidente'),
(2, 'Vicepresidente'),
(3, 'Secretario'),
(4, 'Vocal'),
(5, 'Miembro de Comisión'),
(6, 'Directiva'),
(7, 'Administrador'),
(8, 'Representante Legal'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_ciclismo_categoria`
--

CREATE TABLE IF NOT EXISTS `list_ciclismo_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `list_ciclismo_categoria`
--

INSERT INTO `list_ciclismo_categoria` (`categoria_id`, `name`) VALUES
(1, 'Principiante'),
(2, 'Infantiles'),
(3, 'Cadetes'),
(4, 'Junior'),
(5, 'Sub-23'),
(6, 'Elite'),
(7, 'Elite UCI'),
(8, 'Master A'),
(9, 'Master B'),
(10, 'Master C'),
(11, 'Master D'),
(12, 'Master E'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_ciclismo_especialidad`
--

CREATE TABLE IF NOT EXISTS `list_ciclismo_especialidad` (
  `especialidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`especialidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `list_ciclismo_especialidad`
--

INSERT INTO `list_ciclismo_especialidad` (`especialidad_id`, `name`) VALUES
(1, 'BMX'),
(2, 'BMX Supercross'),
(3, 'Ciclo-cross'),
(4, 'Continental Profesional'),
(5, 'Mountain Bike'),
(6, 'Pista'),
(7, 'Ruta'),
(8, 'Ruta y Pista'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_ciclismo_modalidad`
--

CREATE TABLE IF NOT EXISTS `list_ciclismo_modalidad` (
  `modalidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`modalidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `list_ciclismo_modalidad`
--

INSERT INTO `list_ciclismo_modalidad` (`modalidad_id`, `name`) VALUES
(1, 'Persecución'),
(2, 'Persecución por Equipos'),
(3, 'Kilómetro'),
(4, 'Scratch'),
(5, 'Velocidad'),
(6, 'Velocidad por equipos'),
(7, 'Ruta Elite'),
(8, 'en Línea'),
(9, 'Ruta Contrareloj'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_ciclismo_representa`
--

CREATE TABLE IF NOT EXISTS `list_ciclismo_representa` (
  `representa_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`representa_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_ciclismo_representa`
--

INSERT INTO `list_ciclismo_representa` (`representa_id`, `name`) VALUES
(1, 'Asociación'),
(2, 'Club'),
(3, 'Federación'),
(4, 'Sindicato'),
(5, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_club_categoria`
--

CREATE TABLE IF NOT EXISTS `list_club_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `list_club_categoria`
--

INSERT INTO `list_club_categoria` (`categoria_id`, `name`) VALUES
(1, 'Primera División'),
(2, 'Segunda División'),
(3, 'Tercera División'),
(4, 'Cuarta División'),
(5, 'Quinta División'),
(6, 'Sexta División'),
(7, 'Séptima División'),
(8, 'Octava División'),
(9, 'Novena División'),
(-1, 'otras');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_coordinacion`
--

CREATE TABLE IF NOT EXISTS `list_coordinacion` (
  `coordinacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`coordinacion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `list_coordinacion`
--

INSERT INTO `list_coordinacion` (`coordinacion_id`, `name`) VALUES
(1, 'Test de Lanzamiento a Diana'),
(2, 'Test del Slalom con Balón'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_country`
--

CREATE TABLE IF NOT EXISTS `list_country` (
  `country_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`country_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=242 ;

--
-- Volcar la base de datos para la tabla `list_country`
--

INSERT INTO `list_country` (`country_id`, `name`) VALUES
(1, 'Afganistán'),
(2, 'Albania'),
(3, 'Alemania'),
(4, 'American Samoa'),
(5, 'Andorra'),
(6, 'Angola'),
(7, 'Anguila'),
(8, 'Antigua and Barbuda'),
(9, 'Antillas Holandesas'),
(10, 'Antártida'),
(11, 'Arabia Saudita'),
(12, 'Argelia'),
(13, 'Argentina'),
(14, 'Armenia'),
(15, 'Aruba'),
(17, 'Australia'),
(18, 'Austria'),
(19, 'Azerbaijan'),
(20, 'Bahamas'),
(21, 'Bahrein'),
(22, 'Bangladesh'),
(23, 'Barbados'),
(24, 'Belice'),
(25, 'Benin'),
(26, 'Bermuda'),
(27, 'Bielorrusia'),
(28, 'Bolivia'),
(29, 'Bosnia y Herzegovina'),
(30, 'Botsuana'),
(31, 'Bouvet Island'),
(32, 'Brasil'),
(33, 'British Indian Ocean Territory'),
(34, 'Brunei Darussalam'),
(35, 'Bulgaria'),
(36, 'Burkina Faso'),
(37, 'Burundi'),
(38, 'Bután'),
(39, 'Bélgica'),
(40, 'Cabo Verda'),
(41, 'Camboya'),
(42, 'Camerún'),
(44, 'Canadá'),
(45, 'Chad'),
(46, 'Chile'),
(47, 'China'),
(48, 'Chipre'),
(49, 'Colombia'),
(50, 'Comores'),
(51, 'Congo'),
(52, 'Corea del Norte'),
(53, 'Corea del Sur'),
(54, 'Costa Rica'),
(55, 'Cote D Ivoire'),
(56, 'Croacia'),
(57, 'Cuba'),
(58, 'Dinamarca'),
(59, 'Djibouti'),
(60, 'Dominica'),
(61, 'East Timor'),
(62, 'Ecuador'),
(63, 'Egipto'),
(64, 'El Salvador'),
(65, 'El Vaticano'),
(66, 'Emiratos Arabes Unidos'),
(67, 'Eritrea'),
(68, 'Eslovaquia'),
(69, 'Eslovenia'),
(70, 'España'),
(71, 'Estados Unidos'),
(72, 'Estonia'),
(73, 'Etiopía'),
(74, 'Fiji'),
(75, 'Filipinas'),
(76, 'Finlandia'),
(77, 'Francia'),
(78, 'French Guiana'),
(79, 'French Polynesia'),
(80, 'French Southern Territories'),
(81, 'Gabón'),
(82, 'Gambia'),
(83, 'Georgia'),
(84, 'Ghana'),
(85, 'Gibraltar'),
(86, 'Granada'),
(87, 'Grecia'),
(88, 'Groenlandia'),
(89, 'Guadalupe'),
(90, 'Guam'),
(91, 'Guatemala'),
(92, 'Guinea'),
(93, 'Guinea Ecuatorial'),
(94, 'Guinea-Bissau'),
(95, 'Guyana'),
(96, 'Haití'),
(97, 'Heard Island and McDonald Isla'),
(98, 'Holanda'),
(99, 'Honduras'),
(100, 'Hong Kong'),
(101, 'Hungría'),
(102, 'India'),
(103, 'Indonesia'),
(104, 'Iraq'),
(105, 'Irlanda'),
(106, 'Isalas Cocos'),
(107, 'Isla Christmas'),
(108, 'Islandia'),
(109, 'Islas Caimán'),
(110, 'Islas Cook'),
(111, 'Islas Feroe'),
(112, 'Islas Malvinas'),
(113, 'Islas Marshall'),
(114, 'Islas Mauricio'),
(115, 'Islas Salomón'),
(116, 'Islas Sandwhich'),
(117, 'Islas Turks y Caicos'),
(118, 'Islas Wallis y Futuna'),
(119, 'Israel'),
(120, 'Italia'),
(121, 'Jamaica'),
(122, 'Japón'),
(123, 'Jordania'),
(124, 'Kazakhstán'),
(125, 'Kenia'),
(126, 'Kiribati'),
(127, 'Kuwait'),
(128, 'Kyrgyzstán'),
(129, 'Laos'),
(130, 'Latvia'),
(131, 'Lesoto'),
(132, 'Liberia'),
(133, 'Libia'),
(134, 'Liechtenstein'),
(135, 'Lituania'),
(136, 'Luxemburgo'),
(137, 'Líbano'),
(138, 'Macao'),
(139, 'Macedonia'),
(140, 'Madagascar'),
(141, 'Malasia'),
(142, 'Malaui'),
(143, 'Maldivas'),
(144, 'Malta'),
(145, 'Malí'),
(146, 'Marruecos'),
(147, 'Martinique'),
(148, 'Mauritania'),
(149, 'Mayotte'),
(150, 'Micronesia'),
(151, 'Moldavia'),
(152, 'Mongolia'),
(153, 'Montserrat'),
(154, 'Mozambique'),
(155, 'Myanmar'),
(156, 'México'),
(157, 'Mónaco'),
(158, 'Namibia'),
(159, 'Nauru'),
(160, 'Nepal'),
(161, 'Nicaragua'),
(162, 'Nigeria'),
(163, 'Niue'),
(164, 'Norfolk Island'),
(165, 'Northern Mariana Islands'),
(166, 'Noruega'),
(167, 'Nueva Caledonia'),
(168, 'Nueva Zelanda'),
(169, 'Níger'),
(170, 'Omán'),
(171, 'Pakistán'),
(172, 'Palau'),
(173, 'Palestinian Territory'),
(174, 'Panamá'),
(175, 'Papúa Nueva Guinea'),
(176, 'Paraguay'),
(177, 'Perú'),
(178, 'Pitcairn'),
(179, 'Polonia'),
(180, 'Portugal'),
(181, 'Puerto Rico'),
(182, 'Qatar'),
(183, 'Reino Unido'),
(184, 'República Centroafricana'),
(185, 'República Checa'),
(186, 'República Democrática del Cong'),
(187, 'República Dominicana'),
(188, 'República Islámica de Irán'),
(189, 'Ruanda'),
(190, 'Rumania'),
(191, 'Rusian'),
(192, 'Saint Kitts and Nevis'),
(193, 'Saint Pierre y Miquelon'),
(194, 'Samoa'),
(195, 'San Marino'),
(196, 'San Vicente y Las Granadinas'),
(197, 'Santa Elena'),
(198, 'Santa Lucía'),
(199, 'Sao Tome and Principe'),
(200, 'Senegal'),
(201, 'Serbia y Montenegro'),
(202, 'Seychelles'),
(203, 'Sierra Leona'),
(204, 'Singapur'),
(205, 'Siria'),
(206, 'Somalía'),
(207, 'Sri Lanka'),
(208, 'Suazilandia'),
(209, 'Sudáfrica'),
(210, 'Sudán'),
(211, 'Suecia'),
(212, 'Suiza'),
(213, 'Surinam'),
(214, 'Svalbard and Jan Mayen'),
(215, 'Tailandia'),
(216, 'Taiwan'),
(217, 'Tajikistán'),
(218, 'Tanzania'),
(219, 'Togo'),
(220, 'Tonga'),
(221, 'Toquelau'),
(222, 'Trinidad y Tobago'),
(223, 'Turkmenistán'),
(224, 'Turquía'),
(225, 'Tuvalu'),
(226, 'Túnez'),
(227, 'Ucrania'),
(228, 'Uganda'),
(229, 'United States Minor Outlying I'),
(230, 'Uruguay'),
(231, 'Uzbekistan'),
(232, 'Vanuatu'),
(233, 'Venezuela'),
(234, 'Vietnam'),
(235, 'Virgin Islands British'),
(236, 'Virgin Islands U.S.'),
(237, 'Western Sahara'),
(238, 'Yemen'),
(239, 'Zaire'),
(240, 'Zambia'),
(241, 'Zimbabue');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_educacion`
--

CREATE TABLE IF NOT EXISTS `list_educacion` (
  `educacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`educacion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_educacion`
--

INSERT INTO `list_educacion` (`educacion_id`, `name`) VALUES
(1, 'Secundarios'),
(2, 'Terciarios'),
(3, 'Universitarios'),
(4, 'Postgrados'),
(5, 'Cursos de Ampliación Profesional'),
(6, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_empresas_rubros`
--

CREATE TABLE IF NOT EXISTS `list_empresas_rubros` (
  `rubros_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`rubros_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Volcar la base de datos para la tabla `list_empresas_rubros`
--

INSERT INTO `list_empresas_rubros` (`rubros_id`, `name`) VALUES
(1, 'Administración y Contabilidad'),
(2, 'Agricultura / Ganadería'),
(3, 'Almacenamiento/Logística/Distribución'),
(4, 'Arquitectura'),
(5, 'Automotor'),
(6, 'Comercial / Ventas'),
(7, 'Comercio Exterior'),
(8, 'Construcción'),
(9, 'Consultoría y Servicios'),
(10, 'Deportes'),
(11, 'Demoliciones / Excavaciones'),
(12, 'Diseño'),
(13, 'Ecología'),
(14, 'Educación y Capacitación'),
(15, 'Electricidad y Electrónica'),
(16, 'Energía'),
(17, 'Entretenimiento'),
(18, 'Envases y Embalajes'),
(19, 'Equipamientos'),
(20, 'Estética y Cuidado Personal'),
(21, 'Farmacias'),
(22, 'Finanzas y Economía'),
(23, 'Gastronomía'),
(24, 'Hotelería'),
(25, 'Indumentaria / Accesorios'),
(26, 'Industria'),
(27, 'Informática'),
(28, 'Ingeniería / Tecnicatura'),
(29, 'Inmobiliaria'),
(30, 'Limpieza'),
(31, 'Marketing y Publicidad'),
(32, 'Mecánica'),
(33, 'Medicina'),
(34, 'Metalúrgica'),
(35, 'Música / Arte / Cultura'),
(36, 'Nutrición'),
(37, 'Producción'),
(38, 'Profesionales'),
(39, 'Recursos humanos'),
(40, 'Relaciones Públicas'),
(41, 'Salud'),
(42, 'Seguridad'),
(43, 'Tabaco'),
(44, 'Telefonía'),
(45, 'Televisión'),
(46, 'Transportes'),
(47, 'Turismo'),
(48, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_equilibrio`
--

CREATE TABLE IF NOT EXISTS `list_equilibrio` (
  `equilibrio_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`equilibrio_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `list_equilibrio`
--

INSERT INTO `list_equilibrio` (`equilibrio_id`, `name`) VALUES
(1, 'Test de Balanza'),
(2, 'Test de la Barra de Equilibrio'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_escalada_categoria`
--

CREATE TABLE IF NOT EXISTS `list_escalada_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_escalada_categoria`
--

INSERT INTO `list_escalada_categoria` (`categoria_id`, `name`) VALUES
(1, 'Infantiles'),
(2, 'Juveniles'),
(3, 'Promocionales'),
(4, 'Mayores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_escalada_graduacion`
--

CREATE TABLE IF NOT EXISTS `list_escalada_graduacion` (
  `graduacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `grado` tinyint(4) NOT NULL DEFAULT '1' COMMENT '1 - Francesa. 2-USA, 3-UIAA',
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`graduacion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=64 ;

--
-- Volcar la base de datos para la tabla `list_escalada_graduacion`
--

INSERT INTO `list_escalada_graduacion` (`graduacion_id`, `grado`, `name`) VALUES
(1, 1, '6a'),
(2, 1, '6a+'),
(3, 1, '6b'),
(4, 1, '6b+'),
(5, 1, '6c'),
(6, 1, '6c+'),
(7, 1, '7a'),
(8, 1, '7a+'),
(9, 1, '7b'),
(10, 1, '7b+'),
(11, 1, '7c'),
(12, 1, '7c+'),
(13, 1, '8a'),
(14, 1, '8a+'),
(15, 1, '8b'),
(16, 1, '8b+'),
(17, 1, '8c'),
(18, 1, '8c+'),
(19, 1, '9a'),
(20, 1, '9a+'),
(21, 1, '9b'),
(22, 1, '9b+'),
(23, 2, '5.10a'),
(24, 2, '5.10b'),
(25, 2, '5.10c'),
(26, 2, '5.10d'),
(27, 2, '5.11a'),
(28, 2, '5.11 b/c'),
(29, 2, '5.11d'),
(30, 2, '5.12a'),
(31, 2, '5.12b'),
(32, 2, '5.12c'),
(33, 2, '5.12d'),
(34, 2, '5.13a'),
(35, 2, '5.13b'),
(36, 2, '5.13c'),
(37, 2, '5.13d'),
(38, 2, '5.14a'),
(39, 2, '5.14b'),
(40, 2, '5.14c'),
(41, 2, '5.14d'),
(42, 2, '5.15a'),
(43, 2, '5.15b'),
(44, 3, 'VI+'),
(45, 3, 'VII-'),
(46, 3, 'VII'),
(47, 3, 'VII+'),
(48, 3, 'VII+ /VIII-'),
(49, 3, 'VIII-'),
(50, 3, 'VIII'),
(51, 3, 'VIII/VIII+'),
(52, 3, 'VIII'),
(53, 3, 'IX-'),
(54, 3, 'IX'),
(55, 3, 'IX/IX+'),
(56, 3, 'IX'),
(57, 3, 'X-'),
(58, 3, 'X'),
(59, 3, 'X+  XI-'),
(60, 3, 'XI'),
(61, 3, 'XI+'),
(62, 3, 'XII-'),
(63, 3, 'XII');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_escalada_modalidad`
--

CREATE TABLE IF NOT EXISTS `list_escalada_modalidad` (
  `modalidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`modalidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_escalada_modalidad`
--

INSERT INTO `list_escalada_modalidad` (`modalidad_id`, `name`) VALUES
(1, 'Boulder A vista'),
(2, 'Boulder Trabajada'),
(3, 'Vía A vista'),
(4, 'Vía Trabajada'),
(5, 'Vía y Boulder A vista'),
(6, 'Vía y Boulder Trabajada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_flexibilidad`
--

CREATE TABLE IF NOT EXISTS `list_flexibilidad` (
  `flexibilidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`flexibilidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Volcar la base de datos para la tabla `list_flexibilidad`
--

INSERT INTO `list_flexibilidad` (`flexibilidad_id`, `name`) VALUES
(1, 'Extensión en Paso de Valla'),
(2, 'Flexión de Hombro'),
(3, 'Flexión de Tronco (Plano Horizontal)'),
(4, 'Flexión de Tronco (Plano Vertical)'),
(5, 'Flexión Profunda del Tronco'),
(6, 'Test de Ely'),
(7, 'Test de Flop'),
(8, 'Test de Ober'),
(9, 'Spagat Frontal'),
(10, 'Spagat Lateral'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_fuerza`
--

CREATE TABLE IF NOT EXISTS `list_fuerza` (
  `fuerza_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`fuerza_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_fuerza`
--

INSERT INTO `list_fuerza` (`fuerza_id`, `name`) VALUES
(1, 'Test Ley de Hill (1RM)'),
(2, 'Test Dinámicos'),
(3, 'Otros Test de Fuerza');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_fuerza_otrostest`
--

CREATE TABLE IF NOT EXISTS `list_fuerza_otrostest` (
  `otrostest_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`otrostest_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `list_fuerza_otrostest`
--

INSERT INTO `list_fuerza_otrostest` (`otrostest_id`, `name`) VALUES
(1, 'Abdominales 1 min.'),
(2, 'Absominales 30 seg.'),
(3, 'Balón Medicinal 3 Kg.'),
(4, 'Presión de Mano'),
(5, 'Salto Horizontal'),
(6, 'Salto Vertical'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_fuerza_testdinamicos`
--

CREATE TABLE IF NOT EXISTS `list_fuerza_testdinamicos` (
  `testdinamicos_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`testdinamicos_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_fuerza_testdinamicos`
--

INSERT INTO `list_fuerza_testdinamicos` (`testdinamicos_id`, `name`) VALUES
(1, 'Arranque'),
(2, 'Cargada'),
(3, 'Envión'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_fuerza_testley`
--

CREATE TABLE IF NOT EXISTS `list_fuerza_testley` (
  `testley_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`testley_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `list_fuerza_testley`
--

INSERT INTO `list_fuerza_testley` (`testley_id`, `name`) VALUES
(1, 'Cuádriceps'),
(2, 'Isquiotibiales'),
(3, 'Press de Banco'),
(4, 'Press Militar'),
(5, 'Remo acostado'),
(6, 'Remo al Mentón'),
(7, 'Sentadilla'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_futbol_categoria`
--

CREATE TABLE IF NOT EXISTS `list_futbol_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_futbol_categoria`
--

INSERT INTO `list_futbol_categoria` (`categoria_id`, `name`) VALUES
(1, 'Primera División'),
(2, 'Segunda División'),
(3, 'Tercera División'),
(4, 'Cuarta División'),
(5, 'Quinta División'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_futbol_posicion`
--

CREATE TABLE IF NOT EXISTS `list_futbol_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_futbol_posicion`
--

INSERT INTO `list_futbol_posicion` (`posicion_id`, `name`) VALUES
(1, 'Arquero'),
(2, 'Defensor'),
(3, 'Volante'),
(4, 'Delantero'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_futsal_categoria`
--

CREATE TABLE IF NOT EXISTS `list_futsal_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `list_futsal_categoria`
--

INSERT INTO `list_futsal_categoria` (`categoria_id`, `name`) VALUES
(1, 'Pre-benjamín 6-7 años'),
(2, 'Benjamín 8-9 años'),
(3, 'Alevín 10-11 años'),
(4, 'Infantil 12-13 años'),
(5, 'Cadete 14-15 años'),
(6, 'Juvenil 16-18 años'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_futsal_posicion`
--

CREATE TABLE IF NOT EXISTS `list_futsal_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `list_futsal_posicion`
--

INSERT INTO `list_futsal_posicion` (`posicion_id`, `name`) VALUES
(1, 'Arquero'),
(2, 'Cierre'),
(3, 'Ala'),
(4, 'Ala Derecha'),
(5, 'Ala Izquierda'),
(6, 'Ala-Cierre'),
(7, 'Ala-Pivot'),
(8, 'Pivot'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_halterofilia_categoria`
--

CREATE TABLE IF NOT EXISTS `list_halterofilia_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_halterofilia_categoria`
--

INSERT INTO `list_halterofilia_categoria` (`categoria_id`, `name`) VALUES
(1, 'Mayores'),
(2, 'Juveniles'),
(3, 'Cadetes'),
(4, 'Menores'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_halterofilia_division`
--

CREATE TABLE IF NOT EXISTS `list_halterofilia_division` (
  `division_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`division_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Volcar la base de datos para la tabla `list_halterofilia_division`
--

INSERT INTO `list_halterofilia_division` (`division_id`, `name`) VALUES
(1, '44 Kg'),
(2, '48 Kg'),
(3, '50 Kg'),
(4, '53 Kg'),
(5, '56 Kg'),
(6, '58 Kg'),
(7, '62 Kg'),
(8, '63 Kg'),
(9, '69 Kg'),
(10, '+69 Kg'),
(11, '75 Kg'),
(12, '+75 Kg'),
(13, '77 Kg'),
(14, '85 Kg'),
(15, '94 Kg'),
(16, '+94 Kg'),
(17, '105 Kg'),
(18, '+105 Kg'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_handball_categoria`
--

CREATE TABLE IF NOT EXISTS `list_handball_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `list_handball_categoria`
--

INSERT INTO `list_handball_categoria` (`categoria_id`, `name`) VALUES
(1, 'Mayores'),
(2, 'Junior'),
(3, 'Juveniles'),
(4, 'Cadetes'),
(5, 'Menores'),
(6, 'Infantiles'),
(7, 'Mini'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_handball_posicion`
--

CREATE TABLE IF NOT EXISTS `list_handball_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_handball_posicion`
--

INSERT INTO `list_handball_posicion` (`posicion_id`, `name`) VALUES
(1, 'arquero'),
(2, 'Central'),
(3, 'Lateral'),
(4, 'Extremo'),
(5, 'Pivote');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_hockeyc_categoria`
--

CREATE TABLE IF NOT EXISTS `list_hockeyc_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `list_hockeyc_categoria`
--

INSERT INTO `list_hockeyc_categoria` (`categoria_id`, `name`) VALUES
(1, 'Primera División'),
(2, 'Intermedia'),
(3, 'Quinta División'),
(4, 'Sexta División'),
(5, 'Séptima División'),
(6, 'Octava División'),
(7, 'Novena División'),
(-1, 'Otra'),
(8, 'Décima División'),
(9, 'Menores');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_hockeyc_golpe`
--

CREATE TABLE IF NOT EXISTS `list_hockeyc_golpe` (
  `pegada_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`pegada_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_hockeyc_golpe`
--

INSERT INTO `list_hockeyc_golpe` (`pegada_id`, `name`) VALUES
(1, 'Pegada Moderna'),
(2, 'Arrastrada'),
(3, 'Flick'),
(4, 'Revés'),
(5, 'Barrido'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_hockeyc_posicion`
--

CREATE TABLE IF NOT EXISTS `list_hockeyc_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_hockeyc_posicion`
--

INSERT INTO `list_hockeyc_posicion` (`posicion_id`, `name`) VALUES
(1, 'Arquero'),
(2, 'Defensor'),
(3, 'Volante'),
(4, 'Delantero');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_hockeyc_superficie`
--

CREATE TABLE IF NOT EXISTS `list_hockeyc_superficie` (
  `superficie_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`superficie_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Volcar la base de datos para la tabla `list_hockeyc_superficie`
--

INSERT INTO `list_hockeyc_superficie` (`superficie_id`, `name`) VALUES
(6, 'Tierra Compacta'),
(5, 'Cesped Natural'),
(7, 'Cesped Sintetico'),
(8, 'Pista'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_lang`
--

CREATE TABLE IF NOT EXISTS `list_lang` (
  `lang_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`lang_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=76 ;

--
-- Volcar la base de datos para la tabla `list_lang`
--

INSERT INTO `list_lang` (`lang_id`, `name`) VALUES
(1, 'Afrikaans'),
(2, 'Albanés'),
(3, 'Alemán'),
(4, 'Amharico'),
(5, 'Arabe'),
(6, 'Armenio'),
(7, 'Bengali'),
(8, 'Bieloruso'),
(9, 'Birmanés'),
(10, 'Bulgaro'),
(11, 'Catalan'),
(12, 'Checo'),
(13, 'Chino'),
(14, 'Coreano'),
(15, 'Croata'),
(16, 'Danés'),
(17, 'Dari'),
(18, 'Dzongkha'),
(19, 'Escocés'),
(20, 'Eslovaco'),
(21, 'Esloveniano'),
(22, 'Español'),
(23, 'Esperanto'),
(24, 'Estoniano'),
(25, 'Faroese'),
(26, 'Farsi'),
(27, 'Finlandés'),
(28, 'Francés'),
(29, 'Gaelico'),
(30, 'Galese'),
(31, 'Gallego'),
(32, 'Griego'),
(33, 'Hebreo'),
(34, 'Hindi'),
(35, 'Holandés'),
(36, 'Hungaro'),
(37, 'Indonesio'),
(38, 'Inuktitut (Eskimo)'),
(39, 'Islandico'),
(40, 'Italiano'),
(41, 'Japonés'),
(42, 'Khmer'),
(43, 'Kurdo'),
(44, 'Lao'),
(45, 'Laponico'),
(46, 'Latviano'),
(47, 'Lituano'),
(48, 'Macedonio'),
(49, 'Malayés'),
(50, 'Maltés'),
(51, 'Nepali'),
(52, 'Noruego'),
(53, 'Pashto'),
(54, 'Polaco'),
(55, 'Portugués'),
(56, 'Rumano'),
(57, 'Ruso'),
(58, 'Serbio'),
(59, 'Somali'),
(60, 'Suahili'),
(61, 'Sueco'),
(62, 'Tagalog-Filipino'),
(63, 'Tajik'),
(64, 'Tamil'),
(65, 'Tailandés'),
(66, 'Tibetano'),
(67, 'Tigrinia'),
(68, 'Tonganés'),
(69, 'Turco'),
(70, 'Turkmenistano'),
(71, 'Ucraniano'),
(72, 'Urdu'),
(73, 'UzbekistanoVasco'),
(74, 'Vietnamés'),
(75, 'Inglés');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_lesion`
--

CREATE TABLE IF NOT EXISTS `list_lesion` (
  `lesion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`lesion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=100 ;

--
-- Volcar la base de datos para la tabla `list_lesion`
--

INSERT INTO `list_lesion` (`lesion_id`, `name`) VALUES
(1, 'Calcificaciones'),
(2, 'Capsulitis Adhesiva u Hombro Congelado'),
(3, 'Desgarro Muscular'),
(4, 'Dislocación A-C'),
(5, 'Dislocación de Cadera'),
(6, 'Dislocación de Columna'),
(7, 'Dislocación de Falanges'),
(8, 'Dislocación de Hombro'),
(9, 'Dislocación de Rótula'),
(10, 'Esguince de Rodilla'),
(11, 'Esguince de Tobillo'),
(12, 'Fisura de Acromion'),
(13, 'Fisura de Antebrazo'),
(14, 'Fisura de Astrágalo'),
(15, 'Fisura de Bennett y Rolando'),
(16, 'Fisura de Cadera'),
(17, 'Fisura de Calcáneo'),
(18, 'Fisura de Carpo'),
(19, 'Fisura de Clavícula'),
(20, 'Fisura de Codo'),
(21, 'Fisura de Columna'),
(22, 'Fisura de Costilla'),
(23, 'Fisura de Cráneo'),
(24, 'Fisura de Cúbito'),
(25, 'Fisura de Cuboides '),
(26, 'Fisura de Cuña'),
(27, 'Fisura de Escafoides'),
(28, 'Fisura de Falanges'),
(29, 'Fisura de Fémur'),
(30, 'Fisura de Húmero'),
(31, 'Fisura de Metacarpiano'),
(32, 'Fisura de Metatarsiano'),
(33, 'Fisura de Muñeca'),
(34, 'Fisura de Omóplato'),
(35, 'Fisura de Pelvis'),
(36, 'Fisura de Quinto Metatarsiano'),
(37, 'Fisura de Radio'),
(38, 'Fisura de Rótula'),
(39, 'Fisura de Tarso'),
(40, 'Fisura de Tibia y Peroné'),
(41, 'Fisura de Tibia '),
(42, 'Fisura de Peroné'),
(43, 'Fisura de Tobillo'),
(44, 'Fisura de Vértebra '),
(45, 'Fisura de Hueso Ilíaco'),
(46, 'Fractura de Acromion'),
(47, 'Fractura de Antebrazo'),
(48, 'Fractura de Astrágalo'),
(49, 'Fractura de Bennett y Rolando'),
(50, 'Fractura de Cadera'),
(51, 'Fractura de Calcáneo'),
(52, 'Fractura de Carpo'),
(53, 'Fractura de Clavícula'),
(54, 'Fractura de Codo'),
(55, 'Fractura de Columna'),
(56, 'Fractura de Costilla'),
(57, 'Fractura de Cráneo'),
(58, 'Fractura de Cúbito'),
(59, 'Fractura de Cuboides '),
(60, 'Fractura de Cuña'),
(61, 'Fractura de Escafoides'),
(62, 'Fractura de Falanges'),
(63, 'Fractura de Fémur'),
(64, 'Fractura de Húmero'),
(65, 'Fractura de Metacarpiano'),
(66, 'Fractura de Metatarsiano'),
(67, 'Fractura de Muñeca'),
(68, 'Fractura de Omóplato'),
(69, 'Fractura de Pelvis'),
(70, 'Fractura de Quinto Metatarsiano'),
(71, 'Fractura de Radio'),
(72, 'Fractura de Rótula'),
(73, 'Fractura de Tarso'),
(74, 'Fractura de Tibia y Peroné'),
(75, 'Fractura de Tibia '),
(76, 'Fractura de Peroné'),
(77, 'Fractura de Tobillo'),
(78, 'Fractura de Vértebra '),
(79, 'Fractura de Hueso Ilíaco'),
(80, 'Hernia Discal'),
(81, 'Luxación A-C'),
(82, 'Luxación de Cadera'),
(83, 'Luxación de Codo'),
(84, 'Luxación de Hombro'),
(85, 'Reemplazo de Rodilla'),
(86, 'Rotura Cartilaginosa'),
(87, 'Rotura de Articulaciones'),
(88, 'Rotura de Ligamento Cruzado Anterior (LCA)'),
(89, 'Rotura de Ligamento Cruzado Posterior (LCP)'),
(90, 'Rotura de Ligamento Lateral Externo (LLE)'),
(91, 'Rotura de Ligamento Lateral Interno (LLI)'),
(92, 'Rotura de Ligamentos'),
(93, 'Rotura de Manguito Rotador'),
(94, 'Rotura de Menisco Externo'),
(95, 'Rotura de Tendón de Aquiles'),
(96, 'Rotura de Tendón Rotuliano'),
(97, 'Rotura de Menisco Interno'),
(98, 'Rotura Muscular'),
(99, 'Tennis Elbow o Codo de Tenista Otra)');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_marciales_modalidad`
--

CREATE TABLE IF NOT EXISTS `list_marciales_modalidad` (
  `modalidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`modalidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Volcar la base de datos para la tabla `list_marciales_modalidad`
--

INSERT INTO `list_marciales_modalidad` (`modalidad_id`, `name`) VALUES
(1, 'Aikido'),
(2, 'Body Combat'),
(3, 'Brazilian JiuJitsu'),
(4, 'Capoeira'),
(5, 'Choi Kwang-Do'),
(6, 'Chung Moo Doe'),
(7, 'Fight Do'),
(8, 'Full Contact'),
(9, 'Hapkido'),
(10, 'Iaido'),
(11, 'Japanese Sword'),
(12, 'Arts'),
(13, 'Jeet Kune Do (JKD)'),
(14, 'Jiu-Jitsu'),
(15, 'Judo'),
(16, 'Judo Especial'),
(17, 'Kali'),
(18, 'Kajukenbo'),
(19, 'Karate'),
(20, 'Kendo'),
(21, 'Kenpo'),
(22, 'Kenjutsu'),
(23, 'Kickboxing'),
(24, 'Kobudo'),
(25, 'Krav Maga'),
(26, 'Kuk'),
(27, 'Sool Won'),
(28, 'Kung Fu'),
(29, 'Lua'),
(30, 'Lucha'),
(31, 'Mixed Martial Arts/MMA'),
(32, 'Muay Thai'),
(33, 'Ninjutsu'),
(34, 'Sambo'),
(35, 'Savate'),
(36, 'Shaolin Do'),
(37, 'Shorinji Kempo'),
(38, 'Silat'),
(39, 'Sipalki Do'),
(40, 'Sumo'),
(41, 'Tae Bo'),
(42, 'Taekwondo'),
(43, 'Tai Chi Chuan'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_natacion_modalidad`
--

CREATE TABLE IF NOT EXISTS `list_natacion_modalidad` (
  `modalidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`modalidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_natacion_modalidad`
--

INSERT INTO `list_natacion_modalidad` (`modalidad_id`, `name`) VALUES
(1, 'Aguas Abiertas'),
(2, 'Braza'),
(3, 'Crol'),
(4, 'Espalda'),
(5, 'Mariposa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_padel_golpe`
--

CREATE TABLE IF NOT EXISTS `list_padel_golpe` (
  `golpe_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`golpe_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `list_padel_golpe`
--

INSERT INTO `list_padel_golpe` (`golpe_id`, `name`) VALUES
(1, 'Drive'),
(2, 'Revés'),
(3, 'Volea derecha'),
(4, 'Volea Revés'),
(5, 'Smash'),
(6, 'Pared de Derecha'),
(7, 'Pared de Revés'),
(8, 'Bandeja'),
(9, 'Saque'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_passport`
--

CREATE TABLE IF NOT EXISTS `list_passport` (
  `passport_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`passport_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_passport`
--

INSERT INTO `list_passport` (`passport_id`, `name`) VALUES
(1, 'Sin Pasaporte'),
(3, 'Comunitario'),
(4, 'Extracomunitario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_patinaje_especialidad`
--

CREATE TABLE IF NOT EXISTS `list_patinaje_especialidad` (
  `especialidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` tinyint(4) NOT NULL COMMENT '1- artistico. 2- de velocidad',
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`especialidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=25 ;

--
-- Volcar la base de datos para la tabla `list_patinaje_especialidad`
--

INSERT INTO `list_patinaje_especialidad` (`especialidad_id`, `categoria`, `name`) VALUES
(1, 1, 'Senior'),
(2, 1, 'Junior'),
(3, 1, 'Cadetes'),
(4, 1, 'Infantil'),
(5, 1, 'In Line'),
(6, 1, 'Nacional'),
(7, 1, 'Provincial y Regional'),
(-2, 1, 'Otro'),
(9, 2, 'Pre-infantil'),
(10, 2, 'Infantil'),
(11, 2, 'Junior'),
(12, 2, 'Pre-juvenil'),
(13, 2, 'Juvenil'),
(14, 2, 'Mayores Seniors'),
(15, 2, 'Juniors'),
(16, 2, 'Tercera'),
(17, 2, 'Cuarta'),
(18, 2, 'Quinta'),
(19, 2, 'Sexta'),
(20, 2, 'Veteranos'),
(21, 2, 'Nacional'),
(22, 2, 'Provincial'),
(23, 2, 'Regional'),
(-1, 2, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_potencia`
--

CREATE TABLE IF NOT EXISTS `list_potencia` (
  `potencia_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`potencia_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `list_potencia`
--

INSERT INTO `list_potencia` (`potencia_id`, `name`) VALUES
(1, 'Saltos Simples'),
(2, 'Saltos Continuos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_potencia_continuos`
--

CREATE TABLE IF NOT EXISTS `list_potencia_continuos` (
  `continuos_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`continuos_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_potencia_continuos`
--

INSERT INTO `list_potencia_continuos` (`continuos_id`, `name`) VALUES
(1, 'Por Número de Saltos'),
(2, 'Por Tiempo'),
(3, 'Bounce (Stifness'),
(4, 'Con Pierna Derecha'),
(5, 'Con Pierna Izquierda'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_potencia_simples`
--

CREATE TABLE IF NOT EXISTS `list_potencia_simples` (
  `simples_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`simples_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Volcar la base de datos para la tabla `list_potencia_simples`
--

INSERT INTO `list_potencia_simples` (`simples_id`, `name`) VALUES
(1, 'Rocket Jump'),
(2, 'Couter Movement Jump (CMJ) con Carga'),
(3, 'Couter Movement Jump (CMJ)'),
(4, 'Squat Jump (SJ) con Carga'),
(5, 'Squat Jump (SJ)'),
(6, 'Abalakov (ABK)'),
(7, 'Drow Jump'),
(8, 'Máximo (Ambos Pies)'),
(9, 'Máximo (Pie Derecho)'),
(10, 'Máximo (Pie izquierdo)'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_resistencia`
--

CREATE TABLE IF NOT EXISTS `list_resistencia` (
  `resistencia_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`resistencia_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=55 ;

--
-- Volcar la base de datos para la tabla `list_resistencia`
--

INSERT INTO `list_resistencia` (`resistencia_id`, `name`) VALUES
(47, 'Yo-yo Test Nivel 1'),
(46, 'Marcha'),
(45, 'Octatlón'),
(44, 'Hexatlón'),
(43, 'Decatlón'),
(42, 'Triatlón'),
(41, 'Duatlón'),
(40, 'Maratón'),
(39, '½ Maratón'),
(38, '10.000 Mts. Llanos'),
(37, '5.000 Mts. Llanos'),
(36, '3.000 Mts. c/Obst.'),
(35, '3.000 Mts. Llanos'),
(34, '2000 Mts. C/Obst.'),
(33, '1500 Mts. Llanos'),
(32, '1.000 Mts. Llanos'),
(31, '800 Mts. Llanos'),
(30, 'Relevo 4 x 400'),
(29, '400 Mts. Vallas'),
(28, '400 Mts. Llanos'),
(48, 'Yo-yo Test Nivel 2'),
(49, 'Yo-yo Test Nivel 3'),
(50, '40´´ (Anaeróbico)'),
(51, 'Test de Cooper'),
(52, 'Test del Km'),
(53, 'Test de Ruffier'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_rubro`
--

CREATE TABLE IF NOT EXISTS `list_rubro` (
  `rubro_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`rubro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Volcar la base de datos para la tabla `list_rubro`
--

INSERT INTO `list_rubro` (`rubro_id`, `name`) VALUES
(1, 'Administración y Contabilidad'),
(2, 'Agricultura / Ganadería'),
(3, 'Almacenamiento/Logística/Distribución'),
(4, 'Arquitectura'),
(5, 'Automotor'),
(6, 'Comercial / Ventas'),
(7, 'Comercio Exterior'),
(8, 'Construcción'),
(9, 'Consultoría y Servicios'),
(10, 'Deportes'),
(11, 'Demoliciones / Excavaciones'),
(12, 'Diseño'),
(13, 'Ecología'),
(14, 'Educación y Capacitación'),
(15, 'Electricidad y Electrónica'),
(16, 'Energía'),
(17, 'Entretenimiento'),
(18, 'Envases y Embalajes'),
(19, 'Equipamientos'),
(20, 'Estética y Cuidado Personal'),
(21, 'Farmacias'),
(22, 'Finanzas y Economía'),
(23, 'Gastronomía'),
(24, 'Hotelería'),
(25, 'Indumentaria / Accesorios'),
(26, 'Industria'),
(27, 'Informática'),
(28, 'Ingeniería / Tecnicatura'),
(29, 'Inmobiliaria'),
(30, 'Limpieza'),
(31, 'Marketing y Publicidad'),
(32, 'Mecánica'),
(33, 'Medicina'),
(34, 'Metalúrgica'),
(35, 'Música / Arte / Cultura'),
(36, 'Nutrición'),
(37, 'Producción'),
(38, 'Profesionales'),
(39, 'Recursos humanos'),
(40, 'Relaciones Públicas'),
(41, 'Salud'),
(42, 'Seguridad'),
(43, 'Tabaco'),
(44, 'Telefonía'),
(45, 'Televisión'),
(46, 'Transportes'),
(47, 'Turismo'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_rugbi_categoria`
--

CREATE TABLE IF NOT EXISTS `list_rugbi_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Volcar la base de datos para la tabla `list_rugbi_categoria`
--

INSERT INTO `list_rugbi_categoria` (`categoria_id`, `name`) VALUES
(1, 'Primera División'),
(2, 'Intermedia'),
(3, 'M23'),
(4, 'M22'),
(5, 'M21'),
(6, 'M20'),
(7, 'M19'),
(8, 'M18'),
(9, 'M17'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_rugbi_golpe`
--

CREATE TABLE IF NOT EXISTS `list_rugbi_golpe` (
  `golpe_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`golpe_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_rugbi_golpe`
--

INSERT INTO `list_rugbi_golpe` (`golpe_id`, `name`) VALUES
(1, 'Aire'),
(2, 'Conversiones'),
(3, 'Drop'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_rugbi_posicion`
--

CREATE TABLE IF NOT EXISTS `list_rugbi_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcar la base de datos para la tabla `list_rugbi_posicion`
--

INSERT INTO `list_rugbi_posicion` (`posicion_id`, `name`) VALUES
(1, 'Hooker'),
(2, 'Pilar Derecho'),
(3, 'Pilar Izquierdo'),
(4, 'Segunda Línea'),
(5, 'Ala'),
(6, 'Octavo'),
(7, 'Medio Scrum'),
(8, 'Apertura'),
(9, 'Wing Derecho'),
(10, 'Wing Izquierdo'),
(11, 'Primer Inside'),
(12, 'Segundo Inside'),
(13, 'FullBack'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_seleccionado`
--

CREATE TABLE IF NOT EXISTS `list_seleccionado` (
  `seleccionado_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`seleccionado_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Volcar la base de datos para la tabla `list_seleccionado`
--

INSERT INTO `list_seleccionado` (`seleccionado_id`, `name`) VALUES
(1, 'Nacional Mayor'),
(2, 'Nacional Juvenil'),
(3, 'Regional'),
(-1, 'Otro'),
(5, 'Mayor'),
(6, 'Juvenil'),
(7, 'Provincial'),
(8, 'Local'),
(9, 'Internacional'),
(10, 'Sudamericano'),
(12, 'junior'),
(13, 'senior');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_softbol_habilidad`
--

CREATE TABLE IF NOT EXISTS `list_softbol_habilidad` (
  `habilidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`habilidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_softbol_habilidad`
--

INSERT INTO `list_softbol_habilidad` (`habilidad_id`, `name`) VALUES
(1, 'Ataque'),
(2, 'Defensa'),
(3, 'Pitcheo'),
(4, 'Recursos'),
(5, 'Velocidad'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_softbol_habilidad_recursos`
--

CREATE TABLE IF NOT EXISTS `list_softbol_habilidad_recursos` (
  `recursos_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`recursos_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_softbol_habilidad_recursos`
--

INSERT INTO `list_softbol_habilidad_recursos` (`recursos_id`, `name`) VALUES
(1, 'Slapper'),
(2, 'Toques'),
(3, 'Amagues de Toques y Bateo'),
(4, 'Robar Bases'),
(5, 'Gran Bateo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_softbol_posicion`
--

CREATE TABLE IF NOT EXISTS `list_softbol_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `list_softbol_posicion`
--

INSERT INTO `list_softbol_posicion` (`posicion_id`, `name`) VALUES
(1, 'Pitcher'),
(2, 'Catcher'),
(3, 'First Base'),
(4, 'Second Base'),
(5, 'Third Base'),
(6, 'Short Stop'),
(7, 'Outfield');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_sports`
--

CREATE TABLE IF NOT EXISTS `list_sports` (
  `sports_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`sports_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcar la base de datos para la tabla `list_sports`
--

INSERT INTO `list_sports` (`sports_id`, `name`) VALUES
(1, 'Atletismo'),
(2, 'Artes marciales'),
(3, 'Básquet'),
(4, 'Boxeo'),
(5, 'Ciclismo'),
(6, 'Escalada deportiva'),
(7, 'Fútbol'),
(8, 'Fútbol sala'),
(9, 'Golf'),
(10, 'Halterofilia'),
(11, 'Handball'),
(12, 'Hockey sobre césped'),
(13, 'Natación'),
(14, 'Pádel'),
(15, 'Patín'),
(16, 'Rugby'),
(17, 'Softbol'),
(18, 'Tenis'),
(19, 'Tiro con arco'),
(20, 'Tiro deportivo'),
(21, 'Voley'),
(22, 'Voley playa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_states`
--

CREATE TABLE IF NOT EXISTS `list_states` (
  `state_id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`state_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci AUTO_INCREMENT=4293 ;

--
-- Volcar la base de datos para la tabla `list_states`
--

INSERT INTO `list_states` (`state_id`, `country_id`, `name`) VALUES
(1, 1, 'Badakhshan'),
(2, 1, 'Badghis'),
(3, 1, 'Baghlan'),
(4, 1, 'Balkh'),
(5, 1, 'Bamian'),
(6, 1, 'Farah'),
(7, 1, 'Faryab'),
(8, 1, 'Ghazni'),
(9, 1, 'Ghowr'),
(10, 1, 'Helmand'),
(11, 1, 'Herat'),
(12, 1, 'Jowzjan'),
(13, 1, 'Kabol'),
(14, 1, 'Kandahar'),
(15, 1, 'Kapisa'),
(16, 1, 'Khowst'),
(17, 1, 'Konar'),
(18, 1, 'Konar'),
(19, 1, 'Kondoz'),
(20, 1, 'Laghman'),
(21, 1, 'Laghman'),
(22, 1, 'Lowgar'),
(23, 1, 'Nangarhar'),
(24, 1, 'Nimruz'),
(25, 1, 'Nurestan'),
(26, 1, 'Oruzgan'),
(27, 1, 'Paktia'),
(28, 1, 'Paktia'),
(29, 1, 'Paktika'),
(30, 1, 'Parvan'),
(31, 1, 'Samangan'),
(32, 1, 'Sar-e Pol'),
(33, 1, 'Takhar'),
(34, 1, 'Vardak'),
(35, 1, 'Zabol'),
(36, 2, 'Berat'),
(37, 2, 'Diber'),
(38, 2, 'Durres'),
(39, 2, 'Elbasan'),
(40, 2, 'Fier'),
(41, 2, 'Gjirokaster'),
(42, 2, 'Korce'),
(43, 2, 'Kukes'),
(44, 2, 'Lezhe'),
(45, 2, 'Shkoder'),
(46, 2, 'Tirane'),
(47, 2, 'Vlore'),
(48, 3, 'Baden-Wberg Bayern'),
(49, 3, 'Berlin'),
(50, 3, 'Brandenburg'),
(51, 3, 'Bremen'),
(52, 3, 'Hamburg'),
(53, 3, 'Hessen'),
(54, 3, 'Mecklenburg-Vorpommern'),
(55, 3, 'Niedersachsen'),
(56, 3, 'Nordrhein-Westfalen'),
(57, 3, 'Rheinland-Pfalz'),
(58, 3, 'Saarland'),
(59, 3, 'Sachsen'),
(60, 3, 'Sachsen-Anhalt'),
(61, 3, 'Schleswig-Holstein'),
(62, 3, 'Thuringen'),
(63, 4, 'American Samoa (General)'),
(64, 5, 'Andorra la Vella'),
(65, 5, 'Canillo'),
(66, 5, 'Encamp'),
(67, 5, 'Escaldes-Engordany'),
(68, 5, 'La Massana'),
(69, 5, 'Ordino'),
(70, 5, 'Sant Julia de Loria'),
(71, 5, 'Barbuda'),
(72, 5, 'Saint George'),
(73, 5, 'Saint John'),
(74, 5, 'Saint Mary'),
(75, 5, 'Saint Paul'),
(76, 5, 'Saint Peter'),
(77, 5, 'Saint Philip'),
(78, 6, 'Bengo'),
(79, 6, 'Benguela'),
(80, 6, 'Bie'),
(81, 6, 'Cabinda'),
(82, 6, 'Cuando Cubango'),
(83, 6, 'Cuanza Norte'),
(84, 6, 'Cuanza Sul'),
(85, 6, 'Cunene'),
(86, 6, 'Huambo'),
(87, 6, 'Huila'),
(88, 6, 'Luanda'),
(89, 6, 'Luanda Province'),
(90, 6, 'Lunda Norte'),
(91, 6, 'Lunda Sul'),
(92, 6, 'Malanje'),
(93, 6, 'Moxico'),
(94, 6, 'Uige'),
(95, 6, 'Zaire'),
(96, 7, 'Anguilla (General)'),
(97, 8, 'Barbuda'),
(98, 8, 'Saint George'),
(99, 8, 'Saint John'),
(100, 8, 'Saint Mary'),
(101, 8, 'Saint Paul'),
(102, 8, 'Saint Peter'),
(103, 8, 'Saint Philip'),
(104, 9, 'Netherlands Antilles (General)'),
(105, 10, 'Antarctica (General)'),
(106, 11, 'Al Bahah'),
(107, 11, 'Al Hudud ash Shamaliyah'),
(108, 11, 'Al Jawf'),
(109, 11, 'Al Jawf'),
(110, 11, 'Al Madinah'),
(111, 11, 'Al Qasim'),
(112, 11, 'Al Qurayyat'),
(113, 11, 'Ar Riyad'),
(114, 11, 'Ash Sharqiyah'),
(115, 11, 'Hail'),
(116, 11, 'Jizan'),
(117, 11, 'Makkah'),
(118, 11, 'Najran'),
(119, 11, 'Tabuk'),
(120, 12, 'Adrar'),
(121, 12, 'Ain Defla'),
(122, 12, 'Ain Temouchent'),
(123, 12, 'Alger'),
(124, 12, 'Annaba'),
(125, 12, 'Batna'),
(126, 12, 'Bechar'),
(127, 12, 'Bejaia'),
(128, 12, 'Biskra'),
(129, 12, 'Blida'),
(130, 12, 'Bordj Bou Arreridj'),
(131, 12, 'Bouira'),
(132, 12, 'Boumerdes'),
(133, 12, 'Chlef'),
(134, 12, 'Constantine'),
(135, 12, 'Djelfa'),
(136, 12, 'El Bayadh'),
(137, 12, 'El Oued'),
(138, 12, 'El Tarf'),
(139, 12, 'Ghardaia'),
(140, 12, 'Guelma'),
(141, 12, 'Illizi'),
(142, 12, 'Jijel'),
(143, 12, 'Khenchela'),
(144, 12, 'Laghouat'),
(145, 12, 'Msila'),
(146, 12, 'Mascara'),
(147, 12, 'Medea'),
(148, 12, 'Mila'),
(149, 12, 'Mostaganem'),
(150, 12, 'Naama'),
(151, 12, 'Oran'),
(152, 12, 'Ouargla'),
(153, 12, 'Oum el Bouaghi'),
(154, 12, 'Relizane'),
(155, 12, 'Saida'),
(156, 12, 'Setif'),
(157, 12, 'Sidi Bel Abbes'),
(158, 12, 'Skikda'),
(159, 12, 'Souk Ahras'),
(160, 12, 'Tamanghasset'),
(161, 12, 'Tebessa'),
(162, 12, 'Tiaret'),
(163, 12, 'Tindouf'),
(164, 12, 'Tipaza'),
(165, 12, 'Tissemsilt'),
(166, 12, 'Tizi Ouzou'),
(167, 12, 'Tlemcen'),
(168, 13, 'Buenos Aires'),
(169, 13, 'Catamarca'),
(170, 13, 'Chaco'),
(171, 13, 'Chubut'),
(172, 13, 'Cordoba'),
(173, 13, 'Corrientes'),
(174, 13, 'Distrito Federal'),
(175, 13, 'Entre Rios'),
(176, 13, 'Formosa'),
(177, 13, 'Jujuy'),
(178, 13, 'La Pampa'),
(179, 13, 'La Rioja'),
(180, 13, 'Mendoza'),
(181, 13, 'Misiones'),
(182, 13, 'Neuquen'),
(183, 13, 'Rio Negro'),
(184, 13, 'Salta'),
(185, 13, 'San Juan'),
(186, 13, 'San Luis'),
(187, 13, 'Santa Cruz'),
(188, 13, 'Santa Fe'),
(189, 13, 'Santiago del Estero'),
(190, 13, 'Tierra del Fuego'),
(191, 13, 'Tucuman'),
(192, 14, 'Aragatsotn'),
(193, 14, 'Ararat'),
(194, 14, 'Armavir'),
(195, 14, 'Gegharkunik'),
(196, 14, 'Kotayk'),
(197, 14, 'Lorri'),
(198, 14, 'Shirak'),
(199, 14, 'Syunik'),
(200, 14, 'Tavush'),
(201, 14, 'Vayots Dzor'),
(202, 14, 'Yerevan'),
(203, 15, 'Aruba (General)'),
(205, 17, 'Australian Capital Territory'),
(206, 17, 'New South Wales'),
(207, 17, 'Northern Territory'),
(208, 17, 'Queensland'),
(209, 17, 'South Australia'),
(210, 17, 'Tasmania'),
(211, 17, 'Victoria'),
(212, 17, 'Western Australia'),
(213, 18, 'Burgenland'),
(214, 18, 'Karnten'),
(215, 18, 'Niederosterreich'),
(216, 18, 'Oberosterreich'),
(217, 18, 'Salzburg'),
(218, 18, 'Steiermark'),
(219, 18, 'Tirol'),
(220, 18, 'Vorarlberg'),
(221, 18, 'Wien'),
(222, 19, 'Abseron'),
(223, 19, 'Agcabadi'),
(224, 19, 'Agdam'),
(225, 19, 'Agdas'),
(226, 19, 'Agstafa'),
(227, 19, 'Agsu'),
(228, 19, 'Ali Bayramli'),
(229, 19, 'Astara'),
(230, 19, 'Baki'),
(231, 19, 'Balakan'),
(232, 19, 'Barda'),
(233, 19, 'Beylaqan'),
(234, 19, 'Bilasuvar'),
(235, 19, 'Cabrayil'),
(236, 19, 'Calilabad'),
(237, 19, 'Daskasan'),
(238, 19, 'Davaci'),
(239, 19, 'Fuzuli'),
(240, 19, 'Gadabay'),
(241, 19, 'Ganca'),
(242, 19, 'Goranboy'),
(243, 19, 'Goycay'),
(244, 19, 'Haciqabul'),
(245, 19, 'Imisli'),
(246, 19, 'Ismayilli'),
(247, 19, 'Kalbacar'),
(248, 19, 'Kurdamir'),
(249, 19, 'Lacin'),
(250, 19, 'Lankaran'),
(251, 19, 'Lankaran'),
(252, 19, 'Lerik'),
(253, 19, 'Masalli'),
(254, 19, 'Mingacevir'),
(255, 19, 'Naftalan'),
(256, 19, 'Naxcivan'),
(257, 19, 'Neftcala'),
(258, 19, 'Oguz'),
(259, 19, 'Qabala'),
(260, 19, 'Qax'),
(261, 19, 'Qazax'),
(262, 19, 'Qobustan'),
(263, 19, 'Quba'),
(264, 19, 'Qubadli'),
(265, 19, 'Qusar'),
(266, 19, 'Saatli'),
(267, 19, 'Sabirabad'),
(268, 19, 'Saki'),
(269, 19, 'Saki'),
(270, 19, 'Salyan'),
(271, 19, 'Samaxi'),
(272, 19, 'Samkir'),
(273, 19, 'Samux'),
(274, 19, 'Siyazan'),
(275, 19, 'Sumqayit'),
(276, 19, 'Susa'),
(277, 19, 'Susa'),
(278, 19, 'Tartar'),
(279, 19, 'Tovuz'),
(280, 19, 'Ucar'),
(281, 19, 'Xacmaz'),
(282, 19, 'Xankandi'),
(283, 19, 'Xanlar'),
(284, 19, 'Xizi'),
(285, 19, 'Xocali'),
(286, 19, 'Xocavand'),
(287, 19, 'Yardimli'),
(288, 19, 'Yevlax'),
(289, 19, 'Yevlax'),
(290, 19, 'Zangilan'),
(291, 19, 'Zaqatala'),
(292, 19, 'Zardab'),
(293, 20, 'Acklins and Crooked Islands'),
(294, 20, 'Bimini'),
(295, 20, 'Cat Island'),
(296, 20, 'Exuma'),
(297, 20, 'Freeport'),
(298, 20, 'Fresh Creek'),
(299, 20, 'Governors Harbour'),
(300, 20, 'Green Turtle Cay'),
(301, 20, 'Harbour Island'),
(302, 20, 'High Rock'),
(303, 20, 'Inagua'),
(304, 20, 'Kemps Bay'),
(305, 20, 'Long Island'),
(306, 20, 'Marsh Harbour'),
(307, 20, 'Mayaguana'),
(308, 20, 'New Providence'),
(309, 20, 'Nichollstown and Berry Islands'),
(310, 20, 'Ragged Island'),
(311, 20, 'Rock Sound'),
(312, 20, 'San Salvador and Rum Cay'),
(313, 20, 'Sandy Point'),
(314, 21, 'Al Hadd'),
(315, 21, 'Al Manamah'),
(316, 21, 'Al Mintaqah al Gharbiyah'),
(317, 21, 'Al Mintaqah al Wusta'),
(318, 21, 'Al Mintaqah ash Shamaliyah'),
(319, 21, 'Al Muharraq'),
(320, 21, 'Ar Rifa'),
(321, 21, 'Jidd Hafs'),
(322, 21, 'Madinat'),
(323, 21, 'Madinat Hamad'),
(324, 21, 'Mintaqat Juzur Hawar'),
(325, 21, 'Sitrah'),
(326, 22, 'Bagerhat'),
(327, 22, 'Bandarban'),
(328, 22, 'Barguna'),
(329, 22, 'Barisal'),
(330, 22, 'Barisal Division'),
(331, 22, 'Bhola'),
(332, 22, 'Bogra'),
(333, 22, 'Brahmanbaria'),
(334, 22, 'Chandpur'),
(335, 22, 'Chapai Nawabganj'),
(336, 22, 'Chattagram'),
(337, 22, 'Chuadanga'),
(338, 22, 'Comilla'),
(339, 22, 'Coxs Bazar'),
(340, 22, 'Dhaka'),
(341, 22, 'Dhaka Division'),
(342, 22, 'Dinajpur'),
(343, 22, 'Faridpur'),
(344, 22, 'Feni'),
(345, 22, 'Gaibandha'),
(346, 22, 'Gazipur'),
(347, 22, 'Gopalganj'),
(348, 22, 'Habiganj'),
(349, 22, 'Jaipurhat'),
(350, 22, 'Jamalpur'),
(351, 22, 'Jessore'),
(352, 22, 'Jhalakati'),
(353, 22, 'Jhenaidah'),
(354, 22, 'Khagrachari'),
(355, 22, 'Khulna'),
(356, 22, 'Khulna Division'),
(357, 22, 'Kishorganj'),
(358, 22, 'Kurigram'),
(359, 22, 'Kushtia'),
(360, 22, 'Laksmipur'),
(361, 22, 'Lalmonirhat'),
(362, 22, 'Madaripur'),
(363, 22, 'Magura'),
(364, 22, 'Manikganj'),
(365, 22, 'Meherpur'),
(366, 22, 'Moulavibazar'),
(367, 22, 'Munshiganj'),
(368, 22, 'Mymensingh'),
(369, 22, 'Naogaon'),
(370, 22, 'Narail'),
(371, 22, 'Narayanganj'),
(372, 22, 'Narsingdi'),
(373, 22, 'Nator'),
(374, 22, 'Netrakona'),
(375, 22, 'Nilphamari'),
(376, 22, 'Noakhali'),
(377, 22, 'Pabna'),
(378, 22, 'Panchagar'),
(379, 22, 'Parbattya Chattagram'),
(380, 22, 'Patuakhali'),
(381, 22, 'Pirojpur'),
(382, 22, 'Rajbari'),
(383, 22, 'Rajshahi'),
(384, 22, 'Rangpur'),
(385, 22, 'Rajshahi Division'),
(386, 22, 'Satkhira'),
(387, 22, 'Shariyatpur'),
(388, 22, 'Sherpur'),
(389, 22, 'Sirajganj'),
(390, 22, 'Sunamganj'),
(391, 22, 'Sylhet'),
(392, 22, 'Sylhet Division'),
(393, 22, 'Tangail'),
(394, 22, 'Thakurgaon'),
(395, 23, 'Christ Church'),
(396, 23, 'Saint Andrew'),
(397, 23, 'Saint George'),
(398, 23, 'Saint James'),
(399, 23, 'Saint John'),
(400, 23, 'Saint Joseph'),
(401, 23, 'Saint Lucy'),
(402, 23, 'Saint Michael'),
(403, 23, 'Saint Peter'),
(404, 23, 'Saint Philip'),
(405, 23, 'Saint Thomas'),
(406, 24, 'Belize'),
(407, 24, 'Cayo'),
(408, 24, 'Corozal'),
(409, 24, 'Orange Walk'),
(410, 24, 'Stann Creek'),
(411, 24, 'Toledo'),
(412, 25, 'Atakora'),
(413, 25, 'Atlantique'),
(414, 25, 'Borgou'),
(415, 25, 'Littoral Department'),
(416, 25, 'Mono'),
(417, 25, 'Oueme'),
(418, 25, 'Zou'),
(419, 26, 'Devonshire'),
(420, 26, 'Hamilton'),
(421, 26, 'Hamilton'),
(422, 26, 'Paget'),
(423, 26, 'Pembroke'),
(424, 26, 'Saint George'),
(425, 26, 'Saint Georges'),
(426, 26, 'Sandys'),
(427, 26, 'Smiths'),
(428, 26, 'Southampton'),
(429, 26, 'Warwick'),
(430, 27, 'Brestskaya Voblasts'),
(431, 27, 'Homyel skaya Voblasts'),
(432, 27, 'Hrodzyenskaya Voblasts'),
(433, 27, 'Mahilyowskaya Voblasts'),
(434, 27, 'Minsk'),
(435, 27, 'Minskaya Voblasts'),
(436, 27, 'Vitsyebskaya Voblasts'),
(437, 28, 'Chuquisaca'),
(438, 28, 'Cochabamba'),
(439, 28, 'El Beni'),
(440, 28, 'La Paz'),
(441, 28, 'Oruro'),
(442, 28, 'Pando'),
(443, 28, 'Potosi'),
(444, 28, 'Santa Cruz'),
(445, 28, 'Tarija'),
(446, 29, 'Bosanska Dubica'),
(447, 29, 'Federation of Bosnia and Herzegovina'),
(448, 29, 'Republika Srpska'),
(449, 30, 'Central'),
(450, 30, 'Chobe'),
(451, 30, 'Ghanzi'),
(452, 30, 'Kgalagadi'),
(453, 30, 'Kgatleng'),
(454, 30, 'Kweneng'),
(455, 30, 'Ngamiland'),
(456, 30, 'North-East'),
(457, 30, 'South-East'),
(458, 30, 'Southern'),
(459, 31, 'Bouvet Island (General)'),
(460, 32, 'Acre'),
(461, 32, 'Alagoas'),
(462, 32, 'Amapa'),
(463, 32, 'Amazonas'),
(464, 32, 'Bahia'),
(465, 32, 'Ceara'),
(466, 32, 'Distrito Federal'),
(467, 32, 'Espirito Santo'),
(468, 32, 'Goias'),
(469, 32, 'Maranhao'),
(470, 32, 'Mato Grosso'),
(471, 32, 'Mato Grosso do Sul'),
(472, 32, 'Minas Gerais'),
(473, 32, 'Para'),
(474, 32, 'Paraiba'),
(475, 32, 'Parana'),
(476, 32, 'Pernambuco'),
(477, 32, 'Piaui'),
(478, 32, 'Rio Grande do Norte'),
(479, 32, 'Rio Grande do Sul'),
(480, 32, 'Rio de Janeiro'),
(481, 32, 'Rondonia'),
(482, 32, 'Roraima'),
(483, 32, 'Santa Catarina'),
(484, 32, 'Sao Paulo'),
(485, 32, 'Sergipe'),
(486, 32, 'Tocantins'),
(487, 33, 'British Indian Ocean Territory (General)'),
(488, 34, 'Alibori'),
(489, 34, 'Belait'),
(490, 34, 'Brunei and Muara'),
(491, 34, 'Collines'),
(492, 34, 'Donga'),
(493, 34, 'Kouffo'),
(494, 34, 'Littoral'),
(495, 34, 'Oueme'),
(496, 34, 'Plateau'),
(497, 34, 'Temburong'),
(498, 34, 'Tutong'),
(499, 34, 'Zou'),
(500, 35, 'Blagoevgrad'),
(501, 35, 'Burgas'),
(502, 35, 'Dobrich'),
(503, 35, 'Gabrovo'),
(504, 35, 'Grad Sofiya'),
(505, 35, 'Khaskovo'),
(506, 35, 'Kurdzhali'),
(507, 35, 'Kyustendil'),
(508, 35, 'Lovech'),
(509, 35, 'Mikhaylovgrad'),
(510, 35, 'Montana'),
(511, 35, 'Pazardzhik'),
(512, 35, 'Pernik'),
(513, 35, 'Pleven'),
(514, 35, 'Plovdiv'),
(515, 35, 'Razgrad'),
(516, 35, 'Ruse'),
(517, 35, 'Shumen'),
(518, 35, 'Silistra'),
(519, 35, 'Sliven'),
(520, 35, 'Smolyan'),
(521, 35, 'Sofiya'),
(522, 35, 'Stara Zagora'),
(523, 35, 'Turgovishte'),
(524, 35, 'Varna'),
(525, 35, 'Veliko Turnovo'),
(526, 35, 'Vidin'),
(527, 35, 'Vratsa'),
(528, 35, 'Yambol'),
(529, 36, 'Bale'),
(530, 36, 'Bam'),
(531, 36, 'Banwa'),
(532, 36, 'Bazega'),
(533, 36, 'Bougouriba'),
(534, 36, 'Boulgou'),
(535, 36, 'Boulkiemde'),
(536, 36, 'Ganzourgou'),
(537, 36, 'Gnagna'),
(538, 36, 'Gourma'),
(539, 36, 'Houet'),
(540, 36, 'Ioba'),
(541, 36, 'Kadiogo'),
(542, 36, 'Kenedougou'),
(543, 36, 'Komoe'),
(544, 36, 'Komondjari'),
(545, 36, 'Kompienga'),
(546, 36, 'Kossi'),
(547, 36, 'Koulpelogo'),
(548, 36, 'Kouritenga'),
(549, 36, 'Kourweogo'),
(550, 36, 'Leraba'),
(551, 36, 'Loroum'),
(552, 36, 'Mouhoun'),
(553, 36, 'Namentenga'),
(554, 36, 'Naouri'),
(555, 36, 'Nayala'),
(556, 36, 'Noumbiel'),
(557, 36, 'Oubritenga'),
(558, 36, 'Oudalan'),
(559, 36, 'Passore'),
(560, 36, 'Poni'),
(561, 36, 'Sanguie'),
(562, 36, 'Sanmatenga'),
(563, 36, 'Seno'),
(564, 36, 'Sissili'),
(565, 36, 'Soum'),
(566, 36, 'Sourou'),
(567, 36, 'Tapoa'),
(568, 36, 'Tuy'),
(569, 36, 'Yagha'),
(570, 36, 'Yatenga'),
(571, 36, 'Ziro'),
(572, 36, 'Zondoma'),
(573, 36, 'Zoundweogo'),
(574, 37, 'Bubanza'),
(575, 37, 'Bujumbura'),
(576, 37, 'Bururi'),
(577, 37, 'Cankuzo'),
(578, 37, 'Cibitoke'),
(579, 37, 'Gitega'),
(580, 37, 'Karuzi'),
(581, 37, 'Kayanza'),
(582, 37, 'Kirundo'),
(583, 37, 'Makamba'),
(584, 37, 'Muramvya'),
(585, 37, 'Muyinga'),
(586, 37, 'Mwaro'),
(587, 37, 'Ngozi'),
(588, 37, 'Rutana'),
(589, 37, 'Ruyigi'),
(590, 38, 'Bumthang'),
(591, 38, 'Chhukha'),
(592, 38, 'Chirang'),
(593, 38, 'Daga'),
(594, 38, 'Geylegphug'),
(595, 38, 'Ha'),
(596, 38, 'Lhuntshi'),
(597, 38, 'Mongar'),
(598, 38, 'Paro'),
(599, 38, 'Pemagatsel'),
(600, 38, 'Punakha'),
(601, 38, 'Samchi'),
(602, 38, 'Samdrup'),
(603, 38, 'Shemgang'),
(604, 38, 'Tashigang'),
(605, 38, 'Thimphu'),
(606, 38, 'Tongsa'),
(607, 38, 'Wangdi Phodrang'),
(608, 39, 'Antwerpen'),
(609, 39, 'Brabant'),
(610, 39, 'Brabant Wallon'),
(611, 39, 'Brussels Hoofdstedelijk Gewest'),
(612, 39, 'Hainaut'),
(613, 39, 'Liege'),
(614, 39, 'Limburg'),
(615, 39, 'Luxembourg'),
(616, 39, 'Namur'),
(617, 39, 'Oost-Vlaanderen'),
(618, 39, 'Vlaams-Brabant'),
(619, 39, 'West-Vlaanderen'),
(620, 40, 'Boa Vista'),
(621, 40, 'Brava'),
(622, 40, 'Maio'),
(623, 40, 'Mosteiros'),
(624, 40, 'Paul'),
(625, 40, 'Praia'),
(626, 40, 'Ribeira Grande'),
(627, 40, 'Sal'),
(628, 40, 'Santa Catarina'),
(629, 40, 'Santa Cruz'),
(630, 40, 'Sao Domingos'),
(631, 40, 'Sao Filipe'),
(632, 40, 'Sao Miguel'),
(633, 40, 'Sao Nicolau'),
(634, 40, 'Sao Vicente'),
(635, 40, 'Tarrafal'),
(636, 41, 'Batdambang'),
(637, 41, 'Kampong Cham'),
(638, 41, 'Kampong Chhnang'),
(639, 41, 'Kampong Spoe'),
(640, 41, 'Kampong Thum'),
(641, 41, 'Kampot'),
(642, 41, 'Kandal'),
(643, 41, 'Kaoh Kong'),
(644, 41, 'Kracheh'),
(645, 41, 'Mondol Kiri'),
(646, 41, 'Pailin'),
(647, 41, 'Phnum Penh'),
(648, 41, 'Pouthisat'),
(649, 41, 'Preah Vihear'),
(650, 41, 'Prey Veng'),
(651, 41, 'Rotanokiri'),
(652, 41, 'Siemreab-Otdar Meanchey'),
(653, 41, 'Stoeng Treng'),
(654, 41, 'Svay Rieng'),
(655, 41, 'Takev'),
(656, 42, 'Adamaoua'),
(657, 42, 'Centre'),
(658, 42, 'Est'),
(659, 42, 'Extreme-Nord'),
(660, 42, 'Littoral'),
(661, 42, 'Nord'),
(662, 42, 'Nord-Ouest'),
(663, 42, 'Ouest'),
(664, 42, 'Sud'),
(665, 42, 'Sud-Ouest'),
(666, 44, 'Alberta'),
(667, 44, 'British Columbia'),
(668, 44, 'Manitoba'),
(669, 44, 'New Brunswick'),
(670, 44, 'Newfoundland'),
(671, 44, 'Northwest Territories'),
(672, 44, 'Nova Scotia'),
(673, 44, 'Nunavut'),
(674, 44, 'Ontario'),
(675, 44, 'Prince Edward Island'),
(676, 44, 'Quebec'),
(677, 44, 'Saskatchewan'),
(678, 44, 'Yukon Territory'),
(679, 45, 'Batha'),
(680, 45, 'Biltine'),
(681, 45, 'Borkou-Ennedi-Tibesti'),
(682, 45, 'Chari-Baguirmi'),
(683, 45, 'Guera'),
(684, 45, 'Kanem'),
(685, 45, 'Lac'),
(686, 45, 'Logone Occidental'),
(687, 45, 'Logone Oriental'),
(688, 45, 'Mayo-Kebbi'),
(689, 45, 'Moyen-Chari'),
(690, 45, 'Ouaddai'),
(691, 45, 'Salamat'),
(692, 45, 'Tandjile'),
(693, 46, 'Aisen del General Carlos Ibanez del Campo'),
(694, 46, 'Antofagasta'),
(695, 46, 'Araucania'),
(696, 46, 'Atacama'),
(697, 46, 'Bio-Bio'),
(698, 46, 'Coquimbo'),
(699, 46, 'Libertador General Bernardo OHiggins'),
(700, 46, 'Los Lagos'),
(701, 46, 'Magallanes y de la Antartica Chilena'),
(702, 46, 'Maule'),
(703, 46, 'Region Metropolitana'),
(704, 46, 'Tarapaca'),
(705, 46, 'Valparaiso'),
(706, 47, 'Anhui'),
(707, 47, 'Beijing'),
(708, 47, 'Chongqing'),
(709, 47, 'Fujian'),
(710, 47, 'Gansu'),
(711, 47, 'Guangdong'),
(712, 47, 'Guangxi'),
(713, 47, 'Guizhou'),
(714, 47, 'Hainan'),
(715, 47, 'Hebei'),
(716, 47, 'Heilongjiang'),
(717, 47, 'Henan'),
(718, 47, 'Hubei'),
(719, 47, 'Hunan'),
(720, 47, 'Jiangsu'),
(721, 47, 'Jiangxi'),
(722, 47, 'Jilin'),
(723, 47, 'Liaoning'),
(724, 47, 'Nei Mongol'),
(725, 47, 'Ningxia'),
(726, 47, 'Qinghai'),
(727, 47, 'Shaanxi'),
(728, 47, 'Shandong'),
(729, 47, 'Shanghai'),
(730, 47, 'Shanxi'),
(731, 47, 'Sichuan'),
(732, 47, 'Tianjin'),
(733, 47, 'Xinjiang'),
(734, 47, 'Xizang'),
(735, 47, 'Yunnan'),
(736, 47, 'Zhejiang'),
(737, 48, 'Famagusta'),
(738, 48, 'Kyrenia'),
(739, 48, 'Larnaca'),
(740, 48, 'Limassol'),
(741, 48, 'Nicosia'),
(742, 48, 'Paphos'),
(743, 49, 'Amazonas'),
(744, 49, 'Antioquia'),
(745, 49, 'Arauca'),
(746, 49, 'Atlantico'),
(747, 49, 'Bolivar'),
(748, 49, 'Bolívar Department'),
(749, 49, 'Boyaca'),
(750, 49, 'Boyacá Department'),
(751, 49, 'Caldas'),
(752, 49, 'Caldas Department'),
(753, 49, 'Caqueta'),
(754, 49, 'Casanare'),
(755, 49, 'Cauca'),
(756, 49, 'Cesar'),
(757, 49, 'Choco'),
(758, 49, 'Cordoba'),
(759, 49, 'Cundinamarca'),
(760, 49, 'Distrito Especial'),
(761, 49, 'Guainia'),
(762, 49, 'Guaviare'),
(763, 49, 'Huila'),
(764, 49, 'La Guajira'),
(765, 49, 'Magdalena'),
(766, 49, 'Magdalena Department'),
(767, 49, 'Meta'),
(768, 49, 'Narino'),
(769, 49, 'Norte de Santander'),
(770, 49, 'Putumayo'),
(771, 49, 'Quindio'),
(772, 49, 'Risaralda'),
(773, 49, 'San Andres y Providencia'),
(774, 49, 'Santander'),
(775, 49, 'Sucre'),
(776, 49, 'Tolima'),
(777, 49, 'Valle del Cauca'),
(778, 49, 'Vaupes'),
(779, 49, 'Vichada'),
(780, 50, 'Anjouan'),
(781, 50, 'Grande Comore'),
(782, 50, 'Moheli'),
(783, 51, 'Bouenza'),
(784, 51, 'Brazzaville'),
(785, 51, 'Cuvette'),
(786, 51, 'Kouilou'),
(787, 51, 'Lekoumou'),
(788, 51, 'Likouala'),
(789, 51, 'Niari'),
(790, 51, 'Plateaux'),
(791, 51, 'Pool'),
(792, 51, 'Sangha'),
(793, 52, 'Chagang-do'),
(794, 52, 'Hamgyong-bukto'),
(795, 52, 'Hamgyong-namdo'),
(796, 52, 'Hwanghae-bukto'),
(797, 52, 'Hwanghae-namdo'),
(798, 52, 'Kaesong-si'),
(799, 52, 'Kangwon-do'),
(800, 52, 'Najin Sonbong-si'),
(801, 52, 'Nampo-si'),
(802, 52, 'P yongan-bukto'),
(803, 52, 'P yongan-namdo'),
(804, 52, 'P yongyang-si'),
(805, 52, 'Yanggang-do'),
(806, 53, 'Ch ungch ong-bukto'),
(807, 53, 'Ch ungch ong-namdo'),
(808, 53, 'Cheju-do'),
(809, 53, 'Cholla-bukto'),
(810, 53, 'Cholla-namdo'),
(811, 53, 'Inch on-jikhalsi'),
(812, 53, 'Kangwon-do'),
(813, 53, 'Kwangju-jikhalsi'),
(814, 53, 'Kyonggi-do'),
(815, 53, 'Kyongsang-bukto'),
(816, 53, 'Kyongsang-namdo'),
(817, 53, 'Pusan-jikhalsi'),
(818, 53, 'Seoul-tukpyolsi'),
(819, 53, 'Taegu-jikhalsi'),
(820, 53, 'Taejon-jikhalsi'),
(821, 53, 'Ulsan-gwangyoksi'),
(822, 54, 'Alajuela'),
(823, 54, 'Cartago'),
(824, 54, 'Guanacaste'),
(825, 54, 'Heredia'),
(826, 54, 'Limon'),
(827, 54, 'Puntarenas'),
(828, 54, 'San Jose'),
(829, 55, 'Abengourou'),
(830, 55, 'Abidjan'),
(831, 55, 'Aboisso'),
(832, 55, 'Adiake'),
(833, 55, 'Adzope'),
(834, 55, 'Agboville'),
(835, 55, 'Alepe'),
(836, 55, 'Bangolo'),
(837, 55, 'Beoumi'),
(838, 55, 'Biankouma'),
(839, 55, 'Bocanda'),
(840, 55, 'Bondoukou'),
(841, 55, 'Bongouanou'),
(842, 55, 'Bouafle'),
(843, 55, 'Bouake'),
(844, 55, 'Bouna'),
(845, 55, 'Boundiali'),
(846, 55, 'Dabakala'),
(847, 55, 'Dabou'),
(848, 55, 'Daloa'),
(849, 55, 'Danane'),
(850, 55, 'Daoukro'),
(851, 55, 'Dimbokro'),
(852, 55, 'Divo'),
(853, 55, 'Duekoue'),
(854, 55, 'Ferkessedougou'),
(855, 55, 'Gagnoa'),
(856, 55, 'Grand-Bassam'),
(857, 55, 'Grand-Lahou'),
(858, 55, 'Guiglo'),
(859, 55, 'Haut-Sassandra Region'),
(860, 55, 'Issia'),
(861, 55, 'Jacqueville'),
(862, 55, 'Katiola'),
(863, 55, 'Korhogo'),
(864, 55, 'Lagunes Region'),
(865, 55, 'Lakota'),
(866, 55, 'Man'),
(867, 55, 'Mankono'),
(868, 55, 'Mbahiakro'),
(869, 55, 'Odienne'),
(870, 55, 'Oume'),
(871, 55, 'Sakassou'),
(872, 55, 'San Pedro'),
(873, 55, 'Sassandra'),
(874, 55, 'Seguela'),
(875, 55, 'Sinfra'),
(876, 55, 'Soubre'),
(877, 55, 'Tabou'),
(878, 55, 'Tanda'),
(879, 55, 'Tiassale'),
(880, 55, 'Tiebissou'),
(881, 55, 'Tingrela'),
(882, 55, 'Touba'),
(883, 55, 'Toulepleu'),
(884, 55, 'Toumodi'),
(885, 55, 'Vavoua'),
(886, 55, 'Yamoussoukro'),
(887, 55, 'Zuenoula'),
(888, 56, 'Bjelovarsko-Bilogorska'),
(889, 56, 'Brodsko-Posavska'),
(890, 56, 'Dubrovacko-Neretvanska'),
(891, 56, 'Grad Zagreb'),
(892, 56, 'Istarska'),
(893, 56, 'Karlovacka'),
(894, 56, 'Koprivnicko-Krizevacka'),
(895, 56, 'Krapinsko-Zagorska'),
(896, 56, 'Licko-Senjska'),
(897, 56, 'Medimurska'),
(898, 56, 'Osjecko-Baranjska'),
(899, 56, 'Pozesko-Slavonska'),
(900, 56, 'Primorsko-Goranska'),
(901, 56, 'Sibensko-Kninska'),
(902, 56, 'Sisacko-Moslavacka'),
(903, 56, 'Splitsko-Dalmatinska'),
(904, 56, 'Varazdinska'),
(905, 56, 'Viroviticko-Podravska'),
(906, 56, 'Vukovarsko-Srijemska'),
(907, 56, 'Zadarska'),
(908, 56, 'Zagrebacka'),
(909, 57, 'Camaguey'),
(910, 57, 'Ciego de Avila'),
(911, 57, 'Cienfuegos'),
(912, 57, 'Ciudad de la Habana'),
(913, 57, 'Granma'),
(914, 57, 'Guantanamo'),
(915, 57, 'Holguin'),
(916, 57, 'Isla de la Juventud'),
(917, 57, 'La Habana'),
(918, 57, 'Las Tunas'),
(919, 57, 'Matanzas'),
(920, 57, 'Pinar del Rio'),
(921, 57, 'Sancti Spiritus'),
(922, 57, 'Santiago de Cuba'),
(923, 57, 'Villa Clara'),
(924, 58, 'Arhus'),
(925, 58, 'Bornholm'),
(926, 58, 'Frederiksborg'),
(927, 58, 'Fyn'),
(928, 58, 'Kobenhavn'),
(929, 58, 'Nordjylland'),
(930, 58, 'Ribe'),
(931, 58, 'Ringkobing'),
(932, 58, 'Roskilde'),
(933, 58, 'Sonderjylland'),
(934, 58, 'Staden Kobenhavn'),
(935, 58, 'Storstrom'),
(936, 58, 'Vejle'),
(937, 58, 'Vestsjalland'),
(938, 58, 'Viborg'),
(939, 59, 'Dikhil'),
(940, 59, 'Djibouti'),
(941, 59, 'Obock'),
(942, 59, 'Tadjoura'),
(943, 60, 'Saint Andrew'),
(944, 60, 'Saint David'),
(945, 60, 'Saint George'),
(946, 60, 'Saint John'),
(947, 60, 'Saint Joseph'),
(948, 60, 'Saint Luke'),
(949, 60, 'Saint Mark'),
(950, 60, 'Saint Patrick'),
(951, 60, 'Saint Paul'),
(952, 60, 'Saint Peter'),
(953, 61, 'East Timor (General)'),
(954, 62, 'Azuay'),
(955, 62, 'Bolivar'),
(956, 62, 'Canar'),
(957, 62, 'Carchi'),
(958, 62, 'Chimborazo'),
(959, 62, 'Cotopaxi'),
(960, 62, 'El Oro'),
(961, 62, 'Esmeraldas'),
(962, 62, 'Galapagos'),
(963, 62, 'Guayas'),
(964, 62, 'Imbabura'),
(965, 62, 'Loja'),
(966, 62, 'Los Rios'),
(967, 62, 'Manabi'),
(968, 62, 'Morona-Santiago'),
(969, 62, 'Napo'),
(970, 62, 'Orellana'),
(971, 62, 'Pastaza'),
(972, 62, 'Pichincha'),
(973, 62, 'Sucumbios'),
(974, 62, 'Tungurahua'),
(975, 62, 'Zamora-Chinchipe'),
(976, 63, 'Ad Daqahliyah'),
(977, 63, 'Al Bahr al Ahmar'),
(978, 63, 'Al Buhayrah'),
(979, 63, 'Al Fayyum'),
(980, 63, 'Al Gharbiyah'),
(981, 63, 'Al Iskandariyah'),
(982, 63, 'Al Isma iliyah'),
(983, 63, 'Al Jizah'),
(984, 63, 'Al Minufiyah'),
(985, 63, 'Al Minya'),
(986, 63, 'Al Qahirah'),
(987, 63, 'Al Qalyubiyah'),
(988, 63, 'Al Wadi al Jadid'),
(989, 63, 'As Suways'),
(990, 63, 'Ash Sharqiyah'),
(991, 63, 'Aswan'),
(992, 63, 'Asyut'),
(993, 63, 'Bani Suwayf'),
(994, 63, 'Bur Said'),
(995, 63, 'Dumyat'),
(996, 63, 'Janub Sina'),
(997, 63, 'Kafr ash Shaykh'),
(998, 63, 'Matruh'),
(999, 63, 'Qina'),
(1000, 63, 'Shamal Sina'),
(1001, 63, 'Suhaj'),
(1002, 64, 'Ahuachapan'),
(1003, 64, 'Cabanas'),
(1004, 64, 'Chalatenango'),
(1005, 64, 'Cuscatlan'),
(1006, 64, 'La Libertad'),
(1007, 64, 'La Paz'),
(1008, 64, 'La Union'),
(1009, 64, 'Morazan'),
(1010, 64, 'San Miguel'),
(1011, 64, 'San Salvador'),
(1012, 64, 'San Vicente'),
(1013, 64, 'Santa Ana'),
(1014, 64, 'Sonsonate'),
(1015, 64, 'Usulutan'),
(1016, 65, 'Holy See (Vatican City State) (General)'),
(1017, 66, 'Abu Dhabi'),
(1018, 66, 'Ajman'),
(1019, 66, 'Dubai'),
(1020, 66, 'Fujairah'),
(1021, 66, 'Ras Al Khaimah'),
(1022, 66, 'Sharjah'),
(1023, 66, 'Umm Al Quwain'),
(1024, 67, 'Eritrea (General)'),
(1025, 68, 'Banska Bystrica'),
(1026, 68, 'Bratislava'),
(1027, 68, 'Kosice'),
(1028, 68, 'Nitra'),
(1029, 68, 'Presov'),
(1030, 68, 'Trencin'),
(1031, 68, 'Trnava'),
(1032, 68, 'Zilina'),
(1033, 69, 'Ajdovscina'),
(1034, 69, 'Beltinci'),
(1035, 69, 'Bled'),
(1036, 69, 'Bohinj'),
(1037, 69, 'Borovnica'),
(1038, 69, 'Bovec'),
(1039, 69, 'Brda'),
(1040, 69, 'Brezice'),
(1041, 69, 'Brezovica'),
(1042, 69, 'Celje'),
(1043, 69, 'Cerklje na Gorenjskem'),
(1044, 69, 'Cerknica'),
(1045, 69, 'Cerkno'),
(1046, 69, 'Crensovci'),
(1047, 69, 'Crna na Koroskem'),
(1048, 69, 'Crnomelj'),
(1049, 69, 'Divaca'),
(1050, 69, 'Dobrepolje'),
(1051, 69, 'Dobrova-Horjul-Polhov Gradec'),
(1052, 69, 'Dol pri Ljubljani'),
(1053, 69, 'Domzale'),
(1054, 69, 'Dornava'),
(1055, 69, 'Dravograd'),
(1056, 69, 'Duplek'),
(1057, 69, 'Gorenja Vas-Poljane'),
(1058, 69, 'Gorisnica'),
(1059, 69, 'Gornja Radgona'),
(1060, 69, 'Gornji Grad'),
(1061, 69, 'Gornji Petrovci'),
(1062, 69, 'Grosuplje'),
(1063, 69, 'Hrastnik'),
(1064, 69, 'Hrpelje-Kozina'),
(1065, 69, 'Idrija'),
(1066, 69, 'Ig'),
(1067, 69, 'Ilirska Bistrica'),
(1068, 69, 'Ivancna Gorica'),
(1069, 69, 'Izola-Isola'),
(1070, 69, 'Jesenice'),
(1071, 69, 'Jursinci'),
(1072, 69, 'Kamnik'),
(1073, 69, 'Kanal'),
(1074, 69, 'Kidricevo'),
(1075, 69, 'Kobarid'),
(1076, 69, 'Kobilje'),
(1077, 69, 'Kocevje'),
(1078, 69, 'Komen'),
(1079, 69, 'Koper-Capodistria'),
(1080, 69, 'Kozje'),
(1081, 69, 'Kranj'),
(1082, 69, 'Kranjska Gora'),
(1083, 69, 'Krsko'),
(1084, 69, 'Kungota'),
(1085, 69, 'Kuzma'),
(1086, 69, 'Lasko'),
(1087, 69, 'Lenart'),
(1088, 69, 'Litija'),
(1089, 69, 'Ljubljana'),
(1090, 69, 'Ljubno'),
(1091, 69, 'Ljutomer'),
(1092, 69, 'Logatec'),
(1093, 69, 'Loska Dolina'),
(1094, 69, 'Loski Potok'),
(1095, 69, 'Luce'),
(1096, 69, 'Lukovica'),
(1097, 69, 'Majsperk'),
(1098, 69, 'Maribor'),
(1099, 69, 'Medvode'),
(1100, 69, 'Menges'),
(1101, 69, 'Metlika'),
(1102, 69, 'Mezica'),
(1103, 69, 'Miren-Kostanjevica'),
(1104, 69, 'Mislinja'),
(1105, 69, 'Moravce'),
(1106, 69, 'Moravske Toplice'),
(1107, 69, 'Mozirje'),
(1108, 69, 'Murska Sobota'),
(1109, 69, 'Muta'),
(1110, 69, 'Naklo'),
(1111, 69, 'Nazarje'),
(1112, 69, 'Nova Gorica'),
(1113, 69, 'Novo Mesto'),
(1114, 69, 'Odranci'),
(1115, 69, 'Ormoz'),
(1116, 69, 'Osilnica'),
(1117, 69, 'Pesnica'),
(1118, 69, 'Piran'),
(1119, 69, 'Pivka'),
(1120, 69, 'Podcetrtek'),
(1121, 69, 'Postojna'),
(1122, 69, 'Preddvor'),
(1123, 69, 'Ptuj'),
(1124, 69, 'Puconci'),
(1125, 69, 'Racam'),
(1126, 69, 'Radece'),
(1127, 69, 'Radenci'),
(1128, 69, 'Radlje ob Dravi'),
(1129, 69, 'Radovljica'),
(1130, 69, 'Ribnica'),
(1131, 69, 'Rogaska Slatina'),
(1132, 69, 'Rogasovci'),
(1133, 69, 'Rogatec'),
(1134, 69, 'Ruse'),
(1135, 69, 'Semic'),
(1136, 69, 'Sencur'),
(1137, 69, 'Sentilj'),
(1138, 69, 'Sentjernej'),
(1139, 69, 'Sentjur pri Celju'),
(1140, 69, 'Sevnica'),
(1141, 69, 'Sezana'),
(1142, 69, 'Skocjan'),
(1143, 69, 'Skofja Loka'),
(1144, 69, 'Skofljica'),
(1145, 69, 'Slovenj Gradec'),
(1146, 69, 'Slovenska Bistrica'),
(1147, 69, 'Slovenske Konjice'),
(1148, 69, 'Smarje pri Jelsah'),
(1149, 69, 'Smartno ob Paki'),
(1150, 69, 'Sostanj'),
(1151, 69, 'Starse'),
(1152, 69, 'Store'),
(1153, 69, 'Sveti Jurij'),
(1154, 69, 'Tolmin'),
(1155, 69, 'Trbovlje'),
(1156, 69, 'Trebnje'),
(1157, 69, 'Trzic'),
(1158, 69, 'Turnisce'),
(1159, 69, 'Velenje'),
(1160, 69, 'Velike Lasce'),
(1161, 69, 'Videm'),
(1162, 69, 'Vipava'),
(1163, 69, 'Vitanje'),
(1164, 69, 'Vodice'),
(1165, 69, 'Vojnik'),
(1166, 69, 'Vrhnika'),
(1167, 69, 'Vuzenica'),
(1168, 69, 'Zagorje ob Savi'),
(1169, 69, 'Zalec'),
(1170, 69, 'Zavrc'),
(1171, 69, 'Zelezniki'),
(1172, 69, 'Ziri'),
(1173, 69, 'Zrece'),
(1174, 70, 'Andalucia'),
(1175, 70, 'Aragon'),
(1176, 70, 'Asturias'),
(1177, 70, 'Canarias'),
(1178, 70, 'Cantabria'),
(1179, 70, 'Castilla y Leon'),
(1180, 70, 'Castilla-La Mancha'),
(1181, 70, 'Cataluna'),
(1182, 70, 'Comunidad Valenciana'),
(1183, 70, 'Extremadura'),
(1184, 70, 'Galicia'),
(1185, 70, 'Islas Baleares'),
(1186, 70, 'La Rioja'),
(1187, 70, 'Madrid'),
(1188, 70, 'Murcia'),
(1189, 70, 'Navarra'),
(1190, 70, 'Pais Vasco'),
(1191, 71, 'Alabama'),
(1192, 71, 'Alaska'),
(1193, 71, 'American Samoa'),
(1194, 71, 'Arizona'),
(1195, 71, 'Arkansas'),
(1196, 71, 'California'),
(1197, 71, 'Colorado'),
(1198, 71, 'Connecticut'),
(1199, 71, 'Delaware'),
(1200, 71, 'District of Columbia'),
(1201, 71, 'Federated States of Micronesia'),
(1202, 71, 'Florida'),
(1203, 71, 'Georgia'),
(1204, 71, 'Guam'),
(1205, 71, 'Hawaii'),
(1206, 71, 'Idaho'),
(1207, 71, 'Illinois'),
(1208, 71, 'Indiana'),
(1209, 71, 'Iowa'),
(1210, 71, 'Kansas'),
(1211, 71, 'Kentucky'),
(1212, 71, 'Louisiana'),
(1213, 71, 'Maine'),
(1214, 71, 'Marshall Islands'),
(1215, 71, 'Maryland'),
(1216, 71, 'Massachusetts'),
(1217, 71, 'Michigan'),
(1218, 71, 'Minnesota'),
(1219, 71, 'Mississippi'),
(1220, 71, 'Missouri'),
(1221, 71, 'Montana'),
(1222, 71, 'Nebraska'),
(1223, 71, 'Nevada'),
(1224, 71, 'New Hampshire'),
(1225, 71, 'New Jersey'),
(1226, 71, 'New Mexico'),
(1227, 71, 'New York'),
(1228, 71, 'North Carolina'),
(1229, 71, 'North Dakota'),
(1230, 71, 'Northern Mariana Islands'),
(1231, 71, 'Ohio'),
(1232, 71, 'Oklahoma'),
(1233, 71, 'Oregon'),
(1234, 71, 'Palau'),
(1235, 71, 'Pennsylvania'),
(1236, 71, 'Puerto Rico'),
(1237, 71, 'Rhode Island'),
(1238, 71, 'South Carolina'),
(1239, 71, 'South Dakota'),
(1240, 71, 'Tennessee'),
(1241, 71, 'Texas'),
(1242, 71, 'Utah'),
(1243, 71, 'Vermont'),
(1244, 71, 'Virgin Islands'),
(1245, 71, 'Virginia'),
(1246, 71, 'Washington'),
(1247, 71, 'West Virginia'),
(1248, 71, 'Wisconsin'),
(1249, 71, 'Wyoming'),
(1250, 72, 'Harjumaa'),
(1251, 72, 'Hiiumaa'),
(1252, 72, 'Ida-Virumaa'),
(1253, 72, 'Jarvamaa'),
(1254, 72, 'Jogevamaa'),
(1255, 72, 'Kohtla-Jarve'),
(1256, 72, 'Laane-Virumaa'),
(1257, 72, 'Laanemaa'),
(1258, 72, 'Narva'),
(1259, 72, 'Parnu'),
(1260, 72, 'Parnumaa'),
(1261, 72, 'Polvamaa'),
(1262, 72, 'Raplamaa'),
(1263, 72, 'Saaremaa'),
(1264, 72, 'Sillamae'),
(1265, 72, 'Tallinn'),
(1266, 72, 'Tartu'),
(1267, 72, 'Tartumaa'),
(1268, 72, 'Valgamaa'),
(1269, 72, 'Viljandimaa'),
(1270, 72, 'Vorumaa'),
(1271, 73, 'Addis Abeba'),
(1272, 73, 'Adis Abeba'),
(1273, 73, 'Afar'),
(1274, 73, 'Afar'),
(1275, 73, 'Amara'),
(1276, 73, 'Amhara'),
(1277, 73, 'Benishangul'),
(1278, 73, 'Binshangul Gumuz'),
(1279, 73, 'Dire Dawa'),
(1280, 73, 'Gambela Hizboch'),
(1281, 73, 'Gambella'),
(1282, 73, 'Hareri Hizb'),
(1283, 73, 'Oromiya'),
(1284, 73, 'Somali'),
(1285, 73, 'Southern'),
(1286, 73, 'Sumale'),
(1287, 73, 'Tigray'),
(1288, 73, 'Tigray'),
(1289, 73, 'YeDebub Biheroch Bihereseboch na Hizboch'),
(1290, 74, 'Central'),
(1291, 74, 'Eastern'),
(1292, 74, 'Northern'),
(1293, 74, 'Rotuma'),
(1294, 74, 'Western'),
(1295, 75, 'Abra'),
(1296, 75, 'Agusan del Norte'),
(1297, 75, 'Agusan del Sur'),
(1298, 75, 'Aklan'),
(1299, 75, 'Albay'),
(1300, 75, 'Angeles'),
(1301, 75, 'Antique'),
(1302, 75, 'Aurora'),
(1303, 75, 'Bacolod'),
(1304, 75, 'Bago'),
(1305, 75, 'Baguio'),
(1306, 75, 'Bais'),
(1307, 75, 'Basilan'),
(1308, 75, 'Basilan City'),
(1309, 75, 'Bataan'),
(1310, 75, 'Batanes'),
(1311, 75, 'Batangas'),
(1312, 75, 'Batangas City'),
(1313, 75, 'Benguet'),
(1314, 75, 'Bohol'),
(1315, 75, 'Bukidnon'),
(1316, 75, 'Bulacan'),
(1317, 75, 'Butuan'),
(1318, 75, 'Cabanatuan'),
(1319, 75, 'Cadiz'),
(1320, 75, 'Cagayan'),
(1321, 75, 'Cagayan de Oro'),
(1322, 75, 'Calbayog'),
(1323, 75, 'Caloocan'),
(1324, 75, 'Camarines Norte'),
(1325, 75, 'Camarines Sur'),
(1326, 75, 'Camiguin'),
(1327, 75, 'Canlaon'),
(1328, 75, 'Capiz'),
(1329, 75, 'Catanduanes'),
(1330, 75, 'Cavite'),
(1331, 75, 'Cavite City'),
(1332, 75, 'Cebu'),
(1333, 75, 'Cebu City'),
(1334, 75, 'Cotabato'),
(1335, 75, 'Dagupan'),
(1336, 75, 'Danao'),
(1337, 75, 'Dapitan'),
(1338, 75, 'Davao'),
(1339, 75, 'Davao City'),
(1340, 75, 'Davao Oriental'),
(1341, 75, 'Davao del Sur'),
(1342, 75, 'Dipolog'),
(1343, 75, 'Dumaguete'),
(1344, 75, 'Eastern Samar'),
(1345, 75, 'General Santos'),
(1346, 75, 'Gingoog'),
(1347, 75, 'Ifugao'),
(1348, 75, 'Iligan'),
(1349, 75, 'Ilocos Norte'),
(1350, 75, 'Ilocos Sur'),
(1351, 75, 'Iloilo'),
(1352, 75, 'Iloilo City'),
(1353, 75, 'Iriga'),
(1354, 75, 'Isabela'),
(1355, 75, 'Kalinga-Apayao'),
(1356, 75, 'La Carlota'),
(1357, 75, 'La Union'),
(1358, 75, 'Laguna'),
(1359, 75, 'Lanao del Norte'),
(1360, 75, 'Lanao del Sur'),
(1361, 75, 'Laoag'),
(1362, 75, 'Lapu-Lapu'),
(1363, 75, 'Legaspi'),
(1364, 75, 'Leyte'),
(1365, 75, 'Lipa'),
(1366, 75, 'Lucena'),
(1367, 75, 'Maguindanao'),
(1368, 75, 'Mandaue'),
(1369, 75, 'Manila'),
(1370, 75, 'Marawi'),
(1371, 75, 'Marinduque'),
(1372, 75, 'Masbate'),
(1373, 75, 'Mindoro Occidental'),
(1374, 75, 'Mindoro Oriental'),
(1375, 75, 'Misamis Occidental'),
(1376, 75, 'Misamis Oriental'),
(1377, 75, 'Mountain'),
(1378, 75, 'Naga'),
(1379, 75, 'Negros Occidental'),
(1380, 75, 'Negros Oriental'),
(1381, 75, 'North Cotabato'),
(1382, 75, 'Northern Samar'),
(1383, 75, 'Nueva Ecija'),
(1384, 75, 'Nueva Vizcaya'),
(1385, 75, 'Olongapo'),
(1386, 75, 'Ormoc'),
(1387, 75, 'Oroquieta'),
(1388, 75, 'Ozamis'),
(1389, 75, 'Pagadian'),
(1390, 75, 'Palawan'),
(1391, 75, 'Palayan'),
(1392, 75, 'Pampanga'),
(1393, 75, 'Pangasinan'),
(1394, 75, 'Pasay'),
(1395, 75, 'Puerto Princesa'),
(1396, 75, 'Quezon'),
(1397, 75, 'Quezon City'),
(1398, 75, 'Quirino'),
(1399, 75, 'Rizal'),
(1400, 75, 'Romblon'),
(1401, 75, 'Roxas'),
(1402, 75, 'Samar'),
(1403, 75, 'San Carlos'),
(1404, 75, 'San Carlos'),
(1405, 75, 'San Jose'),
(1406, 75, 'San Pablo'),
(1407, 75, 'Silay'),
(1408, 75, 'Siquijor'),
(1409, 75, 'Sorsogon'),
(1410, 75, 'South Cotabato'),
(1411, 75, 'Southern Leyte'),
(1412, 75, 'Sultan Kudarat'),
(1413, 75, 'Sulu'),
(1414, 75, 'Surigao'),
(1415, 75, 'Surigao del Norte'),
(1416, 75, 'Surigao del Sur'),
(1417, 75, 'Tacloban'),
(1418, 75, 'Tagaytay'),
(1419, 75, 'Tagbilaran'),
(1420, 75, 'Tangub'),
(1421, 75, 'Tarlac'),
(1422, 75, 'Tawitawi'),
(1423, 75, 'Toledo'),
(1424, 75, 'Trece Martires'),
(1425, 75, 'Zambales'),
(1426, 75, 'Zamboanga'),
(1427, 75, 'Zamboanga del Norte'),
(1428, 75, 'Zamboanga del Sur'),
(1429, 76, 'Eastern Finland'),
(1430, 76, 'Lapland'),
(1431, 76, 'Oulu'),
(1432, 76, 'Southern Finland'),
(1433, 76, 'Western Finland'),
(1434, 77, 'Alsace'),
(1435, 77, 'Aquitaine'),
(1436, 77, 'Auvergne'),
(1437, 77, 'Basse-Normandie'),
(1438, 77, 'Bourgogne'),
(1439, 77, 'Bretagne'),
(1440, 77, 'Centre'),
(1441, 77, 'Champagne-Ardenne'),
(1442, 77, 'Corse'),
(1443, 77, 'Franche-Comte'),
(1444, 77, 'Haute-Normandie'),
(1445, 77, 'Ile-de-France'),
(1446, 77, 'Languedoc-Roussillon'),
(1447, 77, 'Limousin'),
(1448, 77, 'Lorraine'),
(1449, 77, 'Midi-Pyrenees'),
(1450, 77, 'Nord-Pas-de-Calais'),
(1451, 77, 'Pays de la Loire'),
(1452, 77, 'Picardie'),
(1453, 77, 'Poitou-Charentes'),
(1454, 77, 'Provence-Alpes-Cote d Azur'),
(1455, 77, 'Rhone-Alpes'),
(1456, 78, 'Guyane Département'),
(1457, 79, 'Polynésie Française Territoire'),
(1458, 80, 'French Southern Territories (General)'),
(1459, 81, 'Estuaire'),
(1460, 81, 'Haut-Ogooue'),
(1461, 81, 'Moyen-Ogooue'),
(1462, 81, 'Ngounie'),
(1463, 81, 'Nyanga'),
(1464, 81, 'Ogooue-Ivindo'),
(1465, 81, 'Ogooue-Lolo'),
(1466, 81, 'Ogooue-Maritime'),
(1467, 81, 'Woleu-Ntem'),
(1468, 82, 'Banjul'),
(1469, 82, 'Lower River'),
(1470, 82, 'MacCarthy Island'),
(1471, 82, 'North Bank'),
(1472, 82, 'Upper River'),
(1473, 82, 'Western'),
(1474, 83, 'Abashis Raioni'),
(1475, 83, 'Abkhazia'),
(1476, 83, 'Adigenis Raioni'),
(1477, 83, 'Ajaria'),
(1478, 83, 'Akhalgoris Raioni'),
(1479, 83, 'Akhalk alakis Raioni'),
(1480, 83, 'Akhalts ikhis Raioni'),
(1481, 83, 'Akhmetis Raioni'),
(1482, 83, 'Ambrolauris Raioni'),
(1483, 83, 'Aspindzis Raioni'),
(1484, 83, 'Baghdat is Raioni'),
(1485, 83, 'Bolnisis Raioni'),
(1486, 83, 'Borjomis Raioni'),
(1487, 83, 'Ch khorotsqus Raioni'),
(1488, 83, 'Ch okhatauris Raioni'),
(1489, 83, 'Chiat ura'),
(1490, 83, 'Dedop listsqaros Raioni'),
(1491, 83, 'Dmanisis Raioni'),
(1492, 83, 'Dushet is Raioni'),
(1493, 83, 'Gardabanis Raioni'),
(1494, 83, 'Gori'),
(1495, 83, 'Goris Raioni'),
(1496, 83, 'Gurjaanis Raioni'),
(1497, 83, 'Javis Raioni'),
(1498, 83, 'K arelis Raioni'),
(1499, 83, 'K ut aisi'),
(1500, 83, 'Kaspis Raioni'),
(1501, 83, 'Kharagaulis Raioni'),
(1502, 83, 'Khashuris Raioni'),
(1503, 83, 'Khobis Raioni'),
(1504, 83, 'Khonis Raioni'),
(1505, 83, 'Lagodekhis Raioni'),
(1506, 83, 'Lanch khut is Raioni'),
(1507, 83, 'Lentekhis Raioni'),
(1508, 83, 'Marneulis Raioni'),
(1509, 83, 'Martvilis Raioni'),
(1510, 83, 'Mestiis Raioni'),
(1511, 83, 'Mts khet is Raioni'),
(1512, 83, 'Ninotsmindis Raioni'),
(1513, 83, 'Onis Raioni'),
(1514, 83, 'Ozurget is Raioni'),
(1515, 83, 'P ot i'),
(1516, 83, 'Qazbegis Raioni'),
(1517, 83, 'Qvarlis Raioni'),
(1518, 83, 'Rust avi'),
(1519, 83, 'Sach kheris Raioni'),
(1520, 83, 'Sagarejos Raioni'),
(1521, 83, 'Samtrediis Raioni'),
(1522, 83, 'Senakis Raioni'),
(1523, 83, 'Sighnaghis Raioni'),
(1524, 83, 'T bilisi'),
(1525, 83, 'T elavis Raioni'),
(1526, 83, 'T erjolis Raioni'),
(1527, 83, 'T et ritsqaros Raioni'),
(1528, 83, 'T ianet is Raioni'),
(1529, 83, 'Tqibuli'),
(1530, 83, 'Ts ageris Raioni'),
(1531, 83, 'Tsalenjikhis Raioni'),
(1532, 83, 'Tsalkis Raioni'),
(1533, 83, 'Tsqaltubo'),
(1534, 83, 'Vanis Raioni'),
(1535, 83, 'Zestap onis Raioni'),
(1536, 83, 'Zugdidi'),
(1537, 83, 'Zugdidis Raioni'),
(1538, 84, 'Ashanti'),
(1539, 84, 'Brong-Ahafo'),
(1540, 84, 'Central'),
(1541, 84, 'Eastern'),
(1542, 84, 'Greater Accra'),
(1543, 84, 'Northern'),
(1544, 84, 'Upper East'),
(1545, 84, 'Upper West'),
(1546, 84, 'Volta'),
(1547, 84, 'Western'),
(1548, 85, 'Gibraltar (General)'),
(1549, 86, 'Saint Andrew'),
(1550, 86, 'Saint David'),
(1551, 86, 'Saint George'),
(1552, 86, 'Saint John'),
(1553, 86, 'Saint Mark'),
(1554, 86, 'Saint Patrick'),
(1555, 87, 'Aitolia kai Akarnania'),
(1556, 87, 'Akhaia'),
(1557, 87, 'Argolis'),
(1558, 87, 'Arkadhia'),
(1559, 87, 'Arta'),
(1560, 87, 'Attiki'),
(1561, 87, 'Dhodhekanisos'),
(1562, 87, 'Drama'),
(1563, 87, 'Evritania'),
(1564, 87, 'Evros'),
(1565, 87, 'Evvoia'),
(1566, 87, 'Florina'),
(1567, 87, 'Fokis'),
(1568, 87, 'Fthiotis'),
(1569, 87, 'Grevena'),
(1570, 87, 'Ilia'),
(1571, 87, 'Imathia'),
(1572, 87, 'Ioannina'),
(1573, 87, 'Iraklion'),
(1574, 87, 'Kardhitsa'),
(1575, 87, 'Kastoria'),
(1576, 87, 'Kavala'),
(1577, 87, 'Kefallinia'),
(1578, 87, 'Kerkira'),
(1579, 87, 'Khalkidhiki'),
(1580, 87, 'Khania'),
(1581, 87, 'Khios'),
(1582, 87, 'Kikladhes'),
(1583, 87, 'Kilkis'),
(1584, 87, 'Korinthia'),
(1585, 87, 'Kozani'),
(1586, 87, 'Lakonia'),
(1587, 87, 'Larisa'),
(1588, 87, 'Lasithi'),
(1589, 87, 'Lesvos'),
(1590, 87, 'Levkas'),
(1591, 87, 'Magnisia'),
(1592, 87, 'Messinia'),
(1593, 87, 'Pella'),
(1594, 87, 'Pieria'),
(1595, 87, 'Preveza'),
(1596, 87, 'Rethimni'),
(1597, 87, 'Rodhopi'),
(1598, 87, 'Samos'),
(1599, 87, 'Serrai'),
(1600, 87, 'Thesprotia'),
(1601, 87, 'Thessaloniki'),
(1602, 87, 'Trikala'),
(1603, 87, 'Voiotia'),
(1604, 87, 'Xanthi'),
(1605, 87, 'Zakinthos'),
(1606, 88, 'Nordgronland'),
(1607, 88, 'Ostgronland'),
(1608, 88, 'Vestgronland'),
(1609, 89, 'Guadeloupe Département'),
(1610, 90, 'Guam (General)'),
(1611, 91, 'Alta Verapaz'),
(1612, 91, 'Baja Verapaz'),
(1613, 91, 'Chimaltenango'),
(1614, 91, 'Chiquimula'),
(1615, 91, 'El Progreso'),
(1616, 91, 'Escuintla'),
(1617, 91, 'Guatemala'),
(1618, 91, 'Huehuetenango'),
(1619, 91, 'Izabal'),
(1620, 91, 'Jalapa'),
(1621, 91, 'Jutiapa'),
(1622, 91, 'Peten'),
(1623, 91, 'Quetzaltenango'),
(1624, 91, 'Quiche'),
(1625, 91, 'Retalhuleu'),
(1626, 91, 'Sacatepequez'),
(1627, 91, 'San Marcos'),
(1628, 91, 'Santa Rosa'),
(1629, 91, 'Solola'),
(1630, 91, 'Suchitepequez'),
(1631, 91, 'Totonicapan'),
(1632, 91, 'Zacapa'),
(1633, 92, 'Beyla'),
(1634, 92, 'Boffa'),
(1635, 92, 'Boke'),
(1636, 92, 'Conakry'),
(1637, 92, 'Coyah'),
(1638, 92, 'Dabola'),
(1639, 92, 'Dalaba'),
(1640, 92, 'Dinguiraye'),
(1641, 92, 'Dubreka'),
(1642, 92, 'Faranah'),
(1643, 92, 'Forecariah'),
(1644, 92, 'Fria'),
(1645, 92, 'Gaoual'),
(1646, 92, 'Gueckedou'),
(1647, 92, 'Kankan'),
(1648, 92, 'Kerouane'),
(1649, 92, 'Kindia'),
(1650, 92, 'Kissidougou'),
(1651, 92, 'Koubia'),
(1652, 92, 'Koundara'),
(1653, 92, 'Kouroussa'),
(1654, 92, 'Labe'),
(1655, 92, 'Lelouma'),
(1656, 92, 'Lola'),
(1657, 92, 'Macenta'),
(1658, 92, 'Mali'),
(1659, 92, 'Mamou'),
(1660, 92, 'Mandiana'),
(1661, 92, 'Nzerekore'),
(1662, 92, 'Pita'),
(1663, 92, 'Siguiri'),
(1664, 92, 'Telimele'),
(1665, 92, 'Tougue'),
(1666, 92, 'Yomou'),
(1667, 93, 'Annobon'),
(1668, 93, 'Bioko Norte'),
(1669, 93, 'Bioko Sur'),
(1670, 93, 'Centro Sur'),
(1671, 93, 'Kie-Ntem'),
(1672, 93, 'Litoral'),
(1673, 93, 'Wele-Nzas'),
(1674, 94, 'Bafata'),
(1675, 94, 'Biombo'),
(1676, 94, 'Bissau'),
(1677, 94, 'Bolama'),
(1678, 94, 'Cacheu'),
(1679, 94, 'Gabu'),
(1680, 94, 'Oio'),
(1681, 94, 'Quinara'),
(1682, 94, 'Tombali'),
(1683, 95, 'Barima-Waini'),
(1684, 95, 'Cuyuni-Mazaruni'),
(1685, 95, 'Demerara-Mahaica'),
(1686, 95, 'East Berbice-Corentyne'),
(1687, 95, 'Essequibo Islands-West Demerara'),
(1688, 95, 'Mahaica-Berbice'),
(1689, 95, 'Pomeroon-Supenaam'),
(1690, 95, 'Potaro-Siparuni'),
(1691, 95, 'Upper Demerara-Berbice'),
(1692, 95, 'Upper Takutu-Upper Essequibo'),
(1693, 96, 'Artibonite'),
(1694, 96, 'Centre'),
(1695, 96, 'Grand Anse'),
(1696, 96, 'Nord'),
(1697, 96, 'Nord-Est'),
(1698, 96, 'Nord-Ouest'),
(1699, 96, 'Ouest'),
(1700, 96, 'Sud'),
(1701, 96, 'Sud-Est'),
(1702, 97, 'Heard Island and McDonald Islands (General)'),
(1703, 98, 'Drenthe'),
(1704, 98, 'Dronten'),
(1705, 98, 'Flevoland'),
(1706, 98, 'Friesland'),
(1707, 98, 'Gelderland'),
(1708, 98, 'Groningen'),
(1709, 98, 'Lelystad'),
(1710, 98, 'Limburg'),
(1711, 98, 'Noord-Brabant'),
(1712, 98, 'Noord-Holland'),
(1713, 98, 'Overijssel'),
(1714, 98, 'Overijssel'),
(1715, 98, 'Utrecht'),
(1716, 98, 'Zeeland'),
(1717, 98, 'Zuid-Holland'),
(1718, 98, 'Zuidelijke IJsselmeerpolders'),
(1719, 99, 'Atlantida'),
(1720, 99, 'Choluteca'),
(1721, 99, 'Colon'),
(1722, 99, 'Comayagua'),
(1723, 99, 'Copan'),
(1724, 99, 'Cortes'),
(1725, 99, 'El Paraiso'),
(1726, 99, 'Francisco Morazan'),
(1727, 99, 'Gracias a Dios'),
(1728, 99, 'Intibuca'),
(1729, 99, 'Islas de la Bahia'),
(1730, 99, 'La Paz'),
(1731, 99, 'Lempira'),
(1732, 99, 'Ocotepeque'),
(1733, 99, 'Olancho'),
(1734, 99, 'Santa Barbara'),
(1735, 99, 'Valle'),
(1736, 99, 'Yoro'),
(1737, 100, 'Hong Kong (General)'),
(1738, 101, 'Bacs-Kiskun'),
(1739, 101, 'Baranya'),
(1740, 101, 'Bekes'),
(1741, 101, 'Bekescsaba'),
(1742, 101, 'Borsod-Abauj-Zemplen'),
(1743, 101, 'Budapest'),
(1744, 101, 'Csongrad'),
(1745, 101, 'Debrecen'),
(1746, 101, 'Dunaujvaros'),
(1747, 101, 'Eger'),
(1748, 101, 'Fejer'),
(1749, 101, 'Gyor'),
(1750, 101, 'Gyor-Moson-Sopron'),
(1751, 101, 'Hajdu-Bihar'),
(1752, 101, 'Heves'),
(1753, 101, 'Hodmezovasarhely'),
(1754, 101, 'Jasz-Nagykun-Szolnok'),
(1755, 101, 'Kaposvar'),
(1756, 101, 'Kecskemet'),
(1757, 101, 'Komarom-Esztergom'),
(1758, 101, 'Miskolc'),
(1759, 101, 'Nagykanizsa'),
(1760, 101, 'Nograd'),
(1761, 101, 'Nyiregyhaza'),
(1762, 101, 'Pecs'),
(1763, 101, 'Pest'),
(1764, 101, 'Somogy'),
(1765, 101, 'Sopron'),
(1766, 101, 'Szabolcs-Szatmar-Bereg'),
(1767, 101, 'Szeged'),
(1768, 101, 'Szekesfehervar'),
(1769, 101, 'Szolnok'),
(1770, 101, 'Szombathely'),
(1771, 101, 'Tatabanya'),
(1772, 101, 'Tolna'),
(1773, 101, 'Vas'),
(1774, 101, 'Veszprem'),
(1775, 101, 'Veszprem'),
(1776, 101, 'Zala'),
(1777, 101, 'Zalaegerszeg'),
(1778, 102, 'Andaman and Nicobar Islands'),
(1779, 102, 'Andhra Pradesh'),
(1780, 102, 'Arunachal Pradesh'),
(1781, 102, 'Assam'),
(1782, 102, 'Bihar'),
(1783, 102, 'Chandigarh'),
(1784, 102, 'Chhattisgarh'),
(1785, 102, 'Dadra and Nagar Haveli'),
(1786, 102, 'Daman and Diu'),
(1787, 102, 'Delhi'),
(1788, 102, 'Goa'),
(1789, 102, 'Gujarat'),
(1790, 102, 'Haryana'),
(1791, 102, 'Himachal Pradesh'),
(1792, 102, 'Jammu and Kashmir'),
(1793, 102, 'Jharkhand'),
(1794, 102, 'Karnataka'),
(1795, 102, 'Kerala'),
(1796, 102, 'Lakshadweep'),
(1797, 102, 'Madhya Pradesh'),
(1798, 102, 'Maharashtra'),
(1799, 102, 'Manipur'),
(1800, 102, 'Meghalaya'),
(1801, 102, 'Mizoram'),
(1802, 102, 'Nagaland'),
(1803, 102, 'Orissa'),
(1804, 102, 'Pondicherry'),
(1805, 102, 'Punjab'),
(1806, 102, 'Rajasthan'),
(1807, 102, 'Sikkim'),
(1808, 102, 'Tamil Nadu'),
(1809, 102, 'Tripura'),
(1810, 102, 'Uttar Pradesh'),
(1811, 102, 'Uttaranchal'),
(1812, 102, 'West Bengal'),
(1813, 103, 'Aceh'),
(1814, 103, 'Bali'),
(1815, 103, 'Banten'),
(1816, 103, 'Bengkulu'),
(1817, 103, 'Gorontalo'),
(1818, 103, 'Jakarta Raya'),
(1819, 103, 'Jambi'),
(1820, 103, 'Jawa Barat'),
(1821, 103, 'Jawa Tengah'),
(1822, 103, 'Jawa Timur'),
(1823, 103, 'Kalimantan Barat'),
(1824, 103, 'Kalimantan Selatan'),
(1825, 103, 'Kalimantan Tengah'),
(1826, 103, 'Kalimantan Timur'),
(1827, 103, 'Kepulauan Bangka Belitung'),
(1828, 103, 'Lampung'),
(1829, 103, 'Maluku'),
(1830, 103, 'Maluku Province'),
(1831, 103, 'Maluku Utara'),
(1832, 103, 'Nusa Tenggara Barat'),
(1833, 103, 'Nusa Tenggara Timur'),
(1834, 103, 'Papua'),
(1835, 103, 'Riau'),
(1836, 103, 'Sulawesi Selatan'),
(1837, 103, 'Sulawesi Tengah'),
(1838, 103, 'Sulawesi Tenggara'),
(1839, 103, 'Sulawesi Utara'),
(1840, 103, 'Sumatera Barat'),
(1841, 103, 'Sumatera Selatan'),
(1842, 103, 'Sumatera Utara'),
(1843, 103, 'Yogyakarta'),
(1844, 104, 'Al Anbar'),
(1845, 104, 'Al Basrah'),
(1846, 104, 'Al Muthanna'),
(1847, 104, 'Al Qadisiyah'),
(1848, 104, 'An Najaf'),
(1849, 104, 'Arbil'),
(1850, 104, 'As Sulaymaniyah'),
(1851, 104, 'At Tamim'),
(1852, 104, 'Babil'),
(1853, 104, 'Baghdad'),
(1854, 104, 'Dahuk'),
(1855, 104, 'Dhi Qar'),
(1856, 104, 'Diyala'),
(1857, 104, 'Karbala'),
(1858, 104, 'Maysan'),
(1859, 104, 'Ninawa'),
(1860, 104, 'Salah ad Din'),
(1861, 104, 'Wasit'),
(1862, 105, 'Carlow'),
(1863, 105, 'Cavan'),
(1864, 105, 'Clare'),
(1865, 105, 'Cork'),
(1866, 105, 'Donegal'),
(1867, 105, 'Dublin'),
(1868, 105, 'Galway'),
(1869, 105, 'Kerry'),
(1870, 105, 'Kildare'),
(1871, 105, 'Kilkenny'),
(1872, 105, 'Laois'),
(1873, 105, 'Leitrim'),
(1874, 105, 'Limerick'),
(1875, 105, 'Longford'),
(1876, 105, 'Louth'),
(1877, 105, 'Mayo'),
(1878, 105, 'Meath'),
(1879, 105, 'Monaghan'),
(1880, 105, 'Offaly'),
(1881, 105, 'Roscommon'),
(1882, 105, 'Sligo'),
(1883, 105, 'Tipperary'),
(1884, 105, 'Waterford'),
(1885, 105, 'Westmeath'),
(1886, 105, 'Wexford'),
(1887, 105, 'Wicklow'),
(1888, 106, 'Cocos (Keeling) Islands (General)'),
(1889, 107, 'Christmas Island (General)'),
(1890, 108, 'Akranes'),
(1891, 108, 'Akureyri'),
(1892, 108, 'Arnessysla'),
(1893, 108, 'Austur-Bardastrandarsysla'),
(1894, 108, 'Austur-Hunavatnssysla'),
(1895, 108, 'Austur-Skaftafellssysla'),
(1896, 108, 'Borgarfjardarsysla'),
(1897, 108, 'Dalasysla'),
(1898, 108, 'Eyjafjardarsysla'),
(1899, 108, 'Gullbringusysla'),
(1900, 108, 'Hafnarfjordur'),
(1901, 108, 'Husavik'),
(1902, 108, 'Isafjordur'),
(1903, 108, 'Keflavik'),
(1904, 108, 'Kjosarsysla'),
(1905, 108, 'Kopavogur'),
(1906, 108, 'Myrasysla'),
(1907, 108, 'Neskaupstadur'),
(1908, 108, 'Nordur-Isafjardarsysla'),
(1909, 108, 'Nordur-Mulasysla'),
(1910, 108, 'Nordur-Tingeyjarsysla'),
(1911, 108, 'Olafsfjordur'),
(1912, 108, 'Rangarvallasysla'),
(1913, 108, 'Reykjavik'),
(1914, 108, 'Saudarkrokur'),
(1915, 108, 'Seydisfjordur'),
(1916, 108, 'Siglufjordur'),
(1917, 108, 'Skagafjardarsysla'),
(1918, 108, 'Snafellsnes- og Hnappadalssysla'),
(1919, 108, 'Strandasysla'),
(1920, 108, 'Sudur-Mulasysla'),
(1921, 108, 'Sudur-Tingeyjarsysla'),
(1922, 108, 'Vestmannaeyjar'),
(1923, 108, 'Vestur-Bardastrandarsysla'),
(1924, 108, 'Vestur-Hunavatnssysla'),
(1925, 108, 'Vestur-Isafjardarsysla'),
(1926, 108, 'Vestur-Skaftafellssysla'),
(1927, 109, 'Creek'),
(1928, 109, 'Eastern'),
(1929, 109, 'Midland'),
(1930, 109, 'South Town'),
(1931, 109, 'Spot Bay'),
(1932, 109, 'Stake Bay'),
(1933, 109, 'West End'),
(1934, 109, 'Western'),
(1935, 110, 'Cook Islands (General)'),
(1936, 111, 'Færøerne'),
(1937, 112, 'Falkland Islands (Malvinas) (General)'),
(1938, 113, 'Marshall Islands (General)'),
(1939, 114, 'Agalega Islands'),
(1940, 114, 'Black River'),
(1941, 114, 'Cargados Carajos'),
(1942, 114, 'Flacq'),
(1943, 114, 'Grand Port'),
(1944, 114, 'Moka'),
(1945, 114, 'Pamplemousses'),
(1946, 114, 'Plaines Wilhems'),
(1947, 114, 'Port Louis'),
(1948, 114, 'Riviere du Rempart'),
(1949, 114, 'Rodrigues'),
(1950, 114, 'Savanne'),
(1951, 115, 'Central'),
(1952, 115, 'Guadalcanal'),
(1953, 115, 'Isabel'),
(1954, 115, 'Makira'),
(1955, 115, 'Malaita'),
(1956, 115, 'Temotu'),
(1957, 115, 'Western'),
(1958, 116, 'South Georgia and the South Sandwich Islands (General)'),
(1959, 117, 'Turks and Caicos Islands (General)'),
(1960, 118, 'Wallis and Futuna (General)'),
(1961, 119, 'HaDarom'),
(1962, 119, 'HaMerkaz'),
(1963, 119, 'HaZafon'),
(1964, 119, 'Hefa'),
(1965, 119, 'Tel Aviv'),
(1966, 119, 'Yerushalayim'),
(1967, 120, 'Abruzzi'),
(1968, 120, 'Basilicata'),
(1969, 120, 'Calabria'),
(1970, 120, 'Campania'),
(1971, 120, 'Emilia-Romagna'),
(1972, 120, 'Friuli-Venezia Giulia'),
(1973, 120, 'Italy (General)'),
(1974, 120, 'Lazio'),
(1975, 120, 'Liguria'),
(1976, 120, 'Lombardia'),
(1977, 120, 'Marche'),
(1978, 120, 'Molise'),
(1979, 120, 'Piemonte'),
(1980, 120, 'Puglia'),
(1981, 120, 'Sardegna'),
(1982, 120, 'Sicilia'),
(1983, 120, 'Toscana'),
(1984, 120, 'Trentino-Alto Adige'),
(1985, 120, 'Umbria'),
(1986, 120, 'Valle d Aosta'),
(1987, 120, 'Veneto'),
(1988, 121, 'Clarendon'),
(1989, 121, 'Hanover'),
(1990, 121, 'Kingston'),
(1991, 121, 'Manchester'),
(1992, 121, 'Portland'),
(1993, 121, 'Saint Andrew'),
(1994, 121, 'Saint Ann'),
(1995, 121, 'Saint Catherine'),
(1996, 121, 'Saint Elizabeth'),
(1997, 121, 'Saint James'),
(1998, 121, 'Saint Mary'),
(1999, 121, 'Saint Thomas'),
(2000, 121, 'Trelawny'),
(2001, 121, 'Westmoreland'),
(2002, 122, 'Aichi'),
(2003, 122, 'Akita'),
(2004, 122, 'Aomori'),
(2005, 122, 'Chiba'),
(2006, 122, 'Ehime'),
(2007, 122, 'Fukui'),
(2008, 122, 'Fukuoka'),
(2009, 122, 'Fukushima'),
(2010, 122, 'Gifu'),
(2011, 122, 'Gumma'),
(2012, 122, 'Hiroshima'),
(2013, 122, 'Hokkaido'),
(2014, 122, 'Hyogo'),
(2015, 122, 'Ibaraki'),
(2016, 122, 'Ishikawa'),
(2017, 122, 'Iwate'),
(2018, 122, 'Kagawa'),
(2019, 122, 'Kagoshima'),
(2020, 122, 'Kanagawa'),
(2021, 122, 'Kochi'),
(2022, 122, 'Kumamoto'),
(2023, 122, 'Kyoto'),
(2024, 122, 'Mie'),
(2025, 122, 'Miyagi'),
(2026, 122, 'Miyazaki'),
(2027, 122, 'Nagano'),
(2028, 122, 'Nagasaki'),
(2029, 122, 'Nara'),
(2030, 122, 'Niigata'),
(2031, 122, 'Oita'),
(2032, 122, 'Okayama'),
(2033, 122, 'Okinawa'),
(2034, 122, 'Osaka'),
(2035, 122, 'Saga'),
(2036, 122, 'Saitama'),
(2037, 122, 'Shiga'),
(2038, 122, 'Shimane'),
(2039, 122, 'Shizuoka'),
(2040, 122, 'Tochigi'),
(2041, 122, 'Tokushima'),
(2042, 122, 'Tokyo'),
(2043, 122, 'Tottori'),
(2044, 122, 'Toyama'),
(2045, 122, 'Wakayama'),
(2046, 122, 'Yamagata'),
(2047, 122, 'Yamaguchi'),
(2048, 122, 'Yamanashi'),
(2049, 123, 'Al Balqa'),
(2050, 123, 'Al Karak'),
(2051, 123, 'Al Mafraq'),
(2052, 123, 'Amman'),
(2053, 123, 'At Tafilah'),
(2054, 123, 'Az Zarqa'),
(2055, 123, 'Irbid'),
(2056, 123, 'Ma'),
(2057, 124, 'Almaty'),
(2058, 124, 'Almaty City'),
(2059, 124, 'Aqmola'),
(2060, 124, ''),
(2061, 124, 'Astana City'),
(2062, 124, 'Atyrau'),
(2063, 124, 'Bayqonyr'),
(2064, 124, 'East Kazakhstan'),
(2065, 124, 'Mangghystau'),
(2066, 124, 'North Kazakhstan'),
(2067, 124, 'Pavlodar'),
(2068, 124, 'Qaraghandy'),
(2069, 124, 'Qostanay'),
(2070, 124, 'Qyzylorda'),
(2071, 124, 'South Kazakhstan'),
(2072, 124, 'West Kazakhstan'),
(2073, 124, 'Zhambyl'),
(2074, 125, 'Central'),
(2075, 125, 'Coast'),
(2076, 125, 'Eastern'),
(2077, 125, 'Nairobi Area'),
(2078, 125, 'North-Eastern'),
(2079, 125, 'Nyanza'),
(2080, 125, 'Rift Valley'),
(2081, 125, 'Western'),
(2082, 126, 'Gilbert Islands'),
(2083, 126, 'Line Islands'),
(2084, 126, 'Phoenix Islands'),
(2085, 127, 'Al Ahmadi'),
(2086, 127, 'Al Jahra'),
(2087, 127, 'Al Kuwayt'),
(2088, 127, 'Hawalli'),
(2089, 128, 'Batken'),
(2090, 128, 'Bishkek'),
(2091, 128, 'Chuy'),
(2092, 128, 'Jalal-Abad'),
(2093, 128, 'Naryn'),
(2094, 128, 'Osh'),
(2095, 128, 'Osh'),
(2096, 128, 'Talas'),
(2097, 128, 'Ysyk-Kol'),
(2098, 129, 'Attapu'),
(2099, 129, 'Champasak'),
(2100, 129, 'Houaphan'),
(2101, 129, 'Khammouan'),
(2102, 129, 'Louang Namtha'),
(2103, 129, 'Louangphrabang'),
(2104, 129, 'Oudomxai'),
(2105, 129, 'Phongsali'),
(2106, 129, 'Saravan'),
(2107, 129, 'Savannakhet'),
(2108, 129, 'Vientiane'),
(2109, 129, 'Xaignabouri'),
(2110, 129, 'Xiangkhoang'),
(2111, 130, 'Aizkraukles'),
(2112, 130, 'Aluksnes'),
(2113, 130, 'Balvu'),
(2114, 130, 'Bauskas'),
(2115, 130, 'Daugavpils'),
(2116, 130, 'Daugavpils'),
(2117, 130, 'Dobeles'),
(2118, 130, 'Gulbenes'),
(2119, 130, 'Jelgava'),
(2120, 130, 'Jelgavas'),
(2121, 130, 'Jurmala'),
(2122, 130, 'Kuldigas'),
(2123, 130, 'Limbazu'),
(2124, 130, 'Ludzas'),
(2125, 130, 'Madonas'),
(2126, 130, 'Ogres'),
(2127, 130, 'Preilu'),
(2128, 130, 'Riga'),
(2129, 130, 'Rigas'),
(2130, 130, 'Saldus'),
(2131, 130, 'Talsu'),
(2132, 130, 'Tukuma'),
(2133, 130, 'Valkas'),
(2134, 130, 'Valmieras'),
(2135, 130, 'Ventspils'),
(2136, 130, 'Ventspils'),
(2137, 131, 'Berea'),
(2138, 131, 'Butha-Buthe'),
(2139, 131, 'Leribe'),
(2140, 131, 'Mafeteng'),
(2141, 131, 'Maseru'),
(2142, 131, 'Mohales Hoek'),
(2143, 131, 'Mokhotlong'),
(2144, 131, 'Qachas Nek'),
(2145, 131, 'Quthing'),
(2146, 131, 'Thaba-Tseka'),
(2147, 132, 'Bong'),
(2148, 132, 'Grand Bassa'),
(2149, 132, 'Grand Cape Mount'),
(2150, 132, 'Grand Jide'),
(2151, 132, 'Lofa'),
(2152, 132, 'Maryland'),
(2153, 132, 'Monrovia'),
(2154, 132, 'Montserrado'),
(2155, 132, 'Nimba'),
(2156, 132, 'Sino'),
(2157, 133, 'Ajdabiya'),
(2158, 133, 'Al'),
(2159, 133, 'Al Fatih'),
(2160, 133, 'Al Jabal al Akhdar'),
(2161, 133, 'Al Jufrah');
INSERT INTO `list_states` (`state_id`, `country_id`, `name`) VALUES
(2162, 133, 'Al Khums'),
(2163, 133, 'Al Kufrah'),
(2164, 133, 'An Nuqat al Khams'),
(2165, 133, 'Ash Shati'),
(2166, 133, 'Awbari'),
(2167, 133, 'Az Zawiyah'),
(2168, 133, 'Banghazi'),
(2169, 133, 'Darnah'),
(2170, 133, 'Ghadamis'),
(2171, 133, 'Gharyan'),
(2172, 133, 'Misratah'),
(2173, 133, 'Murzuq'),
(2174, 133, 'Sabha'),
(2175, 133, 'Sawfajjin'),
(2176, 133, 'Surt'),
(2177, 133, 'Tarabulus'),
(2178, 133, 'Tarhunah'),
(2179, 133, 'Tubruq'),
(2180, 133, 'Yafran'),
(2181, 133, 'Zlitan'),
(2182, 134, 'Balzers'),
(2183, 134, 'Eschen'),
(2184, 134, 'Gamprin'),
(2185, 134, 'Mauren'),
(2186, 134, 'Planken'),
(2187, 134, 'Ruggell'),
(2188, 134, 'Schaan'),
(2189, 134, 'Schellenberg'),
(2190, 134, 'Triesen'),
(2191, 134, 'Triesenberg'),
(2192, 134, 'Vaduz'),
(2193, 135, 'Alytaus Apskritis'),
(2194, 135, 'Kauno Apskritis'),
(2195, 135, 'Klaipedos Apskritis'),
(2196, 135, 'Marijampoles Apskritis'),
(2197, 135, 'Panevezio Apskritis'),
(2198, 135, 'Siauliu Apskritis'),
(2199, 135, 'Taurages Apskritis'),
(2200, 135, 'Telsiu Apskritis'),
(2201, 135, 'Utenos Apskritis'),
(2202, 135, 'Vilniaus Apskritis'),
(2203, 136, 'Diekirch'),
(2204, 136, 'Grevenmacher'),
(2205, 136, 'Luxembourg'),
(2206, 137, 'Beqaa'),
(2207, 137, 'Beyrouth'),
(2208, 137, 'Liban-Nord'),
(2209, 137, 'Liban-Sud'),
(2210, 137, 'Mont-Liban'),
(2211, 137, 'Nabatiye'),
(2212, 138, 'Ilhas'),
(2213, 138, 'Macau'),
(2214, 139, 'Aracinovo'),
(2215, 139, 'Bac'),
(2216, 139, 'Belcista'),
(2217, 139, 'Berovo'),
(2218, 139, 'Bistrica'),
(2219, 139, 'Bitola'),
(2220, 139, 'Blatec'),
(2221, 139, 'Bogdanci'),
(2222, 139, 'Bogomila'),
(2223, 139, 'Bogovinje'),
(2224, 139, 'Bosilovo'),
(2225, 139, 'Brvenica'),
(2226, 139, 'Cair'),
(2227, 139, 'Capari'),
(2228, 139, 'Caska'),
(2229, 139, 'Cegrane'),
(2230, 139, 'Centar'),
(2231, 139, 'Centar Zupa'),
(2232, 139, 'Cesinovo'),
(2233, 139, 'Cucer-Sandevo'),
(2234, 139, 'Debar'),
(2235, 139, 'Delcevo'),
(2236, 139, 'Delogozdi'),
(2237, 139, 'Demir Hisar'),
(2238, 139, 'Demir Kapija'),
(2239, 139, 'Dobrusevo'),
(2240, 139, 'Dolna Banjica'),
(2241, 139, 'Dolneni'),
(2242, 139, 'Dorce Petrov'),
(2243, 139, 'Drugovo'),
(2244, 139, 'Dzepciste'),
(2245, 139, 'Gazi Baba'),
(2246, 139, 'Gevgelija'),
(2247, 139, 'Gostivar'),
(2248, 139, 'Gradsko'),
(2249, 139, 'Ilinden'),
(2250, 139, 'Izvor'),
(2251, 139, 'Jegunovce'),
(2252, 139, 'Kamenjane'),
(2253, 139, 'Karbinci'),
(2254, 139, 'Karpos'),
(2255, 139, 'Kavadarci'),
(2256, 139, 'Kicevo'),
(2257, 139, 'Kisela Voda'),
(2258, 139, 'Klecevce'),
(2259, 139, 'Kocani'),
(2260, 139, 'Konce'),
(2261, 139, 'Kondovo'),
(2262, 139, 'Konopiste'),
(2263, 139, 'Kosel'),
(2264, 139, 'Kratovo'),
(2265, 139, 'Kriva Palanka'),
(2266, 139, 'Krivogastani'),
(2267, 139, 'Krusevo'),
(2268, 139, 'Kuklis'),
(2269, 139, 'Kukurecani'),
(2270, 139, 'Kumanovo'),
(2271, 139, 'Labunista'),
(2272, 139, 'Lipkovo'),
(2273, 139, 'Lozovo'),
(2274, 139, 'Lukovo'),
(2275, 139, 'Makedonska Kamenica'),
(2276, 139, 'Makedonski Brod'),
(2277, 139, 'Mavrovi Anovi'),
(2278, 139, 'Meseista'),
(2279, 139, 'Miravci'),
(2280, 139, 'Mogila'),
(2281, 139, 'Murtino'),
(2282, 139, 'Negotino'),
(2283, 139, 'Negotino-Polosko'),
(2284, 139, 'Novaci'),
(2285, 139, 'Novo Selo'),
(2286, 139, 'Oblesevo'),
(2287, 139, 'Ohrid'),
(2288, 139, 'Orasac'),
(2289, 139, 'Orizari'),
(2290, 139, 'Oslomej'),
(2291, 139, 'Pehcevo'),
(2292, 139, 'Petrovec'),
(2293, 139, 'Plasnica'),
(2294, 139, 'Podares'),
(2295, 139, 'Prilep'),
(2296, 139, 'Probistip'),
(2297, 139, 'Radovis'),
(2298, 139, 'Rankovce'),
(2299, 139, 'Resen'),
(2300, 139, 'Rosoman'),
(2301, 139, 'Rostusa'),
(2302, 139, 'Samokov'),
(2303, 139, 'Saraj'),
(2304, 139, 'Sipkovica'),
(2305, 139, 'Sopiste'),
(2306, 139, 'Sopotnica'),
(2307, 139, 'Srbinovo'),
(2308, 139, 'Star Dojran'),
(2309, 139, 'Staravina'),
(2310, 139, 'Staro Nagoricane'),
(2311, 139, 'Stip'),
(2312, 139, 'Struga'),
(2313, 139, 'Strumica'),
(2314, 139, 'Studenicani'),
(2315, 139, 'Suto Orizari'),
(2316, 139, 'Sveti Nikole'),
(2317, 139, 'Tearce'),
(2318, 139, 'Tetovo'),
(2319, 139, 'Topolcani'),
(2320, 139, 'Valandovo'),
(2321, 139, 'Vasilevo'),
(2322, 139, 'Veles'),
(2323, 139, 'Velesta'),
(2324, 139, 'Vevcani'),
(2325, 139, 'Vinica'),
(2326, 139, 'Vitoliste'),
(2327, 139, 'Vranestica'),
(2328, 139, 'Vrapciste'),
(2329, 139, 'Vratnica'),
(2330, 139, 'Vrutok'),
(2331, 139, 'Zajas'),
(2332, 139, 'Zelenikovo'),
(2333, 139, 'Zelino'),
(2334, 139, 'Zitose'),
(2335, 139, 'Zletovo'),
(2336, 139, 'Zrnovci'),
(2337, 139, 'Ilhas'),
(2338, 139, 'Macau'),
(2339, 140, 'Antananarivo'),
(2340, 140, 'Antsiranana'),
(2341, 140, 'Fianarantsoa'),
(2342, 140, 'Mahajanga'),
(2343, 140, 'Toamasina'),
(2344, 140, 'Toliara'),
(2345, 141, 'Johor'),
(2346, 141, 'Kedah'),
(2347, 141, 'Kelantan'),
(2348, 141, 'Labuan'),
(2349, 141, 'Melaka'),
(2350, 141, 'Negeri Sembilan'),
(2351, 141, 'Pahang'),
(2352, 141, 'Perak'),
(2353, 141, 'Perlis'),
(2354, 141, 'Pulau Pinang'),
(2355, 141, 'Sabah'),
(2356, 141, 'Sarawak'),
(2357, 141, 'Selangor'),
(2358, 141, 'Terengganu'),
(2359, 141, 'Wilayah Persekutuan'),
(2360, 142, 'Balaka'),
(2361, 142, 'Blantyre'),
(2362, 142, 'Chikwawa'),
(2363, 142, 'Chiradzulu'),
(2364, 142, 'Chitipa'),
(2365, 142, 'Dedza'),
(2366, 142, 'Dowa'),
(2367, 142, 'Karonga'),
(2368, 142, 'Kasungu'),
(2369, 142, 'Likoma'),
(2370, 142, 'Lilongwe'),
(2371, 142, 'Machinga'),
(2372, 142, 'Mangochi'),
(2373, 142, 'Mchinji'),
(2374, 142, 'Mulanje'),
(2375, 142, 'Mwanza'),
(2376, 142, 'Mzimba'),
(2377, 142, 'Nkhata Bay'),
(2378, 142, 'Nkhotakota'),
(2379, 142, 'Nsanje'),
(2380, 142, 'Ntcheu'),
(2381, 142, 'Ntchisi'),
(2382, 142, 'Phalombe'),
(2383, 142, 'Rumphi'),
(2384, 142, 'Salima'),
(2385, 142, 'Thyolo'),
(2386, 142, 'Zomba'),
(2387, 143, 'Aliff'),
(2388, 143, 'Baa'),
(2389, 143, 'Daalu'),
(2390, 143, 'Faafu'),
(2391, 143, 'Gaafu Aliff'),
(2392, 143, 'Gaafu Daalu'),
(2393, 143, 'Haa Aliff'),
(2394, 143, 'Haa Daalu'),
(2395, 143, 'Kaafu'),
(2396, 143, 'Laamu'),
(2397, 143, 'Laviyani'),
(2398, 143, 'Male'),
(2399, 143, 'Meemu'),
(2400, 143, 'Naviyani'),
(2401, 143, 'Noonu'),
(2402, 143, 'Raa'),
(2403, 143, 'Seenu'),
(2404, 143, 'Shaviyani'),
(2405, 143, 'Thaa'),
(2406, 143, 'Waavu'),
(2407, 144, 'Malta (General)'),
(2408, 145, 'Bamako'),
(2409, 145, 'Gao'),
(2410, 145, 'Kayes'),
(2411, 145, 'Kidal'),
(2412, 145, 'Koulikoro'),
(2413, 145, 'Mopti'),
(2414, 145, 'Segou'),
(2415, 145, 'Sikasso'),
(2416, 145, 'Tombouctou'),
(2417, 146, 'Agadir'),
(2418, 146, 'Al Hoceima'),
(2419, 146, 'Azilal'),
(2420, 146, 'Ben Slimane'),
(2421, 146, 'Beni Mellal'),
(2422, 146, 'Boulemane'),
(2423, 146, 'Casablanca'),
(2424, 146, 'Chaouen'),
(2425, 146, 'El Jadida'),
(2426, 146, 'El Kelaa des Srarhna'),
(2427, 146, 'Er Rachidia'),
(2428, 146, 'Essaouira'),
(2429, 146, 'Fes'),
(2430, 146, 'Figuig'),
(2431, 146, 'Guelmim'),
(2432, 146, 'Ifrane'),
(2433, 146, 'Kenitra'),
(2434, 146, 'Khemisset'),
(2435, 146, 'Khenifra'),
(2436, 146, 'Khouribga'),
(2437, 146, 'Laayoune'),
(2438, 146, 'Larache'),
(2439, 146, 'Marrakech'),
(2440, 146, 'Meknes'),
(2441, 146, 'Nador'),
(2442, 146, 'Ouarzazate'),
(2443, 146, 'Oujda'),
(2444, 146, 'Rabat-Sale'),
(2445, 146, 'Safi'),
(2446, 146, 'Settat'),
(2447, 146, 'Sidi Kacem'),
(2448, 146, 'Tan-Tan'),
(2449, 146, 'Tanger'),
(2450, 146, 'Taounate'),
(2451, 146, 'Taroudannt'),
(2452, 146, 'Tata'),
(2453, 146, 'Taza'),
(2454, 146, 'Tetouan'),
(2455, 146, 'Tiznit'),
(2456, 147, 'Martinique Département'),
(2457, 148, 'Adrar'),
(2458, 148, 'Assaba'),
(2459, 148, 'Brakna'),
(2460, 148, 'Dakhlet Nouadhibou'),
(2461, 148, 'Gorgol'),
(2462, 148, 'Guidimaka'),
(2463, 148, 'Hodh Ech Chargui'),
(2464, 148, 'Hodh El Gharbi'),
(2465, 148, 'Inchiri'),
(2466, 148, 'Tagant'),
(2467, 148, 'Tiris Zemmour'),
(2468, 148, 'Trarza'),
(2469, 149, 'Mayotte (General)'),
(2470, 150, 'Chuuk'),
(2471, 150, 'Kosrae'),
(2472, 150, 'Pohnpei'),
(2473, 150, 'Yap'),
(2474, 151, 'Balti'),
(2475, 151, 'Cahul'),
(2476, 151, 'Chisinau'),
(2477, 151, 'Edinet'),
(2478, 151, 'Gagauzia'),
(2479, 151, 'Lapusna'),
(2480, 151, 'Orhei'),
(2481, 151, 'Soroca'),
(2482, 151, 'Stinga Nistrului'),
(2483, 151, 'Tighina'),
(2484, 151, 'Ungheni'),
(2485, 152, 'Arhangay'),
(2486, 152, 'Bayan-Olgiy'),
(2487, 152, 'Bayanhongor'),
(2488, 152, 'Bulgan'),
(2489, 152, 'Darhan'),
(2490, 152, 'Darhan Uul'),
(2491, 152, 'Dornod'),
(2492, 152, 'Dornogovi'),
(2493, 152, 'Dundgovi'),
(2494, 152, 'Dzavhan'),
(2495, 152, 'Erdenet'),
(2496, 152, 'Govi-Altay'),
(2497, 152, 'Govi-Sumber'),
(2498, 152, 'Hentiy'),
(2499, 152, 'Hovd'),
(2500, 152, 'Hovsgol'),
(2501, 152, 'Omnogovi'),
(2502, 152, 'Orhon'),
(2503, 152, 'Ovorhangay'),
(2504, 152, 'Selenge'),
(2505, 152, 'Suhbaatar'),
(2506, 152, 'Tov'),
(2507, 152, 'Ulaanbaatar'),
(2508, 152, 'Uvs'),
(2509, 153, 'Saint Anthony'),
(2510, 153, 'Saint Georges'),
(2511, 153, 'Saint Peter'),
(2512, 154, 'Cabo Delgado'),
(2513, 154, 'Gaza'),
(2514, 154, 'Inhambane'),
(2515, 154, 'Manica'),
(2516, 154, 'Maputo'),
(2517, 154, 'Nampula'),
(2518, 154, 'Niassa'),
(2519, 154, 'Sofala'),
(2520, 154, 'Tete'),
(2521, 154, 'Zambezia'),
(2522, 155, 'Chin State'),
(2523, 155, 'Irrawaddy'),
(2524, 155, 'Kachin State'),
(2525, 155, 'Karan State'),
(2526, 155, 'Kayah State'),
(2527, 155, 'Magwe'),
(2528, 155, 'Mandalay'),
(2529, 155, 'Mon State'),
(2530, 155, 'Pegu'),
(2531, 155, 'Rakhine State'),
(2532, 155, 'Rangoon'),
(2533, 155, 'Sagaing'),
(2534, 155, 'Shan State'),
(2535, 155, 'Tenasserim'),
(2536, 155, 'Yangon'),
(2537, 156, 'Aguascalientes'),
(2538, 156, 'Baja California'),
(2539, 156, 'Baja California Sur'),
(2540, 156, 'Campeche'),
(2541, 156, 'Chiapas'),
(2542, 156, 'Chihuahua'),
(2543, 156, 'Coahuila de Zaragoza'),
(2544, 156, 'Colima'),
(2545, 156, 'Distrito Federal'),
(2546, 156, 'Durango'),
(2547, 156, 'Guanajuato'),
(2548, 156, 'Guerrero'),
(2549, 156, 'Hidalgo'),
(2550, 156, 'Jalisco'),
(2551, 156, 'Mexico'),
(2552, 156, 'Michoacan de Ocampo'),
(2553, 156, 'Morelos'),
(2554, 156, 'Nayarit'),
(2555, 156, 'Nuevo Leon'),
(2556, 156, 'Oaxaca'),
(2557, 156, 'Puebla'),
(2558, 156, 'Queretaro de Arteaga'),
(2559, 156, 'Quintana Roo'),
(2560, 156, 'San Luis Potosi'),
(2561, 156, 'Sinaloa'),
(2562, 156, 'Sonora'),
(2563, 156, 'Tabasco'),
(2564, 156, 'Tamaulipas'),
(2565, 156, 'Tlaxcala'),
(2566, 156, 'Veracruz-Llave'),
(2567, 156, 'Yucatan'),
(2568, 156, 'Zacatecas'),
(2569, 157, 'La Condamine'),
(2570, 157, 'Monaco'),
(2571, 157, 'Monte-Carlo'),
(2572, 158, 'Bethanien'),
(2573, 158, 'Boesmanland'),
(2574, 158, 'Caprivi'),
(2575, 158, 'Caprivi Oos'),
(2576, 158, 'Damaraland'),
(2577, 158, 'Erongo'),
(2578, 158, 'Gobabis'),
(2579, 158, 'Grootfontein'),
(2580, 158, 'Hardap'),
(2581, 158, 'Hereroland Oos'),
(2582, 158, 'Hereroland Wes'),
(2583, 158, 'Kaokoland'),
(2584, 158, 'Karas'),
(2585, 158, 'Karasburg'),
(2586, 158, 'Karibib'),
(2587, 158, 'Kavango'),
(2588, 158, 'Keetmanshoop'),
(2589, 158, 'Khomas Region'),
(2590, 158, 'Kunene'),
(2591, 158, 'Luderitz'),
(2592, 158, 'Maltahohe'),
(2593, 158, 'Mariental'),
(2594, 158, 'Namaland'),
(2595, 158, 'Ohangwena'),
(2596, 158, 'Okahandja'),
(2597, 158, 'Okavango'),
(2598, 158, 'Omaheke'),
(2599, 158, 'Omaruru'),
(2600, 158, 'Omusati'),
(2601, 158, 'Oshana'),
(2602, 158, 'Oshikoto'),
(2603, 158, 'Otjiwarongo'),
(2604, 158, 'Otjozondjupa'),
(2605, 158, 'Outjo'),
(2606, 158, 'Owambo'),
(2607, 158, 'Rehoboth'),
(2608, 158, 'Swakopmund'),
(2609, 158, 'Tsumeb'),
(2610, 158, 'Windhoek'),
(2611, 159, 'Aiwo'),
(2612, 159, 'Anabar'),
(2613, 159, 'Anetan'),
(2614, 159, 'Anibare'),
(2615, 159, 'Baiti'),
(2616, 159, 'Boe'),
(2617, 159, 'Buada'),
(2618, 159, 'Denigomodu'),
(2619, 159, 'Ewa'),
(2620, 159, 'Ijuw'),
(2621, 159, 'Meneng'),
(2622, 159, 'Nibok'),
(2623, 159, 'Uaboe'),
(2624, 159, 'Yaren'),
(2625, 160, 'Bagmati'),
(2626, 160, 'Bheri'),
(2627, 160, 'Bagmati Zone'),
(2628, 160, 'Dhawalagiri'),
(2629, 160, 'Gandaki'),
(2630, 160, 'Janakpur'),
(2631, 160, 'Karnali'),
(2632, 160, 'Kosi'),
(2633, 160, 'Lumbini'),
(2634, 160, 'Mahakali'),
(2635, 160, 'Mechi'),
(2636, 160, 'Narayani'),
(2637, 160, 'Rapti'),
(2638, 160, 'Sagarmatha'),
(2639, 160, 'Seti'),
(2640, 161, 'Boaco'),
(2641, 161, 'Carazo'),
(2642, 161, 'Chinandega'),
(2643, 161, 'Chontales'),
(2644, 161, 'Esteli'),
(2645, 161, 'Granada'),
(2646, 161, 'Jinotega'),
(2647, 161, 'Leon'),
(2648, 161, 'Madriz'),
(2649, 161, 'Managua'),
(2650, 161, 'Masaya'),
(2651, 161, 'Matagalpa'),
(2652, 161, 'Nueva Segovia'),
(2653, 161, 'Rio San Juan'),
(2654, 161, 'Rivas'),
(2655, 161, 'Zelaya'),
(2656, 162, 'Abia'),
(2657, 162, 'Abuja Capital Territory'),
(2658, 162, 'Adamawa'),
(2659, 162, 'Akwa Ibom'),
(2660, 162, 'Anambra'),
(2661, 162, 'Bauchi'),
(2662, 162, 'Bayelsa'),
(2663, 162, 'Benue'),
(2664, 162, 'Borno'),
(2665, 162, 'Cross River'),
(2666, 162, 'Delta'),
(2667, 162, 'Ebonyi'),
(2668, 162, 'Edo'),
(2669, 162, 'Ekiti'),
(2670, 162, 'Enugu'),
(2671, 162, 'Gombe'),
(2672, 162, 'Imo'),
(2673, 162, 'Jigawa'),
(2674, 162, 'Kaduna'),
(2675, 162, 'Kano'),
(2676, 162, 'Katsina'),
(2677, 162, 'Kebbi'),
(2678, 162, 'Kogi'),
(2679, 162, 'Kwara'),
(2680, 162, 'Lagos'),
(2681, 162, 'Nassarawa'),
(2682, 162, 'Niger'),
(2683, 162, 'Ogun'),
(2684, 162, 'Ondo'),
(2685, 162, 'Ondo'),
(2686, 162, 'Osun'),
(2687, 162, 'Oyo'),
(2688, 162, 'Plateau'),
(2689, 162, 'Rivers'),
(2690, 162, 'Rivers'),
(2691, 162, 'Sokoto'),
(2692, 162, 'Taraba'),
(2693, 162, 'Yobe'),
(2694, 162, 'Zamfara'),
(2695, 163, 'Niue (General)'),
(2696, 164, 'Norfolk Island (General)'),
(2697, 165, 'Northern Mariana Islands (General)'),
(2698, 166, 'Akershus'),
(2699, 166, 'Aust-Agder'),
(2700, 166, 'Buskerud'),
(2701, 166, 'Finnmark'),
(2702, 166, 'Hedmark'),
(2703, 166, 'Hordaland'),
(2704, 166, 'More og Romsdal'),
(2705, 166, 'Nord-Trondelag'),
(2706, 166, 'Nordland'),
(2707, 166, 'Oppland'),
(2708, 166, 'Oslo'),
(2709, 166, 'Ostfold'),
(2710, 166, 'Rogaland'),
(2711, 166, 'Sogn og Fjordane'),
(2712, 166, 'Sor-Trondelag'),
(2713, 166, 'Telemark'),
(2714, 166, 'Troms'),
(2715, 166, 'Vest-Agder'),
(2716, 166, 'Vestfold'),
(2717, 167, 'Nouvelle-Calédonie'),
(2718, 168, 'Akaroa'),
(2719, 168, 'Amuri'),
(2720, 168, 'Ashburton'),
(2721, 168, 'Bay of Islands'),
(2722, 168, 'Bruce'),
(2723, 168, 'Buller'),
(2724, 168, 'Chatham Islands'),
(2725, 168, 'Cheviot'),
(2726, 168, 'Clifton'),
(2727, 168, 'Clutha'),
(2728, 168, 'Cook'),
(2729, 168, 'Dannevirke'),
(2730, 168, 'Egmont'),
(2731, 168, 'Eketahuna'),
(2732, 168, 'Ellesmere'),
(2733, 168, 'Eltham'),
(2734, 168, 'Eyre'),
(2735, 168, 'Featherston'),
(2736, 168, 'Franklin'),
(2737, 168, 'Golden Bay'),
(2738, 168, 'Great Barrier Island'),
(2739, 168, 'Grey'),
(2740, 168, 'Hauraki Plains'),
(2741, 168, 'Hawera'),
(2742, 168, 'Hawkes Bay'),
(2743, 168, 'Heathcote'),
(2744, 168, 'Hikurangi'),
(2745, 168, 'Hobson'),
(2746, 168, 'Hokianga'),
(2747, 168, 'Horowhenua'),
(2748, 168, 'Hurunui'),
(2749, 168, 'Hutt'),
(2750, 168, 'Inangahua'),
(2751, 168, 'Inglewood'),
(2752, 168, 'Kaikoura'),
(2753, 168, 'Kairanga'),
(2754, 168, 'Kiwitea'),
(2755, 168, 'Lake'),
(2756, 168, 'Mackenzie'),
(2757, 168, 'Malvern'),
(2758, 168, 'Manaia'),
(2759, 168, 'Manawatu'),
(2760, 168, 'Mangonui'),
(2761, 168, 'Maniototo'),
(2762, 168, 'Marlborough'),
(2763, 168, 'Masterton'),
(2764, 168, 'Matamata'),
(2765, 168, 'Mount Herbert'),
(2766, 168, 'Ohinemuri'),
(2767, 168, 'Opotiki'),
(2768, 168, 'Oroua'),
(2769, 168, 'Otamatea'),
(2770, 168, 'Otorohanga'),
(2771, 168, 'Oxford'),
(2772, 168, 'Pahiatua'),
(2773, 168, 'Paparua'),
(2774, 168, 'Patea'),
(2775, 168, 'Piako'),
(2776, 168, 'Pohangina'),
(2777, 168, 'Raglan'),
(2778, 168, 'Rangiora'),
(2779, 168, 'Rangitikei'),
(2780, 168, 'Rodney'),
(2781, 168, 'Rotorua'),
(2782, 168, 'Runanga'),
(2783, 168, 'Saint Kilda'),
(2784, 168, 'Silverpeaks'),
(2785, 168, 'Southland'),
(2786, 168, 'Stewart Island'),
(2787, 168, 'Stratford'),
(2788, 168, 'Strathallan'),
(2789, 168, 'Taranaki'),
(2790, 168, 'Taumarunui'),
(2791, 168, 'Taupo'),
(2792, 168, 'Tauranga'),
(2793, 168, 'Thames-Coromandel'),
(2794, 168, 'Tuapeka'),
(2795, 168, 'Vincent'),
(2796, 168, 'Waiapu'),
(2797, 168, 'Waiheke'),
(2798, 168, 'Waihemo'),
(2799, 168, 'Waikato'),
(2800, 168, 'Waikohu'),
(2801, 168, 'Waimairi'),
(2802, 168, 'Waimarino'),
(2803, 168, 'Waimate'),
(2804, 168, 'Waimate West'),
(2805, 168, 'Waimea'),
(2806, 168, 'Waipa'),
(2807, 168, 'Waipawa'),
(2808, 168, 'Waipukurau'),
(2809, 168, 'Wairarapa South'),
(2810, 168, 'Wairewa'),
(2811, 168, 'Wairoa'),
(2812, 168, 'Waitaki'),
(2813, 168, 'Waitomo'),
(2814, 168, 'Waitotara'),
(2815, 168, 'Wallace'),
(2816, 168, 'Wanganui'),
(2817, 168, 'Waverley'),
(2818, 168, 'Westland'),
(2819, 168, 'Whakatane'),
(2820, 168, 'Whangarei'),
(2821, 168, 'Whangaroa'),
(2822, 168, 'Woodville'),
(2823, 169, 'Agadez'),
(2824, 169, 'Diffa'),
(2825, 169, 'Dosso'),
(2826, 169, 'Maradi'),
(2827, 169, 'Niamey'),
(2828, 169, 'Tahoua'),
(2829, 169, 'Zinder'),
(2830, 170, 'Ad Dakhiliyah'),
(2831, 170, 'Al Batinah'),
(2832, 170, 'Al Wusta'),
(2833, 170, 'Ash Sharqiyah'),
(2834, 170, 'Az Zahirah'),
(2835, 170, 'Masqat'),
(2836, 170, 'Musandam'),
(2837, 170, 'Zufar'),
(2838, 171, 'Azad Kashmir'),
(2839, 171, 'Balochistan'),
(2840, 171, 'Federally Administered Tribal Areas'),
(2841, 171, 'Islamabad'),
(2842, 171, 'North-West Frontier'),
(2843, 171, 'Northern Areas'),
(2844, 171, 'Punjab'),
(2845, 171, 'Sindh'),
(2846, 172, 'Palau (General)'),
(2847, 173, 'Palestinian Territory (General)'),
(2848, 174, 'Bocas del Toro'),
(2849, 174, 'Chiriqui'),
(2850, 174, 'Cocle'),
(2851, 174, 'Colon'),
(2852, 174, 'Darien'),
(2853, 174, 'Herrera'),
(2854, 174, 'Los Santos'),
(2855, 174, 'Panama'),
(2856, 174, 'San Blas'),
(2857, 174, 'Veraguas'),
(2858, 175, 'Central'),
(2859, 175, 'Chimbu'),
(2860, 175, 'East New Britain'),
(2861, 175, 'East Sepik'),
(2862, 175, 'Eastern Highlands'),
(2863, 175, 'Enga'),
(2864, 175, 'Gulf'),
(2865, 175, 'Madang'),
(2866, 175, 'Manus'),
(2867, 175, 'Milne Bay'),
(2868, 175, 'Morobe'),
(2869, 175, 'National Capital'),
(2870, 175, 'New Ireland'),
(2871, 175, 'North Solomons'),
(2872, 175, 'Northern'),
(2873, 175, 'Sandaun'),
(2874, 175, 'Southern Highlands'),
(2875, 175, 'West New Britain'),
(2876, 175, 'Western'),
(2877, 175, 'Western Highlands'),
(2878, 176, 'Alto Paraguay'),
(2879, 176, 'Alto Parana'),
(2880, 176, 'Amambay'),
(2881, 176, 'Boqueron'),
(2882, 176, 'Caaguazu'),
(2883, 176, 'Caazapa'),
(2884, 176, 'Canindeyu'),
(2885, 176, 'Central'),
(2886, 176, 'Chaco'),
(2887, 176, 'Concepcion'),
(2888, 176, 'Cordillera'),
(2889, 176, 'Guaira'),
(2890, 176, 'Itapua'),
(2891, 176, 'Misiones'),
(2892, 176, 'Neembucu'),
(2893, 176, 'Nueva Asuncion'),
(2894, 176, 'Paraguari'),
(2895, 176, 'Presidente Hayes'),
(2896, 176, 'San Pedro'),
(2897, 177, 'Amazonas'),
(2898, 177, 'Ancash'),
(2899, 177, 'Apurimac'),
(2900, 177, 'Arequipa'),
(2901, 177, 'Ayacucho'),
(2902, 177, 'Cajamarca'),
(2903, 177, 'Callao'),
(2904, 177, 'Cusco'),
(2905, 177, 'Huancavelica'),
(2906, 177, 'Huanuco'),
(2907, 177, 'Ica'),
(2908, 177, 'Junin'),
(2909, 177, 'La Libertad'),
(2910, 177, 'Lambayeque'),
(2911, 177, 'Lima'),
(2912, 177, 'Loreto'),
(2913, 177, 'Madre de Dios'),
(2914, 177, 'Moquegua'),
(2915, 177, 'Pasco'),
(2916, 177, 'Piura'),
(2917, 177, 'Puno'),
(2918, 177, 'San Martin'),
(2919, 177, 'Tacna'),
(2920, 177, 'Tumbes'),
(2921, 177, 'Ucayali'),
(2922, 178, 'Pitcairn (General)'),
(2923, 179, 'Biala Podlaska'),
(2924, 179, 'Bialystok'),
(2925, 179, 'Bielsko'),
(2926, 179, 'Bydgoszcz'),
(2927, 179, 'Chelm'),
(2928, 179, 'Ciechanow'),
(2929, 179, 'Czestochowa'),
(2930, 179, 'Dolnoslaskie'),
(2931, 179, 'Elblag'),
(2932, 179, 'Gdansk'),
(2933, 179, 'Gorzow'),
(2934, 179, 'Jelenia Gora'),
(2935, 179, 'Kalisz'),
(2936, 179, 'Katowice'),
(2937, 179, 'Kielce'),
(2938, 179, 'Konin'),
(2939, 179, 'Koszalin'),
(2940, 179, 'Krakow'),
(2941, 179, 'Krosno'),
(2942, 179, 'Kujawsko-Pomorskie'),
(2943, 179, 'Legnica'),
(2944, 179, 'Leszno'),
(2945, 179, 'Lodz'),
(2946, 179, 'Lodzkie'),
(2947, 179, 'Lomza'),
(2948, 179, 'Lubelskie'),
(2949, 179, 'Lublin'),
(2950, 179, 'Lubuskie'),
(2951, 179, 'Malopolskie'),
(2952, 179, 'Mazowieckie'),
(2953, 179, 'Nowy Sacz'),
(2954, 179, 'Olsztyn'),
(2955, 179, 'Opole'),
(2956, 179, 'Opolskie'),
(2957, 179, 'Ostroleka'),
(2958, 179, 'Pila'),
(2959, 179, 'Piotrkow'),
(2960, 179, 'Plock'),
(2961, 179, 'Podkarpackie'),
(2962, 179, 'Podlaskie'),
(2963, 179, 'Pomorskie'),
(2964, 179, 'Poznan'),
(2965, 179, 'Przemysl'),
(2966, 179, 'Radom'),
(2967, 179, 'Rzeszow'),
(2968, 179, 'Siedlce'),
(2969, 179, 'Sieradz'),
(2970, 179, 'Skierniewice'),
(2971, 179, 'Slaskie'),
(2972, 179, 'Slupsk'),
(2973, 179, 'Suwalki'),
(2974, 179, 'Swietokrzyskie'),
(2975, 179, 'Szczecin'),
(2976, 179, 'Tarnobrzeg'),
(2977, 179, 'Tarnow'),
(2978, 179, 'Torun'),
(2979, 179, 'Walbrzych'),
(2980, 179, 'Warminsko-Mazurskie'),
(2981, 179, 'Warszawa'),
(2982, 179, 'Wielkopolskie'),
(2983, 179, 'Wloclawek'),
(2984, 179, 'Wroclaw'),
(2985, 179, 'Zachodniopomorskie'),
(2986, 179, 'Zamosc'),
(2987, 179, 'Zielona Gora'),
(2988, 180, 'Aveiro'),
(2989, 180, 'Azores'),
(2990, 180, 'Beja'),
(2991, 180, 'Braga'),
(2992, 180, 'Braganca'),
(2993, 180, 'Castelo Branco'),
(2994, 180, 'Coimbra'),
(2995, 180, 'Evora'),
(2996, 180, 'Faro'),
(2997, 180, 'Guarda'),
(2998, 180, 'Leiria'),
(2999, 180, 'Lisboa'),
(3000, 180, 'Madeira'),
(3001, 180, 'Portalegre'),
(3002, 180, 'Porto'),
(3003, 180, 'Santarem'),
(3004, 180, 'Setubal'),
(3005, 180, 'Viana do Castelo'),
(3006, 180, 'Vila Real'),
(3007, 180, 'Viseu'),
(3008, 181, 'Puerto Rico (General)'),
(3009, 182, 'Ad Dawhah'),
(3010, 182, 'Al Ghuwariyah'),
(3011, 182, 'Al Jumaliyah'),
(3012, 182, 'Al Khawr'),
(3013, 182, 'Al Wakrah'),
(3014, 182, 'Al Wakrah Municipality'),
(3015, 182, 'Ar Rayyan'),
(3016, 182, 'Jariyan al Batnah'),
(3017, 182, 'Madinat ach Shamal'),
(3018, 182, 'Umm Said'),
(3019, 182, 'Umm Salal'),
(3020, 183, 'Aberdeen City'),
(3021, 183, 'Aberdeenshire'),
(3022, 183, 'Angus'),
(3023, 183, 'Antrim'),
(3024, 183, 'Ards'),
(3025, 183, 'Argyll and Bute'),
(3026, 183, 'Armagh'),
(3027, 183, 'Avon'),
(3028, 183, 'Ballymena'),
(3029, 183, 'Ballymoney'),
(3030, 183, 'Banbridge'),
(3031, 183, 'Barking and Dagenham'),
(3032, 183, 'Barnet'),
(3033, 183, 'Barnsley'),
(3034, 183, 'Bath and North East Somerset'),
(3035, 183, 'Bedfordshire'),
(3036, 183, 'Belfast'),
(3037, 183, 'Berkshire'),
(3038, 183, 'Bexley'),
(3039, 183, 'Birmingham'),
(3040, 183, 'Blackburn with Darwen'),
(3041, 183, 'Blackpool'),
(3042, 183, 'Blaenau Gwent'),
(3043, 183, 'Bolton'),
(3044, 183, 'Bournemouth'),
(3045, 183, 'Bracknell Forest'),
(3046, 183, 'Bradford'),
(3047, 183, 'Brent'),
(3048, 183, 'Bridgend'),
(3049, 183, 'Brighton and Hove'),
(3050, 183, 'Bristol, City of'),
(3051, 183, 'Bromley'),
(3052, 183, 'Buckinghamshire'),
(3053, 183, 'Bury'),
(3054, 183, 'Caerphilly'),
(3055, 183, 'Calderdale'),
(3056, 183, 'Cambridgeshire'),
(3057, 183, 'Camden'),
(3058, 183, 'Cardiff'),
(3059, 183, 'Carmarthenshire'),
(3060, 183, 'Carrickfergus'),
(3061, 183, 'Castlereagh'),
(3062, 183, 'Central'),
(3063, 183, 'Ceredigion'),
(3064, 183, 'Cheshire'),
(3065, 183, 'Clackmannanshire'),
(3066, 183, 'Cleveland'),
(3067, 183, 'Clwyd'),
(3068, 183, 'Coleraine'),
(3069, 183, 'Conwy'),
(3070, 183, 'Cookstown'),
(3071, 183, 'Cornwall'),
(3072, 183, 'Coventry'),
(3073, 183, 'Craigavon'),
(3074, 183, 'Croydon'),
(3075, 183, 'Cumbria'),
(3076, 183, 'Darlington'),
(3077, 183, 'Denbighshire'),
(3078, 183, 'Derby'),
(3079, 183, 'Derbyshire'),
(3080, 183, 'Derry'),
(3081, 183, 'Devon'),
(3082, 183, 'Doncaster'),
(3083, 183, 'Dorset'),
(3084, 183, 'Down'),
(3085, 183, 'Dudley'),
(3086, 183, 'Dumfries and Galloway'),
(3087, 183, 'Dundee City'),
(3088, 183, 'Dungannon'),
(3089, 183, 'Durham'),
(3090, 183, 'Dyfed'),
(3091, 183, 'Ealing'),
(3092, 183, 'East Ayrshire'),
(3093, 183, 'East Dunbartonshire'),
(3094, 183, 'East Lothian'),
(3095, 183, 'East Renfrewshire'),
(3096, 183, 'East Riding of Yorkshire'),
(3097, 183, 'East Sussex'),
(3098, 183, 'Edinburgh, City of'),
(3099, 183, 'Eilean Siar'),
(3100, 183, 'Enfield'),
(3101, 183, 'Essex'),
(3102, 183, 'Falkirk'),
(3103, 183, 'Fermanagh'),
(3104, 183, 'Fife'),
(3105, 183, 'Flintshire'),
(3106, 183, 'Gateshead'),
(3107, 183, 'Glasgow City'),
(3108, 183, 'Gloucestershire'),
(3109, 183, 'Grampian'),
(3110, 183, 'Greater London'),
(3111, 183, 'Greater Manchester'),
(3112, 183, 'Greenwich'),
(3113, 183, 'Gwent'),
(3114, 183, 'Gwynedd'),
(3115, 183, 'Hackney'),
(3116, 183, 'Halton'),
(3117, 183, 'Hammersmith and Fulham'),
(3118, 183, 'Hampshire'),
(3119, 183, 'Haringey'),
(3120, 183, 'Harrow'),
(3121, 183, 'Hartlepool'),
(3122, 183, 'Havering'),
(3123, 183, 'Hereford and Worcester'),
(3124, 183, 'Herefordshire'),
(3125, 183, 'Hertford'),
(3126, 183, 'Highland'),
(3127, 183, 'Hillingdon'),
(3128, 183, 'Hounslow'),
(3129, 183, 'Humberside'),
(3130, 183, 'Inverclyde'),
(3131, 183, 'Isle of Anglesey'),
(3132, 183, 'Isle of Wight'),
(3133, 183, 'Islington'),
(3134, 183, 'Kensington and Chelsea'),
(3135, 183, 'Kent'),
(3136, 183, 'Kingston upon Hull, City of'),
(3137, 183, 'Kingston upon Thames'),
(3138, 183, 'Kirklees'),
(3139, 183, 'Knowsley'),
(3140, 183, 'Lambeth'),
(3141, 183, 'Lancashire'),
(3142, 183, 'Larne'),
(3143, 183, 'Leeds'),
(3144, 183, 'Leicester'),
(3145, 183, 'Leicestershire'),
(3146, 183, 'Lewisham'),
(3147, 183, 'Limavady'),
(3148, 183, 'Lincolnshire'),
(3149, 183, 'Lisburn'),
(3150, 183, 'Liverpool'),
(3151, 183, 'London, City of'),
(3152, 183, 'Lothian'),
(3153, 183, 'Luton'),
(3154, 183, 'Magherafelt'),
(3155, 183, 'Manchester'),
(3156, 183, 'Medway'),
(3157, 183, 'Merseyside'),
(3158, 183, 'Merthyr Tydfil'),
(3159, 183, 'Merton'),
(3160, 183, 'Mid Glamorgan'),
(3161, 183, 'Middlesbrough'),
(3162, 183, 'Midlothian'),
(3163, 183, 'Milton Keynes'),
(3164, 183, 'Monmouthshire'),
(3165, 183, 'Moray'),
(3166, 183, 'Moyle'),
(3167, 183, 'Neath Port Talbot'),
(3168, 183, 'Newcastle upon Tyne'),
(3169, 183, 'Newham'),
(3170, 183, 'Newport'),
(3171, 183, 'Newry and Mourne'),
(3172, 183, 'Newtownabbey'),
(3173, 183, 'Norfolk'),
(3174, 183, 'North Ayrshire'),
(3175, 183, 'North Down'),
(3176, 183, 'North East Lincolnshire'),
(3177, 183, 'North Lanarkshire'),
(3178, 183, 'North Lincolnshire'),
(3179, 183, 'North Somerset'),
(3180, 183, 'North Tyneside'),
(3181, 183, 'North Yorkshire'),
(3182, 183, 'Northamptonshire'),
(3183, 183, 'Northumberland'),
(3184, 183, 'Nottingham'),
(3185, 183, 'Nottinghamshire'),
(3186, 183, 'Oldham'),
(3187, 183, 'Omagh'),
(3188, 183, 'Orkney'),
(3189, 183, 'Oxfordshire'),
(3190, 183, 'Pembrokeshire'),
(3191, 183, 'Perth and Kinross'),
(3192, 183, 'Peterborough'),
(3193, 183, 'Plymouth'),
(3194, 183, 'Poole'),
(3195, 183, 'Portsmouth'),
(3196, 183, 'Powys'),
(3197, 183, 'Reading'),
(3198, 183, 'Redbridge'),
(3199, 183, 'Redcar and Cleveland'),
(3200, 183, 'Renfrewshire'),
(3201, 183, 'Rhondda Cynon Taff'),
(3202, 183, 'Richmond upon Thames'),
(3203, 183, 'Rochdale'),
(3204, 183, 'Rotherham'),
(3205, 183, 'Rutland'),
(3206, 183, 'Salford'),
(3207, 183, 'Sandwell'),
(3208, 183, 'Scottish Borders'),
(3209, 183, 'The Sefton'),
(3210, 183, 'Sheffield'),
(3211, 183, 'Shetland Islands'),
(3212, 183, 'Shropshire'),
(3213, 183, 'Slough'),
(3214, 183, 'Solihull'),
(3215, 183, 'Somerset'),
(3216, 183, 'South Ayrshire'),
(3217, 183, 'South Glamorgan'),
(3218, 183, 'South Gloucestershire'),
(3219, 183, 'South Lanarkshire'),
(3220, 183, 'South Tyneside'),
(3221, 183, 'South Yorkshire'),
(3222, 183, 'Southampton'),
(3223, 183, 'Southend-on-Sea'),
(3224, 183, 'Southwark'),
(3225, 183, 'St. Helens'),
(3226, 183, 'Staffordshire'),
(3227, 183, 'Stirling'),
(3228, 183, 'Stockport'),
(3229, 183, 'Stockton-on-Tees'),
(3230, 183, 'Stoke-on-Trent'),
(3231, 183, 'Strabane'),
(3232, 183, 'Strathclyde'),
(3233, 183, 'Suffolk'),
(3234, 183, 'Sunderland'),
(3235, 183, 'Surrey'),
(3236, 183, 'Sutton'),
(3237, 183, 'Swansea'),
(3238, 183, 'Swindon'),
(3239, 183, 'Tameside'),
(3240, 183, 'Tayside'),
(3241, 183, 'Telford and Wrekin'),
(3242, 183, 'Thurrock'),
(3243, 183, 'Torbay'),
(3244, 183, 'Torfaen'),
(3245, 183, 'Tower Hamlets'),
(3246, 183, 'Trafford'),
(3247, 183, 'Tyne and Wear'),
(3248, 183, 'Vale of Glamorgan, The'),
(3249, 183, 'Wakefield'),
(3250, 183, 'Walsall'),
(3251, 183, 'Waltham Forest'),
(3252, 183, 'Wandsworth'),
(3253, 183, 'Warrington'),
(3254, 183, 'Warwickshire'),
(3255, 183, 'West Berkshire'),
(3256, 183, 'West Dunbartonshire'),
(3257, 183, 'West Glamorgan'),
(3258, 183, 'West Lothian'),
(3259, 183, 'West Midlands'),
(3260, 183, 'West Sussex'),
(3261, 183, 'West Yorkshire'),
(3262, 183, 'Westminster'),
(3263, 183, 'Wigan'),
(3264, 183, 'Wiltshire'),
(3265, 183, 'Windsor and Maidenhead'),
(3266, 183, 'Wirral'),
(3267, 183, 'Wokingham'),
(3268, 183, 'Wolverhampton'),
(3269, 183, 'Worcestershire'),
(3270, 183, 'Wrexham'),
(3271, 183, 'York'),
(3272, 184, 'Bamingui-Bangoran'),
(3273, 184, 'Bangui'),
(3274, 184, 'Basse-Kotto'),
(3275, 184, 'Haut-Mbomou'),
(3276, 184, 'Haute-Kotto'),
(3277, 184, 'Kemo'),
(3278, 184, 'Lobaye'),
(3279, 184, 'Mambere-Kadei'),
(3280, 184, 'Mbomou'),
(3281, 184, 'Nana-Grebizi'),
(3282, 184, 'Nana-Mambere'),
(3283, 184, 'Ombella-Mpoko'),
(3284, 184, 'Ouaka'),
(3285, 184, 'Ouham'),
(3286, 184, 'Ouham-Pende'),
(3287, 184, 'Sangha-Mbaere'),
(3288, 184, 'Vakaga'),
(3289, 185, 'Blansko'),
(3290, 185, 'Breclav'),
(3291, 185, 'Hlavni Mesto Praha'),
(3292, 185, 'Hradec Kralove'),
(3293, 185, 'Jablonec nad Nisou'),
(3294, 185, 'Jiein'),
(3295, 185, 'Jihlava'),
(3296, 185, 'Jihocesky Kraj'),
(3297, 185, 'Jihomoravsky Kraj'),
(3298, 185, 'Karlovarsky Kraj'),
(3299, 185, 'Kolin'),
(3300, 185, 'Kralovehradecky Kraj'),
(3301, 185, 'Liberec'),
(3302, 185, 'Liberecky Kraj'),
(3303, 185, 'Melnik'),
(3304, 185, 'Mlada Boleslav'),
(3305, 185, 'Moravskoslezsky Kraj'),
(3306, 185, 'Nachod'),
(3307, 185, 'Nymburk'),
(3308, 185, 'Olomoucky Kraj'),
(3309, 185, 'Pardubice'),
(3310, 185, 'Pardubicky Kraj'),
(3311, 185, 'Plzensky Kraj'),
(3312, 185, 'Semily'),
(3313, 185, 'Stredocesky Kraj'),
(3314, 185, 'Trutnov'),
(3315, 185, 'Ustecky Kraj'),
(3316, 185, 'Vysocina'),
(3317, 185, 'Zlinsky Kraj'),
(3318, 186, 'Congo, The Democratic Republic of the (General)'),
(3319, 187, 'Azua'),
(3320, 187, 'Baoruco'),
(3321, 187, 'Barahona'),
(3322, 187, 'Dajabon'),
(3323, 187, 'Distrito Nacional'),
(3324, 187, 'Duarte'),
(3325, 187, 'El Seibo'),
(3326, 187, 'Elias Pina'),
(3327, 187, 'Espaillat'),
(3328, 187, 'Hato Mayor'),
(3329, 187, 'Independencia'),
(3330, 187, 'La Altagracia'),
(3331, 187, 'La Romana'),
(3332, 187, 'La Vega'),
(3333, 187, 'Maria Trinidad Sanchez'),
(3334, 187, 'Monsenor Nouel'),
(3335, 187, 'Monte Cristi'),
(3336, 187, 'Monte Plata'),
(3337, 187, 'Pedernales'),
(3338, 187, 'Peravia'),
(3339, 187, 'Puerto Plata'),
(3340, 187, 'Salcedo'),
(3341, 187, 'Samana'),
(3342, 187, 'San Cristobal'),
(3343, 187, 'San Juan'),
(3344, 187, 'San Pedro De Macoris'),
(3345, 187, 'Sanchez Ramirez'),
(3346, 187, 'Santiago'),
(3347, 187, 'Santiago Rodriguez'),
(3348, 187, 'Valverde'),
(3349, 188, 'Ardabil'),
(3350, 188, 'Azarbayjan-e Bakhtari'),
(3351, 188, 'Azarbayjan-e Khavari'),
(3352, 188, 'Bakhtaran'),
(3353, 188, 'Bushehr'),
(3354, 188, 'Chahar Mahall va Bakhtiari'),
(3355, 188, 'East Azarbaijan'),
(3356, 188, 'Esfahan'),
(3357, 188, 'Fars'),
(3358, 188, 'Gilan'),
(3359, 188, 'Golestan'),
(3360, 188, 'Hamadan'),
(3361, 188, 'Hormozgan'),
(3362, 188, 'Ilam'),
(3363, 188, 'Kerman'),
(3364, 188, 'Khorasan'),
(3365, 188, 'Khuzestan'),
(3366, 188, 'Kohkiluyeh va Buyer Ahmadi'),
(3367, 188, 'Kordestan'),
(3368, 188, 'Lorestan'),
(3369, 188, 'Markazi'),
(3370, 188, 'Markazi'),
(3371, 188, 'Mazandaran'),
(3372, 188, 'Mazandaran'),
(3373, 188, 'Qazvin'),
(3374, 188, 'Qom'),
(3375, 188, 'Semnan'),
(3376, 188, 'Sistan va Baluchestan'),
(3377, 188, 'Tehran'),
(3378, 188, 'Yazd'),
(3379, 188, 'Zanjan'),
(3380, 188, 'Zanjan'),
(3381, 189, 'Butare'),
(3382, 189, 'Byumba'),
(3383, 189, 'Cyangugu'),
(3384, 189, 'Gikongoro'),
(3385, 189, 'Gisenyi'),
(3386, 189, 'Gitarama'),
(3387, 189, 'Kibungo'),
(3388, 189, 'Kibuye'),
(3389, 189, 'Kigali'),
(3390, 189, 'Ruhengeri'),
(3391, 190, 'Alba'),
(3392, 190, 'Arad'),
(3393, 190, 'Arges'),
(3394, 190, 'Bacau'),
(3395, 190, 'Bihor'),
(3396, 190, 'Bistrita-Nasaud'),
(3397, 190, 'Botosani'),
(3398, 190, 'Braila'),
(3399, 190, 'Brasov'),
(3400, 190, 'Bucuresti'),
(3401, 190, 'Buzau'),
(3402, 190, 'Calarasi'),
(3403, 190, 'Caras-Severin'),
(3404, 190, 'Cluj'),
(3405, 190, 'Constanta'),
(3406, 190, 'Covasna'),
(3407, 190, 'Dambovita'),
(3408, 190, 'Dolj'),
(3409, 190, 'Galati'),
(3410, 190, 'Giurgiu'),
(3411, 190, 'Gorj'),
(3412, 190, 'Harghita'),
(3413, 190, 'Hunedoara'),
(3414, 190, 'Ialomita'),
(3415, 190, 'Iasi'),
(3416, 190, 'Ilfov'),
(3417, 190, 'Maramures'),
(3418, 190, 'Mehedinti'),
(3419, 190, 'Mures'),
(3420, 190, 'Neamt'),
(3421, 190, 'Olt'),
(3422, 190, 'Prahova'),
(3423, 190, 'Salaj'),
(3424, 190, 'Satu Mare'),
(3425, 190, 'Sibiu'),
(3426, 190, 'Suceava'),
(3427, 190, 'Teleorman'),
(3428, 190, 'Timis'),
(3429, 190, 'Tulcea'),
(3430, 190, 'Valcea'),
(3431, 190, 'Vaslui'),
(3432, 190, 'Vrancea'),
(3433, 191, 'Adygeya, Republic of'),
(3434, 191, 'Aginsky Buryatsky AO'),
(3435, 191, 'Altaisky krai'),
(3436, 191, 'Amur'),
(3437, 191, 'Arkhangel sk'),
(3438, 191, 'Astrakhan'),
(3439, 191, 'Bashkortostan'),
(3440, 191, 'Belgorod'),
(3441, 191, 'Bryansk'),
(3442, 191, 'Buryat'),
(3443, 191, 'Chechnya'),
(3444, 191, 'Chechnya Republic'),
(3445, 191, 'Chelyabinsk'),
(3446, 191, 'Chita'),
(3447, 191, 'Chukot'),
(3448, 191, 'Chuvashia'),
(3449, 191, 'Dagestan'),
(3450, 191, 'Evenk'),
(3451, 191, 'Gorno-Altay'),
(3452, 191, 'Ingush'),
(3453, 191, 'Irkutsk'),
(3454, 191, 'Ivanovo'),
(3455, 191, 'JA'),
(3456, 191, 'Kabardin-Balkar'),
(3457, 191, 'Kaliningrad'),
(3458, 191, 'Kalmyk'),
(3459, 191, 'Kaluga'),
(3460, 191, 'Kamchatka'),
(3461, 191, 'Karachay-Cherkess'),
(3462, 191, 'Karelia'),
(3463, 191, 'Kemerovo'),
(3464, 191, 'Khabarovsk'),
(3465, 191, 'Khakass'),
(3466, 191, 'Khanty-Mansiy'),
(3467, 191, 'Kirov'),
(3468, 191, 'Komi'),
(3469, 191, 'Komi-Permyak'),
(3470, 191, 'Koryak'),
(3471, 191, 'Kostroma'),
(3472, 191, 'Krasnodar'),
(3473, 191, 'Krasnoyarsk'),
(3474, 191, 'Kurgan'),
(3475, 191, 'Kursk'),
(3476, 191, 'Leningrad'),
(3477, 191, 'Lipetsk'),
(3478, 191, 'Magadan'),
(3479, 191, 'Mariy-El'),
(3480, 191, 'Mordovia'),
(3481, 191, 'Moscow City'),
(3482, 191, 'Moskva'),
(3483, 191, 'Murmansk'),
(3484, 191, 'Nenets'),
(3485, 191, 'Nizhegorod'),
(3486, 191, 'North Ossetia'),
(3487, 191, 'Novgorod'),
(3488, 191, 'Novosibirsk'),
(3489, 191, 'Omsk'),
(3490, 191, 'Orel'),
(3491, 191, 'Orenburg'),
(3492, 191, 'Penza'),
(3493, 191, 'Perm'),
(3494, 191, 'Primor ye'),
(3495, 191, 'Pskov'),
(3496, 191, 'Rostov'),
(3497, 191, 'Ryazan'),
(3498, 191, 'Saint Petersburg City'),
(3499, 191, 'Sakha'),
(3500, 191, 'Sakhalin'),
(3501, 191, 'Samara'),
(3502, 191, 'Saratov'),
(3503, 191, 'Smolensk'),
(3504, 191, 'Stavropol'),
(3505, 191, 'Sverdlovsk'),
(3506, 191, 'Tambovskaya oblast'),
(3507, 191, 'Tatarstan'),
(3508, 191, 'Taymyr'),
(3509, 191, 'Tomsk'),
(3510, 191, 'Tula'),
(3511, 191, 'Tuva'),
(3512, 191, 'Tver'),
(3513, 191, 'Tyumen'),
(3514, 191, 'Udmurt'),
(3515, 191, 'Ul yanovsk'),
(3516, 191, 'Ust-Orda Buryat'),
(3517, 191, 'Vladimir'),
(3518, 191, 'Volgograd'),
(3519, 191, 'Vologda'),
(3520, 191, 'Voronezh'),
(3521, 191, 'Yamal-Nenets'),
(3522, 191, 'Yaroslavl'),
(3523, 191, 'Yevrey'),
(3524, 192, 'Christ Church Nichola Town'),
(3525, 192, 'Saint Anne Sandy Point'),
(3526, 192, 'Saint George Basseterre'),
(3527, 192, 'Saint George Gingerland'),
(3528, 192, 'Saint James Windward'),
(3529, 192, 'Saint John Capisterre'),
(3530, 192, 'Saint John Figtree'),
(3531, 192, 'Saint Mary Cayon'),
(3532, 192, 'Saint Paul Capisterre'),
(3533, 192, 'Saint Paul Charlestown'),
(3534, 192, 'Saint Peter Basseterre'),
(3535, 192, 'Saint Thomas Lowland'),
(3536, 192, 'Saint Thomas Middle Island'),
(3537, 192, 'Trinity Palmetto Point'),
(3538, 193, 'Saint-Pierre et Miquelon Collectivité Territoriale'),
(3539, 194, 'Aiga-i-le-Tai'),
(3540, 194, 'Atua'),
(3541, 194, 'Fa'),
(3542, 194, 'Gaga'),
(3543, 194, 'Gagaifomauga'),
(3544, 194, 'Palauli'),
(3545, 194, 'Satupa'),
(3546, 194, 'Tuamasaga'),
(3547, 194, 'Va'),
(3548, 194, 'Vaisigano'),
(3549, 195, 'Acquaviva'),
(3550, 195, 'Borgo Maggiore'),
(3551, 195, 'Chiesanuova'),
(3552, 195, 'Domagnano'),
(3553, 195, 'Faetano'),
(3554, 195, 'Fiorentino'),
(3555, 195, 'Monte Giardino'),
(3556, 195, 'San Marino'),
(3557, 195, 'Serravalle'),
(3558, 196, 'Charlotte'),
(3559, 196, 'Grenadines'),
(3560, 196, 'Saint Andrew'),
(3561, 196, 'Saint David'),
(3562, 196, 'Saint George'),
(3563, 196, 'Saint Patrick'),
(3564, 197, 'Ascension'),
(3565, 197, 'Saint Helena'),
(3566, 197, 'Tristan da Cunha'),
(3567, 198, 'Anse-la-Raye'),
(3568, 198, 'Castries'),
(3569, 198, 'Choiseul'),
(3570, 198, 'Dauphin'),
(3571, 198, 'Dennery'),
(3572, 198, 'Gros-Islet'),
(3573, 198, 'Laborie'),
(3574, 198, 'Micoud'),
(3575, 198, 'Praslin'),
(3576, 198, 'Soufriere'),
(3577, 198, 'Vieux-Fort'),
(3578, 199, 'Principe'),
(3579, 199, 'Sao Tome'),
(3580, 200, 'Dakar'),
(3581, 200, 'Diourbel'),
(3582, 200, 'Fatick'),
(3583, 200, 'Kaolack'),
(3584, 200, 'Kolda'),
(3585, 200, 'Louga'),
(3586, 200, 'Saint-Louis'),
(3587, 200, 'Saint-Louis Region'),
(3588, 200, 'Tambacounda'),
(3589, 200, 'Thies'),
(3590, 200, 'Ziguinchor'),
(3591, 201, 'Kosovo'),
(3592, 201, 'Vojvodina'),
(3593, 202, 'Anse Boileau'),
(3594, 202, 'Anse Etoile'),
(3595, 202, 'Anse Louis'),
(3596, 202, 'Anse Royale'),
(3597, 202, 'Anse aux Pins'),
(3598, 202, 'Baie Lazare'),
(3599, 202, 'Baie Sainte Anne'),
(3600, 202, 'Beau Vallon'),
(3601, 202, 'Bel Air'),
(3602, 202, 'Bel Ombre'),
(3603, 202, 'Cascade'),
(3604, 202, 'Glacis'),
(3605, 202, 'Grand Anse'),
(3606, 202, 'Grand Anse'),
(3607, 202, 'La Digue'),
(3608, 202, 'La Riviere Anglaise'),
(3609, 202, 'Mont Buxton'),
(3610, 202, 'Mont Fleuri'),
(3611, 202, 'Plaisance'),
(3612, 202, 'Pointe La Rue'),
(3613, 202, 'Port Glaud'),
(3614, 202, 'Saint Louis'),
(3615, 202, 'Takamaka'),
(3616, 203, 'Eastern'),
(3617, 203, 'Northern'),
(3618, 203, 'Southern'),
(3619, 203, 'Western Area'),
(3620, 204, 'Singapore (General)'),
(3621, 205, 'Al Hasakah'),
(3622, 205, 'Al Ladhiqiyah'),
(3623, 205, 'Al Qunaytirah'),
(3624, 205, 'Ar Raqqah'),
(3625, 205, 'As Suwayda'),
(3626, 205, 'Dar'),
(3627, 205, 'Dayr az Zawr'),
(3628, 205, 'Dimashq'),
(3629, 205, 'Halab'),
(3630, 205, 'Hamah'),
(3631, 205, 'Hims'),
(3632, 205, 'Idlib'),
(3633, 205, 'Rif Dimashq'),
(3634, 205, 'Tartus'),
(3635, 206, 'Bakool'),
(3636, 206, 'Banaadir'),
(3637, 206, 'Bari'),
(3638, 206, 'Bay'),
(3639, 206, 'Galguduud'),
(3640, 206, 'Gedo'),
(3641, 206, 'Hiiraan'),
(3642, 206, 'Jubbada Dhexe'),
(3643, 206, 'Jubbada Hoose'),
(3644, 206, 'Mudug'),
(3645, 206, 'Nugaal'),
(3646, 206, 'Sanaag'),
(3647, 206, 'Shabeellaha Dhexe'),
(3648, 206, 'Shabeellaha Hoose'),
(3649, 206, 'Togdheer'),
(3650, 206, 'Woqooyi Galbeed'),
(3651, 207, 'Amparai'),
(3652, 207, 'Anuradhapura'),
(3653, 207, 'Badulla'),
(3654, 207, 'Batticaloa'),
(3655, 207, 'Central Province'),
(3656, 207, 'Colombo'),
(3657, 207, 'Galle'),
(3658, 207, 'Gampaha'),
(3659, 207, 'Hambantota'),
(3660, 207, 'Jaffna'),
(3661, 207, 'Kalutara'),
(3662, 207, 'Kandy'),
(3663, 207, 'Kegalla'),
(3664, 207, 'Kurunegala'),
(3665, 207, 'Mannar'),
(3666, 207, 'Matale'),
(3667, 207, 'Matara'),
(3668, 207, 'Moneragala'),
(3669, 207, 'Mullaittivu'),
(3670, 207, 'North Central Province'),
(3671, 207, 'North Eastern Province'),
(3672, 207, 'North Western Province'),
(3673, 207, 'Nuwara Eliya'),
(3674, 207, 'Polonnaruwa'),
(3675, 207, 'Puttalam'),
(3676, 207, 'Ratnapura'),
(3677, 207, 'Sabaragamuwa Province'),
(3678, 207, 'Southern Province'),
(3679, 207, 'Trincomalee'),
(3680, 207, 'Uva Province'),
(3681, 207, 'Vavuniya'),
(3682, 207, 'Western Province'),
(3683, 208, 'Hhohho'),
(3684, 208, 'Lubombo'),
(3685, 208, 'Manzini'),
(3686, 208, 'Praslin'),
(3687, 208, 'Shiselweni'),
(3688, 209, 'Eastern Cape'),
(3689, 209, 'Free State'),
(3690, 209, 'Gauteng'),
(3691, 209, 'KwaZulu-Natal'),
(3692, 209, 'Limpopo'),
(3693, 209, 'Mpumalanga'),
(3694, 209, 'North-West'),
(3695, 209, 'Northern Cape'),
(3696, 209, 'Western Cape'),
(3697, 210, 'Al Istiwaiyah'),
(3698, 210, 'Al Khartum'),
(3699, 210, 'Al Wusta'),
(3700, 210, 'Ash Shamaliyah'),
(3701, 210, 'Ash Sharqiyah'),
(3702, 210, 'Bahr al Ghazal'),
(3703, 210, 'Darfur'),
(3704, 210, 'Kurdufan'),
(3705, 211, 'Alvsborgs Lan'),
(3706, 211, 'Blekinge Lan'),
(3707, 211, 'Dalarnas Lan'),
(3708, 211, 'Gavleborgs Lan'),
(3709, 211, 'Goteborgs och Bohus Lan'),
(3710, 211, 'Gotlands Lan'),
(3711, 211, 'Hallands Lan'),
(3712, 211, 'Jamtlands Lan'),
(3713, 211, 'Jonkopings Lan'),
(3714, 211, 'Kalmar Lan'),
(3715, 211, 'Kristianstads Lan'),
(3716, 211, 'Kronobergs Lan'),
(3717, 211, 'Malmohus Lan'),
(3718, 211, 'Norrbottens Lan'),
(3719, 211, 'Orebro Lan'),
(3720, 211, 'Ostergotlands Lan'),
(3721, 211, 'Skane Lan'),
(3722, 211, 'Skaraborgs Lan'),
(3723, 211, 'Sodermanlands Lan'),
(3724, 211, 'Stockholms Lan'),
(3725, 211, 'Uppsala Lan'),
(3726, 211, 'Varmlands Lan'),
(3727, 211, 'Vasterbottens Lan'),
(3728, 211, 'Vasternorrlands Lan'),
(3729, 211, 'Vastmanlands Lan'),
(3730, 211, 'Vastra Gotaland'),
(3731, 212, 'Aargau'),
(3732, 212, 'Ausser-Rhoden'),
(3733, 212, 'Basel-Landschaft'),
(3734, 212, 'Basel-Stadt'),
(3735, 212, 'Bern'),
(3736, 212, 'Fribourg'),
(3737, 212, 'Geneve'),
(3738, 212, 'Glarus'),
(3739, 212, 'Graubunden'),
(3740, 212, 'Inner-Rhoden'),
(3741, 212, 'Jura'),
(3742, 212, 'Luzern'),
(3743, 212, 'Neuchatel'),
(3744, 212, 'Nidwalden'),
(3745, 212, 'Obwalden'),
(3746, 212, 'Sankt Gallen'),
(3747, 212, 'Schaffhausen'),
(3748, 212, 'Schwyz'),
(3749, 212, 'Solothurn'),
(3750, 212, 'Thurgau'),
(3751, 212, 'Ticino'),
(3752, 212, 'Uri'),
(3753, 212, 'Valais'),
(3754, 212, 'Vaud'),
(3755, 212, 'Zug'),
(3756, 212, 'Zurich'),
(3757, 213, 'Brokopondo'),
(3758, 213, 'Commewijne'),
(3759, 213, 'Coronie'),
(3760, 213, 'Marowijne'),
(3761, 213, 'Nickerie'),
(3762, 213, 'Para'),
(3763, 213, 'Paramaribo'),
(3764, 213, 'Saramacca'),
(3765, 213, 'Sipaliwini'),
(3766, 213, 'Wanica'),
(3767, 214, 'Svalbard and Jan Mayen (General)'),
(3768, 215, 'Ang Thong'),
(3769, 215, 'Buriram'),
(3770, 215, 'Chachoengsao'),
(3771, 215, 'Chai Nat'),
(3772, 215, 'Chaiyaphum'),
(3773, 215, 'Chanthaburi'),
(3774, 215, 'Chiang Mai'),
(3775, 215, 'Chiang Rai'),
(3776, 215, 'Chon Buri'),
(3777, 215, 'Chumphon'),
(3778, 215, 'Kalasin'),
(3779, 215, 'Kamphaeng Phet'),
(3780, 215, 'Kanchanaburi'),
(3781, 215, 'Khon Kaen'),
(3782, 215, 'Krabi'),
(3783, 215, 'Krung Thep'),
(3784, 215, 'Lampang'),
(3785, 215, 'Lamphun'),
(3786, 215, 'Loei'),
(3787, 215, 'Lop Buri'),
(3788, 215, 'Mae Hong Son'),
(3789, 215, 'Maha Sarakham'),
(3790, 215, 'Mukdahan'),
(3791, 215, 'Nakhon Nayok'),
(3792, 215, 'Nakhon Pathom'),
(3793, 215, 'Nakhon Phanom'),
(3794, 215, 'Nakhon Ratchasima'),
(3795, 215, 'Nakhon Sawan'),
(3796, 215, 'Nakhon Si Thammarat'),
(3797, 215, 'Nan'),
(3798, 215, 'Narathiwat'),
(3799, 215, 'Nong Khai'),
(3800, 215, 'Nonthaburi'),
(3801, 215, 'Pathum Thani'),
(3802, 215, 'Pattani'),
(3803, 215, 'Phangnga'),
(3804, 215, 'Phatthalung'),
(3805, 215, 'Phayao'),
(3806, 215, 'Phetchabun'),
(3807, 215, 'Phetchaburi'),
(3808, 215, 'Phichit'),
(3809, 215, 'Phitsanulok'),
(3810, 215, 'Phra Nakhon Si Ayutthaya'),
(3811, 215, 'Phrae'),
(3812, 215, 'Phuket'),
(3813, 215, 'Prachin Buri'),
(3814, 215, 'Prachuap Khiri Khan'),
(3815, 215, 'Ranong'),
(3816, 215, 'Ratchaburi'),
(3817, 215, 'Rayong'),
(3818, 215, 'Roi Et'),
(3819, 215, 'Sakon Nakhon'),
(3820, 215, 'Samut Prakan'),
(3821, 215, 'Samut Sakhon'),
(3822, 215, 'Samut Songkhram'),
(3823, 215, 'Saraburi'),
(3824, 215, 'Satun'),
(3825, 215, 'Sing Buri'),
(3826, 215, 'Sisaket'),
(3827, 215, 'Songkhla'),
(3828, 215, 'Sukhothai'),
(3829, 215, 'Suphan Buri'),
(3830, 215, 'Surat Thani'),
(3831, 215, 'Surin'),
(3832, 215, 'Tak'),
(3833, 215, 'Trang'),
(3834, 215, 'Trat'),
(3835, 215, 'Ubon Ratchathani'),
(3836, 215, 'Ubon Ratchathani Province'),
(3837, 215, 'Udon Thani'),
(3838, 215, 'Uthai Thani'),
(3839, 215, 'Uttaradit'),
(3840, 215, 'Yala'),
(3841, 215, 'Yasothon'),
(3842, 216, 'Fu-chien'),
(3843, 216, 'Kao-hsiung'),
(3844, 216, 'T ai-pei'),
(3845, 216, 'T ai-wan'),
(3846, 217, 'Khatlon'),
(3847, 217, 'Kuhistoni Badakhshon'),
(3848, 217, 'Sughd'),
(3849, 218, 'Arusha'),
(3850, 218, 'Arusha Region'),
(3851, 218, 'Dar es Salaam'),
(3852, 218, 'Dodoma'),
(3853, 218, 'Iringa'),
(3854, 218, 'Kagera'),
(3855, 218, 'Kigoma'),
(3856, 218, 'Kilimanjaro'),
(3857, 218, 'Lindi'),
(3858, 218, 'Mara'),
(3859, 218, 'Mbeya'),
(3860, 218, 'Morogoro'),
(3861, 218, 'Mtwara'),
(3862, 218, 'Mwanza'),
(3863, 218, 'Pemba North'),
(3864, 218, 'Pemba South'),
(3865, 218, 'Pwani'),
(3866, 218, 'Rukwa'),
(3867, 218, 'Ruvuma'),
(3868, 218, 'Shinyanga'),
(3869, 218, 'Singida'),
(3870, 218, 'Tabora'),
(3871, 218, 'Tanga'),
(3872, 218, 'Zanzibar Central'),
(3873, 218, 'Zanzibar North'),
(3874, 218, 'Zanzibar Urban'),
(3875, 219, 'Amlame'),
(3876, 219, 'Aneho'),
(3877, 219, 'Atakpame'),
(3878, 219, 'Badou'),
(3879, 219, 'Bafilo'),
(3880, 219, 'Bassar'),
(3881, 219, 'Dapaong'),
(3882, 219, 'Kante'),
(3883, 219, 'Klouto'),
(3884, 219, 'Kpagouda'),
(3885, 219, 'Lama-Kara'),
(3886, 219, 'Lome'),
(3887, 219, 'Mango'),
(3888, 219, 'Maritime Region'),
(3889, 219, 'Niamtougou'),
(3890, 219, 'Notse'),
(3891, 219, 'Sotouboua'),
(3892, 219, 'Tabligbo'),
(3893, 219, 'Tchamba'),
(3894, 219, 'Tchaoudjo'),
(3895, 219, 'Tsevie'),
(3896, 219, 'Vogan'),
(3897, 220, 'Ha'),
(3898, 220, 'Tongatapu'),
(3899, 220, 'Vava'),
(3900, 221, 'Tokelau (General)'),
(3901, 222, 'Arima'),
(3902, 222, 'Caroni'),
(3903, 222, 'Mayaro'),
(3904, 222, 'Nariva'),
(3905, 222, 'Port-of-Spain'),
(3906, 222, 'Saint Andrew'),
(3907, 222, 'Saint David'),
(3908, 222, 'Saint George'),
(3909, 222, 'Saint Patrick'),
(3910, 222, 'San Fernando'),
(3911, 222, 'Tobago'),
(3912, 222, 'Victoria'),
(3913, 223, 'Ahal'),
(3914, 223, 'Balkan'),
(3915, 223, 'Dashoguz'),
(3916, 223, 'Lebap'),
(3917, 223, 'Mary'),
(3918, 224, 'Adana'),
(3919, 224, 'Adiyaman'),
(3920, 224, 'Afyon'),
(3921, 224, 'Agri'),
(3922, 224, 'Aksaray'),
(3923, 224, 'Amasya'),
(3924, 224, 'Ankara'),
(3925, 224, 'Antalya'),
(3926, 224, 'Ardahan'),
(3927, 224, 'Artvin'),
(3928, 224, 'Aydin'),
(3929, 224, 'Balikesir'),
(3930, 224, 'Bartin'),
(3931, 224, 'Batman'),
(3932, 224, 'Bayburt'),
(3933, 224, 'Bilecik'),
(3934, 224, 'Bingol'),
(3935, 224, 'Bitlis'),
(3936, 224, 'Bolu'),
(3937, 224, 'Burdur'),
(3938, 224, 'Bursa'),
(3939, 224, 'Canakkale'),
(3940, 224, 'Cankiri'),
(3941, 224, 'Corum'),
(3942, 224, 'Denizli'),
(3943, 224, 'Diyarbakir'),
(3944, 224, 'Duzce'),
(3945, 224, 'Edirne'),
(3946, 224, 'Elazig'),
(3947, 224, 'Erzincan'),
(3948, 224, 'Erzurum'),
(3949, 224, 'Eskisehir'),
(3950, 224, 'Gaziantep'),
(3951, 224, 'Giresun'),
(3952, 224, 'Gumushane'),
(3953, 224, 'Hakkari'),
(3954, 224, 'Hatay'),
(3955, 224, 'Icel'),
(3956, 224, 'Igdir'),
(3957, 224, 'Isparta'),
(3958, 224, 'Istanbul'),
(3959, 224, 'Izmir'),
(3960, 224, 'Kahramanmaras'),
(3961, 224, 'Karabuk'),
(3962, 224, 'Karaman'),
(3963, 224, 'Kars'),
(3964, 224, 'Kastamonu'),
(3965, 224, 'Kayseri'),
(3966, 224, 'Kilis'),
(3967, 224, 'Kirikkale'),
(3968, 224, 'Kirklareli'),
(3969, 224, 'Kirsehir'),
(3970, 224, 'Kocaeli'),
(3971, 224, 'Konya'),
(3972, 224, 'Kutahya'),
(3973, 224, 'Malatya'),
(3974, 224, 'Manisa'),
(3975, 224, 'Mardin'),
(3976, 224, 'Mugla'),
(3977, 224, 'Mus'),
(3978, 224, 'Nevsehir'),
(3979, 224, 'Nigde'),
(3980, 224, 'Ordu'),
(3981, 224, 'Osmaniye'),
(3982, 224, 'Rize'),
(3983, 224, 'Sakarya'),
(3984, 224, 'Samsun'),
(3985, 224, 'Sanliurfa'),
(3986, 224, 'Siirt'),
(3987, 224, 'Sinop'),
(3988, 224, 'Sirnak'),
(3989, 224, 'Sivas'),
(3990, 224, 'Tekirdag'),
(3991, 224, 'Tokat'),
(3992, 224, 'Trabzon'),
(3993, 224, 'Tunceli'),
(3994, 224, 'Usak'),
(3995, 224, 'Van'),
(3996, 224, 'Yalova'),
(3997, 224, 'Yozgat'),
(3998, 224, 'Zonguldak'),
(3999, 225, 'Tuvalu (General)'),
(4000, 226, 'Al Mahdiyah'),
(4001, 226, 'Al Munastir'),
(4002, 226, 'Al Qasrayn'),
(4003, 226, 'Al Qayrawan'),
(4004, 226, 'Ariana'),
(4005, 226, 'Ariana Governorate'),
(4006, 226, 'Bajah'),
(4007, 226, 'Banzart'),
(4008, 226, 'Bin'),
(4009, 226, 'Jundubah'),
(4010, 226, 'Kef'),
(4011, 226, 'Madanin'),
(4012, 226, 'Manouba'),
(4013, 226, 'Nabul'),
(4014, 226, 'Qabis'),
(4015, 226, 'Qafsah'),
(4016, 226, 'Qibili'),
(4017, 226, 'Safaqis'),
(4018, 226, 'Sidi Bu Zayd'),
(4019, 226, 'Silyanah'),
(4020, 226, 'Susah'),
(4021, 226, 'Tatawin'),
(4022, 226, 'Tawzar'),
(4023, 226, 'Tunis'),
(4024, 226, 'Zaghwan'),
(4025, 227, 'Cherkas ka Oblast'),
(4026, 227, 'Chernihivska Oblast'),
(4027, 227, 'Chernivets ka Oblast'),
(4028, 227, 'Dnipropetrovs ka Oblast'),
(4029, 227, 'Donets ka Oblast'),
(4030, 227, 'Ivano-Frankivs ka Oblast'),
(4031, 227, 'Kharkivs ka Oblast'),
(4032, 227, 'Khersons ka Oblast'),
(4033, 227, 'Khmel nyts ka Oblast'),
(4034, 227, 'Kirovohrads ka Oblast'),
(4035, 227, 'Krym'),
(4036, 227, 'Kyyiv'),
(4037, 227, 'Kyyivs ka Oblast'),
(4038, 227, 'L vivs ka Oblast'),
(4039, 227, 'Luhans ka Oblast'),
(4040, 227, 'Mykolayivs ka Oblast'),
(4041, 227, 'Odes ka Oblast'),
(4042, 227, 'Poltavs ka Oblast'),
(4043, 227, 'Rivnens ka Oblast'),
(4044, 227, 'Sevastopol'),
(4045, 227, 'Sums ka Oblast'),
(4046, 227, 'Ternopils ka Oblast'),
(4047, 227, 'Vinnyts ka Oblast'),
(4048, 227, 'Volyns ka Oblast'),
(4049, 227, 'Zakarpats ka Oblast'),
(4050, 227, 'Zaporiz ka Oblast'),
(4051, 227, 'Zhytomyrs ka Oblast'),
(4052, 228, 'Adjumani'),
(4053, 228, 'Arua'),
(4054, 228, 'Bugiri'),
(4055, 228, 'Busia'),
(4056, 228, 'Busoga'),
(4057, 228, 'Central'),
(4058, 228, 'Eastern'),
(4059, 228, 'Iganga'),
(4060, 228, 'Kabarole'),
(4061, 228, 'Kaberamaido'),
(4062, 228, 'Kampala'),
(4063, 228, 'Kamwenge'),
(4064, 228, 'Kanungu'),
(4065, 228, 'Karamoja'),
(4066, 228, 'Katakwi'),
(4067, 228, 'Kayunga'),
(4068, 228, 'Kitgum'),
(4069, 228, 'Kyenjojo'),
(4070, 228, 'Mayuge'),
(4071, 228, 'Mbale'),
(4072, 228, 'Moroto'),
(4073, 228, 'Mpigi'),
(4074, 228, 'Mukono'),
(4075, 228, 'Nakapiripirit'),
(4076, 228, 'Nakasongola'),
(4077, 228, 'Nile'),
(4078, 228, 'North Buganda'),
(4079, 228, 'Northern'),
(4080, 228, 'Pader'),
(4081, 228, 'Rukungiri'),
(4082, 228, 'Sembabule'),
(4083, 228, 'Sironko'),
(4084, 228, 'Soroti'),
(4085, 228, 'South Buganda'),
(4086, 228, 'Southern'),
(4087, 228, 'Wakiso'),
(4088, 228, 'Western'),
(4089, 228, 'Yumbe'),
(4090, 229, 'United States Minor Outlying Islands (General)'),
(4091, 230, 'Artigas'),
(4092, 230, 'Canelones'),
(4093, 230, 'Cerro Largo'),
(4094, 230, 'Colonia'),
(4095, 230, 'Durazno'),
(4096, 230, 'Flores'),
(4097, 230, 'Florida'),
(4098, 230, 'Lavalleja'),
(4099, 230, 'Maldonado'),
(4100, 230, 'Montevideo'),
(4101, 230, 'Paysandu'),
(4102, 230, 'Rio Negro'),
(4103, 230, 'Rivera'),
(4104, 230, 'Rocha'),
(4105, 230, 'Salto'),
(4106, 230, 'San Jose'),
(4107, 230, 'Soriano'),
(4108, 230, 'Tacuarembo'),
(4109, 230, 'Treinta y Tres'),
(4110, 231, 'Andijon'),
(4111, 231, 'Bukhoro'),
(4112, 231, 'Farghona'),
(4113, 231, 'Jizzakh'),
(4114, 231, 'Khorazm'),
(4115, 231, 'Namangan'),
(4116, 231, 'Nawoiy'),
(4117, 231, 'Qashqadaryo'),
(4118, 231, 'Qoraqalpoghiston'),
(4119, 231, 'Samarqand'),
(4120, 231, 'Sirdaryo'),
(4121, 231, 'Sirdaryo Province'),
(4122, 231, 'Surkhondaryo'),
(4123, 231, 'Toshkent'),
(4124, 232, 'Ambrym'),
(4125, 232, 'Aoba'),
(4126, 232, 'Efate'),
(4127, 232, 'Epi'),
(4128, 232, 'Malakula'),
(4129, 232, 'Malampa'),
(4130, 232, 'Paama'),
(4131, 232, 'Penama'),
(4132, 232, 'Pentecote'),
(4133, 232, 'Sanma'),
(4134, 232, 'Shefa'),
(4135, 232, 'Shepherd'),
(4136, 232, 'Tafea'),
(4137, 232, 'Torba'),
(4138, 233, 'Amazonas'),
(4139, 233, 'Anzoategui'),
(4140, 233, 'Apure'),
(4141, 233, 'Aragua'),
(4142, 233, 'Barinas'),
(4143, 233, 'Bolivar'),
(4144, 233, 'Carabobo'),
(4145, 233, 'Cojedes'),
(4146, 233, 'Delta Amacuro'),
(4147, 233, 'Dependencias Federales'),
(4148, 233, 'Distrito Federal'),
(4149, 233, 'Falcon'),
(4150, 233, 'Guarico'),
(4151, 233, 'Lara'),
(4152, 233, 'Merida'),
(4153, 233, 'Miranda'),
(4154, 233, 'Monagas'),
(4155, 233, 'Nueva Esparta'),
(4156, 233, 'Portuguesa'),
(4157, 233, 'Sucre'),
(4158, 233, 'Tachira'),
(4159, 233, 'Trujillo'),
(4160, 233, 'Vargas'),
(4161, 233, 'Yaracuy'),
(4162, 233, 'Zulia'),
(4163, 234, 'An Giang'),
(4164, 234, 'An Giang Province'),
(4165, 234, 'Ba Ria-Vung Tau'),
(4166, 234, 'Bac Thai'),
(4167, 234, 'Ben Tre'),
(4168, 234, 'Binh Dinh'),
(4169, 234, 'Binh Thuan'),
(4170, 234, 'Binh Tri Thien'),
(4171, 234, 'Can Tho'),
(4172, 234, 'Cao Bang'),
(4173, 234, 'Cuu Long'),
(4174, 234, 'Dac Lac'),
(4175, 234, 'Dac Lak Province'),
(4176, 234, 'Dong Nai'),
(4177, 234, 'Dong Nai'),
(4178, 234, 'Dong Thap'),
(4179, 234, 'Gia Lai'),
(4180, 234, 'Gia Lai-Kon Tum'),
(4181, 234, 'Ha Bac'),
(4182, 234, 'Ha Giang'),
(4183, 234, 'Ha Nam Ninh'),
(4184, 234, 'Ha Noi'),
(4185, 234, 'Ha Son Binh'),
(4186, 234, 'Ha Tay'),
(4187, 234, 'Ha Tinh'),
(4188, 234, 'Ha Tuyen'),
(4189, 234, 'Hai Hung'),
(4190, 234, 'Hai Phong'),
(4191, 234, 'Hanoi'),
(4192, 234, 'Hau Giang'),
(4193, 234, 'Ho Chi Minh'),
(4194, 234, 'Hoa Binh'),
(4195, 234, 'Hung Yên Province'),
(4196, 234, 'Hà Nam Province'),
(4197, 234, 'H?i Duong Province'),
(4198, 234, 'H? Chí Minh Municipality'),
(4199, 234, 'Khanh Hoa'),
(4200, 234, 'Kien Giang'),
(4201, 234, 'Ki?n Giang Province'),
(4202, 234, 'Kon Tum'),
(4203, 234, 'Lai Chau'),
(4204, 234, 'Lam Dong'),
(4205, 234, 'Lang Son'),
(4206, 234, 'Lao Cai'),
(4207, 234, 'Long An'),
(4208, 234, 'Minh Hai'),
(4209, 234, 'Minh H?i T?nh'),
(4210, 234, 'Nam Ha'),
(4211, 234, 'Nghe An'),
(4212, 234, 'Nghe Tinh'),
(4213, 234, 'Nghia Binh'),
(4214, 234, 'Ninh Binh'),
(4215, 234, 'Ninh Thuan'),
(4216, 234, 'Phu Khanh'),
(4217, 234, 'Phu Yen'),
(4218, 234, 'Quang Binh'),
(4219, 234, 'Quang Nam-Da Nang'),
(4220, 234, 'Quang Ngai'),
(4221, 234, 'Quang Ninh'),
(4222, 234, 'Quang Tri'),
(4223, 234, 'Qu?ng Nam Province'),
(4224, 234, 'Soc Trang'),
(4225, 234, 'Son La'),
(4226, 234, 'Song Be'),
(4227, 234, 'Tay Ninh'),
(4228, 234, 'Thai Binh'),
(4229, 234, 'Thanh Hoa'),
(4230, 234, 'Thua Thien'),
(4231, 234, 'Thái Nguyên Province');
INSERT INTO `list_states` (`state_id`, `country_id`, `name`) VALUES
(4232, 234, 'Tien Giang'),
(4233, 234, 'Tra Vinh'),
(4234, 234, 'Tuyen Quang'),
(4235, 234, 'Vinh Long'),
(4236, 234, 'Vinh Phu'),
(4237, 234, 'Vinh Phú T?nh'),
(4238, 234, 'Yen Bai'),
(4239, 234, 'Ð?ng Tháp Province'),
(4240, 235, 'Virgin Islands, British (General)'),
(4241, 236, 'Virgin Islands, U.S. (General)'),
(4242, 237, 'Western Sahara (General)'),
(4243, 238, 'Abyan'),
(4244, 238, 'Adan'),
(4245, 238, 'Adan Governorate'),
(4246, 238, 'Al Bayda'),
(4247, 238, 'Al Hudaydah'),
(4248, 238, 'Al Jawf'),
(4249, 238, 'Al Mahrah'),
(4250, 238, 'Al Mahwit'),
(4251, 238, 'Dhamar'),
(4252, 238, 'Hadramawt'),
(4253, 238, 'Hajjah'),
(4254, 238, 'Ibb'),
(4255, 238, 'Lahij'),
(4256, 238, 'Ma rib'),
(4257, 238, 'Sa'),
(4258, 238, 'San'),
(4259, 238, 'Shabwah'),
(4260, 238, 'Ta'),
(4261, 238, 'Taizz Governorate'),
(4262, 239, 'Bandundu'),
(4263, 239, 'Bas-Congo'),
(4264, 239, 'Equateur'),
(4265, 239, 'Kasai-Occidental'),
(4266, 239, 'Kasai-Oriental'),
(4267, 239, 'Katanga'),
(4268, 239, 'Kinshasa'),
(4269, 239, 'Kivu'),
(4270, 239, 'Maniema'),
(4271, 239, 'Nord-Kivu'),
(4272, 239, 'Orientale'),
(4273, 239, 'Sud-Kivu'),
(4274, 240, 'Central'),
(4275, 240, 'Copperbelt'),
(4276, 240, 'Eastern'),
(4277, 240, 'Luapula'),
(4278, 240, 'Lusaka'),
(4279, 240, 'North-Western'),
(4280, 240, 'Northern'),
(4281, 240, 'Southern'),
(4282, 240, 'Western'),
(4283, 241, 'Bulawayo'),
(4284, 241, 'Harare'),
(4285, 241, 'Manicaland'),
(4286, 241, 'Mashonaland Central'),
(4287, 241, 'Mashonaland East'),
(4288, 241, 'Mashonaland West'),
(4289, 241, 'Masvingo'),
(4290, 241, 'Matabeleland North'),
(4291, 241, 'Matabeleland South'),
(4292, 241, 'Midlands');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_tipodisc`
--

CREATE TABLE IF NOT EXISTS `list_tipodisc` (
  `tipodisc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`tipodisc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_tipodisc`
--

INSERT INTO `list_tipodisc` (`tipodisc_id`, `name`) VALUES
(1, 'Motora'),
(2, 'Auditiva'),
(3, 'Visual'),
(4, 'Mental'),
(5, 'Viscera');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_tipodoc`
--

CREATE TABLE IF NOT EXISTS `list_tipodoc` (
  `tipodoc_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`tipodoc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_tipodoc`
--

INSERT INTO `list_tipodoc` (`tipodoc_id`, `name`) VALUES
(1, 'DNI'),
(2, 'Libreta de enrolamiento'),
(3, 'Libreta cívica'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_tiro_categoria`
--

CREATE TABLE IF NOT EXISTS `list_tiro_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `list_tiro_categoria`
--

INSERT INTO `list_tiro_categoria` (`categoria_id`, `name`) VALUES
(1, 'Infantiles'),
(2, 'Cadetes'),
(3, 'Juveniles'),
(4, 'Junior'),
(5, 'Senior'),
(6, 'Veteranos'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_tiro_modalidad`
--

CREATE TABLE IF NOT EXISTS `list_tiro_modalidad` (
  `especialidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `modalidad` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`especialidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Volcar la base de datos para la tabla `list_tiro_modalidad`
--

INSERT INTO `list_tiro_modalidad` (`especialidad_id`, `modalidad`, `name`) VALUES
(1, 1, '300 m. Rifle 3 Posiciones,'),
(2, 1, '300 m. Rifle Tendido'),
(3, 1, '300 m. Rifle Standard'),
(4, 1, '50 m. Rifle 3 Posiciones'),
(5, 1, '50 m. Rifle Tendido'),
(6, 1, '10 m. Rifle Aire'),
(7, 2, '50 m. Pistola'),
(8, 2, '25 m. Tiro Rápido'),
(9, 2, '25 m. Fuego Central'),
(10, 2, '25 m. Pistola Standard'),
(11, 2, '10 m. Pistola Aire'),
(12, 3, 'Trap'),
(13, 3, 'Trap Automático'),
(14, 3, 'Doble Trap, Skeet'),
(15, 4, '50 m. Blanco Móvil'),
(16, 4, '50 m. Blanco Móvil Mixto,'),
(17, 4, '10 m. Blanco Móvil'),
(18, 4, '10 m. Blanco Móvil Mixto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_velocidad`
--

CREATE TABLE IF NOT EXISTS `list_velocidad` (
  `velocidad_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`velocidad_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Volcar la base de datos para la tabla `list_velocidad`
--

INSERT INTO `list_velocidad` (`velocidad_id`, `name`) VALUES
(1, '12 Mts.'),
(2, '30 Mts. (Partida Detenida)'),
(3, '30 Mts. (Partida Lanzada)'),
(4, '40 Mts.'),
(5, '50 Mts.'),
(6, '60 Mts. (Partida Detenida)'),
(7, '60 Mts. (Partida Lanzada)'),
(8, '90 Mts. (Partida Detenida)'),
(9, '100 Mts. Llanos'),
(10, '110 Mts Vallas'),
(11, '200 Mts. Llanos'),
(12, '300 Mts. Llanos'),
(13, 'Relevo 4 x 100'),
(14, 'Test de Letwin'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_voleyplaya_categoria`
--

CREATE TABLE IF NOT EXISTS `list_voleyplaya_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `list_voleyplaya_categoria`
--

INSERT INTO `list_voleyplaya_categoria` (`categoria_id`, `name`) VALUES
(1, 'Mini-Volley'),
(2, 'Sub-14'),
(3, 'Sub-16'),
(4, 'Sub-18'),
(5, 'Sub-21'),
(6, 'Primera División'),
(-1, 'Otra');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_voley_categoria`
--

CREATE TABLE IF NOT EXISTS `list_voley_categoria` (
  `categoria_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`categoria_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `list_voley_categoria`
--

INSERT INTO `list_voley_categoria` (`categoria_id`, `name`) VALUES
(1, 'Mini-Volley'),
(2, 'Sub-14'),
(3, 'Sub-16'),
(4, 'Sub-18'),
(5, 'Sub-21'),
(6, 'Primera División'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_voley_posicion`
--

CREATE TABLE IF NOT EXISTS `list_voley_posicion` (
  `posicion_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`posicion_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `list_voley_posicion`
--

INSERT INTO `list_voley_posicion` (`posicion_id`, `name`) VALUES
(1, 'Delantero'),
(2, 'Armador'),
(3, 'Líbero'),
(4, 'Central'),
(5, 'Opuesto');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `list_works`
--

CREATE TABLE IF NOT EXISTS `list_works` (
  `works_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  PRIMARY KEY (`works_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Volcar la base de datos para la tabla `list_works`
--

INSERT INTO `list_works` (`works_id`, `name`) VALUES
(1, 'Independiente'),
(2, 'Club o Institución'),
(3, 'Grupo Empresario'),
(-1, 'Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil`
--

CREATE TABLE IF NOT EXISTS `perfil` (
  `perfil_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `sports_id` int(11) NOT NULL,
  `perfil_deporte_id` int(11) NOT NULL,
  `objetivo_profesional` varchar(255) NOT NULL,
  `ranking_nacional` int(11) NOT NULL,
  `ranking_mundial` int(11) NOT NULL,
  `ranking_otro` varchar(255) NOT NULL,
  `manager` int(11) NOT NULL,
  `manager_other` varchar(255) NOT NULL,
  `pase_options` int(11) NOT NULL,
  `pase` varchar(255) NOT NULL,
  `pase_option_other` varchar(255) NOT NULL,
  `patologia` char(1) NOT NULL,
  `enfermedad` varchar(255) NOT NULL,
  `sponsor` int(11) NOT NULL,
  `otros_datos` text NOT NULL,
  PRIMARY KEY (`perfil_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `perfil`
--

INSERT INTO `perfil` (`perfil_id`, `users_id`, `sports_id`, `perfil_deporte_id`, `objetivo_profesional`, `ranking_nacional`, `ranking_mundial`, `ranking_otro`, `manager`, `manager_other`, `pase_options`, `pase`, `pase_option_other`, `patologia`, `enfermedad`, `sponsor`, `otros_datos`) VALUES
(1, 5, 4, 2, 'objetivo!', 0, 0, '0', 6, '', 0, '', '', 'o', '', 0, 'otros datos cargados'),
(2, 8, 0, 0, '', 0, 0, '', 0, '', 0, '', '', '', '', 0, ''),
(3, 14, 0, 0, '', 0, 0, '', 0, '', 0, '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_arco`
--

CREATE TABLE IF NOT EXISTS `perfil_arco` (
  `arco_id` int(11) NOT NULL AUTO_INCREMENT,
  `seleccionado` int(11) NOT NULL,
  `practica_desde` varchar(9) NOT NULL,
  `inicio_competicion` varchar(9) NOT NULL,
  `mano_habil` char(1) NOT NULL,
  `ojo_principal` char(1) NOT NULL,
  `eventos` varchar(255) NOT NULL,
  `entrenador_personal` varchar(255) NOT NULL,
  `entrenador_nacional` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `arco` varchar(255) NOT NULL,
  `palas` varchar(255) NOT NULL,
  `potencia_real` varchar(255) NOT NULL,
  `empuniaduras` varchar(255) NOT NULL,
  `flechas` varchar(255) NOT NULL,
  `puntas` varchar(255) NOT NULL,
  `plumas` varchar(255) NOT NULL,
  `nock` varchar(255) NOT NULL,
  `cuerda` varchar(255) NOT NULL,
  `reposa_flechas` varchar(255) NOT NULL,
  `clicker` varchar(255) NOT NULL,
  `boton_presion` varchar(255) NOT NULL,
  `estabilizadores` varchar(255) NOT NULL,
  `estabilizador_super_izquierdo` varchar(255) NOT NULL,
  `mira` varchar(255) NOT NULL,
  `dactilera` varchar(255) NOT NULL,
  `protector_brazo` varchar(255) NOT NULL,
  `carcaj` varchar(255) NOT NULL,
  `peto` varchar(255) NOT NULL,
  `reposa_arcos` varchar(255) NOT NULL,
  PRIMARY KEY (`arco_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_arco`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_atletismo`
--

CREATE TABLE IF NOT EXISTS `perfil_atletismo` (
  `atletismo_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `disciplina` int(11) NOT NULL,
  `disciplina_other` varchar(255) NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  PRIMARY KEY (`atletismo_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcar la base de datos para la tabla `perfil_atletismo`
--

INSERT INTO `perfil_atletismo` (`atletismo_id`, `categoria`, `categoria_other`, `disciplina`, `disciplina_other`, `entrenador`, `equipo`) VALUES
(2, -1, 'otra categoria atletismo', 0, '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_basquet`
--

CREATE TABLE IF NOT EXISTS `perfil_basquet` (
  `basquet_id` int(11) NOT NULL AUTO_INCREMENT,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `mano_habil` char(1) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  PRIMARY KEY (`basquet_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_basquet`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_becas`
--

CREATE TABLE IF NOT EXISTS `perfil_becas` (
  `becas_id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil_id` int(11) NOT NULL,
  `anio` varchar(9) NOT NULL,
  `institucion` varchar(255) NOT NULL,
  PRIMARY KEY (`becas_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_becas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_boxeo`
--

CREATE TABLE IF NOT EXISTS `perfil_boxeo` (
  `boxeo_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `mano_habil` char(1) NOT NULL,
  `licencia_nro` int(11) NOT NULL,
  `licencia_tipo` int(11) NOT NULL,
  `licencia_otorgada` int(11) NOT NULL,
  `entrenador` int(11) NOT NULL,
  PRIMARY KEY (`boxeo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_boxeo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_boxeo_licencia`
--

CREATE TABLE IF NOT EXISTS `perfil_boxeo_licencia` (
  `licencia_id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil_id` int(11) NOT NULL,
  `numero` varchar(255) NOT NULL,
  `tipo` varchar(255) NOT NULL,
  `fuente` varchar(255) NOT NULL,
  PRIMARY KEY (`licencia_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_boxeo_licencia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_ciclismo`
--

CREATE TABLE IF NOT EXISTS `perfil_ciclismo` (
  `ciclismo_id` int(11) NOT NULL AUTO_INCREMENT,
  `especialidad` int(11) NOT NULL,
  `especialidad_other` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  PRIMARY KEY (`ciclismo_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_ciclismo`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_escalada`
--

CREATE TABLE IF NOT EXISTS `perfil_escalada` (
  `escalada_id` int(11) NOT NULL AUTO_INCREMENT,
  `anios_escalada` int(11) NOT NULL,
  `modalidad` int(11) NOT NULL,
  PRIMARY KEY (`escalada_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_escalada`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_experiencia`
--

CREATE TABLE IF NOT EXISTS `perfil_experiencia` (
  `experiencia_id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil_id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  PRIMARY KEY (`experiencia_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `perfil_experiencia`
--

INSERT INTO `perfil_experiencia` (`experiencia_id`, `perfil_id`, `country_id`) VALUES
(1, 1, 13),
(2, 1, 17);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_futbol`
--

CREATE TABLE IF NOT EXISTS `perfil_futbol` (
  `futbol_id` int(11) NOT NULL AUTO_INCREMENT,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `pierna_habil` char(1) NOT NULL,
  PRIMARY KEY (`futbol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_futbol`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_futbolsala`
--

CREATE TABLE IF NOT EXISTS `perfil_futbolsala` (
  `futbolsala_id` int(11) NOT NULL AUTO_INCREMENT,
  `club` varchar(255) NOT NULL,
  `pierna_habil` char(1) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  PRIMARY KEY (`futbolsala_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_futbolsala`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_golf`
--

CREATE TABLE IF NOT EXISTS `perfil_golf` (
  `golf_id` int(11) NOT NULL AUTO_INCREMENT,
  `licencia` varchar(255) NOT NULL,
  `handicap` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  `nro_torneos` int(11) NOT NULL,
  `ganancias` decimal(6,0) NOT NULL,
  PRIMARY KEY (`golf_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_golf`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_halterofilia`
--

CREATE TABLE IF NOT EXISTS `perfil_halterofilia` (
  `halterofilia_id` int(11) NOT NULL AUTO_INCREMENT,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `division_other` varchar(255) NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  PRIMARY KEY (`halterofilia_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_halterofilia`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_handball`
--

CREATE TABLE IF NOT EXISTS `perfil_handball` (
  `handball_id` int(11) NOT NULL AUTO_INCREMENT,
  `mano_habil` char(1) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `entrenamiento_fisico` int(11) NOT NULL,
  `entrenamiento_gimnasio` int(11) NOT NULL,
  `entrenamiento_tactico` int(11) NOT NULL,
  `entrenamiento_tecnico` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`handball_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_handball`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_hockey`
--

CREATE TABLE IF NOT EXISTS `perfil_hockey` (
  `hockey_id` int(11) NOT NULL AUTO_INCREMENT,
  `jugador_desde` varchar(9) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `debut_primera` char(10) NOT NULL,
  `debut_internacional` char(10) NOT NULL,
  `mejor_golpe` int(11) NOT NULL,
  `mejor_golpe_other` varchar(255) NOT NULL,
  `entrenamiento_fisico` int(11) NOT NULL,
  `entrenamiento_gimnasio` int(11) NOT NULL,
  `entrenamiento_tactico` int(11) NOT NULL,
  `entrenamiento_tecnico` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`hockey_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_hockey`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_lesiones`
--

CREATE TABLE IF NOT EXISTS `perfil_lesiones` (
  `lesiones_id` int(11) NOT NULL AUTO_INCREMENT,
  `perfil_id` int(11) NOT NULL,
  `lesion` int(11) NOT NULL,
  `fecha_lesion` int(11) NOT NULL,
  `fecha_recuperacion` int(11) NOT NULL,
  `recuperacion` char(1) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`lesiones_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `perfil_lesiones`
--

INSERT INTO `perfil_lesiones` (`lesiones_id`, `perfil_id`, `lesion`, `fecha_lesion`, `fecha_recuperacion`, `recuperacion`, `observaciones`) VALUES
(1, 1, 4, 0, 0, '2', 'recuperacion buena'),
(2, 1, 5, 505537200, 505637200, '3', 'recuperacion mala');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_marciales`
--

CREATE TABLE IF NOT EXISTS `perfil_marciales` (
  `marciales_id` int(11) NOT NULL AUTO_INCREMENT,
  `inicio` int(10) unsigned NOT NULL,
  `modalidad` int(11) NOT NULL,
  `modalidad_other` varchar(255) NOT NULL,
  `categoria` varchar(255) NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  PRIMARY KEY (`marciales_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_marciales`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_natacion`
--

CREATE TABLE IF NOT EXISTS `perfil_natacion` (
  `natacion_id` int(11) NOT NULL AUTO_INCREMENT,
  `modalidad` int(11) NOT NULL,
  `nadador_desde` int(10) unsigned NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  PRIMARY KEY (`natacion_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_natacion`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_padel`
--

CREATE TABLE IF NOT EXISTS `perfil_padel` (
  `padel_id` int(11) NOT NULL AUTO_INCREMENT,
  `mano_habil` char(1) NOT NULL,
  `posicion` char(1) NOT NULL,
  `pala` varchar(255) NOT NULL,
  `mejor_golpe` int(11) NOT NULL,
  `mejor_golpe_other` varchar(255) NOT NULL,
  `companiero` varchar(255) NOT NULL,
  `modalidad` char(1) NOT NULL,
  PRIMARY KEY (`padel_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_padel`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_patin`
--

CREATE TABLE IF NOT EXISTS `perfil_patin` (
  `patin_id` int(11) NOT NULL AUTO_INCREMENT,
  `patinando_desde` varchar(9) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `entrenador` varchar(255) NOT NULL,
  `entrenamiento_fisico` int(11) NOT NULL,
  `entrenamiento_tecnico` int(11) NOT NULL,
  PRIMARY KEY (`patin_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_patin`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_rugby`
--

CREATE TABLE IF NOT EXISTS `perfil_rugby` (
  `rugby_id` int(11) NOT NULL AUTO_INCREMENT,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `club` int(11) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `posicion` int(11) NOT NULL,
  `posicion_other` varchar(255) NOT NULL,
  `pierna_habil` char(1) NOT NULL,
  `pateador` int(11) NOT NULL,
  `mejor_golpe` int(11) NOT NULL,
  `mejor_golpe_other` varchar(255) NOT NULL,
  `alcance` int(11) NOT NULL,
  `entrenamiento_fisico` int(11) NOT NULL,
  `entrenamiento_gimnasio` int(11) NOT NULL,
  `entrenamiento_tactico` int(11) NOT NULL,
  `entrenamiento_tecnico` int(11) NOT NULL,
  PRIMARY KEY (`rugby_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_rugby`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_softbol`
--

CREATE TABLE IF NOT EXISTS `perfil_softbol` (
  `softbol_id` int(11) NOT NULL AUTO_INCREMENT,
  `mano_habil` char(1) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `habilidad` int(11) NOT NULL,
  `habilidad_other` varchar(255) NOT NULL,
  `entrenamiento_fisico` int(11) NOT NULL,
  `entrenamiento_gimnasio` int(11) NOT NULL,
  `entrenamiento_tecnico` int(11) NOT NULL,
  `entrenamiento_tactico` int(11) NOT NULL,
  `anios_jugando` int(11) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`softbol_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_softbol`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_tenis`
--

CREATE TABLE IF NOT EXISTS `perfil_tenis` (
  `tenis_id` int(11) NOT NULL AUTO_INCREMENT,
  `mano_habil` char(1) NOT NULL,
  `modalidad` tinyint(4) NOT NULL,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `profesional_desde` int(11) unsigned NOT NULL,
  `entrenamiento_fisico` int(11) NOT NULL,
  `entrenamiento_gimnasio` int(11) NOT NULL,
  `entrenamiento_tactico` int(11) NOT NULL,
  `entrenamiento_tecnico` int(11) NOT NULL,
  `ganancia` decimal(6,0) NOT NULL,
  PRIMARY KEY (`tenis_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_tenis`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_tiro`
--

CREATE TABLE IF NOT EXISTS `perfil_tiro` (
  `tiro_id` int(11) NOT NULL AUTO_INCREMENT,
  `seleccionado` int(11) NOT NULL,
  `practica_desde` varchar(9) NOT NULL,
  `inicio_competicion` varchar(9) NOT NULL,
  `mano_habil` char(1) NOT NULL,
  `ojo_principal` char(1) NOT NULL,
  `eventos` varchar(255) NOT NULL,
  `entrenador_personal` varchar(255) NOT NULL,
  `entrenador_nacional` varchar(255) NOT NULL,
  `equipo` varchar(255) NOT NULL,
  PRIMARY KEY (`tiro_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `perfil_tiro`
--

INSERT INTO `perfil_tiro` (`tiro_id`, `seleccionado`, `practica_desde`, `inicio_competicion`, `mano_habil`, `ojo_principal`, `eventos`, `entrenador_personal`, `entrenador_nacional`, `equipo`) VALUES
(1, 0, '', '', '', '', '', '', '', ''),
(2, 0, '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_voley`
--

CREATE TABLE IF NOT EXISTS `perfil_voley` (
  `voley_id` int(11) NOT NULL AUTO_INCREMENT,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `alcance_bloqueo` int(11) NOT NULL,
  `alcance_ataque` int(11) NOT NULL,
  `alcance_parado` int(11) NOT NULL,
  `debut_internacional` varchar(9) NOT NULL,
  `posicion` int(11) NOT NULL,
  PRIMARY KEY (`voley_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_voley`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `perfil_voleyplaya`
--

CREATE TABLE IF NOT EXISTS `perfil_voleyplaya` (
  `voleyplaya_id` int(11) NOT NULL AUTO_INCREMENT,
  `seleccionado` int(11) NOT NULL,
  `seleccionado_other` varchar(255) NOT NULL,
  `club` varchar(255) NOT NULL,
  `pareja` varchar(255) NOT NULL,
  `categoria` int(11) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `alcance_bloqueo` int(11) NOT NULL,
  `alcance_ataque` int(11) NOT NULL,
  `alcance_parado` int(11) NOT NULL,
  `debut_internacional` varchar(9) NOT NULL,
  `posicion` varchar(255) NOT NULL,
  `ganancia` decimal(6,0) NOT NULL,
  PRIMARY KEY (`voleyplaya_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `perfil_voleyplaya`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_sports_perfil_historial`
--

CREATE TABLE IF NOT EXISTS `rel_sports_perfil_historial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sports_id` int(11) NOT NULL,
  `perfil` varchar(255) NOT NULL,
  `historial` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Volcar la base de datos para la tabla `rel_sports_perfil_historial`
--

INSERT INTO `rel_sports_perfil_historial` (`id`, `sports_id`, `perfil`, `historial`) VALUES
(1, 1, 'perfil_atletismo', 'historial_atletismo'),
(2, 2, 'perfil_marciales', 'historial_marciales'),
(3, 3, 'perfil_basquet', 'historial_basquet'),
(4, 4, 'perfil_boxeo', 'historial_boxeo'),
(5, 5, 'perfil_ciclismo', ''),
(6, 6, 'perfil_escalada', ''),
(7, 7, 'perfil_futbol', 'historial_futbol'),
(8, 8, 'perfil_futbolsala', 'historial_futbolsala'),
(9, 9, 'perfil_golf', 'historial_golf'),
(10, 10, 'perfil_halterofilia', 'historial_halterofilia'),
(11, 11, 'perfil_handball', 'historial_handball'),
(12, 12, 'perfil_hockey', 'historial_hockey'),
(13, 13, 'perfil_natacion', ''),
(14, 14, 'perfil_padel', ''),
(15, 15, 'perfil_patin', ''),
(16, 16, 'perfil_rugby', 'historial_rugby'),
(17, 17, 'perfil_softbol', ''),
(18, 18, 'perfil_tenis', ''),
(19, 19, 'perfil_arco', 'historial_arco'),
(20, 20, 'perfil_tiro', 'historial_tiro'),
(21, 21, 'perfil_voley', 'historial_voley'),
(22, 22, 'perfil_voleyplaya', 'historial_voleyplaya');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rel_sports_to_seleccionado`
--

CREATE TABLE IF NOT EXISTS `rel_sports_to_seleccionado` (
  `sport_id` int(11) NOT NULL,
  `seleccionado_id` int(11) NOT NULL,
  PRIMARY KEY (`sport_id`,`seleccionado_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcar la base de datos para la tabla `rel_sports_to_seleccionado`
--

INSERT INTO `rel_sports_to_seleccionado` (`sport_id`, `seleccionado_id`) VALUES
(2, -1),
(2, 12),
(2, 13),
(3, -1),
(3, 1),
(3, 2),
(3, 3),
(7, -1),
(7, 1),
(7, 2),
(7, 3),
(8, -1),
(8, 1),
(8, 2),
(8, 3),
(11, -1),
(11, 3),
(11, 5),
(11, 6),
(12, -1),
(12, 1),
(12, 2),
(12, 6),
(12, 7),
(12, 8),
(13, -1),
(13, 3),
(13, 5),
(13, 6),
(16, -1),
(16, 1),
(16, 2),
(16, 3),
(17, 1),
(17, 2),
(17, 3),
(18, -1),
(18, 1),
(18, 2),
(18, 3),
(18, 9),
(18, 10),
(19, 1),
(19, 2),
(19, 3),
(20, 1),
(20, 2),
(20, 3),
(21, -1),
(21, 1),
(21, 2),
(21, 3),
(22, -1),
(22, 1),
(22, 2),
(22, 3);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `test_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `test0` int(11) NOT NULL,
  `test1` int(11) NOT NULL,
  `test2` int(11) NOT NULL,
  `other` varchar(255) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`test_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `test`
--

INSERT INTO `test` (`test_id`, `users_id`, `fecha`, `test0`, `test1`, `test2`, `other`, `observaciones`) VALUES
(1, 5, '', 4, 2, 1, '', ''),
(2, 5, '', 4, 1, 0, '5555', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_type` varchar(30) NOT NULL COMMENT 'nombre de las tablas',
  `username` varchar(255) NOT NULL,
  `password` char(64) NOT NULL,
  `email` varchar(100) NOT NULL,
  `newsletter` bit(1) NOT NULL DEFAULT b'1',
  `token` char(23) DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `level` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0=Usuario, 1=Administrador',
  `date_added` datetime NOT NULL,
  `last_modified` datetime NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Volcar la base de datos para la tabla `users`
--

INSERT INTO `users` (`users_id`, `users_type`, `username`, `password`, `email`, `newsletter`, `token`, `active`, `level`, `date_added`, `last_modified`) VALUES
(1, 'users_dep', 'deportista', 'gXHphNha+nJz9ODhM7fUM6TbmPQ=', 'federico@mydesign.com.ar', '\0', NULL, 1, 0, '2010-08-05 12:32:57', '0000-00-00 00:00:00'),
(2, 'users_dep', 'fede', '9nGszPqSZo0Prp72xEI9yIHZJVcraiBoAwA=', 'xda@sa.com', '', NULL, 1, 0, '2010-09-20 09:39:01', '0000-00-00 00:00:00'),
(3, 'users_dep', 'fedefff', 'KukYc4a0op4/sithJzh3UC4zKFRxyJ/ZGi8=', 'xda@sa.com', '', NULL, 1, 0, '2010-09-20 09:41:47', '0000-00-00 00:00:00'),
(4, 'users_dep', 'damian', 'IpN3dP92121n5l1BmH2KUsvSIQ9n9QFoMWFHYA==', 'xdam@gmail.comm', '\0', NULL, 1, 0, '2010-09-20 10:01:24', '2010-09-20 11:49:20'),
(5, 'users_dep', 'damianx', 'BjxWYQ0zADxdPQk+CDwGals0DRI=', 'fede@hotmail.com', '', NULL, 1, 0, '2010-09-20 12:13:40', '0000-00-00 00:00:00'),
(6, 'users_repr', 'federep', 'tZ9rRSnFNWhEtozJbR9KW5GLRROBQ8VfenF1LA==', 'xx@hotmail.com', '', NULL, 1, 0, '2010-09-29 10:14:10', '0000-00-00 00:00:00'),
(7, 'users_sponsors', 'fedesponsor', '+0CGpLsogamyI3zJeFTyq4wL4HPXPa9IpXohLA==', 'xxx@gmail.com', '', NULL, 1, 0, '2010-09-29 10:46:14', '0000-00-00 00:00:00'),
(8, 'users_dep', 'qqq', '0reCDYk6y8QvZ/r26xH7x1WdBFAAfHVVRRGfew==', 'qq@gmail.com', '', NULL, 0, 0, '2010-10-04 09:27:27', '0000-00-00 00:00:00'),
(9, 'users_repr', 'damrep', 'vMQ+EjZNhjQEyzGRyew18dE2fOhM2WI9ucbikg==', 'xdamrep@gmail.com', '\0', NULL, 1, 0, '2010-10-07 12:45:40', '0000-00-00 00:00:00'),
(10, 'users_trainer', 'damentr', 'cjO8M8CQa+6ccd2viX09zXfwFqBuIz1TRfXsPA==', 'xdam@entr.com', '\0', NULL, 1, 0, '2010-10-08 11:39:37', '0000-00-00 00:00:00'),
(11, 'users_prepfisico', 'damprep', '+YgfRsA9a4NeR2ZdzopiZEJa5t9OWTVrK1oYQA==', 'xda@prep.com', '\0', NULL, 1, 0, '2010-10-08 12:23:42', '0000-00-00 00:00:00'),
(12, 'users_sponsors', 'damsponsor', '9FdnYFwc0sKsU6pb3Nd6KOjAlOc4hV057kqLwA==', 'fds@hsotamil.com', '\0', NULL, 1, 0, '2010-10-08 13:10:55', '0000-00-00 00:00:00'),
(13, 'users_club', 'Damclub', 'cegaUmbd2RyBh3co+EZdw0LIPy6/AVRDtOsf2A==', 'xdam@club.com', '\0', NULL, 1, 0, '2010-10-12 17:49:09', '0000-00-00 00:00:00'),
(14, 'users_dep', 'xxxxxx', 'BjxWYQ0zADxdPQk+CDwGals0DRI=', 'xxxx@xxx.com', '\0', NULL, 0, 0, '2010-10-28 10:35:55', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club`
--

CREATE TABLE IF NOT EXISTS `users_club` (
  `users_type_club` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `razon_social` varchar(100) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `nombre_club` varchar(100) NOT NULL,
  `presidente_actual` varchar(50) NOT NULL,
  `cuit` varchar(25) NOT NULL,
  `anio_fundacion` int(4) NOT NULL,
  `celu_area` varchar(5) NOT NULL,
  `celu_city` varchar(5) NOT NULL,
  `celu_num` varchar(15) NOT NULL,
  `categoria` varchar(200) NOT NULL,
  `categoria_other` varchar(255) NOT NULL,
  `titular_lastname` varchar(50) NOT NULL,
  `titular_firstname` varchar(50) NOT NULL,
  `titular_cargo` varchar(50) NOT NULL,
  `titular_cargo_other` varchar(255) NOT NULL,
  `titular_phone_area` varchar(5) NOT NULL,
  `titular_phone_city` varchar(5) NOT NULL,
  `titular_phone_num` varchar(15) NOT NULL,
  `titular_celu_area` varchar(5) NOT NULL,
  `titular_celu_city` varchar(5) NOT NULL,
  `titular_celu_num` varchar(15) NOT NULL,
  `titular_documento_tipo` varchar(100) NOT NULL,
  `titular_documento_tipo_other` varchar(255) NOT NULL,
  `titular_documento_num` varchar(20) NOT NULL,
  `titular_documento_show` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`users_type_club`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `users_club`
--

INSERT INTO `users_club` (`users_type_club`, `users_id`, `razon_social`, `image_thumb`, `image_width`, `image_height`, `nombre_club`, `presidente_actual`, `cuit`, `anio_fundacion`, `celu_area`, `celu_city`, `celu_num`, `categoria`, `categoria_other`, `titular_lastname`, `titular_firstname`, `titular_cargo`, `titular_cargo_other`, `titular_phone_area`, `titular_phone_city`, `titular_phone_num`, `titular_celu_area`, `titular_celu_city`, `titular_celu_num`, `titular_documento_tipo`, `titular_documento_tipo_other`, `titular_documento_num`, `titular_documento_show`) VALUES
(1, 13, '', '', 0, 0, '', '', '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_club_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_club_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club_sedes`
--

CREATE TABLE IF NOT EXISTS `users_club_sedes` (
  `sedes_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `sede` varchar(200) NOT NULL,
  `domicilio` int(11) NOT NULL,
  `country` int(11) NOT NULL,
  `state` int(11) NOT NULL,
  `city` varchar(200) NOT NULL,
  `zip_code` varchar(10) NOT NULL,
  `phone_area` varchar(5) NOT NULL,
  `phone_city` varchar(5) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  PRIMARY KEY (`sedes_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_club_sedes`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club_sports`
--

CREATE TABLE IF NOT EXISTS `users_club_sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `sports_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_club_sports`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_club_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_club_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_club_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep`
--

CREATE TABLE IF NOT EXISTS `users_dep` (
  `users_type_dep` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `nacimiento` char(10) NOT NULL,
  `estado_civil` int(11) NOT NULL,
  `documento_tipo` int(11) NOT NULL,
  `documento_tipo_other` varchar(255) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL DEFAULT b'0',
  `current_country` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `nacionalidad2` varchar(255) NOT NULL,
  `nacionalidad3` varchar(255) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `phone_area` varchar(5) NOT NULL,
  `phone_city` varchar(5) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `celu_area` varchar(5) NOT NULL,
  `celu_city` varchar(5) NOT NULL,
  `celu_num` varchar(15) NOT NULL,
  `website` varchar(150) NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `estudios` varchar(100) NOT NULL,
  `check_discapacidad` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`users_type_dep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `users_dep`
--

INSERT INTO `users_dep` (`users_type_dep`, `users_id`, `lastname`, `firstname`, `image_thumb`, `image_width`, `image_height`, `sex`, `nacimiento`, `estado_civil`, `documento_tipo`, `documento_tipo_other`, `documento_num`, `documento_show`, `current_country`, `current_city`, `current_state`, `current_zipcode`, `origin_country`, `origin_city`, `origin_state`, `origin_zipcode`, `nacionalidad`, `nacionalidad2`, `nacionalidad3`, `passport`, `phone_area`, `phone_city`, `phone_num`, `celu_area`, `celu_city`, `celu_num`, `website`, `profesion`, `estudios`, `check_discapacidad`) VALUES
(4, 4, 'Mattoni', 'Ivan', '12813206864c5f66eecff01__casas-california.jpg', 200, 127, 'm', '439268400', 0, 1, '', '30536404', '', 0, 'Mendoza', 180, '5500', 26, 'Dasd', 426, '5500', 'Argentino', '0', '0', 'Sin Pasaporte', '054', '0261', '4442192', '054', '0234', '4442198', 'http://www.google.com', 'Dfsdf', 'Dfsdf', ''),
(5, 5, 'Ccccc', 'Aaaa', '5_12851644134c9a0d7dc5ae1__06_unique_bodas_c.jpg', 199, 250, 'm', '505537200', 0, 1, '', '30123456', '', 13, 'Gcruz', 174, '5501', 13, 'Nose', 179, '6600', 'Argentino', '0', '0', 'Sin Pasaporte', '000', '111', '22222222222222', '021', '21241', '123456', 'http://www.fulbofulbo.com', 'Fulbo', 'Lic En Fulbo', ''),
(6, 8, '', '', '', 0, 0, '', '', 0, 0, '', '', '\0', 0, '', 0, '', 0, '', 0, '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '\0'),
(7, 14, '', '', '', 0, 0, '', '', 0, 0, '', '', '\0', 0, '', 0, '', 0, '', 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '\0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_disc`
--

CREATE TABLE IF NOT EXISTS `users_dep_disc` (
  `disc_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `detalle` text NOT NULL,
  PRIMARY KEY (`disc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `users_dep_disc`
--

INSERT INTO `users_dep_disc` (`disc_id`, `users_id`, `type`, `detalle`) VALUES
(1, 4, 'Mental', 'dsfsd'),
(2, 4, 'Motora', 'fdfdf'),
(3, 5, 'Auditiva', 'no escucho nada'),
(4, 8, '', ''),
(5, 14, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_lang`
--

CREATE TABLE IF NOT EXISTS `users_dep_lang` (
  `deplang_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `level_oral` varchar(20) NOT NULL,
  `level_write` varchar(20) NOT NULL,
  PRIMARY KEY (`deplang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Volcar la base de datos para la tabla `users_dep_lang`
--

INSERT INTO `users_dep_lang` (`deplang_id`, `users_id`, `lang_id`, `level_oral`, `level_write`) VALUES
(1, 4, 3, 'Intermedio', 'Intermedio'),
(2, 4, 17, 'Básico', 'Avanzado'),
(4, 5, 3, 'Intermedio', 'Intermedio'),
(5, 8, 0, '', ''),
(6, 14, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_dep_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Volcar la base de datos para la tabla `users_dep_picgallery`
--

INSERT INTO `users_dep_picgallery` (`picgallery_id`, `users_id`, `image`, `thumb`, `width`, `height`, `order`) VALUES
(7, 5, '5_12850797544c98c2ca435bf__04_lexer_sports_datos_del_usuario.jpg', '5_12850797544c98c2ca435bf__04_lexer_sports_datos_del_usuario_thumb.jpg', 0, 0, 1),
(9, 5, '5_12850849124c98d6f025b7a__04_lexer_sports_datos_del_usuario.jpg', '5_12850849124c98d6f025b7a__04_lexer_sports_datos_del_usuario_thumb.jpg', 81, 80, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_dep_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_dep_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_dep_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_altura`
--

CREATE TABLE IF NOT EXISTS `users_ma_altura` (
  `altura_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `altura` decimal(6,2) NOT NULL,
  `medida` int(11) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`altura_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_altura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_altura_1`
--

CREATE TABLE IF NOT EXISTS `users_ma_altura_1` (
  `altura_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `acromial` decimal(6,2) NOT NULL,
  `radial` decimal(6,2) NOT NULL,
  `estiloides` decimal(6,2) NOT NULL,
  `dactilar` decimal(6,2) NOT NULL,
  `ileoespinal` decimal(6,2) NOT NULL,
  PRIMARY KEY (`altura_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_altura_1`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_altura_2`
--

CREATE TABLE IF NOT EXISTS `users_ma_altura_2` (
  `altura_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `trocanerea` decimal(6,2) NOT NULL,
  `tibial_lateral` decimal(6,2) NOT NULL,
  `maleolar_tibial` decimal(6,2) NOT NULL,
  `maleolar_peroneal` decimal(6,2) NOT NULL,
  PRIMARY KEY (`altura_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_altura_2`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_altura_sentado`
--

CREATE TABLE IF NOT EXISTS `users_ma_altura_sentado` (
  `altura_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `altura` decimal(6,2) NOT NULL,
  `medida` int(11) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`altura_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `users_ma_altura_sentado`
--

INSERT INTO `users_ma_altura_sentado` (`altura_id`, `users_id`, `fecha`, `altura`, `medida`, `observaciones`) VALUES
(1, 5, '1288170540', 120.00, 0, ''),
(2, 5, '1288170540', 122.00, 0, '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_diametros_1`
--

CREATE TABLE IF NOT EXISTS `users_ma_diametros_1` (
  `diametro_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `bimaleolar` decimal(6,2) NOT NULL,
  `transverso_pie` decimal(6,2) NOT NULL,
  `biepicondileo` decimal(6,2) NOT NULL,
  `biestiloideo` decimal(6,2) NOT NULL,
  `transverso_mano` decimal(6,2) NOT NULL,
  PRIMARY KEY (`diametro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_diametros_1`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_diametros_2`
--

CREATE TABLE IF NOT EXISTS `users_ma_diametros_2` (
  `diametro_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `biacromial` decimal(6,2) NOT NULL,
  `transverso` decimal(6,2) NOT NULL,
  `antero_posterior` decimal(6,2) NOT NULL,
  `biileocrestal` decimal(6,2) NOT NULL,
  `bicondileo` decimal(6,2) NOT NULL,
  PRIMARY KEY (`diametro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_diametros_2`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_envergadura`
--

CREATE TABLE IF NOT EXISTS `users_ma_envergadura` (
  `envergadura_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `altura` decimal(6,2) NOT NULL,
  `medida` int(11) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`envergadura_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_envergadura`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_grasa`
--

CREATE TABLE IF NOT EXISTS `users_ma_grasa` (
  `grasa_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `porcentaje` decimal(3,2) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`grasa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_grasa`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_long_1`
--

CREATE TABLE IF NOT EXISTS `users_ma_long_1` (
  `long_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `extrem_sup_1` decimal(6,0) NOT NULL,
  `extrem_sup_2` decimal(6,0) NOT NULL,
  `brazo` decimal(6,0) NOT NULL,
  `antebrazo` decimal(6,0) NOT NULL,
  `mano` decimal(6,0) NOT NULL,
  PRIMARY KEY (`long_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_long_1`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_long_2`
--

CREATE TABLE IF NOT EXISTS `users_ma_long_2` (
  `long_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `inferior` decimal(6,2) NOT NULL,
  `pie` decimal(6,2) NOT NULL,
  `muslo_1` decimal(6,2) NOT NULL,
  `muslo_2` decimal(6,2) NOT NULL,
  `tibia` decimal(6,2) NOT NULL,
  PRIMARY KEY (`long_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_long_2`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_masa`
--

CREATE TABLE IF NOT EXISTS `users_ma_masa` (
  `masa_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `imc` decimal(6,2) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`masa_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_masa`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_observaciones`
--

CREATE TABLE IF NOT EXISTS `users_ma_observaciones` (
  `observaciones_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `pliegues` text NOT NULL,
  `perimetros` text NOT NULL,
  `diametros` text NOT NULL,
  `alturas` text NOT NULL,
  `longitudes` text NOT NULL,
  PRIMARY KEY (`observaciones_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_observaciones`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_perimetros_brazos`
--

CREATE TABLE IF NOT EXISTS `users_ma_perimetros_brazos` (
  `perimetros_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `brazo_relajado` decimal(6,2) NOT NULL,
  `brazo_contraido` decimal(6,2) NOT NULL,
  `muslo_medial` decimal(6,2) NOT NULL,
  `antebrazo` decimal(6,2) NOT NULL,
  `munieca` decimal(6,2) NOT NULL,
  PRIMARY KEY (`perimetros_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_perimetros_brazos`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_perimetros_gral`
--

CREATE TABLE IF NOT EXISTS `users_ma_perimetros_gral` (
  `perimetro_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `cabeza` decimal(6,2) NOT NULL,
  `cuello` decimal(6,2) NOT NULL,
  `torax` decimal(6,2) NOT NULL,
  `cintura` decimal(6,2) NOT NULL,
  `cadera` decimal(6,2) NOT NULL,
  `umbilical` decimal(6,2) NOT NULL,
  PRIMARY KEY (`perimetro_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_perimetros_gral`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_perimetros_piernas`
--

CREATE TABLE IF NOT EXISTS `users_ma_perimetros_piernas` (
  `perimetros_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `muslo` decimal(6,2) NOT NULL,
  `muslo_medial` decimal(6,2) NOT NULL,
  `pantorrilla` decimal(6,2) NOT NULL,
  `tobillo` decimal(6,2) NOT NULL,
  PRIMARY KEY (`perimetros_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_perimetros_piernas`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_peso`
--

CREATE TABLE IF NOT EXISTS `users_ma_peso` (
  `peso_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `peso` decimal(6,2) NOT NULL,
  `observaciones` varchar(255) NOT NULL,
  PRIMARY KEY (`peso_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_peso`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_pliegues_1`
--

CREATE TABLE IF NOT EXISTS `users_ma_pliegues_1` (
  `pliegues_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `fecha` char(10) NOT NULL,
  `triceps` decimal(6,2) NOT NULL,
  `subescapular` decimal(6,2) NOT NULL,
  `biceps` decimal(6,2) NOT NULL,
  `pectoral` decimal(6,2) NOT NULL,
  `axilar_medio` decimal(6,2) NOT NULL,
  PRIMARY KEY (`pliegues_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_pliegues_1`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_ma_pliegues_2`
--

CREATE TABLE IF NOT EXISTS `users_ma_pliegues_2` (
  `pliegues_id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` char(10) NOT NULL,
  `ileocrestal` decimal(6,2) NOT NULL,
  `suprailiaco` decimal(6,2) NOT NULL,
  `abdominal` decimal(6,2) NOT NULL,
  `muslo_anterior` decimal(6,2) NOT NULL,
  `muslo posterior` decimal(6,2) NOT NULL,
  `pierna_medial` decimal(6,2) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`pliegues_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_ma_pliegues_2`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_prepfisico`
--

CREATE TABLE IF NOT EXISTS `users_prepfisico` (
  `users_type_prepfisico` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `nacimiento` char(10) NOT NULL,
  `estado_civil` int(11) NOT NULL,
  `documento_tipo` int(11) NOT NULL,
  `documento_tipo_other` varchar(255) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL DEFAULT b'0',
  `current_country` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `nacionalidad2` varchar(255) NOT NULL,
  `nacionalidad3` varchar(255) NOT NULL,
  `passport` int(11) NOT NULL,
  `phone_area` varchar(5) NOT NULL,
  `phone_city` varchar(5) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `celu_area` varchar(5) NOT NULL,
  `celu_city` varchar(5) NOT NULL,
  `celu_num` varchar(15) NOT NULL,
  `website` int(150) NOT NULL,
  PRIMARY KEY (`users_type_prepfisico`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `users_prepfisico`
--

INSERT INTO `users_prepfisico` (`users_type_prepfisico`, `users_id`, `lastname`, `firstname`, `image_thumb`, `image_width`, `image_height`, `sex`, `nacimiento`, `estado_civil`, `documento_tipo`, `documento_tipo_other`, `documento_num`, `documento_show`, `current_country`, `current_city`, `current_state`, `current_zipcode`, `origin_country`, `origin_city`, `origin_state`, `origin_zipcode`, `nacionalidad`, `nacionalidad2`, `nacionalidad3`, `passport`, `phone_area`, `phone_city`, `phone_num`, `celu_area`, `celu_city`, `celu_num`, `website`) VALUES
(1, 11, '', '', '', 0, 0, 'm', '', 3, 1, '', '', '\0', 0, '', 0, '', 3, '', 0, '', '', '', '', 1, '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_prepfisico_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_prepfisico_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_prepfisico_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_prepfisico_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_prepfisico_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_prepfisico_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr`
--

CREATE TABLE IF NOT EXISTS `users_repr` (
  `users_type_repr` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `nacimiento` char(10) NOT NULL,
  `documento_tipo` int(11) NOT NULL,
  `documento_tipo_other` varchar(255) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL,
  `current_country` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `nacionalidad2` varchar(255) NOT NULL,
  `nacionalidad3` varchar(255) NOT NULL,
  `passport` varchar(20) NOT NULL,
  `phone_area` varchar(5) NOT NULL,
  `phone_city` varchar(5) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `celu_area` varchar(5) NOT NULL,
  `celu_city` varchar(5) NOT NULL,
  `celu_num` varchar(15) NOT NULL,
  `website` varchar(150) NOT NULL,
  `profesion` varchar(100) NOT NULL,
  `trabajo` varchar(100) NOT NULL,
  `agente_fifa` bit(1) NOT NULL DEFAULT b'0',
  `agente_fifa_licencia` varchar(30) NOT NULL,
  `sports_id` int(11) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`users_type_repr`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `users_repr`
--

INSERT INTO `users_repr` (`users_type_repr`, `users_id`, `lastname`, `firstname`, `image_thumb`, `image_width`, `image_height`, `sex`, `nacimiento`, `documento_tipo`, `documento_tipo_other`, `documento_num`, `documento_show`, `current_country`, `current_city`, `current_state`, `current_zipcode`, `origin_country`, `origin_city`, `origin_state`, `origin_zipcode`, `nacionalidad`, `nacionalidad2`, `nacionalidad3`, `passport`, `phone_area`, `phone_city`, `phone_num`, `celu_area`, `celu_city`, `celu_num`, `website`, `profesion`, `trabajo`, `agente_fifa`, `agente_fifa_licencia`, `sports_id`, `level`) VALUES
(1, 6, 'wegrep', 'damrep', '', 0, 0, '', '2010-09-29', 0, '', '', '\0', 0, '', 0, '', 0, '', 0, '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '\0', '', 0, 0),
(2, 9, '', '', '', 0, 0, '', '2010-10-07', 0, '', '', '\0', 0, '', 0, '', 0, '', 0, '', '', '0', '0', '', '', '', '', '', '', '', '', '', '', '\0', '', 0, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr_lang`
--

CREATE TABLE IF NOT EXISTS `users_repr_lang` (
  `reprlang_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lang_id` int(11) NOT NULL,
  `level_oral` varchar(20) NOT NULL,
  `level_write` varchar(20) NOT NULL,
  PRIMARY KEY (`reprlang_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `users_repr_lang`
--

INSERT INTO `users_repr_lang` (`reprlang_id`, `users_id`, `lang_id`, `level_oral`, `level_write`) VALUES
(1, 6, 0, '', ''),
(2, 9, 0, '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_repr_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_repr_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr_sports`
--

CREATE TABLE IF NOT EXISTS `users_repr_sports` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `sports_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_repr_sports`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_repr_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_repr_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_repr_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_sponsors`
--

CREATE TABLE IF NOT EXISTS `users_sponsors` (
  `users_type_sponsors` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `razon_social` varchar(255) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` int(4) NOT NULL,
  `image_height` int(4) NOT NULL,
  `cuit` varchar(25) NOT NULL,
  `address` varchar(255) NOT NULL,
  `country_id` int(11) NOT NULL,
  `states_id` int(11) NOT NULL,
  `city` varchar(100) NOT NULL,
  `zipcode` varchar(10) NOT NULL,
  `phone_area` varchar(5) NOT NULL,
  `phone_city` varchar(5) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `celu_area` varchar(5) NOT NULL,
  `celu_city` varchar(5) NOT NULL,
  `celu_num` varchar(15) NOT NULL,
  `rubro` int(11) NOT NULL,
  `rubro_other` varchar(255) NOT NULL,
  `titular_lastname` varchar(50) NOT NULL,
  `titular_firstname` varchar(50) NOT NULL,
  `titular_cargo` int(11) NOT NULL,
  `titular_cargo_other` varchar(255) NOT NULL,
  `titular_phone_area` int(5) NOT NULL,
  `titular_phone_city` int(5) NOT NULL,
  `titular_phone_num` int(15) NOT NULL,
  `titular_celu_area` int(5) NOT NULL,
  `titular_celu_city` int(5) NOT NULL,
  `titular_celu_num` int(15) NOT NULL,
  `titular_documento_tipo` int(11) NOT NULL,
  `titular_documento_tipo_other` varchar(255) NOT NULL,
  `titular_documento_num` varchar(20) NOT NULL,
  `titular_documento_show` bit(1) NOT NULL DEFAULT b'0',
  PRIMARY KEY (`users_type_sponsors`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `users_sponsors`
--

INSERT INTO `users_sponsors` (`users_type_sponsors`, `users_id`, `razon_social`, `image_thumb`, `image_width`, `image_height`, `cuit`, `address`, `country_id`, `states_id`, `city`, `zipcode`, `phone_area`, `phone_city`, `phone_num`, `celu_area`, `celu_city`, `celu_num`, `rubro`, `rubro_other`, `titular_lastname`, `titular_firstname`, `titular_cargo`, `titular_cargo_other`, `titular_phone_area`, `titular_phone_city`, `titular_phone_num`, `titular_celu_area`, `titular_celu_city`, `titular_celu_num`, `titular_documento_tipo`, `titular_documento_tipo_other`, `titular_documento_num`, `titular_documento_show`) VALUES
(1, 7, '', '', 0, 0, '', '', 0, 0, '', '', '', '', '', '', '', '', 0, '', 'wegspon', 'damspon', 0, '', 0, 0, 0, 0, 0, 0, 0, '0', '', '\0'),
(2, 12, '', '', 0, 0, '', '', 0, 0, '', '', '', '', '', '', '', '', 0, '', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, '', '', '\0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_sponsors_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_sponsors_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_sponsors_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_sponsors_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_sponsors_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_sponsors_videogallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_trainer`
--

CREATE TABLE IF NOT EXISTS `users_trainer` (
  `users_type_trainer` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `image_thumb` varchar(255) NOT NULL,
  `image_width` tinyint(4) NOT NULL,
  `image_height` tinyint(4) NOT NULL,
  `sex` char(1) NOT NULL,
  `nacimiento` char(10) NOT NULL,
  `estado_civil` int(11) NOT NULL,
  `documento_tipo` int(11) NOT NULL,
  `documento_tipo_other` varchar(255) NOT NULL,
  `documento_num` varchar(20) NOT NULL,
  `documento_show` bit(1) NOT NULL DEFAULT b'0',
  `current_country` int(11) NOT NULL,
  `current_state` int(11) NOT NULL,
  `current_city` varchar(100) NOT NULL,
  `current_zipcode` varchar(10) NOT NULL,
  `origin_country` int(11) NOT NULL,
  `origin_city` varchar(100) NOT NULL,
  `origin_state` int(11) NOT NULL,
  `origin_zipcode` varchar(10) NOT NULL,
  `nacionalidad` varchar(255) NOT NULL,
  `nacionalidad2` varchar(255) NOT NULL,
  `nacionalidad3` varchar(255) NOT NULL,
  `passport` int(11) NOT NULL,
  `phone_area` varchar(5) NOT NULL,
  `phone_city` varchar(5) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `celu_area` varchar(5) NOT NULL,
  `celu_city` varchar(5) NOT NULL,
  `celu_num` varchar(15) NOT NULL,
  `website` varchar(150) NOT NULL,
  `check_repr` bit(1) NOT NULL DEFAULT b'0',
  `sponsor` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`users_type_trainer`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Volcar la base de datos para la tabla `users_trainer`
--

INSERT INTO `users_trainer` (`users_type_trainer`, `users_id`, `lastname`, `firstname`, `image_thumb`, `image_width`, `image_height`, `sex`, `nacimiento`, `estado_civil`, `documento_tipo`, `documento_tipo_other`, `documento_num`, `documento_show`, `current_country`, `current_state`, `current_city`, `current_zipcode`, `origin_country`, `origin_city`, `origin_state`, `origin_zipcode`, `nacionalidad`, `nacionalidad2`, `nacionalidad3`, `passport`, `phone_area`, `phone_city`, `phone_num`, `celu_area`, `celu_city`, `celu_num`, `website`, `check_repr`, `sponsor`, `level`) VALUES
(1, 10, '', '', '', 0, 0, 'f', '', 3, 1, '', '', '\0', 0, 0, '', '', 0, '', 0, '', '', '', '', 3, '', '', '', '', '', '', '', '\0', '', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_trainer_picgallery`
--

CREATE TABLE IF NOT EXISTS `users_trainer_picgallery` (
  `picgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `thumb` varchar(255) NOT NULL,
  `width` tinyint(4) NOT NULL,
  `height` tinyint(5) NOT NULL,
  PRIMARY KEY (`picgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_trainer_picgallery`
--


-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users_trainer_videogallery`
--

CREATE TABLE IF NOT EXISTS `users_trainer_videogallery` (
  `vidgallery_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_id` int(11) NOT NULL,
  `code` text NOT NULL,
  PRIMARY KEY (`vidgallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Volcar la base de datos para la tabla `users_trainer_videogallery`
--
