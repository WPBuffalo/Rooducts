<?php
function ransom_widgets_init() {
  register_sidebar( array(
    'name'          => __( 'Sidebar', '_s' ),
    'id'            => 'sidebar-1',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Homepage Sidebar', '_s' ),
    'id'            => 'sidebar-home',
    'before_widget' => '<section id="%1$s" class="widget %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );

  register_sidebar( array(
    'name'          => __( 'Footer Widget', '_s' ),
    'id'            => 'aside-footer',
    'before_widget' => '<section id="%1$s" class="widget aside-footer %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h4 class="widget-title">',
    'after_title'   => '</h4>',
  ) );
}
add_action( 'widgets_init', 'ransom_widgets_init' );
?>
