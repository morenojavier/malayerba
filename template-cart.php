<?php
/**
 * Template Name: Cart
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'cart'); ?>
<?php endwhile; ?>
