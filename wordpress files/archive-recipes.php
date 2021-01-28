<?php get_header('center'); ?>

<!--RECIPES SECTION-->
<section class="cards_section">
  <div class="section_title">
    <span class="section_title-span">Nasze</span>
    <h2 class="section_title-head">Przepisy</h2>
    <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/stars.png"
      alt="ikonka gwiazdek">
  </div>

  <div class="infoBox_leftCenter">
    <form class="input_container search" method="get" action="">
      <label for="search" class="input_container-label label_leftCenter"> Wpisz frazę która Cię
        interesuje:</label>
      <fieldset class="fieldset_leftCenter">
        <input class="input_container-field anime_input" type="search" id="search" name="search"
          placeholder="np. sałatka">
        <button class="input_container-btn anime_input-btn">
          <img class="input_container-btn--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/loupe.png"
            alt="ikona lupki">
          <span class="input_container-btn--text anime_input-text ">szukaj</span>
      </fieldset>
    </form>
    <p class="description_leftCenter">
      Nasze propozycje:
    </p>
  </div>
  <!--BOTTOM LEAFs DECORATION-->
  <img class="leaf-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/leaf-right.png" alt="leaf icon">

  <!--RECIPES FILTER-->
  <!--recipes_filters BUTTONS-->
  <div id="recipes_filters">
    <button id="filter_all" class="recipe_filter tag--active">Wszystkie</button>
    <button id="filter_breakfast" class="recipe_filter">Śniadania</button>
    <button id="filter_dinner" class="recipe_filter">Obiady</button>
    <button id="filter_starter" class="recipe_filter">Przystawki</button>
    <button id="filter_soup" class="recipe_filter">Zupy</button>
    <button id="filter_main" class="recipe_filter">Główne</button>
    <button id="filter_desser" class="recipe_filter">Deser</button>
    <button id="filter_salad" class="recipe_filter">Sałatki</button>
    <button id="filter_supper" class="recipe_filter">Kolacje</button>
    <button id="filter_wege" class="recipe_filter">Wege</button>
    <button id="filter_vegan" class="recipe_filter">Vegan</button>

    <p id="recipes_filters-message">Przepraszamy, filtry nie będą działać bez włączonej obsługi JavaScript.</br>
      Wciąż możesz wybrać przepis bez sortowania!</p>
  </div>
  <!--recipes_filters BUTTONS THE END-->

  <!--recipe_row-->
  <div class="recipe_row">

    <?php if(have_posts()) :?>
    
    <?php while (have_posts()) : the_post(); ?>


    <!--recipe_column-->
    <div class="recipe_column filter--show tag-breakfast">
      <!--RECIPE CARD-->
      <div id="recipes-<?php the_ID(); ?>" <?php post_class('card_box'); ?>>
        <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail(); ?>
        </a>

        <h5 class="card_box-title"><?php the_title(); ?></h5>
        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
              alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text"><?php the_excerpt_max_charlength(100); ?></p>

        <a href="<?php the_permalink(); ?>" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--RECIPE CARD THE END-->
    </div>
    <!--recipe_column THE END-->

    <!--recipe_column-->
    <div class="recipe_column filter--show tag-main tag-desser tag-supper">
      <!--RECIPE CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/orangepancake.jpg"
          alt="Naleśniki Pomarańczowe">

        <h5 class="card_box-title">Naleśniki Pomarańczowe</h5>

        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
              alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--RECIPE CARD THE END-->
    </div>
    <!--recipe_column THE END-->

    <!--recipe_column-->
    <div class="recipe_column filter--show tag-breakfast tag-starter">
      <!--RECIPE CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/egg.jpg"
          alt="jajko w koszulce">

        <h5 class="card_box-title">Jajko w Koszulce</h5>

        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
              alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--RECIPE CARD THE END-->
    </div>
    <!--recipe_column THE END-->

    <!--recipe_column-->
    <div class="recipe_column filter--show tag-breakfast tag-starter">
      <!--RECIPE CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/egg.jpg"
          alt="jajko w koszulce">

        <h5 class="card_box-title">Jajko w Koszulce</h5>

        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
              alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--RECIPE CARD THE END-->
    </div>
    <!--recipe_column THE END-->

    <!--recipe_column-->
    <div class="recipe_column filter--show tag-breakfast">
      <!--RECIPE CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/owsianka.jpg"
          alt="Owsianka z Owocami">

        <h5 class="card_box-title">Owsianka z Owocami</h5>

        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
              alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--RECIPE CARD THE END-->
    </div>
    <!--recipe_column THE END-->

    <!--recipe_column-->
    <div class="recipe_column filter--show tag-breakfast tag-wege">
      <!--RECIPE CARD-->
      <div class="card_box">
        <img class="card_box-img" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/owsianka.jpg"
          alt="Owsianka z Owocami">

        <h5 class="card_box-title">Owsianka z Owocami</h5>

        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
              alt="poziom trudności">
            <span class="card_box-iconTxt">łatwe</span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt">10min</span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt">1200kcal</span>
          </div>
        </div>
        <p class="card_box-text">Kakaowa owsianka z owocami i Twoimi ulubionymi dodatkami. Mniam!</p>

        <a href="orange_pancakes.html" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
            aria-hidden="true">&#8594</i></a>
      </div>
      <!--RECIPE CARD THE END-->
    </div>
    <!--recipe_column THE END-->

    <!--THE END of wordpress loop-->
    <?php endwhile; ?>
    <?php else:  ?>
      <h4>Nie ma żadnych postów<h4>
    <?php endif; ?>
  </div>
  <!--recipe_row THE END-->
  <!--RECIPES FILTER THE END-->
</section>
<!--RECIPE SECTION THE END-->

<?php get_footer(); ?>