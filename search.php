<?php get_header('center'); ?>
<!--TOP LEAFs DECORATION-->
<img class="leaf-left--nav" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_left.svg" alt="leaf icon">
<!--RECIPES SECTION-->
<section class="cards_section">
  <!-- Title loop -->
  <?php
      $query_params = getQueryParams();
      if(isset($query_params['search'])) {
      $query_params['post_title_like'] = $query_params['search'];
      unset($query_params['search']);
      }

      $loop = new WP_Query($query_params);
	?>

  <div class="section_title">
    <!-- with posts -->
    <?php if($loop->have_posts()) :?>
    <span class="section_title-span">Znalezione.</span>
    <h2 class="section_title-head">Wiesz co Dobre!</h2>
    <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg"
      alt="ikonka gwiazdek">
    <!-- without posts -->
    <?php else:  ?>
    <span class="section_title-span">Ups...</span>
    <h2 class="section_title-head">Brak wpisów</h2>
    <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg"
      alt="ikonka gwiazdek">
    <?php endif; ?>
    <!-- Title loop the end-->
  </div>

  <div class="infoBox_leftCenter">
    <label for="search" class="input_container-label">Masz na coś jeszcze ochotę?</label>
    <?php get_search_form(); ?>
    <p class="description_leftCenter">
      Wyniki wyszukiwania dla: <span><strong><?php echo get_search_query() ?></strong></span>
    </p>
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

  <!--posts_row-->
  <div class="posts_row">

    <?php if($loop->have_posts()) :?>
    <?php while ($loop->have_posts()) : $loop->the_post(); ?>

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
    <?php else:  ?>
    <h4>Niestety nie znaleźliśmy postów<h4>
        <?php endif; ?>
  </div>
  <!--posts_row THE END-->

  <!--BOTTOM LEAFs DECORATION-->
  <img class="leaf-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_right.svg" alt="leaf icon">
</section>
<!--RECIPE SECTION THE END-->

<?php get_footer(); ?>