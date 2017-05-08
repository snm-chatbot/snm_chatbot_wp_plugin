<?php
/**
 * Plugin Name: SNM Chatbot
 * Plugin URI: http://novamedia.ff.cuni.cz
 * Description: Lev Manovich chatbot
 * Version: 1.0.0
 * Author: Jan Kryšpín
 * License: GPL2
 */

add_action( 'wp_enqueue_scripts', 'my_enqueued_assets' );

function my_enqueued_assets() {

    wp_enqueue_style( 'snm-chatbot', plugin_dir_url( __FILE__ ) . '/css/botchat.css' );
    wp_enqueue_script( 'snm-chatbot-botchat', plugin_dir_url( __FILE__ ) . '/js/botchat.js', array(), '1.0', true );
    wp_enqueue_script( 'snm-chatbot-main', plugin_dir_url( __FILE__ ) . '/js/main.js', array('snm-chatbot-botchat'), '1.0', true );
}

add_action( 'wp_footer', 'snm_chatbot' );

function snm_chatbot() {

    echo '<div id="snm-chatbot" class="snm-chatbot"></div>';

}
?>