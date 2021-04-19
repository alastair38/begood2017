<?php
/*
Template Name: Resources
*/
?>

<?php get_header(); ?>

	<main id="content" tabindex="0">

		<div id="inner-content" class="row">


		  <div id="main" class="large-12 columns">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<h1 class="page-title"><?php the_title(); ?></h1>

				<?php get_template_part( 'parts/loop', 'resource-videos' ); ?>

				<div class="columns">

					<?php get_template_part( 'parts/loop', 'resource-publications' ); ?>

				</div>

				<div class="columns">

					<?php get_template_part( 'parts/loop', 'resource-links' ); ?>

				</div>



				<?php endwhile; endif; ?>

			</div> <!-- end #main -->


		</div> <!-- end #inner-content -->

	</main> <!-- end #content -->

<?php get_footer(); ?>
