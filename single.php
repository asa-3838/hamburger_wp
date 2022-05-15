<?php get_header(); ?>

<div class="p-single__top p-single__top-visual">
  <?php the_post_thumbnail() ?>
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