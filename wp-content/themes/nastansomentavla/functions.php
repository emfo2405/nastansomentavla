<?php

//Registrerar menyer
add_action('init', 'register_my_menus');

//Huvudmeny och footermeny
function register_my_menus() {
    register_nav_menus(array(
        'main-nav' => 'Huvudmeny',
        'footer-nav' => 'Footermeny'
    ));
    }



//Laddar in stöd för WooCommerce
function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

//Aktiverar utvald bild
add_theme_support('post-thumbnails');

//Sätter storlek på bilder
add_image_size('header', 3999, 2184, array('center', 'center'));
add_image_size('small-header', 3999, 1156, array('center', 'center'));
add_image_size('news-image', 200, 200, array('center', 'center'));
add_image_size('news-image-single', 1000, 200, array('center', 'center'));
add_image_size('product-image', 300, 400, array('center', 'center'));
add_image_size('about-image', 500, 500, array('center', 'center'));

//Funktion för att visa notis på startsidan
add_action('widgets_init', 'nastansomentavla_widget_init');

function nastansomentavla_widget_init() {
    register_sidebar(array(
        'name' => 'Notis på startsidan',
        'id'   => 'notis',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}

//Aktivera stöd för en sidebar
function tema_register_sidebars(): void {
    register_sidebar(array(
        'name' => 'main-sidebar',
        'id' => 'main-sidebar',
        'description' => 'Sidebar som kan användas med temasidan page-sidebar',
        'before_widget' => '<div class="sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="sidebarTitle">',
        'after_title' => '</h3>',
    ));
}
add_action('widgets_init', 'tema_register_sidebars');

//Laddar in CSS- och JavaScript-fil
function tema_enqueue_files() {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_style('custom-style', get_template_directory_uri() . '/css/styles.css');

    wp_enqueue_script(
        'custom-js',
        get_template_directory_uri() . '/js/main.js',
        array(),
        false,
        true
    );
}
add_action('wp_enqueue_scripts', 'tema_enqueue_files');

//Lägger till stöd för att visa ett utdrag
add_post_type_support('page', 'excerpt');

//Lägger till stöd för templates, HTML5, block-editor
function tema_theme_support(): void {
    add_theme_support('title-tag');
    add_theme_support('html5', array('search-form', 'comment-form', 'gallery'));
    add_theme_support('editor-styles');
}
add_action('after_setup_theme', 'tema_theme_support');

//Skapa roller för sidan
//Redaktörsroll
function skapa_redaktor_roll(): void {
    add_role(
        role: 'min_redaktor',
        display_name: 'Redaktör',
        capabilities: array(
            'read' => true, 
            'edit_posts' => true,
            'publish_posts' => true,
            'upload_files' => true,
            'delete_posts' => false,
            'manage_options' => false, 
            'create_users' => false
        )
        );
}
add_action('after_setup_theme', 'skapa_redaktor_roll');

//Roll för att hantera WooCommerce
function klona_shop_manager_roll() {
    $role = get_role('shop_manager');

    add_role(
        'full_woocommerce',
        'WooCommerce - full åtkomst',
        $role -> capabilities
    );
}
add_action('init', 'klona_shop_manager_roll');
