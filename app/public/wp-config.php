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
define('AUTH_KEY',         'TGGpLnYfKkTVAR+muD1OeHoN0JPu5TtRQd1gQohH3s/qRd8PIetiA+ww/PlZ3mw7gJW+YsoBvijD3yDigqPIRw==');
define('SECURE_AUTH_KEY',  '26d2BERV3lhUkK3XHkBZFXSIQ8HF03JKtPaHG0AOl60F4r2+vhPkUgg1I4kZHqe+qASsTkXa2VztYhuFjekkQQ==');
define('LOGGED_IN_KEY',    '18sa6sfPQxBPByWp3+ANJGEpxfXW9/XV8WOt5v7UTUutl5pdjiT9XrmAoFfpIrdBayKlnyjrzV2635/c3SdNyQ==');
define('NONCE_KEY',        '49At+deE3afzQfdfd6O7wihmHPPhVJQMlKU769xOUy3dJoaMG7ooZ4nPm1PJn3IrF8uteA/f/dgu23VR9DmZ7Q==');
define('AUTH_SALT',        'xR1P2m1vmqRiTvtnZsv8I+Cpa3CW5b6VuOm9R3IV20S6I8myg7NltEIg1ah05GqLV1UoS5nITAyXg07SN2I6/w==');
define('SECURE_AUTH_SALT', 'Kqo1C6xJ3/hdN6kWvQo5ZyMTqdUbykgQCwrO+zm5g5X59NLcHpuE2VDavsw60s15oqjEEjyCCPbJCxNNJu8nWA==');
define('LOGGED_IN_SALT',   'Ko1+Qn04+06gVa111jCZsVqctGq7bIYt55YXFv6OUpLdDQ/BvdtIqaAiyNxJpNtKx4wKzLn4RbaU6daXsuPR0g==');
define('NONCE_SALT',       'N6g+ZdVhRYxloidk/3cTYR4SQykpSZvPDSMCitTurebbmNdQCv8LW80HD23q1Y/0Y74bb+OrQxmt27DwUmilXQ==');

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
