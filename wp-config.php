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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'if0_37066067_wp873' );

/** Database username */
define( 'DB_USER', '37066067_1' );

/** Database password */
define( 'DB_PASSWORD', 'p9]Ip82IS-' );

/** Database hostname */
define( 'DB_HOST', 'sql210.byetcluster.com' );

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
define( 'AUTH_KEY',         'fk1dmqlddw7vryhaleoztzpjb41gna7qbou5klunmyjb2nhyywvfaloskclwfjbp' );
define( 'SECURE_AUTH_KEY',  'fnkqtzhkvovtym4dnizc5gra6hu8d8dydehlxealisfh2fwdwhietntxqvzwsks7' );
define( 'LOGGED_IN_KEY',    'yhm0pphr8tbl7hsjbw5xae94hvzu7agpotiowf5ripdijsyrsb9pbarlitag1dlz' );
define( 'NONCE_KEY',        'onzi5yhxjrltyjnpk5bglswln6yosqqbkdru6e0gnfq2b36bkpzqev1vwaisr4lr' );
define( 'AUTH_SALT',        'uluzyplviobov8zzmhlgfr38pa6muculowbwbbxiqxcphz74hjahcdafd8abj8zh' );
define( 'SECURE_AUTH_SALT', 'lvyqqvublus7if2wfp6ld8hwuteapll0dg7vn7ctubp0ibivewyqjzbxync9xthf' );
define( 'LOGGED_IN_SALT',   'blm87of1byh6w9sczoillyki4vu3r6skv9qdtrmyxqrxcedfl5vwr0vpwi1f0dd9' );
define( 'NONCE_SALT',       'hrsn9kmdoevhdj7dom1opav6psc1pt1hwym1icafblrgqflqlkkxejdzr0lqeslm' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpm0_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
