<?php /* Template Name: Serviços */ ?>
<?php get_header(); ?>
<section class="single_service section_padding " style="margin-bottom:25px; ">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12 col-sm-6 col-md-3">
                <div class="section_tittle">
                    <h2>Áreas de Atuação</h2>
                    <p>Conheça algumas de nossas principais especialidades</p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php $servico = new WP_Query(['post_type' => 'post_atuacao']); ?>
            <?php if ($servico->have_posts()): ?>
                <?php while ($servico->have_posts()): $servico->the_post(); ?>
                    <div class="col-sm-6 col-md-4">
                        <div class="card shadow">
                            <div class="card-body">
                                <div class='text-center'> 
                                <i class="material-icons text-center" style="font-size: 15em;">
                                    <?php the_field('icone');?>
                                </i>
                                </div>
                                <h3 class="card-title text-center"><?php the_title(); ?></h3>
                                <p class="card-text"><?php the_content()?></p>
                                
                            </div>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata();?>
            <?php endif; ?>

        </div>


</section>

<?php get_footer(); ?>