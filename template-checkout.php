<?php
/**
 * Template Name: Checkout
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'checkout'); ?>
<?php endwhile; ?>
