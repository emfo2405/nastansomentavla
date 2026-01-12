<?php

add_action('init', 'register_my_menus');

function register_my_menus() {
    register_nav_menus(array(
        'main-nav' => 'Huvudmeny'
    ));
    }

function mytheme_add_woocommerce_support() {
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'mytheme_add_woocommerce_support');

add_image_size('header', 3999, 2184, array('center', 'center'));
add_image_size('small-header', 3999, 1156, array('center', 'center'));
add_image_size('news-image', 200, 200, array('center', 'center'));
add_image_size('news-image-single', 1000, 200, array('center', 'center'));
add_image_size('product-image', 200, 300, array('center', 'center'));
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
