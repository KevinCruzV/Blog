<?php
// ouvre la session
session_start();

$login = htmlentities(filter_input(INPUT_POST, "login"));
$pass = htmlentities(filter_input(INPUT_POST, "password"));
$passConf = htmlentities(filter_input(INPUT_POST, "pass_confirm"));


// se connecte a la base de donnée
try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','',[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
}
catch(Exception $e){
    die("Erreur :". $e->getMessage());
}




if($_SERVER["REQUEST_METHOD"] == "POST") {
    $post = true;
} else {
    $post = false;
}


if($post){
    if( $pass == $passConf){

        // requete
        $stmt = $bdd->prepare('INSERT INTO utilisateur (user_name, user_password) 
        VALUES (:log_, :pass)');

        $stmt->execute(array(
           'log_'=>$login, 
           'pass'=>$pass
        ));

        $_SESSION['token'] = true; 
        header("Location: log_blog.php"); // Je redirige
        exit;


    }else{
        header("Location : inscription.php");  
        exit;
    }    
}else{
    header("Location : inscription.php");  
    exit;
}    