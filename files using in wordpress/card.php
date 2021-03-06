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
              alt="poziom trudności">
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
    <?php endif; ?>