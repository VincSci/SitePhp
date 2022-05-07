<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voire les Techniciens</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<h3>Techniciens :</h3>
<br />
<br />
	<form method='post'>
		<input type='text' placeholder='Rechercher' name="recherche_valeur"size="120" style="font-size: 16px; position: relative; left: 275px;">
		<br><br>
		<input type="radio" name="option" value="num" style="border: none; font-size: 16px; position: relative; left: 500px;" checked><b>Rechercher par matricule</b><br><br>
		<input type="radio" name="option" value="cli" style="border: none; font-size: 16px; position: relative; left: 500px;"><b>Rechercher par nom de technicien</b><br><br>
		<br><br>
		<input type="submit" value="Rechercher" style="font-size: 16px; position: relative; left: 575px;">
	</form>
<br />
<br />
<?php
include '../modele/bdd.con.php';

session_start();
$mat = $_SESSION['mat'];

if(isset($_POST['recherche_valeur'])){
				
		$option = $_POST['option'];
		
		if($option == 'num'){
			$table = mysqli_query($mysqli, "SELECT Matricule, NomEmploye, PrenomEmploye, TelephoneMobile, AdresseEmploye, NumeroAgence FROM technicien WHERE Matricule = '".$_POST['recherche_valeur']."'");
		}
		else{
			$table = mysqli_query($mysqli, "SELECT Matricule, NomEmploye, PrenomEmploye, TelephoneMobile, AdresseEmploye, NumeroAgence FROM technicien WHERE NomEmploye = '".$_POST['recherche_valeur']."'");
		}
	}
else {
	$table = mysqli_query ($mysqli, 'SELECT Matricule, NomEmploye, PrenomEmploye, TelephoneMobile, AdresseEmploye, NumeroAgence FROM technicien');
}

echo "<table>";
echo "<tr><th>N°de Technicien</th><th>Nom</th><th>Prenom</th><th>N°de Telephone</th><th>Adresse</th><th>N°d'Agence</th><th>Action</th></tr>";
while ($ligne = mysqli_fetch_assoc($table) ) {
	echo "<tr>";
	echo"<td>".$ligne['Matricule']."</td> <td>".$ligne['NomEmploye']."</td> <td>".$ligne['PrenomEmploye']."</td> <td>".$ligne['TelephoneMobile']."</td> <td>".$ligne['AdresseEmploye']."</td> <td>".$ligne['NumeroAgence']."</td> 
	
	<td><a href='vueEditTech.html.php?id=".$ligne['Matricule']."'>Modifier</a></td> 
	<td> <a href='vueSuppTech.html.php?id=".$ligne['Matricule']."'>Supprimer</a></td>
	<td> <a href='vueStatTech.html.php?id=".$ligne['Matricule']."'>Visualiser</a></td>
	
	</tr>"; 
}
echo "</table>";

?><br />
<br />
<br />

<div>
<a href='ajoutTech.html.php'>Ajouter un Technicien</a>
</div>
<br />
<br />
<br />
<div>
</br><a href='../vue/gest.html.php'>Retourner à la page principale</a></br>
</div>
</div>
<br />
<br />
<br />
<div>
<a href='deconnex.html.php'>Se Deconnecter</a>
</div>