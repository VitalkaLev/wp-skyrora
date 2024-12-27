<?php

/*
 * @wordpress-plugin
 * Plugin Name:       Skyrora Mailing
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       skyrora-mailing
 */

if ( !defined( 'ABSPATH' ) ) {
    exit;
}

define( 'SK_VERSION', '1.0.0' );
define( 'SK_TEXT_DOMAIN', 'skyrora-mailing' );
define( 'SK_PLUGIN', __FILE__ );
define( 'SK_PLUGIN_BASENAME', plugin_basename( SK_PLUGIN ) );
define( 'SK_PLUGIN_NAME', trim( dirname( SK_PLUGIN_BASENAME ), '/' ) );
define( 'SK_PLUGIN_DIR', untrailingslashit( dirname( SK_PLUGIN ) ) );
define( 'SK_PLUGIN_DIR_URL', plugin_dir_url(__FILE__) );

include_once SK_PLUGIN_DIR .'/inc/init.php';
include_once SK_PLUGIN_DIR .'/inc/page-html.php';
include_once SK_PLUGIN_DIR .'/inc/list-subcribes.php';
