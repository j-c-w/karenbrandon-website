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
define('WP_HOME', 'http://karenbrandon.org');
define('WP_SITEURL', 'http://karenbrandon.org');

/** MySQL database username */
define('DB_USER', 'wp_karen');

/** MySQL database password */
define('DB_PASSWORD', '19KBTaylorvilleKB61');

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
define('AUTH_KEY',         'ss]eKsmUJbXeDuliHHIH(&:AdU$C[5f-]E//V1g-I Ah(sW!n3dBYo-p$EK/`D,5');
define('SECURE_AUTH_KEY',  '6d 6GF0x>NyaDRys|@v4wt}p$}u2sc[K<iF99^ 5;O6MB8@uy]+]7T1/8Wo55~R?');
define('LOGGED_IN_KEY',    'Ug;}bz=eXK18EWEO}PBCn~A7-N8nEwqaJ*e^_IKuqc(9+Z@FFwJ-5<.DNRa|Gh3(');
define('NONCE_KEY',        'A_eX.BUB!>HnD`:Ufr#%5+MTZ].}lXvy2jpjSV&)^6Zuo{WP+O_WiSgsaZsO&ixp');
define('AUTH_SALT',        '~{P)oc$^(_i?RK6li^Puqm[Ht3teq(x;or>m2Y51u[cnrI~(_e|wbn7$/Ii<D5s(');
define('SECURE_AUTH_SALT', '(#~#Q,Q(BWFQ%]E(5cI/n}CWN+lXWq!cEd`L8&Rht38NkHc=56VvB8e5taZtZ}&?');
define('LOGGED_IN_SALT',   'Y(D9SxG2Lof|K!]L!H>1=gCEIv,u@-{LHJNE}3lXmB+MS<VIw~%m<Cb!uLC(K7/{');
define('NONCE_SALT',       '+oX~uHi5Ez$9!f@SKJK(3}DESN?>.[fCCf0g:`6O>IHOWYg:8`!T)XGN7AKj7Ez%');

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

$_SERVER['HTTP_HOST'] = $_SERVER['HTTP_X_FORWARDED_HOST'];
