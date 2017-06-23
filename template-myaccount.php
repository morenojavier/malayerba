<?php
/**
 * Template Name: My account
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'my-account'); ?>
<?php endwhile; ?>
