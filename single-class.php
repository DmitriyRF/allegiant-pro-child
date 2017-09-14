
<?php get_header(); ?>

<div id="class" class="main">

	<section id="classes-posts">

	 <?php while ( have_posts() ) : the_post(); ?>
        <div class="main-post-div">
        	<div class="single-page-post-heading">
        		<h1><?php the_title(); ?></h1>
        	</div>
            <div class="content-here">
            	<?php  the_content();  ?>
            </div>
            <div class="comment-section-here">
            	<?php //comments_template(); ?>
        	</div>
        </div>
    <?php endwhile; ?>
	</section>

	<?php get_sidebar('classes'); ?>

	<div class="clear"></div>

	</div>

</div>



<?php get_footer(); ?>