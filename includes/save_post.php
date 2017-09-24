<?php


function classes_post_type_meta_save( $post_id ) {

	    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
	        return;
	    
	    // Verifying the nonce
	    if ( !isset( $_POST['classes_name_of_nonce_field'] ) )
	        return;
 
	    if ( !wp_verify_nonce( $_POST['classes_name_of_nonce_field'], 'stealingcore_name_of_my_action' ) )
	        return;
	    // Updating the PeriodDetails meta data
	    $PeriodDetails = $_POST['PeriodDetails'];
 
	    update_post_meta($post_id,'PeriodDetails',$PeriodDetails);
	}