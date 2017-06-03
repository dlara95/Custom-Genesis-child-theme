<?php /* Template Name: Markets Template */ ?>
 <?php get_header(); ?>

<div class="dark-bg">
	<div class="container">
			<h1>Markets</h1>
			<div class="icon-down">
				<img src="/wp-content/uploads/2017/01/punta2x.png" width="27px">
			</div>
	</div>

</div>

<div class="container about-text" style="padding: 50px 15px;">
	<div class="row">
		<div class="col-md-12">
			<!--<h3 class="blue-title left-aligned">We Build With Your Business In Mind</h3>
	<p>Young Contracting delivers value every time. Each destination we construct is a building of quality. From our team of professionals to our proactive process, Young never compromises.</p>

	<p>Our solid reputation has been earned through the consistent construction of quality projects by our talented team for nearly two decades. Our representative portfolios most effectively tell our story.</p>
-->
    <?php  the_field('markets_content', 274); ?>

    </div>
	</div>

</div>
		<?php /*<div class="container" style="padding-bottom: 50px;">
		<div class="row" >

			<?php
				$args = array( 'post_type' => 'markets', 'posts_per_page' => -1);
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();
				 ?>

				 <div class="col-md-3 col-sm-6 col-xs-12 " style="margin-bottom: 20px;">
				 	<div class="market-layover">

	                 <?php if ( has_post_thumbnail() ) : ?>
	                     <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
	                           <?php the_post_thumbnail(); ?>
	                                        </a>

	                      <?php endif; ?>
	                      <a  class="market-name" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
	                                            <?php the_title_attribute(); ?>
	                                        </a>
				 	</div>

				 </div>




                                    <?php
				endwhile;


			?>
		</div>
		</div>-->*/?>





		<div  style="padding-bottom: 50px;">
			<div class="markets-test ">


										<?php //start by fetching the terms for the animal_cat taxonomy
								$terms = get_terms( 'market', array(
								    'orderby'    => 'menu_order',
                    'order' => 'ASC',
								    'hide_empty' => 0

								) );
								?>

											<?php
								// now run a query for each animal family
								foreach( $terms as $term ) {

								    // Define the query
								    $args = array(
								        'post_type' => 'markets',
								        /*'special-projects' => $term->slug*/

									'tax_query' => array(
											array(
												'taxonomy' => 'market',
												'field' => 'slug',
												'terms' => $term->slug
											)
										),
									'posts_per_page' => -1,
									'numberposts' => -1
								    );

								    $query = new WP_Query( $args );

								    // output the term name in a heading tag
								    echo'<div class="markets-div blue-cat" style="margin-bottom: 20px;"><div><h2>' . $term->name . '</h2><p>'. $term->description  .'</p></div></div>';

								    // output the post titles in a list


								        // Start the Loop
								        while ( $query->have_posts() ) : $query->the_post(); ?>

								        <div class="markets-div" id="post-<?php the_ID(); ?>" style="margin-bottom: 20px;">
								            <div class="market-layover">

									                 <?php if ( has_post_thumbnail() ) : ?>
									                     <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">

									                           	<div class="new-action" style="background: url(<?php the_post_thumbnail_url(); ?>);">
									                           	<div class="quote-action">

																	<?php the_title_attribute(); ?>

																	</div>

									                               <div class="div-enlace"></div>
									                               <span class="icon-enlace"><i class="fa fa-link" aria-hidden="true"></i></span>
									                               </div>

									                                        </a>

									                      <?php endif; ?>
									                      <?php /*<a  class="market-name" href="<?php the_permalink(); ?>" title="<?php the_title_attribute();?>">
									                                            <?php the_title_attribute(); ?>
									                                        </a> */?>

												 	</div>
								        </div>


								        <?php endwhile;



								    // use reset postdata to restore orginal query
								    wp_reset_postdata();

								} ?>
		</div>
		</div>




 <?php get_footer(); ?>
