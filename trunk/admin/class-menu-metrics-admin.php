<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://example.com
 * @since      1.0.0
 *
 * @package    menu_metrics
 * @subpackage menu_metrics/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @package    menu_metrics
 * @subpackage menu_metrics/admin
 * @author     Lou Richardson <admin@louiedogg.com>
 */
class menu_metrics_Admin {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $menu_metrics    The ID of this plugin.
	 */
	private $menu_metrics;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $menu_metrics       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $menu_metrics, $version ) {

		$this->menu_metrics = $menu_metrics;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in menu_metrics_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The menu_metrics_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->menu_metrics, plugin_dir_url( __FILE__ ) . 'css/menu-metrics-admin.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the admin area.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in menu_metrics_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The menu_metrics_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->menu_metrics, plugin_dir_url( __FILE__ ) . 'js/menu-metrics-admin.js', array( 'jquery' ), $this->version, false );

	}

}
