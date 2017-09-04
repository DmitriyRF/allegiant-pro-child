<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;


// includes
include ( get_stylesheet_directory() . '/includes/add_theme_support.php');
include ( get_stylesheet_directory() . '/includes/add_custom_post_type.php');
include ( get_stylesheet_directory() . '/includes/change_sections_header.php');
include ( get_stylesheet_directory() . '/includes/register_classes_template_sidebar.php');
include ( get_stylesheet_directory() . '/includes/add_meta_box.php');



// add action
// register post type for classes registration
add_action( 'init', 'cpotheme_new_post_type_class_init' );
//Add layout header pieces
add_action( 'wp_head', 'add_layout_sections', 9);
//Remove layout header pieces
add_action( 'wp_head', 'remove_sections', 10);
// Registers classes widget areas
add_action( 'widgets_init', 'cpotheme_chield_init_sidebar');
// Show only classes metabox
add_action( 'add_meta_boxes',    'add_metaboxes_to_classes_post_type' );
add_action( 'do_meta_boxes',  'remove_metaboxes_from_classes_post_type' );

