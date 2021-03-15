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
      <a class="logo-link" href="<?php bloginfo( 'siteurl' ); ?>" title="<?php bloginfo( 'name' ); ?>">
        <?php
          $logo = get_theme_mod( 'custom_logo' );
          $image = wp_get_attachment_image_src( $logo , 'full' );
          $image_url = $image[0];
        ?>

        <div class="nav-logo float-left <?php if (!is_front_page()) echo 'fixed-logo'; ?>"></div>
      </a>


      <ul class="float-right">
        <li>
          <a href="<?php bloginfo( 'siteurl' ); ?>" class="js-splash-text text-middle text-center">Home</a>
        </li>

        <li>
          <a href="<?php bloginfo( 'siteurl' ); ?>/portfolio" class="js-splash-text text-middle text-center">Portfólio</a>
        </li>

        <li>
          <a href="<?php bloginfo( 'siteurl' ); ?>/sobre" class="js-splash-text text-middle text-center">Quem somos</a>
        </li>

        <li>
          <a href="<?php bloginfo( 'siteurl' ); ?>/404" class="js-splash-text text-middle text-center">Contato</a>
        </li>

        <li class="nav-btn">
          <a href="<?php bloginfo( 'siteurl' ); ?>/contato" class="js-splash-text text-middle text-center white-text">Faça um orçamento</a>
        </li>
      </ul>
    </div>
  </nav>



  <ul id="slide-out" class="sidenav">
    <li><a href="#!" tabindex="-1"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!" tabindex="-1">Second Link</a></li>
    <li>
      <div class="divider"></div>
    </li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!" tabindex="-1">Third Link With Waves</a></li>
  </ul>

  <a href="#" data-target="slide-out" class="mobile-menu-btn sidenav-trigger"><i class="material-icons">menu</i></a>

  <div id="js_disabled_message" class="fullscreen gradient-bg" style="z-index: 1000">
    <div class="center padding-medium text-center">
      Esse site requer o JavaScript habilitado para funcionar.
      <br>
      <a href="https://www.enable-javascript.com/pt/" target="_blank" rel="nofollow noreferrer">Como habilitar?</a>
    </div>
  </div>
  <script>
  document.getElementById('js_disabled_message').style.display = 'none';
  </script>
