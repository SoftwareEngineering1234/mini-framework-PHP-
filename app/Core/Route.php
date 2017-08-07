<?php

class Route
{
  public function __construct()
  {
    if(isset($_GET['url']))
    {
      $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
      print_r($url);
    }
  }
}
