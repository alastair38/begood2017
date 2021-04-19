<?php
/*
Template Name: Individual Profile Page
*/
?>

<?php get_header(); ?>

	<main id="content">

		<div id="inner-content" class="row">

		    <div id="main">

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

			    	<?php get_template_part( 'parts/loop', 'page-profile' ); ?>

			    <?php endwhile; endif; ?>

			</div> <!-- end #main -->


		</div> <!-- end #inner-content -->

	</main> <!-- end #content -->

<?php get_footer(); ?>
