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
        <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300italic,regular,italic,600,600italic,700,700italic,800,800italic&amp;subset=latin" rel="stylesheet" type="text/css">
        <!-- owl carousel CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/owl.carousel.min.css">
        <!-- themify CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/themify-icons.css">
        <!-- flaticon CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/flaticon.css">
        <!-- font awesome CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/magnific-popup.css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
              rel="stylesheet">
        <!-- swiper CSS -->

        <script src="https://use.fontawesome.com/debc5f370d.js"></script>

        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/slick.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/gijgo.min.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/nice-select.css">
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>css/all.css">
        <!-- style CSS -->
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css">
        <?php wp_head(); ?> 
        <style>
<?php $color = new WP_Query(['post_type' => 'post_color', 'posts_per_page' => 1]) ?>
<?php if ($color->have_posts()): ?>
    <?php while ($color->have_posts()):$color->the_post() ?>
                    .color-primary{ background: <?php the_field('color_primary'); ?> !important; color:#fff;}
                    .color_secondy{background: <?php the_field('color_secondy'); ?> !important; color:#333 ! important;}
                    .color_third{background: <?php the_field('color_third'); ?> !important;color:#fff;}
                    .color_four{background: <?php the_field('color_four'); ?>;}
                    .color_five{background: <?php the_field('color_five'); ?>;}
        <?php
    endwhile;
    $color->wp_reset_postdata();
    ?>
<?php endif; ?>
        </style>
    </head>

    <body>
        <!--::header part start::-->
        <header class="main_menu home_menu color-primary shadow">
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
                                        <a class="nav-link" href="<?php bloginfo('url') ?>/sobre">O Escritório</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php bloginfo('url') ?>/blog">Publicações</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="<?php bloginfo('url') ?>/servico">Áreas de Atuação</a>
                                    </li>                              
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link scroll" href="#contact">Contato</a>
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
