<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "row" div and all content after.
 *
 * @package Press_Corps
 * 
 * @since  Press Corps 1.0
 */
?>
					<div class = "page-footer">
						<div class="site-info">
							<?php
								/**
								 * Fires before the  Press Corps footer text for footer customization.
								 *
								 * @since  Press Corps 1.0
								 */
								do_action( 'presscorps_credits' );
								echo('<a> Press Theme</a>'.' | Designed by '.'<a>Students</a>');
							?>
						</div><!-- .site-info -->
					</div><!-- .site-footer -->
				</div><!-- .content-area -->	
			</div><!-- .blog-section -->	
		</div><!-- .row -->	
	</div><!-- .container-fluid -->	

	<!-- Calling footer scripts -->
	<?php wp_footer(); ?> 
</body>
</html>

