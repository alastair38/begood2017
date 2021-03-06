<div class="latest_pubs columns">

	<?php
	if (is_front_page()) {
		$posts_per_page = 3;
	} else {
		$posts_per_page = 15;
	}
	$args = array(
		'posts_per_page' => $post_per_page,
		'post_type' => 'resources',
		'tax_query' => array(
				array(
					'taxonomy' => 'resource_cat',
					'field' => 'slug',
					'terms' => 'publication'
				)
	),
		'order' => 'DESC'
	);

	$lastpublications = get_posts( $args );
	if($lastpublications){
		echo '<h2 class="h5 row">Latest Publications</h2>';
	}
	foreach ( $lastpublications as $post ) :
		setup_postdata( $post );
	// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
	// 	$currentDate = new DateTime();
	// // this should only show an event if the event_date is either today or in the future
	// 	if ( $eventDate >= $currentDate ) : ?>

	<article class="large-6 medium-6 small-12 columns end">
		 <h3 class="h4"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		 <p class="byline">
		 	Published <time
		     datetime="<?php the_time('Y-m-d') ?>"
		     title="<?php the_time('F j, Y') ?>">
		     <?php the_time('F j, Y') ?>
		     </time>
		 </p>
		 <?php  $content = get_the_content();
			echo wp_trim_words($content, 5);?>
	</article>
	<?php

	endforeach;
	wp_reset_postdata(); ?>

</div>
