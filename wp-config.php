<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shradhapackersnmovers_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7hv[XKfK]FZ i;$18B@Ud[m*ep8/w|pt1C=sV>l0U3|G&(2Z~mvf_wo_)`0 v6:q' );
define( 'SECURE_AUTH_KEY',  '@EKcmQ{0jV@<1J@/|htEk:tWFG>ELrk!!!~3y_1&iuFx!~>whO|fRtT${hgsQqG3' );
define( 'LOGGED_IN_KEY',    'CFd{N>=v};Fq/(kb0cb3ep8Yip&06=31+%/gkL#L:#%-0i#ZS}fUOSrZ?}-N&&t*' );
define( 'NONCE_KEY',        'UsET^pkFjn}4fd:]`A]@bgOLDS(CLhOD=b:#im+g14kJF&U@U4w_xc4Y&-tkRLz=' );
define( 'AUTH_SALT',        'Wbg2qn)oJdDN,|J31 #NyoZ/N6dz9a<R;F j#}0;L%09j~S<?>/76bXt/G.2buMg' );
define( 'SECURE_AUTH_SALT', '0T]KiK.Sc)!KCr*)gKgo:<+S!?}1YL>a5-#Q%Jx._30Eu.i*}z]-NM]@(r18%Qi1' );
define( 'LOGGED_IN_SALT',   'ZL6)`&e@]6wz.76sk8!H[,Rnmx9G$9kz8WFq|O3,x~F^,LysI_(g7(*2Z<<G#wd8' );
define( 'NONCE_SALT',       '5Yh?W]mEg+Ga*hW:AlZaZ&q!AmY>/DW+l#4Is=moI,*Xo4-lAo>Y1XLrv8if=-q0' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
