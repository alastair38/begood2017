
					<footer class="footer" role="contentinfo">

							<?php get_template_part( 'parts/content', 'edit' ); ?>

						<div id="inner-footer" class="row">

							<p class="source-org copyright columns">&copy; <?php echo date('Y'); ?>  <?php bloginfo('name'); ?>
								<?php echo ' <span><a href="mailto:' . get_theme_mod( 'tcx_email_contact' ) . '" target="_blank"><i class="fa fa-envelope"></i>Email </a></span><span><a href="https://twitter.com/' . get_theme_mod( 'tcx_twitter_handle' ) . '" target="_blank"><i class="fa fa-twitter"></i>Twitter </a></span>';
								?>
							</p>
							<span>
								<?php if (!is_user_logged_in())
				        {
				            echo '<span id="login" class="waves-effect waves-light"><a href="'. wp_login_url() .'"><i class="fa fa-sign-in"></i> Log In</a></span>';
				        } else {
									 echo '<span id="logout" class="waves-effect waves-light"><a href="'. wp_logout_url(home_url()) .'"><i class="fa fa-sign-in"></i> Log out</a></span>';
								}?>
							</span>

						</div> <!-- end #inner-footer -->
					</footer> <!-- end .footer -->
				</div>  <!-- end .main-content -->
			</div> <!-- end .off-canvas-wrapper-inner -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
