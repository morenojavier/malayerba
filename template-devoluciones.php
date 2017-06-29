<?php
/**
 * Template Name: Devoluciones
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'devoluciones'); ?>
<?php endwhile; ?>
