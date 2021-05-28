<?php

function load_stylesheets()
{
    wp_register_style('css', get_template_directory_uri() . '/stylesheets/generated.css', array(), 1, 'all');
    wp_enqueue_style('css');

    wp_register_style('css1', get_template_directory_uri() . '/stylesheets/home.min.css', array(), 1, 'all');
    wp_enqueue_style('css1');






}
add_action('wp_enqueue_scripts', 'load_stylesheets');


// load scripts

function addjs(){

    wp_register_script('javascript', get_template_directory_uri() . '/scripts/generated.js', '', array(), 1, 1);
    wp_enqueue_script('javascript');

    wp_register_script('analytics', get_template_directory_uri() . '/scripts/analytics.js', '', array(), 1, 1);
    wp_enqueue_script('analytics');

    wp_register_script('ec', get_template_directory_uri() . '/scripts/ec.js', '', array(), 1, 1);
    wp_enqueue_script('ec');

    wp_register_script('compareCounter', get_template_directory_uri() . '/scripts/compareCounter.js', '', array(), 1, 1);
    wp_enqueue_script('compareCounter');


}
add_action('wp_enqueue_scripts', 'addjs');

function my_scripts() {
    if( is_page( array( 'home' ) ) ){
        wp_register_script('frontpage_header', get_template_directory_uri() . '/scripts/homepage.js', '', array(), 1, 1);
        wp_enqueue_script('frontpage_header');
    }
}
add_action( 'wp_enqueue_scripts', 'my_scripts' );

add_theme_support('menus');



function customtheme_add_woocommerce_support()
 {
add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'customtheme_add_woocommerce_support' );

function wp_enqueue_woocommerce_style(){
    wp_register_style( 'mytheme-woocommerce', get_template_directory_uri() . '/woocommerce.css' );

    if ( class_exists( 'woocommerce' ) ) {
        wp_enqueue_style( 'mytheme-woocommerce' );
    }
}
add_action( 'wp_enqueue_scripts', 'wp_enqueue_woocommerce_style' );

/**
 * Rename product data tabs
 */
add_filter( 'woocommerce_product_tabs', 'woo_rename_tabs', 98 );
function woo_rename_tabs( $tabs ) {

    $tabs['description']['title'] = __( 'Omschrijving' );		// Rename the description tab
    $tabs['additional_information']['title'] = __( 'Specificaties' );	// Rename the additional information tab

    return $tabs;

}



/* WooCommerce Add To Cart Text */

add_filter('woocommerce_product_single_add_to_cart_text', 'woocommerce_custom_add_to_cart_text');

function woocommerce_custom_add_to_cart_text() {
    return __('Aan offerte toevoegen', 'woocommerce');
}

remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40 );

// Change the product description title
add_filter('woocommerce_product_description_heading', 'change_product_description_heading');
function change_product_description_heading() {
    return __('Omschrijving', 'woocommerce');
}

add_theme_support('menus');

register_nav_menus (
    array (
        'top-menu' => __('Top Menu', 'theme')
    )
);

remove_action( 'woocommerce_after_shop_loop_item', 'woocommerce_template_loop_add_to_cart' );
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );

ini_set('display_errors','Off');
ini_set('error_reporting', E_ALL );
define('WP_DEBUG', false);
define('WP_DEBUG_DISPLAY', false);

/**
 * Change number of related products output
 */
function woo_related_products_limit() {
    global $product;

    $args['posts_per_page'] = 6;
    return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args', 20 );
function jk_related_products_args( $args ) {
    $args['posts_per_page'] = 1;
    return $args;
}

load_theme_textdomain( 'Pandora', get_template_directory().'/languages/' );



