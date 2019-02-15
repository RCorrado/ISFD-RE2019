<?php
  /*ESTILOS*/
    function add_styles() {
    	wp_enqueue_style( 'normalize-styles', "https://cdnjs.cloudflare.com/ajax/libs/normalize/7.0.0/normalize.min.css");
    	wp_enqueue_style( 'font-awesome', "https://use.fontawesome.com/releases/v5.6.3/css/all.css");
      wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css');
    }
    add_action( 'wp_enqueue_scripts', 'add_styles' );

  /*SCRIPTS*/
    function add_scripts(){
    	wp_register_script('jquery', "https://code.jquery.com/jquery-3.3.1.min.js", true);
    	wp_enqueue_script('jquery');
    	wp_register_script('main-script', get_template_directory_uri(). '/js/scripts.js', array('jquery'), true );
        wp_enqueue_script('main-script');
    }
    add_action( 'wp_enqueue_scripts', 'add_scripts');

  /*MENÚES*/
  /*NAV*/
    function nav_menu() {
      register_nav_menus(
        array(
          'navegation' => __( 'Menú de navegación' ),
        )
      );
    }
    add_action( 'init', 'nav_menu' );

  if ( function_exists( 'add_theme_support' ) ) { 
    add_theme_support( 'post-thumbnails' ); 
  }
?>