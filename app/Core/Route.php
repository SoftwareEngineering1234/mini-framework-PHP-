<?php

class Route
{
  protected $controller = 'home';
  protected $method = 'index';
  protected $param = [];
  public function __construct()
  {
    if(isset($_GET['url']))
    {
      $url = explode('/', filter_var(trim($_GET['url']), FILTER_SANITIZE_URL));
    }
      $url[0] = $url[0] .'Controller.php';

      //ngecek file controller
      if(file_exists('../app/controllers/'. $url[0]))
      {
        $this->controller = $url[0];
      }
      require_once '../app/controllers/'.$this->controller;

      //cek metode exist controller
      print_r($url[1]);
      if (isset($url[1]))
      {
        if (method_exists($this->controller, $url[1]))
        {
          die('exist metode!');
        }
      }
  }
}
