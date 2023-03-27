<?php

function home_taxonomia()
{
    register_taxonomy(
        'categoriasHome',
        'home',
        array(
            'labels' => array('name' => 'Categorias'),
            'hierarchical' => true
        )
    );
};
function home()
{
    register_post_type('home', array(
        'labels' => array('name' => 'Banners Home'),
        'public' => true,
        'menu_position' => 0,
        'supports' => array('title', 'edito   r', 'thumbnail'),
        'menu_icon' => 'dashicons-welcome-write-blog'
    ));
};


add_action('init', 'home');
add_action('init', 'home_taxonomia');



add_theme_support('post-thumbnails');
