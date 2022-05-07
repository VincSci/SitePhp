<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter une Intervention</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include '../controleur/ajoute/ajoutInte.php';
?>

<h3>Ajouter une Intervention</h3>

	<div>
    <form method="POST">
		Date de Visite prevue : <input type="text" name="DateVisite" Required><br /><br />
		Heure de Début de Visite prevue : <input type="text" name="HeureDebVisite" Required><br /><br />
		Heure de Fin de Visite prevue : <input type="text" name="HeureFinVisite" Required><br /><br />
		Etat : <input type="text" name="Etat" value="Non-Realiser" Required><br /><br />
		Numero du Client Concerner : <input type="text" name="NumeroClient" Required><br /><br />
		Matricule du Technicien Concerner : <input type="text" name="Matricule" Required><br /><br />
		Numero de Serie du Materiel Concerner : <input type="text" name="NumeroDeSerie" Required><br /><br />
		<input type="submit" name="insert" value="Ajouter">
	</form>
	</div>
</body>
</html>