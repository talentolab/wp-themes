<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package talento
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no, target-densityDpi=device-dpi" />

  <link rel="profile" href="https://gmpg.org/xfn/11">

  <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/favicon-16x16.png" />
  <link rel="manifest" href="<?= get_template_directory_uri(); ?>/img/icons/favicon/site.webmanifest" />



  <?php wp_head(); ?>
  
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/swiper/swiper-bundle.min.css" defer />
  <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/libs/lity/dist/lity.css" defer />
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>

  <nav class="top-navbar shadow-0 <?php if (!is_front_page()) echo 'fixed-nav'; ?>">
    <div class="container-large full-height">
      <a class="logo-link" href="<?php bloginfo( 'url' ); ?>" title="<?php bloginfo( 'name' ); ?>">
        <?php
          $logo = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $logo , 'full' );
          $image_url = $image[0];
        ?>

        <div class="nav-logo float-left <?php if (!is_front_page()) echo 'fixed-logo'; ?>"></div>
      </a>


      <ul class="float-right">
        <li>
          <a href="<?php bloginfo( 'url' ); ?>" class="js-splash-text text-middle text-center">Home</a>
        </li>

        <li>
          <a href="<?php bloginfo( 'url' ); ?>/portfolio" class="js-splash-text text-middle text-center">Portfólio</a>
        </li>

        <li>
          <a href="<?php bloginfo( 'url' ); ?>/sobre" class="js-splash-text text-middle text-center">Quem somos</a>
        </li>

        <li>
          <a href="<?php bloginfo( 'url' ); ?>/contato" class="js-splash-text text-middle text-center">Contato</a>
        </li>

        <li class="nav-btn">
          <a href="#/orcamento/" class="dropdown-trigger js-splash-text text-middle text-center white-text" data-target="main-menu-dropdown">Faça um orçamento</a>
        </li>

        <li class="display-flex margin-left-medium">
          <a href="#" class="js-splash-text text-center padding-x-smaller text-medium tooltipped" data-tooltip="Facebook">
            <i class="fab fa-facebook"></i>
          </a>

          <a href="#" class="js-splash-text text-center padding-x-smaller text-medium tooltipped" data-tooltip="Instagram">
            <i class="fab fa-instagram"></i>
          </a>

          <a href="#" class="js-splash-text text-center padding-x-smaller text-medium tooltipped" data-tooltip="LinkedIn">
            <i class="fab fa-linkedin"></i>
          </a>

          <a href="#" class="js-splash-text text-center padding-x-smaller text-medium tooltipped" data-tooltip="Behance">
            <i class="fab fa-behance"></i>
          </a>
        </li>
      </ul>

    </div>
  </nav>


  <!-- Dropdown Structure -->
  <div class="js-main-menu-dropdown">
    <ul id="main-menu-dropdown" class="dropdown-content margin-top-smaller">
      <li>
        <a href="#!">Design de marca</a>
      </li>
      
      <li>
        <a href="#!">Criação de site</a>
      </li>
      
      <li>
        <a href="#!">Social media</a>
      </li>
    </ul>
  </div>


  <ul id="slide-out" class="sidenav">
    <li>
      <a href="<?php bloginfo( 'url' ); ?>" class="text-middle">Home</a>
    </li>

    <li>
      <a href="<?php bloginfo( 'url' ); ?>/portfolio" class="text-middle">Portfólio</a>
    </li>

    <li>
      <a href="<?php bloginfo( 'url' ); ?>/sobre" class="text-middle">Quem somos</a>
    </li>

    <li>
      <a href="<?php bloginfo( 'url' ); ?>/contato" class="text-middle">Contato</a>
    </li>

    <li class="button-bg">
      <a href="#/orcamento/" class="dropdown-trigger text-middle white-text" data-target="main-menu-dropdown">Faça um orçamento</a>
    </li>

    <li class="display-flex">
      <a href="#" class="white text-center margin-right-smaller padding-right-smaller text-large tooltipped" data-tooltip="Facebook">
        <i class="fab fa-facebook no-margin"></i>
      </a>

      <a href="#" class="white text-center margin-right-smaller no-padding-left padding-right-smaller text-large tooltipped" data-tooltip="Instagram">
        <i class="fab fa-instagram no-margin"></i>
      </a>

      <a href="#" class="white text-center margin-right-smaller no-padding-left padding-right-smaller text-large tooltipped" data-tooltip="LinkedIn">
        <i class="fab fa-linkedin no-margin"></i>
      </a>

      <a href="#" class="white text-center margin-right-smaller no-padding-left text-large tooltipped" data-tooltip="Behance">
        <i class="fab fa-behance no-margin"></i>
      </a>
    </li>
  </ul>


  <a href="#" data-target="slide-out" class="mobile-menu-btn sidenav-trigger waves-effect">
    <i class="fas fa-bars"></i>
  </a>

  <noscript id="js_disabled_message">
    <div class="fullscreen gradient-bg" style="z-index: 1000">
      <div class="center padding-medium text-center">
        Esse site requer o JavaScript habilitado para funcionar.
        <br>
        <a href="https://www.enable-javascript.com/pt/" target="_blank" rel="nofollow noreferrer">Como habilitar?</a>
      </div>
    </div>
    <script>
    document.querySelector('#js_disabled_message').style.display = 'none';
    </script>
  </noscript>
