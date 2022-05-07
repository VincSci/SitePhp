<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Partie Technicien</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
session_start();
$mat = $_SESSION['mat'];
?>

<h3>Techniciens</h3>
<a href='vueInfoClient.html.php'>Voir les informations des clients</a>
</br>
</br>
<a href='vueInterTech.html.php'>Voir vos interventions</a>
</br>
</br>
<br />
<div>
<a href='deconnex.html.php'>Se Deconnecter</a>
</div>
</body>
</html> 