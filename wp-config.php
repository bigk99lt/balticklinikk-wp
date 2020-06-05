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
define( 'DB_NAME', 'baltictannklinikk' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3308' );

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
define( 'AUTH_KEY',         '{ZGr-a3 TlqZ6X2Ay/c^!(6WP8GxnQ|:}qAR.QU}}XVB^m)O&8mF)sg]f@{Hi>YT' );
define( 'SECURE_AUTH_KEY',  '>.Y!JR{cqmsw%gM^PyCZ~iB5UFHtgjx g*@FU+3bhIp3EalR!/<ByIUCq$y}F5o|' );
define( 'LOGGED_IN_KEY',    'gbe[XXD$GTAKQLVH /eGxCn>d]lY-Lbd$A:W093yl`*GXMB0iW8{UgqJxyhHn<1]' );
define( 'NONCE_KEY',        'Oah)i4SMsFeoWn+-2h+l+r #+M1k28RY]5sBC.wHJ2WIYVX6hH@=1Gc)~zbSoW7d' );
define( 'AUTH_SALT',        '9B%Mhpcs==IZC3r9+Y4r*E>BS]? 4P;|G/=!^~3D[:fx^A:MM<JN4aR4sOdagR:+' );
define( 'SECURE_AUTH_SALT', ' b/3k1wZMs X|tC~`Tb)CkfCR+$OoLcz-^:G`wyEv0ZJ)-&dI/tuY>*%j,A}+Gvc' );
define( 'LOGGED_IN_SALT',   'SE{9MCxjgM)q8D|?e]7!+(h.JS+jD5AC@8J65h)rY5d.`Vg!m1&70?H<Q|9lnNY}' );
define( 'NONCE_SALT',       'K/[$XQU0D0hVR$.&ThL>p-FR {sFVRvZ^>zTa^B&exNsaJoiv,Z{qL$a8A3(!K#k' );

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
