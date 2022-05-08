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
define( 'DB_NAME', 'test' );

/** Database username */
define( 'DB_USER', 'dev' );

/** Database password */
define( 'DB_PASSWORD', 'dev' );

/** Database hostname */
define( 'DB_HOST', 'mysqldb' );

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
define( 'AUTH_KEY',         '/+ER(XlJ/D-_N<$ ,Z_&;#+Oa81FQg8`!GH}rWqWTr_iQ4&puM6e3[BJFvsbkaw6' );
define( 'SECURE_AUTH_KEY',  '^ZtAOvQ77/@JNaK 463rk`J(-T7WJ^#4H/VKVf]d;6.fn?(Rf(4X%Q4DlHapufGx' );
define( 'LOGGED_IN_KEY',    'O7Sw#d]J! m+8%2| LhL8?Ct|sp7$.xJQCHWRxU:u)a~k:Xc=FZ31^H+-)Yd|4Rc' );
define( 'NONCE_KEY',        'f5Yi3a~G/aQMFzSe(*P/8^5![{2 1jOu]E05y*/2*WX<iL9pY;V1MXyzCo<[>_[S' );
define( 'AUTH_SALT',        '9kS`Rva{]_rQP!WFHel:`!EbLO[ysN{~RdSdoL8)di{m8=6<:XheH%=D5M7^mH<;' );
define( 'SECURE_AUTH_SALT', 'MSIsG?KDRd.TGTbniI_:m:Ra:aYn@YAB^)Ur>y#yUI)~1ij7pqf4YcMyVsHa/yw@' );
define( 'LOGGED_IN_SALT',   '4o9mlp{da@*UZ~/b&t7h{V)n8#[?8s,~Fs!{g%[?B=dbp!3M9lRqv^[Tn2lx7jGt' );
define( 'NONCE_SALT',       '@EugF$7?iI.uNH6<5`mRT3XQ(ok4?%2R3a%=g@UeGdO*;{vVRsev_O)9|SA9wI,I' );

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
