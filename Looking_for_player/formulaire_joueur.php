<?php

session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <Title>FPS - Fun Players Seeking  </Title>
    <link rel="stylesheet" href="bandeau.css" />
     <link rel="stylesheet" href="formulaire-annonce.css" />
  </head>

  <body>

    <div id="entete">
          <div class="bandeau">
            <?php include("bandeau.php");?>
          </div>
        </div>



 <?php   if(!isset($_SESSION['utilisateur'])){
                echo "vous devez être connecter pour poster une annonce,<a href='connexion.php'>se connecter.</a>";
              }else{
              echo      "<div id=\"formulaire_cv_equipe\">
                        <form action=\"Traitement_formulaire_joueur.php\" method=\"post\">
                        <h2>Créez votre annonce</h2>
                        <p><input class=\"form-control\" type=\"text\" placeholder=\"Titre de l'annonce\" name=\"titre\"></p>
                        <p><input class=\"form-control\" type=\"text\" placeholder=\"Pseudo\" name=\"pseudo\"></p>
                        <p class=\"text\"> Serveur:</p><p><select name=\"serveur\">
                        <option value=\"Europe Ouest\">Europe de l'Ouest</option>
                        <option value=\"Europe Nord Est\">Europe du Nord Est </option>
                        <option value=\"Amerique Nord\">Amérique du Nord</option>
                        <option value=\"Amerique Latine Nord\">Amérique Latine Nord</option>
                        <option value=\"Amerique Latine Sud\">Amérique Latine Sud</option>
                        <option value=\"Bresil\">Brésil</option>
                        <option value=\"Japon\">Japon</option>
                        <option value=\"Turquie\">Turquie</option>
                        <option value=\"Oceanie\">Océanie</option>
                        <option value=\"Republique de Coree\">République de Corée</option>
                        </select>
                        </p>

                        <p class=\"text\">Rôles Recherchés</p>
                        <p><input type=\"checkbox\" id =\"role1\" class=\"role\" name=\"role[]\" value=\"Support\">
                          <label for=\"role1\">Support</label></p>
                       <p>  <input type=\"checkbox\" id =\"role2\" class=\"role\" name=\"role[]\" value=\"Mid\">
                          <label for=\"role2\">Mid</label></p>
                        <p> <input type=\"checkbox\"  id =\"role3\" class=\"role\" name=\"role[]\" value=\"Ad carry\">
                          <label for=\"role3\">Ad carry</label></p>
                        <p> <input type=\"checkbox\"  id =\"role4\" class=\"role\" name=\"role[]\" value=\"Top\">
                          <label for=\"role4\">Top</label>
                       <p>  <input type=\"checkbox\"  id =\"role5\" class=\"role\" name=\"role[]\" value=\"Jungler\">
                          <label for=\"role5\">Jungler</label></p>

      <p class=\"text\">Ligue:</p><p><select name=\"ligue\">
                <option value=\"Bronze\">Bronze</option>
                <option value=\"Silver\">Silver</option>
                <option value=\"Gold\">Gold</option>
                <option value=\"Platinum\">Platinum</option>
                <option value=\"Diamond\">Diamond</option>
                <option value=\"Master\">Master</option>
                <option value=\"Challenger\">Challenger</option>

              </select></p>
      <p class=\"text\">Description:</p><textarea  name=\"description\" rows=\"20\" cols=\"60\"></textarea>
      <p><input class=\"bouton\" type=\"submit\" value=\"Envoyer\"/></p>
    </form>";}
    ?>
    <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
</body>
</html>

