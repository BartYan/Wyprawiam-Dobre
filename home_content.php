<?php
/** 
* Template Name: Strona Główna
*/
?>
<?php get_header(); ?>

<!--WELCOME SECTION-->
<section class="section">

  <div class="patternBox">
    <div class="patternBox_white">
      <div class="patternBox_white-items">
        <img class="image" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/4.jpg" alt="Wyprawiam Dobre logo">
        <img class="stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg" alt="ikonka gwiazdek">
        <h4 class="blogTitle">blog gotujący</h4>
      </div>
    </div>
  </div>

  <div class="infoBox">
    <div class="infoBox_top">
      <div class="section_title">
        <span class="section_title-span">Z czym to się je?</span>
        <h1 class="section_title-head">Wyprawiam Dobre</h1>
      </div>

      <label for="search" class="input_container-label"> Wpisz frazę która Cię interesuje:</label>
      <?php get_search_form(); ?>

      <p class="infoBox_top-description">
        Wybierz kategorię i zobacz co dla Ciebie przygotowaliśmy :)
        <br />Znajdziesz tu pyszne przepisy, przydatne informacje oraz ciekawe artykuły!
      </p>

      <ul class="infoBox_top-subMenu">
        <li class="infoBox_top-subMenu--item">
          <a class="infoBox_top-subMenu--link" href="recipes.html">
            <img class="subMenu-starIcon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_orange_star.svg" alt="">
            <p class="infoBox_top-subMenu--txt">przepisy
              <span class="infoBox_top-subMenu--txtSpan">
                - Kliknij i zobacz nasze przepisy
              </span></p>
          </a>
        </li>
        <li class="infoBox_top-subMenu--item">
          <a class="infoBox_top-subMenu--link" href="blog.html">
            <img class="subMenu-starIcon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_blue_star.svg" alt="">
            <p class="infoBox_top-subMenu--txt">Blog
              <span class="infoBox_top-subMenu--txtSpan">
                - Zerknij na bloga
              </span></p>
          </a>
        </li>
      </ul>
    </div>

    <!--Carousel infoBox-->
    <div class="carousel">
      <button id="prevBtn" class="carousel_btn">
        &#8592
      </button>
      <span>Jeszcze gorące</span>
      <button id="nextBtn" class="carousel_btn">&#8594
      </button>
      <div class="carousel_slider">
        <!--clone of last slide (third)-->
        <a href="#" class="carousel_slider-box" id="lastCLone">
          <img class="carousel_slider-box--img"
            src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg"
            alt="Naleśniki Pomarańczowe">
          <div class="carousel_slider-box--txt">
            <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
            <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
            <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </a>
        <!--first slide-->
        <a href="#" class="carousel_slider-box">
          <img class="carousel_slider-box--img"
            src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg"
            alt="Naleśniki Pomarańczowe">
          <div class="carousel_slider-box--txt">
            <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
            <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
            <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </a>
        <!--second slide-->
        <a href="#" class="carousel_slider-box">
          <img class="carousel_slider-box--img"
            src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg"
            alt="Naleśniki Pomarańczowe">
          <div class="carousel_slider-box--txt">
            <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
            <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
            <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
          </div>
        </a>
        <!--third slide-->
        <a href="#" class="carousel_slider-box">
          <img class="carousel_slider-box--img"
            src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg"
            alt="Naleśniki Pomarańczowe">
          <div class="carousel_slider-box--txt">
            <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
            <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
            <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </a>
        <!--clone of first slide-->
        <a href="#" class="carousel_slider-box" id="firstCLone">
          <img class="carousel_slider-box--img"
            src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg"
            alt="Naleśniki Pomarańczowe">
          <div class="carousel_slider-box--txt">
            <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
            <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
            <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
          </div>
        </a>
      </div>
    </div>
    <!--Carousel infoBox THE END-->

    <div class="infoBox_bottom">
      <ul class="infoBox_bottom_social">
        <li class="infoBox_bottom_social-item">
          <a class="infoBox_bottom_social-link" href="https://www.facebook.com/wyprawiamdobre" target="_blank">
            <img class="infoBox_bottom_social-facebook"
              src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook_menu.svg" alt="">
          </a>
        </li>
        <li class="infoBox_bottom_social-item">
          <a class="infoBox_bottom_social-link" href="https://www.instagram.com/wyprawiamdobre/" target="_blank">
            <img class="infoBox_bottom_social-insta"
              src="<?php echo get_stylesheet_directory_uri() ?>/img/instagram_menu.svg" alt="">
          </a>
        </li>
        <li class="infoBox_bottom_social-item">
          <p class="infoBox_bottom_social-txt">Śledź nas na portalach społecznościowych!</p>
        </li>
      </ul>
    </div>
  </div>
</section>

<?php include("sections.php"); ?>

<?php get_footer(); ?>