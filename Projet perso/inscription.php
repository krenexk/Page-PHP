<?php 
session_start();    
include './connexion_bdd.php';
$LOG_ONGLET = 'inscription.php';
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
  <form method="post" action="./inscription_post.php">
    <nav class="info">
  Pseudo: <input autofocus onkeyup="this.value=this.value.toUpperCase()" type="text" size="10" maxlength="12" minlength="8" name="champ1" /><br />
  MDP: <input type="password" required size="10" maxlength="12" minlength ="8" name="champ2" /><br />
  Confirmation du MDP: <input type="password" required size="10" maxlength="12" minlength ="8" name="champ3" /><br />
</nav>
  <nav class="inscription">
  <p>Le nom d'utilisateur doit être compris entre 8 et 12 caractères</p>
  <p>Le mot de passe doit également être compris entre 8 et 12 caractères</p>
</nav>
  <nav class="bouton">
  <input type="submit" value="Send" />
  <p> </p>
  <p> </p>
  <p> </p>
  <a class ="retour" href="#" onclick="history.go(-1)"> Retour </a>
</nav>
  
</form>

</body>
</html>



