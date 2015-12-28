<?php
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Contenidos Sitio',
		'menu_title'	=> 'Contenidos Sitio',
		'menu_slug' 	=> 'contenidos-sitio',
		'capability'	=> 'acf_option_page',
		'redirect'		=> false,
		'position' => 3,
		'icon_url' => 'dashicons-align-right'
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Configuraciones Globales',
		'menu_title'	=> 'Configuraciones Globales',
		'parent_slug'	=> 'contenidos-sitio',
		
	));		
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Slider',
		'menu_title'	=> 'Slider',
		'parent_slug'	=> 'contenidos-sitio'
	));
		
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Que es Summit',
		'menu_title'	=> 'Que es Summit',
		'parent_slug'	=> 'contenidos-sitio',
		
	));	

	
}


/*	$page = acf_add_options_page(array(
		'page_title' 	=> 'Configuraciones Globales',
		'menu_title' 	=> 'Contenido Sitio',
		'menu_slug' 	=> 'Contenido',
		'capability' 	=> 'acf_option_page',
		'position' => 10,
		'redirect' 	=> true,
		'icon_url' => 'dashicons-align-right'
	));
	//Sub page
	acf_add_options_sub_page(array(
		'title' => 'Configuraciones globales',
		'page_title' => 'Configuraciones globales',
		'parent' => 'Contenido',
		'capability' => 'acf_option_page'
	));

	acf_add_options_sub_page(array(
		'title' => 'Slide',
		'page_title' => 'Slide',
		'parent' => 'Contenido',
		'capability' => 'acf_option_page'
	));


	acf_add_options_sub_page(array(
		'title' => 'Comer Juntos',
		'page_title' => 'Comer Juntos',
		'parent' => 'Contenido',
		'capability' => 'acf_option_page'
	));

	acf_add_options_sub_page(array(
		'title' => 'Guia Alimentaria',
		'page_title' => 'Guia Alimentaria',
		'parent' => 'Contenido',
		'capability' => 'acf_option_page'
	));	

acf_add_options_sub_page(array(
		'title' => "Planifica URL's",
		'page_title' => "Planifica URL's",
		'parent' => 'Contenido',
		'capability' => 'acf_option_page'
	));*/
