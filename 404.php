<?php
/**
 * The template for displaying 404 pages (not found)
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
					<main id="main" class="site-main" role="main">

						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'presscorps' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
								<p><?php _e( 'It looks like nothing was found at this location. Maybe try a search?', 'presscorps' ); ?></p>

								<?php get_search_form(); ?>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->

					</main><!-- .site-main -->
			<?php get_footer(); ?>
