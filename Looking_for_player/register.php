<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <Title>FPS - Fun Players Seeking </Title>
    <link rel="stylesheet" href="bandeau.css" />
    <link rel="stylesheet" href="register.css" />
  </head>

  <body>
    <div id="entete">
          <div class="bandeau">
            <?php include("bandeau.php");?>
          </div>
        </div>


 <div class="register">
    <form class="form-signup" action="register_confirm.php" method="post">       
      <h2 class="form-signup-heading">S'enregistrer</h2>
     <p><input type="text" class="form-control"  name="id" placeholder="Identifiant" required="" autofocus="" /></p> 
     <p> <input type="password" class="form-control"  name="mdp" placeholder="Mot de passe" required=""/>  </p> 
     <p> <input type="password" class="form-control" name="mdp2" placeholder="Retapez le mot de passe" required=""/> </p> 
     <p> <input type="email" class="form-control" name="email" placeholder="Email" required=""/>      </p>  
    
     <p> <button class="bouton-connexion" name="register" type="submit">S'enregistrer</button> </p>  
    </form>
  </div>
 <div id="footer">
          <p class="sign">Tous droits réservés Merci de ne pas copier le contenu de ce site sans autorisation.</p>
        </div>
</body>
</html>
