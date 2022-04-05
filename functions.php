<!-- css/googlefonts/jquery読み込み -->
<?php
function readScript(){
    wp_enqueue_style('hamburger', get_theme_file_uri('/css/style.css'),array(),'');
    // wp_enqueue_style('roboto','http://fonts.googleapis.com',array(),'');
    // wp_enqueue_style('roboto','http://fonts.googleapis.com','crossorigin','');
    wp_enqueue_style('roboto','http://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap',array(),'');
    wp_enqueue_style('mplus','http://fonts.googleapis.com/css2?family=M+PLUS+1p:wght@400;700&display=swap',array(),'');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.4.1.min.js','','',true);
    // wp_enqueue_script('text/javascript', get_theme_file_uri("/js/script.js"),'jquery',$theme_version,true);
}

add_action("wp_enqueue_scripts", "readScript");


add_action('init', function () {
  // メニューをサポート
  register_nav_menus([
    'sidebar-menu' => 'サイドバーメニュー',
  ]);
});

function theme_setup() {
  //titleタグ
  add_theme_support('title-tag');
}
add_action('after_setup_theme','theme_setup');

// li クラス名を削除
function remove_nav_class($class) {
  return $class = array();
}

add_filter("nav_menu_css_class", "remove_nav_class");

// li id名を削除
function remove_nav_id($id) {
  return $id = array();
}

add_filter("nav_menu_item_id", "remove_nav_id");

// li クラス名を追加
function add_nav_class($class) {
  return $class = array('p-sidebar__menu');
}

add_filter("nav_menu_css_class", "add_nav_class");