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
define( 'DB_NAME', 'watami' );

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
define( 'AUTH_KEY',         'Qk2RL.kLy!$7u_9Wgmq2+4f|qxB63aejF.{%f.6r;?(3H8onEVI2,a16msBNhOQ-' );
define( 'SECURE_AUTH_KEY',  '7*{XGof%dEBOWPZ3IL%Kw(PPg)$<&J*3Df6z{r?H5s38Q{8TdremMG_e{4&*C#X+' );
define( 'LOGGED_IN_KEY',    ':6[ K<$V3Db|b4(uI0-qy^$y9<W/I:4*~^hp6!<8?3CHFpuw25(hID.DRhQ(0D<c' );
define( 'NONCE_KEY',        '~Bdu^:`A:$%hA`~Vmc9]3h($Nr84@zF>|zzT8:Cw9.Vx&w[0a6ZS?5z2O*h=^UYQ' );
define( 'AUTH_SALT',        'zk4qL}fWxQr5;yM@p[n(|Zm0K^TPhnTcFt)11zO,t_ I4H)FsP@!M2cYCXEN]LQ#' );
define( 'SECURE_AUTH_SALT', 'v?CX,}RnDc<]=+HVS@.H0XlR8M^R?)Ky$&k|5c6LQs702x/&5G742VtCVb$6zH$n' );
define( 'LOGGED_IN_SALT',   '&i>&RMz[{)o,ZL43IiCiy&5%#wjBqBm,IvzlKT$Kxh$5Z:a2oMw &}It6Tih[u=g' );
define( 'NONCE_SALT',       '_Fxf(&C$9EdZOTCOI{@}qfvB+JaR$bHG**skKnX!y[B0e:Ya:zA;(1;MRkBX517]' );

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
