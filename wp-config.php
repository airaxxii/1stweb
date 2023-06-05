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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'lkdatabase' );

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
define( 'AUTH_KEY',         '@HSPcmRNYv$~{k/ybQVLNeX@P.sWK~~|(FsCxn.|*JT>guXs^F@.j=z$=Tk-sPfW' );
define( 'SECURE_AUTH_KEY',  'Q1*u9-5}qb:]]rP=O?bJ6AF>i/5]JEkWxUqiA*Tk1=-ehSG~NHgb=Of3#i0|(bT7' );
define( 'LOGGED_IN_KEY',    'AFzz$*DIQY21< bs$UEJ6lydV9@{W}c41@NnT2k&;LqCxO.`h~Q8nB>]2h8P]{[5' );
define( 'NONCE_KEY',        '0uZWx?ZyLY@)aI( ?kZ{n{!;F4ZTm`]>JR+<tc>,($/QM<hDzS=duT]Ci{-ZT5~=' );
define( 'AUTH_SALT',        '&ad?NuM:iD;uC[kD8h+nsX^wY87sx? Tqr8V:W)2%6H@i^1f*3!O?l^L:q{XGSIl' );
define( 'SECURE_AUTH_SALT', 'y&cz~>bA88o,#]S?9twx8uP^>+7iYq)~&/}+jMLbF~Q4aE87%CMHCXUt@i%TC7~O' );
define( 'LOGGED_IN_SALT',   'cr&<cu/@4-Mhq8H<TZxEQ~BJf-bQB}=?L63$BHsX*%4k{$3^^?QMq)OO`h-:/0<8' );
define( 'NONCE_SALT',       'eV<]0w+6Ua*Hn~=_K8H,fDHa4H,Y2#sVu;SzfN/I(}N{GYgW:qBwS:LF+RLff9J,' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
