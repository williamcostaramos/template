<footer class="footer-area color_five shadow">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-xl-4">
                <div class="single-footer-widget footer_1">
                    <?php $about = new WP_Query(['post_type' => 'post_sobre', 'posts_per_page' => 1]); ?>
                    <?php if ($about->have_posts()): ?>
                    <?php while ($about->have_posts()): $about->the_post() ?>
                    <a href="<?php bloginfo('url') ?>"> 

                        <img src="<?php the_field('imagem_institucional');?>" width="150" height="75" title="" />

                    </a>
                    
                        
                            <p class="text-justify"> <?php limit_words(the_field('breve_descricao'), 5) ?></p>
                            <?php
                        endwhile;
                        $about->wp_reset_postdata();
                        ?>
                    <?php endif; ?>

                    <?php $social = new WP_Query(['post_type' => 'post_social', 'posts_per_page' => 1]); ?>
                    <?php if ($social->have_posts()): ?>

                        <div class="social_icon">
                            <?php while ($social->have_posts()): $social->the_post(); ?>
                                <a href=" <?php the_field('facebook'); ?>" target="_blank"> <i class="ti-facebook"></i> </a>
                                <a href=" <?php the_field('twitter'); ?>" target="_blank"> <i class="ti-twitter-alt"></i> </a>
                                <a href=" <?php the_field('instagram'); ?>" target="_blank"> <i class="ti-instagram"></i> </a>

                            <?php endwhile; $social->wp_reset_postdata();?>
                        </div>


                    <?php endif; ?>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single-footer-widget">


                    <h4>Nossos Serviços</h4>
                    <?php $servico = new WP_Query(['post_type' => 'post_atuacao', 'posts_per_page' => 6]); ?>
                    <?php if ($servico->have_posts()): ?>

                        <ul>
                            <?php while ($servico->have_posts()): $servico->the_post(); ?>
                                <li><a href="#"><?php the_title() ?></a></li>
                            <?php endwhile; $servico->wp_reset_postdata();?>
                        </ul>

                    <?php endif; ?>

                </div>
            </div>
            <div class="col-sm-6 col-xl-4" >
                <div class="single-footer-widget footer_icon">
                    <?php $contato = new WP_Query(['post_type' => 'post_endereco', 'posts_per_page' => 1]); ?>
                    <?php if ($contato->have_posts()): ?>
                        <h4>Informações de Contato</h4>
                        <?php while ($contato->have_posts()): $contato->the_post(); ?>
                            <p><?php the_field('endereco') ?></p>
                            <ul>
                                <li><a href="tel:<?php the_field('telefone') ?>"><i class="ti-mobile"></i><?php the_field('telefone') ?></a></li>
                                <li><a href="mailto:<?php the_field('email') ?>"><i class="ti-email"></i><?php the_field('email') ?></a></li>
                                <li><a href="<?php the_field('site') ?>"><i class="ti-world"></i> <?php the_field('site') ?></a></li>
                            </ul>
                        <?php endwhile; $contato->wp_reset_postdata();?>
                    <?php endif; ?>
                </div>
            </div>

        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright_part_text text-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 col-md-12">
                                <p class="footer-text m-0 text-center">Copyright <?php bloginfo('name'); ?> &copy; 2019 - <?php echo date('Y'); ?></script> Todos direitos  reservados
                                    </p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- footer part end-->

<!-- jquery plugins here-->
<script src="<?php bloginfo('template_url') ?>/js/jquery-1.12.1.min.js"></script>
<!-- popper js -->
<script src="<?php bloginfo('template_url') ?>/js/popper.min.js"></script>
<!-- bootstrap js -->
<script src="<?php bloginfo('template_url') ?>/js/bootstrap.min.js"></script>
<!-- easing js -->
<script src="<?php bloginfo('template_url') ?>/js/jquery.magnific-popup.js"></script>
<!-- swiper js -->
<script src="<?php bloginfo('template_url') ?>/js/swiper.min.js"></script>
<!-- swiper js -->
<script src="<?php bloginfo('template_url') ?>/js/masonry.pkgd.js"></script>
<!-- particles js -->
<script src="<?php bloginfo('template_url') ?>/js/owl.carousel.min.js"></script>
<!-- swiper js -->
<script src="<?php bloginfo('template_url') ?>/js/slick.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/gijgo.min.js"></script>
<script src="<?php bloginfo('template_url') ?>/js/jquery.nice-select.min.js"></script>
<!-- custom js -->
<script src="<?php bloginfo('template_url') ?>/js/custom.js"></script>

<?php wp_footer(); ?> 
</body>

</html>