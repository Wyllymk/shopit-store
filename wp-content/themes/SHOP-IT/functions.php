<?php
/*-------------------------------------------------------------------------*/
/*                        REGISTER CUSTOM NAVIGATION WALKER                */
/*-------------------------------------------------------------------------*/

if ( ! file_exists( get_template_directory() . '/class-bootstrap-5-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-bootstrap-5-navwalker-missing', __( 'It appears the class-bootstrap-5-navwalker.php file may be missing.', 'wp-bootstrap-navwalker' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/class-bootstrap-5-navwalker.php';
}

/*-------------------------------------------------------------------------*/
/*                        ENQUEUE ALL THE THINGS                           */
/*-------------------------------------------------------------------------*/
//Enqueue Styles
function custom_enqueue_styles(){
    wp_register_style('custom', get_template_directory_uri().'/assets/css/custom.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom');
    wp_register_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('bootstrap');
}
add_action('wp_enqueue_scripts', 'custom_enqueue_styles');

//Enqueue Scripts
function custom_enqueue_scripts(){
    wp_register_script('customjs', get_template_directory_uri().'/assets/cjs/custom.js', array(), '1.0.0', true);
    wp_enqueue_script('customjs');
    wp_register_script('bootstrapjs', get_template_directory_uri().'/assets/cjs/bootstrap.min.js', array(), '1.0.0', true);
    wp_enqueue_script('bootstrapjs');
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');
/*-------------------------------------------------------------------------*/
/*                        REGISTER WIDGETS AND MENUS                           */
/*-------------------------------------------------------------------------*/

//register Menus
function custom_menus(){
    register_nav_menus(array(
        'primary' => 'Main Menu',
        'primary-top' => 'Top Menu',
        'secondary' => 'Footer Menu'
    ));
    add_theme_support('menus');
}
add_action('init', 'custom_menus');

//Register Widgets
function wp_custom_sidebar(){
    add_theme_support('widgets');
}
add_action('widgets_init', 'wp_custom_sidebar');