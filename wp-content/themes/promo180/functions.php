<?php
if ( ! function_exists( 'mytheme_options' ) ) {

	function mytheme_options(){
        add_theme_support('post-thumbnails');
		register_nav_menus( array(
	    	'primary_menu' => __( 'Primary Menu', 'text_domain' ),
		) );
	}
	add_action( 'after_setup_theme', 'mytheme_options', 0 );
}
if ( ! function_exists( 'custom_post_type' ) ) {
    function custom_post_type() {
        register_post_type('stagiaire',
            array(
                'labels'      => array(
                    'name'          => __('Stagiaires', 'textdomain'),
                    'singular_name' => __('Stagiaire', 'textdomain'),
                ),
                'public'      => true,
                'has_archive' => true,
                'menu_position' => 5,
                'menu_icon'    => 'dashicons-businessman',
				'supports'    => array( 'title', 'editor', 'thumbnail' ),
            )
        );
    }
	
}
add_action('init', 'custom_post_type');





if ( ! function_exists( 'widget_registration' ) ) {
    function widget_registration() {
        register_sidebar(array(
                'name'      => 'Footer 1',
                'id' => 'footer1',
                'before_widget' => '<div class="footer-widget">',
                'after-widget'    => '</div>',
				'before_title'    => '<h3 class="footer-title">',
                'after-title'    => '</h3>',
            )
        );
    }
	add_action('widgets_init','widget_registration');
}

function load_custom_template($template)
{
    global $post;

    if (is_page('stagiaires')) {
        // Utilisez le modèle 'stagiaires-page.php' pour la page "Stagiaires"
        return get_template_directory() . '/stagiaires-page.php';
    } elseif ($post->post_type === 'stagiaire') {
        // Utilisez le modèle 'single-acme_stagiaire.php' pour les articles de type 'stagiaire'
        return get_template_directory() . '/single-acme_stagiaire.php';
    }elseif (is_page('blog')) {
        return get_template_directory() . '/blog-page.php';
    }
    

    return $template;
}

add_filter('template_include', 'load_custom_template');



?>