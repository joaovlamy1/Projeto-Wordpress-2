<?php

add_theme_support("menus");
function register_my_menu(){
    register_nav_menu('navegacao', __('Navegação'));
}
add_action('init','register_my_menu');

function brafe_scripts(){
    wp_enqueue_style("reset-sheet", get_stylesheet_directory_uri() .  "/css/reset.css");
    wp_enqueue_style("style-sheet", get_stylesheet_directory_uri() .  "/style.css");
}
add_action('wp_enqueue_scripts','brafe_scripts'  );
?>