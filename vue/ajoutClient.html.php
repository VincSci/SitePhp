<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ajouter un Client</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include '../controleur/ajoute/ajoutClient.php';
?>

<h3>Ajouter un Client</h3>

	<div>
    <form method="POST">
        Nom du Client : <input type="text" name="NomClient" Required><br /><br />
		Raison Sociale du Client : <input type="text" name="RaisonSociale" Required><br /><br />
		Numero Siren du Client : <input type="text" name="Siren" Required><br /><br />
		Code APE du Client : <input type="text" name="CodeAPE" Required><br /><br />
		Adresse du Client : <input type="text" name="Adresse" Required><br /><br />
		Telephone du Client : <input type="text" name="TelephoneClient" Required><br /><br />
		Email du Client : <input type="text" name="Email" Required><br /><br />
		Duree de Deplacement pour aller chez le Client : <input type="text" name="DureeDeplacement" Required><br /><br />
		Distance en Km : <input type="text" name="DistanceKm" Required><br /><br />
		Numero d'Agence associer au Client : <input type="text" name="NumeroAgence" Required><br /><br />
        <input type="submit" name="insert" value="Ajouter"> 
      </form>
	  </div>
</body>
</html>