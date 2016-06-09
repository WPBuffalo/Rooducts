<?php
//
// Actions & Filters
//
  add_action( 'wp_enqueue_scripts', 'ransom_script_enqueuer' );

  /*
  Custom Post Types - include custom post types and taxonimies here
  e.g. require_once( 'custom-post-types/your-custom-post-type.php' );
  */

  // Register Custom Post Type
  function custom_post_type() {

  	$labels = array(
  		'name'                  => _x( 'Products', 'Post Type General Name', 'text_domain' ),
  		'singular_name'         => _x( 'Product', 'Post Type Singular Name', 'text_domain' ),
  		'menu_name'             => __( 'Products', 'text_domain' ),
  		'name_admin_bar'        => __( 'Products', 'text_domain' ),
  		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
  		'all_items'             => __( 'All Items', 'text_domain' ),
  		'add_new_item'          => __( 'Add New Item', 'text_domain' ),
  		'add_new'               => __( 'Add New', 'text_domain' ),
  		'new_item'              => __( 'New Item', 'text_domain' ),
  		'edit_item'             => __( 'Edit Item', 'text_domain' ),
  		'update_item'           => __( 'Update Item', 'text_domain' ),
  		'view_item'             => __( 'View Item', 'text_domain' ),
  		'search_items'          => __( 'Search Item', 'text_domain' ),
  		'not_found'             => __( 'Not found', 'text_domain' ),
  		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
  		'items_list'            => __( 'Items list', 'text_domain' ),
  		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
  		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
  	);
  	$args = array(
  		'label'                 => __( 'Product', 'text_domain' ),
  		'description'           => __( 'rooduct products', 'text_domain' ),
  		'labels'                => $labels,
  		'supports'              => array( 'thumbnail', 'editor', 'title', 'comments' ),
  		'taxonomies'            => array( 'productcategory' ),
  		'hierarchical'          => false,
  		'public'                => true,
  		'show_ui'               => true,
  		'show_in_menu'          => true,
  		'menu_position'         => 5,
  		'show_in_admin_bar'     => true,
  		'show_in_nav_menus'     => true,
  		'can_export'            => true,
  		'has_archive'           => true,
  		'exclude_from_search'   => false,
  		'publicly_queryable'    => true,
  		'capability_type'       => 'page',
  	);
  	register_post_type( 'products', $args );

  }
  add_action( 'init', 'custom_post_type', 0 );

  // Register Custom Taxonomy
  function custom_tax_1() {

  	$labels = array(
  		'name'                       => _x( 'Product Types', 'Taxonomy General Name', 'text_domain' ),
  		'singular_name'              => _x( 'Product Type', 'Taxonomy Singular Name', 'text_domain' ),
  		'menu_name'                  => __( 'Product Types', 'text_domain' ),
  		'all_items'                  => __( 'All Items', 'text_domain' ),
  		'parent_item'                => __( 'Parent Item', 'text_domain' ),
  		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
  		'new_item_name'              => __( 'New Item Name', 'text_domain' ),
  		'add_new_item'               => __( 'Add New Item', 'text_domain' ),
  		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
  		'update_item'                => __( 'Update Item', 'text_domain' ),
  		'view_item'                  => __( 'View Item', 'text_domain' ),
  		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
  		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
  		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
  		'popular_items'              => __( 'Popular Items', 'text_domain' ),
  		'search_items'               => __( 'Search Items', 'text_domain' ),
  		'not_found'                  => __( 'Not Found', 'text_domain' ),
  		'items_list'                 => __( 'Items list', 'text_domain' ),
  		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
  	);
  	$args = array(
  		'labels'                     => $labels,
  		'hierarchical'               => false,
  		'public'                     => true,
  		'show_ui'                    => true,
  		'show_admin_column'          => true,
  		'show_in_nav_menus'          => true,
  		'show_tagcloud'              => true,
  	);
  	register_taxonomy( 'productcategory', array( 'products' ), $args );

  }
  add_action( 'init', 'custom_tax_1', 0 );


//
// Scripts
//
  /** Add scripts via wp_head() */
  function ransom_script_enqueuer() {
    wp_register_script( 'site', get_template_directory_uri().'/js/site.js', array( 'jquery' ) );
    wp_enqueue_script( 'site' );

    wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
  }

//
// Read More Link
//
  add_filter( 'the_content_more_link', 'modify_read_more_link' );
  function modify_read_more_link() {
  return '<br><a class="more-link" href="' . get_permalink() . '">read more &rarr;</a>';
  }




?>
