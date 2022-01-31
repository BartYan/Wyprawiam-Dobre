<?php get_header('center'); ?>

<!--TOP LEAFs DECORATION-->
<img class="leaf-left--nav" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_left.svg" alt="leaf icon">
<!--ARTICLES SECTION-->
<section class="cards_section">
  <div class="section_title">
    <span class="section_title-span">Nasze</span>
    <h2 class="section_title-head">Artykuły</h2>
    <img class="section_title-stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg"
      alt="ikonka gwiazdek">
  </div>

  <div class="posts_row">
    <?php
      $args = array(
        'post_type' => 'post',
        'posts_per_page' => -1
      );

      $query = new WP_Query($args);
      wp_reset_postdata();
      ?>

    <?php if($query->have_posts()) : ?>
    <?php  while($query->have_posts()) : $query->the_post();?>

    <!--ARTIClE CARD-->
    <div id="post-<?php the_ID(); ?>" <?php post_class('card_box'); ?>>
      <a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail('post-thumbnail', ['class' => 'card_box-img']); ?>
      </a>

      <h5 class="card_box-title"><?php the_title(); ?></h5>
      <!-- category -->
      
      <p class="card_box-text card_box-text--post"><?php the_excerpt_max_charlength(150); ?></p>

      <a href="<?php the_permalink(); ?>" class="card_box-button">zobacz artykuł 
      <i class="card_box-button--arrow" aria-hidden="true">&#8594</i></a>
    </div>
    <!--ARTICLE CARD THE END-->

    <?php endwhile; ?>
    <?php endif; ?>
  </div>

  <!--BOTTOM LEAFs DECORATION-->
  <img class="leaf-right" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/leaf_right.svg" alt="leaf icon">

</section>
<!--ARTICLES SECTION THE END-->

<?php get_footer(); ?>