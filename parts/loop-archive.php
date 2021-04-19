<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article">

		<?php $eventInfo = get_field('event_link');
		if($eventInfo){?>
		<header class="article-header">
		<h2><a href="<?php echo $eventInfo; ?>" target="_blank" rel="bookmark" title="<?php the_title_attribute(); ?> - This takes you to an external website"><?php the_title(); ?></a></h2>
			<?php get_template_part( 'parts/content', 'byline' ); ?>
			<?php the_post_thumbnail('thumb'); ?>
		</header>
		<section class="entry-content" itemprop="articleBody">
			<?php the_excerpt(); ?>
			<a aria-label="<?php the_title(); ?>" class="button" href="<?php echo $eventInfo; ?>" target="_blank" rel="bookmark" title="<?php the_title_attribute(); ?> - This takes you to an external website">More Details</a>
		</section> <!-- end article section -->
		<?php get_template_part( 'parts/content', 'share-news' ); ?>
		<?php } else {?>
		<header class="article-header">
		<h2 class="news_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<?php the_post_thumbnail('thumb'); ?>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<?php echo wp_trim_words( get_the_content(), 40, '...' ); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
	<?php get_template_part( 'parts/content', 'share' ); ?>
	<?php }?>
</article> <!-- end article -->
