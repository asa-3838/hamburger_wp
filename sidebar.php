<aside class="l-sidebar">
  <h2 class="p-sidebar__title">Menu</h2>
  <button id="close_btn" class="p-sidebar__button"></button>
  <nav class="p-sidebar__main-nav">

    <?php echo str_replace(
      'sub-menu',
      'p-sidebar__sub-ul',
      wp_nav_menu(
        array(
          'echo' => false,
          'theme_location' => 'sidebar-menu',
          'container' => '',
          'menu_class' => 'p-sidebar__main-ul'
        )
      )
    );
    ?>

  </nav>
</aside>