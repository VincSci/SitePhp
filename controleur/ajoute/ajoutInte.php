<?php

include '../modele/ajout.inte.php';

if (isset ($_POST['insert']))
{
	$NumeroIntervention = $num+1;
	$DateVisite = $_POST['DateVisite'];
	$HeureDebVisite = $_POST['HeureDebVisite'];
	$HeureFinVisite = $_POST['HeureFinVisite'];
	$Etat = $_POST['Etat'];
	$NumeroClient = $_POST['NumeroClient'];
	$Matricule = $_POST['Matricule'];
	$NumeroDeSerie = $_POST['NumeroDeSerie'];
	$Commentaire = " ";


$add = mysqli_query($mysqli, "Insert Into intervention Values ('$NumeroIntervention', '$DateVisite', '$HeureDebVisite', '$HeureFinVisite', '$Etat', '$NumeroClient', '$Matricule')");
		mysqli_query($mysqli, "Insert Into controler Values ('$NumeroIntervention', '$NumeroDeSerie', '$Commentaire')");

    if($add)
    {
        mysqli_close($mysqli);
        header("location:../vue/vueInfoInter.html.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>