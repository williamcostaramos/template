            
<div class="col-lg-4">
               <div class="blog_right_sidebar">
                  <aside class="single_sidebar_widget search_widget">
                     <form action="#">
                        <div class="form-group">
                           <div class="input-group mb-3">
                               <input type="text" class="form-control" placeholder="Buscar">
                              <div class="input-group-append">
                                 <button class="btn" type="button"><i class="ti-search"></i></button>
                              </div>
                           </div>
                        </div>
                        <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Pesquisar</button>
                     </form>
                  </aside>
                   <?php query_posts(['post_per_page' => 3]);?>
                   <?php if(have_posts()):?>
                  <aside class="single_sidebar_widget popular_post_widget">
                      
                     <h3 class="widget_title">Mais Recentes</h3>
                     <?php while(have_posts()): the_post();?>
                     <div class="media post_item">
                         <?php if(has_post_thumbnail()):
                            the_post_thumbnail();
                          ?>
                         <?php else:?>
                        <img src="<?php bloginfo('template_url')?>/img/post/post_1.png" alt="post">
                        <?php endif;?>
                        
                        <div class="media-body">
                           <a href="<?php the_permalink();?>">
                              <h3><?php the_title();?></h3>
                           </a>
                           <p><?php echo get_post_time('d/m/Y H:i')?>hs</p>
                        </div>
                     </div> 
                     <?php endwhile;?>
                  </aside>
                   <?php endif;?>
               </div>
            </div>