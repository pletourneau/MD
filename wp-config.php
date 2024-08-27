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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'a9d%Y2pAP]6H^P)zbJ6l1*j.n-$.qk3h_5|Mq5[F:707{K~!;[FVLC&jj8yD^<TL' );
define( 'SECURE_AUTH_KEY',   '+as5CNj<TVudeAk1Q!Jp{XvF>]gDq1zTX=D*[]gXl`Nz,!)@;(IT!ZWhi<$mB*Vu' );
define( 'LOGGED_IN_KEY',     'Z)Hs*5K&UiuBq(%kDEI#6Ki%5@/}2b_IT.|^^s1CYOZM`52BFSrnD1XgO+VtsToY' );
define( 'NONCE_KEY',         'ow#PV.*dgVeUpK$rI]iS.x LeSjj^|}6lw4/t*uM@ZQHIiWAeyfIJl[3M4Lie9Hp' );
define( 'AUTH_SALT',         'UKi6}@HcY/*xxXr9&t,pO/*/wh2?] Eswus$]oz,x`S%VRSX|.E/c]:FBI^5?~xA' );
define( 'SECURE_AUTH_SALT',  'oI4)nw; kxA#%,>qfT;oa}Rko=lv)`q=6_yDyD7.[J|wdnTXY~j_@;Ieea)T(t9q' );
define( 'LOGGED_IN_SALT',    '^hquXVQ cI;5[@}4/RdqZ<=:E;4=/O-eYelBG6VxDXw,2njM+f7ziHT0#SN^r83w' );
define( 'NONCE_SALT',        'mTxw6k<Tkg% `l@#ur:k|=+KQkWnT.;V&uwTcO^38B%;[-hobd+8p?4V@2LgI{B6' );
define( 'WP_CACHE_KEY_SALT', 'kJ&(AX8HSU47iYfpe[G:U4W0fOv^#x9{ts,{Kbjc5uLI_Q:-x?YnX]@we7d[u&?n' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
