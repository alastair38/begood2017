<?php
     // if outside the loop
		// This is a parent so we'll loop through the child pages
$post_type = get_post_type($post->ID);

$args = array(
		'post_type'      => $post_type,
		'posts_per_page' => -1,
		'post_parent'    => $post->ID,
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
 );

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				<div class="resources-links">

						<h2 class="h3"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
						<?php
							the_post_thumbnail(array(100, 100), array( 'class' => 'large-4 show-for-large columns' ));

						?>
						<div class="resources_desc">
							<?php
							the_excerpt();
							the_field('project_description');
							?>
						</div>



				</div>

		<?php endwhile; ?>

<?php endif; wp_reset_query();



?>
