<?
/*
  Plugin Name: GymFitness - Post Types
  Plugin URI:
  Description: Añade post types al sitio Gym Fitness
  Version: 1.0.0
  Author: Maximiliano Gomez
  Author URI: https://www.instagram.com/m.a.xigomez/
  Text Domain: gymfitness
*/
//Oculta el contenido del plugin a quien quiera entrar. (Probar en html.)
if(!defined('ABSPATH')) die();
// Registrar Custom Post Type
function gymfitness_clases_post_type() {

	$labels = array(
		'name'                  => _x( 'Clases', 'Post Type General Name', 'gymfitness' ),
		'singular_name'         => _x( 'Clase', 'Post Type Singular Name', 'gymfitness' ),
		'menu_name'             => __( 'Clases', 'gymfitness' ),
		'name_admin_bar'        => __( 'Clase', 'gymfitness' ),
		'archives'              => __( 'Archivo', 'gymfitness' ),
		'attributes'            => __( 'Atributos', 'gymfitness' ),
		'parent_item_colon'     => __( 'Clase Padre', 'gymfitness' ),
		'all_items'             => __( 'Todas Las Clases', 'gymfitness' ),
		'add_new_item'          => __( 'Agregar Clase', 'gymfitness' ),
		'add_new'               => __( 'Agregar Clase', 'gymfitness' ),
		'new_item'              => __( 'Nueva Clase', 'gymfitness' ),
		'edit_item'             => __( 'Editar Clase', 'gymfitness' ),
		'update_item'           => __( 'Actualizar Clase', 'gymfitness' ),
		'view_item'             => __( 'Ver Clase', 'gymfitness' ),
		'view_items'            => __( 'Ver Clases', 'gymfitness' ),
		'search_items'          => __( 'Buscar Clase', 'gymfitness' ),
		'not_found'             => __( 'No Encontrado', 'gymfitness' ),
		'not_found_in_trash'    => __( 'No Encontrado en Papelera', 'gymfitness' ),
		'featured_image'        => __( 'Imagen Destacada', 'gymfitness' ),
		'set_featured_image'    => __( 'Guardar Imagen destacada', 'gymfitness' ),
		'remove_featured_image' => __( 'Eliminar Imagen destacada', 'gymfitness' ),
		'use_featured_image'    => __( 'Utilizar como Imagen Destacada', 'gymfitness' ),
		'insert_into_item'      => __( 'Insertar en Clase', 'gymfitness' ),
		'uploaded_to_this_item' => __( 'Agregado en Clase', 'gymfitness' ),
		'items_list'            => __( 'Lista de Clases', 'gymfitness' ),
		'items_list_navigation' => __( 'Navegación de Clases', 'gymfitness' ),
		'filter_items_list'     => __( 'Filtrar Clases', 'gymfitness' ),
    //Son las traducciones de los elementos mostrados en el panel de wordpress.
	);
	$args = array(
		'label'                 => __( 'Clase', 'gymfitness' ), //Label que aparece en el menú de WP.
		'description'           => __( 'Clases para el Sitio Web', 'gymfitness' ), //Descripción del mismo.
		'labels'                => $labels,
		'support'               => array( 'title', 'post', 'thumbnail' ), //Panel igual a blog para cargar contenido.
		'hierarchical'          => false, //True = post / False = pagina
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
    'menu_position'         => 6,
    'menu_icon'             => 'dashicons-welcome-learn-more',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',

	);
	register_post_type( 'gymfitness_clases', $args ); //Con el nombre hacemos el query para que se muestren las clases

}
add_action( 'init', 'gymfitness_clases_post_type', 0 );
/*
Se pueden agregar multiples post types acá, copiando y pegando, solo cambiandole el name.
*/
