<?php
/* THeme functions
*
* @package dws-theme
*/

###CSS/JS###
function dws_enqueue_scripts() {
    # pages css
    wp_register_style('main-css', get_template_directory_uri() . '/assets/src/css/main.css', [], filemtime(get_template_directory() . '/assets/src/css/main.css'));
    wp_register_style('blog-css', get_template_directory_uri() . '/assets/src/css/blog.css', [], filemtime(get_template_directory() . '/assets/src/css/blog.css'));
    wp_register_style('single-css', get_template_directory_uri() . '/assets/src/css/single.css', [], filemtime(get_template_directory() . '/assets/src/css/single.css'));
    wp_register_style('category-css', get_template_directory_uri() . '/assets/src/css/category.css', [], filemtime(get_template_directory() . '/assets/src/css/category.css'));
    wp_register_style('search-css', get_template_directory_uri() . '/assets/src/css/search.css', [], filemtime(get_template_directory() . '/assets/src/css/search.css'));
    
    # settings CSS
    wp_register_style('reset-css', get_template_directory_uri() . '/assets/src/css/reset.css', [], filemtime(get_template_directory() . '/assets/src/css/reset.css'));
    wp_register_style('presets-css', get_template_directory_uri() . '/assets/src/css/presets.css', [], filemtime(get_template_directory() . '/assets/src/css/presets.css'));
    wp_register_style('fonts-css', get_template_directory_uri() . '/assets/src/css/fonts/fonts.css', [], filemtime(get_template_directory() . '/assets/src/css/fonts/fonts.css'));
    # scripts
    wp_register_script('home-js', get_template_directory_uri() . '/assets/build/js/home.js', [], filemtime(get_template_directory() . '/assets/build/js/home.js'));
    wp_register_script('blog-js', get_template_directory_uri() . '/assets/build/js/blog.js', [], filemtime(get_template_directory() . '/assets/build/js/blog.js'));
    wp_register_script('single-js', get_template_directory_uri() . '/assets/build/js/single.js', [], filemtime(get_template_directory() . '/assets/build/js/single.js'));
    wp_register_script('category-js', get_template_directory_uri() . '/assets/build/js/category.js', [], filemtime(get_template_directory() . '/assets/build/js/category.js'));
    
    # enqueuing css
    wp_enqueue_style('reset-css');
    wp_enqueue_style('fonts-css');
    wp_enqueue_style('presets-css');
    wp_enqueue_style('main-css');

    # HOME
    if ( is_front_page() ){
        wp_enqueue_script('home-js');
    }

    # BLOG
    if ( is_home() || is_category() && !is_front_page() ){
        wp_enqueue_style('blog-css');
        wp_enqueue_script('blog-js');
    }

    # SINGLE
    if ( is_single() ){
        wp_enqueue_style('single-css');
        wp_enqueue_script('single-js');
    }

    # SEARCH
    if ( is_search() ){
        wp_enqueue_style('search-css');
    }

    // wp_register_style('main-css', get_template_directory_uri() . '/assets/build/css/main.css', [], filemtime(get_template_directory() . '/assets/build/css/main.css',));
    // wp_register_script('main-js', get_template_directory_uri() . '/assets/build/js/main.js', [], filemtime(get_template_directory() . '/assets/build/js/main.js',));

    // wp_register_style('single-css', get_template_directory_uri() . '/assets/build/css/blog.css', [], filemtime(get_template_directory() . '/assets/build/css/blog.css',));
    // wp_register_script('blog-js', get_template_directory_uri() . '/assets/build/js/blog.js', [], filemtime(get_template_directory() . '/assets/build/js/blog.js',));

    // wp_register_style('single-css', get_template_directory_uri() . '/assets/build/css/single.css', [], filemtime(get_template_directory() . '/assets/build/css/single.css',));
    // wp_register_script('single-js', get_template_directory_uri() . '/assets/build/js/single.js', [], filemtime(get_template_directory() . '/assets/build/js/single.js',));

    // # HOME
    // if ( is_front_page() ){
    //     wp_enqueue_style('main-css');
    //     wp_enqueue_script('main-js');
    // }

    // # POST
    // if ( is_single() ){
    //     wp_enqueue_style('single-css');
    //     wp_enqueue_script('single-js');
    // }

    // # CATEGORY
    // if ( is_home() && !is_front_page() ){
    //     wp_enqueue_style('blog-css');
    //     wp_enqueue_script('blog-js');
    // }
}
add_action( 'wp_enqueue_scripts', 'dws_enqueue_scripts' );

###THEME SUPPORT###
add_theme_support('title-tag');
add_theme_support( 'custom-logo', array(
    'header-text' => ['site-title' , 'site-description'],
    'height' => 100,
    'width' => 100,
    'flex-height' => true,
    'flex-width' => true,
));
add_theme_support( 'post-thumbnails' );
add_theme_support( 'customize-selective-refresh-widgets' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
add_editor_style();
add_theme_support( 'wp-block-styles' );
add_theme_support( 'align-wide' );

remove_filter('the_content', 'wpautop');

#### EXCERPT LENGHT ###
function mytheme_custom_excerpt_length( $length ) {
    return 18;
}
add_filter( 'excerpt_length', 'mytheme_custom_excerpt_length', 999 );

?>