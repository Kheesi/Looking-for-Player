
<header>


	<nav  class="navigation" role="navigation" aria-label="site navigation">
                    <ol class="-list">
      <li class="-item"><a class="bandeau" href='Accueil.php' style='text-decoration:none'>FPS</a></li>
      <li class="-item"><a class="bandeau" href='Joueurs.php' style='text-decoration:none'>Joueurs</a></li>
      <li class="-item"><a class="bandeau" href='Equipes.php' style='text-decoration:none'>Equipes</a></li>
      <?php

	if(isset($_SESSION['utilisateur'])) {
        echo  '<li class="-item">
           <a href="mesannonces.php" class="bandeau" style="text-decoration:none">Mes annonces</a>
            </li>
            <li class="-item _current">
            <a id="deco" class="bandeau" href="deconnexion.php" style="text-decoration:none">Deconnexion</a>
        </li>
        ';
	}
        else {
        echo '<li class="-item">
            <a class="bandeau" href="connexion.php" style="text-decoration:none">Se connecter</a>
        </li>
        <li class="-item">
           <a class="bandeau" href="register.php" style="text-decoration:none">S\'enregistrer</a>
        </li>'; }
        echo '</ol></nav>';

  ?>
 
  
  </header>
 
