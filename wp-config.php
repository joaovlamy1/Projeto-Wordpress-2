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
define('AUTH_KEY',         'fJGx7lrTxw/HWVI2ap2HMzTgg83DGuNb6B/IqP++PcH9B95Dnk2bVC7UmGl869UNntfOTLAHDuurdZo8kiTxLg==');
define('SECURE_AUTH_KEY',  'Ar7niuaFRjYq4uD4sBgCd2GQk7an28HsHJVXCODX26x0pLoc3qPwNOlQ9xejib7hJzB5qh1mCPQrIv3dE6CrTw==');
define('LOGGED_IN_KEY',    'uqwW3zBZ8Uv2mPydFHdavLCVTa+obzj3hxSy9ExivVfyNquUe8pmx/XRElhsyHgZkh9deXNjAD87b5g52zQnqA==');
define('NONCE_KEY',        '6mMfrzZHlGWXQ6FR8q+oqbvLmRtwfzNxQnC+GiOw3EjI0yP86ZKPBYMM7Huim9umXLFa8buTON97evN22jr1zA==');
define('AUTH_SALT',        '6bjQ+DBfp+fUQeDX1Jp8XEDpRTVHMIZDD1imkHN01jUG5kyr8zEcGL0ADlZVToYxXgt29BeWVKJW5SneZ2V46g==');
define('SECURE_AUTH_SALT', 'sKfMcLXtWTk5iOzno0FY4eaHXupjWEftgefo1kha6FzoF1+MUhUZmbve4AsPVhMb4xwEB+2NZdb4oj2g3oYIMw==');
define('LOGGED_IN_SALT',   'LCFIKJLgZZoY0ssIUFmzpPAThOIa9ApTSEdKUWdwKNbJ8IXA7afstI1fEeskI86sPme4gPAre6ZCVrVcB1qj3g==');
define('NONCE_SALT',       '70qNHTcTTEDgRxrO6CunNokgOXRxcTvqKsXkYSp1GAzRVQf9Xf+D2YbukFXID/wVd+BrNo96gbMzSeorDYnuBA==');

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
