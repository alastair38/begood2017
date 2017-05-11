<?php
     // if outside the loop
		// This is a parent so we'll loop through the children of the given post-type
$post_type = get_post_type($post->ID);
$args = array(
		'post_type'      => $post_type,
		'posts_per_page' => -1,
		'post_parent'    => $post->ID,
		'order'          => 'DESC',
		'orderby'        => 'date'
 );

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				<div id="parent-<?php the_ID(); ?>" class="resources-links">

						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>


							<?php
							the_excerpt();
							?>


				</div>

		<?php endwhile; ?>

<?php endif; wp_reset_query();
?>
