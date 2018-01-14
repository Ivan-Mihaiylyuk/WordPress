<?php
remove_action('wp_head', 'rad_link');//Убрать не нужные строки
remove_action('wp_head', 'wlwmanifest_link');//Убрать не нужные строки
remove_action('wp_head', 'wp_generator');//Убрать не нужные строки

show_admin_bar(false);//Убрать бар

function logo_widgets_init() {//Логотип SVG

	register_sidebar( array(
		'name'          => 'Логотип SVG',
		'id'            => 'logo',
		'before_widget' => '<>',
		'after_widget'  => '<>',
		'before_title'  => '<>',
		'after_title'   => '<>',
	) );

}
add_action( 'widgets_init', 'logo_widgets_init' );//Логотип

require_once ( get_stylesheet_directory() . '/theme-options.php' );//Кнопка настроки в пункте внешний вид

add_theme_support('post-thumbnails');//для того что бы добавить  картинку в настройках

