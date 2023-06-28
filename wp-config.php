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
define( 'DB_NAME', 'unoworkpress' );

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
define( 'AUTH_KEY',         'B @q,=7A,LDt*rY!`+3K--6l,6m/VInOLjFZfy$Y{yvio1IoHRaA;y6[;o6Ro4./' );
define( 'SECURE_AUTH_KEY',  'eA4i{@*JlY|}-^X`vI?1n]!FOTh$df_wWObCXYU(uc@QaYlr(079R]QnCgy%c058' );
define( 'LOGGED_IN_KEY',    '(GZNZ?h##uzT_p-a9Kk+@VbT-oI_T5pBHe5?*GSweG3;beW^JNo5EfSLG1iKaD?v' );
define( 'NONCE_KEY',        'e:TXTGgVk`ISZWLKPMeK<Vu@g0eW)X}f=h;4W&3-ev-DlhUAHh}6+e>B[0]R90~J' );
define( 'AUTH_SALT',        'qEdapWelwVWJt6W8i<y]6@QQIrS#~</vs>7.SQOSO@CN@x~Mj<kJXKIp5~%k*28v' );
define( 'SECURE_AUTH_SALT', 'J>21k.h&6TBz%9.2hsF;>cUn=:w)]^Mr2~}v?DVVV.B^2[WK% %X9coglaaMKS6l' );
define( 'LOGGED_IN_SALT',   ':SY*  4UGT7oP{,?l1#r|6x<TX @% =ya-Pj{;Ox<_v06N*+.bI-%yP ~|]SX 9^' );
define( 'NONCE_SALT',       'Rm,l[.5.d@rTy${InG|_Y-AGf7_0$Z&^IT0+d2>00E$yp2DlWS _t^!I/&Nf:U^`' );

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
