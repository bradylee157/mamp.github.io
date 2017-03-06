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
define('AUTH_KEY',         'aYPu0{6eFFk: b&[6rtrzH?Y?g|qE%.nT)T*TmS)5W)xs^K[=.gW1Acr{`<<qc`,');
define('SECURE_AUTH_KEY',  'R>hOrY4w^4qdu-y.KaDWt%}Udb#$#G!8eQ[Mw>w>LK4_;>-/+&TYA0PMzH^e/Wi ');
define('LOGGED_IN_KEY',    'G;[l/%{/8o0zVZn vX9!3x;nuU[pNkl4!E>t-UmAE20ik6<$J:3,tA#pmu_QO;R<');
define('NONCE_KEY',        ' <7/`%X3Y}o35DRXBTE>PWCX.Z&@ lh9opkYS<$q8)0z;gBSN{urECU?09QtY.)g');
define('AUTH_SALT',        '5u;boS;>Na?BZ8$>Ts*=LF1.E]w:Ji%eNH EZ@3:T[&3;)0O,C<Drq*^16z#`rZ9');
define('SECURE_AUTH_SALT', '@1;~>su9SubG&K6Oz-jXUR+PIaYW/^WcJ(:mDVl^{)8~KC~cTHQELob7^_1/*wMH');
define('LOGGED_IN_SALT',   'lFX;|Mcx6[EUk[-.)T-5eh_B0&1pz[%H6t:tL~~nO@b{jlACMhTt*2u3DR&:39.%');
define('NONCE_SALT',       'J&W~x/*[o<OYTQ o_k8cIlnJ0:u*khb]l.AW,s@8$sQ`OC>3j_wEZdBsa&Z=P[&F');

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
