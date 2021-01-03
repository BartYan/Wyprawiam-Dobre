<?php get_header(); ?>

  <!--WELCOME SECTION-->
  <section class="section">

    <div class="patternBox">
      <div class="patternBox_white">
        <div class="patternBox_white-items">
          <img class="image" src="<?php echo get_stylesheet_directory_uri() ?>/img/logo.png" alt="Wyprawiam Dobre logo">
          <img class="stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/stars.png" alt="ikonka gwiazdek">
          <h4 class="blogTitle">blog kulinarny</h4>
        </div>
      </div>
    </div>

    <div class="infoBox">
      <div class="infoBox_top">
        <div class="section_title">
          <span class="section_title-span">Z czym to się je?</span>
          <h1 class="section_title-head">Wyprawiam Dobre</h1>
        </div>

        <form class="input_container search" method="get" action="">
          <label for="search" class="input_container-label"> Wpisz frazę która Cię interesuje:</label>
          <fieldset>
            <input class="input_container-field anime_input" type="search" id="search" name="search"
              placeholder="np. sałatka">
            <button class="input_container-btn anime_input-btn">
              <img class="input_container-btn--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/loupe.png" alt="ikona lupki">
              <span class="input_container-btn--text anime_input-text ">szukaj</span>
            </button>
          </fieldset>
        </form>

        <p class="infoBox_top-description">Lub wybierz
          kategorię i zobacz co dla Ciebie przygotowaliśmy :)
          Znajdziesz tu pyszne przepisy, przydatne informacje oraz ciekawe artykuły!</p>

        <ul class="infoBox_top-subMenu">
          <li class="infoBox_top-subMenu--item">
            <a class="infoBox_top-subMenu--link" href="recipes.html">
              <img class="subMenu-starIcon" src="<?php echo get_stylesheet_directory_uri() ?>/img/orange-star.png" alt="">
              <p class="infoBox_top-subMenu--txt">przepisy
                <span class="infoBox_top-subMenu--txtSpan">
                  - Kliknij i zobacz nasze przepisy
                </span></p>
            </a>
          </li>
          <li class="infoBox_top-subMenu--item">
            <a class="infoBox_top-subMenu--link" href="blog.html">
              <img class="subMenu-starIcon" src="<?php echo get_stylesheet_directory_uri() ?>/img/blue-star.png" alt="">
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
            <img class="carousel_slider-box--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg" alt="Naleśniki Pomarańczowe">
            <div class="carousel_slider-box--txt">
              <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
              <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
              <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </a>
          <!--first slide-->
          <a href="#" class="carousel_slider-box">
            <img class="carousel_slider-box--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg" alt="Naleśniki Pomarańczowe">
            <div class="carousel_slider-box--txt">
              <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
              <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
              <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </a>
          <!--second slide-->
          <a href="#" class="carousel_slider-box">
            <img class="carousel_slider-box--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg" alt="Naleśniki Pomarańczowe">
            <div class="carousel_slider-box--txt">
              <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
              <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
              <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. </p>
            </div>
          </a>
          <!--third slide-->
          <a href="#" class="carousel_slider-box">
            <img class="carousel_slider-box--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg" alt="Naleśniki Pomarańczowe">
            <div class="carousel_slider-box--txt">
              <h5 class="carosuel-cat"><span>&#x2014;</span>przepis<span>&#x2014;</span></h5>
              <h4 class="carosuel-title">Naleśniki Pomarańczowe</h4>
              <p class="carosuel-txt">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
          </a>
          <!--clone of first slide-->
          <a href="#" class="carousel_slider-box" id="firstCLone">
            <img class="carousel_slider-box--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg" alt="Naleśniki Pomarańczowe">
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
              <img class="infoBox_bottom_social-facebook" src="<?php echo get_stylesheet_directory_uri() ?>/img/facebook_menu.svg" alt="">
            </a>
          </li>
          <li class="infoBox_bottom_social-item">
            <a class="infoBox_bottom_social-link" href="https://www.instagram.com/wyprawiamdobre/" target="_blank">
              <img class="infoBox_bottom_social-insta" src="<?php echo get_stylesheet_directory_uri() ?>/img/instagram_menu.svg" alt="">
            </a>
          </li>
          <li class="infoBox_bottom_social-item">
            <p class="infoBox_bottom_social-txt">Dowiedz się więcej na portalach społecznościowych!</p>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!--RECIPES SECTION-->
  <section class="cards_section">
    <div class="section_title">
      <span class="section_title-span">Nasze</span>
      <h2 class="section_title-head">Przepisy</h2>
      <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/stars.png" alt="ikonka gwiazdek">
    </div>
    <div class="cards">
      <!--CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg" alt="Naleśniki Pomarańczowe">

        <h5 class="card_box-title">Naleśniki Pomarańczowe</h5>
        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png" alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png" alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>

      <!--CARD THE END-->
      <!--CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/egg.jpg" alt="jajko w koszulce">

        <h5 class="card_box-title">Jajko w Koszulce</h5>
        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png" alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png" alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--CARD THE END-->
      <!--CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg" alt="Owsianka z Owocami">

        <h5 class="card_box-title">Owsianka z Owocami</h5>
        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png" alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png" alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--CARD THE END-->

      <a href="recipes.html" class="cards-button">
        wszystkie przepisy
      </a>
    </div>

    <img class="leaf-left" src="<?php echo get_stylesheet_directory_uri() ?>/img/leaf-left.png" alt="leaf icon">
    <img class="leaf-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/leaf-right.png" alt="leaf icon">
  </section>

  <!--NEWSLETTER SECTION-->
  <section class="section">
    <div class="infoBox infoBox_newsLetter">
      <div class="infoBox_top">
        <div class="section_title">
          <span class="section_title-span">Załap się na</span>
          <h1 class="section_title-head">Małe co nieco!</h1>
        </div>

        <form class="input_container" method="" action="">
          <label for="" class="input_container-label"> Dziękujemy, że jesteś tu razem z nami!</label>
          <fieldset>
            <input class="input_container-field anime_mail" type="email" id="email" name="email"
              placeholder="Twój adres email">
            <button class="input_container-btn anime_mail-btn">
              <img class="input_container-btn--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/email.png" alt="ikonka email">
              <span class="input_container-btn--text anime_mail-txt">wyślij</span>
            </button>
          </fieldset>
        </form>

        <p class="infoBox_top-description">Złap świeże inspiracje do swoich posiłków!</br>Jeśli jesteś głodny
          apetycznych
          newsów, zostaw nam swojego maila a będziesz na bieżąco z naszymi nowinkami.
          </br><b>Wyprawiaj Dobre</b> dla siebie i swoich bliskich! :)</p>
      </div>
      <div class="infoBox_bottom">
        <img class="infoBox_bottom-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/orange.png" alt="ikonka pomarańczy">
      </div>
    </div>
    <div class="patternBox patternNewsletter">
      <div class="patternBox_white">
        <div class="patternBox_white-items">
          <img class="image" src="<?php echo get_stylesheet_directory_uri() ?>/img/newsletter.png" alt="obrazek koperty z przepisami">
          <img class="stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/stars.png" alt="ikonka gwiazdek">
          <h4 class="blogTitle">newsletter</h4>
        </div>
      </div>
    </div>
  </section>

  <?php get_footer(); ?>