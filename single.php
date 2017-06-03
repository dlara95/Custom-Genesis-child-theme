<?php
/**
 * This file adds the Single Post Template to any Genesis child theme.
 *
 * @author Brad Dalton
 * @example  http://wpsites.net/
 * @copyright 2014 WP Sites
 */
//* Add custom body class to the head
get_header();

the_post();

?>

<div class="dark-bg">
	<div class="container">
			<h1>Blog</h1>
			<div class="icon-down">
		<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
	</div>
	</div>

</div>

	<div class="container" style="padding: 50px 0;">

		<div class="row recent-post-cont post-article">
			<div class="col-md-9">
				<div>
						<?php the_post_thumbnail(); ?>

				</div>
				<div>
					 <h2 class="post-title" style="padding: 30px 0 !important;"><?php the_title_attribute(); ?> </h2>
					 <p>Posted on <span class="green"><?php the_date(); ?></span> by  <span class="green"><?php echo get_the_author(); ?></span></p>
					<p><?php 
					the_content();
				
					?></p>
				</div>
				
				<div class="prev-next-container">
					<div class="row">
						<div class="col-md-6">
							<?php previous_post_link(); ?>
						</div>
						<div class="col-md-6" style="text-align: right;">
							<?php next_post_link(); ?>
						</div>
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
