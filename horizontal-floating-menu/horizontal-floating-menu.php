<?php
/**
 * Plugin Name: Horizontal Floating Menu
 * Description: A simple horizontal floating menu for WordPress
 * Version: 1.0
 * Author: Joshua Leon Ruddock
 */

// Hook for adding admin menus
add_action('admin_menu', 'hfm_plugin_setup_menu');
 
// Action function for above hook
function hfm_plugin_setup_menu(){
    add_menu_page('Horizontal Floating Menu', 'Floating Menu', 'manage_options', 'horizontal-floating-menu', 'hfm_init' );
}

// The function that will output the menu settings page
function hfm_init(){
    echo "<h1>Horizontal Floating Menu Settings</h1>";
    // Here you will include the HTML and form inputs to manage the menu settings
}

// Enqueue the styles for the front end
add_action('wp_enqueue_scripts', 'hfm_enqueue_styles');
function hfm_enqueue_styles() {
    wp_enqueue_style('hfm-style', plugins_url('/css/style.css', __FILE__));
}

// Enqueue the scripts for the front end
add_action('wp_enqueue_scripts', 'hfm_enqueue_scripts');
function hfm_enqueue_scripts() {
    wp_enqueue_script('hfm-script', plugins_url('/js/script.js', __FILE__), array('jquery'), null, true);
}

// Add the menu to the front end
add_action('wp_footer', 'add_hfm_to_front');
function add_hfm_to_front() {
    // Include the file that contains the HTML for the menu
    include_once plugin_dir_path(__FILE__) . 'front-end-menu.php';
}
?>