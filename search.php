<?php
/*
  Template Name: Search
 *  */

get_header();
?>

<div class="wrap">

    <header class="page-header text-center">
        <?php if (have_posts()) : ?>
            <h1 class="page-title">Resultados para: <b><?php echo get_search_query(); ?></b></h1>
        <?php else : ?>

            <div class="alert alert-warning justify-content-center" role="alert">

                <h1>Desculpe, nao conseguimos encontrar nada para o termo: <?php echo $_GET['s']; ?></h1>        

            </div>

        <?php endif; ?>
    </header><!-- .page-header -->
</div>


<main id="main" class="site-main container-fluid" role="main">

    <div class="row  justify-content-center">

        <div class="col-sm-12 col-md-8 ">
            <?php
            $search = filter_input(INPUT_GET, 's', FILTER_SANITIZE_SPECIAL_CHARS);
            query_posts(['post_type' => 'post', 's' => $search])
            ?>
            <?php if (have_posts()): ?>

                <?php while (have_posts()): the_post(); ?>
                    <div class="card mb-12" >
                        <a href="<?php the_permalink(); ?>">
                            <div class="row no-gutters">
                                <div class="col-md-4" >
                                    <?php
                                    if (has_post_thumbnail()):
                                        the_post_thumbnail('single-post-thumbnail', ['clas' => 'img-fluid'])
                                        ?>
                                    <?php else: ?>                                  
                                        <img src="<?php bloginfo('template_url') ?>/img/blog/02.png" class="img-fluid" alt="<?php the_title(); ?>" title="<?php the_title(); ?>">

                                    <?php endif; ?>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title"><?php the_title(); ?></h5>
                                        <p class="card-text"><?php the_excerpt(); ?></p>
                                        <p class="card-text"><small class="text-muted"><?php echo get_the_time('d/m/Y'); ?></small></p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php else: ?>

            <?php endif; ?>
        </div>
    </div>

<nav class="pagination justify-content-center d-flex">
    <ul class="pagination">
        <?php wp_pagenavi(); ?>                                                 
    </ul>
</nav>
</main> 





<?php get_footer(); ?>

