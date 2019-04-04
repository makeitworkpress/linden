<?php
/**
 * Functions for the Tineke Portfolio Theme
 */
defined( 'ABSPATH' ) or die( 'Go eat veggies!' );

/**
 * Registers the autoloading for theme classes
 */
spl_autoload_register( function($classname) {

    
    $class      = str_replace( '\\', DIRECTORY_SEPARATOR, str_replace( '_', '-', strtolower($classname) ) );
    $classes    = dirname(__FILE__) .  DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR .  $class . '.php';
    
    $vendor     = str_replace( 'makeitworkpress' . DIRECTORY_SEPARATOR, '', $class );
    $vendor     = 'makeitworkpress' . DIRECTORY_SEPARATOR . preg_replace( '/\//', '/src/', $vendor, 1 ); // Replace the first slash for the src folder
    $vendors    = dirname(__FILE__) .  DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . $vendor . '.php';

    if( file_exists($classes) ) {
        require_once( $classes );
    } elseif( file_exists($vendors) ) {
        require_once( $vendors );    
    }
   
} );

/**
 * Boot our theme
 */
$theme = Linden::instance();


/*******************************
Portfolio Custom Fields)
*******************************/
$post_custom_fields =
array(
	"subtitel" => array(
		"name" => "portfolio_subtitel",
		"std" => "",
		"title" => "Subtitel onder hoofdtitel:",
		"description" => "Filling in this field will allow you to add an extra title."
	),
	"image1" => array(
		"name" => "portfolio_image1",
		"std" => "",
		"title" => "Link to portfolio image or video 1 (recommended size is 970x570):",
		"description" => "Filling in this field will allow you to add an image or video which will appear in the slider"
	),
	"image2" => array(
		"name" => "portfolio_image2",
		"std" => "",
		"title" => "Link to portfolio image or video 2 (recommended size is 970x570):",
		"description" => "Filling in this field will allow you to add an image or video which will appear in the slider"
	),
	"image3" => array(
		"name" => "portfolio_image3",
		"std" => "",
		"title" => "Link to portfolio image or video 3 (recommended size is 970x570):",
		"description" => "Filling in this field will allow you to add an image or video which will appear in the slider"
	),
	"image4" => array(
		"name" => "portfolio_image4",
		"std" => "",
		"title" => "Link to portfolio image or video 4 (recommended size is 970x570):",
		"description" => "Filling in this field will allow you to add an image or video which will appear in the slider"
	),
	"image5" => array(
		"name" => "portfolio_image5",
		"std" => "",
		"title" => "Link to portfolio image or video 5 (recommended size is 970x570):",
		"description" => "Filling in this field will allow you to add an image or video which will appear in the slider"
	),
);
function post_custom_fields() {
	global $post, $post_custom_fields;
	foreach($post_custom_fields as $meta_box) {
		$meta_box_value = stripslashes(get_post_meta($post->ID, $meta_box['name'].'_value', true));
		if($meta_box_value == "") {
			$meta_box_value = $meta_box['std'];
		}
		echo '<div style="margin:20px 0;">';
		echo '<input type="hidden" name="'.$meta_box['name'].'_noncename" id="'.$meta_box['name'].'_noncename" value="'.wp_create_nonce( plugin_basename(__FILE__) ).'" />';
		echo '<span style="font-size:14px;">'.$meta_box['title'].'<span>';
		echo '<textarea name="'.$meta_box['name'].'_value" style="width:100%;">'.attribute_escape($meta_box_value).'</textarea><br />';
		echo '<em style="font-size:12px;">'.$meta_box['description'].'</em>';
		echo '</div>';
	}
}
