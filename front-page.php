<?php /* Template Name: Home Template */ ?>
 <?php get_header(); ?>

 <!--<div class="banner">
<div class="container">
<div class="quote">
<h1>Building trust and value</h1>
<h2>Since 1991</h2>
</div>
</div>
</div>

<div class="gray-bg">
<div class="container">
<div class="row action-container">
<div class="col-md-3 col-sm-6 col-xs-12">
<a href="/markets/">
<div class="action-1 new-action" data-rjs="3">
<div class="quote-action">

Retail/Mixed use

</div>
<div class="div-enlace"></div>
 <span class="icon-enlace"><i class="fa fa-link" aria-hidden="true"></i></span>
</div>
</a>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<a href="/markets/">
<div class="action-2 new-action" data-rjs="3">
<div class="quote-action">

Shopping centers

</div>
<div class="div-enlace"></div>
 <span class="icon-enlace"><i class="fa fa-link" aria-hidden="true"></i></span>
</div>
</a>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<a href="/markets/">
<div class="action-3 new-action" data-rjs="3">
<div class="quote-action">

Healthcare

</div>
<div class="div-enlace"></div>
 <span class="icon-enlace"><i class="fa fa-link" aria-hidden="true"></i></span>
</div>
</a>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<a href="/markets/">
<div class="action-4 new-action" data-rjs="3">
<div class="quote-action">

Special projects

</div>
<div class="div-enlace"></div>
 <span class="icon-enlace"><i class="fa fa-link" aria-hidden="true"></i></span>
</div>
</a>
</div>
</div>
</div>
</div>-->

 <?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                
                

<div>
                <?php  the_content(); ?>
</div>
			</div>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<div>

				<h2>Sorry, nothing to display</h2>

			</div>
			<!-- /article -->

		<?php endif; ?>



 	
 	

 	
 <?php get_footer(); ?>