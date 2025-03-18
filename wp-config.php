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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         ']aoq,&^{AZ.<[G} OSGRE0;.hA`Gj fs9=M!a(u%ch`N3:c6S3^I&Jfbmx$#% ;x' );
define( 'SECURE_AUTH_KEY',  '?2q=G;J*FO{`2{,2P~774@{D)a#WdxUf4;]I>@,AI:c+qSRKJ}%u@-Opr!klj)$?' );
define( 'LOGGED_IN_KEY',    '4TH6vPC`St4+/mVq!C@R_2)/O&xy/QP}c^:OhkH.<>]w?UvUk.<hGK+&Mf(+JCSf' );
define( 'NONCE_KEY',        'e8Mq%?K67Mq-FC]SGyh;Z>$QESR#&(}kn1,;plHs_[@-@R&} tDi3P=EB#:J`OO$' );
define( 'AUTH_SALT',        'rN$;-<bWHw ]kjD]^0<N$:!{ef]5;VIqYbXw@C%fYA(r2!zS<HRE~T}#.J=!9EH!' );
define( 'SECURE_AUTH_SALT', '2KZdv!q (%nO^X,9JF5V7dl%Zt@{t7K4TY#{U.9X?~mX?8e!]i,31pA_{4DlMN*l' );
define( 'LOGGED_IN_SALT',   'dRHb#?Ak0vh]7U7WZ$KmJ7HdAed6dS^HH+tD2LMJ_a6J E?HaRJP*nLYCd+wXC^d' );
define( 'NONCE_SALT',       'sHv6%qW;e6x#;m{ef+m6S}/QXs_6FW=x]_c$37CYfSq1&kr%l9B@^-1<It|`KeF0' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
