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
define( 'DB_NAME', 'portfolio' );

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
define( 'AUTH_KEY',         'oly}o0prlIBE>90c$T[FXw5?Q&YG,V!&-?$p>0vrw[nhG>aEN+9HwVxGWQLNBpQ[' );
define( 'SECURE_AUTH_KEY',  'Zm%TqL`C3l<YI3G5<d7$}*G`u8EK;y>x4m`;O;YJc1jXpOCH/0V,O_I*&)?wb4E:' );
define( 'LOGGED_IN_KEY',    '%{Mr[uvjYM5H)`P08%Io[Du]Ox;{c9CvDp8#a@9b1gy?ZXGk-ksuVfULbjZ=RS0Q' );
define( 'NONCE_KEY',        'N4?f&dQ<,`Kys?GWYu;VsgI4E#UHw!qwIT;Bpq1Qi=3ueUzpKB9M sn?^0iXn5vH' );
define( 'AUTH_SALT',        'l{PcnU>}J*@G[nU$SQx0y{8V:u6+H.z+7 DShxLG)$@(;BUiQk;t5;H.Pmm}CNWA' );
define( 'SECURE_AUTH_SALT', 'j0fDafi<@KD5#tq1H5dnId*K)cS^MQXre7p]kU$yad6%[KOQYWM7 )>c}|Rk*ury' );
define( 'LOGGED_IN_SALT',   '[w5?QmOXsX9n}+lOJuUVFcZEZ9#6u%IC[/eQ$4Zh<1f6WF /-7H8>uNEl2GjX{Xj' );
define( 'NONCE_SALT',       '7%s@?N=RS`plS,?}NuZ@X^XZ=SV_gYe7]4dam63LezVaH4=Y43,w@M!plj=)mnIb' );

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
