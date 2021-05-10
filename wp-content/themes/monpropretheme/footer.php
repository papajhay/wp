   </div>
   <footer>
   <?php
         //affichage des menus de navigation dans le pied de page: wp_nav_menu
         wp_nav_menu([
            'theme_location' => 'footer',
            'container' => false,
            'menu_class' => 'navbar-nav mr-auto'
         ])
         ?>
   </footer>
   <?php wp_footer()?>
</body>
</html>