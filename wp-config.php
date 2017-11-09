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
define('DB_NAME', 'dbcala_dev');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY', 'Is9lguNcp%L/BkyEARa|jh)|~-:/3W$r/_itE$Nj(=T5O7IQ]Qc#`&q.}ns_M_o1');
define('SECURE_AUTH_KEY', 'DxrVJ1S%e:B5vC}2b0b1O$Np%]2Ew5SrLW`jzN{llT83 ueE_DPQ,%dB387ujg0i');
define('LOGGED_IN_KEY', 'N_/!Qgj(5hF6>/|e1(B(M;nQTQpn%VyH7+_r?s[p WQ6XlC7-rlka!wWF(?p+_bc');
define('NONCE_KEY', '9`|Po=$G3oI;Nmvv@&?XQ@!|PcjEIUNj{FJXvDmC=Cm #F%?YF:)D+WBtpP,3o.E');
define('AUTH_SALT', ',}HKGQ_?Cf4TtaWs8b NP2kHvw0oe]FPp2GU&1z(]8_~m@yTX19& !}E77TDudI~');
define('SECURE_AUTH_SALT', '#`6d8Up5a%Y57P$`8O HL(YMm^gj>C2m$(UY0oqChk?-eYNswml >JQsJG%H/yfN');
define('LOGGED_IN_SALT', 'aXw7(O4FX]-laBG._EU@wgg7vRxVxQ~p]a;jYW9YSWHCg_rIvW[&ni6Md@iliH=8');
define('NONCE_SALT', '1z0/`6!MH~?Sf.14,PDDvLwcG!}*uwkE181g3CpJ4%}i^4hDfY;C2bWv!mWB5TEc');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = '_cl_';


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

