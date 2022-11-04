<?php

add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles', 99 );

function enqueue_parent_styles() {

wp_enqueue_style( 'hello-elementor-child', get_stylesheet_directory_uri().'/style.css' );

}


add_action( 'init', 'register_shortcodes');

function register_shortcodes(){
    add_shortcode('test-shortcode', 'test_shortcode_function');
 }

 function test_shortcode_function()
 {
    echo '<div class="shdiv">This is test ShortCode.</div>';
 }