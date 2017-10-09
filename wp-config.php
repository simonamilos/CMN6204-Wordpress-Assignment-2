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
define('DB_NAME', 'wp2_portfolio');

/** MySQL database username */
define('DB_USER', 'admin');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JzZ/) Tc)Z-C7S4@G;E>L$X,.z]:WIa*3@G%qiA^h1HIcK?dm8-mt6(RWDe9`R@7');
define('SECURE_AUTH_KEY',  'bOiA$Bs~&w8`ouya2$K9Z|I^J})Pn qUQ$BfmFPpmC:OU;n*YtB`m5d vAJvQ4Z}');
define('LOGGED_IN_KEY',    'Tl?Ml~11#RVh1Z$@G?W?4W@b:`EG oO%Dh*B6M-qg=b,q_f-,) EZE5j2`EV|x&7');
define('NONCE_KEY',        'k*8mo%h82S9M}g4(7wH>D+[22<j>X|7yRGC5HY_VO2NGLX~NY0#AdMkvf9oho{73');
define('AUTH_SALT',        'xZm[%s&Sfa7LF/}NkLAm#SS?Ev<-0=5<@ro@}?P@~j4[U)SfN_MC)a]ZjTC1/xw>');
define('SECURE_AUTH_SALT', 'M`O}`Q{mv4)qGkfRHOCRr;5(-$Q<eKh>1&4K(n B<e}WYt!l[!(.$eq-D#S,iLLn');
define('LOGGED_IN_SALT',   'qsf{$wse6iYGY%2k!(}ZEypz44VU8kE4,yEWUs)}OmO6D6Z9=D2)Wfkf>rRMU~VY');
define('NONCE_SALT',       'O0WqTQa`!Pt^_`Q<-)$>|{EIEJzG!~dRNA.&mTFaHBj9599{=4h|ntp?B6z+5IU^');

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
