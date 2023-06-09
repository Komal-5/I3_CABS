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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i3_cabs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '8B4?O?j2gyH<6ernDw|`o1*>[lJEnjDq)-sYbonQ#munuOyf~mh_rjR}}W}|8_vi' );
define( 'SECURE_AUTH_KEY',  'K*!hhmW-lEKQ)oVetK_K-Ac~bRC$I^y{sb/?bXP@y%Vr[#(%[Ru_@7aH?-%3:Ff!' );
define( 'LOGGED_IN_KEY',    'c-bty{w>#*oPTII+V`iO%){}In(Uf]D{foG?$891R_ur^+smT:HUFMSj-,j~<:o)' );
define( 'NONCE_KEY',        'xN<,OP3nhr>.V>|bMtYnqZ4dFcKI)+LtL>BR0E;F-[(ujuB>/,-q+|m(KqN*?Lc*' );
define( 'AUTH_SALT',        '^D=*jr h8)6$qPJtm?B+Bq_37B+x|saGd5L9H 4OPfj.L:GSKHJ2~`Tgfw=/j=cS' );
define( 'SECURE_AUTH_SALT', 'yo~CQFrk{p]R(uu{,yUy1m-za0J#Yuz7Uj)~n]Th2GQ8g1fqa_HB,fBM~E[{q&rH' );
define( 'LOGGED_IN_SALT',   'telp]sYZl`#qsL9WolGW`NO.V)$wQ{.~K6Fp0d_1RS$N0Xd6KI!dyyY(A0Y>0n]~' );
define( 'NONCE_SALT',       '7Bou_n/7E:MX:9a0Cx#oI)p@*2jMQaz3Ti>310,=3Zz|i{z|>e*|6}E.y*..}e|b' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
