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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          ';R/!lwbmiU`HRFizWY4uFkJ+J ;es*~-w1F~0P}lT=6?mbl@]<GQsog*0]|[/J[H' );
define( 'SECURE_AUTH_KEY',   '<.L1s(wcI20sV`g?p~Y<<U9.>km mqNOzg,vJY{!^ 9<,XnOD6xG0m^1:86;~8w:' );
define( 'LOGGED_IN_KEY',     '%HKrmgr]#=]}9U(_6WF.*(]SYZdS)D/>!8$fB@5pRG>@bYxt5xeA5xZj<YE)(!fX' );
define( 'NONCE_KEY',         '^%G;j`xD%L2X)c|e#(6%nt$+aeA7)!.iiO5+Mm`d^1MsatCe6X.Bw%|QwAW}r1=w' );
define( 'AUTH_SALT',         'KPsd)-$=C9R6h CZ-`s2=!AyR @7>~}lo@Jq5ovOK;_~ddCz8E,Zh).->/VsHT_X' );
define( 'SECURE_AUTH_SALT',  '`]WAB _@@IN+Q>SpVXsA|4s+=:p/,?*#5d9]mU^f=Lhh)wLwv`W6@nH<t6,e5.hZ' );
define( 'LOGGED_IN_SALT',    '+XiL+`e}H7p?FN>c=^d/#f0eJ*bB`ncQF,]$Hd/hQD3OYcy!%cK|T-{E*<;K HG0' );
define( 'NONCE_SALT',        'F><vfAA.JL1;E/wo/*1VKl~,hJrNM/EjF@u~%)K{oufk@sbNK%Z:n`U)gE0y$g54' );
define( 'WP_CACHE_KEY_SALT', '0184u>-Fs,4{*Y[Ux5s|;C]#_hydp9iNzZ_6iK5:`NaO_Wg&hg;/>Y9*Xi?^.A/)' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
