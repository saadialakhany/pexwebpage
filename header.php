<?php 
/** The Header File **/

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pex PhotoShop Website</title>
    <?php  wp_head(); ?>
  </head>

  <?php if (!is_front_page()): ?>
    <body>
<?php else: ?>
  <body id="home">
<?php endif; ?>

  <?php if (is_front_page()): ?>
    <div class="top-section">
    <?php else: ?>
  <div class="outer-container">
    <?php endif; ?>
      
    <div class="container">

  <!-- Mobile Menu -->
  <div class="mobile-menu" id="mobile-menu-modal">
    <div class="menu-backdrop"></div>
    <div class="close-btn">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        fill="#2e3b4e"
        viewBox="0 0 256 256"
      >
        <path
          d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z"
        ></path>
      </svg>
    </div>
 
    <?php

wp_nav_menu(
  array(
    'theme_location'    =>  'mobile', // as registered in functions.php
    'depth'             =>   1, // as we set up in our CSS
    'container'         =>  'nav', // html wrapper of the menu ul
    'container_class'   =>  'menu-box', // wrapper class
    'menu_class'        =>  'mobile-navbar', // classes of the menu ul tag
    'menu_id'           =>  'mobile-navbar',
    'fallback_cb'       =>  false // if primary menu is not created, then show nothing
  )
);

?>
  </div>
  <!--End of Mobile Menu-->

  <!--Search Modal for small screen-->
  <div class="search-modal" id="search-bar-modal">
    <div class="search-backdrop"></div>
    <div class="close-btn search-modal-close-btn">
      <svg
        xmlns="http://www.w3.org/2000/svg"
        width="20"
        height="20"
        fill="#2e3b4e"
        viewBox="0 0 256 256"
      >
        <path
          d="M208.49,191.51a12,12,0,0,1-17,17L128,145,64.49,208.49a12,12,0,0,1-17-17L111,128,47.51,64.49a12,12,0,0,1,17-17L128,111l63.51-63.52a12,12,0,0,1,17,17L145,128Z"
        ></path>
      </svg>
    </div>
    <div class="input-container" id="mobile-search-bar">
    <?php get_template_part('assets/template-parts/content','searchbar'); ?>
    </div>
  </div>
  <!--End of Search Modal -->

  <header class="main-header">
    <div class="logo-container">
      <a href="<?php echo esc_url(home_url('/')); ?>">
    <?php 
              $logo = get_theme_mod('theme_logo');
              if ($logo): ?>
                <img src="<?php echo esc_url($logo); ?>" alt="<?php bloginfo('name'); ?>" class="img-logo" />
            <?php else: ?>
                <img src="<?php echo get_template_directory_uri() ?>/assets/images/Logo.png" alt="Logo for the company" class="img-logo" />
            <?php endif; ?>
            </a>
    </div>

    <div class="mobile-icons">
      <div class="mobile-search">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="22"
          height="22"
          fill="#ffffff"
          viewBox="0 0 256 256"
          class="mobile-search-icon"
        >
          <path
            d="M232.49,215.51,185,168a92.12,92.12,0,1,0-17,17l47.53,47.54a12,12,0,0,0,17-17ZM44,112a68,68,0,1,1,68,68A68.07,68.07,0,0,1,44,112Z"
          ></path>
        </svg>
      </div>

      <div class="menu-btn">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="24"
          height="24"
          fill="#fff"
          viewBox="0 0 256 256"
          class="menu-btn-icon"
        >
          <path
            d="M228,128a12,12,0,0,1-12,12H40a12,12,0,0,1,0-24H216A12,12,0,0,1,228,128ZM40,76H216a12,12,0,0,0,0-24H40a12,12,0,0,0,0,24ZM216,180H40a12,12,0,0,0,0,24H216a12,12,0,0,0,0-24Z"
          ></path>
        </svg>
      </div>
    </div>

     <div class="navbar-container">
     <?php if (is_front_page()): ?>
    <div class="icon-active"></div>
      <?php endif; ?>
     
<?php
  wp_nav_menu(
    array(
      'theme_location'    =>  'primary', // as registered in functions.php
      'depth'             =>   1, // as we set up in our CSS
      'container'         =>  'nav', // html wrapper of the menu ul
      'container_class'   =>  'main-menu', // wrapper class
      'menu_class'        =>  'navbar', // classes of the menu ul tag
      'menu_id'           =>  'main-navbar',
      'fallback_cb'       =>  false // if primary menu is not created, then show nothing
    )
  );

?>

      <div class="input-container" id="main-search-bar">
      <?php get_template_part('assets/template-parts/content','searchbar'); ?>
      </div>
    </div>
  </header>

