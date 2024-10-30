<?php
/**
 * @package Howdy-2-Aloha
 * @version 1.0
 */
/*
   /*
   Plugin Name:  Howdy2Aloha
   Plugin URI: http://www.khushapps.com
   Description: Use this plug-in to replace the standard WordPress "Howdy" welcome with "Aloha" in the WordPress admin.
   Version: 1.0
   Author: KhushApps
   Author URI: http://www.khushapps.com
   License: GPL2
   */

// Replace the standard 'howdy' welcome with Aloha
function add_aloha( $wp_admin_bar ) {
    $user_account=$wp_admin_bar->get_node('my-account');
    $new_welcome = str_replace( 'Howdy,', 'Aloha,', $user_account->title );
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => $new_welcome,
    ) );
}
add_filter( 'admin_bar_menu', 'add_aloha',25 );
?>