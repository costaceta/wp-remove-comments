<?php 

/**
 * Remove comments form
 */
function myprefix_remove_comments_form_frontend() {
    return false;
}
add_filter( 'comments_open', 'myprefix_remove_comments_form_frontend', 20, 2 );
add_filter( 'pings_open', 'myprefix_remove_comments_form_frontend', 20, 2 );

/**
 * Hide existing comments 
 */
function myprefix_hide_existing_comments( $comments ) {
    $comments = array();

    return $comments;
}
add_filter('comments_array', 'myprefix_hide_existing_comments', 10, 2);

/**
 * Remove admin menu comments
 */
function myprefix_remove_admin_menu_comments() {
    remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'myprefix_remove_admin_menu_comments');
     
