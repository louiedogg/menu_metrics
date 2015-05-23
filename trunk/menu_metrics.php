<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://example.com
 * @since             1.0.0
 * @package           menu_metrics
 *
 * @wordpress-plugin
 * Plugin Name:       Menu Metrics 
 * Plugin URI:        http://example.com/menu-metrics-uri/
 * Description:       Restaurateur Menu Profit Calculator
 * Version:           1.0.0
 * Author:            Your Name or Your Company
 * Author URI:        http://example.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       menu-metrics
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-menu-metrics-activator.php
 */
function activate_menu_metrics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-menu-metrics-activator.php';
	menu_metrics_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-menu-metrics-deactivator.php
 */
function deactivate_menu_metrics() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-menu-metrics-deactivator.php';
	menu_metrics_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_menu_metrics' );
register_deactivation_hook( __FILE__, 'deactivate_menu_metrics' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-menu-metrics.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_menu_metrics() {

	$plugin = new menu_metrics();
	$plugin->run();

}
run_menu_metrics();
