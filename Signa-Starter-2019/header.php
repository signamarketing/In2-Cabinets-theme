<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package start-theme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.png?1=; ?>">
  <link href="https://fonts.googleapis.com/css?family=Muli:300,300i,400,600i,700i,900i" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'start-theme' ); ?></a>

    <?php echo signa_custom_toolbar(); ?>

    <header class="site-header fixed <?php if(is_front_page()){ echo 'home-page'; } ?>">
    <div id="orange-top-bar"></div>
      <div id="top-nav" class="top-nav">
        <nav class="navbar" role="navigation">

          <div class="container">
            <div class="row row-navbar m-0" style="display:flex; justify-content:space-between; align-items:center;">

            <div class="navbar-header">
              <a class="brand" href="<?php echo home_url(); ?>">
                <img src="/wp-content/themes/Signa-Starter-2019/img/logo@2x.jpg">
              </a>
              <div id="neil-logo"><p class="">Featuring&nbsp;<span style="font-weight:900;">Original</b></span></p><img src="/wp-content/uploads/2019/03/Layer-31@2x.jpg" alt="neil's garage cabinets"></div>
            </div>

            <div class="nav-open float-right">
              <button id="open-nav" type="button" class="btn btn-navbar btn-menu">
                <span class="lines-circle">
                  <span class="line-1"></span>
                  <span class="line-2"></span>
                  <span class="line-3"></span>
                </span>
              </button>
            </div>

            <div class="nav-collapse collapse" style="width:auto;">
              <div class="nav-top">
                <?php
                  $args = array(
                    'menu' => 'main-menu',
                    'menu_class' => 'nav',
                    'menu_id' => 'navigation-top',
                    'container' => false,
                    'theme_location' => 'primary'
                  );
                  wp_nav_menu($args);
                ?>
                 <!-- FREE ESTIMATE -->
                
              </div>
            </div>
            <div class="nav-cta ">
              <div class="">
              <a class="p-2" href="48055555555" alt="call for free estimate">
                <p>FREE ESTIMATE</p>
                <span><?php the_field('navbar_phone_number', 'options')?></span></a>
              </div>
            </div>

            </div>

            

          </div>

          
          

        </nav>
      </div>
    </header>
    <div id="content" class="site-content">