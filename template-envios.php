<?php
/**
 * Template Name: Envíos
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'envios'); ?>
<?php endwhile; ?>
