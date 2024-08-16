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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Y/11&X+ lD*XLG~!O-G!zI95K.?)7rS</MJcv_M.aMK[92H9~aEB)^;RfSCg@;(/' );
define( 'SECURE_AUTH_KEY',  'b*TNei:%@ k8Z}~c&b=C~HyfRr%-$uSbF$8[>d6LFSIL?hZUxF*To=x=FtzyM81$' );
define( 'LOGGED_IN_KEY',    '1_[6a_wG9HRtJ6m]K-Omt^w74AkLQtxZM1e0E6jZq|#5yD}VHCQ0J5uZ*/oltpM}' );
define( 'NONCE_KEY',        '6/CXb$}:D8d0EG8YtrKT tO25xfTWifZ7jS?F04.svLk.0Au@L ,VFTlT=`X/c: ' );
define( 'AUTH_SALT',        'zz~Y{<bq09S.NL.}@t?m}Ck[)9yy#Q2Hgg=k,x{gUpIY3{ 7X*y-q/lIM.DM fw]' );
define( 'SECURE_AUTH_SALT', '98/S_(z.h_xLwCS{W89*k%^#X0.JEM/VD9>Xk1&Nd+^6Mc5?v}]g3X/L^TGgy1<G' );
define( 'LOGGED_IN_SALT',   'mgx[`-]uwsjK91F>;O yHev%kpwz4U60oq]b45I_m2PnI=^9`/(Lpw*a&WV9tE&p' );
define( 'NONCE_SALT',       'BfQz1&hFITXB_O1*G/Bhg]>9VWLR9JmZ:8?S`N;o*:8HP{Q<:$bckDQ[LdmfutJ5' );

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
