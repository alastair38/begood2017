<?php
/*
Template Name: Game Landing Page
*/
?>

<?php get_header(); ?>

	<main id="game-content">

		<div id="inner-content" class="row">

		    <div id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page-game' ); ?>


			    <?php endwhile; endif; ?>

			</div> <!-- end #main -->

		    <?php //get_sidebar(); ?>

		</div> <!-- end #inner-content -->

	</main> <!-- end #content -->

<?php get_footer(); ?>
