<?php

/*
Template Name: Single Column + Sub Pages Option
*/

get_header(); ?>

	<main id="content">

		<div id="inner-content" class="row">

		    <div id="main" class="large-12 columns">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>


			    <?php endwhile; endif; ?>

			</div> <!-- end #main -->



		</div> <!-- end #inner-content -->

	</main> <!-- end #content -->

<?php get_footer(); ?>
