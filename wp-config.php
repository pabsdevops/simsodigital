<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'simso' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'Simso2708' );

/** Database hostname */
define( 'DB_HOST', 'simsodb.cfg00mgccneg.ap-south-1.rds.amazonaws.com' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '1R&M4zv{ih$b{CB6nh&irYYSeSqBX`Y3s%p9t_/<Rf[Ay:;%`qjYnzP,B*Q6b B_' );
define( 'SECURE_AUTH_KEY',  'h0@$C2E9PD[LrmmiKoT[vG&KjHNjf5E2Z3+I(n8%KS^yw327<<S&^&kIvY2`=fN#' );
define( 'LOGGED_IN_KEY',    '.trER8K&>v^igpA#d]pb[=h$.dCNY!!9M_I{jSzRH4M0N;GxvSAp,t>x}BIGqr;[' );
define( 'NONCE_KEY',        '521cJ;3zKAgpz59&a,`U3Q=dGF.B,rOYZ*>nb9y[qJ>T N;@0ivI2P>?Dhk$8 gz' );
define( 'AUTH_SALT',        'Da0R[sd36YrkLGPu?iY{CCA5<}@!7O<OavE{4wPQXZ?Ou;kgiSS,|k>--BiZudLz' );
define( 'SECURE_AUTH_SALT', 'Yb#6qPE-_;`IeiyS<vr>x$8NLm~uka!M)q=k:FIN)bKBm=I0@4&mukrYJ=[$I{s,' );
define( 'LOGGED_IN_SALT',   ')L2seW.KV/&kYztSBfGYMB,H*DE]]qMOnQ*e>mSTXwA<l_!K{(t^>GX#u*&NPnbh' );
define( 'NONCE_SALT',       'CWaAUt1=,YiC88 Gw^u![#@cnlXSR!J|c@J3V6L.Dz_=)fwNu_vOw13*#yS_5n`N' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'simso_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
