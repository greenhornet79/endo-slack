<?php
/**
 * Plugin Name: Endo Slack
 * Plugin URI: http://www.endocreative.com
 * Description: A custom WordPress plugin that allows you to send notifications to your Slack account based on WordPress actions.
 * Version: 1.0.0
 * Author: Endo Creative
 * Author URI: http://www.endocreative.com
 * Text Domain: endo-slack
 * License: GPL2
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'class-endo-slack.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_endo_slack() {
	$plugin = new Endo_Slack();
	$plugin->run();
}
run_endo_slack();