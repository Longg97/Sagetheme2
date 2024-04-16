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
define( 'AUTH_KEY',          ';|517=`w,j1I!@(l/0)M|ek^<z8Y?Ogpy@:QB4g}SmwqA8/J.LB=_-0/QV#Rz(]{' );
define( 'SECURE_AUTH_KEY',   'G^Af}FNkD=LD7q t3?@aeFT=Q<D0Dg(wPjv-k5G8t_Nh= 1mohOCJjBX4/:@t{Nu' );
define( 'LOGGED_IN_KEY',     'PfHnYs1xgE{cUR,/bJZl^Fg4E(f#*qr)$T*qk8jH]NYKT4_ZX8%PjX]/ G:eX|26' );
define( 'NONCE_KEY',         ']ZhO2uMe/K-IyCjJM~[nzNsL@e:fDu_$$JNFHEm]0S@_lCBgsQvHuT?M#F;39J4^' );
define( 'AUTH_SALT',         'Mybq]39)(Z#L>0y[P!;EnicKbzUlwvS}$ZBeUahT.x{Bm<)7.T^?.k%RQTpnfx{y' );
define( 'SECURE_AUTH_SALT',  'wvz|sGHfkk6/nqD(Pbq.zoLuk]cL@niq5t/xk63b-Asua:JX!mal{$n_xp82Nvm`' );
define( 'LOGGED_IN_SALT',    'br[k13}(r >mJ-y-p9l4v;TAzAlwTOsv)#)>>Lsn!k1+xX{-Zcl}WPxeUQRkFuGE' );
define( 'NONCE_SALT',        'OTEK[gkGTpR[ga,}!<#B+e2Zw1Y1x!Pg,C),QuQhm{x6l@.+nv%6EI]iG{I.R-?(' );
define( 'WP_CACHE_KEY_SALT', 'SeN=eY@.P>pNx>}-2_29j,zLM&HT`%:;J?bMSzfn#t;kz0A3/{*>Z;e02*d`4rk1' );


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
define( 'WP_DEBUG', false );

// If we're behind a proxy sever and using HTTPS, we need to alert WordPress of that fact
// see also http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

// WORDPRESS_CONFIG_EXTRA
define( 'WP_SITEURL', 'http://sagethem.vm/' ); define( 'WP_HOME', 'http://sagethem.vm/' ); define( 'WP_THEME_ACTIVE', 'sage-theme' );
 
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
