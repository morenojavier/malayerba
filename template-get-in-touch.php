<?php
/**
 * Template Name: Get in touch
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'get-in-touch'); ?>
<?php endwhile; ?>
