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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

//define('WP_SITEURL','http://10.1.10.27');
//define('WP_HOME','http://10.1.10.27');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'V{y/M=oB?rhM6aW;?ms^KdHzl8Y&on>t=Cl&{:|TJ%7mI-t<2&H]H4=Q-$VxF)K!');
define('SECURE_AUTH_KEY',  'xoY^m1yZ$b>c}o]-tX:`vp_k{WZHo%+2+})>g?cDcq/D9-(BcJ<,@g G[a:A[?H$');
define('LOGGED_IN_KEY',    'vfToETVP,b9pR6`!JLV3r<n6Tpypxa{Vd_fwQN5^!e6WK,6x^Vfd%;>QiBFpYe^L');
define('NONCE_KEY',        'KCzfW&:X[q3W1qU_ERx^aS19:nEpE zS]at`?~t+Z]VgzQVFy~Ktnf90p*(fdtwN');
define('AUTH_SALT',        'L01|G`0C30%P3U1k}i?$p:4_[&`?I]_ehFm.QSYRKObh~i*8ViDu;c<;@T@2CajR');
define('SECURE_AUTH_SALT', '6sT[@&}6yX&fWimCb.9!ERGKV9MO8rOipnW235Su)Ar_,vSTjTu<VcT0dx|w]A{E');
define('LOGGED_IN_SALT',   '%izb%Ac.*/=aGs`4I`Rq[BipQr*4{fHz|X>zakerf4A5Mt[uU=Md:bE]y#AbSg~j');
define('NONCE_SALT',       ',?M3w9CY_B#3q|e~K*mxn3Ptzsk:)xe2=YP8-<ZBuA@> 1!~{t2p^vz?is<>0&g-');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
