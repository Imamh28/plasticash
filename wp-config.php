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
define( 'DB_NAME', 'plastik' );

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
define( 'AUTH_KEY',         'Mc0>^0X*7a=mUIECi=iBZwpkK#l~i<xbRamkl yI;y3[:!B#-/rFtS]VyYHI7jq{' );
define( 'SECURE_AUTH_KEY',  'ZTo]Y!P;/@H{vE4F0E}cF]wqzF!-%nE+I9Ez&kQHg8M9x]wr6V?0dAT-G}4#/c[A' );
define( 'LOGGED_IN_KEY',    'k-sf$YpL50H=MCtenS[<75*{7<3H&Z6l1Iv+,KY/wP@`!Ks1sIvY%X*L4pw=PX^l' );
define( 'NONCE_KEY',        'f:8lvD<;54$)8uq4{iO$ATR2BIQ.`7;OV[xu.]<;Qt)LS09_wkvWueI~ ]xSTv*^' );
define( 'AUTH_SALT',        'z~t8AF[7zi@t18mDY$sniE _M_|AXvFi`7t)lu+Fwn%v>a(nT, S1!9c%!=]I;js' );
define( 'SECURE_AUTH_SALT', '0!=:iU~aox2, Bo]G=0;~s*Wd($2%clbo*Jw1PZN-ie%%~A=,qvi+hMYtes4z2ve' );
define( 'LOGGED_IN_SALT',   'r3fhTl^3Txt[u{R5t-j$syL1=P(bK+0y4n>TH0Kn{k4U~N-a353F,A9fjuo=U#|}' );
define( 'NONCE_SALT',       '@`(:Zs1#$=N>&CLKlYA/4-hQJ;<m210Lkeg9o1+>R:#cY#WH^@;Vrq:|Ik>q.:aJ' );

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
