<!--RECIPES SECTION-->
<section class="cards_section">
  <div class="section_title">
    <span class="section_title-span">Nasze</span>
    <h2 class="section_title-head">Przepisy</h2>
    <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg"
      alt="ikonka gwiazdek">
  </div>


  <div class="cards">

    <?php 
      $args = array(
        'posts_per_page' => 3,
        'post_status' => 'publish',
        'post_type' => 'recipes',
        'orderby' => 'post_date',
    );
    query_posts( $args );
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>

    <!--RECIPE CARD-->
    <div id="recipes-<?php the_ID(); ?>" <?php post_class('card_box'); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card_box-img']); ?>
      </a>

      <h5 class="card_box-title"><?php the_title(); ?></h5>
      <!-- dish category -->
      <div class="card_box-icons">
        <div>
          <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_chef.svg"
            alt="kategoria">
          <span class="card_box-iconTxt"><?php printDishCategories($post->ID) ?></span>
        </div>
        <!-- preparation time -->
        <div>
          <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_clock.svg" alt="czas">
          <span class="card_box-iconTxt"><?php echo get_post_meta($post->ID, 'czas', true); ?></span>
        </div>
        <!-- calories -->
        <div>
          <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_calories.svg"
            alt="ilość osób">
          <span class="card_box-iconTxt"><?php echo get_post_meta($post->ID, 'kalorie', true); ?></span>
        </div>
      </div>
      <p class="card_box-text"><?php the_excerpt_max_charlength(100); ?></p>

      <a href="<?php the_permalink(); ?>" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
          aria-hidden="true">&#8594</i></a>
    </div>
    <!--RECIPE CARD THE END-->

    <!--THE END of wordpress loop-->
    <?php endwhile; ?>
    <?php endif; ?>

    <a href="recipes.html" class="cards-button">
      zobacz wszystkie
    </a>
  </div>

  <img class="leaf-left" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_left.svg" alt="leaf icon">
  <img class="leaf-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_right.svg" alt="leaf icon">
</section>

<!--NEWSLETTER SECTION-->
<section id="newsletter" class="section">
  <div class="infoBox infoBox_newsLetter">
    <div class="infoBox_top">
      <div class="section_title">
        <span class="section_title-span">Załap się na</span>
        <h1 class="section_title-head">Małe co nieco!</h1>
      </div>

      <!-- <form class="input_container" method="" action="">
        <label for="" class="input_container-label"> Dziękujemy, że jesteś tu razem z nami!</label>
        <fieldset>
          <input class="input_container-field anime_mail" type="email" id="email" name="email"
            placeholder="Twój adres email">
          <button class="input_container-btn anime_mail-btn">
            <img class="input_container-btn--img" src="<php echo get_stylesheet_directory_uri() ?>/img/email.png"
              alt="ikonka email">
            <span class="input_container-btn--text anime_mail-txt">wyślij</span>
          </button>
        </fieldset>
      </form> -->
      <!-- <p class="infoBox_top-description">Złap świeże inspiracje do swoich posiłków!</br>Jeśli jesteś głodny
        apetycznych
        newsów, zostaw nam swojego maila a będziesz na bieżąco z naszymi nowinkami.
        </br><b>Wyprawiaj Dobre</b> dla siebie i swoich bliskich! :)</p> -->
      <p class="input_container-label"> Dziękujemy, że jesteś tu razem z nami!</p>
      <p class="infoBox_top-description">
        Już nie długo ruszamy z naszym newsletterem!
        </br>Tymczasem zapraszamy do zapoznania się z naszą stroną. Wybierz kategorię i zobacz co dla Ciebie przygotowaliśmy :) Znajdziesz tu pyszne przepisy, przydatne informacje oraz ciekawe artykuły!
        <br /><strong>Wyprawiaj Dobre</strong> dla siebie i swoich bliskich! :)</p>
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
    <div class="infoBox_bottom">
      <img class="infoBox_bottom-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/orange.svg"
        alt="ikonka pomarańczy">
    </div>
  </div>
  <div class="patternBox patternNewsletter">
    <div class="patternBox_white">
      <div class="patternBox_white-items">
        <!-- <img class="image" src="<php echo get_stylesheet_directory_uri() ?>/img/photos/news.jpg"
          alt="newsletter"> -->
        <img class="image" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/newsletter.svg"
          alt="obrazek koperty z przepisami">
        <img class="stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg" alt="ikonka gwiazdek">
        <h4 class="blogTitle">newsletter</h4>
      </div>
    </div>
  </div>
</section>