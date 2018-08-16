
<?php
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root');
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
$resultat = $bdd->query('SELECT * FROM Météo');

$donnees = $resultat->fetch();

while ($donnees = $resultat->fetch())
{
  echo " <table><tr><th> ", $donnees['ville' ], "</th></tr>";
  echo "<tr><td>", $donnees['haut' ], "</td></tr>";
  echo "<tr><td>", $donnees['bas' ], "</td></tr></table>";

}
$resultat->closeCursor();


?>
