<article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/WebPage">

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
				 echo '<h4>Publications</h4>';
				 the_field('publications');
		 }

		 $video = get_field('meeting_video');
		 if($video){
			 echo '<div class="responsive-embed">' . $video . '</div>';
		 }


	$images = get_field('meeting_photos');

	if( $images ): ?>
	<div class="row">
	 <h5 class="center light">Meeting photos</h5>
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
 					<h3 class="title"><?php the_sub_field('upcoming_meeting_title');?></h3>
 					<label>
						<i class="fa fa-calendar"></i>
						<?php $date = get_sub_field('upcoming_meeting_date');
						$address = get_sub_field('upcoming_meeting_address');
						if($date) {
							echo $date;
						} if($address) {
							echo ' at ' . $address;
						}?>

 					<span aria-hidden="true" class=" addtocalendar atc-style-blue">
 					<var class="atc_event">
 					<var class="atc_date_start"><?php the_sub_field('upcoming_meeting_date');?></var>
 					<var class="atc_date_end"><?php the_sub_field('upcoming_meeting_date');?></var>
 					<var class="atc_timezone">Europe/London</var>
 					<var class="atc_title"><?php the_sub_field('upcoming_meeting_title');?></var>
 					<var class="atc_description"><?php the_sub_field('upcoming_meeting_description');?></var>
 					<var class="atc_location"><?php the_sub_field('upcoming_meeting_address');?></var>
 					<var class="atc_organizer_email"><?php the_sub_field('upcoming_meeting_contact');?></var>
 					</var>
 					</span></label>

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

	<footer class="article-footer">

	</footer> <!-- end article footer -->

</article> <!-- end article -->
