<?php
include("fonctions.php");
?>
<img src="2.gif" align="right" border="5" height="200" width="200">
<meta charset :utf-8>
<link rel="stylesheet" type="text/css" href="boutique.css"> 
 <FONT size="6pt"> <h2 align="center">Bienvenue sur le magasin de vente en ligne de moto cross</h2></FONT>
 <ul id="menu-demo2">
  <li><a href="#">Acheter une moto</a>
    <ul>
      <li><a href="boutique.html">Ktm</a></li>
      <li><a href="boutique.html">Husqvarna</a></li>
      <li><a href="boutique.html">Honda</a></li>
      <li><a href="boutique.html">Yamaha</a></li>
    </ul>
  </li>
  <li><a href="#">Vendre une moto</a>
    <ul>
      <li><a href="boutique.html">Ktm</a></li>
      <li><a href="boutique.html">Husqvarna</a></li>
      <li><a href="boutique.html">Honda</a></li>
      <li><a href="boutique.html">Yamaha</a></li>
      <li><a href="vendre.php">Vendre une moto</a></li>
    </ul>
  </li>
  <li><a href="connexion.html">Connexion</a>
    <ul>
      
    </ul>
  </li>
  <li><a href="inscription.html">Inscription</a>
    <ul>
    	
    </ul>
  </li>

  <li><a href="boutique.html">Acceuil</a>
    <ul>
      
    </ul>
  </li>
      
    </ul>
  </li>
</ul>
		<p align="center">
		<img src="5.png" align="center" height="200" width="200"> </ p>
		<img src="100.png" align="center" height="100" width="200"> </ p> 
		<img src="200.png" align="center" height="100" width="300"> </ p>
		<!--
			Commentaires HTML
			On construit une liste déroulante ( un select et plusieurs options)
			Chaque option sera remplie par une donnée SQL récupérée par notre requête PHP
		-->


		<form method="post" action="acheter.php">
			<select class="select" name="champ">
				<?php
				//On se connecte
				connectMaBase();
				//On prépare la requête SQL qui récupère les champs
				$sql = 'Show fields from motoshop';
				/* On lance la requête (mysql_query)
				et on impose un message d'erreur si la requête ne passe pas (or die) */
				$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />
					'.mysql_error());
				//On scanne le résultat et on construit chaque option avec
				while($data = mysql_fetch_array($req)){
					// on affiche chaque champ
					echo '<option name="'.$data['Field'].'">'.$data['Field'].'
					</option>';
				}
				//On libère mysql de cette première requête
				mysql_free_result ($req);
				//On ferme le select
				?>
			</select>
			<p class="entrer">entrez maintenant votre critere de selection sur ce champ :  </p><input type="text" name="critere"/>
			<input class="boutonok2" type="submit" name="Valider" value="valider"/>
		</form>
		<!--
			On ferme le formulaire
		-->
		<?php
		//On traite le formulaire
		if(isset($_POST['Valider'])){
			$champ=$_POST['champ'];
			$critere=$_POST['critere'];
			// On prépare la requête
			//requête différente selon qu'on veut tout le champ
			//ou un champ avec une condition
			if(($critere=='')||($critere==NULL)){
				$sql='SELECT '.$champ.' FROM motoshop';
			}
			else{
				$sql = 'SELECT * FROM motoshop WHERE '.$champ.'="'.$critere.'"';
			}
			/* On lance la requête (mysql_query)
			et on impose un message d'erreur si la requête ne passe pas (or die)*/
			$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'
				.mysql_error());
			//Affichage du résultat
			echo'<h2>voici votre resultat </h2>';
			//On scanne chaque résultat et affiche
			while($data = mysql_fetch_array($req)){

				
				echo 'marque :<strong>'.$data['marque'].'</strong><br/>';
				echo 'id:'.$data[('id')].'<br/>';
				echo 'cylindre:'.$data[('cylindre')].'<br/>';
				echo 'annee:'.$data[('annee')].'<br/>';
				echo 'prix:'.$data[('prix')].'<br/>';
				echo'<br/><br/><br/>';
			}
			//On libère la mémoire mobilisée pour cette seconde requête dans SQL
			mysql_free_result ($req);
			//On ferme sql
			mysql_close ();
		}
	?>
	 
	<FONT size="5pt"> <div style="text-align: right;"><p style="color:#FF0000";>site certifie par le federation francaise de moto cross(FFM)</p></div> </FONT>
