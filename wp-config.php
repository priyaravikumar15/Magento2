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
define('DB_NAME', 'pdream');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '*<BEV>-G#^-SZY-.)@.T_[}rRjTJ4-4f[lr=+sF01I0+I{F#<{Fmu/|%n[#>/+@]');
define('SECURE_AUTH_KEY',  'zaL<WznL$y,# oKn#Pr<E ;nXnxc}%*HK-R0:afi=Pys+r6VJitn7qsk dae/DKj');
define('LOGGED_IN_KEY',    '+)@?P4X2SMFYrtl^Zh>IFj$D1~NejwD[8PK9A<zgFT3T~RzV}O=Yg>=G{8UtR6z]');
define('NONCE_KEY',        'vrd%Cev`.C(5=kz0e*U%Mh$3rM#ufj;1D0[hr&#hrN0mGSu:@vr $9ks@yY9T`SC');
define('AUTH_SALT',        'v=3wP=zRvj=i63 #SthA%VK26(Q&r1mkwEZA>8:UP+1i%gf2s1/*?(FaGJYxs-q|');
define('SECURE_AUTH_SALT', 'VLU0lJK*zqchm?J/hS6P-p;k:<. Ju}_pD}e$/z<_>7,@hvq 9k?g*j7GD.=|RT2');
define('LOGGED_IN_SALT',   'qd8E#JB$,_k~i[bSR7X+(JEDA abU$Qcpo$?BNd^NzDk0W (`cD~$YUSFH}<zaYT');
define('NONCE_SALT',       'Xv82%BI`rs+*}oR%54$6V3H2ERSV`7cn{+aD?y4A4UR?9mA.n`7h+o>(Co+/|3ZY');

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
