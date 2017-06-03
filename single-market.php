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
			<h2>Markets</h2>
			<div class="icon-down">
		<img src="/wp-content/uploads/2016/11/punta.png">
	</div>
	</div>

</div>

	<div class="container">

		<div class="row recent-post-cont post-article" style="padding: 0 !important;">
			<div class="col-md-12">
				
				<div class="construction-cont">

					 <h2 class="post-title" style="padding: 30px 0 !important;"><?php the_title_attribute(); ?> </h2>
					
				</div>
				
				
			</div>
			
		</div>

		
	</div>
	<div class="row" style="margin: 0 !important;">
		<div class="col-md-8" style="height: 450px; background-image: url('<?php the_field('image_left'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;" >
			
		</div>
		<div class="col-md-4">
			<div style="height: 450px; background-image: url('<?php the_field('image_right'); ?>'); background-size: cover; background-repeat: no-repeat; background-position: center;"></div>
		</div>
	</div>
	<div class="blue-bg" style="    padding: 20px 0 !important; margin-top: 10px;">
			<div class="container">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('number_of_locations'); ?></span> <br> <span class="sub-big-font">Locations</span>
						</p>
					</div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('number_of_states'); ?></span> <br> <span class="sub-big-font">States</span>
						</p>
					</div>
					<div class="col-md-2">
						<p>
							<span class="big-font"><?php the_field('years'); ?></span> <br> <span class="sub-big-font">Years</span>
						</p>
					</div>
					<div class="col-md-3"></div>

				</div>
			</div>
					
	</div>

	<div class="about-text container">
		<p><?php the_field('description'); ?></p>
	</div>
	<div class="container">
		<table class="projects-table">
			  <tr>
			    <th>Project</th>
			    <th>Architect</th> 
			    <th>Client/Owner</th>
			    <th>Category</th>
			  </tr>
			
			  	<?php

					// check if the repeater field has rows of data
					if( have_rows('projects') ):
					



					 	// loop through the rows of data
					    while ( have_rows('projects') ) : the_row();

					        // display a sub field value
					?>
					<tr>
						<td><?php the_sub_field('project_name'); ?></td>
						<td><?php the_sub_field('architect'); ?></td>
						<td><?php the_sub_field('clientowner'); ?></td>
						<td><?php the_sub_field('category'); ?></td>
						</tr>
					 <?php

					    endwhile;

					else :

					    // no rows found

					 

					
					endif;

					?>
			    
		
			 
			 
			</table>
	</div>

<?php
//* Run the Genesis loop
get_footer();
