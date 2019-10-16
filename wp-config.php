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
define( 'DB_NAME', 'demo' );

/** MySQL database username */
define( 'DB_USER', 'bappy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'LzEQuMVzIG2Bvg00' );

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
define( 'AUTH_KEY',         'Y>)$NU5tU<(ztXphAH-!>B*]gp9bLT^g1%rNmp)qge0x;oSU?tCL1xz`vm;UZ*87' );
define( 'SECURE_AUTH_KEY',  '}tdgq <2Qtu5unal>hvZ6_(gW#VsFF|9HtV~m=(T#E02c%S[8gr-#ZEC7Qkx5{fQ' );
define( 'LOGGED_IN_KEY',    '9F]p`56,bfYiZz6LdOb[Fi8UtS1,#qxjdTgLxXy%Z!<a(rA1}$;2q*y1^#@?O[|3' );
define( 'NONCE_KEY',        '2%K*@}9|)8xb^s-T(l^w}*%o;@qByUC|MZnvR2Eq@SYOVQL<Mzx#U?$vL=/gk!Xk' );
define( 'AUTH_SALT',        '87,/AUw}pK&8[<xM+Wdk3`KBan+vQ(7A9B-ZFZIS2KCOW#oWA:E9 ,&xJthjz`2F' );
define( 'SECURE_AUTH_SALT', 'bv(6(qIj.v!5RWpgy6flNvTb**BSb.M5)@n2`$4,5#&p6lz(nsFw(Ur/O#^v:^]d' );
define( 'LOGGED_IN_SALT',   'IL&?K_(g=dW`CE_f6xUO.Wd]`]~-%K.D.[}!<K>.vBwVBBm{}ONM?OT,&;1Zo=K%' );
define( 'NONCE_SALT',       'iQ:Ma4%1v|e$k;fVRkT&w8eh^l/(WX Cui(}$`kELuP)R7)deLQv|5C$wgzM17{>' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'bp_';

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
