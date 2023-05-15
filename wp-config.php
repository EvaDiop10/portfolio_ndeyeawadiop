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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'NDEp>6xR$m3,bG2Sp~^nb-ms `Oj]a|bmNV?N;q}urfa,bvu=M^vthMGg|Att#>p' );
define( 'SECURE_AUTH_KEY',  'dI<>L$wPK%wEh|v0l58+P b&Rm%rvF|y@:Op9Y1O&[8%][BB_/a/6}fA_O=Uc~*W' );
define( 'LOGGED_IN_KEY',    '0fx}ig jb(:aJv>Bt0MJdzd3qti1RdT1955hK,{}c0AA]u5d)^e);|W9cD@+=;gM' );
define( 'NONCE_KEY',        ')JcD#-oAaSV`E|5<8[35]e[t-q[P_[ZVs&x>wH<Xvn:SUc#1^jQN)t|S }`{O[UI' );
define( 'AUTH_SALT',        'mep2u#0SPs3bdz+=(-74Iw[c}<))}#Y?un?dz3F}YUrVT%2*<y!nJ/srMhe&|]t>' );
define( 'SECURE_AUTH_SALT', 'ldD=t%z&LtBb2,0$q?%bmG]{qlw[c&F(;*8}yS0pg40qiPzinO>^!Kdz@&33=Yh8' );
define( 'LOGGED_IN_SALT',   '%+Z  R-nCbNN tV8N%&Rp,]xm9gK.DpH(}|Jk?27f$Pb#OQR);I/w4+zJBziZwWo' );
define( 'NONCE_SALT',       'Y3!M1)0jg-g4H0~R3(5@@~|K/sdJ;+S>^cMk`fP99G!Sxd-_mt%_%-3G=6nVb9X]' );

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
