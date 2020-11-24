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
define( 'DB_NAME', 'trainee_wp' );

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
define( 'AUTH_KEY',         'Qq(ZX_wf)kcc9@danqa+}TDLLRc<;KLgB96_/!(su>h. cMfZWZc}1]ph6 5&0LI' );
define( 'SECURE_AUTH_KEY',  'Gu0-:]+H(tkDZIcEqxxxb5H[gU4S(83tA:UZ#rT+b{`2|WoeIqD2x=R{0=z`-w~{' );
define( 'LOGGED_IN_KEY',    'dBL733d)},lvrGx+C`ZWjNoOq?W(~C+B IMwT;wuFDBC(S9<a0yi}R}(=1S fI7?' );
define( 'NONCE_KEY',        '_ cpK5Ji{0,KJv|`>pArtc?A_Yx4od7Q>6:,J(Lhx%Km>gI/G9X?Zadi2y-#0*UU' );
define( 'AUTH_SALT',        '@S)yjz8?09U86W|4F%e)Mm)fF^CS/e)FzHCI&(8%h=tJ[aP6jy$1|AA+u%cv>#!(' );
define( 'SECURE_AUTH_SALT', 'N=xr1Vpl#lYGo}lh6Z0I/RTgpA+zc[IY$P$1>-e<M-CA ?1u:bYX!jN:+{jTIoV|' );
define( 'LOGGED_IN_SALT',   'g~{i[Bf_nub%&6X~r6amtJ<pTr#9>U%=iY)H=RPXbQ*|i#u4fUsFwn/Ljl*FpuQG' );
define( 'NONCE_SALT',       'b01 >T@8IRS:/q[x+%9`u|B^|s]B>K~6Wz0*JNMCTj 1E:lqo0-5S. nS,iRYeJ{' );

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
