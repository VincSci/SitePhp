<?php

include '../modele/bdd.con.php';

$id = $_GET['id'];

$reqt ="SELECT matricule FROM intervention WHERE NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqt);
$ligne= mysqli_fetch_array($result);
$mat=$ligne['matricule'];

$req = mysqli_query($mysqli,"SELECT intervention.NumeroIntervention AS NumeroIntervention, NumeroClient, DateVisite, HeureDebVisite, HeureFinVisite, Etat, Commentaire FROM intervention, controler where intervention.NumeroIntervention = controler.NumeroIntervention AND intervention.NumeroIntervention ='$id'");
$modif = mysqli_fetch_array($req);

if(isset($_POST['update']))
{
    $NumeroClient = $_POST['NumeroClient'];
    $DateVisite = $_POST['DateVisite'];
	$HeureDebVisite = $_POST['HeureDebVisite'];
	$HeureFinVisite = $_POST['HeureFinVisite'];
	$Etat = $_POST['Etat'];
	$Commentaire = $_POST['Commentaire'];
	
    $edit = mysqli_query($mysqli,"update intervention set NumeroClient='$NumeroClient', DateVisite='$DateVisite', HeureDebVisite='$HeureDebVisite', HeureFinVisite='$HeureFinVisite', Etat='$Etat' where NumeroIntervention='$id'");
			mysqli_query($mysqli,"update controler set Commentaire='$Commentaire' where NumeroIntervention='$id'");
	
    if($edit)
    {
        mysqli_close($mysqli);
        header("location:../vue/tech.html.php?mat=$mat");
        exit;
    }
    else
    {
        echo mysqli_error();
    }     	
}
?>