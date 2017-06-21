<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php', // Theme customizer
  'lib/navwalker.php'  // Navwalker Bootstrap menu
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);


//Ocultar reviews Woocommerce
add_filter( 'woocommerce_product_tabs', 'woo_remove_product_tabs', 98 );

function woo_remove_product_tabs( $tabs ) {

    unset( $tabs['description'] );        // Remove the description tab
    unset( $tabs['reviews'] );      // Remove the reviews tab
    unset( $tabs['additional_information'] );   // Remove the additional information tab

    return $tabs;

}

//Cambiar la cantidad a mostrar en los productos relacionados en Woocommerce
function woo_related_products_limit() {
  global $product;
  
  $args['posts_per_page'] = 3;
  return $args;
}
add_filter( 'woocommerce_output_related_products_args', 'jk_related_products_args' );
  function jk_related_products_args( $args ) {
  $args['posts_per_page'] = 3; // 4 related products
  $args['columns'] = 1; // arranged in 2 columns
  return $args;
}

//Cambiar el número por mostrar en la lista de productos 
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 12;
  return $cols;
}

// Customización del single product
//Remover el título
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_title', 5 );
//Remover excerpt
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_excerpt', 20);
//Remover tags
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

