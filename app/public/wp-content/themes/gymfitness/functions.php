<?php
//Revisar siempre developer.wordpress.org

//Consultas reutilizables
require get_template_directory() . '/inc/queries.php';

//Cuando el theme es activado
function gymfitness_setup(){
  //Habilitar en el menu de wordpress la carga de imágenes a las secciones.
  add_theme_support( 'post-thumbnails', array( 'post' ) ); // Para tenerlo en el editor de entradas
  add_theme_support( 'post-thumbnails', array( 'page' ) ); // Para tenerlo en el editor de páginas

  //Agregar imágenes de tamaño personalizado
  add_image_size( 'square', 350, 350, true );
  add_image_size( 'portrait', 350, 724, true );
  add_image_size( 'cajas', 400, 375, true );
  add_image_size( 'mediano', 700, 400, true );
  add_image_size( 'blog', 966, 644, true );
}
add_action('after_setup_theme', 'gymfitness_setup');

//Menu de navegacion
function gymfitness_menus(){
  register_nav_menus( array(
    'menu-principal' => __('Menu Principal', 'gymfitness')
  ));
}
add_action('init', 'gymfitness_menus');

//Scripts & Styles
function gymfitness_scripts_styles(){
  //Fuentes
  wp_enqueue_style( 'googleFont','https://fonts.googleapis.com/css?family=Open+Sans|Raleway:400,700,900|Staatliches&display=swap' , array(), '1.0.0');
  //Normalize
  wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', array(), '8.0.1' );
  //SlicknavCSS
  wp_enqueue_style( 'slickNavCss', get_template_directory_uri() . '/css/slicknav.min.css', array(), '1.0.0' );
  //SlicknavJS
  wp_enqueue_script( 'slickNavJs', get_template_directory_uri() . '/js/jquery.slicknav.min.js', array('jquery'), '1.0.0', true );

  wp_enqueue_script( 'scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery', 'slickNavJs'), '1.0.0', true );
  //Hoja de estilo principal, le agregamos una dependencia para que cargue normalize luego de cargar nuestros estilos.
  wp_enqueue_style( 'style', get_stylesheet_uri(), array('normalize','googleFont'), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'gymfitness_scripts_styles' );
