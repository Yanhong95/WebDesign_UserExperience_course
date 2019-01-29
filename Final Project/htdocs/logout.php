<?php  
session_start();
unset($_SESSION['username']);
header('Location: http://localhost:8888/login.php');
?>