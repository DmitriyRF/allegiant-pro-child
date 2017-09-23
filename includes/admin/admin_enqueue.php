<?php

function cpotheme_enqueue_custom_admin_style_script(){

	//wp_register_script( string $handle, string $src, array $deps = array(), string|bool|null $ver = false, bool $in_footer = false )
	wp_register_script('jquery-ui-timepicker', '//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.js', 'jquery', false, true );
	//wp_register_style( $handle, $src, $deps, $ver, $media );
	wp_register_script( 'jquery-ui-timepicker', '//cdnjs.cloudflare.com/ajax/libs/timepicker/1.3.5/jquery.timepicker.min.css' , '', '', true );

	//wp_enqueue_script( $handle, $src, $deps, $ver, $in_footer );
	wp_enqueue_script('jquery');
	wp_enqueue_script('jquery-ui-core');
	wp_enqueue_script('jquery-ui-datepicker');
	wp_enqueue_script('jquery-ui-timepicker');
	wp_enqueue_style( 'jquery-ui-timepicker');

}