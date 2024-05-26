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
define( 'AUTH_KEY',          'kJi<6|OME)6S]>G<nyJ!1.#`PKu){tl)G%%[C2hj(O+`zrOj/q>)W9GJ_Al8t$91' );
define( 'SECURE_AUTH_KEY',   'k yI(Z58DchAN38C(V7H)3_,@mdWa)e43]{?K>AWds?jp__sQ*4cYn3]3{:n+??o' );
define( 'LOGGED_IN_KEY',     '|.bN.^aVZjce:O|n;jA07Zez*Ue#[?-<H/7bdFalbfM)5yJy=iOrkH5R)NOkf96z' );
define( 'NONCE_KEY',         't^.XU6UQ;oc8Wg-+m@KV<Z%4-BvfCp_!;@@`.x0(*<f]]0^x9up5cQZnR1pU0SnX' );
define( 'AUTH_SALT',         'r/<@f0e-3ll-WWKqlRyxyYQ`=#Sx{%:q Y9LO}QMBd1<mQo<ufO#D<Ae9&oo?;3D' );
define( 'SECURE_AUTH_SALT',  '|JPg)_r]lt<r-/Y5M>k?s2!qcM+U}Z$PG@~pv$QDXNAoypc4LXKeVr0Bi| HlDHK' );
define( 'LOGGED_IN_SALT',    'DEdz1?].#J-orPC%CVlNLYAwg8F6OYAdT[k#j9^~Zv,DL=YVwW~tuzM1zLIUXB^i' );
define( 'NONCE_SALT',        'mKLDOIn^hj@%CCBl!IA^iH:6ICfI{5)=I@:[X`B.Mh6h|nP/1##5vN1IADJ.[kXS' );
define( 'WP_CACHE_KEY_SALT', '{oJ{RcPkVd5u6]/] MDGI?@m+&A7D$_S$m$E[Sa350 R_SC=I@,2&v^4t#V{4xq^' );


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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', true );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
	