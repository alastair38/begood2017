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
				<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">
					<header class="article-header">
						<h2 class="news_title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>

						<?php the_post_thumbnail('thumb'); ?>
					</header>
					<div class="child-content">
						<?php echo wp_trim_words( get_the_content(), 55, '...' );?>
					</div>
				<?php get_template_part( 'parts/content', 'share' ); ?>
				</article>

		<?php endwhile; ?>

<?php endif; wp_reset_query();
?>
