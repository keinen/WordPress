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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '[|K0yf+$2uRYIorh<K)*i0Q /C&nGV/>Viu/h}HKJpC,ptwbkoo(.v_eAHuG6JE(' );
define( 'SECURE_AUTH_KEY',  'F5)P ~R34>+8VSBMMBz~FVa+nPI+[ghS%u*vUP?rr6xs}h=p#^My/ku@i[<kP^ 3' );
define( 'LOGGED_IN_KEY',    '4+j`?;tkT?rMzD6uEN$zX#Whr)[4eJ)F;b{?INTCK_H%|Dj(L{5P`bx]K#~(`s$`' );
define( 'NONCE_KEY',        'v+pn]j,Yg_tb@lFZ<p+PAM)lW<lqleEpHo+i]a4-D[)$>.2C]?6*$Xc;k_v xYHJ' );
define( 'AUTH_SALT',        'T!(6/:fvUc`sl#Y:+ioWjfSf/TEH?8<A:FgK7W80-vD0t~v:mz`uk3+o9abgCR?x' );
define( 'SECURE_AUTH_SALT', 'z/bN`G@c<{v#z.*n?d5LmsG!<TkfM[%k7CtsH[b[kv~3mdw@ENAvKbjApa:jo%Cj' );
define( 'LOGGED_IN_SALT',   'i]&i:M,;EA8oG2vx]>GTv>TQ[%j-DB#gis6jwVXV2lZH!+Ne`Yuj j|{^l0Xw^tH' );
define( 'NONCE_SALT',       '?(?@%NV7eG9n!2IwJI1y5n0P2#^* <9 @g;9!<0d$dk90^ru*u?!=J;jE+aD*-l;' );

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
