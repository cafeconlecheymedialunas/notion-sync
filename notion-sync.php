<?php
/*
 * Plugin Name:       Notion Sync Woocommerce
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

 function wpdocs_selectively_enqueue_admin_script( $hook ) {
   
    wp_enqueue_script( 'my_custom_script', plugin_dir_url( __FILE__ ) . '/src/main.ts', array(), '1.0' );
    wp_scripts()->add_data('my_custom_script', 'type', 'module');
}
add_action( 'admin_enqueue_scripts', 'wpdocs_selectively_enqueue_admin_script' );

add_filter('script_loader_tag', 'moduleTypeScripts', 10, 2);
function moduleTypeScripts($tag, $handle)
{
    $tyype = wp_scripts()->get_data($handle, 'type');

    if ($tyype) {
        $tag = str_replace('src', 'type="' . esc_attr($tyype) . '" src', $tag);
    }

    return $tag;
}
