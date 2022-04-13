  <?php get_header(); ?>

  <div class="p-archive__top">
    <div class="p-archive__top__title">
      <h2>Menu:</h2>
      <p><?php the_title(); ?></p>
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


    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="p-archive__card">
          <div class="p-archive__card-inner">
            <a href="<?php echo esc_url(get_permalink()); ?>"> 
              <img class="p-archive__card__img" src="./images/archive-middle.png" alt="" />
            </a>
            <div class="p-archive__card__text-box">
              <div class="p-archive__card__text">
                <h3 class="p-archive__card__title">
                  <a href="<?php echo esc_url(get_permalink()); ?>"><?php the_title(); ?></a>
                </h3>
                <h4 class="p-archive__card__sub-title">小見出しが入ります</h4>
                <p class="p-archive__card__description">
                  テキストが入ります。テキストが入ります。テキストが入ります。
                  テキストが入ります。テキストが入ります。テキストが入ります。
                  テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。テキストが入ります。
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
    <?php endwhile; else : ?>
      <p>該当するメニューはありません。</p>
    <?php endif; ?>

    <div class="p-pagenation">
      <ul class="p-pagenation__ul">
        <li class="p-pagenation__title">page 1/10</li>
        <li class="p-pagenation__li-common before"><a href="">≪<span>前へ</span></a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">1</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">2</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">3</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">4</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">5</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">6</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">7</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">8</a></li>
        <li class="p-pagenation__li-pc"><a href="/html/archive.html">9</a></li>
        <li class="p-pagenation__li-common next"><a href=""><span>次へ</span>≫</a></li>
      </ul>
    </div>
  </div>
  </div>

  <div class="l-main__right">
    <?php get_sidebar(); ?>
  </div>
  </div>
  </div>
  <?php get_footer(); ?>