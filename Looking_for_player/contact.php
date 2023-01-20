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



        <?php $id_user=$_GET['id_user'];
        $connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
            echo mysqli_connect_error();
             $requete="SELECT email FROM Utilisateur WHERE id_user='$id_user'";
             $res=mysqli_query($connexion,$res);

             $P=mysqli_fetch_array($res);
             ?>

        <form action="<?php echo $P['email'];?>"  method="post">
          <p>Pseudo :<input type="text" name="pseudo"></p>
          <p>Message :</p><textarea name="description" rows="20" cols="60"></textarea>
          <p><input type="submit" value="Envoyer"/></p>
    </form>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
  </body>
  </html>

