<?php /* Template Name: Foundation */ ?>
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


                
                


                <?php  the_content(); ?>

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

    <div class="row" style="margin:0 !important; margin-bottom: 40px !important;">
      

              <?php $images = get_field('logos', 75); 

                if ($images): ?>
                        <ul id="flexiselDemo3">
                          <?php foreach( $images as $image ): ?>

                            <li><img src="<?php echo $image['sizes']['medium']; ?>"></li>

                              <?php endforeach; ?>
             
                       <?php endif; ?>


                        </ul>
    </div>

	
</div>


 <?php get_footer(); ?>