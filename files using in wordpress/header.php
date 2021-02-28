<!Doctype html>
<html <?php language_attributes(); ?>>

<head>
  <!-- Required meta tags -->
  <meta charset="<?php bloginfo('charset') ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <?php if(is_search()): ?>
    <meta name="robots" content="noindex, nofollow"/>
  <?php endif; ?>

  <!--CSS -->
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.min.css">
  

  <!--FONTS-->
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;1,400&display=swap"
    rel="stylesheet">

  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600&display=swap" rel="stylesheet">

  <title>Wyprawiam Dobre</title>

  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="description" content="Blog Kulinarny" />
  <meta name="keywords"
    content="przepis, blog kulinarny, kuchnia, śniadanie, obiad, kolacja, deser, drink, lunch, ugotuj, gotuj, wyprawiamdobre, wyprawiam dobre, wyprawiam, dobre, danie, dania, szybki obiad" />

  <link rel="pingback" href="<?php bloginfo('pingback_url') ?>">
  
  <?php wp_head() ?>
</head>

<body <?php body_class() ?>>
  <!--HEADER SECTION-->
  <header>
    <nav class="nav">
      <!--MOBILE HEADER-->
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img class="nav_mobileLogo" src="img/logo.png" alt="Wyprawiam Dobre logo">
      </a>
      <div class="nav_hamburger">
        <!-- for styles go to _header.scss -->
        <span></span>
      </div>
      <!--THE OVERLAY-->
      <div id="overlay_menu" class="nav_overlay">
        <div class="nav_overlay-white">
          <div class="nav_overlay-content">
            <a href="index.html" class="nav_overlay-content--link">główna</a>
            <a href="recipes.html" class="nav_overlay-content--link">przepisy</a>
            <a href="blog.html" class="nav_overlay-content--link">blog</a>
            <a href="about.html" class="nav_overlay-content--link">o nas</a>
            <a href="contact.html" class="nav_overlay-content--link">kontakt</a>
            <div class="nav_overlay-content--social">
              <a href="https://www.facebook.com/wyprawiamdobre" class="social_menu-link" target="_blank">
                <span class="facebook_circle-icon social_menu-link--icon"></span>
              </a>
              <a href="https://www.instagram.com/wyprawiamdobre/" class="social_menu-link" target="_blank">
                <span class="insta_circle-icon social_menu-link--icon"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
      <!--DESKTOP HEADER-->

      <?php wp_nav_menu(array(
        'name' => 'Menu Główne'
      )); ?>
    </nav>
   
  </header>