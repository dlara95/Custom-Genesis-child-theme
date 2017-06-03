<?php
/**
 * This file adds the Single Construction Template to any Genesis child theme.
 *
 * @author Brad Dalton
 * @example  http://wpsites.net/
 * @copyright 2014 WP Sites
 */
//* Add custom body class to the head
get_header();

//Esta funcion habilita las funciones relacionadas al post
the_post();
?>

<div class="dark-bg">
	<div class="container">
			<h1>Construction Trends</h1>
			<div class="icon-down">
		<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
	</div>
	</div>

</div>

	<div class="container" style="padding: 50px 0;">

		<div class="row recent-post-cont post-article" style="margin: 0 !important;">
			<div class="col-md-9">
				
				<div class="construction-cont">


	                 <?php if ( has_post_thumbnail() ) : ?>
	                     <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
	                           <?php the_post_thumbnail(); ?>
	                                        </a>
	                      <?php endif; ?>

					 <h2 class="post-title" style="padding: 30px 0 !important;"><?php the_title_attribute(); ?> </h2>
					 
					<p><?php 
					the_content();
					?></p>
				</div>
				<div class="row">
					<div class="col-md-12">
						<?php echo do_shortcode( '[gravityform id="1" title="false" description="false"  tabindex=32]' ); ?>
					</div>
				</div>
				
				
			</div>
			<div class="col-md-3">
				<?php get_sidebar(); ?>
			</div>
		</div>

		
	</div>
<?php
//* Run the Genesis loop
get_footer();
