<div class="container blog-tammle-single">
  <?php while (have_posts()) : the_post(); ?>
    <article <?php post_class(); ?>>

      <div class="row post_title_picture">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"> </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">     
            <h1 class="entry-title lookbook_title"><?php the_title(); ?></h1>
            <?php if ( has_post_thumbnail() ) {
              ?> <img class="img-responsive" src="<?php the_post_thumbnail_url(); ?>" alt="">
            <?php } ?>
           
            <p><?php the_excerpt(); ?></p>
            <hr class="post_hr">
            
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"> </div>
      </div>


      <div class="row">
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"> </div>
        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 center">     
          
            <?php the_content(); ?>
          
        </div>
        <div class="col-lg-2 col-md-2 col-sm-12 col-xs-12"> </div>

        

      </div>

    

    </article>
  <?php endwhile; ?>
</div>
