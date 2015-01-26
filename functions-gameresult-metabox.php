<?php

//add_meta_box( $id, $title, $callback, $page, $context, $priority, $callback_args );

function gameresult_custom_meta() {
    add_meta_box('gameresult-metabox-id', 'Game Result', 'gameresult_callback', 'results', 'normal', 'high');
}
add_action( 'add_meta_boxes', 'gameresult_custom_meta' );


//callback function

function gameresult_callback($post){
    global $post;
    wp_nonce_field( basename( __FILE__ ), '_nonce' );
    $gameresult_stored_meta = get_post_meta( $post->ID );
    ?>
 
    <p>
        <label for="meta-text-home-team-name" class="prfx-row-title"><?php _e( 'Home Team name', 'prfx-textdomain' );?></label>
        <input type="text" name="meta-text-home-team-name" id="meta-text-home-team-name" 
               value="<?php if ( isset ( $gameresult_stored_meta['meta-text-home-team-name'] ) ) echo $gameresult_stored_meta['meta-text-home-team-name'][0]; ?>" />
        
         <label for="meta-text-away-team-name" class="prfx-row-title"><?php _e( 'Away Team name', 'prfx-textdomain' );?></label>
        <input type="text" name="meta-text-away-team-name" id="meta-text-away-team-name" 
               value="<?php if ( isset ( $gameresult_stored_meta['meta-text-away-team-name'] ) ) echo $gameresult_stored_meta['meta-text-away-team-name'][0]; ?>" />
        <br>
        <label for="meta-text-home-team-result" class="prfx-row-title"><?php _e( 'Home Team result', 'prfx-textdomain' );?></label>
        <input type="text" name="meta-text-home-team-result" id="meta-text-home-team-result" 
               value="<?php if ( isset ( $gameresult_stored_meta['meta-text-home-team-result'] ) ) echo $gameresult_stored_meta['meta-text-home-team-result'][0]; ?>" />
        
        <label for="meta-text-away-team-result" class="prfx-row-title"><?php _e( 'Away Team result', 'prfx-textdomain' );?></label>
        <input type="text" name="meta-text-away-team-result" id="meta-text-away-team-result" 
               value="<?php if ( isset ( $gameresult_stored_meta['meta-text-away-team-result'] ) ) echo $gameresult_stored_meta['meta-text-away-team-result'][0]; ?>" />
        <br>
       
    </p>
    <h5> Date: </h5>
        <label for="pbd-event-date"> </label>
        <input id="pbd-event-date" name="pbd-event-date" type="text"
               value="<?php if ( isset ( $gameresult_stored_meta['pbd-event-date'] ) ) echo $gameresult_stored_meta['pbd-event-date'][0]; ?>" />
 <?php
}



// save gameresult
function gameresult_meta_save( $post_id ) {
 
    // Checks save status
    $is_autosave = wp_is_post_autosave( $post_id );
    $is_revision = wp_is_post_revision( $post_id );
    $is_valid_nonce = ( isset( $_POST[ 'prfx_nonce' ] ) && wp_verify_nonce( $_POST[ 'prfx_nonce' ], basename( __FILE__ ) ) ) ? 'true' : 'false';
 
    // Exits script depending on save status
    if ( $is_autosave || $is_revision || !$is_valid_nonce ) {
        return;
    }
 
    // Checks for input and sanitizes/saves if needed
    if( isset( $_POST[ 'meta-text-home-team-name' ] ) ) {
        update_post_meta( $post_id, 'meta-text-home-team-name', sanitize_text_field( $_POST[ 'meta-text-home-team-name' ] ) );
    }
     if( isset( $_POST[ 'meta-text-away-team-name' ] ) ) {
        update_post_meta( $post_id, 'meta-text-away-team-name', sanitize_text_field( $_POST[ 'meta-text-away-team-name' ] ) );
    }
    if( isset( $_POST[ 'meta-text-home-team-result' ] ) ) {
        update_post_meta( $post_id, 'meta-text-home-team-result', sanitize_text_field( $_POST[ 'meta-text-home-team-result' ] ) );
    }
     if( isset( $_POST[ 'meta-text-away-team-result' ] ) ) {
        update_post_meta( $post_id, 'meta-text-away-team-result', sanitize_text_field( $_POST[ 'meta-text-away-team-result' ] ) );
    }
    if( isset( $_POST[ 'pbd-event-date' ] ) ) {
        update_post_meta( $post_id, 'pbd-event-date', sanitize_text_field( $_POST[ 'pbd-event-date' ] ) );
    }
    
    
 
	// Validate that what was entered is of the form: 00/00/00
	if(preg_match('(^\d{1,2}\/\d{1,2}\/\d{2}$)', 'pbd-event-date') ) {
		update_post_meta($post_id, 'pbd-event-date', sanitize_text_field( $_POST[ 'pbd-event-date' ]));
        }
 
}
add_action( 'save_post', 'gameresult_meta_save' );

///**
// * Adds a jQuery datepicker script to Event pages.
// * http://jqueryui.com/demos/datepicker/
// */
function pbd_events_jquery_datepicker() {
	wp_enqueue_script(
		'jquery-ui-datepicker',
		get_bloginfo('template_directory') . '/jquery-ui-datepicker/jquery-ui-1.8.11.custom.min.js',
		array('jquery')
	);
 
	wp_enqueue_script(
		'pbd-datepicker',
		get_bloginfo('template_directory') . '/jquery-ui-datepicker/pbd-datepicker.js',
		array('jquery', 'jquery-ui-datepicker')
	);
}
add_action('admin_print_scripts-post-new.php', 'pbd_events_jquery_datepicker');
add_action('admin_print_scripts-post.php', 'pbd_events_jquery_datepicker');

/**
 * Adds CSS for the jQuery datepicker script to Event pages.
 * http://jqueryui.com/demos/datepicker/
 */
function pbd_events_jquery_datepicker_css() {
	wp_enqueue_style(
		'jquery-ui-datepicker',
		get_bloginfo('template_directory') . '/jquery-ui-datepicker/css/smoothness/jquery-ui-1.8.11.custom.css'
	);
}
add_action('admin_print_styles-post-new.php', 'pbd_events_jquery_datepicker_css');
add_action('admin_print_styles-post.php', 'pbd_events_jquery_datepicker_css');