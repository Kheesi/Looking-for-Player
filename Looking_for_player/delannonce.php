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
     <?php
            $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
            //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
            echo mysqli_connect_error();
            $id_annonce=$_SESSION['id_annonce'];
            $requete="DELETE FROM Annonce WHERE id_annonce='$id_annonce'";
            if(mysqli_query($connexion,$requete)){

            echo "Votre annonce a bien été supprimée.";}
            Else
              echo "Votre annonce n'a pas été supprimée.";
            mysqli_close($connexion);
    ?>
   </div>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
    </body>
</html>
