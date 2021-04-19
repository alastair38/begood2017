<?php get_header(); ?>

	<main id="content">

		<div id="inner-content" class="row">

			<div id="main" class="large-8 medium-8 columns">

				<article id="content-not-found">

					<header class="article-header">
						<h1><?php _e("Article Not Found", "jointswp"); ?></h1>
					</header> <!-- end article header -->

					<section class="entry-content">
						<p><?php _e("The article you were looking for was not found, but maybe try looking again!", "jointswp"); ?></p>
					</section> <!-- end article section -->

					<section class="search">
					    <p><?php get_search_form(); ?></p>
					</section> <!-- end search section -->

				</article> <!-- end article -->

			</div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</main> <!-- end #content -->

<?php get_footer(); ?>
