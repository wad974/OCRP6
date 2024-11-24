<?php 

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles() 
{
    // Enqueue le style parent
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    
    // Enqueue le style personnalisé avec gestion de version dynamique
    wp_enqueue_style(
        'theme-style', 
        get_stylesheet_directory_uri() . '/assets/css/theme.css', 
        array('parent-style'), 
        filemtime(get_stylesheet_directory() . '/assets/css/theme.css')
    );
}

// SHORTCODE


require_once(__DIR__ . '/widgets/ImageTitreWidget.php');
