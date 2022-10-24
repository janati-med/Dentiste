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
define( 'DB_NAME', 'dentiste2' );

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
define( 'AUTH_KEY',         '>1-BZ.wzGogP[173_Yk[SY+5?Q9J|vX$sQ;GJ24+Q&^>AdCgyR)ne)DYZ1(ych4f' );
define( 'SECURE_AUTH_KEY',  'JxbV,X~.nnj<7Cs#;tOdmI{)IY=DT0<t LM/<fNx+PGOvc-FulhJy %V#)]N3T:3' );
define( 'LOGGED_IN_KEY',    '?0SK# L3CYg*1(/`>A`j;gRaW|%|R8HWbqwq3J38AQIyVs0[oG::%g|j<*90X{Hp' );
define( 'NONCE_KEY',        '&q+Muy,K$MLxD#bB@Epa+6Wj;]+)4>>+A~ftBI61w5t?##U:!u+t^EkuW^LMppS-' );
define( 'AUTH_SALT',        '|]Lr_SQX3y)gK&9;4fo=v@-b|i<gS,b^L3b|%;En.Y yi?3KhC6xPk;RwXKyQoz`' );
define( 'SECURE_AUTH_SALT', ' gm?|EnDKe 4&i7vSU,Runsmme@xUxaLjtvGVzQgd:wP<;vs*Kw3n|LL#2:^.u$/' );
define( 'LOGGED_IN_SALT',   'M5cr,wFUC=}0_GB[q;yEJOA55+pj^ia%+EYf~=70[n-n^n./j C`m4`|beyfg+W ' );
define( 'NONCE_SALT',       'g^fz&vp!r?7A#,=jXUh{8wZzXuWNUxcTaLVc<HV[Eb7f`|Bp0jP]~i*Ft(ia^{}I' );

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
