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
define('DB_NAME', 'LGC_capital');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'f5`ypkuR>7R^C*N+p`&r=^w8-c8DPQ[^Y7ra!N_6Ylxmaij)wJ@>la,S*P|}Vr>}');
define('SECURE_AUTH_KEY',  'SpuJosHsv8Qor)#+ou$_1B&dBg;T8$TG!xt#BY-ph+mk#q:P3bR1hR{#>0Na+wcf');
define('LOGGED_IN_KEY',    's`:]nN[N*S&5X FjYCi4}4g&m#u(^8MOjKDG~7vFaO.G}p-T{WLX7;hL6Kdj401>');
define('NONCE_KEY',        'SP]~0C$[ aEdkbV6c9aZ5dwvDYkj @ |}b@1_{.Pme9:0G}9zZ?~H;XZ_4h+7$l ');
define('AUTH_SALT',        ']F?~gJC@*Ezm4y7`L3{1Ejw$|>o<`%![cA24?,[^{, 9u8seX?I]}m^!ss2l7b}Y');
define('SECURE_AUTH_SALT', '@^x?=B$hv-kZwa92@s)#{e}),a9dQuIR/Clfz-PA<dvm$q-4>lPN@K)o2*bbyxSM');
define('LOGGED_IN_SALT',   'Vqs]PEJpDFBC>9.m,/DpH5$qyy/)zEn|p3QR5ti/s:L#yn+0g3%5t0@=|P2-n%. ');
define('NONCE_SALT',       '.#3@t.F%R<L0nRi}f3?m@q*pLUbfnNa,[/@</g>g}cd/?lLKST*|(ov[/YB8f?$0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
