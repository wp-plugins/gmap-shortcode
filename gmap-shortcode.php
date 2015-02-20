<?php
/**
 * Plugin Name: GMap Shortcode
 * Description: This plugin make you happy when you need to add Google Maps to your pages/posts. You only need to know the url of the map, and use the shortcode [gmap_mc src="google_map_url"]. 
 * Version: 1.0
 * Author: Manuel Costales
 * Author URI: http://www.manuelcostales.com
 */
defined( 'ABSPATH' ) or die( 'Plugin file cannot be accessed directly.' );
/*add javascripts to the header*/
function gmap_shortcode_mc($atts, $content = null) {
   extract(shortcode_atts(array(
               "width" => '350',
               "height" => '250',
               "src" => ''
   ), $atts));
 
return '<div>
         <iframe src="'.$src.'&output=embed" frameborder="0" marginwidth="0" marginheight="0" scrolling="no" width="'.$width.'" height="'.$height.'"></iframe>
        </div>
       ';
}
 
add_shortcode("gmap_mc", "gmap_shortcode_mc");