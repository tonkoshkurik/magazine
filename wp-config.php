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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'magazine' );

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
define( 'AUTH_KEY',         '~n,jA0c6u=Jn0ZZyK5rs*iRw9JBp!4tGZ;u(LQ :%8n_,X&z5vp}4p]n:+Lw>//5' );
define( 'SECURE_AUTH_KEY',  '/;Fe<YnG>u@$|tz!2)o[LXl%p6t(:FPd/H+)^:-2s/p^DrxN  3NIne&%|tr`P?v' );
define( 'LOGGED_IN_KEY',    '8VEU7@tGB3Lm]:56h#`K_:z+=v- ^4g&%1sc&`eoSi(3/x}]C9oF7++8EB-8pS3;' );
define( 'NONCE_KEY',        'uxX@&NH~Pqn--eUK;3cGSDK5e,J? =@F~fsFJ9epMsGr5DYFfjy#CG-7N.bbR{dR' );
define( 'AUTH_SALT',        '<;>e2`$+]QF%%S62zvx920;5H4}U>b`.yg-Vev(oO+a_pQo_#S}MTsf(,)u41h2-' );
define( 'SECURE_AUTH_SALT', 'IKJhz>m8-9xgio3Gy%LxSPIYSxq:A}DxM1,cY@39XP&O4vV>.95W-R+RHNr$G-3e' );
define( 'LOGGED_IN_SALT',   '^KW%v;0-DSS^b*QqO3n{{Xe*Ab)z{~.ssM#E7N`N!:ED bdgUMpM ,`61$C`vzy0' );
define( 'NONCE_SALT',       'n:!gQ jFU]vP:?_t<IuK=?]BJc-W~!O)v[BPrKOi?Oohj]XOd.C{clySU3J6&nXC' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
