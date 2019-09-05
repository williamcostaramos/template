<?php
add_theme_support( 'post-thumbnails' );

function create_post_type_atuacao() {
    register_post_type( 'post_atuacao', [
        'labels' => [
          'name' => "Areas de Atuação",
          'singular_name' => "areas-de-atuacao"
        ],
        'public' => true,
        'has_archive' => true,
        'menu_icon' => "dashicons-plus"
      ]
    );
  }
  add_action( 'init', 'create_post_type_atuacao' );

  function limit_word($word, $lenght){
    
    if(strlen($word) >= $lenght)
    {
        $word1= strip_tags($word);
        $word1=mb_substr($word,0,$lenght);

       $word1 = substr($word1, 0, strrpos($word1, ' ')).'...';
    }
    return $word1;
  }