<?php
include("fonctions.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Informations</title>
	<link href="style.css" rel="stylesheet" media="all" type="text/css">
	</head>

	<body>
		<div class="menu">
  <a href="boutique.html" class="active">Accueil</a>
  <br>
  
  <br>
  
  <br>
  <a href="connexion.html">Connexion</a>
  <br>
  <a href="inscription.html">Inscription</a>
</div>

		<h1 align=center>le meilleur site de moto de vente en ligne</h1><br>
		<section>
		<?php
		//On se connecte
		connectMaBase();
// On prépare la requête qui va mettre dans un tableau tout ce qui concerne l’auteur Jando
		$sql = 'SELECT * FROM motoshop WHERE $champ="$critere"';
		$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
		//on organise $req en tableau associatif $data['champ']
		//en scannant chaque enregistrement récupéré
		//on en profite pour gérer l'affichage
		//titre de la section avant la boucle
		echo'<h2>Fiche de : $critere </h2>';
		//boucle
		while ($data = mysql_fetch_array($req)) {
			// on affiche les résultats
			
			echo 'marque :<strong>'.$data['marque'].'</strong><br/>';
			echo 'cylindre :'.$data['cylindre'].'<br/>';
			echo 'annee :'.$data['annee'].'<br/>';
			echo 'prix :'.$data['prix'].'<br/><br/><br/>';

	}
		//On libère la mémoire mobilisée pour cette requête dans sql
		//$data de PHP lui est toujours accessible !
		mysql_free_result ($req);
		//On ferme sql
		mysql_close ();
		?>
		</section>
	</body>
</html>