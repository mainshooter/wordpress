<?php
  function register_my_menu() {
    register_nav_menu('side-menu',__( 'Side Menu' ));
  }

  register_sidebar( array(
      'id'          => 'left-sidebar',
      'name'        => __( 'Left Menu', $text_domain ),
      'class'       => 'sidebar',
      'description' => __( 'This sidebar is located above the age logo.', $text_domain ),
      'before_title'  => '<h6 class="widgettitle">',
      'after_title'   => '</h6>',
  ) );

  add_action( 'init', 'register_my_menu' );

  add_theme_support( 'post-thumbnails' );
?>
