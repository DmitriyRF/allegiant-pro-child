<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div class="outer" id="top">
		<?php do_action('cpotheme_before_wrapper'); ?>
		<div class="wrapper">
			<div id="topbar" class="topbar">
				<div class="container">
					<span class="small">WE SHIP INTERNATIONALLY</span>
					<div class="clear"></div>
				</div>
			</div>
			<header id="header" class="header">
				<div class="top_header">
					<div class="container">
						<?php do_action('cpotheme_header'); ?>
						<div class='clear'></div>
					</div>
				</div>
				<div class="menu_main_bot">
					<div class="container">
						<?php do_action('cpotheme_top'); ?>
					</div>
				</div>
			</header>
			
			<?php do_action('cpotheme_before_main'); ?>
			<div class="clear"></div>
			
			
			