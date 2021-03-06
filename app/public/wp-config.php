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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'H0NuOrN78iRNk8aH' );

/** MySQL hostname */
define( 'DB_HOST', 'xav-p-mariadb01.xavizus.com:16200' );

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
define( 'AUTH_KEY',         '$lp(c,2vmp]p6!.j,?+W25%H|Ln-JOJLpZP p=MFZC#Z=J:B6,CN81A;#SlU1osu' );
define( 'SECURE_AUTH_KEY',  'VuO{$Bg)k0+m.-Uy=$sx)^yWv]&[MGqxR=jvx n#^K*`rJORIp}H<YvF|? MrL1P' );
define( 'LOGGED_IN_KEY',    'b|UPGg;4snm>oW-:JDr<FF]GJFXv>lsAYsJq[X@P^HXO*5<gGkz4n9f_HMY/cA%F' );
define( 'NONCE_KEY',        '2x33B)XJ3h%sxv;8*8JR4]nk~=~q+iG^1@(J/*KUK|2;nH#a:4jw[y-a^Pclo9ZA' );
define( 'AUTH_SALT',        '=nY<#!!FtB}g.!&^gAQ7&5G`Yc&0w)_wf.taraOl 5_Q[6cW~@m;M(_+pj$S&af<' );
define( 'SECURE_AUTH_SALT', 'kjRl)4Gz=Ez6#pU`c1Nw@5La`S/#+BiH^77|jGjy*-qF]i6]3WZ&j$j:bY!j[:5F' );
define( 'LOGGED_IN_SALT',   'gAnoRr|mFoSUn}B xN@6t=fOO{R6TDw]jy2Ke;pA@4Q$Bv0L/j,Qg?5udO(c/q)l' );
define( 'NONCE_SALT',       'sb2(I1v8eS8L]!gnQx=1UDed1J!Osovv>OotAcWNNQ@n<E;-(8~)-ms{A2PZodHZ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_3';

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