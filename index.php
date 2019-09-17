<?php get_header(); ?>
<!-- banner part start-->

<div class="container-fluid slide ">
    <div class="row  ">
        <div class="w-100  align-items-center">

            <div id="carrosel" class="carousel " data-ride="carousel">


                <div class="carousel-inner">

                    <?php
                    $i = 1;
                    query_posts(['category_name' => 'destaque', 'posts_per_page' => 5]);
                    ?>
                    <?php
                    if (have_posts()):
                        ?>
                        <?php while (have_posts()): the_post() ?>
                            <div class="carousel-item <?php
                            if ($i == 1) {
                                echo 'active';
                            }
                            ?>">
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"> 
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_excerpt(); ?></p>
                                    </a>
                                </div>
                                <?php if (has_post_thumbnail()):the_post_thumbnail('blog', ['class' => 'img-fluid w-100']); ?>
                                <?php else: ?>
                                    <img src="<?php bloginfo('template_url'); ?>/img/post/09.png" class="d-block w-100 img-fluid" alt="<?php the_title(); ?>">
                                <?php endif; ?>
                            </div>
                            <?php
                            $i++;
                            wp_reset_postdata();
                        endwhile;
                        ?>
                    <?php endif; ?>
                </div>
                <a class="carousel-control-prev" href="#carrosel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carrosel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

        </div>
    </div>
</div>
</div>

<!-- banner part start-->

<!-- about part start-->

<!-- about part end-->

<!-- Service part start-->



<section class="service_part section_padding  ">
    <div class="container">
        <div class="section_tittle">
            <h2>Nossas expertise</h2>
            <p>Conheça algumas de nossas principais especialidades </p>
        </div>
        <div class="row align-items-center">
            <?php
            $servico = new WP_Query(['post_type' => 'post_atuacao', 'posts_per_page' => 6]);
            if ($servico->have_posts()):
                ?>
                <?php while ($servico->have_posts()): $servico->the_post(); ?>    

                    <div class="col-lg-4 col-sm-6 margin-10">
                        <div class="single-item text-center">
                            <div class="service-image icons icon">
                                <i class = "material-icons">
                                    <?php the_field('icone'); ?>
                                </i>
                            </div>
                            <div class="media-body service-content">
                                <h3 class="text-center"><?php the_title(); ?></h3>
                                <p><?php the_excerpt() ?></p>
                                <div class="features-read-more">
                                    <a class="btn btn_5 text-left">Saiba Mais</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    wp_reset_postdata();
                endwhile;
                ?>
            <?php endif; ?>




        </div>
    </div>
</section>
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-sm-12">
                <div class="section_tittle">
                    <h2>Ultimas Publicações</h2>
                    <p>Fique por dentro de todas as novidades do nosso blog </p>
                </div>
            </div>
        </div>
        <div class="row">
                    <?php $post_blog= new WP_Query(['posts_per_page'=> 3]);?>
                    <?php if($post_blog->have_posts()):?>
                    <?php while($post_blog->have_posts()): $post_blog->the_post();?>
           
                    <div class="col-lg-4 col-sm-6" >
                        
                        <div class="single_offer_part">
                            <div class="single_offer">
                                <?php if( has_post_thumbnail()):  the_post_thumbnail('single-post-thumbnail', 'img-fluid');?>
                                    <?php else:?>
                                    <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog/01.png" alt="<?php the_title() ?>"/>
                                    <?php endif;?>
                                <div class="hover_text">
                                    <div class="single-home-blog">
                                        <!--pega a categoria-->
                                        <?php $cat_name = get_the_category(); ?>
                                        <a href=""> <i class="ti-bookmark"></i> <?php echo $cat_name[0]->name ?></a>
                                        <a class="time"> <i class="ti-time"></i><?php echo get_the_time('d/m/Y H:i'); ?></a>
                                        <a href="">
                                            <h5 class="card-title"> <?php the_title()?></h5>
                                        </a>
                                        <p><?php the_excerpt();?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
            <?php endwhile;?>
            <?php endif;?>
            
            
        </div>
    </div>
</section>

<section id="contact" class="contact-section section_padding bg-yellow">
    <div class="container">
        <div class="section_tittle">
            <h2 class="tagline">Entre em contato</h2>
        </div>
        <div class="row">

            <div class="col-sm-6">
                <form class="form-contact contact_form" action="contact_process.php" method="post" id="contactForm"
                      novalidate="novalidate">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">

                                <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                          placeholder='Sua Mensagem'></textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="name" id="name" type="text" 
                                       placeholder='Seu Nome'>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <input class="form-control" name="email" id="email" type="email" 
                                       placeholder="Informe seu email">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <input class="form-control" name="subject" id="subject" type="text" 
                                       placeholder='Assunnto'>
                            </div>
                        </div>
                    </div>
                    <div class="form-group mt-3 text-left">
                        <button type="submit" class="button button-contactForm btn_4">Enviar Messagem</button>
                    </div>
                </form>

            </div>
            <div class="col-sm-6">
                <?php require_once 'map.php'; ?>
            </div>

        </div>
    </div>
</section>
<!-- footer part start-->
<?php get_footer(); ?>