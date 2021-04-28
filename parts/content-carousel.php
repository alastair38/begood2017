<!-- <article id="post-<?php the_ID(); ?>" class="large-12 medium-7 columns" role="article" itemscope itemtype="http://schema.org/WebPage"> -->

<div class="carousel">

	<?php

	// check if the repeater field has rows of data
if( have_rows('front_page_carousel') ):

 	// loop through the rows of data
    while ( have_rows('front_page_carousel') ) : the_row();
		$image = get_sub_field('carousel_image');
		$caption = get_sub_field('carousel_caption');
		$link = get_sub_field('carousel_link');
		if($link) {
			$link_url = $link['url'];
    	$link_title = $link['title'];
		}

		?>


				<div style="background: url(<?php echo $image;?>) no-repeat center center; background-size: cover;">

					 <article class="waves-effect">
						 <?php if($link) {
							 echo '<h2><a href="' . esc_url( $link_url ) . '">' . esc_html( $link_title ) . '</a></h2>';
						 }

						 if($caption) {
							 echo '<span class="show-for-medium">' . esc_html( $caption ) . '</span>';
						 }
						 ?>
					 </article>
				</div>

  <?php endwhile;

else :

    // no rows found

endif;

	?>

</div>
