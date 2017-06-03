<?php /* Template Name: Blog Template */ ?>
 <?php get_header(); ?>

<div class="dark-bg">
	<div class="container">
			<h1>Blog</h1>
			<div class="icon-down">
		<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
	</div>
	</div>

</div>

<div class="container" style="padding: 50px 0;">
	<div class="row">
		<div class="col-md-9">
			 <?php $the_query = new WP_Query( 'posts_per_page=5' ); ?>


                                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                                    <div class="col-md-12 recent-post-cont" style="padding: 40px 0 !important; border-bottom: 1px solid #f2f2f2; ">
                                    	<div class="col-md-4">
	                                    		   <?php if ( has_post_thumbnail() ) : ?>
	                                        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
	                                            <?php the_post_thumbnail(); ?>
	                                        </a>
	                                    <?php endif; ?>

	                                    </div>


                                    
                                 

                                    <div class="col-md-8">
                                    <h2 class="blog-title">  <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
	                                            <?php the_title_attribute(); ?>
	                                        </a></h2>
	                                        <div>
	                                          <ul class="blog-info">
	                                        	<li><?php the_date(); ?></li>
	                                        	<li><i class="fa fa-user" aria-hidden="true"></i>
 &nbsp;<?php echo get_the_author(); ?></li>
	                                        	<li><?php $category = get_the_category();
													$firstCategory = $category[0]->cat_name;
													echo $firstCategory;

													?></li>
	                                        </ul>
	                                        	
	                                        </div>
	                                      
	                                        
	                                        
	                                       <div>
	                                       		<p><?php the_excerpt(__('(more?^??)')); ?></p>
	                                       </div>
                                    

                                      <a class="blue-link" href="<?php  the_permalink() ?>">Continue Reading &nbsp; <i class="fa fa-play" aria-hidden="true"></i></a>

                                    </div></div>


                                    <?php 
                                    endwhile;
                                    wp_reset_postdata();
                                    ?>
                                   <div class="row">
                                   		 <div class="col-md-12">
                                    			<?php previous_posts_link( '« Newer Entries' ); ?>

                                    	</div>
                                   </div>
                                   
		</div>
		<div class="col-md-3">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>
	



 <?php get_footer(); ?>