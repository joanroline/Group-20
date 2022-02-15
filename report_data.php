<?php session_start();
      header('Content-Type: application/json');
      require_once 'config.php';
      require_once 'Action.php';
      $actions = new Action($connect,$_SESSION['name']);

      // all pupils against assignment
      $out = $actions->submitted_assignment();

      $scores = array();
      $pupil = array();

      foreach($out as $x){
        $scores []= $x['score'];
        $pupil []= $x['first_name'].'-'.$x['user_code'];
      }
      //numbering the array indexes, will only return 5 array indexes EVER.  All indexes will be over written on each loop.
      echo json_encode(array('pupil'=>$pupil,'scores'=>$scores));

 ?>
