<?php /* Template Name: Contact Template */ ?>
 <?php get_header(); ?>

 	<div class="dark-bg">
	<div class="container">
			<h1>Contact</h1>
			<div class="icon-down">
		<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px" data-rjs="3">
	</div>
	</div>
	</div>

	<div  style="padding: 50px 0;">
		<div class="row" style="margin:0 !important;">
			<div class="col-md-4 blue-contact">
					<h3>Call Us</h3>
				<?php if( get_field('phone', 194) ): ?>
					<p><a href="tel:<?php the_field('phone', 194); ?>"><?php the_field('phone', 194); ?></a> phone</p>
			<?php endif; ?>
				<?php if( get_field('fax', 194) ): ?>
					<p><?php the_field('fax', 194); ?> fax</p>
			<?php endif; ?>

					<br>



					<?php

							// check if the repeater field has rows of data
							if( have_rows('emails', 194) ):

								?>
							<h3>Email Us</h3>
							<?php

							 	// loop through the rows of data
							    while ( have_rows('emails', 194) ) : the_row();
							    ?>


							       <p> <a href="mailto:<?php the_sub_field('email'); ?>"><?php the_sub_field('email'); ?></a></p>

							       <?php

							    endwhile;

							else :

							    // no rows found

							endif;

							?>
					<br>
					<?php if( get_field('visit_section', 194) ): ?>
					<h3>Visit Us</h3>

					<?php the_field('visit_section', 194); ?>
						<?php endif; ?>


				</div>
			<div class="col-md-8 map-section-contact" style="padding-right: 0 !important;">
				<div class="map">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.51539769122!2d-84.3512891498385!3d33.979293128924446!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f50b81ff19944d%3A0x7b0e6a9f1f38c4bf!2sYoung+Contracting+Co!5e0!3m2!1ses-419!2sni!4v1480610465779" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</div>

	<div class="center-arrow"><a id="go-down" href="#next" class="fixed-arrow"><i class="fa fa-angle-down" aria-hidden="true"></i></a></div>

	<div class="container" id="next">
			<h2 class="green-title">Have Questions? Get In Touch</h2>
		<div class="row">
			<div class="col-md-12">
				<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax=true]') ?>
			</div>
		</div>
	</div>



 <?php get_footer(); ?>
