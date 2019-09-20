<?php
/*
  Template Name: 404
 */
?>
<?php get_header(); ?>


<div class="container-fluid" style="margin: 25px 0;">
    <div class="error-page-area">
        <div class="">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="error-page" style="background: url(https://www.radiustheme.com/demo/wordpress/miako/wp-content/themes/miako/assets/img/404.png) no-repeat; height: 500px;">
                        <h1>404</h1>
                        <p>Sorry,Page Not Found</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="align-item-center">
                        <p>The page your are looking for is not available or has been removed. Try going to Home Page by using the buton below</p>
                        <div class="go-home"> 
                            <a href="<?php bloginfo('url')?>">Voltar ao Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>