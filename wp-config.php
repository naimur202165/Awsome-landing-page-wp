<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '`_ylNpk^f)hbzpDozOS/CFhu9~<-<U(V6v{b>2F6Tf&HTgh@3gIZ#M@4j5ehF:s]' );
define( 'SECURE_AUTH_KEY',   'RksyEz]H.~vx$^VoY<>loW S6Os<ZbOL3 V-*B. *{2.Z&khz]?!0C;|B_$NFt5N' );
define( 'LOGGED_IN_KEY',     'jQTu#gz.f4;draljT%iSPf{o g`a =^vtxZz4:CFrca*t-cgBW6={$g1#|i>:r.-' );
define( 'NONCE_KEY',         'N>=z0MNQJ|51QYg)P,jF6m1MQuc3$^V+y.|6U^V;McIo_p},PPY}2({zzwb$~&2<' );
define( 'AUTH_SALT',         'S0E/L#dGo:I(payhc1+s{i?V9w3daJc7awmB=eUD, c{|2IQx1WV>`/i/KWjSG%c' );
define( 'SECURE_AUTH_SALT',  '=|2kFcdh;bAo] %R`?2E1hOrZKZ~iejE(/h4J?l%BC]@f[ErP?j-Xw)oqd:Jy_eC' );
define( 'LOGGED_IN_SALT',    'ZoP 5Y!TB%rzmGLDzx53SU@.(_+QQ!H9X.*`XdzwQ%=&HW_n:8HLk6aTL%-[H6EX' );
define( 'NONCE_SALT',        'HR[*o&pWD.%>`rUc{iwxyJ#tM Am6E ,tv]FGYO=w+-U2<SB&y!?>Ph>~q{TQN&l' );
define( 'WP_CACHE_KEY_SALT', 'h,ZLeaS$!f}Xkl;&L`jWSNvrfBeDXaf9YuB>8!dsG9pR61;;yh{CDGKEP0BYl+_5' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';