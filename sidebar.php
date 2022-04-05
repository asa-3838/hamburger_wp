<aside class="l-sidebar">
  <h2 class="p-sidebar__title">Menu</h2>
  <button id ="close_btn" class="p-sidebar__button"></button>
  <nav class="p-sidebar__main-nav">
  <ul class="p-sidebar__main-ul">

      <?php wp_nav_menu(
          array(
            'theme_location' => 'sidebar-menu',
            'container' => '',
            'menu_class' => 'p-sidebar__main-ul'
          )
        );
      ?>

    </ul>
  </nav>
</aside>