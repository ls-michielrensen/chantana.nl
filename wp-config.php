<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ($_SERVER['REMOTE_ADDR']=='127.0.0.1') {
	define('WP_ENV', 'development');
} else {
	define('WP_ENV', 'production');
}

// MySQL settings - You can get this info from your web host //
if (WP_ENV == 'development') {
	define('DB_NAME', 'chantana');
	define('DB_USER', 'root');
	define('DB_PASSWORD', '');
	define('DB_HOST', 'localhost');
} else {
	define('DB_NAME', 'mydb-prod');
	define('DB_USER', 'username');
	define('DB_PASSWORD', 'pasdword');
	define('DB_HOST', 'mysql.mysite.com');
}

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
define('AUTH_KEY',         'Q23]B@pw2+-vLf=czOEwBL~w-cI>4RdIlca=W=v_Cpn<_LkEjYmm@5]YO+BOb7VL');
define('SECURE_AUTH_KEY',  '&r;vAwwa)-k_ @k(9zx}--7H:sG+D!0TIdv9*$`Dt8+j~*gW;p?Kha6@c)`|@Klh');
define('LOGGED_IN_KEY',    ' ++19I*N&[}W20O9p<Q9)s*5kxqsi+pyA5vU^4+I~08 D4*?CZGV|EJTt-P+{HnB');
define('NONCE_KEY',        'LqX?=P}@OJGO7QiAC+hk?SGz`9uH]iWvs)XM&:>SY.B}O}-1l1G*H6VYY#BS~-jR');
define('AUTH_SALT',        'K|d]AK!<nuQyltT>ANoGp_41_!;,8=5?d>}[GyGuw*W>*G:2s#{79kky)SHNnD8D');
define('SECURE_AUTH_SALT', 'f13t,PSPk--GWcMG4,JEt2O .3-3U&[JF1H/=Mn b&VZ`lTOdo9R4-i5{$Ex6i]u');
define('LOGGED_IN_SALT',   'V[f$QVju*K*qQPWto#AVP1na7c-nycPh)Rg>m|2N+9rqp?ie]g[Sr~2hL8a**1-T');
define('NONCE_SALT',       'JjoU?1~_JdJ:+DIZ~+t|)4UP6jA5qwF)S}`m&.;gs9~|2Ik9:??Mu#EE+(B%nD5k');

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

define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME']);
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');