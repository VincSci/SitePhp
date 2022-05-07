<?php

include '../modele/ajout.tech.php';

if (isset ($_POST['insert']))
{
	$Matricule = $mat+1;
	$TelephoneMobile = $_POST['TelephoneMobile'];
	$Qualification = $_POST['Qualification'];
	$DateObtention = $_POST['DateObtention'];
	$NomEmploye = $_POST['NomEmploye'];
	$PrenomEmploye = $_POST['PrenomEmploye'];
	$AdresseEmploye = $_POST['AdresseEmploye'];
	$DateEmbauche = $_POST['DateEmbauche'];
	$NumeroAgence = $_POST['NumeroAgence'];


$add = mysqli_query($mysqli, "INSERT INTO employe Values ('$Matricule', '$NomEmploye', '$PrenomEmploye', '$AdresseEmploye', '$DateEmbauche')");
$adT = mysqli_query($mysqli, "INSERT INTO technicien Values ('$Matricule', '$TelephoneMobile', '$Qualification', '$DateObtention', '$NomEmploye', '$PrenomEmploye', '$AdresseEmploye', '$DateEmbauche', '$NumeroAgence')");

    if($add)
    {
        mysqli_close($mysqli);
        header("location:../vue/vueInfoTech.html.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    }    	
}
?>