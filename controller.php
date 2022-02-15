<?php session_start();
      require_once 'config.php';
      require_once 'Action.php';
      $actions = new Action($connect,$_SESSION['name']);

      if(isset($_GET['logout'])){
          $actions->logout();
      }

      if(isset($_GET['login'])){
          $actions->login();
      }

      if(isset($_GET['register'])){
          $actions->register();
      }

      if(isset($_GET['addpupil'])){
          $actions->add_pupil();
      }

      if(isset($_GET['create'])){
          $actions->add_assignment();
      }

      if(isset($_GET['comment'])){
          $actions->comment();
      }

      if(isset($_GET['pupil'])){
         $actions->deactivate_pupil($_GET['pupil']);
      }
      




 ?>
