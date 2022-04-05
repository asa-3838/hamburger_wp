<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="<?php echo esc_url(get_theme_file_uri('/images/favicon.png')); ?>">
  <?php wp_head(); ?> 
</head>
<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="l-main__back"></div>
  <div class="l-main">
    <div class="l-main__wrapper">
      <div class="l-main__left">
      
        <div class="l-header">
          <button id="menu_btn" class="p-header__menu">Menu</button>
          <div class="p-header__wrapper">
            <h1 class="p-header__logo"><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
            <?php get_search_form(); ?>
          </div>
        </div>