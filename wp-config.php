<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mkt_wordpress');

/** MySQL database username */
define('DB_USER', 'mkt_wordpress');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('WP_MEMORY_LIMIT', '228M');
define('WP_PROXY_HOST', '192.168.5.24');
define('WP_PROXY_PORT', '3128');
define('WP_PROXY_BYPASS_HOSTS', 'localhost');
define( 'JETPACK_DEV_DEBUG', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'gpMAtvN(8gRFiEL25`t9Qxs3c=~)30>|7F{N{e}Uiia{22O|]%@!<`r?G/BR2:t`');
define('SECURE_AUTH_KEY',  'L+ovsU7;PQtt8mYTbB|d}Iy`pK6e4^)d!JFG)-[oPt~-0P(/29 A:w-CoFc^YawI');
define('LOGGED_IN_KEY',    'p]|X$ah|UKr~`%{r +,C$(m+E)U73EsQ{21]q]XRBh=+p^^-V+XI.*=ZX*1*j+6}');
define('NONCE_KEY',        '$.oXSZiH6K;I#(ym7B;H.(<0m=U>OmRk3;`W|.;L6-R#S+S{q;QcRw7eJ6HmZRT?');
define('AUTH_SALT',        'K>(n$}37_rG$&>,F}XBY&fZ<>~1.G_A@`H46|3$EA4y1*>Y+5)%$d-EAE.Z@eiZK');
define('SECURE_AUTH_SALT', '1T6q+sF]/FYsNuH?pj$~>[Y|M<SEc<|8QY!<ezg@5kn0yKcKkVc-6@|Q/z1im5f(');
define('LOGGED_IN_SALT',   '1^>B,&t7h2z,f=Nr+!59LmzGl|+?TlgP7?cxSIAFmsr|&Y1P@::2wPWa3b8)bq{t');
define('NONCE_SALT',       'CB(y#$mb;*A^z/hu[p3FD-w Kl&P7L?/33NJ%24d(u^~_p~{TH/Z9.u8K#z!MlCO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mkt_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');