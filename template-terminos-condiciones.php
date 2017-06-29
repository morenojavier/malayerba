<?php
/**
 * Template Name: Términos y Condiciones
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'terminos-condiciones'); ?>
<?php endwhile; ?>
