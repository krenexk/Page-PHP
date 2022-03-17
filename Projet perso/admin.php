<?php     
session_start();  
include './connexion_bdd.php';
$LOG_ONGLET = 'admin.php';
include './log.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title> Admin </title>
    <link rel="stylesheet" href="styles.css">
    <h1 class = "Titre"> La Adrémythèque </h1>
</head>
<body> <?php include './menu.php'; ?>




<p> </p>


<nav class="pseudo">
<?php 
//$_SESSION["CLIENT_NAME"] = 'USER'.date('is');
echo 'User name : '.$_SESSION["CLIENT_NAME"];
?>
</nav>


<p> </p>
<p> </p>
<a class ="retour" href="#" onclick="history.go(-1)"> Retour </a>

</body>
</html>