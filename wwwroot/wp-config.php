<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache


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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

//Using environment variables for memory limits
$wp_memory_limit = (getenv('WP_MEMORY_LIMIT') && preg_match("/^[0-9]+M$/", getenv('WP_MEMORY_LIMIT'))) ? getenv('WP_MEMORY_LIMIT') : '128M';
$wp_max_memory_limit = (getenv('WP_MAX_MEMORY_LIMIT') && preg_match("/^[0-9]+M$/", getenv('WP_MAX_MEMORY_LIMIT'))) ? getenv('WP_MAX_MEMORY_LIMIT') : '256M';

/** General WordPress memory limit for PHP scripts*/
define('WP_MEMORY_LIMIT', $wp_memory_limit );

/** WordPress memory limit for Admin panel scripts */
define('WP_MAX_MEMORY_LIMIT', $wp_max_memory_limit );


//Using environment variables for DB connection information

// ** Database settings - You can get this info from your web host ** //
$connectstr_dbhost = getenv('DATABASE_HOST');
$connectstr_dbname = getenv('DATABASE_NAME');
$connectstr_dbusername = getenv('DATABASE_USERNAME');
$connectstr_dbpassword = getenv('DATABASE_PASSWORD');

// Using managed identity to fetch MySQL access token
if (strtolower(getenv('ENABLE_MYSQL_MANAGED_IDENTITY')) === 'true') {
	try {
		require_once(ABSPATH . 'class_entra_database_token_utility.php');
		if (strtolower(getenv('CACHE_MYSQL_ACCESS_TOKEN')) !== 'true') {
			$connectstr_dbpassword = EntraID_Database_Token_Utilities::getAccessToken();
		} else {
			$connectstr_dbpassword = EntraID_Database_Token_Utilities::getOrUpdateAccessTokenFromCache();
		}
	} catch (RuntimeException $e) {
		$connectstr_dbpassword = '';
		error_log($e->getMessage());
	}
}

/** The name of the database for WordPress */
define('DB_NAME', $connectstr_dbname);

/** MySQL database username */
define('DB_USER', $connectstr_dbusername);

/** MySQL database password */
define('DB_PASSWORD',$connectstr_dbpassword);

/** MySQL hostname */
define('DB_HOST', $connectstr_dbhost);

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/** Enabling support for connecting external MYSQL over SSL*/
$mysql_sslconnect = (getenv('DB_SSL_CONNECTION')) ? getenv('DB_SSL_CONNECTION') : 'true';
if (strtolower($mysql_sslconnect) != 'false' && !is_numeric(strpos($connectstr_dbhost, "127.0.0.1")) && !is_numeric(strpos(strtolower($connectstr_dbhost), "localhost"))) {
	define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);
}


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'O&(6CY98A*:NpuPp[f`sh>@({!Zh$HFAVrR3W9yy1=_w; / xYy4v#[ N, A_6;r' );
define( 'SECURE_AUTH_KEY',  'Ztr!DjF<+oh1r!TeYV8B5]gJ`+g$e?=$G_9$c]x(s]N,j>a8eOTUCmY+#]l(EFM*' );
define( 'LOGGED_IN_KEY',    'Bw%o>jv[kr;2!c1GEw5OH gm!g8I JZa/.]262$iS7LaJF/ItmfGj0~{/:p[NDWZ' );
define( 'NONCE_KEY',        '(Ox]sRa&0[$$qURo4:Q>7>x=[9vdQ>MwpfjOTd?8G;^{fzm[^jeDTmN``-|2JZv|' );
define( 'AUTH_SALT',        '(s3ShGtFOIXlt@nwNP,w.Q%_s20A`a_hVu6qZ K}}d1mI8eV~Kc76|Q.9nZ)$4$d' );
define( 'SECURE_AUTH_SALT', 'dx,Gnw xsof~]:56`e(e8~A]vh.RW6#}|xY! 7SnB3C5|q&UZOS^!0I(t;*7N$2k' );
define( 'LOGGED_IN_SALT',   'rW%jq%UDMU/f}}9rBjDv=uI&i0@;+3E<298)7^M[8Qp&sTREf#wb?k=VKNY_tuYD' );
define( 'NONCE_SALT',       '3A( cTs 0L)r9sY[UPP+X?LMM||u0H9^17re3;{,(Q5c,@oUPUoX1KWg8E<7c.w*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */
/**https://developer.wordpress.org/reference/functions/is_ssl/ */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
	$_SERVER['HTTPS'] = 'on';

$http_protocol='http://';
if (!preg_match("/^localhost(:[0-9])*/", $_SERVER['HTTP_HOST']) && !preg_match("/^127\.0\.0\.1(:[0-9])*/", $_SERVER['HTTP_HOST'])) {
	$http_protocol='https://';
}

//Relative URLs for swapping across app service deployment slots
define('WP_HOME', $http_protocol . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', $http_protocol . $_SERVER['HTTP_HOST']);
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', $_SERVER['HTTP_HOST']);

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
