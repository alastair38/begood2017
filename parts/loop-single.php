<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<?php edit_post_link('Edit Post', '<span class="edit_link waves-effect waves-light">', '</span>'); ?>
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
		<?php

		//seems to work to do this delete_field('details_of_meetings');

		the_content();

		if(is_singular('post')) {
			the_post_thumbnail('large', array('class' => 'aligncenter'));
		//check if we're on the previous meetings page and loop through child pages if this is the case
		} else if ( is_page_template( 'previous-meetings.php') ) {
		get_template_part( 'parts/loop', 'child-resources' );
	}?>


	</section> <!-- end article section -->

	<footer class="article-footer">
<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>

	</footer> <!-- end article footer -->
		<?php get_template_part( 'parts/content', 'share' ); ?>
	<?php
	if (is_singular( 'post' )) {
			comments_template();
	}
	//only show comments template on single posts NOT custom post types
	 ?>

</article> <!-- end article -->
