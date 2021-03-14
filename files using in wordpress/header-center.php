<!Doctype html>
<html lang="pl">

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
        <nav>
            <!--MOBILE HEADER-->
            <a href="index.html" class="">
                <img class="nav_mobileLogo" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="Wyprawiam Dobre logo">
            </a>
            <div class="nav_hamburger">
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
                            <a href="https://www.instagram.com/wyprawiamdobre/" class="social_menu-link"
                                target="_blank">
                                <span class="insta_circle-icon social_menu-link--icon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!--DESKTOP CENTER MENU FULL WIDTH-->
            <div class="menuCenter">
                <div class="menuCenter_logo">
                    <a href="index.html" class="menuCenter_img-link">
                        <img class="menuCenter_logo-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="Wyprawiam Dobre logo">
                    </a>
                </div>
                <ul class="menuCenter_list">
                    <li class="menuCenter_list-item">
                        <a class="menuCenter_list-item--link" href="index.html">główna</a>
                    </li>
                    <li class="menuCenter_list-item">
                        <a class="menuCenter_list-item--link" href="recipes.html">przepisy</a>
                    </li>
                    <li class="menuCenter_list-item">
                        <a class="menuCenter_list-item--link" href="blog.html">blog</a>
                    </li>
                    <li class="menuCenter_list-item">
                        <a class="menuCenter_list-item--link" href="about.html">o nas</a>
                    </li>
                    <li class="menuCenter_list-item">
                        <a class="menuCenter_list-item--link" href="contact.html">kontakt</a>
                    </li>
                </ul>
                <div class="menuCenter_social">
                    <a href="https://www.facebook.com/wyprawiamdobre" class="menuCenter_img-link" target="_blank">
                        <img class="menuCenter_social-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook_menu.svg" alt="facebook logo">
                    </a>
                    <a href="https://www.instagram.com/wyprawiamdobre/" class="menuCenter_img-link" target="_blank">
                        <img class="menuCenter_social-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/instagram_menu.svg" alt="instagram logo">
                    </a>
                </div>
            </div>
        </nav>
        
    </header>