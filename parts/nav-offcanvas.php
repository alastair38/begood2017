<div class="off-canvas-wrapper">

<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>

 <div class="off-canvas-content" data-off-canvas-content>

	 <?php get_template_part( 'parts/content', 'offcanvas' ); ?>

</div>     <!--    end .off-canvas-wrapper-inner -->
</div>     <!--    end .off-canvas-wrapper -->
</div>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left float-left">
		<ul class="menu">
			<li class="site-text">
				<?php
					if ( is_page_template( 'page-projects.php' ) && !is_page( 'other-projects-of-interest' ) ) {?>
				<a class="site-text" href="<?php bloginfo('url');?>" aria-label="home page"><h1 style="background:url(<?php the_post_thumbnail_url( 'medium' )?>) no-repeat; background-size: contain;"><span class="screen-reader-text"><?php bloginfo('name');?></span></h1></a>
				<?php } else {?>
					<a href="<?php bloginfo('url');?>" aria-label="home page"><h1 style="background:url(<?php echo get_theme_mod( 'tcx_logo_image' )?>) no-repeat; background-size: contain;"><span class="screen-reader-text"><?php bloginfo('name');?></span></h1></a>

			<?php	}?>


			</li>


		</ul>
	</div>
	<div class="top-bar-right show-for-large">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/wellcome-logo-black.gif';?>" alt="Wellcome Trust logo, white text on a black background">
		<img src="<?php echo get_template_directory_uri() . '/assets/images/ox_brand1_pos.gif';?>" alt="University of Oxford logo, white text and crest on a dark blue background">

		<?php //joints_footer_links(); ?>
	</div>
	<div class="main-menu large-12 columns show-for-large" role="navigation" aria-label="Main site navigation">
		<?php joints_top_nav(); ?>
	</div>




</div>
