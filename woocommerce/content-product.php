<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

// Ensure visibility
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>

	<div <?php post_class('col-xs-12 col-sm-6 col-md-4 col-lg-4'); ?>>
		<?php /* Apertura del link */ //do_action( 'woocommerce_before_shop_loop_item' ); ?>
		<div class="store_producto">


		<?php /* Imagen */ //do_action( 'woocommerce_before_shop_loop_item_title' ); ?>
			
			<div class="store_container_image">
				<?php if ( $product->is_on_sale() ) : ?> 
					<?php echo apply_filters( 'woocommerce_sale_flash', '<span class="onsale">' . esc_html__( 'Sale!', 'woocommerce' ) . '</span>', $post, $product ); ?> 
				<?php endif; ?>
				<a href="<?php echo get_permalink($product_id) ?>">
					<img src="<?php echo the_post_thumbnail_url(); ?>" class="img-responsive store_image" alt="">

				</a>
			</div>

			<div class="store_info_container">
				<div class="store_title">
					<?php /*Título*/ do_action( 'woocommerce_shop_loop_item_title' ); ?>
				</div>
				<!-- <div class="store_btn_anadir_carrito">
					<a href="<?php the_permalink(); ?>">Ver más</a>
					<?php /*Btn añadir al carrito*/ do_action( 'woocommerce_after_shop_loop_item' );?>
				</div> -->
			</div>
			<div class="store_info">
				<div class="excerpt"><p><?php the_excerpt(); ?></p></div>
				<div class="store_precio">
					<?php /*Precio*/ do_action( 'woocommerce_after_shop_loop_item_title' ); ?> 
				</div>
			</div>
		</div>
			
	</div>


