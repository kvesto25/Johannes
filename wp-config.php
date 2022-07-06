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
define( 'DB_NAME', 'u788776651_johannes' );

/** MySQL database username */
define( 'DB_USER', 'u788776651_johannes' );

/** MySQL database password */
define( 'DB_PASSWORD', '8J+F4kPyWdsx' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'M`uvjEA~_PZr@>+NbuVJdJN5L4m~hj >UkO-=-]4ZFwWqqz>;iB:K^;yP:n!5=?;' );
define( 'SECURE_AUTH_KEY',  '`.N@JVIaxg+:kMabiOjQ88ga`VmqJYyZ2gN/zQw8Q9,|f>(voY[eSqH^GC5^4Ns1' );
define( 'LOGGED_IN_KEY',    'k`Yx5;ctgQzxN@%e&cH]:dNBWKhSbJ`i?)Uh>#`~}cH/}s|dSK ~:C<(+1cg34_?' );
define( 'NONCE_KEY',        '~Hrk7H]:}k^^h+/G>M>/,L%.79^3!cfAdpqBQj/o)!pdca&-YRcL}(pmkGsZW8rq' );
define( 'AUTH_SALT',        'c)adIhAE*_AJ7lgcZB!TsvtjKF!WKkeG5Lh<3JOgv|By1At]q~c;v]P^AS[cQGtG' );
define( 'SECURE_AUTH_SALT', '^xui<5vV29kyKlpk.qG(nUryOFZMH9ah/Shmee32TtIdcb-t@VmdwU<{4]zs~d<X' );
define( 'LOGGED_IN_SALT',   'I[*5P@35_hw7Ll(U`HrfEn9cd.es(lU|Kh|MuF__Pm>g6;?%+Yy~T=vEG y6yHD ' );
define( 'NONCE_SALT',       'IzgBUyO@o(m*zN$!h&lcYfbA;bY,ZFoa3eH$ST!70<7PJ3bjn*kdwr=E!;dg_FE5' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dp_';

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
