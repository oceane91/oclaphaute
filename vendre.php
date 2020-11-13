<?php
include("fonctions.php");
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
    <head>
        <link rel="stylesheet" type="text/css" href="boutique.css">
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <title>MotocrosShop</title>
    </head>
    <body>
         <h1 align=center>le meilleur site de moto de vente en ligne</h1><br>
         		<section>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
  "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1">


<style type="text/css">
ul#menu li { 
  display : inline;
  padding: 5px;
  background-color: white;
  margin-right:-5px;
  font: normal 14px arial,verdana,helvetica,sans-serif;
  cursor: pointer;
}
ul#menu li a:link {
  text-decoration:none;
  color:black;
}
ul#menu li.Acheter:hover{
  background-color: blue;
}
ul#menu li.Vendre:hover{
  background-color: white;
}
ul#menu li.Connexion:hover{
  background-color: red;
}
ul#menu li.Inscription:hover{
  background-color: pink;
}
</style>
</head>
<body>
<ul id="menu">
</ul>
</body>
</html>

<ul id="menu-demo2">
  <li><a href="#">Acheter une moto</a>
    <ul>
      <li><a href="moto.html">Ktm</a></li>
      <li><a href="hus.html">Husqvarna</a></li>
      <li><a href="honda.html">Honda</a></li>
      <li><a href="yam.html">Yamaha</a></li>
      <li><a href="acheter.php">Acheter une moto</a></li>

    </ul>
  </li>
  <li><a href="#">Vendre une moto</a>
    <ul>
      <li><a href="#">Ktm</a></li>
      <li><a href="#">Husqvarna</a></li>
      <li><a href="#">Honda</a></li>
      <li><a href="#">Yamaha</a></li>
      <li> <a href="vendre.php">Vendre une moto</a></li>
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


        <h1>remplir une fiche</h1>

        <form name="inscription" method="post" action="vendre.php">
        	<h2>selectionnez votre cathégories de moto</h2>
        	<select name="marque">
        		<option>Ktm</option>
        		<option>Husqvarna</option>
        		<option>Honda</option>
            <option>Yamaha</option>
        	</select><br/>
        	<select name="cylindre">
        		<option>125</option>
        		<option>250</option>
        		<option>450</option>
        	</select><br/>
        	<select name="annee">
            <option>2018</option>
        		<option>2019</option>
        		<option>2020</option>
            <option>2021</option>
        	</select><br/>
        	le prix de la moto :<input class="carac" type="text" name="prix"/> <br/>
	<form action="vendre.php" method="post">
		<input type="submit" name="valider">
	</form>
    </body>
</html>
</form>

<?php
if (isset ($_POST['valider'])){
	$marque=$_POST["marque"];
	$cylindre=$_POST["cylindre"];
	$annee=$_POST["annee"];
	$prix=$_POST["prix"];

	connectMaBase();
	$sql = 'INSERT INTO motoshop VALUES("","'.$marque.'","'.$cylindre.'","'.$annee.'","'.$prix.'")';

	mysql_query ($sql) or die ('Erreur SQL !'.$sql.'<br />'.mysql_error());
	mysql_close();

	
	$message="vos donées ont bien été enregistrées";
	echo '<script type="text/javascript">window.alert("'.$message.'");script>';
}
?>
</section>