<?php /* Template Name: Blog */ ?>
<?php get_header(); ?>
<!-- Header part end-->

<!-- breadcrumb start-->
<section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Nosso Blog</h2>
                        <p>home <span>//</span>Blog</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb start-->


<!--================Blog Area =================-->
<section class="blog_area section_padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mb-5 mb-lg-0">

                <div class="blog_left_sidebar">


                    <article class="blog_item">                       
                        <?php if (have_posts()): ?>

                            <?php query_posts(['orderby' => 'title']); ?>

                            <?php while (have_posts()): the_post(); ?>


                                <div class="blog_item_img">
                                    <?php if (has_post_thumbnail()): ?>
                                        <?php the_post_thumbnail('capablog') ?>
                                    <?php else: ?>
                                        <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog/single_blog_2.png" alt="<?php the_title() ?>"/> 
                                    <?php endif; ?>

                                    <a href="<?php the_permalink(); ?>" class="blog_item_date">
                                        <h3><?php echo date("d"); ?></h3>
                                        <p><?php echo date("M", strtotime(get_the_time())) ?></p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="<?php the_permalink(); ?>">
                                        <h2><?php the_title(); ?></h2>
                                    </a>
                                    <p><?php echo limit_words(get_the_content(), 30); ?></p>
                                    <ul class="blog-info-link">
                                        <li><a href="<?php the_permalink(); ?>"><i class="far fa-user"></i> <?php the_author(); ?></a></li>
                                        <li></i><?php echo get_the_time(date("d/m/Y")); ?></li>
                                    </ul>                            
                                </div>

                            <?php endwhile; ?>

                            <?php wp_reset_query(); ?>
                        <?php endif; ?>


                    </article>
<?php query_posts(['orderby' => 'title']); ?>
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                            <?php wp_pagenavi(); ?>                                                 
                        </ul>
                    </nav>

                </div>
            </div>
        <?php get_sidebar(); ?>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php get_footer(); ?>