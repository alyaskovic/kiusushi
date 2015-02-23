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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '}X>U]v<ja,p]pxja5y$Cs@%p^-?@M&UjPFb@;u7t7aKnM9/#ai=p7wCbT2a3hROi');
define('SECURE_AUTH_KEY',  'UCAm(k)vpK*3/>W5[0:57,u1=O@`|~}FF]J0+lcD*C3>n?f`|4s;sGKDm~DRa-$C');
define('LOGGED_IN_KEY',    'Y2u6,tTzE~S$:7SDIgYjpjtV!&6t~kP(!j+<{u]0!5^Lr;>aqW7Pw k[-4!m*CIQ');
define('NONCE_KEY',        '&.Rr38`2U:p5;O*We)<:*=#AV-x6Xe*($U+f1Co{Y#s?x7KgXKRtT6_$E<46-(>)');
define('AUTH_SALT',        'g:?`]c>W.A_l906)A4=aq|@rHy$rCxO-!0_IKT1A-usAOl?W7+]56zmUkJ}CayR.');
define('SECURE_AUTH_SALT', 'pQu#gnh;}071.&OM)q|T?;.o2KO=6(m$.!RWs>C(yGs$AH.Y-ad8]eyj9S4a.*8t');
define('LOGGED_IN_SALT',   '=;]O=Uq7pGNZF-RTfz4V[=R>:@OU}H*Gq?.vTp6e{ab:AI^y+Im#ybV|e<y5,DgZ');
define('NONCE_SALT',       'pF`<]Zx@?-LAfB/X*RrQwT.C,,&[dCTNz9ztsZ41xj[d-+E%8tTCUp$)dEbk/?~F');

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
