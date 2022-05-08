<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Informations Client</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include '../controleur/edite/editClient.php';
?>

<h3>Modifier les Informations des Clients</h3>

<div>
<form method="POST">
  Nom du Client :<input type="text" name="NomClient" value="<?php echo $modif['NomClient'] ?>" placeholder="Entrez le Nom du Client : " Required><br /><br />
  Adresse du Client :<input type="text" name="Adresse" value="<?php echo $modif['Adresse'] ?>" placeholder="Entrez l'Adresse du Client : " Required><br /><br />
  Telephone du Client :<input type="text" name="TelephoneClient" value="<?php echo $modif['TelephoneClient'] ?>" placeholder="Entrez le Telephone du Client : " Required><br /><br />
  Adresse Mail du Client :<input type="text" name="Email" value="<?php echo $modif['Email'] ?>" placeholder="Entrez le Mail du Client : " Required><br /><br />
  <input type="submit" name="update" value="Modifier">
</form>
</div>

</body>
</html>