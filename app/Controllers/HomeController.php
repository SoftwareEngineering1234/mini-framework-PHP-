<?php

class HomeController extends Controller
{
  public function test($nama)
  {
    echo $nama;
  }
  public function index()
  {
    echo 'ini adalah default metode';
  }
}