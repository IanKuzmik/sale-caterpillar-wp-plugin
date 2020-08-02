<?php
  /*
    @package tapRoot_apothecary
    ==========
      HEADER
    ==========
  */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

  <head>
   <title><?php bloginfo( 'name' ); wp_title(); ?></title>
   <meta name="description" content="<?php bloginfo( 'description' ); ?>">
   <meta charset="<?php bloginfo('charset'); ?>">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="profile" href="http://gmpg.org/xfn/11">
   <?php if( is_singular() && pings_open( get_queried_object() ) ): ?>
       <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
   <?php endif; ?>
   <?php wp_head(); ?>
  </head>

  <body <?php body_class(); ?> >

    <?php include('inc/sale-caterpillar.php'); ?>
    <header class="tr-apoth-header">
      <div class="container-fluid tr-apoth-header-container">
        <div class="row">

          <div class="col-2 my-auto">
            <div class="tr-apoth-logo-container">
              <img class="tr-apoth-logo" src="<?php echo get_template_directory_uri().'/img/xoch-logo.png'; ?>" alt="Xochis">
            </div>
          </div>

          <div class="col-6 my-auto">
            <nav class="navbar navbar-expand-lg tr-apoth-navbar">
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon tr-icon-menu-1 tr-apoth-nav-toggle-icon js-navMenuToggle"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav m-auto">
                  <?php
                  wp_nav_menu( array(
                    'menu'        => 'primary',
                    'link_before' => '<span class="nav-item nav-link tr-apoth-nav-item">',
                    'link_after'  => '</span>'
                  ) );
                  ?>
                </div>
              </div>
            </nav>
          </div>

          <div class="col-4 my-auto">
            <div class="tr-apoth-header-external-links text-right">
              <a class="tr-apoth-external-link tr-apoth-etsy-external-link" href="#">Shop Our Etsy</a>
              <a class="tr-apoth-external-link tr-icon-facebook" href="#"></a>
              <a class="tr-apoth-external-link tr-icon-twitter" href="#"></a>
              <a class="tr-apoth-external-link tr-icon-instagram" href="#"></a>
            </div>
          </div>

        </div>
      </div>
    </header>
