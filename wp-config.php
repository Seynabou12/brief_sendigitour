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
define( 'DB_NAME', 'wp_sendigitour' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '&V,c|IAx}|6L%W;-X1Jmb+m)9Wv3]r_roE5|v$8}Td_%uBXSrXB<xgwf8UHR#]Wv' );
define( 'SECURE_AUTH_KEY',  ']K?n@Ll4%.jq9%>8X.7h>s-`ni?#B,yRZr[fM;`^=CuO`-{bW|^BkS?{B0s!?DzV' );
define( 'LOGGED_IN_KEY',    ']a2jh:@PG@dj76l1|;nfKrj(?PCsLYo28r,,C#;qvtPvO$JvEOfQ5SioRp%>C6GF' );
define( 'NONCE_KEY',        'WRE1S/Z+S>u:9r;*^B|4[$BcJ}^|1GfOtVc4/*FOE_3r3(?FSYP *t|vg)kpOu2I' );
define( 'AUTH_SALT',        '0Xn-b}q0,8D&puHf]AWd-Y >0G~|80|^Tw/mS+5Ya,B7c$:tx`gKr@T3VjANa9Zl' );
define( 'SECURE_AUTH_SALT', '&9X0vdh.Z[%j]w.~E-Dsafbp{rbQ- [G<Mp[.cPh|8np7M:fdk0bDfVxuK!rmH~*' );
define( 'LOGGED_IN_SALT',   '? j )%Jm,!Hz(D9tn1B#jk/l}Hdh}`}U:lJNq[JI;VCCkrdC|Lp%+/YyEJc+S@I5' );
define( 'NONCE_SALT',       '#bMF%6v<]y3|}srIlhcZGOYII@tAu&|O%.LuVQ h|KGO,~ ~WcI?H#z+xw{oko z' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
