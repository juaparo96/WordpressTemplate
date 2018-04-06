<?php
/*
@package sunsettheme

*/

if ( ! is_active_sidebar('sunset-sidebar') ) {
  return;
}
?>

<aside id="secondary" class="widget-area" role="complementary">

<div class="visible-xs">
  <?php wp_nav_menu(array(
      //locacion del tema
      'theme_location' => 'primary',
      //remover container generado por wordpress
      'container' => false,
      //Clase de bootstrap para el navbar
      'menu_class' => 'nav navbar-nav navbar-collapse nav-menu',
      'walker' => new Sunset_Walker_Nav_Primary()
    ));
   ?>
</div>

  <?php dynamic_sidebar('sunset-sidebar'); ?>

</aside>
