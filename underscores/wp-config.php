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
define('DB_NAME', 'underscores');

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
define('AUTH_KEY',         '(VPv6pTxqdEb7m>z(${5/$sb. }qT#&zH3DIN @K+b)h5!`/I4Yo2ebq]~_}|qt~');
define('SECURE_AUTH_KEY',  '_D].`{/)?prW?6|2/!s,S|o)u_{<Vndj`Dz=^.Q2yt^*lv:A*&<0Wz~/sFpmmC)9');
define('LOGGED_IN_KEY',    ',=lsx^oDu_qH0IT~/xU ]c-E5fWbl1kdYTqRn`&N=,0SELS v7Woa|{Q&2U9@IJ^');
define('NONCE_KEY',        'CTM/.b%]HDHhBza^Bv6R>kI=UC:/f3o}WoMhuN(yNJ{S~@^:(~hX]~>3h}qcF7(>');
define('AUTH_SALT',        '@L]@[De?H]gP>i~ #@@VG+{7Z%&9Zf*TsD>x}#HZ0>?qXFuAE+jydO ^B@mhSLCD');
define('SECURE_AUTH_SALT', '0_}|x}t$wS&7/C5-p d_rP_h0)M6R6R{=#/GT]%qQEf/cF8ed;}]IbI0xiS,ROzU');
define('LOGGED_IN_SALT',   '?-{N:AP3w` [hVFkD3H8n8/y#pQ~SQp EpT=5S k pO;1gA`lQQ,pAxk4$~TdH[[');
define('NONCE_SALT',       '/Ej[n8e]~d{>AWFXEQiu-C(:bs|v@=P|CKI*fz]4i;v |p:!_h1 SKsQFloZx(.^');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
