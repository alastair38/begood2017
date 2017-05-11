
					<footer class="footer" role="contentinfo">

							<?php get_template_part( 'parts/content', 'edit' ); ?>

						<div id="inner-footer" class="row">

							<p class="source-org copyright columns">&copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?>
								<?php echo ' <span><a href="mailto:' . get_theme_mod( 'tcx_email_contact' ) . '" target="_blank"><i class="fa fa-envelope"></i>Email </a></span><span><a href="https://twitter.com/' . get_theme_mod( 'tcx_twitter_handle' ) . '" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></span>'; ?>
							</p>

						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
