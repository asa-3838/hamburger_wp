<form class="p-header__search"  method="get" action="<?php echo home_url('/'); ?>">
  <input class="p-header__search__form" type="text" name="s" id="s" placeholder="キーワードを入力">
  <img class="p-header__search-icon" src="<?php echo esc_url(get_theme_file_uri('/images/search-form.png')); ?>" alt="<?php bloginfo('name'); ?>">
  <input class="p-header__search-button" type="submit" value="検索">
</form>