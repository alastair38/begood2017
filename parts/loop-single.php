<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

	<header class="article-header">
		<?php edit_post_link('Edit Post', '<span class="edit_link waves-effect waves-light">', '</span>'); ?>
		<h1 class="entry-title single-title" itemprop="headline"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>
    </header> <!-- end article header -->

    <section class="entry-content" itemprop="articleBody">
		<?php

		the_content();

		if(is_singular('post')) {
			the_post_thumbnail('large', array('class' => 'aligncenter'));
		//check if we're on the previous meetings page and loop through child pages if this is the case
		} else if ( is_page_template( 'previous-meetings.php') ) {
		get_template_part( 'parts/loop', 'child-resources' );
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
					<label><i class="fa fa-calendar"></i><?php echo ' ' . get_sub_field('upcoming_meeting_date') . ' at ' . get_sub_field('upcoming_meeting_address');?>

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
						<p>
							<?php the_sub_field('upcoming_meeting_description');?>
							<img src="<?php the_sub_field('upcoming_meeting_image');?>">
<br />
						</p>
						<p class="">
							Contact <a href="mailto:<?php the_sub_field('upcoming_meeting_contact');?>"><?php the_sub_field('upcoming_meeting_contact');?></a> for more information
						</p>
</div>
		<?php
			endwhile;
			echo '</div>';
			else :
					// no rows found
			endif;
		?>
	</section> <!-- end article section -->

	<footer class="article-footer">
		<p class="tags"><?php the_tags('<span class="tags-title">' . __('Tags:', 'jointstheme') . '</span> ', ', ', ''); ?></p>

	</footer> <!-- end article footer -->
		<?php get_template_part( 'parts/content', 'share' ); ?>
	<?php
	if (is_singular( 'post' )) {
			comments_template();
	}
	//only show comments template on single posts NOT custom post types
	 ?>

</article> <!-- end article -->
