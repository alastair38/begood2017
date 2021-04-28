<?php if( 0 === ( $wp_query->current_post  )  % 4 ): ?>

    <div class="row" data-equalizer>

<?php endif; ?>


		<div class="large-3 medium-3 columns panel" data-equalizer-watch>

			<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

				<div class="featured-image">
					<?php the_post_thumbnail('full'); ?>
				</div>

				<header class="article-header">
					<h3 class="title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<?php get_template_part( 'partials/content', 'byline' ); ?>
				</header>

				<div class="entry-content">
					<?php the_content('<button class="tiny">Read more...</button>'); ?>
				</div>

			</article>

		</div>

<?php if( 0 === ( $wp_query->current_post + 1 )  % 4  ||  ( $wp_query->current_post + 1 ) ===  $wp_query->post_count ): ?>

   </div>

<?php endif; ?>
