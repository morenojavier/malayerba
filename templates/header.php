<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only"><?= __('Toggle navigation', 'sage'); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <nav class="collapse navbar-collapse" role="navigation">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-center']);
      endif;
      ?>
    </nav>
    <ul class="list-inline nav_sm">
      <li class="logo_mobile">
        
        <a href="http://malayerba.dev"><img src="http://malayerba.dev/wp-content/uploads/2017/06/malayerba_logo_negro_mobile.png" style="width: 180px; height: 18px;"  /></a>
      </li>
      <li class="malayerba_myaccount"><a href="<?php get_site_url(); ?>/my-account"><i class="fa fa-user-circle-o" aria-hidden="true"></i></a></li>
      <li><a href="<?php get_site_url(); ?>/cart"><i class="fa fa-shopping-bag" aria-hidden="true"></i></a></li>
      <?php if( WC()->cart->get_cart_contents_count() > 0){ ?>
      <sup>
        <a class="cart-contents" href="<?php echo wc_get_cart_url(); ?>" title="<?php _e( 'Ver tu bolsa' ); ?>"><?php echo sprintf ( _n( '%d', '%d', WC()->cart->get_cart_contents_count() ), WC()->cart->get_cart_contents_count() ); ?>
        </a>
      </sup>
      <? } ?>
    </ul>
  </div>
</header>