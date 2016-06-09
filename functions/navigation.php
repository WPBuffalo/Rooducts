<?php
// Register Nav Menus
  register_nav_menus(array('primary' => 'Primary Navigation'));

// CUSTOM CLASSES FOR MENUS
// function custom_nav_class($classes, $item){
//         $classes[] = "custom-class-".$item->menu_order;
//         return $classes;
// }
// add_filter('nav_menu_css_class' , 'custom_nav_class' , 10 , 2);


// CUSTOM WALKER MENU
// class My_Walker_Nav_Menu extends Walker_Nav_Menu{
//   public function display_element($el, &$children, $max_depth, $depth = 0, $args, &$output){
//     $id = $this->db_fields['id'];
//
//     if(isset($children[$el->$id]))
//       $el->classes[] = 'toggle-sub-nav closed';
//
//     parent::display_element($el, $children, $max_depth, $depth, $args, $output);
//   }
// }
?>
