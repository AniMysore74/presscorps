<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Press_Corps
 * 
 * @since  Press Corps 1.0
 */

get_header(); ?>
	<div class = "container-fluid">
			<div class = "row">
				
				<!-- SIDEBAR CODE -->
				<div class = "col-md-4 col-sm-4 col-md-push-8 col-sm-push-8 feed">
					<div id="sidebar" class="sidebar">
						<?php get_sidebar(); ?>
					</div><!-- .sidebar -->
				</div>

				<!-- MAIN BLOG CODE -->
				<div class ="col-md-8 col-sm-8 col-md-pull-4 col-sm-pull-4 blog-section">
					<div class = "content-area">

					<?php
					// Start the loop.
					while ( have_posts() ) : the_post();

						/*
						 * Include the post format-specific template for the content. If you want to
						 * use this in a child theme, then include a file called called content-___.php
						 * (where ___ is the post format) and that will be used instead.
						 */
						get_template_part( 'content', get_post_format() );

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
							comments_template();
						endif;

						// Previous/next post navigation.
						the_post_navigation( array(
							'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'presscorps' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Next post:', 'presscorps' ) . '</span> ' .
								'<span class="post-title">%title</span>',
							'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'presscorps' ) . '</span> ' .
								'<span class="screen-reader-text">' . __( 'Previous post:', 'presscorps' ) . '</span> ' .
								'<span class="post-title">%title</span>',
						) );

					// End the loop.
					endwhile;
					?>
					<?php get_footer(); ?>