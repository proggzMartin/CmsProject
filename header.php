<!DOCTYPE html>
<html>
  <head>
    <!-- hooks, adding in standard wp scripts -->
    <?php wp_head();?>
  </head>

  <!-- php body_class() tillåter WP lägga in egen body class -->
  <body <?php body_class();?>>
    <div id="test" class="sticky-top container">
      <?php wp_nav_menu(
        array(
          //reference to register_nav_menus in functions-php.
          'theme_location' => 'top-menu',
        )
      );?>
    </div>

    

