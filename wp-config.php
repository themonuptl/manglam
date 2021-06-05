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
define( 'DB_NAME', 'manglam' );

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
define( 'AUTH_KEY',         'VmxJ?d^Rg*Zxd&^4*4FgDJ~n84d*2lT~]}~oFNOu82,hr(?wg.zXDFF`:`FO(Tqh' );
define( 'SECURE_AUTH_KEY',  '_I2_Op/`b>K7$l!mA7PX ~gAUD*kZbaRNpyR;Ot;[g_#tFUQaLx1N!65XBF_=Oq1' );
define( 'LOGGED_IN_KEY',    '<!wxDZ~ZprT4uT@w>syf-^k]~UYegv*B-RHgG>2YM#R6HL0`noOmC9j-m<bXjP!$' );
define( 'NONCE_KEY',        'b&HS|)bO{ZKJkczpr.JInke %nHfcnR{N:sz1uI=tIrl|R*yorw#`iI8/}_tRo ^' );
define( 'AUTH_SALT',        'I*f~{~{XV3mwNuG?/i+C*;l&?Z0/47SvXgXq:!6f&WL6&#1gqss{*etSR.lj5mkC' );
define( 'SECURE_AUTH_SALT', '!3RY.^CC673)Inyq!ua$~DmGqM0g~B^mn5@K+V=wgABZ9GDz90w>HSvSD,i JD>C' );
define( 'LOGGED_IN_SALT',   'XX]_kFj;O#=A83x=!p^=_EX.+aPaE-!TR%JumfBPvLxfO /0K#_9GudY/izY3Q2W' );
define( 'NONCE_SALT',       '__QfNtjx#3<m/imx*o(jn~m_ZU^]u)@WKml]j-tcgaz/ML8!C7:qCHV3YWry1)T!' );

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
