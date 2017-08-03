<header class="banner navbar navbar-default navbar-static-top" role="banner">
  <div class="container center">
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
      // if (has_nav_menu('primary_navigation')) :
      //   wp_nav_menu(['theme_location' => 'primary_navigation', 'walker' => new wp_bootstrap_navwalker(), 'menu_class' => 'nav navbar-nav navbar-center']);
      // endif;

      ?>

      <div class="menu-principal-container"><ul id="menu-principal" class="nav navbar-nav navbar-center"><li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-145"><a title="Lookbook" href="https://malayerba.mx/lookbook/">Lookbook</a></li>
      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-45" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4 current_page_item menu-item-45 active"><a title="Inicio" href="https://malayerba.mx/"><img src="<?php echo get_template_directory_uri(); ?>/dist/images/logo.png" alt=""></a></li>
      <li itemscope="itemscope" itemtype="https://www.schema.org/SiteNavigationElement" id="menu-item-17" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-17"><a title="Shop" href="https://malayerba.mx/shop/">Shop</a></li>
      </ul></div>

    </nav>
    <ul class="list-inline nav_sm">
      <li class="logo_mobile">
        
        <a href="https://malayerba.mx"><img src="https://malayerba.mx/wp-content/uploads/2017/06/malayerba_logo_negro_mobile.png" style="width: 180px; height: 18px;"  /></a>
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