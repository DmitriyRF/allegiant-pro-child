<?php

/**
 * Register a custom post type called "class".
 *
 * @see get_post_type_labels() for label keys.
 */
function cpotheme_new_post_type_class_init() {
    $labels = array(
        'name'                  => _x( 'Classes', 'Post type general name', 'cpotheme' ),
        'singular_name'         => _x( 'Class', 'Post type singular name', 'cpotheme' ),
        'menu_name'             => _x( 'Classes', 'Admin Menu text', 'cpotheme' ),
        'name_admin_bar'        => _x( 'Class', 'Add New on Toolbar', 'cpotheme' ),
        'add_new'               => __( 'Add New', 'cpotheme' ),
        'add_new_item'          => __( 'Add New class', 'cpotheme' ),
        'new_item'              => __( 'New class', 'cpotheme' ),
        'edit_item'             => __( 'Edit class', 'cpotheme' ),
        'view_item'             => __( 'View class', 'cpotheme' ),
        'all_items'             => __( 'All classes', 'cpotheme' ),
        'search_items'          => __( 'Search classes', 'cpotheme' ),
        'parent_item_colon'     => __( 'Parent classes:', 'cpotheme' ),
        'not_found'             => __( 'No Classes found.', 'cpotheme' ),
        'not_found_in_trash'    => __( 'No Classes found in Trash.', 'cpotheme' ),
        'featured_image'        => _x( 'Class Cover Image', 'Overrides the “Featured Image” phrase for this post type. Added in 4.3', 'cpotheme' ),
        'set_featured_image'    => _x( 'Set cover image', 'Overrides the “Set featured image” phrase for this post type. Added in 4.3', 'cpotheme' ),
        'remove_featured_image' => _x( 'Remove cover image', 'Overrides the “Remove featured image” phrase for this post type. Added in 4.3', 'cpotheme' ),
        'use_featured_image'    => _x( 'Use as cover image', 'Overrides the “Use as featured image” phrase for this post type. Added in 4.3', 'cpotheme' ),
        'archives'              => _x( 'class archives', 'The post type archive label used in nav menus. Default “Post Archives”. Added in 4.4', 'cpotheme' ),
        'insert_into_item'      => _x( 'Insert into class', 'Overrides the “Insert into post”/”Insert into page” phrase (used when inserting media into a post). Added in 4.4', 'cpotheme' ),
        'uploaded_to_this_item' => _x( 'Uploaded to this class', 'Overrides the “Uploaded to this post”/”Uploaded to this page” phrase (used when viewing media attached to a post). Added in 4.4', 'cpotheme' ),
        'filter_items_list'     => _x( 'Filter Classes list', 'Screen reader text for the filter links heading on the post type listing screen. Default “Filter posts list”/”Filter pages list”. Added in 4.4', 'cpotheme' ),
        'items_list_navigation' => _x( 'Classes list navigation', 'Screen reader text for the pagination heading on the post type listing screen. Default “Posts list navigation”/”Pages list navigation”. Added in 4.4', 'cpotheme' ),
        'items_list'            => _x( 'Classes list', 'Screen reader text for the items list heading on the post type listing screen. Default “Posts list”/”Pages list”. Added in 4.4', 'cpotheme' ),
    );
 
    $args = array(
        'labels'             => $labels,
        'menu_icon' 		 => 'dashicons-id-alt',
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'class' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' ),
    );
 
    register_post_type( 'class', $args );
}