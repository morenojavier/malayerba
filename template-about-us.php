<?php
/**
 * Template Name: About us
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'about-us'); ?>
<?php endwhile; ?>
