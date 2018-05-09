<?php
include '../model/DBAdapter.php';
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: ../');
  }else {

    include '../functions/DBFunctions.php';
      $present = getPresent();
      $prefix = '../images/';
      include 'myForm.html.php';
  }
?>
