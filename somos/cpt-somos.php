<?php

add_action( 'cmb2_admin_init', 'campos_somos');

function campos_somos() {
	$prefix = 'info_somos_';

	$metabox_eventos = new_cmb2_box( array(
		'id'            => $prefix . 'metabox',
		'title'         => __( 'Metaboxes campos somos', 'cmb2' ),
		'object_types'  => array( 'somos'), // Post type
	) );

	$metabox_eventos->add_field( array(
	  'name'       => __( 'Titulo servicios', 'cmb2' ),
	  'desc'       => __( 'Mes de la somos', 'cmb2' ),
	  'id'         => $prefix . 'servicios_titulo',
	  'type'       => 'text',
	) ); 

	$metabox_eventos->add_field( array(
		'name'    => 'contenido servicios',
		'desc'    => 'field description (optional)',
		'id'      => 'servicios_contenido',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 	

	$metabox_eventos->add_field( array(
		'name'    => 'Imagen servicio empeñar',
		'desc'    => 'field description (optional)',
		'id'      => 'img_servicio_empenar',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 

	$metabox_eventos->add_field( array(
		'name'    => 'Imagen servicio comprar',
		'desc'    => 'field description (optional)',
		'id'      => 'img_servicio_comprar',
		'type'    => 'wysiwyg',
		'options' => array(),
	) ); 	

}


/*CP somos*/

function crear_post_type_somos() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'somos', 'Post Type General Name', 'credie' ),
		'singular_name'       => _x( 'somos', 'Post Type Singular Name', 'credie' ),
		'menu_name'           => __( 'somos', 'credie' ),
		'parent_item_colon'   => __( 'somos Padre', 'credie' ),
		'all_items'           => __( 'Todas las somos', 'credie' ),
		'view_item'           => __( 'Ver somos', 'credie' ),
		'add_new_item'        => __( 'Agregar Nuevo somos', 'credie' ),
		'add_new'             => __( 'Agregar Nuevo somos', 'credie' ),
		'edit_item'           => __( 'Editar somos', 'credie' ),
		'update_item'         => __( 'Actualizar somos', 'credie' ),
		'search_items'        => __( 'Buscar somos', 'credie' ),
		'not_found'           => __( 'No encontrado', 'credie' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'credie' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'somos', 'credie' ),
		'description'         => __( 'somos news and reviews', 'credie' ),
		'labels'              => $labels,
		// Todo lo que soporta este post type
		'supports'            => array( 'title', 'editor', 'thumbnail', 'revisions','page-attributes','post-formats'),
		/* Un Post Type hierarchical es como las paginas y puede tener padres e hijos.
		* Uno sin hierarchical es como los posts
		*/
		'hierarchical'        => true, /*  Es un comportamiento como las páginas  */
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 25,
		'menu_icon'           => 'dashicons-format-video',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
//		'rewrite'           => array('slug' => 'somos'), // Permalinks format
		"rewrite" => array( "slug" => "somos", "with_front" => true ),
		//"taxonomies" => array( "category", "post_tag" ),
		'query_var' => true,
		//'rewrite'           => array('slug' => 'somos/%proyectox%'), // Permalinks format
	);

	// Por ultimo registramos el post type
	register_post_type( 'somos', $args );

}

add_action( 'init', 'crear_post_type_somos', 0 );


?>