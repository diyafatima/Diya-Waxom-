<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dhs32DtEDy' );

/** MySQL database username */
define( 'DB_USER', 'dhs32DtEDy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Tgtxeen6yn' );

/** MySQL hostname */
define( 'DB_HOST', 'remotemysql.com' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wP)VrJ9@u#Bv^rVnA%Bo9r8<jnH*>hVCR]Fr:m0#uw_4@o-p]{A6Sd2||DvX0/L}' );
define( 'SECURE_AUTH_KEY',  'X/iE5ypyy<u1x(lp@oS[,Btwr|yRh8F5;I._G^]{ p1ef%}.Sr!AMC/D7vxI10R<' );
define( 'LOGGED_IN_KEY',    'B hm0PYKXND*&^6,CH(p SE2!nHe7=H+t2ImkQ;~]LiCa(CSHBIgxS2bM;pW4@?H' );
define( 'NONCE_KEY',        'lj%3gO^.Tw1q:83@zy-Lb4f4AM}KUr!ZS)Lg(T)7I(.~)B+];>ffi87i9xA+jLL>' );
define( 'AUTH_SALT',        'wa>ZX 1I4q7sWt<gKS>kA`M*6oW(~PN0cU0,GakWUZ&{9S]>~xm>82dhF)9C8D>t' );
define( 'SECURE_AUTH_SALT', 'o(wCWz8[Rla_eHw>Xz5CL8B*l+y=^AmwP.:7tGLmR)aaUyM YI@$!0mjf3_rfQ.T' );
define( 'LOGGED_IN_SALT',   ',Jh8yr/A BH&3cBIU>h*DU)0EI6]!;j OzWr.&I&S)h30/h67fV0.;O{qZ{`LCd|' );
define( 'NONCE_SALT',       'c<vV~Ka-6eWtC`~hU1vIC-[FwttlnbhKeB-dOkEBV0@C~fb3yo*GZm3-e,C6`kI@' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'df_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
