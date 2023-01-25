<?php 

require_once("DB.php");

$login=$_POST['login'];
$password=md5($_POST['password']);


$check_user = mysqli_query($connect,"SELECT * FROM `Form` WHERE `login` = '$login' and `Password` = '$password'");

if (mysqli_num_rows($check_user) > 0) {

    header('Location: ../pages/main.html');

} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../pages/SingIn.php');
}