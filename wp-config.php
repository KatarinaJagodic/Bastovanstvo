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
define( 'DB_NAME', 'flora' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'Sv*f.m%SDZ+2q.U^8 _@.P]fi6HKjec ?t<cq3p!`G.=6~Q(xyweI#Mb(vlkKGku' );
define( 'SECURE_AUTH_KEY',  'Hhr-#I/Q)Z;Y|^i1O.%/tB^T%MJIq4@:`1i_+.jwZ5DunBqdb0-V0KrVZp)>^?<A' );
define( 'LOGGED_IN_KEY',    'JDg+_HJ-b3th2uRsfcSpeWY$YgO7u!|!D*VCc/#b1PQVwOxK@oxcT=XYy=nn)6Ek' );
define( 'NONCE_KEY',        'aL9HE4<vaD)&n(c^JG%t:e?|4en!R#(O*<TcRy)rxmaya_u#xa^GVpLs$lRl=xZc' );
define( 'AUTH_SALT',        '$J`(b8aCY%c;cYR@^b&p}8;{)9qFA[$rFZqSLJp*G7UAl Ha&:l_H 8w:Hx-=yN|' );
define( 'SECURE_AUTH_SALT', 'Pj,y6a|T)$c<zCjt|fRZ@w-uGJGv/C<-!_hLCmneh:[8ugj(2/JHvu~zv< XF}yT' );
define( 'LOGGED_IN_SALT',   'n>YObOo6Xqk3+<C?$*TZYu1v5.F/zzG:i@olXi8J`xFk:J_%Sz%.Ov%8r|3J/Q^l' );
define( 'NONCE_SALT',       '!eH^+]GQi<0v<ISXS5)d8C)2(DJxq2e;.BqrUDlU?mF Q%Qjm.Mivqg%cE+qi:0U' );

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
