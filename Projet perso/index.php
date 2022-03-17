<?php     
session_start();
include './connexion_bdd.php';
$LOG_ONGLET = 'index.php';
include './log.php';

?>





<!DOCTYPE html>

<html>

<head>

    <title> Accueil</title>
    <link rel="stylesheet" href="styles.css">
    <h1 class = "Titre"> Toshanga </h1>

</head>

<body> <?php include './menu.php'; ?>



<nav class="pseudo">
<?php echo 'User name : '.$_SESSION["CLIENT_NAME"]; ?>
</nav>
<p> </p>
<p> </p>
<p> </p>
<a class ="retour" href="#" onclick="history.go(-1)"> Retour </a>


</body>

</html>