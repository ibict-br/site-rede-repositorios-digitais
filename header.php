<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Site Rede Brasileira de Repositórios Digitais</title>
    <?php wp_head(); ?>
</head>

<body>
    <!--Logo-->
    <!-- Container Logo -->
    <div class="container-fluid">
        <nav class="navbar navbar-light">
            <div class="container mx-auto">
                <a class="navbar-brand" href="<?php bloginfo( 'url' ); ?>">
                    <?php the_custom_logo(); ?>
                </a>
            </div>
        </nav>
    </div>
    <!--Fim Container Logo-->
    <!-- Menu -->
    <!--Container 1-->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light menu_responsivo">

            <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <!-- Menu -->
                <?php
                    wp_nav_menu(array(
                        'theme_location'  => 'primary',
                        'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                        'container'       => 'div',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id'    => 'navbarSite',
                        'menu_class'      => 'navbar-nav mr-auto', // ul
                        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                        'walker'          => new WP_Bootstrap_Navwalker(),
                    ));
                ?>
                <div class="searchbox">
                    <?php get_search_form();?>
                </div>
            </div>
        </nav>
    </div>
    <!--Container 1-->
    <!-- Fim Menu -->