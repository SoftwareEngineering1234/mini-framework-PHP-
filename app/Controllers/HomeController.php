<?php

class HomeController extends Controller
{
  public function index()
  {
    $user = $this->model('Users');
    return $this->view('home', ['nama' => $user->name]);
  }
}