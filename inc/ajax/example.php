<?php

add_action( 'wp_ajax_nopriv_filter', 'filter_ajax' );
add_action( 'wp_ajax_filter', 'filter_ajax' );

function filter_ajax() {

    $category = $_POST['category'];

    $args = array(
        'post_type' => 'recipes',
        'posts_per_page' => -1
      );
      
    //This is working for normal posts types
    //   if(isset($category)) {
    //       $args['category__in'] = array($category);
    //   }

    if(!empty($category)) {
        $args['tax_query'] = array(
            array(
                'taxonomy' => 'meal-type',
                'field'    => 'term_id',
                'terms'    => $category ,
            ),
        );
    }

      $query = new WP_Query($args);
    ?>

    <?php if($query->have_posts()) :?>
    <?php while ($query->have_posts()) : $query->the_post(); ?>

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
            <span class="card_box-iconTxt"><?php echo $meta_value = get_post_meta( get_the_ID() , 'czas', true ); ?></span>
          </div>
          <!-- calories -->
          <div>
            <img class="card_box-icon" src="<?php echo get_stylesheet_directory_uri() ?>/img/thirdIcon.png"
              alt="ilość osób">
            <span class="card_box-iconTxt"><?php echo $meta_value = get_post_meta( get_the_ID() , 'kalorie', true ); ?></span>
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
    
    <?php
      wp_reset_postdata();

    die();
}

?>


