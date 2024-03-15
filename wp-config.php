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
define( 'DB_NAME', 'wordpress website' );

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
define( 'AUTH_KEY',         '+H]dv70Y+V-3Ud M.luk>uv;7`IEL1eG+15JQIS<_ASY%U=`qx7MKVtnZ>KA)v46' );
define( 'SECURE_AUTH_KEY',  '5[(.!_Sc!>e^$RW,D;Z3~I*4~~/DF.l]l,C,Gim]<m}bG>C6<#g=}p}*Cgi/3|,$' );
define( 'LOGGED_IN_KEY',    '`lT:%,BL)@U7]`!e|2VJ=fn+Q#Bv,nlB/V5Z%u%yTM@=K[J$?@=S[6j+vCIYdb@L' );
define( 'NONCE_KEY',        'Cc`g6<0ZASnA/Y/EzGzOg| T9B3T`,?RjI9(([J2Sf_xrQ?[%PCbuLUz8Fel6RpQ' );
define( 'AUTH_SALT',        'P@R~X%=g>ng>hsRYkmM+eucyK j(*dyzANlzvc<VRhsNUe5<!klwI/*G-<T3oEwM' );
define( 'SECURE_AUTH_SALT', '^M6EJk:lm;,Bx$un@U+*,<S!B@_G/N-?oya?3B@<@>76z?M>K6]8cn6OlS[i7 S+' );
define( 'LOGGED_IN_SALT',   'XOF)(Hgx)$~<hT:~WwNr4wc#LD`@!b=#^JN*,Wk4-DZBbNZxp1[B(E(E9`G,e6Z5' );
define( 'NONCE_SALT',       '|C$Y0?QX4sdLb?[4jr>*mAHP`eXN9;Qn4:nMPCcTa3xe0^pnpUOFy^pSKspUY]mB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wordpresswebsite';

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
