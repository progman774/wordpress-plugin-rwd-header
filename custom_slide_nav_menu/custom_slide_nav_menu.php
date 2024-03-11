<?php
/**
 * Plugin Name: Custom Slide Menu
 * Description: To change the stylesheet of custom menu into right slide one
 * Version: 1.0
 * Author: Joshua Leon Ruddock
 */

function custom_slide_nav_menu() {
    echo '
    <style type="text/css">
        .elementor-nav-menu--dropdown {
            position: fixed !important;
            top: 0 !important;
            left: 0 !important;
            transform: translateX(100%) !important;
            overflow: hidden !important;
            transition: transform 0.2s !important;
            width: 100% !important;
            height: 100vh !important;
            z-index: 100 !important;
            padding-top: 100px;
        }
        .elementor-nav-menu--dropdown {
            display: flex !important;
        }
        .elementor-menu-toggle.elementor-active~.elementor-nav-menu--dropdown {
            transform: translateX(0) !important;
            opacity: 0.7 !important;
            transition: transform 0.3s, opacity 0.3s !important;
        }
        .elementor-nav-menu--dropdown ul {
            width: 100%;
            padding: 10px;
        }
        .elementor-nav-menu--dropdown ul li {
            border-bottom: 1px solid gray !important;
            -webkit-transition-delay: .2s;
            -moz-transition-delay: .2s;
            -ms-transition-delay: .2s;
            -o-transition-delay: .2s;
            opacity: 0;
        }
        .elementor-menu-toggle.elementor-active~.elementor-nav-menu--dropdown ul li {
            opacity: 1;
            transition-delay: .3s;
            transform: translateY(0);
            transition: transform 0.3s, opacity 0.3s !important;
        }
        .elementor-nav-menu--dropdown ul li a {
            font-size: 16px !important;
        }
        .elementor-nav-menu--dropdown ul li::after {
            right: 20px;
            content: "\e912";
            font-size: 16px;
            color: #fff;
            position: absolute;
            top: 50%;
            -webkit-transform: translate(0, -50%);
            -moz-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            -o-transform: translate(0, -50%);
            transform: translate(0, -50%);
            font-family: tfg;
        }
        .elementor-element-9645c6c, .elementor-menu-toggle {
            z-index: 102;
        }
    </style>
    ';
}
add_action('admin_head', 'custom_slide_nav_menu');
add_action('wp_head', 'custom_slide_nav_menu');