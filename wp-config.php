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
define('DB_PASSWORD', 'h67a11');

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
define('AUTH_KEY',         ']KI;J*t%cH9Qzs~nNg)6~ym<h_5v* ?^s<G-,=Hjdx&(xr+9m7!lv1zKdOMm|w8N');
define('SECURE_AUTH_KEY',  '}XZm>g~%[g:!Ehq<0I+rTrn&3^^LA!__]uxYjUHSu+GuJc4%R?OgQ%D{pTaZbhp<');
define('LOGGED_IN_KEY',    '[*8%R;5,>iBEwvazP5SZy<6l/K{KJXR7=|]%x2kL>a.r#X{2W6-#1Kc}~3*uDDsu');
define('NONCE_KEY',        'nE<Aej)Z%l+9F ,atR<bHQAh<C`d7;fJ&q,x>OF.|Ats,@y &^(g]ymOIAB|7mSQ');
define('AUTH_SALT',        '+A)V#/lQ??ugDlv*Zq:}=.a]|!bvL(*Y5qd6F[Qc$J7MuTJmvb6Dn/bOB3]j]-_w');
define('SECURE_AUTH_SALT', 'Xt7X>#%BJ[c^I]h)NdH=mtl:.GCIa;_A_,!HpV-&i,;.Gqh6J0D/tQZt%BC;E{pL');
define('LOGGED_IN_SALT',   'thD M!S^)RursQaD*WX8psW#OKW0Y&1FFGB<iW-CKNi,gE#,Ecf(DSllj:w2+7:`');
define('NONCE_SALT',       '0(0;UP1Zz|uCQKL>r6Pw_#P6Y1>dW(+8+&93PGVFED#tr[`YFAI0|.SR ,xe<oCa');

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
