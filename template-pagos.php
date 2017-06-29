<?php
/**
 * Template Name: Pagos
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'pagos'); ?>
<?php endwhile; ?>
