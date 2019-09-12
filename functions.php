<?php

add_theme_support('post-thumbnails');

function create_post_type_atuacao() {
    register_post_type('post_atuacao', [
        'labels' => [
            'name' => "Areas de Atuação",
            'singular_name' => "Areas de Atuacao"
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => "dashicons-plus"
            ]
    );
}

add_action('init', 'create_post_type_atuacao');

function limit_words($string, $word_limit) {
    $words = explode(' ', $string, ($word_limit + 1));
    if (count($words) > $word_limit) {
        array_pop($words);
        array_push($words, "<b>...</b>");
    }
    return implode(' ', $words);
}




function add_meta_tags() {
echo '<meta property="og:title" content="Titulo do seu site" />';
echo '<meta property="og:description" content="Descrição do meu site" />';
echo '<meta name="keywords" content="keyword1, keyword2,..." />';
echo '<meta property="og:type" content="website" />';
echo '<meta property="og:site_name" content="MeuSite" />';
}
add_action('wp_head', 'add_meta_tags');

set_post_thumbnail_size(50, 50, true);





function themename_custom_logo_setup() {
 $defaults = array(
 'height'      => 64,
 'width'       => 64,
 'flex-height' => true,
 'flex-width'  => true,
 'header-text' => array( 'site-title', 'site-description' ),
 );
 add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );

add_image_size('single-post-thumbnail', 350, 450,true);
add_image_size('artigo-blog', 700, 300,true);
add_image_size('blog', 1600, 720, true);
add_image_size('the_custom_logo',64,64, true);

