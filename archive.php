  <?php get_header(); ?>

  <div class="p-archive__top">

    <?php if ( is_category('side') ): //カテゴリースラッグがsideの場合
      echo '<div class="c-bgimage_side"></div>';
    ?> 
    <?php elseif ( is_category('drink') ): //カテゴリースラッグがdrinkの場合 
      echo '<div class="c-bgimage_drink"></div>';
    ?>
    <?php else: //上記以外
      echo '<div class="c-bgimage_hamburger"></div>';
    ?>
    <?php endif; ?>


    <div class="p-archive__top__title">
      <h2>Menu:</h2>
      <p><?php wp_title(''); ?></p>
    </div>
  </div>

    <div class="l-archive__wrapper">
      <div class="p-archive__middle">
        <h3><?php single_cat_title();?></h3>
        <p><?php echo category_description(); ?></p>
      </div>

    <!-- 投稿があれば、繰り返し表示 -->
    <?php if(have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="p-archive__card">
        <div class="p-archive__card-inner">
          <?php the_post_thumbnail() ?>
          <div class="p-archive__card__text-box">
            <div class="p-archive__card__text">
              <h3 class="p-archive__card__title"><?php the_title(); ?></h3>
              <?php the_excerpt(); ?>
            </div>

            <div class="p-archive__card__more-button">
              <a href="<?php the_permalink(); ?>">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    <!-- 投稿がない場合 -->
    <?php endwhile; else : ?>
      <p>該当するメニューはありません。</p>
    <?php endif; ?>
    
    <div class="p-pagination">
    <?php wp_pagenavi(); ?>
    </div>

  </div>
  </div>

  <div class="l-main__right">
    <?php get_sidebar(); ?>
  </div>
  </div>
  </div>
  <?php get_footer(); ?>