<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Supprimer un Client</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include '../controleur/supprime/suppClient.php'; ?>
    <h1>Confirmez-vous la suppression ?</h1>
    <form method="POST">
		<input type="submit" value ="Oui" name = "Oui"> 
    </form>
	
	<a href="../vue/vueInfoClient.html.php"><button><label>Non</label> </button></a>
    
</body>
</html>