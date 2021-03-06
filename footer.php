<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package Genesis\Templates
 * @author  StudioPress
 * @license GPL-2.0+
 * @link    http://my.studiopress.com/themes/genesis/
 */

/*genesis_structural_wrap( 'site-inner', 'close' );
genesis_markup( array(
	'close'   => '</div>',
	'context' => 'site-inner',
) );

do_action( 'genesis_before_footer' );
do_action( 'genesis_footer' );
do_action( 'genesis_after_footer' );

genesis_markup( array(
	'close'   => '</div>',
	'context' => 'site-container',
) );

do_action( 'genesis_after' );
wp_footer(); // We need this for plugins.

genesis_markup( array(
	'close'   => '</body>',
	'context' => 'body',
) );*/

?>
<div class="footer-bg">
	
		<div class="row" style="margin: 0 !important;">
			<div class="col-md-9 col-sm-9 col-xs-9 copy-text" style="text-align: center;" >
				<span>&copy;<?php echo date("Y"); ?>. Young Contracting / SE, Inc. All rights reserved / 8215 Roswell Road, Building 400, Atlanta, GA 30350 / 770.522.9270</span>
			</div>
			<div class="col-md-3 sol-sm-3 col-xs-3 linkedin-footer" >
				<a href="https://www.linkedin.com/company/young-contracting-se" target="_blank" ><i class="fa fa-linkedin" aria-hidden="true"></i>
				</a>
			
		</div>
	
	</div>
</div>
</html>
<?php wp_footer(); ?>
