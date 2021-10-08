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
define( 'DB_NAME', 'db1' );

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
define( 'AUTH_KEY',         'KV#)<0@=m]|bxRVTES3=)|y_SxN4TZQHXKnl=O%<BG47u-[40}E*=CoS~eL%f+k[' );
define( 'SECURE_AUTH_KEY',  'Ocy>axNfwzOoz``aJa/AfcBtx0d-|5$!m`+veugosYg/8>`_+A^(xjNeWY+^i]w|' );
define( 'LOGGED_IN_KEY',    '6fx%(If@?F8AO4GoQH;ByO-U{q3D6>_#^sY~i8}h3](QGf<.1TEO9k6U4f`a<#iq' );
define( 'NONCE_KEY',        'Qm.zu50>T22|Df|S de!:=n[qvK!y;<Cjbpw|>~V@Sh^_udj3E`ok@!cJw?0{q@8' );
define( 'AUTH_SALT',        'Y}DP}g]r1P:EU`&sjD~X{mN]T@]5kxMORU|s6@8#91Mo>I:h196>cC[@R<ShRS>V' );
define( 'SECURE_AUTH_SALT', 'W[_W:CR?K/6a,@snq;NHGoz5CiQu1O1lD-^[;y^iM!1tYtv9]9li)sYr;{]OEjK0' );
define( 'LOGGED_IN_SALT',   'M?NZUS]k+p]iMcv-MFVX;CuJVpI3?-?dCn~!d3e!~q-oIALqnu3~r_;S@%<@S^Yu' );
define( 'NONCE_SALT',       'yWyq/Bs2e%#(j>WI`tHctG+Xjs+<x,e[~H._)4WgHaWC<?TuN$(JE!Xwq+eVbHZQ' );

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
