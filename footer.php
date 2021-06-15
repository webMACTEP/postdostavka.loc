<?php

/**
 * The template for displaying the footer
 */

wp_footer(); ?>

<footer class="footer">
   <div class="container">
      <div class="footer__row">
         <a href=""><img src="<?php echo pd_get_image('logo-footer.svg') ?>" alt=""></a>
         <nav class="footer__menu">
            <?php
            wp_nav_menu(array(
               'container'       => 'ul',
               'theme_location'  => 'menu-1',
               'menu_id'         => '2',
               'menu_class'     => 'nav',
               'depth'           => 1,
            ));
            ?>
         </nav>

      </div>
      <p>PostDostavka © 2021 Все права защищены</p>
   </div>
</footer>

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
   $(function() {
      $("#accordion").accordion({
         heightStyle: "content",
         collapsible: true
      });
   });
</script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/select.js"></script>
<script src="<?php echo esc_url(get_template_directory_uri()); ?>/js/main.js"></script>
</body>

</html>