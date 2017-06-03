<?php
/**
 * Genesis Sample.
 *
 * This file adds functions to the Genesis Sample Theme.
 *
 * @package Genesis Sample
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://www.studiopress.com/
 */

//* Start the engine
include_once( get_template_directory() . '/lib/init.php' );

//* Setup Theme
include_once( get_stylesheet_directory() . '/lib/theme-defaults.php' );

//* Set Localization (do not remove)
load_child_theme_textdomain( 'genesis-sample', apply_filters( 'child_theme_textdomain', get_stylesheet_directory() . '/languages', 'genesis-sample' ) );

//* Add Image upload and Color select to WordPress Theme Customizer
require_once( get_stylesheet_directory() . '/lib/customize.php' );

//* Include Customizer CSS
include_once( get_stylesheet_directory() . '/lib/output.php' );

//* Child theme (do not remove)
define( 'CHILD_THEME_NAME', 'Genesis Sample' );
define( 'CHILD_THEME_URL', 'http://www.studiopress.com/' );
define( 'CHILD_THEME_VERSION', '2.2.4' );

//* Enqueue Scripts and Styles
add_action( 'wp_enqueue_scripts', 'genesis_sample_enqueue_scripts_styles' );
function genesis_sample_enqueue_scripts_styles() {

	wp_enqueue_style( 'genesis-sample-fonts', '//fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( 'genesis-sample-responsive-menu', get_stylesheet_directory_uri() . '/js/responsive-menu.js', array( 'jquery' ), '1.0.0', true );
	//custom script
	wp_enqueue_script('jquery.flexisel', get_stylesheet_directory_uri() . '/js/jquery.flexisel.js');
	wp_enqueue_script( 'custom', get_stylesheet_directory_uri() . '/js/custom.js' );
	wp_enqueue_script( 'customDev2', get_stylesheet_directory_uri() . '/js/customDev2.js' );
	$output = array(
		'mainMenu' => __( '', 'genesis-sample' ),
		'subMenu'  => __( 'Menu', 'genesis-sample' ),
	);
	wp_enqueue_style('dev2', get_stylesheet_directory_uri()."/dev2.css");
	wp_localize_script( 'genesis-sample-responsive-menu', 'genesisSampleL10n', $output );

}

//* Add HTML5 markup structure
add_theme_support( 'html5', array( 'caption', 'comment-form', 'comment-list', 'gallery', 'search-form' ) );

//* Add Accessibility support
add_theme_support( 'genesis-accessibility', array( '404-page', 'drop-down-menu', 'headings', 'rems', 'search-form', 'skip-links' ) );

//* Add viewport meta tag for mobile browsers
add_theme_support( 'genesis-responsive-viewport' );

//* Add support for custom header
add_theme_support( 'custom-header', array(
	'width'           => 600,
	'height'          => 160,
	'header-selector' => '.site-title a',
	'header-text'     => false,
	'flex-height'     => true,
) );

//* Add support for custom background
add_theme_support( 'custom-background' );

//* Add support for after entry widget
add_theme_support( 'genesis-after-entry-widget-area' );

//* Add support for 3-column footer widgets
add_theme_support( 'genesis-footer-widgets', 3 );

//* Add Image Sizes
add_image_size( 'featured-image', 720, 400, TRUE );

//* Rename primary and secondary navigation menus
add_theme_support( 'genesis-menus' , array( 'primary' => __( 'After Header Menu', 'genesis-sample' ), 'secondary' => __( 'Footer Menu', 'genesis-sample' ) ) );

//* Reposition the secondary navigation menu
remove_action( 'genesis_after_header', 'genesis_do_subnav' );
add_action( 'genesis_footer', 'genesis_do_subnav', 5 );

//* Reduce the secondary navigation menu to one level depth
add_filter( 'wp_nav_menu_args', 'genesis_sample_secondary_menu_args' );
function genesis_sample_secondary_menu_args( $args ) {

	if ( 'secondary' != $args['theme_location'] ) {
		return $args;
	}

	$args['depth'] = 1;

	return $args;

}

//* Modify size of the Gravatar in the author box
add_filter( 'genesis_author_box_gravatar_size', 'genesis_sample_author_box_gravatar' );
function genesis_sample_author_box_gravatar( $size ) {

	return 90;

}

//* Modify size of the Gravatar in the entry comments
add_filter( 'genesis_comment_list_args', 'genesis_sample_comments_gravatar' );
function genesis_sample_comments_gravatar( $args ) {

	$args['avatar_size'] = 60;

	return $args;

}

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

remove_action( 'genesis_after_header','genesis_do_nav' ) ;
 add_action( 'genesis_header_right','genesis_do_nav' );
 add_theme_support( 'genesis-structural-wraps', array( 'header', 'menu-secondary', 'footer-widgets', 'footer' ) );//menu-primary is removed

add_theme_support('post-thumbnails');
add_post_type_support( 'construction', 'thumbnail' );
add_post_type_support( 'markets', 'thumbnail' );
// Our custom post type function
function create_posttype() {

	register_post_type( 'construction',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Construction Trends' ),
				'singular_name' => __( 'Construction Trend' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'construction'),
			'menu_icon' => 'dashicons-hammer',


		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );


//Markets


function create_posttypeMarkets() {

	register_post_type( 'markets',
	// CPT Options
		array(
			'labels' => array(
				'name' => __( 'Markets' ),
				'singular_name' => __( 'Market' )
			),
			'public' => true,
			'has_archive' => true,
			'rewrite' => array('slug' => 'markets'),
			//'supports' => array('title', 'page-attributes'),
			 'menu_icon' => 'dashicons-store',
		)
	);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttypeMarkets' );


function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
            padding-bottom: 30px;
		    background-size: 300px;
		    webkit-background-size: 300px;
		    width: 300px;

        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );


function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Young Contracting';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );





// Lo enganchamos en la acción init y llamamos a la función create_book_taxonomies() cuando arranque
//add_action( 'init', 'create_markets_taxonomies', 0 );

// Creamos dos taxonomías, género y autor para el custom post type "libro"
/*function create_markets_taxonomies() {
	// Añadimos nueva taxonomía y la hacemos jerárquica (como las categorías por defecto)
	$labels = array(
	'name' => _x( 'Categories', 'taxonomy general name' ),
	'singular_name' => _x( 'Category', 'taxonomy singular name' ),
	'search_items' =>  __( 'Find by category' ),
	'all_items' => __( 'All Categories' ),
	'parent_item' => __( 'Parent Category' ),
	'parent_item_colon' => __( 'Parent Category:' ),
	'edit_item' => __( 'Edit Category' ),
	'update_item' => __( 'Update Category' ),
	'add_new_item' => __( 'Add new Category' ),
	'new_item_name' => __( 'Name of the new category' ),
);
register_taxonomy( 'genero', array( 'markets' ), array(
	'labels' => $labels,
	'show_ui' => true,
	'query_var' => true,
	'rewrite' => array( 'slug' => 'markets' ),
));

}*/

// Register Custom Taxonomy
function custom_market_taxonomy() {

	$labels = array(
		'name'                       => _x( 'Types', 'Taxonomy General Name', 'text_domain' ),
		'singular_name'              => _x( 'Type', 'Taxonomy Singular Name', 'text_domain' ),
		'menu_name'                  => __( 'Type', 'text_domain' ),
		'all_items'                  => __( 'All Items', 'text_domain' ),
		'parent_item'                => __( 'Parent Item', 'text_domain' ),
		'parent_item_colon'          => __( 'Parent Item:', 'text_domain' ),
		'new_item_name'              => __( 'New Type', 'text_domain' ),
		'add_new_item'               => __( 'Add new Type', 'text_domain' ),
		'edit_item'                  => __( 'Edit Item', 'text_domain' ),
		'update_item'                => __( 'Update Item', 'text_domain' ),
		'view_item'                  => __( 'View Item', 'text_domain' ),
		'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
		'add_or_remove_items'        => __( 'Add or remove items', 'text_domain' ),
		'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
		'popular_items'              => __( 'Popular Items', 'text_domain' ),
		'search_items'               => __( 'Search Items', 'text_domain' ),
		'not_found'                  => __( 'Not Found', 'text_domain' ),
		'no_terms'                   => __( 'No items', 'text_domain' ),
		'items_list'                 => __( 'Items list', 'text_domain' ),
		'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
	);
	$capabilities = array(
		'manage_terms'               => 'manage_categories',
		'edit_terms'                 => 'manage_categories',
		'delete_terms'               => 'manage_categories',
		'assign_terms'               => 'edit_posts',
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'capabilities'               => $capabilities,
	);
	register_taxonomy( 'market', array( 'markets' ), $args );

}
add_action( 'init', 'custom_market_taxonomy', 0 );


//Top Header

genesis_register_sidebar( array(
'id' => 'utility-bar-left',
'name' => __( 'Utility Bar Left', 'theme-prefix' ),
'description' => __( 'This is the left utility bar above the header.', 'theme-prefix' ),
) );

genesis_register_sidebar( array(
'id' => 'utility-bar-right',
'name' => __( 'Utility Bar Right', 'theme-prefix' ),
'description' => __( 'This is the right utility bar above the header.', 'theme-prefix' ),
) );


add_action( 'genesis_before_header', 'utility_bar' );

function utility_bar() {

	echo '<div class="utility-bar"><div class="col-md-offset-9 col-md-3 work-container-top">';

	genesis_widget_area( 'utility-bar-left', array(
		'before' => '<div class="utility-bar-left">',
		'after' => '</div>',
	) );

	genesis_widget_area( 'utility-bar-right', array(
		'before' => '<div class="utility-bar-right">',
		'after' => '</div>',
	) );

	echo '</div></div>';

}

//* Customize search form input box text
add_filter( 'genesis_search_text', 'sp_search_text' );
function sp_search_text( $text ) {
		return esc_attr( 'Search...' );
}



//Ejecutar PHP en widgets de texto
function ejecutar_php($html){
if(strpos($html,"<"."?php")!==false){
ob_start();
eval("?".">".$html);
$html=ob_get_contents();
ob_end_clean();
}
return $html;
}
add_filter('widget_text','ejecutar_php',100);

add_filter( 'wp_nav_menu_items', 'theme_menu_extras', 10, 2 );
function theme_menu_extras( $menu, $args ) {
	//* Change 'primary' to 'secondary' to add extras to the secondary navigation menu
	if ( 'primary' !== $args->theme_location )
		return $menu;
	//* Uncomment this block to add a search form to the navigation menu

	ob_start();
	get_search_form();
	$search = ob_get_clean();
	$menu  .= '<li class="right search"><div class="top-bar-search">' . $search . ' <i class="fa fa-search" aria-hidden="true"></i><i class="fa fa-times" aria-hidden="true"></i></div></li>';

	//* Uncomment this block to add the date to the navigation menu
	/*
	$menu .= '<li class="right date">' . date_i18n( get_option( 'date_format' ) ) . '</li>';
	*/
	return $menu;
}

function cc_mime_types($mimes) {
  $mimes['svg'] = 'image/svg+xml';
  return $mimes;
}
add_filter('upload_mimes', 'cc_mime_types');


/*adding all the styles of the theme*/
function my_theme_enqueue_styles() {
    wp_enqueue_style('fontawesome', "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");
    wp_enqueue_style('bootstrap', "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css");


}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );


/*adding all the js file for the theme*/
function my_theme_enqueue_scripts(){

    wp_enqueue_script("bootstrapjs", "https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js");

}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_scripts' );



//SHORTCODE 2 LATEST POST

function my_recent_posts_shortcode($atts){
	global $post;

  $html = "<div class='row'>";

  $my_query = new WP_Query( array(
       'post_type' => 'post',
       'posts_per_page' => 2
  ));

  if( $my_query->have_posts() ) : while( $my_query->have_posts() ) : $my_query->the_post();
  		$html .= '<div class="col-md-6" style="padding-bottom: 40px;">';
  		if ( has_post_thumbnail() ) {
         $html .=  '<a href="'. get_permalink() .'" title="'. get_the_title() .'">'.
                                             get_the_post_thumbnail()
                                        .'</a>';
  		}


      $html .=  '<div style="padding-top: 20px;">';
      $html .= '<p>'. get_the_excerpt() .'</p>';

      $html .=  '<a class="blue-link" href="'.  get_permalink() .'">Continue Reading &nbsp; <i class="fa fa-play" aria-hidden="true"></i></a>';

       $html .=  '</div></div>';




  endwhile;
  		    wp_reset_postdata();

  endif;

  return $html . '</div>';

}

add_shortcode('recent-posts', 'my_recent_posts_shortcode');


// ADD JS IN DASHBOARD
function custom_register_admin_scripts() {

wp_register_script( 'custom-javascript', get_stylesheet_directory_uri() . '/js/admin-custom.js' );
wp_enqueue_script( 'custom-javascript' );

} // end custom_register_admin_scripts
add_action( 'admin_enqueue_scripts', 'custom_register_admin_scripts' );


// filter the Gravity Forms button type
add_filter( 'gform_submit_button_5', 'form_submit_button', 10, 2 );
function form_submit_button( $button, $form ) {
    return "<button class='button' id='gform_submit_button_{$form['id']}'>Submit <i class='fa fa-play' aria-hidden='true'></i></button>";
}

//Custom viewport

add_action( 'genesis_meta', 'sp_viewport_meta_tag' );
function sp_viewport_meta_tag() {
	echo '<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">';
}



/*	'term_id' 		=> 103,
));
wp_update_term(13, 'market', array(
	'term_id' 		=> 101,
));
wp_update_term(12, 'market', array(
	'term_id' 		=> 102,
));
wp_update_term(14, 'market', array(
	'term_id' 		=> 104,
));
wp_update_term(11, 'market', array(
	'term_id' 		=> 105,
));*/


function wpb_add_google_fonts() {

wp_enqueue_style( 'wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Crete+Round:400,400i', false ); 
wp_enqueue_style( 'wpb-google-fonts-fire-sans', 'https://fonts.googleapis.com/css?family=Fira+Sans:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i', false ); 
}

add_action( 'wp_enqueue_scripts', 'wpb_add_google_fonts' );


function see_more_button() {

	ob_start();
		?> 
			<div class="button-cont"><a id="collapse-button" data-toggle="collapse" data-target="#awards">See More <i class="fa fa-plus-square"></i></a></div>
		 <?php
		return ob_get_clean();

}
add_shortcode( 'see-more', 'see_more_button' );

