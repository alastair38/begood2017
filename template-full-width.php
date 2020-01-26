<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<div id="content" tabindex="0">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/content', 'carousel' ); ?>


		<div id="inner-content" class="row">



		    <main id="main" class="large-12 medium-12 columns" role="main">

					<section class="entry-content large-12 columns" itemprop="articleBody">
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>

				</section> <!-- end article section -->

			<?php endwhile; endif; ?>




			</main> <!-- end #main -->


	<aside class="large-12 medium-12 columns" role="complementary">
		<?php get_template_part( 'parts/loop', 'main-pages' ); ?>
	</aside>

	<aside class="large-12 medium-12 columns" role="complementary">
		<?php get_template_part( 'parts/loop', 'sub-pages' ); ?>
	</aside>

	<aside class="large-12 medium-12 columns" role="complementary">
		<div class="large-4 small-12 columns">

		<?php get_template_part( 'parts/loop', 'posts' );

		?>
	</div>


	<div class="large-4 small-12 columns">

	<?php get_template_part( 'parts/loop', 'publications' ); ?>
</div>

	<div class="twitter_wrap large-4 small-12 columns">

	<?php 	if ( is_front_page() ) {
	get_template_part( 'parts/content', 'twitter' );
	}?>

</div>
</aside>


		</div> <!-- end #inner-content -->



	</div> <!-- end #content -->

<?php get_footer(); ?>
