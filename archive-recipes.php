<?php get_header('center'); ?>

<!--TOP LEAFs DECORATION-->
<img class="leaf-left--nav" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_left.svg" alt="leaf icon">
<!--RECIPES SECTION-->
<section class="cards_section">
  <div class="section_title">
    <span class="section_title-span">Nasze</span>
    <h2 class="section_title-head">Przepisy</h2>
    <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg"
      alt="ikonka gwiazdek">
  </div>

  <div class="infoBox_leftCenter">

    <label for="search" class="input_container-label"> Wpisz frazę która Cię interesuje:</label>
    <?php get_search_form(); ?>
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

  <div class="js-filter posts_row">
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
      <a class="card_box-link" href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card_box-img']); ?>
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
              alt="kalorie">
            <span class="card_box-iconTxt"><?php echo get_post_meta($post->ID, 'kalorie', true); ?></span>
          </div>
        </div>
        <p class="card_box-text"><?php the_excerpt_max_charlength(100); ?></p>
      </a>
      <a href="<?php the_permalink(); ?>" class="card_box-button">zobacz przepis <i class="card_box-button--arrow"
          aria-hidden="true">&#8594</i>
      </a>
    </div>
    <!--RECIPE CARD THE END-->

    <?php endwhile; ?>
    <?php endif; ?>

  </div>
  <!--AJAX JS-filter/recipes Row THE END-->
  <!--AJAX FILTER THE END-->

  <!--BOTTOM LEAFs DECORATION-->
  <img class="leaf-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_right.svg" alt="leaf icon">

</section>
<!--RECIPE SECTION THE END-->

<?php get_footer(); ?>