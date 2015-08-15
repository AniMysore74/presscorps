<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Press_Corps
 * 
 * @since  Press Corps 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<nav class="navbar navbar-inverse navbar-fixed-top yamm">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="http://.in/#about">About </a>
						</li>
						<?php if(term_exists('Delegate Life','post_tag')) : ?>
							<li> <a href="<?php echo(get_term_link('delegate-life','post_tag')); ?>"> Delgate Life </a> </li>
						<?php endif ?>
						<li class="dropdown"> <a href = "" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> Committees <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<?php 
								   $args = array(
								    'orderby'           => 'name', 
								    'order'             => 'ASC',
								    'hide_empty'        => false, 
								    'exclude'           => array(1), 
								    'exclude_tree'      => array(), 
								    'include'           => array(),
								    'number'            => '', 
								    'fields'            => 'all', 
								    'slug'              => '',
								    'parent'            => '',
								    'hierarchical'      => true, 
								    'child_of'          => 0,
								    'childless'         => false,
								    'get'               => '', 
								    'name__like'        => '',
								    'description__like' => '',
								    'pad_counts'        => false, 
								    'offset'            => '', 
								    'search'            => '', 
								    'cache_domain'      => 'core'
									); 
									$category=get_terms('category',$args);			
									
									foreach ($category as $value) :
								?>
								<li class = "media">
									<a href = "<?php echo( get_category_link($value->term_id) ); ?>"> 
										<!--<h4 class = "media-heading">-->
											<?php echo($value->name); ?>
										<!--</h4>-->
										
										<!--<img class = "nav-thumb" src = "<?php //echo(get_template_directory_uri());?>/images/<?php echo($value->slug); ?>.jpg">-->
									</a>
								</li>
								<?php endforeach ?>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
	<!--<div id="content" class="site-content">-->
