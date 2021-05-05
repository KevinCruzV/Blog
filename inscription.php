<?php session_start();?>
<?php include_once("head.php")?>

<header>
<?php include_once("nav_home.php");?>
</header>

<main>

<h2>Inscrivez vous !</h2>

<form action="validationInscrip.php" method="post">
<label for="login">Login :</label>
<input type="text" name="login" id="login" required>
<label for="password">Mot de Passe :</label>
<input type="password" name="password" id="password" required>
<label for="pass_confirm">Confirmation :</label>
<input type="password" name="pass_confirm" id="pass_confirm" required>
<input type="submit" value="Inscription">
</form>

</main>  

<?php include_once("foot.php")?>