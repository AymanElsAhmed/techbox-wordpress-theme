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
define('DB_NAME', 'techbox');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         '4nR`m!|*2sBWlflAO<xKyA)CMa2F>pTd7OF3+/o@4jei:PSdxBveURG=F!=g{ n{');
define('SECURE_AUTH_KEY',  'YcAvuy2 Ui&8F>c6g0.U$8*&&?X[WwC@.o$b7YvFL.%256rg7?y/5J%]lJ6WANu_');
define('LOGGED_IN_KEY',    'Pw1Qi![ 21/KHU`[^23+$N7+eoa#Oo7/X1*_TEnqCN_B6eNzRd<INA[mw2(+0/!f');
define('NONCE_KEY',        '5J5L5EI,$Ix:5{{<!%.3e0hAiFc6QTM%A_8Im,5+)[I:8fhlHR0FwC<:k_X5Tn(d');
define('AUTH_SALT',        'W15jBN*Y@%9uzo@6I1m19:]bp0<,T-CD5/{[E%>Bizx^RZ& :H2x5mDni-C40C}<');
define('SECURE_AUTH_SALT', '<6q^Jp+xJ{gp.Y~{=,0q!!;8c*;f<V iG>XQ@Ak*7:IoF+A51#MT8#PsNq%crYbv');
define('LOGGED_IN_SALT',   '@z5?HkE(*vb.59_]bBFLQD9b0xfxhU5v1BWvZ`$1Ggo_ GlOt-]Kg&SqP?v7C#`>');
define('NONCE_SALT',       'y5A%W#u(;md_;E(C#YG-.K(1-h &M9hTQOqQ`UD-=W)XvLXEyt,ht.G`INzD6R2:');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);
/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
