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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_ws31i' );

/** MySQL database username */
define( 'DB_USER', 'wp_ivpms' );

/** MySQL database password */
define( 'DB_PASSWORD', 'B_zFPd7fc3ib6Q&2' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'el8+Vf@pCE!p13@9t5;;3RuV/jb(w6gbKNG84a;uBW8+*N3A48h(Sp7]-bsv7lM:');
define('SECURE_AUTH_KEY', 'i8:0l9QJ2ToD48!BBY13#-7x0a82j*zV!GzG6P7MZ~VJ*i871*;iehcWPq02~*/V');
define('LOGGED_IN_KEY', '12mHv722L0H;yVy%~uO@bAw[X:n4r&2w@KrK/5A5#_wha100/~]8XEm000!GpJ9Y');
define('NONCE_KEY', 'WJ991n)B#zXoTl]+#UuS:Cz:9vxHi@(1f9#&FOE6JA|Uf0Lb1zvuX]]mMR[3Bn%L');
define('AUTH_SALT', 'c)9%tEoGroa/;W@]P;6@*f90X90ow6%tS1OQnU[8~X|iG]lp#5GQ@SDN9T73Fr0T');
define('SECURE_AUTH_SALT', '5xBI]441!ylk9cXFI|6pC(o:#ZwJovl3i27zZ6!1#v-rA[;)y2Do0~enz~Cdeg]g');
define('LOGGED_IN_SALT', '7jk1(c1ro3S5|_2u&1*+2~]sPVh9)D3aZ49ra#3HTsKrj5lBg%wO/5[t0L6UKq|@');
define('NONCE_SALT', '1ip9SEWfF38)cGo9V&aQ5dREz1T6ZUl+r10z06yWn19:131R7;sxe[u-6@kVe413');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'xNMt2JV_';


define('WP_ALLOW_MULTISITE', true);
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
