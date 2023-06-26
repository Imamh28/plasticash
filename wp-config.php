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
define( 'DB_NAME', 'plasticash' );

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
define( 'AUTH_KEY',         'ZuFFVIZ[;;q3(1|vdqhEh#>Y{u~{54!S0N$^3+-JD+N7Ka)c|Dt7UL!1+EQqc|]p' );
define( 'SECURE_AUTH_KEY',  '75P|wq U^/&0d$E[yT#>7W%x8%+svkZ+lSUr^rcKp^?t{_gLUuLQDxoAY}#QUl5&' );
define( 'LOGGED_IN_KEY',    ')1p)}#<U5bbzeQ]6fRnz-zpH`bxs#BLi66V{B:09|X:*f0?US)o,RGg#3=tT0LGg' );
define( 'NONCE_KEY',        '@|.bK^EG+6+#=iq9H[E`>PRU/]qxC^DJwS)?6w* fD{f?(W]g]cWSXE6@HqxJuM1' );
define( 'AUTH_SALT',        'n:?$Sryx!V&YNG,]-|AZ}(qa{%<X)Uc/dn~O(hQ0N~Vr<T}^vC*6jH(>UTG&??S5' );
define( 'SECURE_AUTH_SALT', 'S@wuIz9,uF(+Q0iewZ_f@@Sd)_|XZ3v%Xo@ppq$#UN-t+!kFEGM|m9^xd@?k6GFT' );
define( 'LOGGED_IN_SALT',   'fK=*z@h?^~r|#T[6`,FZweMIOrkbnaqYloFqn<=@]#4z5,#|Q+:.oYe:Xy,<C5[S' );
define( 'NONCE_SALT',       'W}#3vyp^`{mRK/)%8*rH50I_O-slxfcp}-JtWH%%qF7<c`YwO.0|>i{/xr@>CsS@' );

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
