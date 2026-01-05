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