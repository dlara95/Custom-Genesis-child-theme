<?php
/**
 * This file adds the Single Market Post Template to any Genesis child theme.
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
			<h1><?php   // Get terms for post
				 $terms = get_the_terms( $post->ID , 'market' );
				 // Loop over each item since it's an array
				 if ( $terms != null ){
				 foreach( $terms as $term ) {
				 // Print the name method from $term which is an OBJECT
				 print $term->name ;
				 // Get rid of the other data stored in the object, since it's not needed
				 unset($term);
				} } ?>
				
			</h1>

			<div class="icon-down">
		<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
	</div>
	</div>

</div>

	<div>

		<div class="row recent-post-cont post-article" style="padding: 0 !important; margin:0 !important;">
			<div class="col-md-8">
				
				<div class="construction-cont">

					 <h1 class="post-title" style="padding: 30px 0;"><?php the_title_attribute(); ?> </h1>
					
				</div>
				
				
			</div>
			<div class="col-md-4">
					
					<?php
					  // Get terms for post
				 $terms = get_the_terms( $post->ID , 'market' );
				 // Loop over each item since it's an array
				 if ( $terms != null ){
				 foreach( $terms as $term ) {
				 // Print the name method from $term which is an OBJECT
			
				
					$myposts = get_posts(array(
					    'showposts' => -1,
					    'post_type' => 'markets',
					    'tax_query' => array(
					        array(
					        'taxonomy' => 'market',
					        'field' => 'slug',
					        'terms' => array($term->name))
					    ))
					);
					?>

						 
						 <div class="dropdown">
						  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><?php print $term->name ; ?>
						  <i class="fa fa-angle-down" aria-hidden="true"></i></button>
						  <ul class="dropdown-menu">
						  <li><a href="/markets">View All</a></li>
						  <?php
						  	foreach ($myposts as $mypost) {
					     		 echo "<li><a href='".  get_permalink( $mypost->ID ) ."'>" . $mypost->post_title . '</a></li>';
							
							}?>

					
						  </ul>
						</div>

						<?php
					 
					
					
				 // Get rid of the other data stored in the object, since it's not needed
				 unset($term);
				} } 


						?>
			</div>
			
		</div>

		
	</div>

	<div class="row" style="margin: 0 !important;">
		<?php if( get_field('image_right') ): ?>


		<div class="col-md-8 image-left-sc"  style="height: 450px; background-image: url('<?php the_field('image_left'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;" >
			
		</div>
		<div class="col-md-4 image-right-sc" id="img-market-right">
			<div style="height: 450px; background-image: url('<?php the_field('image_right'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: left;"></div>
		</div>
		 <?php else: ?> 
		 	<div class="col-md-12" style="height: 450px; background-image: url('<?php the_field('image_left'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;" >
			
		</div>

			<?php endif; ?>

				<?php $postid = get_the_ID(); ?>
				<!-- INLINE STYLES FOR LEFT IMAGES -->
				<?php if (get_field('tablet_image_left')) {?>
					<!--<style type="text/css">
						@media (min-width: 769px) and (max-width: 1024px){
							.postid-<?php echo $postid; ?> .image-left-sc{
							background-image: url('<?php the_field('tablet_image_left') ?>') !important;
							}
						}
						
					</style>-->
				<?php } ?>

				<?php if (get_field('mobile_image_left')) {?>
					<!--<style type="text/css">
						@media  (max-width: 768px){
							.postid-<?php echo $postid; ?> .image-left-sc{
							background-image: url('<?php the_field('mobile_image_left') ?>') !important;
							}
						}
						
					</style>-->
				<?php } ?>

				<!--INLINE IMAGES FOR RIGHT IMAGES -->
					<?php if (get_field('tablet_image_right')) {?>
					<!--<style type="text/css">
						@media (min-width: 769px) and (max-width: 1024px){
							.postid-<?php echo $postid; ?> .image-right-sc{
							background-image: url('<?php the_field('tablet_image_right') ?>') !important;
							}
						}
						
					</style>-->
					<?php } ?>
				<?php if (get_field('mobile_image_right')) {?>
					<!--<style type="text/css">
						@media  (max-width: 768px){
							.postid-<?php echo $postid; ?> .image-right-sc{
							background-image: url('<?php the_field('mobile_image_right') ?>') !important;
							}
						}
						
					</style>-->
				<?php } ?>

	</div>
	<?php if( get_field('years') && get_field('number_of_locations') && get_field('number_of_states')): ?>


	<div class="blue-bg market-blue" style="    padding: 20px 0 !important; margin-top: 10px;">
			<div class="container">
				<div class="row">
				<!-- 	<div class="col-md-3"></div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('number_of_locations'); ?></span> <br> <span class="sub-big-font"><?php the_field('location_text'); ?></span>
						</p>
					</div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('number_of_states'); ?></span> <br> <span class="sub-big-font"><?php the_field('states_text'); ?></span>
						</p>
					</div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('years'); ?></span> <br> <span class="sub-big-font"><?php the_field('years_text'); ?></span>
						</p>
					</div>
					<div class="col-md-3"></div> -->

					<div class="col-md-12">
						<ul class="projects-ul">
						  <li>
							<span class="big-font"><?php the_field('number_of_locations'); ?></span> <br> <span class="sub-big-font"><?php the_field('location_text'); ?></span>
						</li><li>
						<span class="big-font"><?php the_field('number_of_states'); ?></span> <br> <span class="sub-big-font"><?php the_field('states_text'); ?></span>
						</li><li>
						<span class="big-font"><?php the_field('years'); ?></span> <br> <span class="sub-big-font"><?php the_field('years_text'); ?></span>
						</li>
						</ul>
					</div>

				</div>
			</div>
					
	</div>
		<?php elseif(get_field('number_of_locations') && get_field('number_of_states')): ?>

			<div class="blue-bg market-blue" style="    padding: 20px 0 !important; margin-top: 10px;">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-4"></div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('number_of_locations'); ?></span> <br> <span class="sub-big-font"><?php the_field('location_text'); ?></span>
						</p>
					</div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('number_of_states'); ?></span> <br> <span class="sub-big-font"><?php the_field('states_text'); ?></span>
						</p>
					</div> -->

					<div class="col-md-12">
						<ul class="projects-ul">
						  <li>
							<span class="big-font"><?php the_field('number_of_locations'); ?></span> <br> <span class="sub-big-font"><?php the_field('location_text'); ?></span>
						</li><li>
						<span class="big-font"><?php the_field('number_of_states'); ?></span> <br> <span class="sub-big-font"><?php the_field('states_text'); ?></span>
						</li>
						</ul>
					</div>
					
					</div>

				</div>
			</div>
					
	</div>


	<?php endif; ?>
	
<div class="center-arrow"><a id="go-down" href="#next" class=""><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>

	<div class="about-text container" id="next">
		<p><?php the_field('description'); ?></p>
	</div>

		<?php

					// check if the repeater field has rows of data
					if( have_rows('projects') ):?>
	<div class="container">
		<table class="projects-table">
			  <tr>
			    <th>Project</th>
			    <th>Architect</th> 
			    <th>Client/Owner</th>
			    <th>Category</th>
			  </tr>
			
			  
					<?php



					 	// loop through the rows of data
					    while ( have_rows('projects') ) : the_row();

					        // display a sub field value
					?>
					<tr>
						<td><?php the_sub_field('project_name'); ?></td>
						<?php if (get_sub_field('architect_url')) {?>
						<td><a href="<?php the_sub_field('architect_url') ?>" target="_blank"><?php the_sub_field('architect'); ?></a></td>

						<?php } 
							else{?>

							<td><?php the_sub_field('architect'); ?></td>

							<?php }
						?>
						<td><?php the_sub_field('clientowner'); ?></td>
						<td><?php the_sub_field('category'); ?></td>
						</tr>
					 <?php

					    endwhile;
					    ?>

					    	</table>
					</div>

					<?php

					else :

					    // no rows found

					 

					
					endif;

					?>
			    
		
			 
			 
	

<?php
//* Run the Genesis loop


get_footer();
