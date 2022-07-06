<?php

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

// register plugin settings
function notifybar_register_settings() {
	
	/*
	
	register_setting( 
		string   $option_group, 
		string   $option_name, 
		callable $sanitize_callback
	);
	
	*/
	
	register_setting( 
		'notifybar_options', 
		'notifybar_options', 
		'notifybar_callback_validate_options' 
	); 

		/*
	
	add_settings_section( 
		string   $id, 
		string   $title, 
		callable $callback, 
		string   $page
	);
	
	*/
	
	add_settings_section( 
		'notifybar_section_1', 
		'Customize First Notification Bar Message', 
		'notifybar_callback_section_1', 
		'notifybar'
	);
	
	add_settings_section( 
		'notifybar_section_2', 
		'Customize First Notification Bar Message', 
		'notifybar_callback_section_2', 
		'notifybar'
	);

    add_settings_section( 
		'notifybar_section_3', 
		'Customize First Notification Bar Message', 
		'notifybar_callback_section_3', 
		'notifybar'
	);

		/*

	add_settings_field(
    	string   $id,
		string   $title,
		callable $callback,
		string   $page,
		string   $section = 'default',
		array    $args = []
	);

	*/

    // fields for first notify bar section
    add_settings_field(
		'enable_1',
		'Enable / Disable',
		'notifybar_callback_field_checkbox',
		'notifybar',
		'notifybar_section_1',
		[ 'id' => 'enable_1', 'label' => 'Enable Notification Bar Message' ]
	);

	add_settings_field(
		'message_1',
		'Message',
		'notifybar_callback_field_textarea',
		'notifybar',
		'notifybar_section_1',
		[ 'id' => 'message_1', 'label' => 'Notification Bar Message' ]
	);

	add_settings_field(
		'background_color_1',
		'Background Color',
		'notifybar_callback_field_select',
		'notifybar',
		'notifybar_section_1',
		[ 'id' => 'background_color_1', 'label' => 'Notification Bar Background Color' ]
	);

    // fields for second notify bar section
	add_settings_field(
		'enable_2',
		'Enable / Disable',
		'notifybar_callback_field_checkbox',
		'notifybar',
		'notifybar_section_2',
		[ 'id' => 'enable_2', 'label' => 'Enable Notification Bar Message' ]
	);

	add_settings_field(
		'message_2',
		'Message',
		'notifybar_callback_field_textarea',
		'notifybar',
		'notifybar_section_2',
		[ 'id' => 'message_2', 'label' => 'Notification Bar Message' ]
	);

	add_settings_field(
		'background_color_2',
		'Background Color',
		'notifybar_callback_field_select',
		'notifybar',
		'notifybar_section_2',
		[ 'id' => 'background_color_2', 'label' => 'Notification Bar Background Color' ]
	);

    // fields for third notify bar section
    add_settings_field(
		'enable_3',
		'Enable / Disable',
		'notifybar_callback_field_checkbox',
		'notifybar',
		'notifybar_section_3',
		[ 'id' => 'enable_3', 'label' => 'Enable Notification Bar Message' ]
	);

	add_settings_field(
		'message_3',
		'Message',
		'notifybar_callback_field_textarea',
		'notifybar',
		'notifybar_section_3',
		[ 'id' => 'message_3', 'label' => 'Notification Bar Message' ]
	);

	add_settings_field(
		'background_color_3',
		'Background Color',
		'notifybar_callback_field_select',
		'notifybar',
		'notifybar_section_3',
		[ 'id' => 'background_color_3', 'label' => 'Notification Bar Background Color' ]
	);




}
add_action( 'admin_init', 'notifybar_register_settings' );
