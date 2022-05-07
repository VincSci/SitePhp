<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voire les Interventions</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<h3>Interventions :</h3>
<br />
<br />
	<form method='post'>
		<input type='text' placeholder='Rechercher' name="recherche_valeur"size="120" style="font-size: 16px; position: relative; left: 275px;">
		<br><br>
		<input type="radio" name="option" value="numInt" style="border: none; font-size: 16px; position: relative; left: 500px;" checked><b>Rechercher par numéro de fiche d'intervention</b><br><br>
		<input type="radio" name="option" value="numCli" style="border: none; font-size: 16px; position: relative; left: 500px;"><b>Rechercher par de fiche client</b><br><br>
		<br><br>
		<input type="submit" value="Rechercher" style="font-size: 16px; position: relative; left: 575px;">
		<br><br>
	</form>
<br />
<br />
<?php
include '../modele/bdd.con.php';

session_start();
$mat = $_SESSION['mat'];

if(isset($_POST['recherche_valeur'])){
				
		$option = $_POST['option'];
		
		if($option == 'numInt'){
			$table = mysqli_query($mysqli, "Select * FROM intervention WHERE NumeroIntervention = '".$_POST['recherche_valeur']."'");
		}
		else{
			$table = mysqli_query($mysqli, "Select * FROM intervention WHERE NumeroClient = '".$_POST['recherche_valeur']."'");
		}
	}
else {
	$table = mysqli_query ($mysqli, "SELECT * FROM intervention");
}

echo "<table>";
echo "<tr><th>N° de Fiche Intervention</th><th>N° de Fiche Client</th><th>Date</th><th>Heure de Debut</th><th>Heure de Fin</th><th>Avancement</th></tr>";
while ($ligne = mysqli_fetch_assoc($table)) {
	echo "<tr>";
	echo"<td>".$ligne['NumeroIntervention']."</td> <td>".$ligne['NumeroClient']."</td> <td>".$ligne['DateVisite']."</td> <td>".$ligne['HeureDebVisite']."</td> <td>".$ligne['HeureFinVisite']."</td> <td>".$ligne['Etat']."</td>";
	echo"<td> <a href='vueSuppInter.html.php?id=".$ligne['NumeroIntervention']."'>Supprimer</a></td>";
	echo "</tr>"; 
}
echo "</table>";
?>
<br />
<br />
<br />
<div>
<a href='ajoutInte.html.php'>Ajouter une Intervention</a>
</div>
<br />
<br />
<br />
<div>
</br><a href='../vue/gest.html.php'>Retourner à la page principale</a></br>
</div>
<br />
<br />
<br />
<div>
<a href='deconnex.html.php'>Se Deconnecter</a>
</div>