<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>

	<main id="content" tabindex="0">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			<?php get_template_part( 'parts/content', 'carousel' ); ?>


		<div id="inner-content" class="row">



		    <div id="main" class="large-12 medium-12 columns">

					<div class="entry-content large-12 columns" >
						<?php the_content(); ?>
						<?php wp_link_pages(); ?>

				</div>

			<?php endwhile; endif; ?>




		</div>


	<div class="aside large-12 medium-12 columns">
		<?php get_template_part( 'parts/loop', 'main-pages' ); ?>
	</div>

	<div class="aside large-12 medium-12 columns">
		<?php get_template_part( 'parts/loop', 'sub-pages' ); ?>
	</div>

	<div class="aside large-12 medium-12 columns">
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
</div>


		</div>



	</main>

<?php get_footer(); ?>
