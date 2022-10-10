<?php 
/*
Plugin Name: Blurry
Plugin URI:  https://github.com/
Description: For blurring names and emails in the sites view of multisite for privacy reasons when presenting/making tutorials.
Version:     1.0
Author:      ALT Lab
Author URI:  http://bionicteaching.com
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Domain Path: /languages
Text Domain: my-toolset

*/
defined( 'ABSPATH' ) or die( 'No script kiddies please!' );


function blurry_enqueue_custom_admin_style() {
        wp_register_style( 'blurry_css', plugin_dir_url(__FILE__) . 'css/blurry.css', false, '1.0.0' );
        wp_enqueue_style( 'blurry_css' );
        wp_enqueue_script('blurry_js', plugin_dir_url(__FILE__) . 'js/blurry.js','','1.0.2', true);
}
add_action( 'admin_enqueue_scripts', 'blurry_enqueue_custom_admin_style' );




//LOGGER -- like frogger but more useful

if ( ! function_exists('write_log')) {
   function write_log ( $log )  {
      if ( is_array( $log ) || is_object( $log ) ) {
         error_log( print_r( $log, true ) );
      } else {
         error_log( $log );
      }
   }
}

  //print("<pre>".print_r($a,true)."</pre>");
