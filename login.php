<?php session_start();?>
<?php include_once("head.php")?>

<header>
<?php include_once("nav_home.php");?>
</header>

<main>

<h2>Connectez vous</h2>

<form action="validationLog.php" method="post">
<label for="login">Pseudo :</label>
<input type="text" name="login" id="login" required>
<label for="password">Mot de Passe :</label>
<input type="password" name="password" id="password" required>
<input type="submit" value="Enter">
</form>
<a href="inscription.php">Pas encore de compte ? Inscrivez vous</a> 

</main>  

<?php include_once("foot.php")?>