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
<p> <?php echo 'User name : '.$_SESSION["CLIENT_NAME"]; ?></p>
</nav>
</body>
</html>