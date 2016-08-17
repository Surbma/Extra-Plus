<?php get_header(); ?>

<div id="main-content">
	<div class="container">
		<div id="content-area" class="<?php extra_sidebar_class(); ?> clearfix">
			<div class="et_pb_extra_column_main">
				<?php if ( is_search() ) { ?>
					<h1><?php esc_html_e( sprintf( __( 'Search Results for: %s', 'extra' ), get_search_query() ) ); ?></h1>
				<?php } else if ( is_archive() ) { ?>
					<h1><?php the_archive_title(); ?></h1>
					<div class="archive-description"><?php echo term_description(); ?></div>
				<?php } ?>

				<?php if ( is_category() || is_tag() ) { ?>
					<?php extra_tax_layout(); ?>
				<?php } else { ?>
					<?php require locate_template( 'index-content.php' ); ?>
				<?php } ?>
			</div>
			<?php get_sidebar(); ?>

		</div> <!-- #content-area -->
	</div> <!-- .container -->
</div> <!-- #main-content -->

<?php get_footer();
