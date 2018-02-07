<?php
/*
This is the template for the header
@package juan sunset
*/
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="http://gmpg.org/xfn/11">
  <?php if (is_singular() && pings_open(get_queried_boject() ) ): ?>
      <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php endif; ?>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

  <div>

    <div class="row">

      <div class="col-xs-12">

          <div class="header-container background-image text-center" style="background-image: url(<?php header_image(); ?>);">

            <div class="header-content vertical-center">
                  <h1 class="site-title sunset-icon">
                    <span class="sunset-logo"></span>
                    <span class="hide"> <?php bloginfo('name'); ?> </span>
                  </h1>
                  <h2 class="site-description"> <?php bloginfo('description'); ?> </h2>
            </div>  <!-- .header-content -->

            <div class="nav-container">

            </div>  <!-- .nav-container -->

          </div>  <!-- .header-container -->

      </div>  <!-- .col-xs-12 -->

    </div>   <!--.row -->

  </div>  <!-- .container-fluid -->
