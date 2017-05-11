<?php get_header(); ?>

	<div id="content">

		<div id="inner-content" class="row">

		    <main id="main" class="large-8 medium-8 columns" role="main">
				<?php  if ( is_tax() ){?>
		    	<header>
		    		<h1 class="page-title"><?php single_term_title();?></h1>
					<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
		    	</header>
					<?php } else if (is_tag()) {?>
						<header>
			    		<h1 class="page-title">Posts tagged: <?php single_tag_title(); ?></h1>
						<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
			    	</header>
					<?php } else if (is_author()) {
						$curauth = (get_query_var('author_name')) ? get_user_by('slug', get_query_var('author_name')) : get_userdata(get_query_var('author'));
						?>
						<header>
			    		<h1 class="page-title"><?php echo $curauth->display_name . '\'s Content'; ?></h1>
						<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
			    	</header>
					<?php } else {?>
						<header>
							<h1 class="page-title"><?php post_type_archive_title(); ?></h1>
						<?php the_archive_description('<div class="taxonomy-description">', '</div>');?>
						</header>
					<?php }?>

		    	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

					<!-- To see additional archive styles, visit the /parts directory -->
					<?php get_template_part( 'parts/loop', 'archive' ); ?>

				<?php endwhile; ?>

					<?php joints_page_navi(); ?>

				<?php else : ?>

					<?php get_template_part( 'parts/content', 'missing' ); ?>

				<?php endif; ?>

			</main> <!-- end #main -->

			<?php get_sidebar(); ?>

	    </div> <!-- end #inner-content -->

	</div> <!-- end #content -->

<?php get_footer(); ?>
