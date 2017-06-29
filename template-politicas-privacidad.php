<?php
/**
 * Template Name: Políticas de Privacidad
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'politicas-privacidad'); ?>
<?php endwhile; ?>
