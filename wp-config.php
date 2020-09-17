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
define('AUTH_KEY',         'e7E7hTi3/wtzS5aLWdxIlQV1PSh+lgGAFi2BR+V4hm16Y9L7Ryyg334QssqzQcIAkW+98rUeNz1YG36zPZWEhg==');
define('SECURE_AUTH_KEY',  'z1lM5jAA0RBqnPFMXS8DD+gHWKNnvm7WL4vdqegnEM4IkDbaIifpKzCBBmRALYeiNhlAKNuEQVm3/m/3DPSQ3w==');
define('LOGGED_IN_KEY',    'bKEurSKTklanO6xHMplzFSicEyOcVT8RCXumNVs2twUfWy9Vvm/eXAvAFO9vWD1Xc7JLUxINRQxEdv8o6ZAuWQ==');
define('NONCE_KEY',        'fiqA/ZpsRGbGPdMttKLu3tZaMq3WEw8lNmfhofP7hdpJxtQ5nnGcOIVDPdvdJO97El+/jYNFiW/pzLvm2sNKOw==');
define('AUTH_SALT',        '7q8rZs7hL1sRGVafKizMmXwG7kMDJv5d/aajrEGYSfKpVttnPqske9G1AcfQGL5shn5KeCHEkYip9JFfvbvOkQ==');
define('SECURE_AUTH_SALT', 'rh+23cXZ1BjQBw9+/zVBZvhn6CtqUj6e3d1uzgFM6dzgU/gcnNe40q3PeVrgDiH7SXz4kPG+zxSAAclAR89v4g==');
define('LOGGED_IN_SALT',   'u/+laFzraNhIjyIxXB6hfgo/SuCYLSeNblpAGHRV9um7WTqv6rurHsyBOSN/yTidA1Rj6c6qkQZTOxy+zR0ROw==');
define('NONCE_SALT',       'Nxo8JihPRoWsJfFcXI2vKfU87a0oMj4B03zKwe5g+IKP6pdUMbgDVR6JXc2VRftrf46O7c6iM2sl9d0qPZYSbg==');

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
