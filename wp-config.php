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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'b)%t-xPu59sGj`4;pWeY5NOWGST;fC,OkJ|+.;/}Ga_NC@gSi-t+3jHCu`0ALQE)' );
define( 'SECURE_AUTH_KEY',  'm&a@&3r/Yu[zM&K6SnQd^zyXsCxH x]jjYgbOzJ(S]Qh;GP6,g*#$a0nx@%l#M??' );
define( 'LOGGED_IN_KEY',    '@)Fj]g}Rr|-h1Y&os#p$gy1GE!a&?h@*{Z?s+PhpbC4CF4`0a!h[nv(mAD7U~mJs' );
define( 'NONCE_KEY',        '?6&e|pyX./v~4>q-dKE+e :t.cZQ(y2WM3x443[[,M[:&/Ba8.$}cbM_(,]weWzN' );
define( 'AUTH_SALT',        '(S%QFyeoA#v6::~K`58f:;0ExC!F%NQI]&0sseL9vp:y*MU.P3iey8t`5AOOfu*4' );
define( 'SECURE_AUTH_SALT', 'kNs*Hlw4d(dG`H=Glg8ST~C#-0+}5[S0 cAfxV6Q7hT49Qf@>vYz1fb2^y*fq#FT' );
define( 'LOGGED_IN_SALT',   'M<HNo9Vo!bQTe|N1Sy1!mojxlUwdBg9wpguRXnBrK!ElL_)B8nb-guKt[BxfVZc:' );
define( 'NONCE_SALT',       '7-9`^i$u1Nvo:qZN1eYp[zDmetO u;l.lV>Ndw^G$bm}DvR V~>r^!QQ=X%#[ycy' );

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
