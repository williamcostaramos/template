<?php $contato = new WP_Query(['post_type' => 'post_endereco', 'posts_per_page' => 1]); ?>   
<?php if ($contato->have_posts()): ?>
    <?php while ($contato->have_posts()): $contato->the_post();?>


<div id="map" class="round" style="height: 400px;"></div>


        <script>
            function initMap() {
                var uluru = {
                    lat:<?php the_field('latitude') ?>,
                    lng:<?php the_field('longitude') ?>
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
                    }, {
                        elementType: 'labels.text.fill',
                        stylers: [{
                                color: '#ccdee9'
                            }]
                    }
                ];
                var map = new google.maps.Map(document.getElementById('map'), {
                    center: {
                        lat:<?php the_field('latitude') ?>,
                        lng:<?php the_field('longitude') ?>
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
    <?php endwhile; ?>

<?php endif; ?>
