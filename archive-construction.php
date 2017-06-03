<?php /* Template Name: Construction Template */ ?>
 <?php get_header(); ?>

<div class="dark-bg">
	<div class="container">
			<h1>Construction Trends</h1>
			<div class="icon-down">
		<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
	</div>
	</div>

</div>

<div class="container" style="padding: 50px 0;">
	<div class="row" style="margin: 0 !important;">
		<div class="col-md-9">
			<?php
				$args = array( 'post_type' => 'Construction', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				 ?>

				 <div class="col-md-12 recent-post-cont" >
                                    
                                 

                                    <div class="col-md-8" style="padding: 40px 0 !important; border-bottom: 1px solid #f2f2f2; ">
                                    <h2 style="color: #656666 !important;"><i class="fa fa-file-pdf-o" aria-hidden="true"></i></h2>
                                    <h2 class="blog-title">  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
	                                            <?php the_title_attribute(); ?>
	                                        </a></h2>
	                                       
	                                  
	                                        
	                                        
	                                       <div>
	                                       		<p><?php the_excerpt(__('(more?^??)')); ?></p>
	                                       </div>
                                    

                                      <a class="blue-link" href="<?php  the_permalink() ?>">Download &nbsp; <i class="fa fa-play" aria-hidden="true"></i></a>

                                    </div></div>


                                    <?php
				endwhile;


			?>
                                   
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
	



 <?php get_footer(); ?>