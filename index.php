<?php get_header(); ?>
<!-- banner part start-->

<div class="container-fluid ">
    <div class="row align-items-center">
        <div class="col-md-12 container-fluid">

            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <?php $i = 1; ?>
                <ol class="carousel-indicators">
                    <li data-target="#<?php the_permalink(); ?>" data-slide-to="<?php echo $i ?>" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i ?>"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="<?php echo $i ?>"></li>
                </ol>
                <div class="carousel-inner">

                    <?php query_posts(['category_name' => 'destaque', 'post_per_page' => 5]); ?>
                    <?php
                    if (have_posts()):
                        ?>
                        <?php while (have_posts()): the_post() ?>
                            <div class="carousel-item <?php
                    if ($i == 1) {
                        echo 'active';
                    }
                            ?>">
                                 <?php the_post_thumbnail('full', ['class' => 'img-fluid']); ?>
                                <div class="carousel-caption d-none d-md-block">
                                    <a href="<?php the_permalink();?>" title="<?php the_title();?>"> 
                                        <h1><?php the_title(); ?></h1>
                                        <p><?php the_excerpt(); ?></p>
                                    </a>
                                </div>
                            </div>
                            <?php
                            $i++;
                        endwhile;
                        ?>
                    <?php endif; ?>
                </div>
                <a class="carousel-control-prev" href="#" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#" role="button" data-slide="next">
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



<section class="service_part section_padding bg-marrom">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-law"></span>
                        <h2>Assessoria Civil</h2>
                        <p> Elaboração e revisão de contratos civil, Renegociação de contratos, Assessoria para a constituição Alteração e dissolução de sociedades empresárias e não empresárias Fundações Associações Cooperativas</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-scale"></span>
                        <h2>Assessoria Trabalhista</h2>
                        <p>Nosso escritório atua, perante a Justiça do Trabalho de 1ª instância, na defesa trabalhista de seus clientes, bem como perante os diversos Tribunais Regionais do Trabalho, com a elaboração de recursos trabalhistas.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-siren"></span>
                        <h2>Assessoria tributaria</h2>
                        <p>Mediante consultoria e planejamento tributários, são repassadas orientações de procedimentos e operações que otimizem a utilização dos instrumentos legais disponíveis, de forma a minimizar os impactos da carga fiscal referente aos tributos federais, estaduais e municipais.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-policeman"></span>
                        <h2>Assessoria de Conciliação e arbitragem</h2>
                        <p> Instituto de Conciliação, Mediação e Arbitragem é uma instituição privada, tendo iniciado suas atividades em 2013, busca a prevenção, avaliação, administração e resolução de conflitos, bem como a pacificação</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-policeman"></span>
                        <h2>Assessoria previdenciaria</h2>
                        <p>Over their the abund every placed thing them them winged you beginning forth</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-policeman"></span>
                        <h2>Assessoria eleitoral</h2>
                        <p>Over their the abund every placed thing them them winged you beginning forth</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-policeman"></span>
                        <h2>Assessoria Penal</h2>
                        <p>Over their the abund every placed thing them them winged you beginning forth</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6 margin-10">
                <div class="single_service_part">
                    <div class="single_service_text">
                        <span class="flaticon-policeman"></span>
                        <h2>Assessoria Constitucional</h2>
                        <p>Over their the abund every placed thing them them winged you beginning forth</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- Service part end-->

<!-- our_offer part start-->

<!-- our_offer part end-->

<!-- team_part part start-->

<!-- team_part part end-->

<!-- cta_part part start-->

<!-- cta_part part end-->

<!--::review_part start::-->
<!-- ================ contact section start ================= -->

<!-- ================ contact section end ================= -->

<!-- footer part start-->

<!--::blog_part end::-->

<!-- team_part part start-->
<section class="blog_part section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-sm-10">
                <div class="section_tittle">
                    <h2>Ultimas do Blog</h2>
                    <p>Fique por dentro de todas as novidades do nosso blog </p>
                </div>
            </div>
        </div>
        <div class="row">
            <?php query_posts(['category_name' => "destaque", 'posts_per_page' => 3]); ?>
            <?php if (have_posts()):the_post() ?>
                <?php while (have_posts()): the_post(); ?>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single_offer_part">

                            <div class="single_offer">

                                <?php if (has_post_thumbnail()): ?>
                                    <?php the_post_thumbnail('single-post-thumbnail') ?>
                                <?php else: ?>
                                    <img class="img-fluid" src="<?php bloginfo('template_url') ?>/img/blog/single_blog_2.png" alt="<?php the_title() ?>"/> 
                                <?php endif; ?>
                                <div class="hover_text">
                                    <div class="single-home-blog">
                                        <a href="<?php the_permalink(); ?>"> <i class="ti-bookmark"></i> <?php the_category("Sem categoria"); ?></a>
                                        <a class="time"> <i class="ti-time"></i><?php echo get_the_time('d/m/Y H'); ?>hs</a>
                                        <a href="<?php the_permalink(); ?>">
                                            <h5 class="card-title"><?php the_title(); ?></h5>
                                        </a>
                                        <p><?php echo limit_words(get_the_content(), 20) ?></p>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div> 
                <?php endwhile; ?>

            <?php endif; ?>
        </div>
    </div>
</section>

<section class="contact-section section_padding cta_area">
    <div class="container">
        <div class="section_tittle">
            <h2>Entre em contato</h2>
        </div>
        <div class="d-none d-sm-block mb-5 pb-4">
            <div id="map" style="height: 480px;"></div>
            <script>
                function initMap() {
                    var uluru = {
                        lat: -10.1825976,
                        lng: -48.3286589
                    };
                    var grayStyles = [{
                            featureType: "all",
                            stylers: [{
                                    saturation: -90
                                },
                                {
                                    lightness: 50
                                }
                            ]
                        },
                        {
                            elementType: 'labels.text.fill',
                            stylers: [{
                                    color: '#ccdee9'
                                }]
                        }
                    ];
                    var map = new google.maps.Map(document.getElementById('map'), {
                        center: {
                            lat: -10.1825976,
                            lng: -48.3286589
                        },
                        zoom: 9,
                        styles: grayStyles,
                        scrollwheel: false
                    });
                }
            </script>
            <script
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDpfS1oRGreGSBU5HHjMmQ3o5NLw7VdJ6I&callback=initMap">
            </script>

        </div>


        <div class="row">

            <div class="col-lg-8">
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
            <div class="col-lg-4">
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-home"></i></span>
                    <div class="media-body">
                        <h3>Q. 104 Norte Rua NE 5 </h3>
                        <h6>Plano Diretor Norte </h6>
                        <p>Palmas, TO 77006-020</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                    <div class="media-body">
                        <h3>(63) 3215-5293</h3>
                        <p>Seg a sexta 8hs às 18hs</p>
                    </div>
                </div>
                <div class="media contact-info">
                    <span class="contact-info__icon"><i class="ti-email"></i></span>
                    <div class="media-body">
                        <h3>support@colorlib.com</h3>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer part start-->
<?php get_footer(); ?>