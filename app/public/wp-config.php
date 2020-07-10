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
define('AUTH_KEY',         'smcbtFBQ6xn85cE88lUsSnfByw8YCAWBXpoMHWNwl81+wDYJfhF6baVgu1y0gmi9t0vuXPCdZ8B6MuHuNlLpGQ==');
define('SECURE_AUTH_KEY',  'C+mYFBQ6z+RtmaP4dBoe/5+m2leJiMwhkGghuaR7uixRhxvZwJ+7fuBHHzRi5PCCe6ckY/k9q8T7I3rDvjI4ow==');
define('LOGGED_IN_KEY',    'mJY+WM0rum2kwjoEWJwR6iLnJ0PzNsYIIXeFFTRzJC/rNH9VONOrHsE22uceNA+7tKdrcffgM0eQ1z7/sCbBJA==');
define('NONCE_KEY',        'V3iTm6N1V3ojo2lAy3nhUhR7ly9q1aRFzh+8XBexQs2FhkfWs0PNDdk6Rq5FJcoiFRjhqTXkqJxMF6C+A467zg==');
define('AUTH_SALT',        'MXykkkXMTN/w3G00IxBcXYDL42G60EUJ9FQ33DYRbrfXF3hP5KgcqPNUD5mGIB1+llZHiR+H8gX9wFM83oKQew==');
define('SECURE_AUTH_SALT', 'q2rXB+1S5bhNQVwjaGYVADz++FmhsSJ4HpA59A9CBhTOfps+06fsoONXUtkbuyHGPsGW+Ii4jkDLglglTl0diw==');
define('LOGGED_IN_SALT',   'l2WllehriiMLLEW6z/GI9FgL5IMkN7shs6TICcve8jgaPhbTL8K71QBS/5aoaZ9V02a3LrsD7zStkbq3WA3WmA==');
define('NONCE_SALT',       'dXtjToRc5hE54o0jJ8la9izRqwL4bpygU4LP4UkC7YyRFkD+Ay45H2pZ1GkA4XtOHxMWnbf5qmt6iRiyC3ZzyA==');

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
