<?php 
session_start();  
include './connexion_bdd.php';

// on recupere les champs donnés par le formulaire inscription.php
$TRY_NAME = $_POST['TRY_NAME'];
$TRY_MDP = $_POST['TRY_MDP']; 


		$TRY_MDP_ENCODE = base64_encode($TRY_MDP);

    $requete = $bd->prepare("SELECT `CLIENT_MDP` FROM `CLIENT_TABLE` WHERE `CLIENT_NAME` = '$TRY_NAME';");
    $requete -> execute();
    while ($message = $requete->fetch()) { 
	      $verificator = $message['CLIENT_MDP'];
    }
    $requete->closeCursor();


  if ($verificator == $TRY_MDP_ENCODE) { 
    $_SESSION["CLIENT_NAME"] = $TRY_NAME;
    echo "En cours de connexion";
  }
  if ($verificator != $TRY_MDP_ENCODE) { 
    echo "Mdp ou Pseudo incorrect";
  }






?>

<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<meta http-equiv="refresh" content="1; URL=https://ouemek.000webhostapp.com/">
	<title> SCRIPT d'INSCRIPTION </title>
</head>
<body>
</body>
</html>