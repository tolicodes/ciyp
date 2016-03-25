<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pujatech_mainc');

/** MySQL database username */
define('DB_USER', 'pujatech_mainc');

/** MySQL database password */
define('DB_PASSWORD', 'mainc@123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C~qQW14G)blTZ*(*o.<wje`7/wX<,X{c`v^qg`l!)QAp5-9[{wrx^N )vT|q$j>}');
define('SECURE_AUTH_KEY',  '+PB(!G`bs?gbL=FxjX8dll].gQfhI-]|zd6V.U5`on1+y`J?[Ze)?xo(,FA)Zg3@');
define('LOGGED_IN_KEY',    'q1@=0g|*Y;KzE>9+P=2>@:xK-7FD HPT82~Fco!7HkQe5(C`(7 5mTcf.4cY|r5o');
define('NONCE_KEY',        'Z6?>pmIK,q2O+=|BJ--||O,:^=wE.zOyec3>GO>&(dP0V&Dc|Fx1~N!Pzwh4G|y+');
define('AUTH_SALT',        '{F<RPOe-nOYUD]kjsH&gVL4}Oqb38>Q=J1F?>oGec,o<*+62xqPDM=$e-=#2wxGO');
define('SECURE_AUTH_SALT', 'C<[>!+5`1|(wTKU)x<VZQx>>;EhX&8[`J-)rh1&.o(!e_h@,lmbJlZn:8)B+]m3Y');
define('LOGGED_IN_SALT',   'H00QpUX-j=*<Kp^S<FRv-T<meHBtzUprC}|:qCF(.=^cSyqqtJm!!|%!K5R2MP26');
define('NONCE_SALT',       'U9}|MvONnIaD.]!-1b`araRQiGeW|X:-U0Se{:B6.*Y;iE,m1p0Bd{OJ:;0-4ye0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');