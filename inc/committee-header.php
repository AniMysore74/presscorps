<?php if (! is_category('Uncategorized')) : ?>
		<div class = "wrap" style="background-image: url('<?php echo( get_header_image() );?>');">
			<div class = "container">
				<div class = "row">
					<div class = "col-md-4 col-sm-4 col-xs-6">
						<img src = "<?php echo( get_template_directory_uri() )?>/images/logo.png" class = "img-responsive center-block logo">
					</div>
					<div class = "col-md-4 col-sm-4 col-xs-6 col-md-offset-4 col-sm-offset-4">
						<img src="<?php echo( get_template_directory_uri() )?>/images/<?php echo( get_category(get_query_var('cat'))->slug )?>.jpg"  class = "img-responsive center-block committee">
					</div>
				</div>
			</div>
		</div>
<?php endif ?>