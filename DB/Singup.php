<?php 
session_start();
require_once("DB.php");

$login=$_POST['login'];
$email=$_POST['email'];
$password=$_POST['password'];
$password_confirm=$_POST['password_confirm'];

if($password===$password_confirm){
    $password=md5($password);
    mysqli_query($connect, "INSERT INTO `Form` (`id`,`login`,`Password`,`Email`) VALUES (NULL,'$login','$password','$email')");
    header('Location:../pages/SingIn.php');
}else{
    $_SESSION['message']='Password dont match';
    header('Location:../pages/register.php');
}
