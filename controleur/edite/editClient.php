<?php

include '../modele/bdd.con.php';

$id = $_GET['id'];

$req = mysqli_query($mysqli,"Select * FROM Client where NumeroClient='$id'");

$modif = mysqli_fetch_array($req);

if(isset($_POST['update']))
{
    $NomClient = $_POST['NomClient'];
    $Adresse = $_POST['Adresse'];
	$TelephoneClient = $_POST['TelephoneClient'];
    $Email = $_POST['Email'];
	
    $edit = mysqli_query($mysqli,"update Client set NomClient='$NomClient', Adresse='$Adresse', TelephoneClient='$TelephoneClient', Email='$Email' where NumeroClient='$id'");
	
    if($edit)
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