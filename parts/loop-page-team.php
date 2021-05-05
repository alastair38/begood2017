<article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-header columns">
		<?php edit_post_link('Edit Page', '<span class="edit_link wave-effect waves-light">', '</span>'); ?>
		<h1 class="page-title"><?php the_title(); ?></h1>
		<?php get_template_part( 'parts/content', 'byline' ); ?>

	</header>


    <div class="entry-content">
			<?php
	     //the_content(); ?>
			 <?php
			 $members = get_field('member');
			 if( $members ): ?>
    <ul class="team-grid row">
    <?php foreach( $members as $post):
			$affiliation = get_field('affiliation');// variable must be called $post (IMPORTANT) ?>
        <?php setup_postdata($post); ?>

        <li class="container large-4 medium-6 columns end">
            <a href="<?php the_permalink(); ?>">
							<?php the_post_thumbnail('large');?>
							<div class="overlay">
								<div class="overlay-content">
									<h2><?php the_title(); ?></h2>
									<?php if($affiliation):?>
	        				<span class="content-text"><?php echo $affiliation; ?></span>
									<?php endif;?>
								</div>

      				</div>
						</a>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
<?php endif;

	 wp_link_pages(); ?>
 </div>

</article>
