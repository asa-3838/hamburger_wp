<?php get_header(); ?>

<div class="p-archive__top">
  <?php echo '<div class="p-archive__top" style="background-image:url(/wp-content/themes/hamburger/images/takeout.png);"></div>';?>
  <div class="p-archive__top__title">
    <h2>Search:</h2>
    <p><?php the_search_query(); ?></p>
  </div>
</div>

<div class="l-archive__wrapper">
  <div class="p-archive__middle">
    <?php if (have_posts()): ?>
    <h3>
    <?php
      if (isset($_GET['s']) && empty($_GET['s'])) {
        echo '全メニューを表示します。<p>検索キーワードが未入力です。</p>'; // 検索キーワードが未入力の場合のテキストを指定
      } else {
        echo '“'.$_GET['s'] .'”に一致するメニューは'.$wp_query->found_posts .'件見つかりました。'; // 検索キーワードと該当件数を表示
      }
    ?>
    </h3>
    </div>
    <?php while(have_posts()): the_post(); ?>

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

    <?php endwhile; ?>
    <?php else: ?>
      <h3>
      <?php echo '“'.$_GET['s'] .'”に一致するメニューは見つかりませんでした。' ?>
      <p>検索のヒント：<br>
・キーワードに誤字・脱字がないか確認します。<br>
・メニュー名（例：ハンバーガー）カテゴリー名（例：ドリンク）に変えてみます。</p>
      </h3>
      </div>
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

