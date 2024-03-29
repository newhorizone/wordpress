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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '$Qj1U:jtg#+[t}~j?`kK<|4K}omJUXjS#_?5SCo2S+Dxq<fMMR9G34PwFUr5}#_[');
define('SECURE_AUTH_KEY',  '+0cF8wO1k9AgDpD(0d}>cda&t%8L]0GB% GUQUon]#-]%fq:i,]+V]Z](QL5m!r`');
define('LOGGED_IN_KEY',    'd2R>Fu5^3drkR5mQXJO7yg0!:%Ip2VS$)dqT*XV0uEAFZ[sn@C ~l?LxN9hbR<(o');
define('NONCE_KEY',        'vII<qEaNJo3/sQ{&&D(W``hC#PC(j$r<TW`w?-D9.ElyZpyVO(7BmAPL$Ti8Gi&{');
define('AUTH_SALT',        '.mQ,44:%9lSS/#M(0*)EU9|)YqIL2t&x[MBfkc:CR^SxW:zS))2wgH3O_:}AL,X8');
define('SECURE_AUTH_SALT', 'nhN2D8(?hO/x!Bqg0 < 9F__*7NpU17&W5SvRU%Fb90&bU)hhXdCH&*!(X2?m4 &');
define('LOGGED_IN_SALT',   ':p^(aqEJsidyM4=,F#*UNv&kE%g}+0(hAPB>tWllK@[/MvtElIu_XT::(j&X_i7P');
define('NONCE_SALT',       'L$e?0-~Mt8m=1+. ]K$o6~w]WLg`udU&ho/mLoL2j&<bfD$v~8u7:6tk?g+$N50R');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wordpress_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
