<?php /* Template Name: Full width Default */ ?>
 <?php get_header(); ?>

<div class="dark-bg">
	<div class="container">
			<h1><?php echo get_the_title(); ?></h1>
			<div class="icon-down">
		<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
	</div>
	</div>

</div>



 <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                
                

<div class="container">
                <?php  the_content(); ?>
</div>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2>Sorry, nothing to display</h2>

			</article>
			<!-- /article -->

		<?php endif; ?>





 <?php get_footer(); ?>
