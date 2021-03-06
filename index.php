<!--Contenedor del loop del post-->

<div class="container blog-tammle">
	<div class="row">
		<div class="grid">
			<?php if (!have_posts()) : ?>
			  <div class="alert alert-warning">
			    <?php _e('Sorry, no results were found.', 'sage'); ?>
			  </div>
			  <?php get_search_form(); ?>
			<?php endif; ?>

			<?php while (have_posts()) : the_post(); ?>
			  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
			<?php endwhile; ?>
			
			<?php the_posts_navigation(); ?>
		</div>
	</div>
</div>