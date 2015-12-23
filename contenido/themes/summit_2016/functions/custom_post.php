<?php

// Register Custom Post Type
function custom_post_type_calendario() {

	$labels = array(
		'name'                  => _x( 'Calendarios Eventos', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Charla', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Calendario Charlas ', 'text_domain' ),
		'name_admin_bar'        => __( 'Charla', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'Todas los Charlas', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nueva Charla', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Item', 'text_domain' ),
		'edit_item'             => __( 'Editar Item', 'text_domain' ),
		'update_item'           => __( 'Update Item', 'text_domain' ),
		'view_item'             => __( 'Ver Item', 'text_domain' ),
		'search_items'          => __( 'Buscar Item', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'items_list'            => __( 'Items list', 'text_domain' ),
		'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Charla', 'text_domain' ),
		'description'           => __( 'Charlas Summit', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'author', 'thumbnail', ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => false,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'query_var' => true,
		'rewrite' => true,
		'capability_type'       => 'post',
		'with_front' => true
	);
	register_post_type( 'calendario', $args );

}
add_action( 'init', 'custom_post_type_calendario', 0 );
