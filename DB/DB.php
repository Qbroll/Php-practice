<?php 

    $connect = mysqli_connect('localhost','root', '' ,'Reg/Auth');

if(!$connect){
    die('Error connect to Database');
}