<?php

class Controller
{
   public function view($file, $data = [])
   {
   	  require_once '../app/Views/'.$file.'.php';
   }
}
