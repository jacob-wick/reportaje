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
define('DB_NAME', 'reportaje');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '?V1yX[)=(^G@%vF{pu_3Pp4<=h*i2^R,Ds;]xs;ivz=!l52#C|&Vf_G9$ m9tsnL');
define('SECURE_AUTH_KEY',  ']C3ISnkhGc2#{&+=ho<BE FBFO-Gxj-&~!Vq-J%Dp/JW*Su4KSb.^WgDZ0}Rmq,B');
define('LOGGED_IN_KEY',    'P_[,,!s2Ps =m9mmh`;R-We?)>;KLgMhU2uSp,z!1p*O[a6CE1I>YJ>p%g}1H%Fh');
define('NONCE_KEY',        'tK(_V.={t4>MPxW{*^8$Sp6E1V9xI/|yZnt-di@m6iV.^A=-k>#!gh0FXFrw&G>,');
define('AUTH_SALT',        't9b[)=xe]!!8>(%{+]x1}NFj4V1F]-?D(7}e]@7c!-)A(Nzu`I@J5TQ@Q-{>!ESz');
define('SECURE_AUTH_SALT', 'nM7s$YJeqb7N_pNBOTgi(K!7AqM+W3=98x!1)/sX(Nsj}9A.+F-jwy,3YSEbz}.b');
define('LOGGED_IN_SALT',   '[><d4@SUH;%x~aFSH#MqG*un[3toA%R.-MC/;UQ$YP3wH1|5V{UVj L(T>kx]Fcs');
define('NONCE_SALT',       '/jTIt4g_QDk=oql1><$<~ Wh7h1p.@751&dPRqmd`+)#xDeq73+6,q!XxewH=)NI');

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
