<?php
/**
 * Plugin Name: Admin Bar Change Plugin
 * Description: To change the height of Admin Bar
 * Version: 1.0
 * Author: Joshua Leon Ruddock
 */

function responsible_headerbar() {
    echo '
    <style type="text/css">
        #site-header {
            z-index: 101 !important;
        }
        @media (min-width: 768px) and (max-width: 1220px) {
            #wpadminbar {
                height: 60px !important;
            }
            div[data-elementor-type="header"] {
                top: 30px !important;
            }
        }
        @media (max-width: 767px) {
            section[data-id="c7ab5f4"] {
                display: none !important;
            }
        }
        div[data-elementor-type="header"] {
            position: absolute;
            top: 0px;
        }
        #site-header {
            border-bottom: none !important;
        }
        
    </style>
    ';
}
add_action('admin_head', 'responsible_headerbar');
add_action('wp_head', 'responsible_headerbar');