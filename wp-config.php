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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'promo180' );

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
define( 'AUTH_KEY',         'G/LTfv%~AKn}t1Uk(+;nZ*IzEKF3tkR8vY*5X>mL#*7?pKnYoFexgamR@d3^i^6%' );
define( 'SECURE_AUTH_KEY',  '3$7t$XF(T9B:%EAVW.|ssRkG;I36DnyKqN90_X[sl%Iqmcd#+_67! PrFoFJm/Lh' );
define( 'LOGGED_IN_KEY',    '<>xEM)g:J%UjxbMY72t`u&?:#o^Dpuj}WPL(xB*~.& IV4Gn 9sPwCEb2gmUbvxL' );
define( 'NONCE_KEY',        '[j?SCl.e7}=QS&YmU7AlVPL%?uC/#){@F{z8R/Q^YoYtvdtE&A(uEszOs1WI;{~O' );
define( 'AUTH_SALT',        'daHoeYfkAwAR]rQnaJW+MJ,QR|-[%4-%[?8j.8*LhLvS-s&=-xpd5Bkx{v:p}+vu' );
define( 'SECURE_AUTH_SALT', 'Hz]2~rtE)B1;,!eUM&GjylZ=kA=j>vEpYg#u]98s/X7R*|,`w>ACC]cE/{V+YCTP' );
define( 'LOGGED_IN_SALT',   '*`pX%Ni`wYDbp@XyuROj*1xGpL(8diN9rYsjpwAx#!F<chYslLkUl>*vF1FlPW#>' );
define( 'NONCE_SALT',       ']+nz{:yj@V}a:u}dP!Rtvxu7+qWfvZ0<O[csV^QnGV~O!)N!0(X]n![jD]81sy<@' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
