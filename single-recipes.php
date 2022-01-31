<?php get_header('center'); ?>

<?php the_post(); ?>

<!--RECIPE SECTION-->
<section class="section-post">

  <!--MOBILE TITLE-->
  <div class="infoBoxPost title_mobile noprint">
    <div class="section_title">
      <h3 class="section_title-head"><?php the_title(); ?></h3>
      <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg"
      alt="ikonka gwiazdek">
    </div>
  </div>

  <div class="leftBox">
    <div class="leftBox_item noprint">
      <?php the_post_thumbnail('post-thumbnail', ['class' => 'leftBox_item-img']); ?>
    </div>
    <div class="leftBox_item leftBox_itemColor">
      <h5 class="leftBox_itemColor-head">Składniki</h5>
      <!-- previous solution -> go to functions.php & postypes -->
      <!-- <php printRecipeIngredients($post->ID) ?> --> 

    </div>
  </div>

  <div class="infoBoxPost">
    <!--DESKTOP TITLE-->
    <div class="iconSet title_desktop">
      <div class="iconSet_box">
        <div class="iconSet_box-icon">
          <img class="iconSet_icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_chef.svg"
            alt="kategoria">
          <span class="iconSet_txt"><?php printDishCategories($post->ID) ?></span>
        </div>
        <div class="iconSet_box-icon">
          <img class="iconSet_icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_clock.svg" alt="czas">
          <span class="iconSet_txt"><?php echo get_post_meta($post->ID, 'czas', true); ?></span>
        </div>
        <div class="iconSet_box-icon">
          <img class="iconSet_icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_calories.svg" alt="kalorie">
          <span class="iconSet_txt"><?php echo get_post_meta($post->ID, 'kalorie', true); ?></span>
        </div>
      </div>
      <a class="print" href="javascript:window.print()">Drukuj Przepis
      </a>
    </div>

    <div class="section_title title_desktop">
      <h1 class="section_title-head"><?php the_title(); ?></h1>
      <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg"
      alt="ikonka gwiazdek">
    </div>

    <article class="infoBoxPost_description">
      <?php the_content(); ?>
    </article>
</section>

<!--Gallery-->
<section>
  <div class="gallery">
    <div class="gallery_left">
      <img class="gallery_left-image" src="<?php echo get_post_meta($post->ID, 'obrazek1', true); ?>" alt="zdjęcie potrawy">
      
    </div>
    <div class="gallery_right">
      <img class="gallery_right-image" src="<?php echo get_post_meta($post->ID, 'obrazek2', true); ?>" alt="zdjęcie potrawy">
      <img class="gallery_right-image2" src="<?php echo get_post_meta($post->ID, 'obrazek3', true); ?>" alt="zdjęcie potrawy">
    </div>
  </div>
</section>

<!--Comments-->
<section class="noprint">
  <?php comments_template(); ?>
</section>


<?php get_footer(); ?>