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
define('DB_NAME', 'miicreative');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'D7Hpk2lRsx');

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
define('AUTH_KEY',         'EP|jeQ!%a{KG@9b2uip#GBRHM:KX!AldhPA^N+sNhK6TO4LS*obGbb%#]`fr@+6n');
define('SECURE_AUTH_KEY',  'N$O9iqDHk6|a0@!fIs:&1qVP^%)Vnl|pl`/~O6?w4zI:G6>LI*}HNl4CgTkQ U7N');
define('LOGGED_IN_KEY',    'iI_r}hOVe?xkh3@{u?fRL:D)A(feRN;^PMJ%|LJ`>kjYDpAJg<*I9RH@w3tE _ei');
define('NONCE_KEY',        'IC9D9v_Yp-i^]{=4DvWWcZ@3@:-Qt21+rz)<+[tExMZ[%,q6e]uM98Q*,,_#bVN}');
define('AUTH_SALT',        '6MFJThZuPpM1,aLiOJY,W,}*H(H[A$0Epn@Ve?#|Ru+rv7LEudxpnS%>hGM|zEfh');
define('SECURE_AUTH_SALT', 'n5-M!HSqneQ)NgU_](Nwor:~P#}#(H}#+9@muwAl1`HCBYaqA6Q%Q7ERX`/2:u}O');
define('LOGGED_IN_SALT',   'EvP}c#G9fG9;OY~(4$t2hwU@c{@r]U; ih/NvIxzSm 4[Fkqg>g|Tk{p.esp<W{_');
define('NONCE_SALT',       'yWjSb{{SHL(eZR`[FF:.x_pl{tWP]0u}3o:@+*[<Jq2fA4RWX/|qHAAxSP9?tY}]');

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
