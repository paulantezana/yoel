<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' )?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="description" content="<?php bloginfo('description');?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo( 'name' )?></title>
        <link href="https://file.myfontastic.com/gSW82snjpEUNAUmanzgKQj/icons.css" rel="stylesheet">
        <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.ico" type="image/x-icon">
        <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
        <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() );?>/assets/theme.css">
        <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/theme.js"></script>
        <?php wp_head();?>
    </head>
    <body>
        <div class="layout-container">
            <div class="header-container">
                <header class="header sn-container main-justify cross-center">
                    <a class="header__logo sn-item l-20" href="<?php echo esc_url( home_url() );?>">
                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="">
                    </a>
                    <div class="header__nav sn-item l-80 main-end">
                        <div id="main-menu-toggle"></div>
                        <?php
                            $args = [
                                'theme_location'  => 'main_menu_top',
                                'container'       => 'nav',
                                'container_class' => 'main-menu-nav',
                                'menu_class'      => 'main-menu',
                                'menu_id'        => 'main-menu'
                            ];
                            wp_nav_menu($args);
                        ?>
                    </div>
                </header>
            </div>
            <div class="main-container"></div>
                <main class="main">