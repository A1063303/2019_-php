<?php 
session_start();

unset($_SESSION["login"]);
unset($_SESSION["NO"]);
unset($_SESSION["id"]);
header("Location: login.php");

 ?>