<?php
  class Main {
    public static function logado(){
      return isset($_SESSION['login']) ? true : false;
    }
  }
?>