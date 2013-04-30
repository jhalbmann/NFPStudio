<?php
// This theme uses post thumbnails
add_theme_support('post-thumbnails');

// This theme uses wp_nav_menu() in one location.
register_nav_menus(array(
'lookbook-shop' => __('Primary Navigation', 'Lookbook & Shop')));

function get_top_ancestor($id){
$current = get_post($id);
if(!$current->post_parent){
return $current->ID;
} else {
return get_top_ancestor($current->post_parent);
}
}

function get_page_id($page_name) {
global $wpdb;
$page_name = $wpdb->get_var("SELECT ID FROM $wpdb->posts WHERE post_name = '".$page_name."'");
return $page_name;
}
?>