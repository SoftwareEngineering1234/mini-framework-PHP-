<?php

class Route
{
  protected $controller = 'HomeController';
  protected $method = 'index';
  protected $param = [];
  public function __construct()
  {
    if(isset($_GET['url']))
    {
      $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
    }
      $url[0] = $url[0] .'Controller.php'
      if(file_exists($url[0]))
      {
        die('exist!');
      }else{
          die('not exist!');
      }
  }
}
