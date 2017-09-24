<?php


function function_cpotheme_callback_for_the_metabox($post){
	global $post;
	    // Use nonce for verification
	wp_nonce_field( 'stealingcore_name_of_my_action', 'classes_name_of_nonce_field' );
	    ?>
	<div id="class_schedule">
	    <?php
	
	    //Obtaining the linked Perioddetails meta values
	    $PeriodDetails = get_post_meta($post->ID,'PeriodDetails',true);

	    $c = 0;
	    if ( count( $PeriodDetails ) > 0 && is_array($PeriodDetails)) {

	        foreach( $PeriodDetails as $OnePeriod ) {

	            if ( isset( $OnePeriod['time'] ) || isset( $OnePeriod['price'] ) ) {
	                printf( '<p>Period: 
	                			<input type="text" name="PeriodDetails[%1$d][time]" value="%2$s" />  
	                			Price : 
	                			<input type="number" value="%3$d" name="PeriodDetails[%1$d][price]" />
	                			<a href="#" class="remove-package">%4$s</a>
	                		</p>', $c, $OnePeriod['time'], $OnePeriod['price'], 'Remove' );
	                $c++;
	            }

	        }
	    }
	    ?>
		<!-- <span id="output-package"></span> -->
	</div>
	<a href="#" class="add_period"><?php _e('Add Period Details'); ?></a>		
	<script>
		    var $ = jQuery.noConflict();
		    $(document).ready(function() {
		        var count = <?php echo $c; ?>;
		        $(".add_period").click(function() {
		            count = count + 1;
		
		            $('#class_schedule').append('<p> Period: <input type="text" name="PeriodDetails['+count+'][time]" value="" />  Price : <input name="PeriodDetails['+count+'][price]" /><a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );
		            return false;
		        });
		       $('#class_schedule').on('click','.remove-package',function() {
		            $(this).parent().remove();
		        });
		    });
	</script>
<?php
}