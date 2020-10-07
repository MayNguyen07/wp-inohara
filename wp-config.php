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
define( 'DB_NAME', 'inohara' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '~8G; m=p7-6a-F6^1K`>M+xSnR-~@^1G@^Sa=P%^3Qqq1oi<i36|V9Tzy<;:2ejy' );
define( 'SECURE_AUTH_KEY',  '#mZh!.XA,Ep/{wuvg/W.&f>{Pzu#!7>szc&Lqwdi_hyQA7sSa1NNGIN0I+*a~=8r' );
define( 'LOGGED_IN_KEY',    ']P*6|ArXb215 oLhK|d?fkPN&{~1kEpx=Gll?$/4 )+|Epkz6N?`#i7e09hPoT+X' );
define( 'NONCE_KEY',        'KMUcJf*vyE611:U B(5Kns(y# i@}]txPyPIjlg9y+I6tSp=u>Zqo!S~pb4g<I/@' );
define( 'AUTH_SALT',        ']I|6mIhG4(61@P1@Fs/^Xn+c])LWSAm`01>Gq|+OriyFEM)EzIW/OxE%D4GUX]De' );
define( 'SECURE_AUTH_SALT', '@j|J*$hZ6(#w!BIk!S*FlRBwkx|Ncn6c71y6I8PiD6U1dxCn5:B|A?$x{?|SBBXP' );
define( 'LOGGED_IN_SALT',   'z^2~M^blsKc7/NHZ$j{0MAElWWE<$7;+W`e#+W[z#[rqrPk+lxd9DxOVH#h)70Ow' );
define( 'NONCE_SALT',       '/^apyY-Urt!7z?0;+w0f$N%>:`H9TtSWg b?F18PQt07T-Uv2lm#LV fsO(>vgd$' );

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
