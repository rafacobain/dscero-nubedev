<?php

/**
 * Theme setup.
 */
function ds_cero_setup() {
	add_theme_support( 'title-tag' );

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'tailpress' ),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);

    add_theme_support( 'custom-logo' );
	add_theme_support( 'post-thumbnails' );

	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );

	add_theme_support( 'editor-styles' );
	add_editor_style( 'css/editor-style.css' );
}

add_action( 'after_setup_theme', 'ds_cero_setup' );

/**
 * Enqueue theme assets.
 */
function ds_cero_enqueue_scripts() {
	$theme = wp_get_theme();

	wp_enqueue_style( 'tailpress', ds_cero_asset( 'css/app.css' ), array(), $theme->get( 'Version' ) );
	wp_enqueue_script( 'tailpress', ds_cero_asset( 'js/app.js' ), array(), $theme->get( 'Version' ) );
}

add_action( 'wp_enqueue_scripts', 'ds_cero_enqueue_scripts' );

/**
 * Get asset path.
 *
 * @param string  $path Path to asset.
 *
 * @return string
 */
function ds_cero_asset( $path ) {
	if ( wp_get_environment_type() === 'production' ) {
		return get_stylesheet_directory_uri() . '/' . $path;
	}

	return add_query_arg( 'time', time(),  get_stylesheet_directory_uri() . '/' . $path );
}

/**
 * Adds option 'li_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function ds_cero_nav_menu_add_li_class( $classes, $item, $args, $depth ) {
	if ( isset( $args->li_class ) ) {
		$classes[] = $args->li_class;
	}

	if ( isset( $args->{"li_class_$depth"} ) ) {
		$classes[] = $args->{"li_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_css_class', 'ds_cero_nav_menu_add_li_class', 10, 4 );

/**
 * Adds option 'submenu_class' to 'wp_nav_menu'.
 *
 * @param string  $classes String of classes.
 * @param mixed   $item The current item.
 * @param WP_Term $args Holds the nav menu arguments.
 *
 * @return array
 */
function ds_cero_nav_menu_add_submenu_class( $classes, $args, $depth ) {
	if ( isset( $args->submenu_class ) ) {
		$classes[] = $args->submenu_class;
	}

	if ( isset( $args->{"submenu_class_$depth"} ) ) {
		$classes[] = $args->{"submenu_class_$depth"};
	}

	return $classes;
}

add_filter( 'nav_menu_submenu_css_class', 'ds_cero_nav_menu_add_submenu_class', 10, 3 );




// Este hook sirve para crear una página de opciones
add_action('acf/init', 'oaf_pagina_opciones');

function oaf_pagina_opciones()
{

	// Comprobar si existe la función acf_add_options_page
	if (function_exists('acf_add_options_page')) {

		$option_page = acf_add_options_page(array(
			'page_title'    	=> 'Datos Generales',
			'menu_title'    	=> 'Datos Generales',
			'menu_slug'     	=> 'datos-generales',
			'capability'    	=> 'edit_posts',
			'position' 		=> '999',
			'icon_url' 		=> 'dashicons-superhero-alt',
			'update_button' 	=> 'Actualizar',
			'updated_message' 	=> 'Las opciones se han guardado',
			'redirect'      	=> false
		));
	}
}


function crear_custom_post_type_proyecto() {
    $labels = array(
        'name'               => 'Proyectos',
        'singular_name'      => 'Proyecto',
        'menu_name'          => 'Proyectos',
        'name_admin_bar'     => 'Proyecto',
        'add_new'            => 'Agregar Nuevo',
        'add_new_item'       => 'Agregar Nuevo Proyecto',
        'new_item'           => 'Nuevo Proyecto',
        'edit_item'          => 'Editar Proyecto',
        'view_item'          => 'Ver Proyecto',
        'all_items'          => 'Todos los Proyectos',
        'search_items'       => 'Buscar Proyectos',
        'parent_item_colon'  => 'Proyectos Padre:',
        'not_found'          => 'No se encontraron proyectos.',
        'not_found_in_trash' => 'No se encontraron proyectos en la papelera.'
    );

    $args = array(
        'labels'              => $labels,
        'public'              => true,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'query_var'           => true,
        'rewrite'             => array( 'slug' => 'proyecto' ),
        'capability_type'     => 'post',
        'has_archive'         => true,
        'hierarchical'        => false,
        'menu_position'       => 5,
        'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt', 'custom-fields', 'comments' )
    );

    register_post_type( 'proyecto', $args );
}
add_action( 'init', 'crear_custom_post_type_proyecto' );
