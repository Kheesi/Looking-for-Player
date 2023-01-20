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
<?php $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
            //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
            echo mysqli_connect_error();

      $id_user=$_SESSION['utilisateur'];
      $requete="SELECT * FROM Annonce WHERE id_user='$id_user' AND type_annonce=0";

      $res=mysqli_query($connexion,$requete);

    while($P=mysqli_fetch_array($res)){
      echo "<a href='Annonce.php?id_annonce={$P['id_annonce']}'>{$P['titre']}</a><br> Pseudo : {$P['pseudo']} <br> Ligue : {$P['ligue']} <br>";
      echo "<a href='Majannonce.php?id_annonce={$P['id_annonce']}'>Editer l'annonce</a> <a href='delannonce.php?id_annonce={$P['id_annonce']}'>Supprimer l'annonce</a><br>
            <hr><br>";}

      $requete1="SELECT * FROM Annonce WHERE id_user='$id_user' AND type_annonce=1";
      $res1=mysqli_query($connexion,$requete1);

    while($L=mysqli_fetch_array($res1)){
      echo "<a href='Annonce.php?id_annonce={$L['id_annonce']}'>{$L['titre']}</a><br> Nom de l'équipe : {$L['pseudo']} <br> Ligue : {$L['ligue']} <br>";
      echo "<a href='Majannonce.php?id_annonce={$L['id_annonce']}'>Editer l'annonce</a> <a href='delannonce.php?id_annonce={$L['id_annonce']}'>Supprimer l'annonce</a><br>
      <hr><br>";}

       mysqli_close($connexion);

       ?>
       </div>
      <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
    </body>
    </html>
