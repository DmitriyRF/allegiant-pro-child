
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

					   	<div id="class-<?php the_ID(); ?>" <?php post_class("mk-item"); ?>  >
					   		<div class="mk-item-body">
					   			<div class="mk-image-header">
					   				<a href="<?php the_permalink(); ?>">
					   					<?php the_title( '<h1>','</h1>' ); ?>
					   				</a>
					   			</div>
					   			<div class="mk-item-image">
					   				<a class="mk-image-block" href="<?php the_permalink(); ?>">
					   					<?php the_post_thumbnail(array(300, 300)); ?>
					   					<div class="anons">
					   						<p class="anon">
					   							<?php //the_content(); 
					   							echo mb_strimwidth( get_the_excerpt(), 0, 150, '...');
					   							?>
					   						</p>
					   					</div>
					   				</a>
					   			</div>
					   			<div class="mk-item-desc">
					   				<div class="mk-item-price">
						   				<div class="mk-item-price-value">
						   				100$
						   				</div>
						   				<div class="mk-item-price-text">
						   				</div>
					   				</div>
					   				<div class="mk-item-price-button">
						   				<a href="" class="btn">
						   					<div class="btn-content">Order now</div>
						   					<div class="btn-hover">
						   						<span>Order now</span>
						   					</div>
						   				</a>
					   				</div>
					   			</div>
					   			<div class="mk-item-select">
					   				<?php $classes_schedule = get_post_meta(the_ID(), 'PeriodDetails', true); ?>
					   				<?php  printf($classes_schedule); ?>
					   				<div class="mk-item-classpicker"></div>
					   				<div class="mk-item-timepicker">
					   					<input class="timepicker" />
					   				</div>
					   				<div class="mk-item-datepicker"></div>
					   			</div>
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