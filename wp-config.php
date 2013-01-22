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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'b^Gmz_t`Qzs8gtVxx?d$B&]PWv%qO_nF1>6lumTsq[6FI;$=%7M<k^E2LNZ]_.}~');
define('SECURE_AUTH_KEY',  '?c[_V]=f(9IQnmE|}lK?*i.zth/^rv]J#~!smY24zYBP-Zh_vPx>kmX/q[W9]hv,');
define('LOGGED_IN_KEY',    'wF]=[kTjWxh$]el{I#u1-|Hh-dRA!39fuP+rKZHL}u1e.+v>qrOI*Vu)e5EL>wZj');
define('NONCE_KEY',        'pC?;`|DIk,>*!+$Iiiq*O*A+02!XQ`@+dXC5eFI;nEyP]@La[ID65^YPpR[)[D `');
define('AUTH_SALT',        '&(o{`RHIpF.Z$)~lI;&7<~%*0_^j7=|!p?,!I%6jO!J04*p:f8_E|bm2[%(MNEaD');
define('SECURE_AUTH_SALT', 'BJp3JQ,YO&M$Fo!7RE_X=?]nOUHW8un#|IPA|;DW*XO(1iVt?Vb+PK.a7vSq_Cw@');
define('LOGGED_IN_SALT',   '@O(M[^LIL2]o4>{#9Y` X`^~,]r$Db8_=nd:n=4ai@wuC^ /2v!<6Y|gEs&[08Do');
define('NONCE_SALT',       'C9?@_e3_q3J7hupm>IfM1FSB6ntu8*yI!<`+>?GqUU V3%onc>>J);q+)|]rGH<r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
