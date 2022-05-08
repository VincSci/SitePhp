<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Informations Techniciens</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include '../controleur/edite/editTech.php';
?>

<h3>Modifier les Informations des Techniciens</h3>

<div>
<form method="POST">
  Nom du Technicien :<input type="text" name="NomEmploye" value="<?php echo $modif['NomEmploye'] ?>" placeholder="Entrez le Nom du Technicien : " Required><br /><br />
  Prenom du Technicien :<input type="text" name="PrenomEmploye" value="<?php echo $modif['PrenomEmploye'] ?>" placeholder="Entrez le Prenom du Technicien : " Required><br /><br />
  Numero de Telephone Mobile :<input type="text" name="TelephoneMobile" value="<?php echo $modif['TelephoneMobile'] ?>" placeholder="Entrez le Telephone du Technicien : " Required><br /><br />
  Adresse de l'Employe :<input type="text" name="AdresseEmploye" value="<?php echo $modif['AdresseEmploye'] ?>" placeholder="Entrez l'Adresse du Technicien : " Required><br /><br />
  Numero d'Agence :<input type="text" name="NumeroAgence" value="<?php echo $modif['NumeroAgence'] ?>" placeholder="Entrez le Numéro d'Agence du Technicien : " Required><br /><br />
  <input type="submit" name="update" value="Modifier">
</form>
</div>

</body>
</html>