<?php
/**
 * Template Name: Homepage Malayerba
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'homepage'); ?>
<?php endwhile; ?>
