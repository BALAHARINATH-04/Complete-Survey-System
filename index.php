<?php
session_start();
if(isset($_SESSION["loginusername"])){
    header("Location:home/home.php?welcometoast=true");
}
if(!isset($_SESSION["loginusername"])&&isset($_COOKIE["loginusername"])){
    $_SESSION["loginusername"]=$_COOKIE["loginusername"];
    header("Location:home/home.php?welcometoast=true");
}
if(!isset($_SESSION["loginusername"])&&!isset($_COOKIE["loginusername"])){
    header("Location:login.php");
}
?>