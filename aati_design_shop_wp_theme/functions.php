<?php

function aati_design_shop_assets() {
  wp_enqueue_style('google-font', '//fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap', array(), false, 'all');

  wp_enqueue_style('typekit', '//use.typekit.net/uqt3ehr.css', array(), false, 'all');

  wp_enqueue_style('aati-design-shop', get_stylesheet_uri(), array(), false, 'all');

  wp_enqueue_script('aati-design-shop-js', get_theme_file_uri('assets/js/main-script.js'), array(), false, true);

  if( is_singular() && comments_open() && get_option('thread_comments') ) {
    wp_enqueue_script('comment-reply');

  }
}
add_action('wp_enqueue_scripts', 'aati_design_shop_assets');