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
define( 'DB_NAME', 'wp_dev' );

/** MySQL database username */
define( 'DB_USER', 'wp_dev' );

/** MySQL database password */
define( 'DB_PASSWORD', 'TRIVIUM0902' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '{VO.f7r]PEW(n=K^S3Fbuwo-DEP04|nRq]>]jtdN9),GeAnw<fRg]^VQ{&:puegq' );
define( 'SECURE_AUTH_KEY',   'x:(I5eku8iVz80VybHQ=h^4+I->2y5iZ7r*[/=U!g&{1!v:4<JbI7uAqA;R>ab`W' );
define( 'LOGGED_IN_KEY',     ',?I&oEWfij]yb~lIW#2k?>YWv<ul2fHpt%x&l1,D>Hr]#^-1N6x#z]5=Rh0%h0x{' );
define( 'NONCE_KEY',         'u8Z7;Zc%/Ugg7E#2m(9[o[ngf]k}voYr7fJ&0JIDb>~A<0?`-1Pvt&=Bq2iMkg&8' );
define( 'AUTH_SALT',         '=sHasWIv(l@7Zsq+6 ?S5joPH%Vb<TJ64yk=Y${bBBBxUEyUn[C>*/]?0whO${hi' );
define( 'SECURE_AUTH_SALT',  'o^+7E;/4^(wiZO-DL9yb5y/C|)F?0V+wEOY1cTlJG:7h3UHU,<*dDvTfv^{}(BD7' );
define( 'LOGGED_IN_SALT',    'aXBfTUjY}NAduO>YzJm%f9H{Qnd`6t6xah&CBwFHszK(!|%vZpg_4A?WKC.#QU4y' );
define( 'NONCE_SALT',        'P`m&VZcD;ab:g3DxTnho*Va).iN>@Dx*{auc^KCC&?$rTP$:v:sjjN*i4#&7nC=1' );
define( 'WP_CACHE_KEY_SALT', '[*cXYQXyc3-$`!u:q1S |^#OEM13!n<J7e# Yy57zImyw^9cMeNF? pNg,y$x=g<' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
