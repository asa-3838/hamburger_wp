<footer class="l-footer">
  <div class="p-footer__copy-right">
      <?php
        wp_nav_menu(
          array(
            'theme_location' => 'footer-menu'
          )
        );
      ?>  
    <small>Copyright: RaiseTech</small>
  </div>
</footer>

    <?php wp_footer(); ?> 

  </body>
</html>