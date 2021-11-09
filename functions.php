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
 PD: En la versión 5.7 de Wordpress había un conflicto de JavaScript y no funcionaba correctamente main-scripts.js. Tuve que incluir jQuery para que funcionara. Se recomienda dejar el comentario en la línea 30 y probar si los scripts funcionan bien antes de descargarlo e incluirlo.
 */
//function myprefix_enqueue_scripts() {
//    wp_enqueue_script( 'my-js', get_stylesheet_directory_uri() . '/ruta-a-jquery-3.3.1.min.js', array(), true, true );
//    wp_enqueue_script( 'my-script', get_stylesheet_directory_uri() . '/inc/main-scripts.js', array(), true, true );
//}
//add_action( 'wp_enqueue_scripts', 'myprefix_enqueue_scripts' );

