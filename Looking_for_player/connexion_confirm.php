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


<?php   
        $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
        //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
        echo mysqli_connect_error();
        if(isset($_POST['connexion'])){
        $id=$_POST['id'];
      $mdp=$_POST['mdp'];
    
      $requete="SELECT * FROM Utilisateur WHERE pseudo='$id'";
      $res=mysqli_query($connexion,$requete);
    $P=mysqli_fetch_array($res);
      if(hash('sha256', $mdp)==$P['mdp']){

        
        session_start();
        $_SESSION['utilisateur']=$P['id_user'];
	header('Location: Accueil.php');
        }
      else{
        echo "L'identifiant ou le mot de passe est incorrect.";}}

         mysqli_close($connexion);

  ?>
  <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
</body>
</html>
