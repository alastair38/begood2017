<div class="latest_posts">

	<?php
	$args = array(
		'posts_per_page' => 5,
		'post_type' => 'post',
		'exclude' => $post->ID,
		// 'meta_key'=>'event_date',
		// 'orderby' => 'meta_value',
		'order' => DESC
	);

	$lastposts = get_posts( $args );
	echo '<h4>The Blog</h4>';
	foreach ( $lastposts as $post ) :
		setup_postdata( $post );
	// 	$eventDate = DateTime::createFromFormat('Ymd', get_field('event_date'));
	// 	$currentDate = new DateTime();
	// // this should only show an event if the event_date is either today or in the future
	// 	if ( $eventDate >= $currentDate ) : ?>

		 <article>
			 <h5><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h5>
			 <span class="byline">
			 	Published <time
			     datetime="<?php the_time('Y-m-d') ?>"
			     title="<?php the_time('F j, Y') ?>">
			     <?=time_ago(get_the_time( 'U' ))?>
			     </time>
			 </span>
		 </article>

	<?php

	endforeach;
	wp_reset_postdata(); ?>

</div>
