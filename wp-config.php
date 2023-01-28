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
define( 'DB_NAME', 'wptest16_db' );

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
define( 'AUTH_KEY',         'z~PF0{rL!M$7iP$jy;!_>3%W^FG6a*]88pK:~1P)iHrJUqc9IN:l+9F0C$),R2I`' );
define( 'SECURE_AUTH_KEY',  'V$JxiDQ}v`K:<kt#A&]&[7$L1^)*Zw&d+X0`oz$hLgG61_Oc43jX(S$C)QJ!,1l7' );
define( 'LOGGED_IN_KEY',    '@.3LV6mp!sHNG#zbhJR|F1{27}WUp+#<r&c=4SL){>Jak,FL`L0[H!l52Uz6}7Do' );
define( 'NONCE_KEY',        '>NYYUIm]k zo]q.V3klk0V3%@Y5/U%!?=d&7CJq-cJyV>PW&w`GGF&_B=UDk[*nE' );
define( 'AUTH_SALT',        'kVBl*~Yhz6p`]dBq6JaiVACQS/?cRxg{AdZI?MobxhTdE)[f;/<oONd!%b,nn<?u' );
define( 'SECURE_AUTH_SALT', '~g@Z5onfVZYaCKd~YG=_f}Ccbu<xrZOn}.S)UtftNW@]D/U-qEW%Cm7;s)I[3Kru' );
define( 'LOGGED_IN_SALT',   'yp2.W=m`J-q&ajB9q|@dWS!F!jkO>|+O=v?kbl50ySk@.q* mX@@asp!2t>F_)PO' );
define( 'NONCE_SALT',       'v48u:`}z}WELD8Jg8PAX)1*e?PCs3[kiyc,}E*O7iR6q:[2>D8o`EO!$H&by3xi7' );

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
