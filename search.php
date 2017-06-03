<?php
get_header();
global $wp_query;
?>
<div class="dark-bg">
  <div class="container">
      <h1>Search Results</h1>

      <div class="icon-down">
    <img src="/wp-content/uploads/2016/11/punta.png" data-rjs="3">
  </div>
  </div>

</div>

<div class="container" style="padding: 30px 0;">
    <div class="row" style="padding: 0 20px;">
        <div class="col-md-12">
                    
                  
                    <div class="resultados" style="font-family: fire-sans, sans-serif !important; font-style: normal; font-weight: 400;">
                      <h1 class="search-title"> <?php echo $wp_query->found_posts; ?>
                        <?php _e( 'results found', 'locale' ); ?> </h1>

                        <?php if ( have_posts() ) { ?>

                            <ul>

                            <?php while ( have_posts() ) { the_post(); ?>

                               <li>
                                 <h3 class="blue-title left-aligned"><a href="<?php echo get_permalink(); ?>">
                                   <?php the_title();  ?>
                                 </a></h3>
                                
                                 <?php echo substr(get_the_excerpt(), 0,200); ?>
                                 <div class="h-readmore"> <a href="<?php the_permalink(); ?>"><?php the_permalink(); ?></a></div>
                               </li>

                            <?php } ?>

                            </ul>

                           <?php paginate_links(); ?>

                        <?php } ?>

                    </div>
                
                
        </div>

        <!--<div class="col-md-3">
            <?php get_sidebar(); ?>
        </div>-->
    </div>
</div>

<?php get_footer(); ?>