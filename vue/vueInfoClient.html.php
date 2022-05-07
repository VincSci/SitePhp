<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Voire les Clients</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<?php 
session_start();
$mat = $_SESSION['mat'];
?>

<h3>Clients :</h3>
<br />
<br />
	<form method='post'>
		<input type='text' placeholder='Rechercher' name="recherche_valeur"size="120" style="font-size: 16px; position: relative; left: 275px;">
		<br><br>
		<input type="radio" name="option" value="num" style="border: none; font-size: 16px; position: relative; left: 500px;" checked><b>Rechercher par numéro de fiche client</b><br><br>
		<input type="radio" name="option" value="cli" style="border: none; font-size: 16px; position: relative; left: 500px;"><b>Rechercher par nom de client</b><br><br>
		<br><br>
		<input type="submit" value="Rechercher" style="font-size: 16px; position: relative; left: 575px;">
		<br><br>
	</form>
<br />
<br />
<?php
include '../modele/bdd.con.php';

$tablePoste = mysqli_fetch_assoc(mysqli_query($mysqli, "SELECT poste FROM `connexion` WHERE Matricule = '$mat'"));

$poste = $tablePoste['poste'];

if(isset($_POST['recherche_valeur'])){
				
		$option = $_POST['option'];
		
		if($option == 'num'){
			$table = mysqli_query($mysqli, "Select * FROM Client WHERE NumeroClient = '".$_POST['recherche_valeur']."'");
		}
		else{
			$table = mysqli_query($mysqli, "Select * FROM Client WHERE NomClient = '".$_POST['recherche_valeur']."'");
		}
	}
else {
	$table = mysqli_query($mysqli, "Select * FROM Client ");
}

echo "<table>";
echo"<tr><th>n°fiche</th><th>nom</th><th>adresse</th><th>telephone</th><th>mail</th></tr>";
while ($ligne = mysqli_fetch_assoc($table)) {
	echo"<tr>";
	
	echo"<td>".$ligne['NumeroClient']."</td> <td>".$ligne['NomClient']."</td> <td>".$ligne['Adresse']."</td> <td>".$ligne['TelephoneClient']."</td> <td>".$ligne['Email']."</td>
	
	<td><a href='vueEditClient.html.php?id=".$ligne['NumeroClient']."'>Modifier</a></td>
	<td><a href='vueSuppClient.html.php?id=".$ligne['NumeroClient']."'>Supprimer</a></td>
	</tr>";
	}
echo"</table>";
?>
<br />
<br />
<br />
<div>
<a href='ajoutClient.html.php'>Ajouter un Client</a>
</div>
<br />
<br />
<br />
<div>
<?php
echo "</br><a href='../vue/$poste.html.php'>Retourner à la page principale</a></br>";
?>
</div>
<br />
<br />
<br />
<div>
<a href='deconnex.html.php'>Se Deconnecter</a>
</div>