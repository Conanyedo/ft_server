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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'edoconan' );

/** MySQL database password */
define( 'DB_PASSWORD', 'edoconan' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

#define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '*sv`bOg-)9-ADemJKDY33fOqM=Sdel3N%cinqf47j@.$X}_43a:/842u+cA_NN@1');
define('SECURE_AUTH_KEY',  ';29$p<G..dic3MbZ)uPKO3+-^+RzlnCza:8pWh>Th_vL/>o+m1dfT$f_Ts5B_wh?');
define('LOGGED_IN_KEY',    'jZb!{PWp|-K_uEKky2[vUe,T3eCSw}w9v:dx)b-v+q<I_ktaHKMe4f QRNy~CNz`');
define('NONCE_KEY',        'd@{IShvn~`V|5_CFmtXz|t2K+I)b]hUCpgbm(0Sd[zrn*^:AWbOlp[|QN|Pj|6n!');
define('AUTH_SALT',        '(i:E|e0W3N@z2-[yCofe&Hl+o+=K@c=-.x@CZN(#yi~qUf$.tDRT4Eq0PYTm-mA|');
define('SECURE_AUTH_SALT', 'xs#U /yL.}<||.o]$4E.!#uzR4]v|GBaM$2|N+gnRYOUBOtvM:z+chcDdq0@xuHL');
define('LOGGED_IN_SALT',   '=oGKz@ub~vc1thzRNL FD9n}>4;w<qVQ&v@9GcR@|{7/XLJ;j.yy[f&aWp+1~S>*');
define('NONCE_SALT',       'ir`eU$6!}M8Af])z6&rZr^LiV-d5Ji5-/Z:Tb1`,9sb1uNMpWh]+`_?~Y)OhRU~]');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
