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
define( 'AUTH_KEY',          'O;,sFVBc;g;%8|p?f+F:/@BOTjwuDnq<4NA3H]]zLb<F}]#.*]|P^$:/0WN[O27$' );
define( 'SECURE_AUTH_KEY',   'H<d@jt2J,J0NW|UI$B[/IKqLHUZ}Za)A)D/,m4=>ILd_`>oK/GkzYFX:i9/vP.C%' );
define( 'LOGGED_IN_KEY',     'bV[L96%Ph0%Eex9.&udQAU@pCD0?|P}*f5[J&^_w23wCQ24[3Es1(EB=%(:$go67' );
define( 'NONCE_KEY',         't,OfzD2s/K{*4zZozrz<9QLTjs#/j>J*] hU::]8 &>=YH(QYA#Y4B6#F{Ivv&J>' );
define( 'AUTH_SALT',         'cjGYlSbJF<g#t0Q2xwU+i*5QBXIh-{IT}JlWIEbHR@=kQ5!02r#74MDUuYIEqy!5' );
define( 'SECURE_AUTH_SALT',  'r7nP12Tu9p6T9c#^6w;xIVmGff62kd6u$N5p~6MF*< sD0<c;[DRxC|&epH%`(LI' );
define( 'LOGGED_IN_SALT',    '~.<E*(KdSS|dS;IjpiI4{t+ !;|UY?.Y<edS]Wbk18U!+p4x9>LJ ^6,GEz!XBof' );
define( 'NONCE_SALT',        'NhU$~~vDPK_Pc3&_Q/Y[;u-q,a!AR#(w$F;n4QnG&YOqMc _}EMg[:&ad8XbxA?{' );
define( 'WP_CACHE_KEY_SALT', 'W=2667A27Z}o {q?%0}r?MFC/;(]tAZo{e0;j4FOiGEGq/suNGVrCC ,vQGc5cYH' );


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
