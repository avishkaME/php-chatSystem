<?php

  include('../config.php');
  switch ($_REQUEST['action']) {
    case 'sendMessage':

      session_start();

      $query = $db->prepare("INSERT INTO messages SET user=?, message=?");
      $run = $query->execute([$_SESSION['username'], $_REQUEST['message']]);

      if($run){
        echo 1;
        exit;
      }

      break;

  }
?>
