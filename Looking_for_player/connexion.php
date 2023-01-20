<?php

session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <Title>FPS - Fun Players Seeking </Title>
    <link rel="stylesheet" href="connexion.css" />
    <link rel="stylesheet" href="bandeau.css" />
  </head>

  <body class="connexion">

      <div id="entete">
          <div class="bandeau">
            <?php include("bandeau.php");?>
          </div>
      </div>


      <div id="main">
          <div class="connexion">
              <form class="form-signin" action="connexion_confirm.php" method="post">       
                  <h2 class="form-signin-heading">Connexion</h2>
                  <input type="text" class="form-control" name="id" placeholder="Identifiant" required="" autofocus="" />
                  <input type="password" class="form-control" name="mdp" placeholder="Mot de passe" required=""/>      
                  <p> <button class="bouton-connexion" name="connexion" type="submit">Connexion</button> </p>  
              </form>
          </div>
      </div>
      <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
      </div>
</body>
</html>

