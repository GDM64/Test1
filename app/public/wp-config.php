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
define('AUTH_KEY',         'z++As5KiiIrusJU02aj9iErsiUieWQNxMfAob+/6q42omnCLohZ2rEkNW8BNqltbNtZWmp0xI3HZVEAjGhrtoQ==');
define('SECURE_AUTH_KEY',  'FK10z9k564OYvCz0FbtxSld36CH3nqTGfcjjSF3Hm0xWcuHBPI09e61RZVaWtIV4WI+RIJMfKlp4bhQ42aJBXQ==');
define('LOGGED_IN_KEY',    '7RQbGKxDuRFUKxc5kzI2M+Qt8M7B9/KwbPFdbbMj3mVBnXIbhPIhHLltHZpiU5VNTj041q3lRf8F/6tx7NvtmA==');
define('NONCE_KEY',        'Pysgn2ioa888UPf2yRUbUthQD83Ld5evRerX+NLmzRG0FyV5uVRg5r3osQ5FP0LpWiGEyVancrFXrz3kr/zbHw==');
define('AUTH_SALT',        'nQQdXoeRDV5cfUm89T2L10pUQIh1lQwTkP/t6Lm0xLTaDqQZWliHdXTdkRun/gRjLKaOc2kASSw6+vw8GFDtpg==');
define('SECURE_AUTH_SALT', 'TUfrDtwWlNT5twvtOyj639Q8mq2lS2cfy5suFgXcNW7eZULQPNun0thM8tGO0f6ATYPEMcd5brUkmZ4n8qfm1Q==');
define('LOGGED_IN_SALT',   'D1FVA3BrjAd3qiMBBQkTPItcPcHlgkUCGXwX/6xszGGAIfDqVC6PZmpkmN0a1Qi5y4b/pXBxAEd/HkcQuDoNAg==');
define('NONCE_SALT',       'gX03rOXDSUtGmTpvBJJdJUIZ1iPjqEOxr6PuBDKR2FlIurILpJ2hwbFNLhR8ca3TrICp6Q9bpgan+P8/UV/CQA==');

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
