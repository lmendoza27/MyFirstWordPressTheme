<?php

function mencha1_assets(){

    wp_register_style("google-font","https://fonts.googleapis.com/css?family=Lobster|Raleway:400,200",array(),false,'all');
    wp_enqueue_style("estilos", get_template_directory_uri()."/assets/css/style.css", array("google-font"));

    //wp_register_script("jquery","http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js",array(),false,'all');
    //wp_enqueue_script('jquery');
    wp_enqueue_script("mencha-js",get_template_directory_uri()."/assets/js/script.js",array("jquery"));
}

add_action("wp_enqueue_scripts","mencha1_assets");


function mencha1_theme_supports(){
    // Reemplaza el title del sitio
    add_theme_support('title-tag');
    // Agrega la funcionalidad de imagen destacada al Administrador en la página establecida
    add_theme_support('post-thumbnails');
    // Agrega la personalización del Logo al momento de Personalizar nuestro tema
    add_theme_support('custom-logo',
    array(
        "width" => 170,
        "height" => 35,
        "flex-width" => true,
        "flex-height" => true,
    )
    );
}

add_action("after_setup_theme","mencha1_theme_supports");

function mencha1_add_menus(){
    register_nav_menus(
        array(
        'menu-principal' => "Menu principal",
        )
    );
}

add_action("after_setup_theme", "mencha1_add_menus");



?>