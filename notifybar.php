<?php
/*
Plugin Name:    Notify Bar
Description:    This plugin is used to display notification bar at the top of the website
Plugin URI:     https://www.nhpri.org/
Author:         Alice William
Version:        1.0
Text Domain:    notifybar
Domain Path:    /languages
License:        GPL v2 or later
License URI:    https://www.gnu.org/licenses/gpl-2.0.txt
*/

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// if admin area
if ( is_admin() ) {

	// include dependencies
	require_once plugin_dir_path( __FILE__ ) . 'admin/admin-menu.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-page.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-register.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-callbacks.php';
	require_once plugin_dir_path( __FILE__ ) . 'admin/settings-validate.php';
	
}

//include dependencies: admin and public
require_once plugin_dir_path( __FILE__ ) . 'includes/core-functions.php';

// default plugin options
function notifybar_options_default() {

	return array(
		'custom_url'     => 'https://wordpress.org/',
		'custom_title'   => 'Powered by WordPress',
		'custom_style'   => 'disable',
		'custom_message' => '<p class="custom-message">My custom message</p>',
		'custom_footer'  => 'Special message for users',
		'custom_toolbar' => false,
		'custom_scheme'  => 'default',
	);

}

/*

		wp_enqueue_style(
			string           $handle,
			string           $src = '',
			array            $deps = array(),
			string|bool|null $ver = false,
			string           $media = 'all'
		)

		wp_enqueue_script(
			string           $handle,
			string           $src = '',
			array            $deps = array(),
			string|bool|null $ver = false,
			bool             $in_footer = false
		)

		*/

		wp_enqueue_style( 'notifybar', plugin_dir_url( dirname( __FILE__ ) ) . 'notifybar/public/css/notifybar.css', array(), null, 'screen' );

?>