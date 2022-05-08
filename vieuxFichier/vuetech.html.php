<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voire les Interventions</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<?php
include '../modele/bdd.con.php';

$table = mysqli_query ($mysqli, "SELECT NumeroIntervention, NumeroClient, DateVisite, HeureDebVisite, HeureFinVisite, Etat FROM intervention");

echo "<table>";
echo "<tr><th>N° de Fiche Intervention</th><th>N° de Fiche Client</th><th>Date</th><th>Heure de Debut</th><th>Heure de Fin</th><th>Avancement</th></tr>";
while ($ligne = mysqli_fetch_assoc($table)) {
	echo "<tr>";
	echo"<td>".$ligne['NumeroIntervention']."</td> <td>".$ligne['NumeroClient']."</td> <td>".$ligne['DateVisite']."</td> <td>".$ligne['HeureDebVisite']."</td> <td>".$ligne['HeureFinVisite']."</td> <td>".$ligne['Etat']."</td>";
	
	echo "<td><a href='vueEditInter.html.php?id=".$ligne['NumeroIntervention']."'>Modifier</a></td>";
	
	echo "</tr>"; 
}
echo "</table>";
?>
<br />
<br />
<br />
<div>
<a href='tech.html'>Retourner à la page principale</a>
</div>