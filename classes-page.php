
<?php 
	/* 
		Template Name: Classe template 
		Template Post Type: page
	*/ 
?>

<?php get_header(); ?>



<div id="main" class="main">

	<div class="container">

		<section id="content" class="content">

			<?php do_action('cpotheme_before_content'); ?>

			<?php if(have_posts()) while(have_posts()): the_post(); ?>

			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<div class="page-content">

					<?php the_content(); ?>

					<?php cpotheme_post_pagination(); ?>

				</div>

			</div>

			<?php comments_template('', true); ?>

			<?php endwhile; ?>

				<section id="classes-posts">

					<?php	$loop = new WP_Query( array( 'post_type' => 'class', ) ); 	?>

				   	<?php	if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

					   	<div id="class-<?php the_ID(); ?>" <?php post_class(); ?>>

					    	<?php the_title( '<h1>','</h1>' );  ?>

					        <div class="class-thumbnail">
								<?php the_post_thumbnail(array(250, 250)); ?>
							</div>

					        <div class="class-description">
					        	<?php the_content(); ?>
					        </div>

					    </div>

				    <?php endwhile; endif; ?>

				</section>

			<?php do_action('cpotheme_after_content'); ?>

		</section>


		<?php get_sidebar('classes'); ?>

		<div class="clear"></div>

	</div>

</div>



<?php get_footer(); ?>