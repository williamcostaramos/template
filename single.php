<?php get_header();?>


   <!-- breadcrumb start-->
   <section class="breadcrumb breadcrumb_bg">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
               <div class="breadcrumb_iner text-center">
                  <div class="breadcrumb_iner_item">
                     <h2>Blog</h2>
                     <p>Inicio <span>//</span>Blog</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- breadcrumb start-->
   
   <!--================Blog Area =================-->
   <section class="blog_area single-post-area section_padding">
      <div class="container">
         <div class="row">
            <div class="col-lg-8 posts-list">
               <div class="single-post">
               <?php if(have_posts()):?>
               <?php while(have_posts()): the_post();?>
                  <div class="feature-img">
                     <?php if(has_post_thumbnail()): ?>
                     <?php the_post_thumbnail('blog')?>
                     <?php else:?>
                     <img class="img-fluid" src="<?php bloginfo('template_url')?>/img/blog/single_blog_2.png" alt="<?php the_title()?>"/>                                          
                     <?php endif;?>
                  </div>
                  <div class="blog_details">                 
                     <h2><?php the_title();?></h2>
                     <ul class="blog-info-link mt-3 mb-4">
                        <li><a href="#"><i class="far fa-user"><?php the_author();?></i></a></li>
                        <li> <?php echo get_the_time('d/m/Y H'); ?>hs</li>
                     </ul>
                     <?php the_content();?>
                  </div>
                  <?php endwhile;?>
                  <?php endif;?>
               </div>             
            </div>
            </div>
         </div>
      </div>
   </section>
   <!--================Blog Area end =================-->

   

   <?php get_footer();?>