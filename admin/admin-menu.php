<?php

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// add sub-level administrative menu
function notifybar_add_sublevel_menu() {
	
	/*
	
	add_submenu_page(
		string   $parent_slug,
		string   $page_title,
		string   $menu_title,
		string   $capability,
		string   $menu_slug,
		callable $function = ''
	);
	
	*/
	
	add_submenu_page(
		'options-general.php',
		'NotifyBar Settings',
		'NotifyBar',
		'manage_options',
		'notifybar',
		'notifybar_display_settings_page'
	);
	
}
add_action( 'admin_menu', 'notifybar_add_sublevel_menu' );


