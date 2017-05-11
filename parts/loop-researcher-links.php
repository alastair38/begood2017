<?php
$page = get_page_by_path( 'about' );

		// outside loop and need to get child pages (researchers of 'about')

$args = array(
		'post_type'      => 'page',
		'posts_per_page' => -1,
		'post_parent'    => $page->ID,
		'order'          => 'ASC',
		'orderby'        => 'menu_order'
 );

$parent = new WP_Query( $args );

if ( $parent->have_posts() ) : ?>

		<?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
				<div id="parent-<?php the_ID(); ?>" class="researcher-links">

						<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h3>
						<?php
							the_post_thumbnail(array(100, 100), array( 'class' => 'large-4 show-for-large columns' ));

						?>
						<p class="large-8 columns">
							<?php
							the_field('project_description');
							?>
						</p>

				</div>

		<?php endwhile; ?>

<?php endif; wp_reset_query();
?>
