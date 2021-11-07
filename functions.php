<!-- file to add hooks into, configure theme, enque imports(?). -->
<?php

function load_stylesheets() {
  //Bootstrap
  wp_register_style(
    'bootstrap', 
    get_template_directory_uri() . '/bootstrapcss/bootstrap.min.css',
    array(),
    false,
    'all');
  wp_enqueue_style('bootstrap');

  //My own style
  wp_register_style(
    'style', 
    get_template_directory_uri() . '/style.css',
    array(),
    false, 
    'all');
  wp_enqueue_style('style');
}
//Strange to call enqueue_SCRIPTS when loading stylesheet...
add_action('wp_enqueue_scripts', 'load_stylesheets');


function load_js() {
  //Just it is loaded somewhere behind the scenes.
  wp_deregister_script( 'jquery' ); 

  wp_register_script(
    'jquery', 
    get_template_directory_uri() . '/scripts/jquery.js',
    '',
    1, //version
    true, //script placed/run in footer
    );
  wp_enqueue_script('jquery');

  wp_register_script(
    'customjs', 
    get_template_directory_uri() . '/scripts/scripts.js',
    '',
    1, //version
    true, //script placed/run in footer
    );
  wp_enqueue_script('customjs');
}

add_action( 'wp_enqueue_scripts', 'load_js');

//Add menus-support. This brings up the option inside
//the appearance-tab in wordpress.
add_theme_support('menus');

//Add support for pictures for posts, 'thumbnails'
add_theme_support('post-thumbnails');
add_image_size('xsmall', 100, 100, true); //doesn't seem to work?
add_image_size('small', 300, 300, true);
add_image_size('large', 800, 800, true);


//Menus ==========
//Calling this method is required in order
//to change menus in the admin-UI.
//Found at admin-UI in the Appearance -> Menus -> Menu Settings
register_nav_menus(
  array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
  )
);


//Custom Post Types ----------------
function my_first_post_type() {
  //args has options for this post-type.
  $args = array(
    'labels' => array(
      'name' => 'Cars', //Label in adminUI for PostType
      'singular' => 'Car'
    ),
    'hierarchical' => true, //true for pages-behavior, false for post-behavior
    'public' => true, //accessible by user on front- and back-end
    'has_archive' => true, //has archive like posts do.
    'menu_icon' => 'dashicons-buddicons-topics',//icon for adminUI-menu, found at https://developer.wordpress.org/resource/dashicons/#welcome-view-site
    'support' => array('title', 'editor', 'thumbnail'), //Things to support for the user.
    // 'rewrite' => array('slug' => 'my-cars'), //slug is the URL-path ending or so.
  );
  //wordpress funktion
  register_post_type('cars', $args);
}
//hook innan page load, innan header loads. 
//Vill ladda funktionen my_first_post_type, görs här
add_action('init', 'my_first_post_type');