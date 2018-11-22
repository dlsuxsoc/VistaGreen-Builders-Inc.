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
define('DB_NAME', 'vistagreen');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         'e_.W0@@t^WCt K3Le9.Y& /[Qfcl6w6N=> gv{)|<^oPP[y0qFQj:dO%.n9$#UrZ');
define('SECURE_AUTH_KEY',  'L^@u>a_QI0~j?!%x`]gav-)K_HE+cHA.=]h|9G3s!.!t}sF`0mI j6Va}Y5]Bhz0');
define('LOGGED_IN_KEY',    'Q,R)(PttA,:8Jjv=U2_Vxvj%_Of^k|@y+Hs4/z|_T}:m,H<Qe@4J9yhDzEM*(ta ');
define('NONCE_KEY',        '#<NUzPT@tlmlz5|PZ3(svfDI|>hY:$kBP~1cpf`VtD 7(n)d- kCBZd/{H7n6B.%');
define('AUTH_SALT',        '`:pB0COr[~]ui$2?ImCn 3,3JGi4_@QCc42O!SOyl9TAob|ld>/!NcUtM,Rl^ OY');
define('SECURE_AUTH_SALT', 'B|*~K~Qq:`18UzD^?G1:Z7 UL7n~_J=-q2<#zTr_UJuZ=lE$5kZpXP*WSn3Ic(>R');
define('LOGGED_IN_SALT',   'w6.TwfZHv-3p|pceF.#u3*0CeM?WbIR]awMU!E?^dEkkgKGSeX{4_k }}7]Wlrri');
define('NONCE_SALT',       'CAj_<QN(Jm_5]^Kx2xeq?1!NLrWPvgIs_:MzC0=nQ,,W1@(Q=x+]C6 NkU8cqj_4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'vg_';

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
