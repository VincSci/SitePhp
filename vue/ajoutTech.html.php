<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Technicien</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include '../controleur/ajoute/ajoutTech.php';
?>

<h3>Ajouter un Technicien</h3>

	<div>
    <form method="POST">
		Telephone du Technicien : <input type="text" name="TelephoneMobile" Required><br /><br />
		Qualification du Technicien : <input type="text" name="Qualification" Required><br /><br />
		Date d'Obtention de la Qualification : <input type="text" name="DateObtention" Required><br /><br />
		Nom du Technicien : <input type="text" name="NomEmploye" Required><br /><br />
		Prenom du Technicien : <input type="text" name="PrenomEmploye" Required><br /><br />
		Adresse du Technicien : <input type="text" name="AdresseEmploye" Required><br /><br />
		Date d'Embauche du Technicien : <input type="text" name="DateEmbauche" Required><br /><br />
		Agence du Technicien : <input type="text" name="NumeroAgence" Required><br /><br />
		<input type="submit" name="insert" value="Ajouter">
	</form>
	</div>
</body>
</html>