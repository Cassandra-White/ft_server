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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'g~cMvy?V_,/533]s%+%~V3()YM55%[zjL+9@p:H?+}9:Z&VL-9CI-LfzNm]w/#H9');
define('SECURE_AUTH_KEY',  '-lAY6 |+-PvOnA@!|+gC1zG[2fW53m&#w6nhrMGj-$Ube)TX:Se OFJk;iQjTyp9');
define('LOGGED_IN_KEY',    'XcaEDjg{Y#5y]:.MJvEkg3L_}ND&9HOe|6^_.+6}SuM,o:>U3QD4iw l=);z]2+T');
define('NONCE_KEY',        'MvlkdR2CRM@!l~>fB1ETH0hgSZxan5`=i8`D$U?9;OmzLiExPUr730;eo75=J@<x');
define('AUTH_SALT',        'NSewQN}ABp@XQPZVQxhq|Nkv Tc5m,DG4l/}>1+-BX<QPqJ35*!5-=)n&%TsmCF/');
define('SECURE_AUTH_SALT', '`xq(:77h7K*^Jy7l00z?S?CcbF+jX%r$]y>j~sFlG<HsE.4%R/9K-*Ld!8jV}rN<');
define('LOGGED_IN_SALT',   'd<nS8,5:>%0$-!Q+gV(8T[Z0|C4IMyo$5-1Fi*t}u,W~[_4+p>NaKM|X~KtR-O7R');
define('NONCE_SALT',       'Z{|@`QF14<]g+OTr^-XhUmR`|xoPU]Tc:M;@+fi&^Og$sk,hPD+FJ-p]`^2Sj*m$');

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
 * Change this to true tao enable the display of notices during development.
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
