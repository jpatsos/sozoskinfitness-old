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
define('DB_NAME', 'db112214_sozostage');

/** MySQL database username **/
define('DB_USER', 'db112214_nhoj');

/** MySQL database password */
define('DB_PASSWORD', '1nkwy52UF!');

/** MySQL hostname */
define('DB_HOST', 'internal-db.s112214.gridserver.com');

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
define('AUTH_KEY',         'm8&}`km]?+0n;{Oqjlp{TsEr[_&efjv1Q4 $NsNJy6VM-g~isxK+Jx|CsrOboD^L');
define('SECURE_AUTH_KEY',  'k;f^z L><kwx@;]r fN4Xp=-HZoFuQ3hfY1h_N6|Ki|qiNsCY6=`caTm??pdUFR$');
define('LOGGED_IN_KEY',    'kn6fy*nFjbG[_1r?YUW/8aWZ;Ir;e@x9Z~IDKVkpz}WFx&X-1sDp,2w=Ts|v[?1V');
define('NONCE_KEY',        '^We6vx4few[FuF&<B|0iSAPR9|;PC^8B:5PUar>KbPLU^hccVE =>rvYgGxsJ|xa');
define('AUTH_SALT',        'zT&dyR*!+Et(d92U@ht6v8=Qi0i+W3Wa[z;@5oK.{6)_bUIIyfb!infl>`G(L@&A');
define('SECURE_AUTH_SALT', '==uMQ-trH(|R8Y[B10cK:7KKK{Q8M/+A]!?,XWn-S{sIYM_VE!wF-SR#Un%mE&Eh');
define('LOGGED_IN_SALT',   'gr]MiOD3^GL<p2vt;X&J<:1|~tws.}!{$t%Y7Hj6_ak/.^mjS;E+;2SpTDY(r]VM');
define('NONCE_SALT',       '_s&uc&n`j6&H}6|-j2R;22ios*3s#j0W0h5=[{UsCQ58Wex:PkTlMOTX|R<I@7S|');

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
