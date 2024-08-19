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
define( 'AUTH_KEY',          'TAFCsSY+hmV2[Dus?j{]FTX37`Uy->{I$]>5i}-F#M[h8]Trw;#x!DFsrt-KdbA8' );
define( 'SECURE_AUTH_KEY',   '`W| v2M>#mXpn2.|9<2CS]}s*gI/N]qb`E(`Hd^kI}jc|L:F1#4@Af%G_!*N2+(A' );
define( 'LOGGED_IN_KEY',     '[21GUi#iOIKF0LNmzItBRV(9+H}j;;QA,W]L<18;$gs*4RQ#F~/vfD.%! &2zk%:' );
define( 'NONCE_KEY',         'fLUzeusS[Wx*!Kw+O/}.5_?}m`*aKK2LAbv4{WW1}7bSMz3mup_2 ZzK1SV.m)MY' );
define( 'AUTH_SALT',         ',5ByRBIxPaf@6]F^s*[I jBBL(c}(TAP^$$pO|*5_M7yvZ35Z~aI/ IDuud;D@Gk' );
define( 'SECURE_AUTH_SALT',  'h#m+S&xZ/YDHYqZ`XeMOo&H* ;8H =|4.?H%]NE2iLWuNqR#VvX|m4qv:`+{Ty:K' );
define( 'LOGGED_IN_SALT',    'T73jX}6T.9e_&M3 VZ}@IP~Iu}La<@|4a-WhXdXIQ3>l+,LX*O;MfAF/UF!L6D_]' );
define( 'NONCE_SALT',        '6@$3]wf)T]$;aLwYw#FQ@g^R$-niI@97Jljbe~Sy[/IeN&xeNi5&]g33DngZ`&B{' );
define( 'WP_CACHE_KEY_SALT', '<Tn(WKWtJ`DnYYMfk? #4q?t>@o0O+er`00Kd@sK:3_i|3,2?]%Cs6bKoE3Opnb]' );


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
