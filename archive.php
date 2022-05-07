  <?php get_header(); ?>

  <div class="p-archive__top">
    <div class="p-archive__top__title">
      <h2>Menu:</h2>
      <p><?php wp_title(''); ?></p>
    </div>
  </div>

  <div class="l-archive__wrapper">
    <div class="p-archive__middle">
      <h3>小見出しが入ります</h3>
      <p>
        テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。テキストが入ります。
        テキストが入ります。テキストが入ります。テキストが入ります。
      </p>
    </div>

    <!-- 投稿があれば、繰り返し表示 -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
      <div class="p-archive__card">
        <div class="p-archive__card-inner">
          <?php the_post_thumbnail() ?>
          <div class="p-archive__card__text-box">
            <div class="p-archive__card__text">
              <h3 class="p-archive__card__title">
                <?php the_title(); ?>
              </h3>
              <h4 class="p-archive__card__sub-title">小見出しが入ります</h4>
              <p class="p-archive__card__description">
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。テキストが入ります。
                テキストが入ります。テキストが入ります。
              </p>
            </div>

            <div class="p-archive__card__more-button">
              <a href="#">詳しく見る</a>
            </div>
          </div>
        </div>
      </div>
    <!-- 投稿がない場合 -->
    <?php endwhile; else : ?>
      <p>該当するメニューはありません。</p>
    <?php endif; ?>
    
    <div class="pagination">
      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      $the_query = new WP_Query( array(
          'post_status'    => 'publish',
          'post_type'      => 'post', // ページの種類（例、page、post、カスタム投稿タイプ）
          'paged'          => $paged,
          'posts_per_page' => 3, // 表示件数
          'orderby'        => 'date',
          'order'          => 'DESC'
      ) );
      if ($the_query->have_posts()) :
          while ($the_query->have_posts()) : $the_query->the_post();
          ?>
              <?php
              /*　ここにループさせるコンテンツを入れます　*/
              ?>
          <?php
          endwhile;
      else:
          echo '<div><p>ありません。</p></div>';
      endif;
      ?>
    
    <?php wp_pagenavi(array('query' => $the_query)); ?>
    </div>

  </div>
  </div>

  <div class="l-main__right">
    <?php get_sidebar(); ?>
  </div>
  </div>
  </div>
  <?php get_footer(); ?>