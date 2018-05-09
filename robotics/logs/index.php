<?php
include '../model/DBAdapter.php';
  session_start();
  if (!isset($_SESSION['username'])) {
    header('Location: ../');
  }else {

    include '../functions/DBFunctions.php';


    if (!isset($_POST['link'])) {
      $logs = getStudentLog();
      include 'myForm.html.php';
    }else {
      $SelectOption =  htmlspecialchars($_POST['link'], ENT_QUOTES, 'UTF-8');

    if ($SelectOption == 1 || $SelectOption == NULL) {
      $logs = getStudentLog();
      include 'myForm.html.php';
    }elseif ($SelectOption == 2) {
      $logs = getStudentLogWeek();
      include 'myForm.html.php';
    }elseif ($SelectOption == 3) {
      $logs = getStudentLogAll();
      include 'myForm.html.php';
    }
    }
}
?>
