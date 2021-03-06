<div class="latest_videos">

	<?php
	$args = array(
		'posts_per_page' => 12,
		'post_type' => 'resources',
		'tax_query' => array(
				array(
					'taxonomy' => 'resource_cat',
					'field' => 'slug',
					'terms' => 'video'
				)
	),
		'order' => 'DESC'
	);

	$lastvideos = get_posts( $args );
	if($lastvideos){
		echo '<h2 class="h5">Latest Videos</h2>';
	}
	foreach ( $lastvideos as $post ) :
		setup_postdata( $post );
	// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
	// 	$currentDate = new DateTime();
	// // this should only show an event if the event_date is either today or in the future
	// 	if ( $eventDate >= $currentDate ) : ?>

	<article class="large-3 medium-4 small-6 columns end">
		 <h3 class="h4"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		 <p class="byline">
		 	Published <time
		     datetime="<?php the_time('Y-m-d') ?>"
		     title="<?php the_time('F j, Y') ?>">
				 <?php the_time('F j, Y') ?>

		     </time>
		 </p>
		 <?php the_content();?>
	</article>
	<?php

	endforeach;
	wp_reset_postdata(); ?>

</div>
