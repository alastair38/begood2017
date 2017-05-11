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
			<a class="button" href="<?php echo $eventInfo; ?>" target="_blank" rel="bookmark" title="<?php the_title_attribute(); ?> - This takes you to an external website">More Details <i class="fa fa-external-link"></i></a>
		</section> <!-- end article section -->
		<?php get_template_part( 'parts/content', 'share-news' ); ?>
		<?php } else {?>
		<header class="article-header">
		<h2 class="news_title"><a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>

		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumb'); ?></a>
	</header> <!-- end article header -->

	<section class="entry-content" itemprop="articleBody">
		<?php the_excerpt(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">
    	<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>
	</footer> <!-- end article footer -->
	<?php get_template_part( 'parts/content', 'share' ); ?>
	<?php }?>
</article> <!-- end article -->
