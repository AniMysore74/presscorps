<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Press_Corps
 * 
 * @since  Press Corps 1.0
 */

get_header(); ?>
		<div class = "container-fluid">
			<div class = "wrap" style="background-image: url('<?php echo( get_template_directory_uri() )?>/images/delegate-life.jpg');">
				<h1>Delegate Life</h1>
			</div>

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

				<?php if ( have_posts() ) : ?>
					<header class="page-header">
						<?php
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
						?>
					</header><!-- .page-header -->

					<?php
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
					
					
