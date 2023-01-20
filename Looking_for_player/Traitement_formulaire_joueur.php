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


     <?php  $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
            //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
     
            echo mysqli_connect_error();
            $titre=addslashes($_POST['titre']);
            $id=addslashes($_POST['pseudo']);
            $serv=$_POST['serveur'];
            $tabrole=$_POST['role'];
            $role="".implode(",",$tabrole)."";
            $ligue=$_POST['ligue'];
            $description=addslashes($_POST['description']);
            $iduser=$_SESSION['utilisateur'];
            $requete="INSERT INTO Annonce(titre,pseudo,serveur,role,ligue,description,id_user,type_annonce) VALUES('$titre','$id','$serv','$role','$ligue','$description','$iduser',0)";
            if(mysqli_query($connexion,$requete)){

            echo "Votre annonce a bien été enregistrée.";}
            Else
              echo "Votre annonce n'a pas été enregistrée.";
            mysqli_close($connexion);
    ?>

 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>

    </body>
</html>
