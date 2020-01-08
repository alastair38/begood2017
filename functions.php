<?php

// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');
require_once(get_template_directory().'/assets/functions/menu-walkers.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
require_once(get_template_directory().'/assets/functions/custom-post-type.php');

// Customize the WordPress login menu
require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
require_once(get_template_directory().'/assets/functions/admin.php');

// Customize the WordPress customizer
require_once(get_template_directory().'/assets/functions/customize.php');

/* ADD RESOURCE AND NEWS POST TYPES TO THE MAIN QUERY ON AUTHOR AND CATEGORY PAGES */

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( is_author() && $query->is_main_query() || is_category() && $query->is_main_query()  )
		$query->set( 'post_type', array( 'post', 'resources', 'news' ) );

	return $query;
}

if( function_exists('acf_add_options_page') ) {

	acf_add_options_page();

}

function begood_add_excerpt_support_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'begood_add_excerpt_support_for_pages' );

// function to redirect away from Tracing Tomorrow landing page unless the site visitor is coming from the game website (which is defined on the options page).
add_action( 'template_redirect', 'tracingtomorrow_redirect' );
function tracingtomorrow_redirect() {
	$page = get_field('game_page', 'options');
	$ref_to_match = get_field('referral_page', 'options');
  $ref = wp_get_referer();

	if($page == null) {

    if (is_page($page) && $ref == $ref_to_match) {
        //echo 'Its Working Let it Continue';
    }
    else if (is_page($page) && $ref !== $ref_to_match){
			wp_redirect( home_url( ) );

        // Not Working Let's Redirect and exit
    }
    else if (!is_page($page)){
          // echo 'We Don't Need Anything Here';
    }
		}
}
