<?php
// ouvre la session
session_start();

// se connecte a la base de donnée
try{
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8','root','',[
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ]);
}
catch(Exception $e){
    die("Erreur :". $e->getMessage());
}


// requete
$stmt = $bdd->prepare('SELECT * FROM utilisateur');


$stmt->execute();


$datas = $stmt->fetchAll();



// while($datas = $stmt->fetchAll()){
//     var_dump($datas);
// }



foreach($datas as $data ){
    if(  ( isset( $_POST['login'] ) ) && ( isset( $_POST['password'] ) ) && 
    ( ( $_POST['login'] == $data["user_name"] ) && ( $_POST['password'] == $data["user_password"] ) ) ) :
            
        $_SESSION['token'] = true; 
        header("Location: log_blog.php"); // Je redirige
        exit;

    else :
        header("Location: login.php"); // Je redirige vers la page de login sans authorisation
        exit;


    endif;
       
}