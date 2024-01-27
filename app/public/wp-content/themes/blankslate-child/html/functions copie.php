<?php
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}

// ajout de page Nous rencontrer
function utiliser_page_nous_rencontrer($template) 
{
    if (is_page('nous-rencontrer')) 
    {
        $new_template = locate_template(array('page-nous-rencontrer.php'));
        if (!empty($new_template)) 
        {
            return $new_template;
        }
    }

    return $template;
}
add_filter('template_include', 'utiliser_page_nous_rencontrer');

// ajout de page Commander
function utiliser_page_commander($template) 
{
    if (is_page('commander')) 
    {
        $new_template = locate_template(array('page-commander.php'));
        if (!empty($new_template)) 
        {
            return $new_template;
        }
    }

    return $template;
}
add_filter('template_include', 'utiliser_page_commander');
