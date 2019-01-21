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
define('DB_NAME', 'Tienda-Online');

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
define('AUTH_KEY', '6,at;tniWPjOre_9!EF3p:N|V6?V]Ums{=l)m`G|l#`VGg2~6_DS>WYX1Qs_6b$|');
define('SECURE_AUTH_KEY', 'UYxS[u^^RNP?w1Ql~/-&jb+1/m6K+{fc?1Q(~C@]<eik.+Oa3i~B6CS4yQ92hU^(');
define('LOGGED_IN_KEY', '%U!8Xs3S{Gi@a7(EN,z$=~7LcY[#.ekaSK&Jg5ER8Ob9wH+kOEI-=47oI|c(#38<');
define('NONCE_KEY', 's`4Z}K?{NWc)M)8>9VQM`1Kat_J ;9* O>?4A+_zdeG%;Qo!ld;*qQ|r6>+SjAyJ');
define('AUTH_SALT', ',xGX<AR/H)o(nv[Ma;e|,8p0+J([$bVZU2tap N}?IQ)G2&$jlI6U5+0jMIn}p`5');
define('SECURE_AUTH_SALT', '^?HuzgnFCkx_Hx=gF7MDhef|,}G9I^6~F9DHs6[dMP+klfgnr8I_5qNMp$hCJrGd');
define('LOGGED_IN_SALT', 'deY{Lg] 9;MUmAl|E4TqWR-FAFHVzH 33C,N3YmyY[|9V(mYjLyCAxz(nJ!IH#qD');
define('NONCE_SALT', '`!4TE*x`f;zlPfMNR[&4.<6:#D4-7}-PiF=n$w%i--Ir&`GBO70tALF2>0(2MW&6');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'td_';


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

