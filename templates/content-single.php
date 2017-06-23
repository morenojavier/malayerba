<div class="container blog-tammle-single">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>

      <div class="row post_title_picture">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 post_header">     
          
            <h1 class="entry-title single_title"><?php the_title(); ?></h1>
            <hr class="post_hr">
            <p><?php the_excerpt(); ?></p>
            
            
            <?php the_date('j - m - Y', '<div>', '</div>'); ?>
            <div class="blog_autor_creditos">Por: <?php the_author(); ?></div>

            <div class="single_autor_sm">
                <?php if(get_field('facebook_link'))
                { echo '<div class="single_autor_facebook">
                  <a href="'. get_field('facebook_link') .'" target="_blank"><i class="fa fa-facebook-official" aria-hidden="true"></i>  @' . get_field('facebook_autor') . '</a></div>';} 
                ?>

                <?php if(get_field('twitter_link'))
                { echo '<div class="single_autor_twitter">
                  <a href="'. get_field('twitter_link') .'" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>  @' . get_field('twitter_autor') . '</a></div>';} 
                ?>

                <?php if(get_field('instagram_link'))
                { echo '<div class="single_autor_instagram">
                  <a href="'. get_field('instagram_link') .'" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>  @' . get_field('instagram_autor') . '</a></div>';} 
                ?>

            </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">     
          
          <?php if ( has_post_thumbnail() ) {
            ?> <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
          <?php } ?>

          
          <?php
            if(get_field('credit-photo'))
            { ?>
             <div class="creditos_foto"> Fotografía por: <a href="<?php the_field('credit-link'); ?>"> <? the_field('credit-photo') ?> </a></div>
            <?php 
            }
          ?>

          <p><?php the_field('field_name'); ?></p>
          
          
        </div>

      </div>


      <div class="row post_text_relatedposts">

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">     
          <div class="post_text">
            <?php the_content(); ?>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">     
          <div>
            <div class="blog_relatedposts">
              
              <div style="width: 100%; position: relative; margin: 0 0 40px 0;float: right;height: 1px;"><hr style="width: 180px; float: right; color: #cacaca; margin: 0 0 37px 0;"></div>

              <h3>Notas relacionadas</h3>
              <?php
                  $orig_post = $post;
                  global $post;
                  $tags = wp_get_post_tags($post->ID);
           
                  if ($tags) {
                      $tag_ids = array();
                  foreach($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                      $args=array(
                          'tag__in' => $tag_ids,
                          'post__not_in' => array($post->ID),
                          'posts_per_page'=>2, // Number of related posts to display.
                          'caller_get_posts'=>1
                      );
           
                  $my_query = new wp_query( $args );
           
                  while( $my_query->have_posts() ) {
                      $my_query->the_post();
                  ?>
           
                  <div class="blog_relatedthumb">
                      <div class="blog_thumb_image"><?php the_post_thumbnail(array(277,277)); ?></div>

                      <div class="blog_thumb_image_mobile"><img src="<?php the_post_thumbnail_url(); ?>" class="img-responsive" alt=""></div>

                      <div class="blog_related_content_text">
                        <div class="blog_related_title"><h4><?php the_title(); ?></h4></div>
                        <div class="blog_related_text"><?php the_excerpt(); ?></div>
                        <div class="blog_related_link"><a rel="external" href="<? the_permalink()?>">Ver más <span>></span></a></div>
                      </div>
                  </div>
           
                  <?php }
                  }
                  $post = $orig_post;
                  wp_reset_query();
                  ?>
            </div>

          </div>

          <div class="blog_single_newsletter_singlepost">
            <div class="blog_single_newsletter">
              <hr style="width: 180px; float: right; color: #cacaca; margin: 0 0 37px 0;">
              <h3>TAMMLÉ NEWSLETTER</h3>        

              <form data-toggle="validator" role="form">
                

                <div  class="form-group">
                  <button type="submit" class="btn" id="btn_newsletter_single">OK</button>
                </div>
                
                <div class="form-group">
                  <input type="email" class="form-control" id="inputEmail_single" placeholder="Tú correo" data-error="Bruh, that email address is invalid" style="max-width:200px; " required>
                  <div class="help-block with-errors"></div>
                </div>

                <div class="form-group">
                  <div style="max-width:330px; text-align: right; " class="checkbox">
                    <div id="blog_single_checkbox">
                      <input type="checkbox" id="terms" data-error="Before you wreck yourself" required>
                      He leído y acepto las <a href="#">Condiciones de uso</a><br>así como la <a href="#">Política de protección de datos</a>
                    </div>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                
              </form>
            </div>
          </div>

        </div>

      </div>

    

    </article>
  <?php endwhile; ?>
</div>
