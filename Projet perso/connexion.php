<?php 
session_start();    
include './connexion_bdd.php';
$LOG_ONGLET = 'connexion.php';
include './log.php';
?>



<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title> Inscription </title>
  <link rel="stylesheet" href="styles.css">
</head>
<body>
  <?php include './menu.php';
  ?>
  <form method="post" action="./connexion_post.php">

  Pseudo: <input autofocus onkeyup="this.value=this.value.toUpperCase()" type="text" size="10" maxlength="12" minlength="8" name="TRY_NAME" /><br />
  MDP: <input type="password" required size="10" maxlength="12" minlength ="8" name="TRY_MDP" /><br />
  <input type="submit" value="Connecter" />
  <p> </p>
  <p> </p>
  <p> </p>
  <a class ="retour" href="#" onclick="history.go(-1)"> Retour </a>
  
</form>

</body>
</html>



