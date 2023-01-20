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
            $titre=$_POST['titre'];
            $id=$_POST['pseudo'];
            $serv=$_POST['serveur'];
            $tabrole=$_POST['role'];
            $role="".implode(",",$tabrole)."";
            $ligue=$_POST['ligue'];
            $description=$_POST['description'];
            $id_annonce=$_SESSION['id_annonce'];
            $requete="UPDATE  Annonce SET titre='$titre',pseudo='$id',serveur='$serv',role='$role',ligue='$ligue',description='$description' WHERE id_annonce='$id_annonce'";
            if(mysqli_query($connexion,$requete)){

            echo "Votre annonce a bien été modifiée.";}
            Else
              echo "Votre annonce n'a pas été modifiée.";
            mysqli_close($connexion);
    ?>
</div>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>

    </body>
</html>
