<?php
session_start();

$_SESSION['email']='';
$_SESSION['password']='';
// $_SESSION['username']='';
// $_SESSION['nama']='';


unset($_SESSION['email']);
unset($_SESSION['password']);
// unset($_SESSION['username']);
// unset($_SESSION['nama']);


session_unset();
session_destroy();
header('Location:login.php');

?>