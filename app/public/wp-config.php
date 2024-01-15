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
define( 'AUTH_KEY',          '#m[:WE-7|v)Q0X3ee7x&R^a{X9<NXlVRRg!k7&Z%{;yGca=J7o>D]x*MMrOB4jd<' );
define( 'SECURE_AUTH_KEY',   'q(6J&D0MT]QX1P,mB vR*Gnm^0SG` B8/IT5w<c8SaA>agl.,OSho063>wD}Z,HZ' );
define( 'LOGGED_IN_KEY',     'Zaj)ytl@KBu?Ngk.;X?|:sMb1B.3$6S!]9 j_7)W8F5A,Gv)c<MAaD]&=}m8L>;J' );
define( 'NONCE_KEY',         '_78}lvvC;/}^EUz|K(,tzyW{NU-A`SA6h[q05rrkTejH((jJt?It8KdI{N|HRjfy' );
define( 'AUTH_SALT',         'zlpBB+<*)@MZ,?]b)e4t3>|Z~lbrTzjx;=5,fC(g64jw9;+gFnZxA=Yyp9yo7;>;' );
define( 'SECURE_AUTH_SALT',  'Q,h+Yc2v8cB+&fkVpConH~Bw#WB[6_,`jO2|g]&hAXRI8Yv,g+@~OVerUe_!r#;$' );
define( 'LOGGED_IN_SALT',    'I[N{&A 2mTXFRJx|*Hp:O7~#lHjHu0xkCbz<`g+2q}PH78sP:n$3*1o>34`dh?K{' );
define( 'NONCE_SALT',        '3is.@(8bKKS9NKUU_+CAp8f`dgh]J-nH|Y~hhGche xJOOw_Ll:kDv:1sr-Tn/i<' );
define( 'WP_CACHE_KEY_SALT', 'aKVhx*z`D(~R/Po&pPM9gp^OJ-+W3~^o1Z.}F% 8}O?OeL.x,~Ik[+/8;vOjC(&i' );


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
