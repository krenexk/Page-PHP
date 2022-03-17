<?php 
session_start();    
include './connexion_bdd.php';
$LOG_ONGLET = 'page1.php';
include './log.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title> Page 1</title>
    <h1 class = "Titre"> Toshanga </h1>
</head>
<body> <?php include './menu.php'; ?>


<link rel="stylesheet" href="styles.css">
<nav class="pseudo">
<?php echo 'User name : '.$_SESSION["CLIENT_NAME"]; ?>
</nav>
<p> </p>
  <p> </p>
  <p> </p>
  <a class ="retour" href="#" onclick="history.go(-1)"> Retour </a>

</body>
</html>