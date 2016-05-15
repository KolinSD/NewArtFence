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
define('DB_NAME', 'naturala_wp897');

/** MySQL database username */
define('DB_USER', 'naturala_wp897');

/** MySQL database password */
define('DB_PASSWORD', '7GS7V-X)7P');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'zpudve7askdtt1twnnrugusgtuqoqyb8vwiaxwzk33ztfmwzdo6yvvinztbmpt5n');
define('SECURE_AUTH_KEY',  't5gbtli3bng31kbdfc9wnhf4jlrnunwzp0miszcl8oe4a8hofnwhk17wkcucp4qu');
define('LOGGED_IN_KEY',    'xfdupou9zunzr2dya9soqlzeeoqkaz9xlb7sgvxkbm8oelkocu0uqqy5bzv6rw4i');
define('NONCE_KEY',        'xmjt5cqti87amk2dopfuyofdfjpadv2xzo5pglnhmzq3jw1q0wrwqsmfnvdztxdx');
define('AUTH_SALT',        'ajrtaeq6haoigc0inbggr8ylmupypfiizb6k1qiu1xjhl9iggoa0gbuwlbyzegsm');
define('SECURE_AUTH_SALT', '59m2bctfj6bjk2cv0teqxstzcigpoa7ylmnzfuhs3waswctthins801glw7q017m');
define('LOGGED_IN_SALT',   'xc0uhtleufhuzejhvaapshkobk3ilhlgqruvgwhrvx0jsfnxe5uwea214kjqxz4p');
define('NONCE_SALT',       'od6muk1mzo8qfnhdctvublo3udhiwkanj2w6w9c6xvfuu98oong3srwbdoimuppj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpzp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
