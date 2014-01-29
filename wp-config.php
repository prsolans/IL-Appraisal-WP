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
define('DB_NAME', 'illinois_appraisal');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

/** MySQL hostname */
define('DB_HOST', '0.0.0.0');

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
define('AUTH_KEY',         'iv!OU|9:0dYXxY6=eWBmJ sEBUVs<({/[cabJ|,!a}-5|1q6!|9LswKr.-Z-(}6P');
define('SECURE_AUTH_KEY',  'vpWdT=Ra8tBHdh-bkN7%X!CvW)?V=hOizw=(IWB%B[GX0E5`<KT&{e4|n*vtc3gk');
define('LOGGED_IN_KEY',    'GN9SKa9I_r#MJ=+P!=2=S`BlI|qW/+33AWY(QNs{v-||dFrahr%v@sv04DFf.[Yb');
define('NONCE_KEY',        '!l/pVB38O @1*1C,<%Vj]U(rAdD*O}v-2o9j|,X(a:jeLkAa+VMr5PCo+Q]lHNJt');
define('AUTH_SALT',        ')6I}#Qp7,6w<l]IT2U/0IJ|=bIa1y,q8Hg[Y8H.v%+B)0#pE=0z`,R}Cz+*SsZ!?');
define('SECURE_AUTH_SALT', 'z!gV^x(#JdC^46>>i}$clPX6B]kjy5KnL/{(r$sWD}!|V$]eT|D:9B9$_1,m&ZQM');
define('LOGGED_IN_SALT',   '{W0/(||FViUeJ|m_`O6PVr,e~z%Gtd)z/~fqs*ZqeO+/%/Oi*<*[o2vw.Ou<$L`N');
define('NONCE_SALT',       ';2 G|-hv-{JQV0>Q@+<cOS;_(7[:g_YY&,r1!ceQdYkdz/6L/b{}_O25{plZ-iP8');

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
