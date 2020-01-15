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

define( 'DB_NAME', 'clockers_2020' );



/** MySQL database username */

define( 'DB_USER', 'clockers_admin' );



/** MySQL database password */

define( 'DB_PASSWORD', 'k0-UG._=B8tN' );



/** MySQL hostname */

define( 'DB_HOST', 'localhost' );



/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );



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

define( 'AUTH_KEY',         'qIJmaDP( BrF&nAbC-yF' );

define( 'SECURE_AUTH_KEY',  'N*!t&cF2-IF7FXn&)+K6' );

define( 'LOGGED_IN_KEY',    '6rkNfaFr-Kd1Vf bSgJ0' );

define( 'NONCE_KEY',        'vnw=xnr%L7n-3qGR$&vz' );

define( 'AUTH_SALT',        'B))Qj1=@QA*J5#BndH!5' );

define( 'SECURE_AUTH_SALT', 'xCWRG)yJ1%/#C*srRz)r' );

define( 'LOGGED_IN_SALT',   'S)&2h6WMd&Mnn2j#$8jY' );

define( 'NONCE_SALT',       'gf91qcpW+KW5(XaZ(r+I' );



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

# Disables all core updates. Added by SiteGround Autoupdate:
define( 'WP_AUTO_UPDATE_CORE', false );

@include_once('/var/lib/sec/wp-settings.php'); // Added by SiteGround WordPress management system

