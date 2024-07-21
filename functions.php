<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}

function ajouter_lien_admin_menu($items, $args) {
    // Vérifier si l'utilisateur est connecté et si l'emplacement du menu est 'main-menu'
    if (is_user_logged_in() && $args->theme_location == 'main-menu') {
        // Récupérer le lien vers l'administration WordPress
        $admin_url = admin_url();

        // Créer le lien pour l'administration
        $lien_administration = '<li class="menu-item menu-item-administration"><a href="' . esc_url($admin_url) . '">Admin</a>';

        // Diviser les éléments du menu en un tableau
        $menu_items = explode('</li>', $items);

        // Insérer le lien d'administration en deuxième position
        array_splice($menu_items, 1, 0, $lien_administration);

        // Recoller les éléments du menu en une chaîne
        $items = implode('</li>', $menu_items);
    }

    return $items;
}

// Ajouter le filtre pour modifier les éléments du menu
add_filter('wp_nav_menu_items', 'ajouter_lien_admin_menu', 10, 2);



//supprime le css inline de gutemberg pour la vérification w3c
add_action('wp_footer', function () {
    wp_dequeue_style('core-block-supports');
});