<?php

session_start();
session_unset();
session_destroy();
header('Location: connexion.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <Title>FPS - Fun Players Seeking</Title>
    <link rel="stylesheet" href="bandeau.css" />
  </head>

  <body>
    <div id="entete">
          <div class="bandeau">
            <?php include("bandeau.php");?>
          </div>
        </div>

<?php echo "Vous êtes déconnecté. <a href='Accueil.php'>Cliquez ici</a> pour revenir à l'accueil."; ?>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>


