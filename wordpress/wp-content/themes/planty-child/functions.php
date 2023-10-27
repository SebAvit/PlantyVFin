<?php 

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');
function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/css/theme.css', array(), filemtime(get_stylesheet_directory() . '/css/theme.css'));
}

function afficher_bouton_admin_si_connecte() {
    if (is_user_logged_in()) {
        // L'utilisateur est connecté, affiche le bouton "Admin"
        echo '<ul id="primary-menu" class="menu nav-menu">
                <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61">
                    <a href="http://localhost/planty/PlantyVFinale/wordpress/page-d-exemple/" class="bouton-admin primary-menu">Nous rencontrer</a>
                </li>
                <li id="menu-item-62" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-62">
                    <a href="' . admin_url() . '" class="bouton-admin primary-menu">Admin</a>
                </li>
                <li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70">
                    <a href="http://localhost/planty/PlantyVFinale/wordpress/commander/" class="bouton-admin primary-menu">Commander</a>
                </li>';
    }
    else{ 
        echo '<ul id="primary-menu" class="menu nav-menu">
        <li id="menu-item-61" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-61">
            <a href="http://localhost/planty/PlantyVFinale/wordpress/page-d-exemple/" class="bouton-admin primary-menu">Nous rencontrer</a>
        </li>
        <li id="menu-item-70" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-70">
            <a href="http://localhost/planty/PlantyVFinale/wordpress/commander/" class="bouton-admin primary-menu">Commander</a>
        </li>';
}
};

add_action('wp_nav_menu', 'afficher_bouton_admin_si_connecte');
?>