<?php get_header(); ?>

	<main id="content">

		<div id="inner-content" class="row">

		    <div id="main" class="large-8 medium-8 columns">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page' ); ?>


			    <?php endwhile; endif; ?>

			</div> <!-- end #main -->

		    <?php get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</main> <!-- end #content -->

<?php get_footer(); ?>
