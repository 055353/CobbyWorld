<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cobby_db' );

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
define( 'AUTH_KEY',         '=Dlo;tiWIGOZz)FS9LV)Hxug#d+cJ7^I~9KngjlM7l`R++U,3?xFF L4y`zQ:5tZ' );
define( 'SECURE_AUTH_KEY',  'ir=Os_b/ho^:rRzezwG,p;H/DdoL=`k*DZ+i)Gdtz#^r!f?H2l42djb,~-jPHIC;' );
define( 'LOGGED_IN_KEY',    '(5{5^e2elQ8HKRl#pY+cWQ:5x,/wV+*zU?TTwWe;JX&C3HqliH6pYuPPEWVY0T4=' );
define( 'NONCE_KEY',        'rFE-ReJ5bCm)t3`9^c[[Hp:^xKCDU9RZeLCEzF+BAaW634EXIc#$^)Kg5P#E5|a5' );
define( 'AUTH_SALT',        '7`57iJ2[*mz+^)(5.Hv`}F|[dr?d`}4zj#)yN)Q.c~O=Z`t(]lkte|tGF8tXC^-?' );
define( 'SECURE_AUTH_SALT', ';<p*9o8W#b=Se*=eH~[b$CGNS[n#GM:vKuc3gQEL0!:X7wGbtlWQ(ZwuPtL^mb{P' );
define( 'LOGGED_IN_SALT',   '[QA>Y[$_$/}&/|V|BIiy;u@*o,3#Pvi}2RZ!~O5&3=.P`vuB=Wm?:]P-cxh-XbO0' );
define( 'NONCE_SALT',       'Z-IP%]H_X@Szk{Ot+Zfp5{qF~?mrXl5!N!p~R~v`$YW$`^^CqV2_V<g>>w0kX^e^' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
