<?php


/*=========== Custom Post Type banner =================================*/

function crear_post_type_banner() {

// Etiquetas para el Post Type
	$labels = array(
		'name'                => _x( 'banner', 'Post Type General Name', 'molino9' ),
		'singular_name'       => _x( 'banner', 'Post Type Singular Name', 'molino9' ),
		'menu_name'           => __( 'banner', 'molino9' ),
		'parent_item_colon'   => __( 'banner Padre', 'molino9' ),
		'all_items'           => __( 'Todas las banner', 'molino9' ),
		'view_item'           => __( 'Ver banner', 'molino9' ),
		'add_new_item'        => __( 'Agregar Nuevo banner', 'molino9' ),
		'add_new'             => __( 'Agregar Nuevo banner', 'molino9' ),
		'edit_item'           => __( 'Editar banner', 'molino9' ),
		'update_item'         => __( 'Actualizar banner', 'molino9' ),
		'search_items'        => __( 'Buscar banner', 'molino9' ),
		'not_found'           => __( 'No encontrado', 'molino9' ),
		'not_found_in_trash'  => __( 'No encontrado en la papelera', 'molino9' ),
	);

// Otras opciones para el post type

	$args = array(
		'label'               => __( 'banner', 'molino9' ),
		'description'         => __( 'banner news and reviews', 'molino9' ),
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
//		'rewrite'           => array('slug' => 'banner'), // Permalinks format
		"rewrite" => array( "slug" => "banner", "with_front" => true ),
		//"taxonomies" => array( "category", "post_tag" ),
		'query_var' => true,
		//'rewrite'           => array('slug' => 'banner/%proyectox%'), // Permalinks format
	);

	// Por ultimo registramos el post type
	register_post_type( 'banner', $args );

}

add_action( 'init', 'crear_post_type_banner', 0 );


?>