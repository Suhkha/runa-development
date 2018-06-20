<?php  
function base_theme_setup() {
  register_nav_menus( array( 
    'header' => 'Header menu', 
    'footer' => 'Footer menu' 
  ) );
 }

add_action( 'after_setup_theme', 'base_theme_setup' );

?>