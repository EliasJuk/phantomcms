<?php
  include('../config.php');

  if(Main::logado() == false){
    include('login.php');
  }else{
    include('dashboard.php');
  }
?>