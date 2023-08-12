<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/*
 * Plugin Name:       Notion Sync Woocommerce B
 * Plugin URI:        https://example.com/plugins/the-basics/
 * Description:       Handle the basics with this plugin.
 * Version:           1.10.3
 * Requires at least: 5.2
 * Requires PHP:      7.2
 * Author:            John Smith
 * Author URI:        https://author.example.com/
 * License:           GPL v2 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Update URI:        https://example.com/my-plugin/
 * Text Domain:       my-basics-plugin
 * Domain Path:       /languages
 */
require "vendor/autoload.php";

define("DIR_URL",__DIR__);



/*
use Notion\Notion;
use Notion\Search\Filter;
use Notion\Search\Query;
DEFINE("NOTION_TOKEN","secret_uPBBR6snphU8rKertMWty82DqrUNgGcVe4PJf5fCCSi");


/


add_action( 'elementor/dynamic_tags/register', function ($dynamic_tags_manager) use($notion_database) {
    $databases = $notion_database->get_databases();

    foreach($databases as $database){
        var_dump($database);
    }
} );


add_action( 'elementor/dynamic_tags/register', function () use($notion_database) {
    require_once( __DIR__ . '/src/dynamic-tags/demo-field-tag.php' );

	$dynamic_tags_manager->register( new \CWPAI_EL_dynamic_tag_demo_field );
} );
*/



function elementor_test_addon() {

	// Load plugin file
	require_once(DIR_URL. '/includes/plugin-init.php' );

	// Run the plugin
	PluginInit::instance();

}
add_action( 'plugins_loaded', 'elementor_test_addon' );