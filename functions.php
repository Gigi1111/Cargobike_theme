<!-- plugin that comes with the theme -->
<!-- js and boostrap -->

<?php

// load stylesheet
function load_css()
{
    //install bootstrap, download bootstarp n move css n js in the theme
    //wp has a handy tell wp the root path to stylesheet
    // . separate php from standard text
    // 3rd param dependencies, u have nothing so put 'array()
    //4th param version, or just false
    //5th media query, 
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(),false, 'all');
    wp_enqueue_style('bootstrap');
   //your own style
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(),false, 'all');
    wp_enqueue_style('main');

}

add_action('wp_enqueue_scripts','load_css');

//load js
function load_js()
{
    wp_enqueue_script('jquery');
    //first aparam u can name whatever
    // last param is if it should be in head, true yes, false to footer
    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js','jquery',false,true);
    wp_enqueue_script('bootstrap');

}

add_action('wp_enqueue_scripts','load_js');

// theme options
add_theme_support('menus'); // then under appearance there'll be menu, add pages in and drag for ordering

//menus
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location', //id -> visual location
        'mobile-menu' => 'Mobile Menu Location',
        'footer-menu' => 'Footer Menu Location'
    )

);



//create sidebar
add_theme_support('widgets'); 

function my_sidebars()
{
    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before-title' => '<h4 class="widget-title">',
            'after-title' => '</h4>'
        )
    );
}
add_action('widgets_init','my_sidebars');


//create custom post =car
function my_first_post_type()
{
    $args = array(
        'labels' => array(
            'name'=>'Cars',
            'singular_name' => 'Car'
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-images-alt2',
        //wp-icon
        'supports' => array('title', 'editor', 'thumbnail'),
        // 'rewrite' => array('slug'=>'cars'),

    );
    register_post_type('cars',$args);
}
add_action('init','my_first_post_type');


function my_first_taxonomy()
{
    $args = array(
        'labels' => array(
            'name'=>'Brands',
            'singular_name' => 'Brand'
        ),
        'public' => true,
        'hierarchical' => true,
    );
    register_taxonomy('Brands', array('cars'), $args);
}
add_action('init','my_first_taxonomy');