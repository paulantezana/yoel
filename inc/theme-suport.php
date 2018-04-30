<?php
    // Register main menu
    register_nav_menus(['main_menu_top'    => 'Main Menu Top']);

    // Theme thumbnails supports
    add_theme_support( 'post-thumbnails' );

    // Theme customize selective refresh widgets
    add_theme_support( 'customize-selective-refresh-widgets' );

    // Theme widgets support
    function widgets_activation(){
        register_sidebar([
            'name'          => __( 'paulantezana', 'paul' ),
            'id'            => 'paulantezana',
            'description'   => __( 'sidebar paulantezana', 'paulantezana' ),
            'before_widget' => '<section id="%1$s" class="sidebar %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="sidebar__title">',
            'after_title'   => '</h2>',
            ]
        );
    }

    // Theme widgets activation
    add_action('widgets_init','widgets_activation');