<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie Gestionnaire</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php 
session_start();
$mat = $_SESSION['mat'];
?>

<h3>Gestionnaire</h3>
<a href='vueInfoClient.html.php'>Voir les informations des clients</a>
</br>
</br>
<a href='vueInfoTech.html.php'>Voir les informations des techniciens</a>
</br>
</br>
<a href='vueInfoInter.html.php'>Voir les informations des interventions</a>
<br />
<br />
<br />
<div>
<a href='deconnex.html.php'>Se Deconnecter</a>
</div>
</body>
</html> 
