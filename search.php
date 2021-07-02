<?php get_header(); ?>

	<main id="content">

		<div id="inner-content" class="row">

			<div id="main" class="large-12 medium-12 columns first">
				<header>
					<h1 class="search-title center"><?php _e('Search Results for:', 'jointstheme'); ?> <?php echo esc_attr(get_search_query()); ?></h1>
				</header>

				<div id="search-main-form">
			<?php get_search_form();?>
				</div>

				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'search' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

			    <?php endif; ?>

		    </div> <!-- end #main -->

		</div> <!-- end #inner-content -->

	</main> <!-- end #content -->

<?php get_footer(); ?>
