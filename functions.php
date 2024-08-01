<?php

function my_theme_enqueue_styles() {
  // Подключение Google Fonts
  wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap', false, null);
  
  // Подключение Swiper CSS
  wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

  // Подключение основного стиля темы
  wp_enqueue_style('theme-style', get_template_directory_uri() . '/style.css', array(), wp_get_theme()->get('Version'));

  wp_enqueue_script('smooth-scroll', 'https://cdn.jsdelivr.net/npm/smooth-scroll@16.1.0/dist/smooth-scroll.polyfills.min.js', array(), null, true);
  
  // Подключение Swiper JS
  wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

  // Подключение основного скрипта темы с зависимостью от Swiper JS
  wp_enqueue_script('theme-script', get_template_directory_uri() . '/assets/js/index.js', array('swiper-js'), wp_get_theme()->get('Version'), true);
}
add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles');


add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'includes/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}



add_action('carbon_fields_register_fields', 'register_carbon_fields');
function register_carbon_fields() {
  require_once( 'includes/carbon-fields-options/theme-options.php' );
  require_once( 'includes/carbon-fields-options/post-meta.php' );
}