<link rel="stylesheet" href="styles.css">

<?php
    if ($LOG_ONGLET == 'index.php') {
        ?>
        <nav class="menu">
          <ul class="menuprincpal">
            <li><a href="https://ouemek.000webhostapp.com/index.php"> <strong> Index </strong> </a></li>
            <li><a href="https://ouemek.000webhostapp.com/page1.php"> Page</a></li>
            <li><a href="https://ouemek.000webhostapp.com/admin.php"> Admin</a></li>
            <li><a href="https://ouemek.000webhostapp.com/inscription.php">Inscription</a></li>
            <li><a href="https://ouemek.000webhostapp.com/connexion.php">Connexion</a></li>
            
        <?php
    }

    if ($LOG_ONGLET == 'page1.php') {
        ?>
        <nav class="menu">
          <ul class="menuprincpal">
            <li><a href="https://ouemek.000webhostapp.com/index.php"> Index </a></li>
            <li><a href="https://ouemek.000webhostapp.com/page1.php"> <strong> Page 1 </strong> </a></li>
            <li><a href="https://ouemek.000webhostapp.com/admin.php"> Admin</a></li>
            <li><a href="https://ouemek.000webhostapp.com/inscription.php">Inscription</a></li>
            <li><a href="https://ouemek.000webhostapp.com/connexion.php">Connexion</a></li>

        
        <?php
    }

    if ($LOG_ONGLET == 'admin.php') {
        ?>
        <nav class="menu">
          <ul class="menuprincpal">
            <li><a href="https://ouemek.000webhostapp.com/index.php"> Index </a></li>
            <li><a href="https://ouemek.000webhostapp.com/page1.php"> Page 1</a></li>
            <li><a href="https://ouemek.000webhostapp.com/admin.php"> <strong> Admin </strong> </a></li>
            <li><a href="https://ouemek.000webhostapp.com/inscription.php">Inscription</a></li>
            <li><a href="https://ouemek.000webhostapp.com/connexion.php">Connexion</a></li>
            
        <?php
    }
?>

<?php
    if ($LOG_ONGLET == 'inscription.php') {
        ?>
        <nav class="menu1">
          <ul class="menuprincpal">
            <li><a href="https://ouemek.000webhostapp.com/index.php"> Index </a></li>
            <li><a href="https://ouemek.000webhostapp.com/page1.php"> Page 1</a></li>
            <li><a href="https://ouemek.000webhostapp.com/admin.php"> Admin</a></li>
            <li><a href="https://ouemek.000webhostapp.com/inscription.php"><strong>Inscription</strong> </a></li>
            <li><a href="https://ouemek.000webhostapp.com/connexion.php">Connexion</a></li>
          <?php
        }

    if ($LOG_ONGLET == 'connexion.php') {
        ?>
        <nav class="menu1">
          <ul class="menuprincpal">
            <li><a href="https://ouemek.000webhostapp.com/index.php">  Index </a></li>
            <li><a href="https://ouemek.000webhostapp.com/page1.php"> Page</a></li>
            <li><a href="https://ouemek.000webhostapp.com/admin.php"> Admin</a></li>
            <li><a href="https://ouemek.000webhostapp.com/inscription.php">Inscription</a></li>
            <li><a href="https://ouemek.000webhostapp.com/connexion.php"><strong>Connexion</strong></a></li>
            
      <?php
            }
      
    if (!empty($_SESSION['CLIENT_NAME'])) { 
        ?>
            
            <li class="deco"><a href="https://ouemek.000webhostapp.com/deconnexion.php">Déconnexion</a></li>
        <?php
    }
?>


          </ul>
        </nav>