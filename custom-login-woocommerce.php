<?php

/*
Plugin Name: dotunj-customlogin-woocommmerce
Plugin URI: https://www.wayamkerlearning.com 
Description: Endpoints for Woocommerce API.
Version: 1.0
Author: Edited by Dotunj
Author URI: https://www.wayamkerlearning.com 
*/

defined('ABSPATH') or die('No script kiddies please!');

add_action('woocommerce_api_loaded', function(){
       include_once('class-wc-api-custom.php');
});
add_filter('woocommerce_api_classes', function($classes){
    $classes[] = 'WC_API_Custom';
    return $classes;
  });
