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
define( 'DB_NAME', 'wp_literasi' );

/** Database username */
define( 'DB_USER', 'wp_user' );

/** Database password */
define( 'DB_PASSWORD', 'uinsacahaya' );

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
define( 'AUTH_KEY',         'Pnr*c +V)C}Pc98{D(h 6I#:}DZNE=`YqGubb{0@zGZ 0(7y6|tvJ)+/q@&g^u;c' );
define( 'SECURE_AUTH_KEY',  'H2Nf.$brU7 {4;G3^o|,KG2G&q<VAP0yh6gi4iDcu;K@X}?|#OZX^q?:MYM<RS#c' );
define( 'LOGGED_IN_KEY',    '}x>Kh?qC6Ajl1c}9f!|54K8-zO`p$upzfVHOIadloAbhEwt)MM)Z=fl,pWLD|[77' );
define( 'NONCE_KEY',        '{tWc1AdHc,STxQ:b#M%[`VL63?4uZ&>!x2Qf,1PJgJ{dy)to37$`d9;fc6.GRG{d' );
define( 'AUTH_SALT',        '/GFI8>h$Vlk3$y9}PJV.n[WS>k5x(NeFZgH#{7gxU#r*:vx@5Tgv53?#gk?q,3pB' );
define( 'SECURE_AUTH_SALT', 'q}$/&Mby!l(I5T<f>3dnHQ],!j4d6w}PG4C}=2ne3khrp7fZn%{1>(;0(uv/9>IE' );
define( 'LOGGED_IN_SALT',   'G9wv7;90maO3U|LKb)=])N^5R3kL1]{uj{R_r[^[5:dhzBYoJAez7.m2~[($f8e<' );
define( 'NONCE_SALT',       'e:3ufH>p2Pv]sN)#co!aehl,RAFi*~m=4wbwW=1GF<p)JtpFC{M2_1(6x LL/}c<' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'chy043';

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
