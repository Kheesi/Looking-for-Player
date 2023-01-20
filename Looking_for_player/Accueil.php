<?php

session_start();
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8"/>
    <Title>FPS - Fun Players Seeking </Title>
    <link rel="stylesheet" href="bandeau.css" />
  </head>

  <body>
        <div id="entete">
          <div class="bandeau">
            <?php include("bandeau.php");?>
          </div>
        </div>

    
        <div id="main">
          <div class="joueur-texte">
            <h2>Tu es un joueur </h2>
            <p class="text">Nous aidons les joueurs à se faire recruter, pour se faire vous pouvez créer une annonce, ou parcourir les annonces déjà publiées.</p>
            <h2 id="equipe">Vous êtes une équipe</h2>
            <p class="text">Nous aidons les équipes à trouver leurs futurs joueurs, pour se faire vous pouvez créer une annonce, ou parcourir les annonces déjà publiées.</p>
          </div>
          <div class="joueur-lien">
            <form id="joueur"  >
              <ol class="liste">
                <li class="liste"><input type="button" class="p" value="Rechercher une équipe" onclick="window.location.href='Equipes.php'"></li>
                <li class="liste"><input type="button" class="p" value="Crée ton annonce de joueur"  onclick="window.location.href='formulaire_joueur.php'"></li>
              </ol>
            </form>
            <form id="equipe">
              <ol class="liste">
                <li class="liste"><input type="button" class="p" value="Recherche de joueurs pour ton équipe" onclick="window.location.href='Joueurs.php'"></li>
                <li class="liste"><input type="button" class="p" value="Crée ton annonce d'équipe" onclick="window.location.href='formulaire_equipe.php'"></li>
              </ol>
            </form>    
          </div>
        </div>

        <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
</body>
</html>
