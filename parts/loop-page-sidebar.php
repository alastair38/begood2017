<article id="post-<?php the_ID(); ?>" class="large-8 columns role="article" itemscope itemtype="http://schema.org/WebPage">

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
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

</article> <!-- end article -->

<?php

$subpages = get_field('subpages');
if( $subpages ): ?>
<div class="large-4 columns">
<ul id="subpages-list">
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
