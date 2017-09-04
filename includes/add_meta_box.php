<?php

function add_metaboxes_to_classes_post_type(){

	include( 'classes_post_fill_function.php' );
	
	add_meta_box(	'cpotheme_classes_meating', 
					__( 'Event time', 'cpotheme' ), 
					'function_cpotheme_callback_for_the_metabox', 
					'class', 
					'normal', 
					'high');
}

function remove_metaboxes_from_classes_post_type(){
	remove_meta_box( 'postexcerpt', 'class', 'normal' );
	remove_meta_box( 'trackbacksdiv', 'class', 'normal' );
	remove_meta_box( 'postcustom', 'class', 'normal' );
		remove_meta_box( 'commentstatusdiv', 'class', 'normal' );
	remove_meta_box( 'commentsdiv', 'class', 'normal' );
	remove_meta_box( 'revisionsdiv', 'class', 'normal' );
		remove_meta_box( 'authordiv', 'class', 'normal' );
	remove_meta_box( 'sqpt-meta-tags', 'class', 'normal' );
	remove_meta_box( 'slugdiv', 'class', 'normal');
		remove_meta_box( 'wpseo_meta', 'class', 'normal');
	remove_meta_box( 'cpotheme_layout_class', 'class', 'normal');
		remove_meta_box( 'fbc_sectionid', 'class', 'advanced');
}