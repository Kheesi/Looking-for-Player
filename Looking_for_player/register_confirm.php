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


    <div>
      <?php
     $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
            //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
       
        echo mysqli_connect_error();
        if(isset($_POST['register'])){
          
        $id=$_POST['id'];
        $mdp=$_POST['mdp'];
        $mdp2=$_POST['mdp2'];
        $email=$_POST['email'];

         $requete="SELECT * FROM Utilisateur";
         $res=mysqli_query($connexion,$requete);

       if(isset($id) && isset($mdp) && isset($mdp2) && isset($email)){

        if($mdp!=$mdp2){
              echo "Les deux mots de passes tapés sont différents, veuillez<a href='register.php'> cliquer ici</a> pour revenir à la page d'inscription";}
        else {
        while($P=mysqli_fetch_array($res)){
          if($id==$P['pseudo']){
            echo "$id est déjà utilisé, veuillez<a href='register.php'> cliquer ici</a> pour revenir à la page d'inscription";
            die;}
          if($email==$P['email']){
             echo "Email déjà utilisé, veuillez<a href='register.php'> cliquer ici</a> pour revenir à la page d'inscription";
             die;}
          }        
        $hashmdp = hash('sha256', $mdp);
            $requete="INSERT INTO Utilisateur(pseudo,mdp,email) VALUES('$id','$hashmdp','$email')";
              if(mysqli_query($connexion,$requete)){
                    echo "<p>Votre compte a bien été enregistré, veuillez cliquer sur <a href='connexion.php'>ce lien </a> pour vous connecter.</p>";}}}}

mysqli_close($connexion);
?>


</div>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
</body>
</html>
