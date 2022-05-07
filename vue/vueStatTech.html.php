<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voire les Statistiques</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<h3>Voire les Statistiques du Technicien :</h3>
<br />
<?php
include '../controleur/edite/statTech.php';

session_start();
$mat = $_SESSION['mat'];

echo "<table>";
echo "<tr><th>Nombre d'Intervention</th><th>Kilometre Effectuer</th></tr>";
	echo "<tr>";
	echo"<td>".$NbrInter['COUNT(intervention.NumeroIntervention)']."</td> <td>".$NbrKil['SUM(client.DistanceKm)']."</td>
	</tr>"; 
echo "</table>";

?><br />
<br />
<br />
<div>
<a href='vueInfoTech.html.php'>Retour</a>
</div>
</div>
<br />
<br />
<br />
<div>
<a href='deconnex.html.php'>Se Deconnecter</a>
</div>