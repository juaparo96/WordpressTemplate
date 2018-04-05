<?php

/*

@package sunsettheme

ShortCode Options

*/

add_shortcode( 'tooltip', 'sunset_tooltip');

function sunset_tooltip ($atts , $content = null) {
  /*
  [tooltip placement="top" title="This is the title"]This is the content[/tooltip]
  */
  //obtener atributos del tooltip
  $atts = shortcode_atts(
    array(
      'placement' => 'top',
      'title' => '',

    ),
    $atts,
    'tooltip'
  );
  $title = ( $atts['title'] == '' ? $content : $atts['title'] );
  //devolver html del tooltip
  return '<span class="sunset-tooltip" data-toggle="tooltip" data-placement="'.$atts['placement'].'" title="'.$title.'">'.$content.'
  </span>';
}

//Generar Popover
add_shortcode('popover', 'sunset_popover');

function sunset_popover ($atts, $content = null ) {
  //[popover title="Popover title" placement="top" trigger="click" content="This is the Popover content"]This is the clickable content[/popover]
  $atts = shortcode_atts(
    array(
      'placement' => 'top',
      'title' => '',
      'trigger' => 'click',
      'content' => '',

    ),
    $atts,
    'popover'
  );

    //devolver html del popover
  return '<span class="sunset-popover" data-toggle="popover" data-placement="'.$atts['placement'].'" title="'.
  $atts['title'].'" data-trigger="'.$atts['trigger'].'" data-content="'.$atts['content'].'">'.$content.'
  </span>';
}

//Contact Form ShortCode

add_shortcode('contact_form', 'sunset_contact_form');
function sunset_contact_form ($atts , $content = null) {
  /*
  [contact_form]
  */
  //obtener atributos del tooltip
  $atts = shortcode_atts(
    array(),
    $atts,
    'contact_form'

  );

  //devolver html del tooltip
  ob_start();
  include 'templates/contact-form.php';
  return ob_get_clean();
}
