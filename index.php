	<!-- ----------------------------------------------------------------------------------- -->
	<!--   WP THEME FOR  PRESS SITE  | Built by Aniruddha Mysore and Sesh Sadashivam     -->
	<!-- ---------------------------------------------------------------------------------- -->

	<?php get_header(); ?>
	<!-- MAIN  AREA -->
		<section class = "lander" style = "background-image:url('<?php echo(get_header_image())?>')">
			<div class = "container-fluid">
				<div class = "vertical-align">
					<img src = "<?php echo(get_template_directory_uri() )?>/images/logo.png" class = "center-block img-responsive">
					<h1 class ="center-block"><?php bloginfo( 'name' ); ?></h1>
					<p class = "center-block"><?php bloginfo( 'description' ); ?></p>
				</div>	
				<!--<div class = "down"> <span class = "glyphicon glyphicon-chevron-down"> </span> </div> -->
			</div>
		</section>
		<div class = "container-fluid home">
			<div class = "row">

				<!-- SIDEBAR CODE -->
				<div class = "col-md-4 col-sm-4 col-md-push-8 col-sm-push-8 feed">
					<div id="sidebar" class="sidebar">
						<?php get_sidebar(); ?>
					</div><!-- .sidebar -->
				</div>

				<div class ="col-md-8 col-sm-8 col-md-pull-4 col-sm-pull-4 blog-section">
					<div class = "content-area">

						<?php if ( have_posts() ) :
							// Start the Loop.
							while ( have_posts() ) : the_post();

								/*
								 * Include the Post-Format-specific template for the content.
								 * If you want to override this in a child theme, then include a file
								 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
								 */
								get_template_part( 'content', get_post_format() );

							// End the loop.
							endwhile;

							// Previous/next page navigation.
							the_posts_pagination( array(
								'prev_text'          => __( 'Previous page', 'presscorps' ),
								'next_text'          => __( 'Next page', 'presscorps' ),
								'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'presscorps' ) . ' </span>',
							) );

						// If no content, include the "No posts found" template.
						else :
							get_template_part( 'content', 'none' );

						endif;
						?>
						<?php get_footer(); ?>