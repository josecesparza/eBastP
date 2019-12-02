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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'T896lCqygYWfaWPmxwbDlFOQraLSYxUATOIzmqBwbFgIfpSIOTzhqEynT26OBSZhoUnKB6OfjkuyBu5m0TDYmw==');
define('SECURE_AUTH_KEY',  'X072mrjvZRlgdpZSDP0dZuk9ZCf6lTatA4CCKPYZ3pA11+eVGc05UQy6XOhEyk3mz0qVWct23UJh+agd2iPkZw==');
define('LOGGED_IN_KEY',    '4dN51slKiAA6C4sYTfgP+e+j7XuX2tkFoby+30LmVMdgbN3XeukbODs8hBHK08S0fj14C7V2oiJqZhGpocetRQ==');
define('NONCE_KEY',        'S8X+ppj4/mQxQkpxzJDqfPucHhkGZFC/lT6JYasMHSLVmBJan14z5aNt2HQ+Ev10Uaq0XyzK4K0wDAZcKruBow==');
define('AUTH_SALT',        'm5Mg5za2wht7tQ1BrHCzbJfUBJg3gouHzE4m+ewDAOjANN+Q/qLJUMjpEO2Z0TIRD1SmvYSHdA5dggNd6wmTOw==');
define('SECURE_AUTH_SALT', 'viOdVgJ8Japy13LO1+oxJgVKcfGN7v5hHHzt85IMJD1jDtqC+pfaXveExBPwXmHyLcKSoB06dLJm6pd0KSTYBQ==');
define('LOGGED_IN_SALT',   'JGKvs//P7akIGTs659IOllNhsIH5ZT3iluDUV1zpAiFwmACPUJqeE4tyrBFOMPL+QHn7fdAiJ+ZoiMLTZu5CGA==');
define('NONCE_SALT',       'MZVtmy9EtRLFhMnhGCP4p5LRQwrpLHffktb1ESwDZ6wBgHakWEFQ1RzHqddhisVstFlhUeafx5HQZLWYAqFr6A==');

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
