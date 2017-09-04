<?php


function add_layout_sections(){
	add_action('cpotheme_header', 'cpotheme_blog_header', 15);
}



if(!function_exists('cpotheme_blog_header')) {
	function cpotheme_blog_header() {
	  ?>
		<div class="blog-title">
			<h2 class="blog-name">Blog</h2>
		</div>
	<?php
	}
}



function remove_sections(){ 
	remove_action('cpotheme_header', 'cpotheme_search_menu');
	remove_action('cpotheme_header', 'cpotheme_shop_menu');
}
