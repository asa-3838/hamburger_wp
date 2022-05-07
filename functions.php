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

// //サムネイルカラム追加
// function customize_manage_posts_columns($columns) {
//   $columns['thumbnail'] = __('Thumbnail');
//   return $columns;
// }
// add_filter( 'manage_posts_columns', 'customize_manage_posts_columns' );

// //サムネイル画像表示
// function customize_manage_posts_custom_column($column_name, $post_id) {
//   if ( 'thumbnail' == $column_name) {
//       $thum = get_the_post_thumbnail($post_id, 'small', array( 'style'=>'width:100px;height:auto;' ));
//   } if ( isset($thum) && $thum ) {
//       echo $thum;
//   } else {
//       echo __('None');
//   }
// }
// add_action( 'manage_posts_custom_column', 'customize_manage_posts_custom_column', 10, 2 );

?>