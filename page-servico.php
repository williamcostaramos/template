<?php /* Template Name: Serviços*/ ?>
<?php get_header();?>
    <!-- breadcrumb start-->
    <section class="breadcrumb breadcrumb_bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb_iner text-center">
                        <div class="breadcrumb_iner_item">
                            <h2>Nossos Serviços</h2>
                            <p>Inicio <span>//</span>Serviço</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- breadcrumb start-->


    <!-- servicing start-->
    <section class="single_service section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-sm-10">
                    <div class="section_tittle">
                        <h2>Áreas de Atuação</h2>
                        <p>Conheça algumas de nossas principais especialidades</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-between">

                <?php query_posts(['post_type'=> 'post_atuacao']);?>
                    <?php if(have_posts()):;?>
                    <?php while(have_posts()): the_post();?>
                <div class="col-lg-4 col-sm-6">
                    <div class="single_single_service">
                        <img src="<?php bloginfo('template_url');?>/img/icon/service_2.svg" alt="#">
                        <h4><?php the_title();?></h4>
                        <p><?php the_content();?></p>
                    </div>
                </div>

                <?php endwhile;?>
                
                <?php endif;?>
        </div>
    </section>
    <!-- servicing end-->
  <?php get_footer();?>