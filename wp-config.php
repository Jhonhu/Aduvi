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
define( 'DB_NAME', 'aduvi' );

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
define( 'AUTH_KEY',         '.?5TM`*7~N*?*y@:{(=_ji WBmZF;G3 Ut#kj[Uka=DQi`2&glq.-XTA*4GY`!c:' );
define( 'SECURE_AUTH_KEY',  'MOD`!xL2utrG`5|nHQ!To{Ofn^>S*9-U%d%g!o,_BT&f9FSOz7NpjC1uEox/uh@{' );
define( 'LOGGED_IN_KEY',    'genXNE#l,C_E1E<}3s|[oq`Gn1V*X%[RcVOImjd6ha@-qF{{3~x:8Hvke^/6qoVt' );
define( 'NONCE_KEY',        'L^Q{G|.;bjNt+3,E7%nlL&QVC:?GBH[eK&vQrIR}wiWK~XR=3r]eklVDaJ_m<Lc@' );
define( 'AUTH_SALT',        '.iKS4|/&yCxFlINV.y[C#$;qj2UyZeScpJ#O>s5NF0pww}Yyt6q%|e5oyZ8lxF:8' );
define( 'SECURE_AUTH_SALT', ')ZbmJij`/u~74YV1$H!gK4>5L<Vegc%%3_;t?)cnnrSCF>%0Fb|h!F8mqN4^7;57' );
define( 'LOGGED_IN_SALT',   '76h7b#GjENNDKwyAulip`(2L_Gj-o1:x2w}qxSrkiNlh6:n?8&8:<8/z~C@mz=(z' );
define( 'NONCE_SALT',       'ojmKDw:hKG_&HG? O<$ |paSMo<=(JV-h4v)p}MCdTZ3#z,Sk[*S$49bA&0(69Ow' );

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
