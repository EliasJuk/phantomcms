<?php
  session_start();

  # CLASS
  $autoload = function($class){
    include('classes/'.$class.'.php');
  };
  spl_autoload_register($autoload);

  # DATABASE
  define('HOST','db');
  define('USER','root');
  define('PASSWORD','root');
  define('DATABASE','phantomcms');

  # ROUTES
  define('INCLUDE_PATH', 'http://localhost/');
  define('INCLUDE_PATH_ADMIN', INCLUDE_PATH.'admin');
?>