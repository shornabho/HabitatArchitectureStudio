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
define( 'DB_NAME', 'db1932' );

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
define( 'AUTH_KEY',         'gqLeX|i+<w7ooAau%4cLeL_y$Qz!^AqkyttpQ|n[vaLVdTi2N5B1y|kl|y-+gY=x' );
define( 'SECURE_AUTH_KEY',  'xwz}{u0(4n37GnL CFaUXnA;}X&${Vt2|asFez_n9 9EyD6Ts,Ve=9_2erlEB;)G' );
define( 'LOGGED_IN_KEY',    '**!{(c el!k0RChd J;t*,X(?m=nV,HAhTuUd80m3nVSy:naMbj:q/0*Q1,l&;)F' );
define( 'NONCE_KEY',        ';Z|$W:xmm%&xPyl3)mc?CWc>@4^2s{c.ZJ8-Y#P,$yP$XD<9o`fO>nHyk,sE![.O' );
define( 'AUTH_SALT',        'N4t&5.2lsmxS!}#V !g#zq+DsJJu?--R5<5ja~e-u5ZFkn%l D,)2aG%B>o{&(I]' );
define( 'SECURE_AUTH_SALT', '^S?VkuZykU`G+tVNk6,(d|R9zj`J#fM3}*1&wJ>{XlVcYk[hh*F-by&:j p_FXep' );
define( 'LOGGED_IN_SALT',   'jn,N}M&sm@:b^XeUQX7:9u3JP22V+iPT8e2kmo}r?PRgq$ 7jE[T@ST|trg!e7pE' );
define( 'NONCE_SALT',       '3<wX($6tx[Tm;[!/>{P#VOadLlAWfH](nIs=NTCO7mWp_E[,<}T)Ao~t$e&mR8Eb' );

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
