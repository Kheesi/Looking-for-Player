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
        <?php  $id=$_GET['id_annonce'];
                if(isset($_SESSION['utilisateur'])){
                $id_user=$_SESSION['utilisateur'];} 

         $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
        //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
            echo mysqli_connect_error();
             $requete="SELECT * FROM Annonce WHERE id_annonce='$id' AND type_annonce='0'";
             $res=mysqli_query($connexion,$requete);
            while($P=mysqli_fetch_array($res)){
              echo "<div class=\"annonce\">{$P['titre']}<br><br>
                                          Pseudo:<br>{$P['pseudo']} <br><br>
                                          Serveur:<br>{$P['serveur']}<br><br>
                                          Role:<br>{$P['role']}<br><br>
                                          Ligue:<br>{$P['ligue']}<br><br>
                                          {$P['description']}<br><br></div>";
               if(isset($_SESSION['utilisateur'])){
                if($id_user==$P['id_user']){
                  echo "<a href='Majannonce.php?id_annonce={$P['id_annonce']}'>Editer l'annonce</a> <a href='delannonce.php?id_annonce={$P['id_annonce']}'>Supprimer l'annonce</a><br>";}
                  }else{
              echo "<a href='contact.php?id_user={$P['id_user']}'>Envoyer un email</a><br>";

                    }
                    }
                    



                    $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
                    //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
            echo mysqli_connect_error();
             $requete="SELECT * FROM Annonce WHERE id_annonce='$id' AND type_annonce='1'";
             $res=mysqli_query($connexion,$requete);
            while($P=mysqli_fetch_array($res)){
               echo "<div class=\"annonce\">{$P['titre']}<br><br>
                                          Pseudo:{$P['pseudo']} <br><br>
                                          Serveur:{$P['serveur']}<br><br>
                                          Role:{$P['role']}<br><br>
                                          Ligue:{$P['ligue']}<br><br>
                                          {$P['description']}<br><br></div>";
              if(isset($_SESSION['utilisateur'])){
               if($id_user==$P['id_user']){
                echo "<a href='Majannonce.php?id_annonce={$P['id_annonce']}'>Editer l'annonce</a> <a href='delannonce.php?id_annonce={$P['id_annonce']}'>Supprimer l'annonce</a><br>";
            }}else{
                echo "<a href='contact.php?id_user={$P['id_user']}'>Envoyer un email</a><br>";

} }
                    

                    mysqli_close($connexion);



        ?>
          
        </div>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>

</body>
</html>
