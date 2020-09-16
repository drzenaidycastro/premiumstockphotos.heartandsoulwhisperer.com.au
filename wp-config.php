<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_4wiu8' );

/** MySQL database username */
define( 'DB_USER', 'wp_oksfi' );

/** MySQL database password */
define( 'DB_PASSWORD', '8?6j7jGd' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', '|Nn6[u6xV8|i5PCHB_:J2o2ymLR7c-64APpjiN):!(YAN1|HYd;oZcD:89yQq_4@');
define('SECURE_AUTH_KEY', '&t+~g[U|L!g0)/P3Tbfz92)Ob/Wgj~*Wc79zk_yn&5[+839[!16W]/jD27m7/6W3');
define('LOGGED_IN_KEY', '3Hbu98;y*wncuv9k%MW7eV1yjb18+5]E:-Zh(*n10(4+y#gxtI38iV+nz[%9B&+V');
define('NONCE_KEY', 'LG41)ToG]-5CH1l@d/6b(#a8P89G7U@@F8~-s4]:WS9AP2_:45g583!yFryM1_)6');
define('AUTH_SALT', 'eGf21T6H%g5]50bG2|hl%42uD6&N%;(W#sw;w2+1Yd8_s[RvO:~[PyvE8&4+ghK;');
define('SECURE_AUTH_SALT', 'OZCaZ*IFqUu9ZDgV3Pz6id68h/3um36b);;|FZeVubKdGGkw|63-2u;a+w|E@4j0');
define('LOGGED_IN_SALT', ')4;3%%4rb[7[N&eE!mzU!qZ_Dfh2s52E0]][Q@;9r9j~0W)6tz6H(9Qk4j1t9&7l');
define('NONCE_SALT', '%~p~FfJi~9;|Oz_%]|zpw98oV@L5568D*34Gn%z3v6xgsv1CO47:+zfPXF60hJE!');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'FLYne7_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
