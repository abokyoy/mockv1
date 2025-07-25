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
define( 'AUTH_KEY',          'Lv9p]#a|r!7X+nVj^_<>=!K<JM%9>gt@AcYfYAc8P:._[oaAnaSlY=xC7tD=80Mx' );
define( 'SECURE_AUTH_KEY',   'RWC+#!+KU/P@]ZQy&-iWf}`#,nm` <w@[0Pwd9&_P=&rKab`G~BvT&p9G)&XHlEj' );
define( 'LOGGED_IN_KEY',     'B,]SY7yZG|]5d`5,;ws?0#&+r#tuG1;G?M%cPgDD+%?AfyKMGuK(B^@>6-3U7TqY' );
define( 'NONCE_KEY',         'MN{$1Y`RLD]K@;k]^Q,vOKH1MKQu5[O~_C.@R}KI%Y7j3.!E(Uu9<#% KFlu,<]a' );
define( 'AUTH_SALT',         '4<Mw+6^xl%m=xIP*&Dx%vy.o+`ZUm{7HSe6K,.vlqfrt)!GO]x+]@vjkoRJ8sk/L' );
define( 'SECURE_AUTH_SALT',  'C6=[+c;?H8!Ncx0nU%~MbOdsOX#s9 CQXTYgtx^V?3]lRg(&-:B@9qJ?Zs@yS2-m' );
define( 'LOGGED_IN_SALT',    'F=(jK2<L_cRoBhZ+[dK.aP*Tf%~p0TN?5bCIih )uW^j}*]=g,xGO:jt-)5Vv7fJ' );
define( 'NONCE_SALT',        'vP[buGy:Hz;jwk&xNp,/:B`ufp_b>DF#!G<H0xUR. VOZmFH2-2&3~pu{X`bugJH' );
define( 'WP_CACHE_KEY_SALT', 'fb(IE& M6R)KKp@DweXj^!zk~/P!LN-c_GlTYmHMF,*j,E031I&xwVpjMVG21[YG' );


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
