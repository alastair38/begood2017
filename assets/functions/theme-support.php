<?php

// Adding WP Functions & Theme Support
function joints_theme_support() {

	// Add WP Thumbnail Support
	add_theme_support( 'post-thumbnails' );

	// Default thumbnail size
	set_post_thumbnail_size(125, 125, true);

	// Add RSS Support
	add_theme_support( 'automatic-feed-links' );

	// Add Support for WP Controlled Title Tag
	add_theme_support( 'title-tag' );

	// Add HTML5 Support
	add_theme_support( 'html5',
	         array(
	         	'comment-list',
	         	'comment-form',
	         	'search-form',
	         )
	);

	// Adding post format support
	/* add_theme_support( 'post-formats',
		array(
			'aside',             // title less blurb
			'gallery',           // gallery of images
			'link',              // quick link to other site
			'image',             // an image
			'quote',             // a quick quote
			'status',            // a Facebook like status update
			'video',             // video
			'audio',             // audio
			'chat'               // chat transcript
		)
	); */

	function change_order_for_events( $query ) {
    //only show future events and events in the last 24hours
    $yesterday = current_time('timestamp') - 24*60*60;

    if ( $query->is_main_query() && (is_tax('content_type', 'events')) ) {
        $query->set( 'meta_key', 'start_date' );
        $query->set( 'orderby', 'meta_value_num' );
        $query->set( 'order', 'ASC' );

        // //Get events after 24 hours ago
        // $query->set( 'meta_value', $yesterday );
        // $query->set( 'meta_compare', '>' );

       //Get events before now
       //$query->set( 'meta_value', current_time('timestamp') );
       //$query->set( 'meta_compare', '<' );
    }

}

add_action( 'pre_get_posts', 'change_order_for_events' );

} /* end theme support */
