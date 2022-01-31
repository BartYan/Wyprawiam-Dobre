<?php
/** 
* Template Name: O Nas
*/
?>
<?php get_header(); ?>

<!--WELCOME SECTION-->
<section class="section">

<div class="patternBox">
  <div class="patternBox_white">
    <div class="patternBox_white-items">
      <img class="image" src="<?php echo get_stylesheet_directory_uri() ?>/img/photos/my.JPEG" alt="Nasze zdjęcie">
      <img class="stars" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/icon_stars.svg" alt="ikonka gwiazdek">
      <h4 class="blogTitle">To My</h4>
    </div>
  </div>
</div>

<div class="infoBox">
  <div class="infoBox_top">
    <div class="section_title">
      <span class="section_title-span">O Nas</span>
      <h1 class="section_title-head">Cześć!</h1>
    </div>
    <h4 class="infoBox_top-head">Fajnie, że jesteś!</h4>
    <p class="infoBox_top-description">
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum tempor dapibus massa eget tempus.
      Curabitur volutpat lobortis diam in fringilla. Etiam augue est, viverra id nisi quis, molestie elementum
      velit.
    </p>
    <p class="infoBox_top-description">
      Pellentesque in vestibulum odio. Vivamus congue felis nec mi scelerisque sodales. Sed blandit massa sapien,
      sit amet tristique mauris bibendum vulputate. Ut at sodales sapien. Nunc tempor nisl eu pretium scelerisque.
      Phasellus semper tellus libero, at molestie velit dapibus nec. Cras quis congue nisl. Nulla at erat pretium,
      viverra risus sed, accumsan orci. Pellentesque sagittis leo id rutrum tincidunt. Vestibulum gravida dictum
      libero non posuere. Ut pellentesque nisl vel lectus vulputate, in maximus turpis volutpat.
    </p>
  </div>
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
        <p class="infoBox_bottom_social-txt">Śledź nas na portalach społecznościowych!</p>
      </li>
    </ul>
    <img class="blueBerry" src="<?php echo get_stylesheet_directory_uri() ?>/img/svg/blueberry.svg" alt="">
  </div>
</div>
</section>

<?php include("sections.php"); ?>

<?php get_footer(); ?>