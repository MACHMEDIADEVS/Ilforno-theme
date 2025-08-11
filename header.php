<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<header id="main-header" class="navbar navbar-expand-lg fixed-top">
  <div class="container">
    <a class="navbar-brand text-light fw-bold" href="<?php echo esc_url( home_url( '/' ) ); ?>">
      <img src="<?php echo get_template_directory_uri(); ?>/img/logo3.png" alt="Il Forno Logo" class="logo-header">
    </a>

    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="offcanvas" data-bs-target="#mobileMenu" aria-controls="mobileMenu">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-end d-none d-lg-flex">
      <?php
      wp_nav_menu( array(
          'theme_location' => 'menu-principal',
          'container'      => false,
          'menu_class'     => 'navbar-nav gap-3',
          'fallback_cb'    => false
      ) );
      ?>
    </div>
  </div>

  <div class="offcanvas offcanvas-end text-bg-dark d-lg-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="mobileMenuLabel">Il Forno</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">
      <?php
      wp_nav_menu( array(
          'theme_location' => 'menu-principal',
          'container'      => false,
          'menu_class'     => 'navbar-nav gap-3',
          'fallback_cb'    => false
      ) );
      ?>
    </div>
  </div>
</header>