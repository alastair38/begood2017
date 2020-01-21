<?php

	$mainpages = get_field('front_pages');
	$section_name = get_field('section_name');

	if( $mainpages ):
		if($section_name) {
			echo '<h2 class="large-12 columns">' . $section_name . '</h2>';
		}
		foreach( $mainpages as $post): // variable must be called $post (IMPORTANT) ?>
	        <?php setup_postdata($post); ?>
					<div class="large-4 medium-12 columns end">
					<div class="home-links">
					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<?php echo the_field('project_description');?></div>
					</div>

	    <?php endforeach; ?>

	    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
	<?php endif; ?>
