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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'virtualservicios_db' );

/** MySQL database username */
define( 'DB_USER', 'debian-sys-maint' );

/** MySQL database password */
define( 'DB_PASSWORD', 'e5DIIpTas0AUuNda' );

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
define( 'AUTH_KEY',         'C$+`N q ]!6.%PG^sr+;=P//ZwuR,PaE*rdR.^taVsdfey/.|/`]_Eo%5a8w!(.y' );
define( 'SECURE_AUTH_KEY',  'uBw%a<F L<=!art957[?5iC%gfB1:?V,+BySExM0aGgkXA}tc_iC/cA s7}!`wCv' );
define( 'LOGGED_IN_KEY',    'U*`hAo:?#JI^QcB}h^9eu!rEd,CqJi:(8rBDVg#r-4-j>TTRR0hZ$UEEV]Py>Tc/' );
define( 'NONCE_KEY',        '_9$/,x_Y&$&t6o3hLa=2kh^6 0S{#/*zlBxxR#JZUoO3=qc.lB]JY.Gt:)I=6T)b' );
define( 'AUTH_SALT',        '!2rz(BLmJTu / :K:Y+q|99C&YpRp#1+m-T+_>^p`6v.0)W`k/9iK*?omJuQdU$b' );
define( 'SECURE_AUTH_SALT', '7i(!p~K+yA<_}W6zN%8LM%.(4B&F/OI#,1]2jg.s8)]$pG$o;C:vBA*zJi*d/$=F' );
define( 'LOGGED_IN_SALT',   'u=,lPrpN%Kyh8zL`E]/(lm_JG4Gz>+*)pmXV0f-lI|pX*$T93-7F:h40/Vb]+X-E' );
define( 'NONCE_SALT',       '5(U*V0h4q5=_>||COoM-4vx<ZgzIPz=nKNom6q#Q|_A8W:Flnl^n|D4QJBg=R*vg' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
