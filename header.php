<!doctype html>
<html lang="pt-br">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?></title>
        <link rel="icon" href="<?php bloginfo('template_url') ?>/img/favicon.png">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css">
        <!-- animate CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/animate.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.min.css">
        <!-- themify CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/themify-icons.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/flaticon.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/magnific-popup.css">
        <!-- swiper CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/slick.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/gijgo.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/nice-select.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>css/all.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
        <?php wp_head(); ?> 
    </head>

    <body>
        <!--::header part start::-->
        <header class="main_menu home_menu">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-12">
                        <nav class="navbar navbar-expand-lg navbar-light">

                            <a class="navbar-brand" href="<?php bloginfo('url'); ?>"> 

                                <?php
                                if (function_exists('the_custom_logo')) {
                                    the_custom_logo();
                                }
                                ?>
                            </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                    aria-expanded="false" aria-label="Toggle navigation">
                                <span class="menu_icon"></span>
                            </button>

                            <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php bloginfo('url'); ?>">Inicio</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php bloginfo('url') ?>/sobre">Sobre Nos</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php bloginfo('url') ?>/blog">Publicações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php bloginfo('url') ?>/servico">Áreas de Atuação</a>
                                    </li>                              
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php bloginfo('url') ?>/contato">Contato</a>
                                    </li>
                                </ul>
                            </div>
                            <a href="https://personalizejuridico.com.br/dejure/" target="_blank" class="d-none d-sm-block menu_btn">Fazer Login</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <!-- Header part end-->
