<article id="post-<?php the_ID(); ?>" class="large-9 columns" role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-headercolumns">
		<?php edit_post_link('Edit Page', '<span class="edit_link wave-effect waves-light">', '</span>'); ?>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
		<?php
		$qualifications = get_field('qualifications');
		if ( $qualifications ) {
			echo '<strong>' . $qualifications . '</strong>';
	}?>
	</header> <!-- end article header -->


    <section class="entry-content" itemprop="articleBody">
			<?php
	     the_content(); ?>
			 <?php
			 if ( get_field('publications')) {
				 echo '<h2 class="h4">Publications</h2>';
				 the_field('publications');
		 }

		 $video = get_field('meeting_video');
		 if($video){
			 echo '<div class="responsive-embed">' . $video . '</div>';
		 }


	$images = get_field('meeting_photos');

	if( $images ): ?>
	<div class="row">
	 <h2 class="h5 center light">Meeting photos</h2>
		 <?php foreach( $images as $image ): ?>
				 <div class="small-6 large-4 columns">

									<img data-caption="<?php echo $image['caption']; ?>" src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" />


				 </div>
		 <?php endforeach; ?>
	</div>
	<?php endif;

		 if( have_rows('details_of_meetings') ):
 			echo '<div id="forthcoming">';
 			while ( have_rows('details_of_meetings') ) : the_row();

 		?>

 					<div class="resources-links">
 					<h2 class="h3 title"><?php the_sub_field('upcoming_meeting_title');?></h2>
 					<label>
						<i class="fa fa-calendar"></i>
						<?php $date = get_sub_field('upcoming_meeting_date');
						$address = get_sub_field('upcoming_meeting_address');
						if($date) {
							echo $date;
						} if($address) {
							echo ' at ' . $address;
						}?>

 					</label>

 							<?php $description = get_sub_field('upcoming_meeting_description');
							if ($description) {
								echo '<p>' . $description . '</p>';
							}?>

							<?php $meeting_image = get_sub_field('upcoming_meeting_image');
							if ($meeting_image){
								echo '<img src="' . $meeting_image . '"/></br>';
							}?>





							<?php $contact = get_sub_field('upcoming_meeting_contact');
							if($contact){?>
							<p>
								Contact <a href="mailto:<?php echo $contact;?>"><?php echo $contact;?></a> for more information
							</p>
							<?php }?>


 </div>
 		<?php
 			endwhile;
 			echo '</div>';
 			else :
 					// no rows found
 			endif;
 		?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->



</article> <!-- end article -->

<div class="profile-img large-3 columns">
	<figure>
		<?php the_post_thumbnail('large');?>

		<figcaption>
			<span id="profile-title"><?php the_title();?></span>

			<?php $affiliation = get_field('affiliation');
			if ($affiliation):?>
			<span id="profile-affiliation"><?php echo $affiliation;?></span>
			<?php endif;?>

		</figcaption>

	</figure>
	<?php

 $subpages = get_field('subpages');
 if( $subpages ): ?>
<div>
 <ul id="profile-pages" class="row">
 <?php foreach( $subpages as $post): // variable must be called $post (IMPORTANT) ?>
		 <?php setup_postdata($post); ?>

		 <li class="subpage">
				 <a href="<?php the_permalink(); ?>">
					<h2><?php the_title(); ?></h2>
				</a>
		 </li>
 <?php endforeach; ?>
 </ul>
</div>
<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;?>
</div>
