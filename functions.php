<?php

/**
 * Dynamic content from wordpress
 */

function my_menu() {
  register_nav_menus(
    array(
      'navegation' => __( 'Navigation menu' ),
    )
  );
}
add_action( 'init', 'my_menu' );