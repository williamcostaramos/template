<footer class="footer-area">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-sm-6 col-xl-3">
                <div class="single-footer-widget footer_1">
                    <a href="<?php bloginfo('url')?>"> 
                    
                         <?php
                                if (function_exists('the_custom_logo')) {
                                    the_custom_logo();
                                }
                                ?>
                    
                    </a>
                    <p><?php bloginfo('description') ?> </p>
                    <div class="social_icon">
                        <a href="#"> <i class="ti-facebook"></i> </a>
                        <a href="#"> <i class="ti-twitter-alt"></i> </a>
                        <a href="#"> <i class="ti-instagram"></i> </a>
                        <a href="#"> <i class="ti-skype"></i> </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single-footer-widget">


                    <h4>Nossos Serviços</h4>
                    <?php query_posts(['post_type' => 'post_atuacao', 'posts_per_page'=> 6]); ?>
                    <?php if (have_posts()): ?>

                        <ul>
                            <?php while (have_posts()): the_post(); ?>
                                <li><a href="#"><?php the_title() ?></a></li>
                            <?php endwhile; ?>
                        </ul>

                    <?php endif; ?>

                </div>
            </div>
            <div class="col-sm-6 col-xl-3">
                <div class="single-footer-widget footer_icon">
                    <h4>Informações de Contato</h4>
                    <p>Q. 104 Norte Rua NE 5, 38 - Plano Diretor Norte, Palmas, TO</p>
                    <ul>
                        <li><a href="#"><i class="ti-mobile"></i>(63) 3215-5293</a></li>
                        <li><a href="mailto:ariclaw@law.com"><i class="ti-email"></i>seuemail.com.br</a></li>
                        <li><a href="#"><i class="ti-world"></i> <?php bloginfo('url'); ?></a></li>
                    </ul>
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
                                <p class="footer-text m-0 text-center"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                    Copyright <?php bloginfo('name'); ?> &copy;<?php echo date('Y'); ?></script> Todos direitos  reservados
                                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
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