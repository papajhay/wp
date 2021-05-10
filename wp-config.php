<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'theme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2RUOTvx+.kNgJB]tY1[}%Yz8DP^@wOZsEaF<{9v wt:pOx*_a*7Qt+W)9l)EK*V[' );
define( 'SECURE_AUTH_KEY',  ';ao[s?LE@!]B_D6;BgivTB-<V2E/5twkb=KUN1?HD}^8k8}dL`RKcb.Tl)S1U.P5' );
define( 'LOGGED_IN_KEY',    'S-jTVLjZ,Ovpf(s&HCi}P}a$|hP+EfY$miu%dW+,UJi4OvDbGWGp9T&Dsph]9U:[' );
define( 'NONCE_KEY',        'p)|>HbzDsrNVVs/}#t=cy;%Ez_g/v9y$@3,vT6bKqp]a_ijJ?^&eeSXSN3auM<I2' );
define( 'AUTH_SALT',        'ah`[:zoTk|&)NfMKxgB2Ugy9N{z%4;x;y;^>s~b:QN:0LYuFCbM-iFv `9.)yu8P' );
define( 'SECURE_AUTH_SALT', 'C3T(a<3K&5Ujg9+M2-KdWy~O^-)h}KdHzhBEp;+12?c>4[xr@w%*-!cgwncjoPS_' );
define( 'LOGGED_IN_SALT',   'vL#O@p:6;9nTjZhxx+sA[kc/;N!l^4u7b+Uigx![$6xD,k@XPZl[^FUNc.9UH<&x' );
define( 'NONCE_SALT',       'ze4=7H:,`N@yY!])%xip:KpRcdD.fGW_,&efJ6%6!jNV,.jY Hs1MF+%F.qKP7R!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
