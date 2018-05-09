<?php
  if (!isset($_POST['username']))
  {
    include 'myForm.html.php';
    exit();
  }
  else {
    include 'functions/DBFunctions.php';
    $user = htmlspecialchars($_POST['username'], ENT_QUOTES, 'utf-8');
    $pass = htmlspecialchars($_POST['password'], ENT_QUOTES, 'utf-8');

    if (validUser($user, $pass)==true) {
      session_start();
      $_SESSION['username'] = $user['username'];

      header('Location: home/');
    }else {
      include 'myForm.html.php';
      echo "Invalid Username or Password";
      exit();
    }
  }
?>
