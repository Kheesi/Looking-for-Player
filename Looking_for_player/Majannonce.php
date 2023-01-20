<?php

session_start();
?>

<!DOCTYPE html>

<html>
  <head>
    <meta charset="utf-8"/>
    <Title>FPS - Fun Players Seeking </Title>
   <link rel="stylesheet" href="bandeau.css" />
    <link rel="stylesheet" href="formulaire-annonce.css" />
  </head>

  <body>

    <div id="entete">
          <div class="bandeau">
            <?php include("bandeau.php");?>
          </div>
        </div>

<?php     $id_annonce=$_GET['id_annonce'];
          $_SESSION['id_annonce']=$id_annonce;


         $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
            //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
          echo mysqli_connect_error();
          $id=$_SESSION['utilisateur'];
          $requete="SELECT * FROM Annonce WHERE  id_user='$id'";
          $res=mysqli_query($connexion,$requete);
          $P=mysqli_fetch_array($res);



          ?>
                      <div id="formulaire_cv_equipe">
      <form action="Traitement_maj.php" method="post">
      <p> <h2>Titre de l'annonce:</h2><input  class="form-control"  type="text" name="titre" value="<?php echo $P['titre'];?>"></p>
      <p><input class="form-control" type="text"  name="pseudo" value="<?php echo $P['pseudo'];?>"></p>
      <p class="text"> Serveur:</p><p><select name="serveur" >
                <option value="Europe_Ouest">Europe de l'Ouest</option>
                <option value="Europe_Nord_Est">Europe du Nord Est </option>
                <option value="Amerique_Nord">Amérique du Nord</option>
                <option value="Amerique_Latine_Nord">Amérique Latine Nord</option>
                <option value="Amerique_Latine_Sud">Amérique Latine Sud</option>
                <option value="Bresil">Brésil</option>
                <option value="Japon">Japon</option>
                <option value="Turquie">Turquie</option>
                <option value="Oceanie">Océanie</option>
                <option value="Republique_Coree">République de Corée</option>
              </select>
      </p>

      <p class="text">Rôles:</p><p><input type="checkbox" id ="role1" class="role" name="role[]" value="Support">
                          <label for="role1">Support</label></p><p>
                        <input type="checkbox" id ="role2"  class="role" name="role[]" value="Mid">
                          <label for="role2">Mid</label></p><p>
                        <input type="checkbox" id ="role3" class="role" name="role[]" value="Ad_carry">
                          <label for="role3">Ad carry</label></p><p>
                        <input type="checkbox" id ="role4" class="role" name="role[]" value="Top">
                          <label for="role4">Top</label></p><p>
                        <input type="checkbox" id ="role5" class="role" name="role[]" value="Jungler">
                          <label for="role5">Jungler</label></p>
      <p class="text">Ligue:</p><p><select name="ligue" >
                <option value="Bronze">Bronze</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
                <option value="Diamond">Diamond</option>
                <option value="Master">Master</option>
                <option value="Challenger">Challenger</option>

              </select></p>
      <p class="text">Description:</p><textarea  name="description" rows="20" cols="60"><?php echo $P['description'];?></textarea>

      <p><input class="bouton" type="submit" value="Envoyer"/></p>
    </form>
  </div>


          <?php

          mysqli_close($connexion);


?>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
</body>
