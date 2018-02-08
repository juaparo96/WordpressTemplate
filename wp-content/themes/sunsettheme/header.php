<?php
/*
This is the template for the header
@package juan sunset
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <title><?php bloginfo(); wp_title(); ?></title>
  <meta name="description" content=" <?php bloginfo('description'); ?> ">
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if (is_singular() && pings_open(get_queried_object() ) ): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div>
    <div class="row">

      <div class="col-xs-12">

          <header class="header-container background-image text-center" style="background-image: url(<?php header_image(); ?>);">

            <div class="header-content vertical-center">
                  <h1 class="site-title sunset-icon">
                    <span class="sunset-logo"></span>
                    <span class="hide"> <?php bloginfo('name'); ?> </span>
                  </h1>
                  <h2 class="site-description"> <?php bloginfo('description'); ?> </h2>
            </div>  <!-- .header-content -->

            <div class="nav-container">

                <nav class="navbar navbar-default navbar-sunset">
                      <?php wp_nav_menu(array(
                        //locacion del tema
                        'theme_location' => 'primary',
                        //remover container generado por wordpress
                        'container' => false,
                        //Clase de bootstrap para el navbar
                        'menu_class' => 'nav navbar-nav',
                        'walker' => new Sunset_Walker_Nav_Primary()
                      )); ?>
                </nav>

            </div>  <!-- .nav-container -->

          </header>  <!-- .header-container -->

      </div>  <!-- .col-xs-12 -->

    </div>   <!--.row -->

  </div>  <!-- .container-fluid -->
