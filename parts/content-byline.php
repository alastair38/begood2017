<p class="byline">
	<?php if (is_post_type_archive('news') || is_post_type_archive('post') || is_singular('news') || is_single() || is_tax('content_type')){?>
	Published <time
    datetime="<?php the_time('Y-m-d') ?>"
    title="<?php the_time('F j, Y') ?>">
    <?=time_ago(get_the_time( 'U' ))?>
	</time> by <?php the_author_posts_link();

	 the_terms( $id, 'content_type', ' in ', $sep, $after );
 } else if (is_post_type_archive('resources') || is_singular('resources') || is_page() || is_tax('resource_cat')){
	the_terms( $id, 'resource_cat', ' in ', $sep, $after );
	$meetingDate = get_field('meeting_date');
			if($meetingDate) {
				echo $meetingDate;
			}
			$meetingLocation = get_field('meeting_location');
			if($meetingLocation) {
				echo ' at ' . $meetingLocation;
			}
			}
	?>

</p>
