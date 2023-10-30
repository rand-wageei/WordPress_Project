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
define( 'AUTH_KEY',         '%z g~(omtm;>(,5rb7?n]dh?M]/G` ~tn.zppTDmInaRb]9To!<[DpTl#}^k@sM}' );
define( 'SECURE_AUTH_KEY',  '*sx{%z^378R}]?)7Rw9CGYPg9^)/CC:g?y*J>srg:#4Q$mZ;G]QEx;]^4?BUj)6+' );
define( 'LOGGED_IN_KEY',    'bJx=~{O!K/5(T^Y?+p-(,?SP(+_UBZGeAi!m.tC`<kaRODJ&b*e^.HSPcz}yk}Mb' );
define( 'NONCE_KEY',        '{GE=f,F0V8s/MpTKlvo,F#2i6vyK,,l;.HT%JfP|hMeuOwr|q(Zln3aVb>UX%A+6' );
define( 'AUTH_SALT',        'D/<F@`#E^x;_)Ci4whVS.`>)n+};Q15mSqJOMBa:gCwPsjb*o7^i,gKiF0Q>Mbp@' );
define( 'SECURE_AUTH_SALT', '-]1z:9f9* UkzA}-`7BEPW^Pm?<s15C~kjQ#Ko$i$<`B3K$px-;2wV$Mp;NU!Xc.' );
define( 'LOGGED_IN_SALT',   'QF1!)Qr~&AZpojFrS$-B MeD)L]rA-o|2cI9UY+c.O^.EZ{t`#&KzaTKvCVKUkgi' );
define( 'NONCE_SALT',       '6>@{Ch=j^5t?1*-d3hl}i(IaW<P~vgBcO.qKJlIS7:c$BY+5=w=oF47*Jwx3etw9' );

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
