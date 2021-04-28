<?php get_header(); ?>

	<main id="content">

		<div id="inner-content" class="row">

			<div id="main" class="large-8 medium-8 columns">

				<article id="content-not-found">

					<header class="article-header">
						<h1><?php _e("Article Not Found", "jointswp"); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e("The article you were looking for was not found, but maybe try looking again!", "jointswp"); ?></p>
					</div>

					<div class="search">
					    <p><?php get_search_form(); ?></p>
					</div>

				</article>

			</div>

		</div>

	</main>

<?php get_footer(); ?>
