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
define('DB_NAME', 'fea');

/** MySQL database username */
define('DB_USER', 'Faisal');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '10.0.0.31');

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
define('AUTH_KEY',         '$/vkc~d6Fr#>6y~>Y#EKG5l:`d6d3eAjKj[P+M5z:y/M?-fudO/8Xxnd[l(vu_]_');
define('SECURE_AUTH_KEY',  'DG3j.qY8[bu,q`)UHgm>$+rJI5o`|V*aj^cEfV5:m-x3UZ7D:~IM!?%z)>{tOAsO');
define('LOGGED_IN_KEY',    'a4:y;5?=ee}DHFuP`&1c*G?g,lBZ+4Qip7Rkp}byvCv3SCn-w=lWgtE4dP?on`(H');
define('NONCE_KEY',        'U`4dT/_cm522,lhcb_wFB[SeJ;_#6Rd(U-ns{!sH7 K[_ToBg3BF,{tkYd>lXr0O');
define('AUTH_SALT',        'g+i.4U-LV61/}0}r}o{]`R~;Ml?AU%Wk0a.vaQ8o,%OxcTgtD6;LxQ/#F-goP1D2');
define('SECURE_AUTH_SALT', 'X8I36)5b.O~xN+6y2>QZ`&->zV2uQd.e=nVp`>u` /zbU^sIinsd%ADyMGXs}>-)');
define('LOGGED_IN_SALT',   'TclPyF||$B#9_<)V?8{]s9BT(u=_+&9!kA+PG.6&fN#:lqaU}~Qg#_=N?6qIse_%');
define('NONCE_SALT',       'Al!5e5]I-d[E/$E4?DG_Mg_.}b4`YLyA(f&:Zy,fi$PdBemP!q4DriZ_/NCaHJ&.');

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

define ( 'WPCF7_AUTOP', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
