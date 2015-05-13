<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'rehabooth');

/** MySQL database username */
define('DB_USER', 'wang');

/** MySQL database password */
define('DB_PASSWORD', 'HV=JJ_HuMM.(');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ']lch[ i%z1:tN,ns%|&.@0vkq9kkJdf.7EduS@<F7Zb}i!PWAKWc5Y2-{J~H<AU>');
define('SECURE_AUTH_KEY',  's[RxUa-kxd9L+6i@9d?]FU2e;7*pp=#e@:+e.[d2w$ge`r)xw0kzCKk4aE0~w#je');
define('LOGGED_IN_KEY',    'X$DX5fc68aFyD=TWK@=V/x|]8c=oPx38-:d2;}$!2c|KR$!lQg~92I+14Q]vN%_7');
define('NONCE_KEY',        '{)X#(AeBbnvvQG(&F<%<,iHqi$Z,B2IC={q?)f3Y%(kFw4OTPOut,~5bx-INd4=U');
define('AUTH_SALT',        ';Ok^NpfE} WP1+k9l0i?sVj8:BsZc8_lcim?TogLMQD1geHngJ$?qZyD+|8w9:)5');
define('SECURE_AUTH_SALT', '9PZj=av$K0_+D9@`VBrLVUp)G>,<EVEt:Qu3v?!b%qRMS+UFT3<-|B%Gt3U0=UM-');
define('LOGGED_IN_SALT',   'qtr8TAZ4{j8e+hjap9Wcl|,8F_qD@szSP3nbL|0).tS$:>Cp-_^xF5pv/]d8bTiF');
define('NONCE_SALT',       '>^|{Wpzq:,/U!q(5bSD}e)P}0I.I%+v^dN^OF>w|2-d1b<s-UMX^U{zZ+UEo#Ck.');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
