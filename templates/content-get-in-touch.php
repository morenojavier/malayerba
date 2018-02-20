<style>
.page-template-template-get-in-touch{
	background-image: url("<?php the_field('background-image'); ?>");
}
</style>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="contact_mailto">
				<a href="#">info@malayerba.com.mx</a>
				</div>
				<div class="contact_sm"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></div>
				<div class="contact_sm"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></div>
				<div class="contact_sm"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></div>
			</div>
			<div class="col-md-6">
				<?php echo do_shortcode('[contact-form-7 id="41" title="Contact form 1"]');?>				
			</div>
		</div><!-- .row end -->
	</div>
</div>