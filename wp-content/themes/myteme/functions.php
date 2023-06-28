<?php

function plz_assets(){
    //              nombre_encavezado, url_recurso, dependencias_que_deben_cargarse_antes, version, media(en que resolucion de pantalla se deben cargar)
    wp_register_style("bootstrap", get_template_directory_uri()."/assets/dist/css/bootstrap.min.css", [], false, 'all');
    wp_register_style("styles_nav", get_template_directory_uri()."/nav.css", [], false, 'all');

    //ahora llamamos nuestro ultimos estilos, los metemos en la cola del ciclo de vida de wordpress)
    wp_enqueue_style("styles_carousel", get_template_directory_uri()."/carousel.css", ["bootstrap", "styles_nav"], false, 'all');

    wp_enqueue_script("myteme",  get_template_directory_uri()."/assets/dist/js/bootstrap.bundle.min.js", [], false, true);
}

//llamamos la funcion anterior para ejecutarla
add_action("wp_enqueue_scripts", "plz_assets");


function plz_analytics(){
    //por ejemplo de contenido analytics
    ?>
    <p>supuesto contenido analytics</p>

    <?php
}

//llamamos la funcion anterior para ejecutarla
add_action("wp_body_open", "plz_analytics");


function plz_theme_support(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', [
        "width" => 170,
        "height" => 35,
        "flex-width" => true,
        "flex-height" => true,
    ]);
}

add_action("after_setup_theme", "plz_theme_support");
