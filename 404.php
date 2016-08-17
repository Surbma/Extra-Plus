<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="<?php extra_sidebar_class(); ?> clearfix">
			<div class="et_pb_extra_column_main">
					<?php
						if ( is_active_sidebar( 'extra-404' ) ) { dynamic_sidebar( 'extra-404' ); }
						else { require locate_template( 'index-content.php' ); }
					?>
			</div>
		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer();
