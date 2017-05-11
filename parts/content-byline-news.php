<p class="byline">
	Published <time
    datetime="<?php the_time('Y-m-d') ?>"
    title="<?php the_time('F j, Y') ?>">
    <?=time_ago(get_the_time( 'U' ))?>
	</time> in
	<?php if (is_post_type_archive('news') || is_singular('news') || is_tax('content_type')){
	 the_terms( $id, 'content_type', $before, $sep, $after );
 } else if (is_post_type_archive('resources') || is_singular('resources') || is_tax('resource_cat')){
	the_terms( $id, 'resource_cat', $before, $sep, $after );} ?>

</p>
