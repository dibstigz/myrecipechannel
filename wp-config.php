<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mrc_testing');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'mysql');

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
define('AUTH_KEY',         'k4drvuctvfgvb9o7eg3pgv20suoxu8fpfxxnfelji6va1rb4hgplfrhoxfzylwbr');
define('SECURE_AUTH_KEY',  'h4bkfniw9otl17atauiyti6o7j6ongrjzs7yzvihp7utg5azyvvhlmotuiar3rnw');
define('LOGGED_IN_KEY',    'ah6fbl48nmxj9x0gbrwptclculrih0tzygrrktfsar3zip4mjj3pvf9ej8uuwmip');
define('NONCE_KEY',        'b7oz2ezqp0wuaz2cp93qzw1pkqf0lm8fs0rg21ppd7glt9b3hpwvgavi7p9blku7');
define('AUTH_SALT',        'pp4ea3jodgcgfobv7vr7pmxenlgf04zu1wvz1ojcwxag4hj5kg4xqckcccubmee1');
define('SECURE_AUTH_SALT', '3buf2prdahpqylgoz3g8uyjiecxhwrcc1kcydvhl0mbjru12ajsfpes2tj7yk0aq');
define('LOGGED_IN_SALT',   'jihr1gker6p4mxgta80c6exoervbcjkcbkbqfwyjghjyc7o9yovnqxhhqtah3eje');
define('NONCE_SALT',       'wag8btjrhqirbrwokcfxxmtr788worlbeqkchayqscnxigu8prixomuyp7xddg7d');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
