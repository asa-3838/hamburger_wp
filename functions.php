<?php
function readScript()
{
  //css/googlefonts/jquery読み込み
  wp_enqueue_style('hamburger', get_theme_file_uri('/css/style.css'), array(), '');
  // wp_enqueue_style('roboto','http://fonts.googleapis.com',array(),'');
  // wp_enqueue_style('roboto','http://fonts.googleapis.com','crossorigin','');
  wp_enqueue_style('roboto', 'http://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap', array(), '');
  wp_enqueue_style('mplus', 'http://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap', array(), '');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js', '', '', true);
  // wp_enqueue_script('text/javascript', get_theme_file_uri("/js/script.js"),'jquery',$theme_version,true);
}

add_action("wp_enqueue_scripts", "readScript");

function theme_setup()
{
  //titleタグ
  add_theme_support('title-tag');

  //アイキャッチ画像
  add_theme_support('post-thumbnails'); 

  //メニュー
  register_nav_menus(
    array(
      'sidebar-menu' => 'サイドバーメニュー',
      'front-menu' => 'フロントメニュー',
      'footer-menu' => 'フッターメニュー',
    )
  );
}

add_action('after_setup_theme', 'theme_setup');

// li クラス名を削除
function remove_nav_class($class)
{
  return $class = array();
}

add_filter("nav_menu_css_class", "remove_nav_class");

// li id名を削除
function remove_nav_id($id)
{
  return $id = array();
}

add_filter("nav_menu_item_id", "remove_nav_id");

// li クラス名を追加
function add_nav_class($class)
{
  return $class = array('p-sidebar__menu');
}

add_filter("nav_menu_css_class", "add_nav_class");


// 投稿のアーカイブページを作成する
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true; // リライトを有効にする
    $args['has_archive'] = 'archive'; // 任意のスラッグ名
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


//サイト内検索の範囲に、カテゴリー名、タグ名、を含める
function custom_search($search, $wp_query) {
  global $wpdb;
  
//サーチページ以外だったら終了
if (!$wp_query->is_search)
  return $search;
  
  if (!isset($wp_query->query_vars))
  return $search;
  
// タグ名・カテゴリ名も検索対象に
$search_words = explode(' ', isset($wp_query->query_vars['s']) ? $wp_query->query_vars['s'] : '');
  if ( count($search_words) > 0 ) {
    $search = '';
    foreach ( $search_words as $word ) {
      if ( !empty($word) ) {
        $search_word = $wpdb->escape("%{$word}%");
        $search .= " AND (
            {$wpdb->posts}.post_title LIKE '{$search_word}'
            OR {$wpdb->posts}.post_content LIKE '{$search_word}'
            OR {$wpdb->posts}.ID IN (
              SELECT distinct r.object_id
              FROM {$wpdb->term_relationships} AS r
              INNER JOIN {$wpdb->term_taxonomy} AS tt ON r.term_taxonomy_id = tt.term_taxonomy_id
              INNER JOIN {$wpdb->terms} AS t ON tt.term_id = t.term_id
              WHERE t.name LIKE '{$search_word}'
            OR t.slug LIKE '{$search_word}'
            OR tt.description LIKE '{$search_word}'
            )
        ) ";
      }
    }
  }
  
  return $search;
  }
  add_filter('posts_search','custom_search', 10, 2);


   //pre_get_posts で 検索結果のクエリーに条件を追加
function change_posts_paging($query) {

  // 管理画面やメインクエリーでない場合は除外
  if ( is_admin() || ! $query->is_main_query() ) {
    return;
  }
  // 検索結果ページ
  if ( $query->is_search() ) {
    // 公開されてる記事のみ検索
    $query->set( 'post_status', 'publish' );
    // 投稿のみ検索
    $query->set( 'post_type', 'post' );
    // 表示したくないカテゴリーID
    $query->set( 'category__not_in', 1 );
    //　表示したくない投稿ID。arrayで複数指定可。
    $query->set( 'post__not_in', array( 1, 2, 3, 4, 5 ) );
    //　検索結果の表示順
    $query->set( 'order', 'ASC' );
    return;
  }
  }
  add_action( 'pre_get_posts', 'change_posts_paging' );
  
  //投稿タイプを追加する場合は、array 型で記述します。
  //カスタムポストタイプ（ex. music ）を含む場合もここに追加します。
  //$query->set( 'post_type', array( 'post', 'page', 'music' ) );


?>

