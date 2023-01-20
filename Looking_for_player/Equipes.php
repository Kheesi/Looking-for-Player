<?php

session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <Title>FPS - Fun Players Seeking </Title>
    <link rel="stylesheet" href="bandeau.css" />
    <link rel="stylesheet" href="annonce.css" />
  </head>

  <body>

    <div id="entete">
          <div class="bandeau">
            <?php include("bandeau.php");?>
          </div>
        </div>



    <div class="formulaire_recherche_joueur">
	
      <form action="Joueurs.php" class="form-philtre" method="post">
	 <p id="philtre">Recherche avancée</p>
		  
      <p class="text"> Serveur : </p>
      <div class="custom-select"><p><select name="Serveur">
                <option value="0"></option>
                <option value="Europe Ouest">Europe de l'Ouest</option>
                <option value="Europe Nord Est">Europe du Nord Est </option>
                <option value="Amerique Nord">Amérique du Nord</option>
                <option value="Amerique Latine Nord">Amérique Latine Nord</option>
                <option value="Amerique Latine Sud">Amérique Latine Sud</option>
                <option value="Bresil">Brésil</option>
                <option value="Japon">Japon</option>
                <option value="Turquie">Turquie</option>
                <option value="Oceanie">Océanie</option>
                <option value="Republique de Coree">République de Corée</option>
              </select>
      </p>
      </div>
              <p class="text">Rôles joués :<p><input type="checkbox" id="role1" name="role[]" value="Support">
                          <label for="role1">Support</label></p>
                       <p> <input type="checkbox" id="role2" name="role[]" value="Mid">
                          <label for="role2">Mid</label></p>
                      <p>  <input type="checkbox" id="role3" name="role[]" value="Ad carry">
                          <label for="role3">Ad carry</label></p>
                      <p>  <input type="checkbox" id="role4" name="role[]" value="Top">
                          <label for="role4">Top</label></p>
                      <p>  <input type="checkbox" id="role5" name="role[]" value="Jungler">
                          <label for="role5">Jungler</label></p>
                    
              <p class="text">Ligue :</p>
              <div class="custom-select">
              <p><select name="ligue">
                <option value="0"></option>
                <option value="Bronze">Bronze</option>
                <option value="Silver">Silver</option>
                <option value="Gold">Gold</option>
                <option value="Platinum">Platinum</option>
                <option value="Diamond">Diamond</option>
                <option value="Master">Master</option>
                <option value="Challenger">Challenger</option>
              </select></p></div>
      <p><button class="bouton-philtre" name="filtre" type="submit" >Rechercher</button></p>
    </form>
  </div>


  <div>


<?php       $connexion=mysqli_connect("127.0.0.1","Yassine","selfesteem123","projet");
            //$connexion=mysqli_connect("inf-mysql.univ-rouen.fr","tischfre","10051995","tischfre");
            echo mysqli_connect_error();
            
            
            
           
            
            
           if(!isset($_POST['filtre'])){
            
              $requete="SELECT * FROM Annonce Where type_annonce='1'";
              $res=mysqli_query($connexion,$requete);
               while($P=mysqli_fetch_array($res)){

              echo "<a href='Annonce.php?id_annonce={$P['id_annonce']}&'>{$P['titre']}</a><br> Pseudo : {$P['pseudo']} <br> Ligue : {$P['ligue']} <br>";
            }}else{
               $ligue=isset($_POST['ligue']) ?($_POST['ligue']): NULL; 
            $tabrole=isset($_POST['role']) ?($_POST['role']): NULL; 
            $serv=isset($_POST['Serveur']) ?($_POST['Serveur']): NULL; 
            $role="".implode(",",$tabrole)."";
            
            if(!isset($role)){
              if($serv==0){ 
                if($ligue==0){
            $requete="SELECT * FROM Annonce WHERE  type_annonce='1'";}
                else{  $requete="SELECT * FROM Annonce WHERE  ligue='$ligue' AND type_annonce='1'";}}
             else{
               $requete="SELECT * FROM Annonce WHERE  serveur='$serv' AND ligue='$ligue' AND type_annonce='1'";}
            $res=mysqli_query($connexion,$requete);
           
            
             while($P=mysqli_fetch_array($res)){
                
                 echo "<a href='Annonce.php?id_annonce={$P['id_annonce']}'>{$P['titre']}</a><br> Pseudo : {$P['pseudo']} <br> Ligue : {$P['ligue']} <br>";}
          }
            else{
              
             $role="".implode(",",$tabrole)."";
             
              if($serv==0){ 
                if($ligue==0){
            $requete="SELECT * FROM Annonce WHERE  type_annonce='1'";}
                else{  $requete="SELECT * FROM Annonce WHERE  ligue='$ligue' AND type_annonce='1'";}}
             else{
               $requete="SELECT * FROM Annonce WHERE  serveur='$serv' AND ligue='$ligue' AND type_annonce='1'";}
              $res=mysqli_query($connexion,$requete);

            while($P=mysqli_fetch_array($res)){
                  
              $findme=$P['role'];
               
              $pos=strpos($findme,$role);
                
            if($pos!==false){


              

              echo "<a href='Annonce.php?id_annonce={$P['id_annonce']}'>{$P['titre']}</a><br> Pseudo : {$P['pseudo']} <br> Ligue : {$P['ligue']} <br>";
            }
          }
        }}


  mysqli_close($connexion);

?>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
</body>
</html>
