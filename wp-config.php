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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'cs3>F@U^#pHd@n@Z&>E7z*Sm4&6<)C:k56Ugb1woqH5A@Kcnf3l=Z*O*{*6NcVpO' );
define( 'SECURE_AUTH_KEY',  '-y^oi(ls$6E|`)F}:KqW5hVuh1KTvM lEoRR&vhcK tjGl*KlN+P#8{%}rPcuXPK' );
define( 'LOGGED_IN_KEY',    '^aaXWz$Qi;RT/`Qxm*bB **.C^FlRm}e6chRGt/-m}<R%HGq^jUx:Fjxr3D_qvKD' );
define( 'NONCE_KEY',        'B5nLmiB=t~vDRhq!vw@QoOuXFAJ~jjZLp6G^SO!R}(y6lHd^-C_h::BsQA>W XX^' );
define( 'AUTH_SALT',        'c}/*-~vf$!r+#Cs4t)9/A*!=jO|J/b{?A5(GM.|/.QPc[::rD!~7P)q!&VY4<&ip' );
define( 'SECURE_AUTH_SALT', 'JVZ[qWbGIK1f@yT-osE%$C1)8|]}@,spE4i7#9UQXgf*O+NZO)RZ>t@39PBh5VKk' );
define( 'LOGGED_IN_SALT',   'st,.{-CtNPvF@(^l[]OU=OQAVRwy9lhWkOvLbeZGX8OrF}M*4RZ0PxGTF@fpe__z' );
define( 'NONCE_SALT',       'Fjec.QjAH^$%VHxZ@#Ny9^`>SBQCUuOV/(/EDywi[*F$rB!I/btY<hNAN.?~+[#;' );

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
