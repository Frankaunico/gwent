<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '#]F2CE`LBe nC7Ejs!r@G5;`RHR#M90+u{o1G$n0|[y#[xD,~Q6x0y B*Ijl:B+~');
define('SECURE_AUTH_KEY', 'YwC5gKNCT6:qSE4mlcm2_fN6!{{8!:F1n^UC:PX <W JF^*1lm^Umy~=@WPmOJv%');
define('LOGGED_IN_KEY', 'eTN2;Ct7+6w7e0zv5@|27<H**q7+LVHGEbB^|1++o#qC<zy5|:5T/|iT;t+2}fZg');
define('NONCE_KEY', '(OQ6DJo=s-t28m`jU5/rfb=nPZ^wCrL;LJ;4*|xDGl;+?U+|5iQ#vP05~(>4 N!4');
define('AUTH_SALT', 'Vhw?8Y~ev,5 _ww$~VpXj@u`VFv%5,o#W/`fvwRhmdVFHY7LC5S.Sn,B4B*cFu5l');
define('SECURE_AUTH_SALT', 'K+n6,I!rizaB[[? fX90qa%9FNJdV,_73}Q^*tDj*, jR8)j0v(yY|auwF%_$eC@');
define('LOGGED_IN_SALT', '~=y;?(z`EK k+aK$jVOe2ySgwAPn6Qb3w`m)LKMf^V7X:,FgO-QYi[r#S1bRtsRV');
define('NONCE_SALT', 'g:|dj?UO=]zj6Kl*72(y<]z8S+Es&(gn8EtlM=8~<ohzEU(GjD9sv7Fx:)tTv0[N');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

