<?php 
session_start();  
include './connexion_bdd.php';


// on recupere les champs donnés par le formulaire inscription.php
$CLIENT_NAME = $_POST['champ1'];
$CLIENT_MDP = $_POST['champ2'];
$CLIENT_MDP_VERIF = $_POST['champ3']; 

if ($CLIENT_MDP == $CLIENT_MDP_VERIF) {
	//Le mot de passe a été confirmé avec succes
	// on cherche dans la bdd si le client name existe deja
    $requete = $bd->prepare("SELECT `CLIENT_NAME` FROM `CLIENT_TABLE` WHERE `CLIENT_NAME` = '$CLIENT_NAME';");
    $requete -> execute();
    while ($message = $requete->fetch()) { 
	      $CLIENT_NAME_BDD = $message['CLIENT_NAME'];
	      echo "CLIENT_NAME_BDD : ".$CLIENT_NAME_BDD;
    }
    $requete->closeCursor();
    if ($CLIENT_NAME_BDD == $CLIENT_NAME) {
    	echo "<p> Le nom d utilisateur existe deja </p>";
    	?> <style type="text/css"> body{ background-color: #780d0d} </style> <?php
    }
    if ($CLIENT_NAME_BDD != $CLIENT_NAME) {
    	echo "<p> Creation du compte </p>";
      $CLIENT_MDP_POST = base64_encode($CLIENT_MDP);
		$sql = "INSERT INTO CLIENT_TABLE (CLIENT_NAME, CLIENT_MDP) VALUES ('$CLIENT_NAME','$CLIENT_MDP_POST');";
		$conn->query($sql);
		$_SESSION["CLIENT_NAME"] = $_POST['champ1'];
		?> <style type="text/css"> body{ background-color: #126615} </style> <?php
    }
}

if ($CLIENT_MDP != $CLIENT_MDP_VERIF) {
	echo "<p> Mot de passe invalide </p>";
	?> <style type="text/css"> body{ background-color: #780d0d} </style> <?php
}

?>

<!DOCTYPE html>
<html>
<head>
 	<meta charset="utf-8">
	<meta http-equiv="refresh" content="3; URL=https://ouemek.000webhostapp.com/">
	<title> SCRIPT d'INSCRIPTION </title>
</head>
<body>
</body>
</html>