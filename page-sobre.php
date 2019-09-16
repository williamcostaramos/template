<?php /* Template Name:Sobre Nos */ ?>
    <?php get_header();?>
    <section class="about_part section_padding">
        <?php $query= new WP_Query(['post_type'=> 'page', 'pagename'=> 'sobre']);?>
        <?php if(have_posts()):?>
        <?php while(have_posts()): the_post()?>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2><?php the_title()?></h2>
                    </div>
                </div>
                
            </div>
            
            
        <?php endwhile;?>
        <?php endif;?>
    </section>
    
    <section class="service_part section_padding mr_bottom">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span class="flaticon-law"></span>
                            <h2></h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span class="flaticon-scale"></span>
                            <h2>Review The Case</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span class="flaticon-siren"></span>
                            <h2>Winning Guarantee</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="single_service_part">
                        <div class="single_service_text">
                            <span class="flaticon-policeman"></span>
                            <h2>Fully Suppport</h2>
                            <p>Over their the abund every placed thing them them winged you beginning forth</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    <section class="cta_area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10">
                    <div class="cta_text">
                        <h2></h2>
                        <a href="" class="btn btn-info btn-lg" style="margin-bottom: 50px ; padding: 20px;">Fazer Consultoria Gratuita</a>
                    </div>
                </div>
            </div>
            <div class="row text-justify sobre" style="margin-bottom: 25px;">
                
            </div>
        </div>
    </section>
<?php get_footer();?>