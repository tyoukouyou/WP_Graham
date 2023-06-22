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

define('AUTH_KEY',         'QErYZcDyQRJ64U6NK3jikJryLU4y9wIOI/fWBReu1JJJwMWVBh5GipCAN0OjX+SwaysNrcybNBYdGgb+mHNPUA==');
define('SECURE_AUTH_KEY',  'VftZUd3V45KJS5LH6qaG9NbvNvllMvqEH6/csyLqkZimDsI9tSGJsKBeFAUgRujaCnqApy7IBqayU+8NR7h3RA==');
define('LOGGED_IN_KEY',    '2Y+jz9ANbcQ0GE55oFZ7vYeNw07WL/2flRYyMva2Lw2xb+xhAKlYrGKQEZXoFuzeD5jVto0KTXYSyRtWF8XQ0A==');
define('NONCE_KEY',        'EttVS1L2tZQoMZnrZHSBZqPInMsXVLkLTRDVpYG0GrJrC2EzHpEL/WbUOgSw3vUrxjDE0liw6jPK7J1+pgL2zg==');
define('AUTH_SALT',        'em0RVZojWCWT/GnRVZHB+G02tJ4ZC0at5AFGOHUbfkWySRu/lKmiKej2wi1uxC3hfHALF3gxJzCJyAwJMfAXuw==');
define('SECURE_AUTH_SALT', 'AOTmBroi6SIZxG7HA302L0f3XcNNl5EsCtXjN2GYvup2CESL+zpStEl2Gg1Mu9CnRfQtu1a4ZkBLiMfr3QdZ/w==');
define('LOGGED_IN_SALT',   '+Ow4NOpcN4nTMeJs03WWzlgcT/t7E0d+HMCUTr+CH26rgku+uxSyjpujPKTgy9ooNnXI+9YTnjpgpVouVqqpGA==');
define('NONCE_SALT',       'RMYMmeq+zRlFsJQLBSl2MaWsaeTGHMqMYKfo6b94nXFKU6H1yp4so1sRUYzoJsDsaVGmoN77ZFWMAhCUfCSt+A==');