<?php
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
// Carregando nossos scripts e folhas de estilos
function load_scripts()
{
    // Style CSS
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css', array(), '4.0.0', 'all');
    wp_enqueue_style('base', get_template_directory_uri() . '/css/base.css', array(), '1.0', 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null );
    wp_enqueue_style('font-awesome', 'https://kit.fontawesome.com/aa6bc77d97.js', array(), null);
    // JS
    wp_enqueue_script('jquery', 'https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js', array('jquery'), '4.0.0', true);
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js', '4.0.0', true);
}
// Chamando a função load_scripts
add_action('wp_enqueue_scripts', 'load_scripts');


function redes_config() {
// Registrando nossos menus
register_nav_menus(
    array(
        'primary' => 'Main Menu',
    )
);
    add_theme_support( 'custom-logo', array(
        'height'               => 500,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
    ) );
    
    $defaults = array(
        'default-image'          => '',
        'random-default'         => false,
        'width'                  => 375,
        'height'                 => 1920,
        'flex-height'            => true,
        'flex-width'             => true,
        'default-text-color'     => '',
        'header-text'            => true,
        'uploads'                => true,
        'wp-head-callback'       => '',
        'admin-head-callback'    => '',
        'admin-preview-callback' => '',
        'video'                  => true,
        'video-active-callback'  => 'is_front_page',
    );
    add_theme_support( 'custom-header', $defaults );    
}
add_action( 'after_setup_theme', 'redes_config', 0 );