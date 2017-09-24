
<?php get_header('class'); ?>
<?php $classes_schedule = get_post_meta($post->ID,'PeriodDetails',true); ?>

<div id="class" class="main">
    <div class="container">
    	<section id="classes-posts">
            <?php while ( have_posts() ) : the_post(); ?>
                <div class="main-post-div">
                	<div class="single-page-post-heading">
                		<h1 class="classes-schedule-header"><?php the_title(); ?></h1>
                	</div>
                    <div class="single-page-post-image">
                        <?php the_post_thumbnail(); ?>
                        <?php if ( count( $classes_schedule ) > 0 && is_array($classes_schedule)) { ?>
                            <h2>Pricing</h2>
                            <div class="class-schedule">
                                <table>
                                    <?php foreach( $classes_schedule as $OnePeriod ) { ?>

                                        <?php if ( isset( $OnePeriod['time'] ) || isset( $OnePeriod['price'] ) ) { ?>
                                                      <tr>
                                                            <td><?php echo $OnePeriod['time']; ?></td>
                                                            <td>$<?php echo $OnePeriod['price']; ?></td>
                                                      </tr>
                                        <?php } ?>
                                    <?php } ?>
                                </table>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="single-page-post-content-here">
                    	<?php  the_content();  ?>
                    </div>
                    <div class="comment-section-here">
                    	<?php //comments_template(); ?>
                	</div>
                </div>
            <?php endwhile; ?>
    	</section>

	   <?php //get_sidebar('classes'); ?>

	   <div class="clear"></div>
    </div>
</div>



<?php get_footer(); ?>