<?php get_header();

require_once(ABSPATH . 'wp-admin/includes/media.php');
require_once(ABSPATH . 'wp-admin/includes/file.php');
require_once(ABSPATH . 'wp-admin/includes/image.php');
?>

<main id="content">

	<div id="inner-content" class="row">

		<?php if(is_singular('post')) {?>
			<div id="main" class="large-12 medium-12 columns">



					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<?php get_template_part( 'parts/loop', 'single' ); ?>

					<?php endwhile; else : ?>

						<?php get_template_part( 'parts/content', 'missing' ); ?>

					<?php endif; ?>

			</div> <!-- end #main -->
		<?php }
		else {?>
		<div id="main" class="large-8 medium-8 columns">

		    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		    	<?php get_template_part( 'parts/loop', 'single' ); ?>

		    <?php endwhile; else : ?>

		   		<?php get_template_part( 'parts/content', 'missing' ); ?>

		    <?php endif; ?>

		</div> <!-- end #main -->

		<?php get_sidebar(); ?>

		<?php }?>

	</div> <!-- end #inner-content -->

</main> <!-- end #content -->

<?php get_footer(); ?>
