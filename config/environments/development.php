<?php
/**
 * Configuration overrides for WP_ENV === 'development'
 */

use Roots\WPConfig\Config;
use function Env\env;

/**
 * Multisite
 */
Config::define('WP_ALLOW_MULTISITE', true);


Config::define( 'MULTISITE', true );
Config::define( 'SUBDOMAIN_INSTALL', true );
Config::define( 'DOMAIN_CURRENT_SITE', 'multisite.local' );
Config::define( 'PATH_CURRENT_SITE', '/' );
Config::define( 'SITE_ID_CURRENT_SITE', 1 );
Config::define( 'BLOG_ID_CURRENT_SITE', 1 );


Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define('WP_DEBUG_DISPLAY', true);
Config::define('WP_DEBUG_LOG', env('WP_DEBUG_LOG') ?? true);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', true);
Config::define('DISALLOW_INDEXING', true);


ini_set('display_errors', '1');

// Enable plugin and theme updates and installation from the admin
Config::define('DISALLOW_FILE_MODS', false);
