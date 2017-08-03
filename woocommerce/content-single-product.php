<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

?>

<?php
	/**
	 * woocommerce_before_single_product hook.
	 *
	 * @hooked wc_print_notices - 10
	 */
	 do_action( 'woocommerce_before_single_product' );

	 if ( post_password_required() ) {
	 	echo get_the_password_form();
	 	return;
	 }
?>


	
<div id="product-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="row">
		<div class="col-md-12">
			<div><h1><?php the_title(); ?></h1></div>
			<div class="malayerba_product_subtitle">
				<h3><?php the_excerpt(); ?></h>
			</div>	
		</div>
	</div>
	<div class="row">
		<div class="col-md-6">
			<div class="product_imagen">
			<?php
				/**
				 * woocommerce_before_single_product_summary hook.
				 *
				 * @hooked woocommerce_show_product_sale_flash - 10
				 * @hooked woocommerce_show_product_images - 20
				 */
				//do_action( 'woocommerce_before_single_product_summary' );
			?>

				<div class="owl-carousel owl-theme ">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('slider_product') ):

				 	// loop through the rows of data
				    while ( have_rows('slider_product') ) : the_row();
						// vars
						
						$img_slider = get_sub_field('imagen');
						
			
						?>
				        <div class="hero_bg flex items-center justify-center center">
				        	<img src="<?php echo $img_slider; ?>" class="img-responsive">
						</div>
						<?php
				    endwhile;
				else :
				    // no rows found
				endif;
				?>

				<?php wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div class="col-md-6">
			<div class="entry-summary">
				
				
				<?php
					/**
					 * woocommerce_single_product_summary hook.
					 *
					 * @hooked woocommerce_template_single_title - 5
					 * @hooked woocommerce_template_single_rating - 10
					 * @hooked woocommerce_template_single_price - 10
					 * @hooked woocommerce_template_single_excerpt - 20
					 * @hooked woocommerce_template_single_add_to_cart - 30
					 * @hooked woocommerce_template_single_meta - 40
					 * @hooked woocommerce_template_single_sharing - 50
					 * @hooked WC_Structured_Data::generate_product_data() - 60
					 */
					do_action( 'woocommerce_single_product_summary' );
					
					wp_reset_postdata();
				?>
				
						

				
				<div class="product_contenido">
					<?php $size_chart_modal = get_field( "size_chart" );
					if( $size_chart_modal ) { ?>
					
					<a href="#" class="malayerba_size_chart_modal" data-toggle="modal" data-target="#miModal">
					  <h3>VIEW SIZE CHART</h3>
					</a>
					<div class="modal fade" id="miModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						<div class="modal-dialog" role="document">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-label="Close">
										<span aria-hidden="true">&times;</span>
									</button>
									<h4 class="modal-title" id="myModalLabel">SIZE CHART</h4>
								</div>
								<div class="modal-body">
									<img src="<?php echo $size_chart_modal; ?>" class="img-responsive" alt="">
								</div>
							</div>
						</div>
					</div>
							
					<?php } ?>		

					<?php
					$thecontent = get_the_content();
					if(!empty($thecontent)) { ?>

					    <h2>INFO</h2>
					    <?php echo get_the_content(); ?>

					<?php } ?>
					<?php wp_reset_postdata(); ?>
				</div>

			</div><!-- .summary -->
		</div>
	</div>
	
	<div class="row">
	<?php
		/**
		 * woocommerce_after_single_product_summary hook.
		 *
		 * @hooked woocommerce_output_product_data_tabs - 10
		 * @hooked woocommerce_upsell_display - 15
		 * @hooked woocommerce_output_related_products - 20
		 */
		do_action( 'woocommerce_after_single_product_summary' );
	?>
	</div>

</div><!-- #product-<?php the_ID(); ?> -->

<?php do_action( 'woocommerce_after_single_product' ); ?>