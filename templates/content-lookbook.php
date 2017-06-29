

<div class="container">
	<div class="row">
		<div class="col-md-12 center pd-bottom-50">
			<h1>Lookbook</h1>
		</div>
	</div><!-- .row end -->
	
	<div class="row center pd-bottom-90">
	<?php

	// check if the repeater field has rows of data
	if( have_rows('lookbook_item') ):

	 	// loop through the rows of data
	    while ( have_rows('lookbook_item') ) : the_row();

	        // display a sub field value
			
	        ?>
			
				<div class="col-md-6">
					<img src="<?php the_sub_field('lookbook_image');?>" alt="" class="img-responsive">
					<div><p><?php the_sub_field('lookbook_text'); ?></p></div>
				</div>

			
	        <?php
	    endwhile;
	else :
	    ?>
		<div class="col-md-12">No items in lookbook</div>
		<?php
	endif;
	?>
	</div>
</div>