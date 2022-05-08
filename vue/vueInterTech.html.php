<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie Technicien</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<h3>Voire vos Interventions</h3>
<br />
<br />
<?php
session_start();
$mat = $_SESSION['mat'];

include '../modele/bdd.con.php';

$table = mysqli_query ($mysqli, "SELECT intervention.NumeroIntervention AS NumeroIntervention, intervention.NumeroClient, DateVisite, HeureDebVisite, HeureFinVisite, Etat, NumeroDeSerie, Commentaire FROM intervention, controler WHERE intervention.NumeroIntervention = controler.NumeroIntervention AND intervention.NumeroClient = client.NumeroClient AND matricule = '$mat' ORDER BY client.DistanceKm");

echo "<table>";
echo "<tr><th>N° de Fiche Intervention</th><th>N° de Fiche Client</th><th>Date</th><th>Heure de Debut</th><th>Heure de Fin</th><th>Id du Materiel</th><th>Avancement</th><th>Commentaire</th><th>Modifier l'Intervention</th><th>Générer un Pdf</th></tr>";
while ($ligne = mysqli_fetch_assoc($table)) {
	echo "<tr>";
	echo"<td>".$ligne['NumeroIntervention']."</td> <td>".$ligne['NumeroClient']."</td> <td>".$ligne['DateVisite']."</td> <td>".$ligne['HeureDebVisite']."</td> <td>".$ligne['HeureFinVisite']."</td> <td>".$ligne['NumeroDeSerie']."</td> <td>".$ligne['Etat']."</td> <td>".$ligne['Commentaire']."</td>";
	
	echo "<td><a href='vueEditInter.html.php?id=".$ligne['NumeroIntervention']."'>Modifier</a></td>";
	
	echo "<td><a href='vueGenePdf.php?id=".$ligne['NumeroIntervention']."'>Générer</a></td>";
	
	echo "</tr>"; 
}
echo "</table>";
?>
</div>
<br />
<br />
<br />
<div>
</br><a href='tech.html.php'>Retourner à la page principale</a>
</div>
</div>
<br />
<br />
<br />
<div>
<a href='deconnex.html.php'>Se Deconnecter</a>
</div>