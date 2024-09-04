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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wd_web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Admin@123' );

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
define( 'AUTH_KEY',         '56^nVV=p84Wv`+VU{iTGE7tqOyn}A>/=gBt%0eO?7 4cIUFq];u]q6:6nBX>Kg`9' );
define( 'SECURE_AUTH_KEY',  '2L?nVDROtTmFc2sQhy|;8PaHD(!%>>q6pW4O!*=I6Pb:ap2bf}4gRft=]Z=FtyA ' );
define( 'LOGGED_IN_KEY',    'I@I|uQh<:CfaRa(Glb~o[GS;anA*MJbE-`h+hsF)N5Ar[Opm6n`{u@L5^a#[}/+K' );
define( 'NONCE_KEY',        'r39ZCXEdXI4JPs=;PpvN(N;],`CO?rDxT98J{0pdq1C61Y]6{>i%v&Yw_k8|y`DT' );
define( 'AUTH_SALT',        '#BcU%!-|:4FH],D4.uy~6f;P;ZasB4_%Dps0ag$74B(U^kEf/{HsXJLmcq0V_)>W' );
define( 'SECURE_AUTH_SALT', 'E6vLj$K{Fe#(Uv<m? @=0 &Qj0Q[.us83,vK,q^wB6+I<,=WxQ>pbk2HUd/U#QML' );
define( 'LOGGED_IN_SALT',   'Hh%b4&]1U^kY[ViY@/1_X?om4aAB W+N/w ~:Aa:;DC( 5(2;l;J@<(aHSgA*Y@c' );
define( 'NONCE_SALT',       '<F0!X%5P,QC[4D&3!P<^$0[>%]L.6.z/*bG?kgnb6lRPymOQqJ<p?+54;a;&y&E0' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
