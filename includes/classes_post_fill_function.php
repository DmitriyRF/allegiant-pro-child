<?php


function function_cpotheme_callback_for_the_metabox($post){
	    global $post;
	    // Use nonce for verification
	    wp_nonce_field( 'stealingcore_name_of_my_action', 'classes_name_of_nonce_field' );
	    ?>
	    <div id="employee_meta_item">
	    <?php
	
	    //Obtaining the linked employeedetails meta values
	    $employeeDetails = get_post_meta($post->ID,'employeeDetails',true);
	    $c = 0;
	    if ( count( $employeeDetails ) > 0 && is_array($employeeDetails)) {
	        foreach( $employeeDetails as $employeeDetail ) {
	            if ( isset( $employeeDetail['name'] ) || isset( $employeeDetail['bio'] ) ) {
	                printf( '<p>Name<input type="text" name="employeeDetails[%1$s][name]" value="%2$s" />  Package : <textarea name="employeeDetails[%1$s][bio]"  rows="4" cols="50" >%3$s</textarea><a href="#" class="remove-package">%4$s</a></p>', $c, $employeeDetail['name'], $employeeDetail['bio'], 'Remove' );
	                $c = $c +1;
	            }
	        }
	    }
	
	    ?>
	<span id="output-package"></span>
	<a href="#" class="add_package"><?php _e('Add Employee Details'); ?></a>
	<script>
	    var $ =jQuery.noConflict();
	    $(document).ready(function() {
	        var count = <?php echo $c; ?>;
	        $(".add_package").click(function() {
	            count = count + 1;
	
	            $('#output-package').append('<p> Name <input type="text" name="employeeDetails['+count+'][name]" value="" />  bio : <textarea name="employeeDetails['+count+'][bio]" rows="4" cols="50" ></textarea><a href="#" class="remove-package"><?php echo "Remove"; ?></a></p>' );
	            return false;
	        });
	       $(document.body).on('click','.remove-package',function() {
	            $(this).parent().remove();
	        });
	    });
	    </script>
	</div>
<?php
}