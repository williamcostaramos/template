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

                            <?php query_posts([ 'posts_per_page' => 6, 'orderby' => 'title']); ?>

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
                        <?php endif; ?>


                    </article>


                     <?php  pagination();?>
                            
                    <nav class="blog-pagination justify-content-center d-flex">
                        <ul class="pagination">
                              
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Previous">
                                    <i class="ti-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link">1</a>
                            </li>
                            <li class="page-item active">
                                <a href="#" class="page-link">2</a>
                            </li>
                            <li class="page-item">
                                <a href="#" class="page-link" aria-label="Next">
                                    <i class="ti-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="blog_right_sidebar">
                    <aside class="single_sidebar_widget search_widget">
                        <form action="#">
                            <div class="form-group">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder='Buscar'>
                                    <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Pesquisar</button>
                        </form>
                    </aside>

                    <aside class="single_sidebar_widget post_category_widget">
                        <h4 class="widget_title">Categorias</h4>


                        <?php
                        $args = array(
                            'orderby' => 'name',
                            'order' => 'ASC'
                        );
                        $categories = get_categories($args);
                        ?>
                        <?php if ($categories): ?>


                            <ul class="list cat-list">
                                <?php foreach ($categories as $categoria): ?>  


                                    <li>
                                        <a href="<?php echo get_category_link($categoria->term_id); ?>" class="d-flex">
                                            <p> <?php echo $categoria->name; ?> &nbsp</p>
                                            <p> (<?php echo $categoria->count; ?>)</p>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            <?php endif; ?>

                        </ul>
                    </aside>

                    <aside class="single_sidebar_widget popular_post_widget">
                        <h3 class="widget_title">Posts Recentes</h3>
                        <div class="media post_item">
                            <?php query_posts(['posts_per_page' => 5]); ?>
                            <?php if (have_posts()): ?>
                                <?php while (have_posts()): the_post(); ?>
                                    <div class="media-body">
                                        <a href="<?php the_permalink(); ?>">
                                            <h3></h3>
                                        </a>
                                        <p><?php the_title(); ?></p>
                                    </div>
                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>


                    </aside>                        
                    <aside class="single_sidebar_widget newsletter_widget">
                        <h4 class="widget_title">Receba Novidades no seu E-mail</h4>

                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder='Informe seu Email' required>
                            </div>
                            <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Assinar</button>
                        </form>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</section>
<!--================Blog Area =================-->

<?php get_footer(); ?>