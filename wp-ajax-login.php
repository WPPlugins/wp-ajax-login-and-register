<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://ptheme.com/
 * @since             1.0
 * @package           Wp_Ajax_Login
 *
 * @wordpress-plugin
 * Plugin Name:       WP AJAX Login and Register
 * Plugin URI:        http://ptheme.com/item/wp-ajax-login
 * Description:       Easy to use frontend AJAX Login and Register plugin with no settings required.
 * Version:           1.3
 * Author:            Leo
 * Author URI:        http://ptheme.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       wp-ajax-login
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-wp-ajax-login-activator.php
 */
function activate_wp_ajax_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-ajax-login-activator.php';
	Wp_Ajax_Login_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-wp-ajax-login-deactivator.php
 */
function deactivate_wp_ajax_login() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-wp-ajax-login-deactivator.php';
	Wp_Ajax_Login_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_wp_ajax_login' );
register_deactivation_hook( __FILE__, 'deactivate_wp_ajax_login' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-wp-ajax-login.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_wp_ajax_login() {

	$plugin = new Wp_Ajax_Login();
	$plugin->run();

}
run_wp_ajax_login();
