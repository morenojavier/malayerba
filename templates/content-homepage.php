<style>
	.page-template-template-homepage{
		background-image: url("<?php the_post_thumbnail_url(); ?>");
	}
</style>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 homepage_title center">
			<div class="flex flex-column items-center justify-center homepage_homepage_height">
				<div id="flex-item">
					<?php if( get_field('principal_homepage') ): ?>
						<h1><?php the_field('principal_homepage'); ?></h1>
					<?php endif; ?>

					<?php if( get_field('subtitulo_homepage') ): ?>
						<h3><?php the_field('subtitulo_homepage'); ?></h3>
					<?php endif; ?>

					<?php if( get_field('boton_link') ): ?>
						<h5>
							<div class="homepage_btn">
								<a href="<?php the_field('boton_link'); ?>"><?php the_field('boton_texto'); ?></a>
							</div>
						</h5>
					<?php endif; ?>

				</div>
			</div>
		</div>
	</div>
</div>