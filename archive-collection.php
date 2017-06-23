

<section id="lookbook_wrapper" class="mg-y-80">
    <div class="container">
        

	   	<div class="row">
	    	<?php 
			$args2 = array (
				'post_type' => 'collection',
				'posts_per_page' => -1
			);
			$the_query2 = new WP_Query( $args2 ); 
			?>

			<?php if ( $the_query2->have_posts() ) : ?>
			    <div id="isotope-list">

				    <?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); 
					$termsArray2 = get_the_terms( $post->ID, "category" );  //Get the terms for this particular item
					
					?> 
	                
	                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
	                    

						<div class="lookbook_element">
		                    <div class="servicios_cursos_paquete_img center">
		                    	<div><a href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php the_post_thumbnail_url();?>" ></a></div>
		                    </div>
		                
		                    <div class="servicios_cursos_paquete_content">
	                            <div class="servicios_cursos_content_text">
			                        <h3 class="lookbook_title"><?php the_title(); ?></h3>
			                        <div class="lookbook_excerpt"><?php the_excerpt();?></div>
	                            </div>
	                            <div class="lookbook_btn">
		                        <a href="<?php the_permalink(); ?>">Look at this book</a>
		                        </div>
		                    </div>
		                </div>

	                </div>

	                

					<?php endwhile; ?>
			    </div> <!-- end isotope-list -->
			<?php endif; wp_reset_query();?> 

	   	</div>

	</div>
	
</section>