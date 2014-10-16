<?php

function register_my_menu() {
  register_nav_menu('nav',__( 'Nav' ));
}
add_action( 'init', 'register_my_menu' );


?>
