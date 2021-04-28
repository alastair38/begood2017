<div class="latest_pubs">

	<?php

	$args = array(
		'posts_per_page' => 3,
		'post_type' => 'resources',
		'tax_query' => array(
				array(
					'taxonomy' => 'resource_cat',
					'field' => 'slug',
					'terms' => 'publications'
				)
	),
		'order' => 'DESC'
	);

	$lastpublications = get_posts( $args );
	if($lastpublications){
		echo '<h2 class="h4">Latest Publications</h2>';
	foreach ( $lastpublications as $post ) :
		setup_postdata( $post );
	// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
	// 	$currentDate = new DateTime();
	// // this should only show an event if the event_date is either today or in the future
	// 	if ( $eventDate >= $currentDate ) : ?>

	<article>
		 <h3 class="h5"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		 <span class="byline">
		 	Published <time
		     datetime="<?php the_time('Y-m-d') ?>"
		     title="<?php the_time('F j, Y') ?>">
		     <?php the_time('F j, Y') ?>
		     </time>
		 </span>
		 <?php  $content = get_the_content();
			//echo wp_trim_words($content, 5);?>
	</article>
	<?php

	endforeach;
	wp_reset_postdata(); }
	else {
		echo '<h2 class="h4 show-for-large">Latest Publications</h2><p class="show-for-large">
		Our latest publications will appear here soon
		</p>';
	} ?>

</div>
