<?php

function isActive($current_page) {
  $url_array = explode('/', $_SERVER['REQUEST_URI']);
  $url = $url_array[1];

  if(strpos($current_page, 'index') !== false && $url == '')
    return 'active';
  if(strpos($current_page, $url) !== false && $url != '')
    return 'active';
  else
    return '';
}