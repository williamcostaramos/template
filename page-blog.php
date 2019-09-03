<?php /* Template Name: Blog */ ?>
<?php get_header();?>
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

                        <?php $data= query_posts( 'cat=direito+civil&orderby=title' ) ?>

                        
                        <?php if(have_posts()):?>
                        <?php while(have_posts()): the_post();?>
                            <div class="blog_item_img">
                            <?php the_post_thumbnail();?>
                                <a href="<?php the_permalink();?>" class="blog_item_date">
                                    <h3><?php echo get_the_time( date("d") );?></h3>
                                    <p><?php echo get_the_time( date("m") );?></p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink();?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p><?php the_content();?></p>
                                <ul class="blog-info-link">
                                    <li><a href="<?php the_permalink();?>"><i class="far fa-user"></i> <?php the_author(); ?></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i><?php echo get_the_time( date("d/m/Y") );?></a></li>
                                </ul>                            
                            </div>

                            <?php endwhile;?>
                            <?php endif;?>


                        </article>

                        <article class="blog_item">

                        <?php (query_posts( 'cat=direito+penal&orderby=title' ));?>
                        <?php if(have_posts()):?>
                        <?php while(have_posts()): the_post();?>
                            <div class="blog_item_img">
                            <?php the_post_thumbnail();?>
                                <a href="#" class="blog_item_date">
                                    <h3></h3>
                                    <p>Jan</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php the_permalink();?>">
                                    <h2><?php the_title();?></h2>
                                </a>
                                <p><?php the_content();?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> <?php the_author(); ?></a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> <?php echo get_the_time( date("d/m/Y") );?></a></li>
                                </ul>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?>
                        </article>


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
                            <ul class="list cat-list">
                            
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Resaurant food</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Travel news</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Modern technology</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Product</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Inspiration</p>
                                        <p>21</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Health Care (21)</p>
                                        <p>09</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget popular_post_widget">
                            <h3 class="widget_title">Post Recentes</h3>

                        <?php (query_posts( 'cat=direito+civil&orderby=DESC' ));?>
                        <?php if(have_posts()):?>
                        <?php while(have_posts()): the_post();?>

                            <div class="media post_item">
                                <?php the_post_thumbnail();?>
                                <div class="media-body">
                                    <a href="<?php the_permalink();?>">
                                        <h3><?php the_title();?></h3>
                                    </a>
                                    <p><?php echo get_the_time( date("d/m") );?></p>
                                </div>
                            </div>
                            <?php endwhile;?>
                            <?php endif;?> 
                         
                        </aside>
                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tags</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">project</a>
                                </li>
                                <li>
                                    <a href="#">love</a>
                                </li>
                                <li>
                                    <a href="#">technology</a>
                                </li>
                                <li>
                                    <a href="#">travel</a>
                                </li>
                                <li>
                                    <a href="#">restaurant</a>
                                </li>
                                <li>
                                    <a href="#">life style</a>
                                </li>
                                <li>
                                    <a href="#">design</a>
                                </li>
                                <li>
                                    <a href="#">illustration</a>
                                </li>
                            </ul>
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

 <?php get_footer()?>