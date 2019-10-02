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
define( 'DB_NAME', 'tsp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '{)s/&dvZe4R<ZagCaw,(CRrF@3_b3w^EPxkua[Z_`QEt_70^|kRwpO:LgXQbkzU1' );
define( 'SECURE_AUTH_KEY',  ':b>C1!Ysy%G1KeXHA$KbHb8dMirt|Xqlid=7fC!{44;#UnK:>33C7Bf<2KYeh%>?' );
define( 'LOGGED_IN_KEY',    '>#1]o`3)_cA!_,Zx/Evef,8juOG(A.88Go3G*A1}lpERn-$NxPKV#2dA<Z1s<5=-' );
define( 'NONCE_KEY',        '_MxqtIql/7fHu32 .2XIx>riB3b4_e;?f)`n/tRZ|JjoF^q><%_m(A6#BO{1vIlu' );
define( 'AUTH_SALT',        'AJ!pB>z4N%c(cL5<&8=)B_eWV0X[o){.J:].MYwL8F=TSX39~GX(88;DHJZ6dI*[' );
define( 'SECURE_AUTH_SALT', '6g@W+s<k+m5.`ZCm*Y^ZHVj#.L[:3P`JNl;GJ]&lW_T&Wc2BXk#00@^WkRW8~zoj' );
define( 'LOGGED_IN_SALT',   'ZdRl.(P,lZeGz-tXfLIOQQi@5nrXA1CPM{OUEt[F;]K9&:yVHQ@GurOt[}9,`^J+' );
define( 'NONCE_SALT',       ',)hPIv&PTLCRh~qX/6!w$oo@RG]tJ^E7CM[E>=|La?uewkRdpvI~~2eAo#l4eK&V' );

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
