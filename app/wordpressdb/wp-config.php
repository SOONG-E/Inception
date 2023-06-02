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
define( 'DB_NAME', 'mydb' );

/** Database username */
define( 'DB_USER', 'yujelee' );

/** Database password */
define( 'DB_PASSWORD', '1212' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

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
define( 'AUTH_KEY',          '3F3`D@N$oLsfN$EN/*]quW:bW}u!Sv_%D (s9?V}#5`P9lFDc2ij:AZtRge+J1^l' );
define( 'SECURE_AUTH_KEY',   'rit&7UC/a2~Sr#m-@<|.FTND^|r&bSkwR@Dm3hu&9U~x*63.D0XT1]oL.HaQ0oc2' );
define( 'LOGGED_IN_KEY',     '$n}.)k=#wb_MSq^`oE[K&~6 uj3cg$ZGm9Uqlh.z{L|3{hN}1e_jK@UY1.JNwN0c' );
define( 'NONCE_KEY',         '|1.oKe_wjrhMT+mi+[,eo]-|Dc~@VjfR, w2akHy1Y_wj^lot97iD*@{T58b[x,]' );
define( 'AUTH_SALT',         '#YPvS?0xz.>MW`}mYMY.AU&I34.X]kYYq2Qx}%kH|xC}d`IzDM(3~XItW@CXZ:~:' );
define( 'SECURE_AUTH_SALT',  '*t[Bc 9QEs:Q66n~6fJScY9lAsio9]nEbSARms+$D=[CTv=A+ZO`(|k&0~!aAikd' );
define( 'LOGGED_IN_SALT',    'p/f)@8V:K<xITYxjYIj7ZW-,vP@ez@W|xU.M[0[}Br+0 7U7(kei`K8B}+nFlAT/' );
define( 'NONCE_SALT',        ' A z7KY)2s4>%ldX$70s^F4$BM[jijQTd&C*;$Zxd!x|fbOVA^e2YI<d1RuJU&##' );
define( 'WP_CACHE_KEY_SALT', '+S5<F~Qpf:8D#p+BfXK `@:xi0XD4x|>c)ZY/Nk_[^>PyXz0UWMF}CRgj>%$WBv5' );


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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
