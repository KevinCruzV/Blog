<?php
session_start();

$login;
$pass;

if(  ( isset( $_POST['login'] ) ) && ( isset( $_POST['password'] ) ) && 
( ( $_POST['login'] == $login ) && ( $_POST['password'] == $pass ) ) ) :

    
    $_SESSION['token'] = true; 
    header("Location: log_blog.php"); // Je redirige
    exit;

else :
    header("Location: login.php"); // Je redirige vers la page de login sans authorisation
    exit;


endif;


?>