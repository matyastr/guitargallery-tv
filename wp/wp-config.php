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
define( 'DB_NAME', 'guitarga_data3457' );

/** MySQL database username */
define( 'DB_USER', 'guitarga_webus3r' );

/** MySQL database password */
define( 'DB_PASSWORD', 'gu1t@r*123' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         '5+!1:5]7F$#%Rztt.)]:Y|lG7br?xVtpln;u=/Zm[>@J,DV0ES[x~(3kQipAeg_:' );
define( 'SECURE_AUTH_KEY',  '+I<Ga<;%Q}0JoLtUXw{M!V{0E?461s83K):;>=j{bO)1zfiY/39i%-7#)DN7k1I/' );
define( 'LOGGED_IN_KEY',    'C*Wt Gg&;nuz=zIU4%_5BXbmlpZ _vzd.eV/Ru,95/~xq`1yf{HXiV>Q@/n[7{g`' );
define( 'NONCE_KEY',        '~~7,&p58A.&zrGO.81#sj1pD~1bcjVOnZo),t4>K0%S @,9r_gi5=bMYz{.7j8W$' );
define( 'AUTH_SALT',        'u:HR<0/|+XDowK$Q&5]UF.p#6O;[scu9Rp>n)dh)W#Jkib})Z`?X$E1$X4x :dkx' );
define( 'SECURE_AUTH_SALT', '_H`@p{V7%346D  -X1vpk=*XR<@L]Fu !$6kB >)iF(#~5dB@DOa>9Il=^nHxHfl' );
define( 'LOGGED_IN_SALT',   '0RX9oyHVo?G8: $?MxxrD`nLl7lO]R-O)m9hG?k6COcg*<Fx>O.1tP8G3Ci#>+-B' );
define( 'NONCE_SALT',       '<<Kl^GTE&VF`<$1kXcM]cr{w~OMOwO/x:x=H>$+{Q5icJ+TZ&WMY1P4:Tjk g>X/' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'guit_';

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
