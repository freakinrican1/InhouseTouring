<?php

function register_my_menu() {
  register_nav_menu('nav',__( 'Nav' ));
}
add_action( 'after_setup_theme', 'register_my_menu' );




// function my_custom_nav($items) {
//
//   global $wp_query;
//
//   $queried_id = $wp_query->queried_object_id;
//
//   $child_items = array();
//
//   $parents = array();
//
//   foreach( $items as $key => $item )
//
//   {
//
//     if( $item->object_id == $queried_id )
//
//       $parents[] = $item->ID;
//
//     if( in_array($item->menu_item_parent, $parents) )
//
//       $child_items [] = $item;
//
//   }
//
//   return $child_items;
//
//
//
// }
//
//
//
// function enable_custom_nav() { add_filter('wp_get_nav_menu_items', 'my_custom_nav'); }
//
// function disable_custom_nav() { remove_filter('wp_get_nav_menu_items', 'my_custom_nav'); }


?>
