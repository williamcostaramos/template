<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<!-- Header part end-->
<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">

                <div class="blog_left_sidebar">


                    <article class="blog_item">                       


                        <?php $article = new WP_Query(['post_type' => 'post', 'posts_per_page' => 5]); ?>
                        <?php if ($article->have_posts()): ?>

                            <?php while ($article->have_posts()): $article->the_post(); ?>


                                <div class="blog_item_img">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('capablog') ?>
                                    <?php else: ?>
                                        <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog/02.png" alt="<?php the_title() ?>"/> 
                                    <?php endif; ?>

                                    <a href="<?php the_permalink(); ?>" class="blog_item_date">
                                        <h3><?php echo get_the_time("d"); ?></h3>
                                        <p><?php echo date("M", strtotime(get_the_time())) ?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <p><?php echo limit_words(get_the_content(), 30); ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="<?php the_permalink(); ?>"><i class="fa fa-user"></i> <?php the_author(); ?></a></li>
                                        <li></i><?php echo get_the_time(date("d/m/Y")); ?></li>
                                    </ul>                            
                                </div>

                            <?php endwhile; ?>
                        <?php else: ?>
                            <h1>Nada Para exibir aqui</h1>
                            <?php
                            wp_reset_postdata();
                        endif;
                        ?>


                    </article>
                    <?php
                    global $query_string;
                    parse_str($query_string, $my_query_array);
                    $paged = ( isset($my_query_array['paged']) && !empty($my_query_array['paged']) ) ? $my_query_array['paged'] : 1;
                    ?>
                    <?php $page = new WP_Query(['orderby' => 'title', 'paged' => $paged, 'posts_per_page' => 5]); ?>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <?php if (function_exists('wp_pagenavi')): ?>
                                <?php wp_pagenavi(['query' => $page]); ?>
                            <?php endif; ?>
                        </ul>
                    </nav>
                    <?php wp_reset_postdata(); ?>
                </div>
            </div>
            <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php get_footer(); ?>