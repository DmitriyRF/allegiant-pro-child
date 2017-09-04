<?php

function cpotheme_chield_init_sidebar(){

	

    register_sidebar(array('name' => __('Classes Widgets', 'cpotheme'),

    'id' => 'classes-widgets',

    'description' => __('Sidebar shown in classes pages.', 'cpotheme'),

    'before_widget' => '<div id="%1$s" class="widget %2$s">',

    'after_widget' => '</div>',

    'before_title' => '<div class="widget-title heading">',

    'after_title' => '</div>'));

}
