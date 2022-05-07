<?php

include '../modele/ajout.client.php';

if (isset ($_POST['insert']))
{
	$NumeroClient = $num+1;
	$NomClient = $_POST['NomClient'];
	$RaisonSociale = $_POST['RaisonSociale'];
	$Siren = $_POST['Siren'];
	$CodeAPE = $_POST['CodeAPE'];
	$Adresse = $_POST['Adresse'];
	$TelephoneClient = $_POST['TelephoneClient'];
	$Email = $_POST['Email'];
	$DureeDeplacement = $_POST['DureeDeplacement'];
	$DistanceKm = $_POST['DistanceKm'];
	$NumeroAgence = $_POST['NumeroAgence'];


$add = mysqli_query($mysqli, "Insert Into Client Values ('$NumeroClient', '$NomClient', '$RaisonSociale', '$Siren', '$CodeAPE', '$Adresse', '$TelephoneClient', '$Email', '$DureeDeplacement', '$DistanceKm', '$NumeroAgence')");

    if($add)
    {
        mysqli_close($mysqli);
        header("location:../vue/vueInfoClient.html.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>