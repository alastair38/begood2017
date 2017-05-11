<article id="post-<?php the_ID(); ?>" class="" role="article" itemscope itemtype="http://schema.org/WebPage">

	<header class="article-headercolumns">
		<?php edit_post_link('Edit Page', '<span class="edit_link wave-effect waves-light">', '</span>'); ?>
		<h1 class="page-title"><?php the_title(); ?></h1>

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
		 }?>
	    <?php wp_link_pages(); ?>
	</section> <!-- end article section -->

	<footer class="article-footer">

	</footer> <!-- end article footer -->

</article> <!-- end article -->
