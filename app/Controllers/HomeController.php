<?php

class HomeController extends Controller
{
  public function index()
  {
    $user = $this->model('Users');
    echo $user->name;
  }
}