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
define( 'AUTH_KEY',          'bi><4R7!e8qX^&&yW~uY1t3f*eBtC-&72<G&gYPDwoFfWtS6xH)w~MHv=THjM-;Q' );
define( 'SECURE_AUTH_KEY',   '{A(_7T>|]1kXh#7M|%N9&8f/Y/s1apvBk)AP0*%p5p35d2a|4~ND$[[A#z-1gM77' );
define( 'LOGGED_IN_KEY',     '@&?$FBzO?h>|1w}b[dq$X,wU8Sp7p{c;>=&1BEOK`/DXYswz7fdGiux}2%{Gg=Na' );
define( 'NONCE_KEY',         'KY;V_`Hq>8f^Z9SgIq;lkM`V^JPIFRm,&F/4sMsHerCIfdck4SG|eJL8[iChfdkM' );
define( 'AUTH_SALT',         'Z$]a>$6lv]$1#bY^3=[}r]T1NRmO.z7<[QHEw>otT+?ih7,-]_?6$@tNsK:jS`#b' );
define( 'SECURE_AUTH_SALT',  '3zUxI^w[^|jSmB85a(cL0=DT e,T?>dzM6M<YMNtW($qW(SQ-3z4,&a|%]I2RPy?' );
define( 'LOGGED_IN_SALT',    'e*lwSfX/CEmdjuYvBYrPR32[F:st3b4B/wo11ki$]F;@DT{#Hdddbbo-F>l:%I/:' );
define( 'NONCE_SALT',        'z8&CM4`6@fc:MWYYe?_Fs)3{$QF2gj 1}Qq&]r9bo2,#q`*]4P$G<|^!x%xKq!Cu' );
define( 'WP_CACHE_KEY_SALT', 'S[Cocns~a8yN+f=Sq:0|:tF0v)zf?zFUD9}F[w:J:Uq[p}uUR21M<rzr<`NrY{}N' );


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
