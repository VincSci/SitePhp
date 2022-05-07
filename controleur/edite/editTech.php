<?php

include '../modele/bdd.con.php';

$id = $_GET['id'];

$req = mysqli_query($mysqli,"SELECT Matricule, NomEmploye, PrenomEmploye, TelephoneMobile, AdresseEmploye, NumeroAgence FROM technicien where Matricule='$id'");

$modif = mysqli_fetch_array($req);

if(isset($_POST['update']))
{
    $NomEmploye = $_POST['NomEmploye'];
    $PrenomEmploye = $_POST['PrenomEmploye'];
	$TelephoneMobile = $_POST['TelephoneMobile'];
	$AdresseEmploye = $_POST['AdresseEmploye'];
	$NumeroAgence = $_POST['NumeroAgence'];
	
    $edit = mysqli_query($mysqli,"update technicien set NomEmploye='$NomEmploye', PrenomEmploye='$PrenomEmploye', TelephoneMobile='$TelephoneMobile', AdresseEmploye='$AdresseEmploye', NumeroAgence='$NumeroAgence' where Matricule='$id'");
	
    if($edit)
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