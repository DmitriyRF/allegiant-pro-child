<?php


function classes_post_type_meta_save( $post_id ) {

	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	        return;
	    
	    // Verifying the nonce
	    if ( !isset( $_POST['employee_nonce'] ) )
	        return;
 
	    if ( !wp_verify_nonce( $_POST['employee_nonce'], plugin_basename( __FILE__ ) ) )
	        return;
	    // Updating the employeeDetails meta data
	    $employeeDetails = $_POST['employeeDetails'];
 
	    update_post_meta($post_id,'employeeDetails',$employeeDetails);
	}