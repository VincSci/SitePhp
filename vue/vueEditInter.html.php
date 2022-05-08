<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Modifier Informations Intervention</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
include '../controleur/edite/editInter.php';
?>

<h3>Modifier les Informations des Interventions</h3>

<div>
<form method="POST">
  Numero de Client :<input type="text" name="NumeroClient" value="<?php echo $modif['NumeroClient'] ?>" placeholder="Entrez le Nom du Client : " Required><br /><br />
  Date de la Visite :<input type="text" name="DateVisite" value="<?php echo $modif['DateVisite'] ?>" placeholder="Entrez la Date de Visite : " Required><br /><br />
  Heure de Debut :<input type="text" name="HeureDebVisite" value="<?php echo $modif['HeureDebVisite'] ?>" placeholder="Entrez l'heure de debut de Visite : " Required><br /><br />
  Heure de Fin :<input type="text" name="HeureFinVisite" value="<?php echo $modif['HeureFinVisite'] ?>" placeholder="Entrez l'heure de fin de Visite : " Required><br /><br />
  Etat :<input type="radio" id="Nrea" name="Etat" value="Non Realiser" checked><label for="Nrea">Non Realiser</label>
		<input type="radio" id="Rea" name="Etat" value="Realiser"><label for="Rea">Realiser</label><br /><br />
  Commentaire :<input type="text" name="Commentaire" value="<?php echo $modif['Commentaire'] ?>" placeholder="Commentaire" Required><br /><br />
  <input type="submit" name="update" value="Modifier">
</form>
</div>

</body>
</html>