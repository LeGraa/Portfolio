<?php

// Configuration common to all environments
include_once __DIR__ . '/wp-config.common.php';

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
define( 'DB_NAME', 'legraa_dk' );

/** MySQL database username */
define( 'DB_USER', 'legraa_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'djEYTFfeKstKXhgLHYJPx57N' );

/** MySQL hostname */
define( 'DB_HOST', 'legraa.dk.mysql' );

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
define( 'AUTH_KEY',         ' qF5V@nj6b4+Aij@XpCqAG|$.z(m)M&PHG8}@Z22.U>kS}T#T-zn.:Z&]F`{mU<B' );
define( 'SECURE_AUTH_KEY',  '[m!HF!F~q ;HfD:!eXK#-Y{kTtWT&IhShL;Rlmr(_(hEt>QZi!rGOgZr={~R#3?Q' );
define( 'LOGGED_IN_KEY',    'IQM6jkV=j=;I1Inh?NRI:2i`yY3>-jr&-] TzrdP?xy,R@]?]CF$8%1[tI6x7}7}' );
define( 'NONCE_KEY',        '~kokiy>_|oi`MlbHr4`0BKOIu<$-ac8E(01*n1VCu}`I,8W<&yckUS~U_;s GU+H' );
define( 'AUTH_SALT',        ';>#<Hm#~&uXkn(W&b[_tsuInx.us)hl&#m`4@_162q-l4CvW@p2r)Zn4SV7-1&*}' );
define( 'SECURE_AUTH_SALT', 'UXtqMuJ4fPj],oCe)>5z$Uln$k/0c@]1,$`[s8vT1X[C.Lf-m3UH*xUW]+YWKux:' );
define( 'LOGGED_IN_SALT',   't7&Kw!)#2CZ$03_cz{W(2Q@.#}7>#Xxh4YW(JK8|0f(KYDXb8(&R#@?Lvt|g8v[Y' );
define( 'NONCE_SALT',       'b<N3}Bw)qZe#.hX-^dxw,6QDn3;+cQNeFLZg%PS]@y*{~B~>J]AnIj K4[U;%3%h' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
