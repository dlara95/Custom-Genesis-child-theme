<?php /* Template Name: Leadership Template */ ?>
 <?php get_header(); ?>

 			<div class="dark-bg">
				<div class="container">
						<h1>LEADERSHIP</h1>
						<div class="icon-down">
					<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
				</div>
				</div>
			</div>

			<div class="about-text container">
				<div class="row">
					<div class="col-md-6">
						<p>Gary Young founded Young Contracting in 1991. Under his leadership, the company has put in place over $700 million of commercial construction. Today, Young Contracting is one of the premier construction companies in the Southeast.</p>
						<p>As President, Gary oversees the day-to-day operations of the firm. His hands-on approach keeps him connected to current projects and clients as well as internal operations </p>
						<p>while his passion and visionary spirit leads the team in business development.
						Prior to forming Young Contracting, Gary served as President for J. M. Wilkerson Construction Company, Inc. where he was responsible for the day-to-day management of the company, ensuring growth and stability. Before that, he was Vice President at Tribble & Stephens Company where he was responsible for evaluating the construction climate, pursuing new business opportunities and overseeing a team of estimators, project managers and superintendents.</p>
						<p>Gary graduated from Northeast Louisiana University with a bachelor’s degree in building construction. He has served on the board for the Associated General Contractors (AGC), the Associated Builders and Contractors (ABC) and Affinity Service Group. Gary is a member of Sigma Lambda Chi, the National Scholastic Construction Society, International Council of Shopping Centers (ICSC) and AGC.</p>
					</div>

					<div class="col-md-6">
						<div class="row">
							<img src="/wp-content/uploads/2016/11/pp.jpg" class="img-responsive">
						</div>
						<div class="row" style="padding: 20px;">
							<!--<a href="#" class="blue-link">Connect &nbsp; <i class="fa fa-play" aria-hidden="true"></i></a>-->
						</div>
					</div>
				</div>
			</div>

			<div class="blue-img-bg">
				<div class="container">
		<div class="testimonial-quote">
				<p><i class="fa fa-quote-left" aria-hidden="true"></i>
		</p>
			<p>Ra doluptia quatisq uianduciae culles sitiunte duciunt exeria quame inctasseque officid que pel moloraeria con con comnis del invellor modicid que min remped quidestin core nim.<p>
			<p class="italic">–Person</p>
		</div>
	</div>
			</div>

			<div class="about-text container">
				<div class="row">
					<div class="col-md-4">
						<img src="/wp-content/uploads/2016/11/pp2.jpg" class="img-responsive">
					</div>

					<div class="col-md-8">
						<h3 class="leader-name" style="margin-top: 0 !important;">Rusty Peacock</h3>
						<h4 class="leader-charge">Executive Vice President</h4>
						<div class="row" style="padding: 10px;">
							<!--<a href="#" class="blue-link">Connect &nbsp; <i class="fa fa-play" aria-hidden="true"></i></a>-->
						</div>
						<p>Rusty Peacock serves as Vice President and manages the day-to-day operations of Young Contracting. His responsibilities include the oversight of pre-construction, estimating, project management, marketing and business development.</p>
						<p>Rusty brings nearly 30 years of construction experience to the leadership team. His attention to detail, coupled with big picture thinking, makes him a natural and valuable leader. Throughout the construction process, he ensures that all projects remain on track and are delivered in accordance with Young’s superior standards.</p>
						<p>Prior to joining Young Contracting in 1991, Rusty worked along side Gary Young while serving as a project manager at J. M. Wilkerson Construction Company, Inc. and at Tribble & Stephens Company. Rusty earned a bachelor’s degree in building construction from the University of Florida. He is a member of ICSC and AGC.</p>
					</div>
				</div>

				<div class="row" style="padding: 40px 0;">

						<?php

								// check if the repeater field has rows of data
								if( have_rows('leaders', 167) ):

								 	// loop through the rows of data
								    while ( have_rows('leaders', 167) ) : the_row();

								        // display a sub field value
										$imgUrl = get_sub_field('leader_picture');
								       $name = get_sub_field('leaders_name');
								       $charge = get_sub_field('leaders_charge');
								       $description = get_sub_field('description');

								       ?>

								       	<div class="col-md-4" style="padding-top: 20px; min-height: 880px !important;">
									<img src="<?php echo $imgUrl; ?>" class="img-responsive">
										<h3 class="leader-name"><?php echo $name; ?></h3>
										<h4 class="leader-charge"><?php echo $charge; ?></h4>
										<div class="row" style="padding: 10px;">
											<!--<a href="#" class="blue-link">Connect &nbsp; <i class="fa fa-play" aria-hidden="true"></i></a>-->
										</div>
											<p><?php echo $description; ?></p>
										</div>

								       <?php

								    endwhile;

								else :

								    // no rows found

								endif;

								?>
					
				</div>
			</div>

 	
 	

 	
 <?php get_footer(); ?>
