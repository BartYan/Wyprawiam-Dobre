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

    <?php $search = getQuerySingleParam('search'); ?>

    <form class="input_container search" method="get" action="<?php getCurrentPageUrl(); ?>">
      <label for="search" class="input_container-label label_leftCenter"> Wpisz frazę która Cię
        interesuje:</label>
      <fieldset class="fieldset_leftCenter">
        <input class="input_container-field anime_input" type="text" id="search" name="search"
          value="<?php echo $search ?>" placeholder="np. sałatka">
        <button class="input_container-btn anime_input-btn" type="submit" value="">
          <img class="input_container-btn--img" src="<?php echo get_stylesheet_directory_uri() ?>/img/loupe.png"
            alt="ikona lupki">
          <span class="input_container-btn--text anime_input-text ">szukaj</span>
        </button>
      </fieldset>
    </form>
    <p class="description_leftCenter">
      Nasze propozycje:
    </p>
  </div>

  <!--AJAX FILTER-->
  <div id="filter">
    <nav>
      <ul>
        <li class="filter_item"><a class="filter_item-link tag-active" href="">Wszystkie</a></li>
        <?php
      $cat_args = array(
        'exclude' => array(1),
        'taxonomy' => 'meal-type',
        'option_all' => 'All'
      );

      $categories = get_categories($cat_args);
      foreach($categories as $cat) : ?>
        <li class="filter_item"><a class="filter_item-link" data-category="<?= $cat->term_id; ?>"
            href="<?= get_category_link($cat->term_id); ?>"><?= $cat->name; ?></a></li>
        <?php endforeach; ?>
      </ul>
    </nav>
  </div>

    <div class="js-filter recipe_row">
      <?php

      $args = array(
        'post_type' => 'recipes',
        'posts_per_page' => -1
      );

      $query = new WP_Query($args);
      wp_reset_postdata();
      ?>
   
        <?php if($query->have_posts()) : ?>
        <?php  while($query->have_posts()) : $query->the_post();?>

          <!--RECIPE CARD-->
          <div id="recipes-<?php the_ID(); ?>" <?php post_class('card_box'); ?>>
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail('post-thumbnail', ['class' => 'card_box-img']); ?>
            </a>

            <h5 class="card_box-title"><?php the_title(); ?></h5>
            <!-- dish category -->
            <div class="card_box-icons">
              <div>
                <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
                  alt="kategoria">
                <span class="card_box-iconTxt"><?php printDishCategories($post->ID) ?></span>
              </div>
              <!-- preparation time -->
              <div>
                <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png"
                  alt="czas">
                <span class="card_box-iconTxt"><?php echo get_post_meta($post->ID, 'czas', true); ?></span>
              </div>
              <!-- calories -->
              <div>
                <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
                  alt="ilość osób">
                <span class="card_box-iconTxt"><?php echo get_post_meta($post->ID, 'kalorie', true); ?></span>
              </div>
            </div>
            <p class="card_box-text"><?php the_excerpt_max_charlength(100); ?></p>

            <a href="<?php the_permalink(); ?>" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
                aria-hidden="true">&#8594</i></a>
          </div>
          <!--RECIPE CARD THE END-->

        <?php endwhile; ?>
        <?php endif; ?>

    </div>
    <!--AJAX JS-filter/recipes Row THE END-->
  <!--AJAX FILTER THE END-->

  <!--BOTTOM LEAFs DECORATION-->
  <img class="leaf-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/leaf-right.png" alt="leaf icon">
















    <?php if(isset($search)): ?>
    <h3 class="description_leftCenter">Wyniki wyszukiwania:</h3>
    <?php endif; ?>
  </div>

  <!--search php-->
  <?php
      $query_params = getQueryParams();
      if(isset($query_params['search'])) {
      $query_params['post_title_like'] = $query_params['search'];
      unset($query_params['search']);
      }

      $loop = new WP_Query($query_params);
	?>

  <!--recipe_row-->
  <div class="recipe_row">

    <?php if($loop->have_posts()) :?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

    <!--recipe_column-->
    <div class="recipe_column filter--show tag-breakfast">
      <!--RECIPE CARD-->
      <div id="recipes-<?php the_ID(); ?>" <?php post_class('card_box'); ?>>
        <a href="<?php the_permalink(); ?>">
          <?php the_post_thumbnail('post-thumbnail', ['class' => 'card_box-img']); ?>
        </a>

        <h5 class="card_box-title"><?php the_title(); ?></h5>
        <!-- dish category -->
        <div class="card_box-icons">
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/firstIcon.png"
              alt="kategoria">
            <span class="card_box-iconTxt"><?php printDishCategories($post->ID) ?></span>
          </div>
          <!-- preparation time -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/secondIcon.png" alt="czas">
            <span class="card_box-iconTxt"><?php echo get_post_meta($post->ID, 'czas', true); ?></span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt"><?php echo get_post_meta($post->ID, 'kalorie', true); ?></span>
          </div>
        </div>
        <p class="card_box-text"><?php the_excerpt_max_charlength(100); ?></p>

        <a href="<?php the_permalink(); ?>" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
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











  

  </section>
<!--RECIPE SECTION THE END-->

<?php get_footer(); ?>