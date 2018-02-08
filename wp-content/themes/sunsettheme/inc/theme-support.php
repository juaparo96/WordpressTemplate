<?php
/*

@package sunsettheme

theme support options

*/
$options = get_option('post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
foreach ($formats as $format) {
  $output[] = ( @$options[$format] == 1 ? $format : '');
}
if (!empty( $options ) ) {
  add_theme_support('post-formats', $output);
}

$header= get_option('custom_header');
if (@$header == 1) {
  add_theme_support('custom-header');
}

$background = get_option('custom_background');
if ( @$background == 1) {
  add_theme_support('custom-background');
}

//Agregar nuevos post
add_theme_support('post-thumbnails');

/* Activar opcion menu de navegacion */
add_action('after_setup_theme', 'sunset_register_nav_menu');
function sunset_register_nav_menu(){
  register_nav_menu('primary', 'Header Navigation Menu');

}


/*

bucle para funciones personalizadas del blog

*/

function sunset_posted_meta () {

  $posted_on = human_time_diff( get_the_time('U'), current_time('timestamp'));
  $categories = get_the_category();
  $separator = ', ';
  $output = '';
  $i = 1;
  if (!empty($categories) ):
    foreach ($categories as $category ) :

    if($i > 1): $output .= $separator; endif;

      $output .= '<a href="'. esc_url( get_category_link($category->term_id) ).'" alt="'.esc_attr('View all posts in%s'
      , $category->name).'">'.esc_html($category->name).'</a> ';
    $i++;  endforeach;
  endif;
  return '<span class="posted-on"> <a href="'.esc_url(get_permalink() ).'"> '. $posted_on .'</a> ago </span> / <span
  class class="posted-in">'.$output.'</span>';
}

function sunset_posted_footer() {
  return '<div class="post-footer-container"><div class="row"><div class"col-xs-12 col-sm-6">'. get_the_tag_list()
  .'</div><div class="col-xs-12 col-sm-6">'.$comments.'</div></div></div>';
}
