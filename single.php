<?php get_header(); ?>

<div class="p-single__top">

  <?php if(has_post_thumbnail()) { 
  //サムネイルの投稿があれば、サムネイル画像を背景に表示
  $image_url = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
  echo '<div class="p-single__top-visual" style="background-image:url('. $image_url[0]. '"></div>';
  } else { 
  //サムネイルの投稿がなければ、下記の画像を背景に表示
  echo '<div class="p-single__top-visual" style="background-image:url(http://hamburgersite.local/wp-content/themes/hamburger/images/single-top.png);"></div>';
  } ?>
  <div class="p-single__top__title">
    <h1><?php the_title(); ?></h1>
  </div>
</div>

<div class="l-single__wrapper">
  <div class="p-single__text">
    
    <?php
    if(have_posts()) :
      while (have_posts()) : the_post();
        the_content();
      endwhile;
    endif;
    ?>

  </div>
</div>


</div>

<div class="l-main__right">
  <?php get_sidebar(); ?>
</div>
</div>
</div>
<?php get_footer(); ?>