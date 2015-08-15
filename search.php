<?php
/**
 * The template for displaying search results pages.
 *
 * @package Press_Corps
 * 
 * @since  Press Corps 1.0
 */

get_header(); ?>
		<!-- Calls the code for the special committee header section -->
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

						<?php if ( have_posts() ) : ?>

							<header class="page-header">
								<h1 class="page-title"><?php printf( __( 'Search Results for: %s', 'presscorps' ), get_search_query() ); ?></h1>
							</header><!-- .page-header -->

							<?php
							// Start the loop.
							while ( have_posts() ) : the_post(); ?>

								<?php
								/*
								 * Run the loop for the search to output the results.
								 * If you want to overload this in a child theme then include a file
								 * called content-search.php and that will be used instead.
								 */
								get_template_part( 'content', 'search' );

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
