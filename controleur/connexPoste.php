<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
	<link href="../css/css.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
if(isset($_POST['connexion'])) { 
    if(empty($_POST['id'])) {
        echo "Le champ Identifiant est vide.</br></br>";
		echo "<a href='../vue/connex.html' title='page de connexion'>Retourner a la page de connexion</a>";
    } 
	else {
        if(empty($_POST['mdp'])) {
            echo "Le champ Mot de passe est vide.</br></br>";
			echo "<a href='../vue/connex.html' title='page de connexion'>Retourner a la page de connexion</a>";
        }
		else {
			$id = htmlentities($_POST['id'], ENT_QUOTES, "ISO-8859-1");
			$mdp = htmlentities($_POST['mdp'], ENT_QUOTES, "ISO-8859-1");
			
			$mysqli = mysqli_connect("127.0.0.1", "root", "", "tpcashcash");
			if(!$mysqli){
				echo "Erreur de connexion à la base de données.";
			} 
			else {
				$Requete = mysqli_query($mysqli,"SELECT * FROM connexion WHERE identifiant = '".$id."' AND motdepasse = '".$mdp."';");
				if(mysqli_num_rows($Requete) == 0) {
					echo "L'identifiant ou le mot de passe est incorrect, le compte n'a pas été trouvé.</br></br>";
					echo "<a href='../vue/connex.html' title='page de connexion'>Retourner a la page de connexion</a></br>";
				} 
				else {
					session_start();
					$_SESSION['id'] = $id;
					
					include '../modele/recup.poste.php';
					include '../modele/recup.mat.php';
					$_SESSION['mat'] = $mat;
					
					echo "</br><a href='../vue/$poste.html.php' title='page de connexion'>Accéder à vos informations</a></br>";
				}
			}
		}   
    }
}
?>