<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

/*
 Agregar Scripts Personalizados: Quitar comentarios en las líneas 29 a 33 para poder utilizar el archivo main-scripts.js.
 PD: Se incluyó jQuery porque hay un error con el que trae la versión 5.7 de Wordpress por defecto, y no funcionan las acciones dependientes de los clicks sin el que se llama aquí. Puede que en la versión actualizada ya no sea necesario incluirlo, así que se recomienda probar si todo lo que se ponga en main-scripts.js funciona bien dejando el comentario en la línea 30.
 */
//function myprefix_enqueue_scripts() {
//    wp_enqueue_script( 'my-js', get_stylesheet_directory_uri() . '/inc/jquery-3.3.1.min.js', array(), true, true );
//    wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/inc/main-scripts.js', array(), true, true );
//}
//add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );

