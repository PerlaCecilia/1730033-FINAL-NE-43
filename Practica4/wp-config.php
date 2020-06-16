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
define( 'DB_NAME', 'wp-tienda' );

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
define( 'AUTH_KEY',         '@_m2Yk_,jnjU,Qv*DUs- }Uv}X!x$#Sx12aHY#U1bnQ;j<PaTUSz^Nw.oXJ.$ghm' );
define( 'SECURE_AUTH_KEY',  '9Edm~|zkf}]9qm~5,pYtcGsi[5uO51X`-d/l@LsUFhP(4N{|F;fyutT{<teu(_%Y' );
define( 'LOGGED_IN_KEY',    ':yLS>OSKN]A51Qh !!k;b+[fAZeMXmeEq})No[q|0T#!}n]E}QBX!=-Daf(;`(Ey' );
define( 'NONCE_KEY',        'tj:p/V9tT1B,dG4,.sCn3bsEP*Z<LFRS*t=]^F>c%[yCQD2.=r&*;gQiP@Brq}& ' );
define( 'AUTH_SALT',        'pkko,Y{6|&/e0D9:pv6rRUc4-b-s:CP?JvN>a[88O^KB.4G)10C[Y8|`*>C5I(cG' );
define( 'SECURE_AUTH_SALT', 'd8VGjveaq<f/d>{~n`W>)6p#}VorEr5:qaUH.!X9U*,5p01u o]NpG.@l+&X0~qY' );
define( 'LOGGED_IN_SALT',   'psy~ B2[ZV2;_RN?s@{S6H(1l={cnzP|31m1E9i~k+]NWbB8,)P#=9&ZzqR2..Yy' );
define( 'NONCE_SALT',       'el`6e;=rcw>?a[Ao_i-{s1h!%qWR3=L,wi 8>d:Q@k[M/71G6@#R[1B(7{{3o6#o' );

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
