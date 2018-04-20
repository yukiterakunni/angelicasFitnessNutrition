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
define('DB_NAME', 'AFNC');

/** MySQL database username */
define('DB_USER', 'AFNC');

/** MySQL database password */
define('DB_PASSWORD', 'Larrotta2016');

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
define('AUTH_KEY',         'Cs0wdaGJ4#Q^ND` n?3729X8SX(;8R`+t2h 8M^%=[c5_Yxz75?h-jf*uqoV/g%.');
define('SECURE_AUTH_KEY',  'Z%_0Bvi:ZxC= @$1hhC)Wx%AK].5o{oysD%G:p<idxME*x[D),ySlc`!<sHTBtHZ');
define('LOGGED_IN_KEY',    'M/el(BvO3H4OyIh< ;1qmuR5Yx5vActf@^bS+n=9@[[GPAYb*8(hC[S6%<)AM{1$');
define('NONCE_KEY',        'PwRCW1ek=l}VtJ%jCn?}KuG@,):sg( g&B`]H$ug[*F%oqv|&BOb:~]xSg2e!Yq<');
define('AUTH_SALT',        'UG(>+:@o1 ]mYjTNjCLjGU`;O3LI^GPt0?f15j-~(}icg&$[j$+<%%lbCT-GO9VZ');
define('SECURE_AUTH_SALT', 'OymE`wT)XSVPE*OMAyvWEiKUAE* Ihrm[*u)|W ^38{qhePL|fvqg_[v2|+Q-MlG');
define('LOGGED_IN_SALT',   'R)on_l/B%!/fqvKlnZt&[%>~1]FJ8|}iH(49&7ze|KENAT}&g3K^c%HAzUAQ3eiV');
define('NONCE_SALT',       'BqoT*E&c!r_:@:VS+D-3>C1jya5z71q>Qzx1PdOkqR&}$:yEf?g38]Yr/awM$-me');

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
