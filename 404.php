<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @author    Brad Dalton
 * @example   http://wpsites.net/web-design/add-content-404-page-genesis/
 */
 
get_header(); ?>
	
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<header class="page-header">
				<h1 class="page-title"><?php _e( 'Ooops! Page not found', 'wpsites' ); ?></h1>
			</header>

			<div class="page-content">
				<h2><a href="<?php echo get_site_url(); ?>">Return home?</a></h2>
				<p><?php _e( 'It looks like nothing was found at this location.', 'wpsites' ); ?></p>

			</div><!-- .page-content -->
			</div>

			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	

<?php
get_footer();