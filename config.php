<?php
  date_default_timezone_set('Africa/Kampala');

  // remote
  // $hostname     = "sql100.epizy.com";
  // $username     = "epiz_28964621";
  // $password     = "HW2B82x5pWQw";
  // $databasename = "epiz_28964621_lending_app";

  // local
  $hostname     = "localhost";
  $username     = "root";
  $password     = "";
  $databasename = "kindacare";

  // Create connection
  $connect = mysqli_connect($hostname, $username, $password,$databasename);
  if(!$connect){
       die('<div class="alert alert-warning">Connection error: ' . mysqli_connect_error().' </div>');
  }
