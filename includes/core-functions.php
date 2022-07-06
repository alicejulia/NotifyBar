<?php

// exit if file is called directly
if ( ! defined( 'ABSPATH' ) ) {

	exit;

}

function notify_bar_function($attributes){
  
    $options = get_option( 'notifybar_options', notifybar_options_default() );
    $enable_message_1 = $enable_message_2 = $enable_message_3 = false;
	
	if ( isset( $options['enable_1'] ) && ! empty( $options['enable_1'] ) ) {
		
		$enable_message_1 = (bool) $options['enable_1'];
		
	}

    if ( isset( $options['enable_2'] ) && ! empty( $options['enable_2'] ) ) {
		
		$enable_message_2 = (bool) $options['enable_2'];
		
	}

    if ( isset( $options['enable_3'] ) && ! empty( $options['enable_3'] ) ) {
		
		$enable_message_3 = (bool) $options['enable_3'];
		
	}

    if( $enable_message_1 || $enable_message_2 || $enable_message_3 ){

        //if any 1 of 3 messages is enabled then display the notify bar

        echo "<div class='notify_bar'><div class='alert_bar'>";
        echo "<div><div class='alert_bar_left'>NHPRI Announcements</div><div class='alert_bar_right'><span id='close' onclick='this.parentNode.parentNode.removeChild(this.parentNode); return false;'>Hide Alerts</span></div></div>";
        echo "<div class='notify_bar_messages'>";

        //Display message 1 if enabled
        if( $enable_message_1){
            if ( isset( $options['message_1'] ) && ! empty( $options['message_1'] ) ) {
		
                $notify_message = wp_kses_post( $options['message_1'] );
                echo "<p>" . $notify_message . "</p>";
            }
        }
        //Display message 2 if enabled
        if( $enable_message_2 ){

            if ( isset( $options['message_2'] ) && ! empty( $options['message_2'] ) ) {
            
                $notify_message = wp_kses_post( $options['message_2'] );
                echo "<p>" . $notify_message . "</p>";
            }
        }
        //Display message 3 if enabled
        if( $enable_message_3 ){

            if ( isset( $options['message_3'] ) && ! empty( $options['message_3'] ) ) {
            
                $notify_message = wp_kses_post( $options['message_3'] );
                echo "<p>" . $notify_message . "</p>";
            }
        }

        echo "</div></div></div>";
    }

  }
  
  add_shortcode('notify_bar','notify_bar_function');