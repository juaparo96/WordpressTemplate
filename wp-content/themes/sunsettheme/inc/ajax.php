<?php

/*
@package sunsettheme
 */
add_action ('wp_ajax_nopriv_susnet_load_more', 'susnet_load_more');
add_action ('wp_ajax_susnet_load_more', 'susnet_load_more');

function sunset_load_more (){
  //cargar todos los posts
  $paged = $_POST["page"];

  echo $paged;

  die();
}
