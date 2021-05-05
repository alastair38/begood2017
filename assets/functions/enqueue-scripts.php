<?php
function site_scripts() {
  global $wp_styles; // Call global $wp_styles variable to add conditional wrapper around ie stylesheet the WordPress way

    // Load What-Input files in footer
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/vendor/what-input/what-input.min.js', array(), '', true );

    wp_enqueue_script( 'mojs', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js', array(), '', true );


    // Load Slick JS files in footer - front page only
    if (is_front_page()) {
    wp_enqueue_script( 'owl-carousel', 'https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.js', array('jquery'), '', true );
    }

    if (is_front_page()) {
    wp_enqueue_script( 'slick-init-js', get_template_directory_uri() . '/assets/js/slick-scripts.js', array( 'jquery' ), '', true );
    }


  //   if (is_page('forthcoming-meetings')) {
  //       wp_enqueue_script( 'addtocalendar-js', get_template_directory_uri() . '/assets/js/calendar.js', array( 'jquery' ), '', true );
  //       wp_enqueue_style( 'addtocalendar', 'http://addtocalendar.com/atc/1.5/atc-style-blue.css');
  // }

    // Adding Foundation scripts file in the footer
    wp_enqueue_script( 'foundation-js', get_template_directory_uri() . '/assets/js/foundation.js', array( 'jquery' ), '6.2', true );


    // Adding Cookie scripts file in the footer
    wp_enqueue_script( 'cookie-js', get_template_directory_uri() . '/assets/js/cookie.js', array( 'jquery' ), '', true );


    // Adding scripts file in the footer
    wp_enqueue_script( 'site-js', get_template_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ), '', true );

    wp_enqueue_style( 'googlefonts', 'https://fonts.googleapis.com/css?family=Questrial|Quicksand&display=swap');

    wp_enqueue_style( 'material-icons', 'https://fonts.googleapis.com/icon?family=Material+Icons');

    wp_enqueue_style( 'materialize', 'https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/css/materialize.min.css');

    wp_enqueue_style( 'slick-css', 'https://cdn.jsdelivr.net/npm/@accessible360/accessible-slick@1.0.1/slick/slick.min.css', array(), '', 'all' );

    // Register main stylesheet
    wp_enqueue_style( 'site-css', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );

    // Comment reply script for threaded comments
    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }
}
    add_action('wp_enqueue_scripts', 'site_scripts', 999);

    // Remove emoji styles/scripts

    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('wp_print_styles', 'print_emoji_styles');

    remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
    remove_action( 'admin_print_styles', 'print_emoji_styles' );
