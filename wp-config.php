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
define('DB_NAME', 'wahoo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '.e}x~Oy]R<o=2^lA(/}[-|ud ]asf_/JVShU$:8dzi[]%HQkW}E;w#)Y&H%7IdG;');
define('SECURE_AUTH_KEY',  ';rxBsn!s6/&B),=8:Rz(w!~V57,R5%;1 y):Q.Vl-ibh,zVy+:HFLPqItO?2#zR/');
define('LOGGED_IN_KEY',    '!ER:g=)b[44duly@i64j_JY?[W<:%BqE=loWtejtuvN^JPz/QkN5,?ieU#om(tQ(');
define('NONCE_KEY',        'SEI@16c}SCH6>/lGX;XApeY{%^C0za7f}2_<hK7E$+.+|4<+~Ty#|>d3ito,t%w9');
define('AUTH_SALT',        'Vz_kmDLH:<OAJ0h~R&C*LN[9-s*8t z+PRz4rpMXW:UR1(%h/0R_5PG7xspcTKzi');
define('SECURE_AUTH_SALT', '5:s=n6I4M`|$5}?[` DX@E^4DCrHctL5 jY9U-kW9SjaoJ|5r[-R$v0|O+SZB$qv');
define('LOGGED_IN_SALT',   '24g7[{DKwpUvA7,:i tbI2a-$|EE #n~]*(mW@<2|3O[k*)yHRm3f8#<`I[cd6;l');
define('NONCE_SALT',       'ZmUb2dJOquZwrj) `OKGB)DX0-pz1tX3]A[h5Z`B,rj}v;ejJ}=.ohb^h]2fcc1t');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wa_';

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
