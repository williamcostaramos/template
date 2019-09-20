<?php /* Template Name:Sobre Nos */ ?>
<?php get_header(); ?>
<section class="about_part section_padding ">
    <?php $query = new WP_Query(['post_type' => 'page', 'pagename' => 'sobre']); ?>
    <?php if (have_posts()): ?>
        <?php while (have_posts()): the_post() ?>
    <div class="container" >
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section_tittle text-center">
                            <h2><?php bloginfo('name'); ?></h2>
                        </div>
                    </div>

                </div>
            <?php endwhile; ?>
        <?php endif; ?>
</section>
<section class="main-content full container text-institutional">
     <?php $page_sobre = new WP_Query(['post_type'=> 'post_sobre', 'posts_per_page' => 1])?>
    <?php if($page_sobre->have_posts()):?>
    <div class="row">
        <?php while($page_sobre->have_posts()): $page_sobre->the_post();?>
        <div class="col-sm-12 col-md-6 col-first">
            <?php the_content()?>
        </div>
        <div class="col-sm-12 col-md-6 col-second ">
            <div class="box-institutional-image ">
                <?php if(has_post_thumbnail()): the_post_thumbnail('full'); else:?>
                        <img class="img-fluid " src="https://www.nwadv.com.br/wp-content/uploads/2018/09/img-visao.jpg" title="Nossa Visão" alt="Nossa Visão">
                        <?php endif;?>
            </div>
        </div>

        <?php endwhile;?>

    </div>
    <?php endif;?>
</section>
<section class="main-content full box-philosophy" >
    <div class="container">
        <div class="row">
            <?php $page_sobre = new WP_Query(['post_type'=> 'post_sobre', 'posts_per_page' => 1])?>
            <?php if($page_sobre->have_posts()):?>
            <?php while($page_sobre->have_posts()): $page_sobre->the_post();?>
            <div class="col-sm-6 col-md-4  col-lg-4 mb-2  shadow">
                <div class="institutional-item the-firm  ">
                    <div class="image">
                        
                        <img class="img-fluid " src="<?php the_field('imagem_visao')?>" title="Nossa Visão" alt="Nossa Visão">
                        
                    </div>
                    <h2 class="card-title">Nossa Visão</h2>
                    <p class="card-text"><?php the_field('visao')?></p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4  mb-2  shadow " >
                <div class="institutional-item the-firm">
                    <div class="image">
                        
                        <img class="img-fluid " src="<?php the_field('imagem_missao')?>" title="Nossa Visão" alt="Nossa Visão">
                        
                    </div>
                    <h2>Nossa Missão</h2>
                    <p><?php the_field('missao')?></p>
                </div>
            </div>
            <div class="col-sm-6 col-md-4 col-lg-4  shadow" >
                <div class="institutional-item the-firm">
                    <div class="image">
                        
                        <img class="img-fluid " src="<?php the_field('img-valores')?>" title="Nossa Visão" alt="Nossa Visão">
                        
                    </div>
                    <h2>Nossos Valores</span></h2>
                    <p><?php the_field('seus_valores')?></p>
                </div>
            </div>
            <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</section>
<?php get_footer(); ?>