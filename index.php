<?php
/**

 * Plugin Name: WP Prevent Generating Extra Image Sizes
 * Plugin URI: https://eastsidecode.com
 * Description: This plugin prevents WordPress from generating extra (usually unnecessary) image sizes.
 * Version: 1.1
 * Author: EastSide Code
 * Author URI: http://eastsidecode.com
 * License: GPL12

 */

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly


class esCodePreventExtraImageSizes {

	function __construct() {
		
		
		add_action('intermediate_image_sizes_advanced', function() {

			/* Default WordPress */
			unset( $sizes[ 'thumbnail' ]);      
			unset( $sizes[ 'medium' ]);         
			unset( $sizes[ 'medium_large' ]);   
			unset( $sizes[ 'large' ]);           
		
		return $sizes;

		});


	} // end construct

} // end class


// initialise the class with an object
$preventExtraImageSizesInit = new esCodePreventExtraImageSizes();