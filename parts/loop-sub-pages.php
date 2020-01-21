<?php

$subpages = get_field('front_sub_pages');
$subpages_section_name = get_field('subpages_section_name');

if( $subpages ):
	if($subpages_section_name) {
		echo '<h2 class="large-12 columns">' . $subpages_section_name . '</h2>';
	}
	?>

    <?php foreach( $subpages as $post): // variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>
				<div class="large-4 medium-12 columns end">
				<div class="home-links">
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				</div>
				</div>
    <?php endforeach; ?>

    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif; ?>
