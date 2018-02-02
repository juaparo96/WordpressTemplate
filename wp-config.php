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
define('DB_NAME', 'root2');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root2');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY', '6bE|lJ67P8DFO*J--dw9q?`CB&S>y)=sJm_~[ 3 !86RYB)r;V,e,W`ZXDey[aqb');
define('SECURE_AUTH_KEY', '99F:fHSyZ@*a%VW|uv;f8{;1V:++X|aRrG,nN4(/iQMOUk3I)Q&A$S&F/hSl+P3d');
define('LOGGED_IN_KEY', 'wTqzZ`{)^+cqUE3!pv8 (]w3-~[yGCqK;XSWOx=PE2Yd1;NgEoQyXE]~v[n%.v7 ');
define('NONCE_KEY', 'p0sx3WdX9;AH0O!_YhcHSK=h%;=|4GT5+ATS:GD+S}[7Hb/Dk>DVxyO?IzgFa,i)');
define('AUTH_SALT', 'lli])KM:z&=q$)4Sx^H-u/{s};!GV!#:nj_pv_%1tgOiWlvi~*qjlN21d`%GWX4u');
define('SECURE_AUTH_SALT', 'TYSUyOe7 Cf-yYA@?^HsRfPLGX%AWs7CT#1=@dFp6}_f>6z7{^<Kikk]&rX)kOrv');
define('LOGGED_IN_SALT', '^ObH~i209nGtymh+_/O:=*qc%,HcHHSShA08S% Q,p`Yq&Z>[3mReG`+=yFzl-zj');
define('NONCE_SALT', 'kq5iG Deuj-_O=jg3#xhu4k5eI?e%9`D^?Y8Q1Keg#*uM>AQ_JC-Q-}ATd!UMQ}n');

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
define('WP_DEBUG', true);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
