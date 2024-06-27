<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'fabwpdb' );

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
define( 'AUTH_KEY',         '%[@RA5`W=g42W k>O`Q4K-g]+sLVc9-B3LY -(CE|z^&gV,W]:pPnU.(2@p(%y:G' );
define( 'SECURE_AUTH_KEY',  'P]RR`Ia%wOI!Ia]@;}ZSYNe2+usU*X|AVLoyqL|2QSBc1%)lrN*i,)R=.zyECmt]' );
define( 'LOGGED_IN_KEY',    '@OVx*N5h_@JRtHG21O_7mfRbFE/$w[w(Nuy_dE^45eo@tbN|u!uPdh-S5#/*:. 9' );
define( 'NONCE_KEY',        '=!nz6=#2E1bV%OApmt2JocRP|CjkiuF=)3}u6aY#[M0H@jyT2?0N5e^09}3eGPXo' );
define( 'AUTH_SALT',        '39ms=c)Al=pbVio1@wyy5mW/{Q_5`<}?$d+FX/5b{nPvDO:IGt Cd!k+)w6I1+L ' );
define( 'SECURE_AUTH_SALT', 'O6u/J;dSCa2U{Z,8-M.t)L@GO|nta<}@{c,f-P #z yxN]m= esekYh4B!fEm$Bo' );
define( 'LOGGED_IN_SALT',   '}mSlpzrx<VP}|Z9zF$LPszXpyQh^r)WQ$c2?43Y(w!0iR=L/wgi+$SQ9j<sT)uXd' );
define( 'NONCE_SALT',       'Z#7D4Mi% XLrn?6ISvhI:emhu5SlK}5L#%Z9@9vt+lbDdvc(_o&fwt-r>T_t=9EY' );

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
