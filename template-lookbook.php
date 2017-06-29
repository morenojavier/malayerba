<?php
/**
 * Template Name: Lookbook
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', 'lookbook'); ?>
<?php endwhile; ?>
