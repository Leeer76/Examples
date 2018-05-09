<?php
session_start();
unset($_SESSION['username']);
unset($_SESSION['access_level']);

$_SESSION = array();
session_destroy();

header('Location: ../home.html.php');

?>