<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?>>

	<header class="article-header">
		<h1><?php the_title(); ?></h1>
	</header>

	<div class="entry-content" >
		<?php the_content(); ?>

		<div id="main-form">
			<?php get_search_form();?>
		</div>
	</div>

</article>
