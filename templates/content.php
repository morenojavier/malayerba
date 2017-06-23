<div class="grid-item">
	<article <?php post_class(); ?>>
		<img class="img-responsive" src="<?php the_post_thumbnail_url();?>" >

		<header>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			
		</header>
		<div class="entry-summary">
			<?php the_excerpt(); ?>
		</div>
		<div class="blog_btn_vermas">
			<a href="<?php the_permalink(); ?>">
				Ver más
			</a>
		</div>

	</article>
</div>