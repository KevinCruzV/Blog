<?php
session_start();
if( isset($_SESSION["token"]) && $_SESSION["token"] == true ):
?>
<!-- Doctype -->
<?php include_once("head.php")?>

<!-- header + nav -->
<header>
<?php include_once("nav_log.php")?>    
</header>

<!-- Main -->
<main>
<p>Connecté !</p>
</main>

<?php include_once("foot.php")?>
<?php 
else :
    header("Location : login.php");  
    exit;
endif;?>