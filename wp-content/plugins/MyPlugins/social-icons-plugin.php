<?php
/*
Plugin Name: Social Icons Plugin
Description: Affiche les profils de réseaux sociaux sous forme d'icônes.
Version: 1.0
Author: Votre Nom
*/

function register_social_icons_widget_area() {
    register_sidebar( array(
        'name'          => __( 'Zone des icônes sociales', 'social-icons-plugin' ),
        'id'            => 'social-icons-widget-area',
        'description'   => __( 'Ajoutez ici des icônes pour les réseaux sociaux.', 'social-icons-plugin' ),
        'before_widget' => '<div class="social-icon">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="social-icons-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'register_social_icons_widget_area' );

function create_social_icons_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'social_icons';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id INT NOT NULL AUTO_INCREMENT,
        network_name VARCHAR(255) NOT NULL,
        icon_class VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    dbDelta( $sql );
}
register_activation_hook( __FILE__, 'create_social_icons_table' );

function social_icons_admin_page() {
    // Affichez ici le formulaire pour ajouter des réseaux sociaux.
    if (isset($_POST['submit_social_icon'])) {
        // Récupérez les données du formulaire et enregistrez-les dans la base de données.
        $network_name = sanitize_text_field($_POST['network_name']);
        $icon_class = sanitize_text_field($_POST['icon_class']);

        global $wpdb;
        $table_name = $wpdb->prefix . 'social_icons';

        $wpdb->insert(
            $table_name,
            array(
                'network_name' => $network_name,
                'icon_class' => $icon_class,
            )
        );
    }

    // Affichez ici le formulaire pour ajouter des réseaux sociaux.
    ?>
    <div class="wrap">
        <h2>Ajouter un réseau social</h2>
        <form method="post">
            <label for="network_name">Nom du réseau :</label>
            <input type="text" name="network_name" id="network_name" required>
            <br>
            <label for="icon_class">Classe de l'icône LineIcons :</label>
            <input type="text" name="icon_class" id="icon_class" required>
            <br>
            <input type="submit" name="submit_social_icon" value="Ajouter">
        </form>
    </div>
    <?php
}

function display_social_icons() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'social_icons';

    $icons = $wpdb->get_results("SELECT * FROM $table_name");

    if ($icons) {
        foreach ($icons as $icon) {
            echo '<a href="' . $icon->network_name . '" target="_blank"><i class="' . $icon->icon_class . '"></i></a>';
        }
    }
}


function enqueue_lineicons_styles() {
    wp_enqueue_style( 'lineicons', plugin_dir_url( __FILE__ ) . 'icons.css' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_lineicons_styles' );



