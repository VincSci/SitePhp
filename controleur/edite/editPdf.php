<?php

include '../modele/bdd.con.php';

$id = $_GET['id'];

//Requète pour le Bloc client
$reqtA ="SELECT NomClient FROM client, intervention WHERE intervention.NumeroClient = client.NumeroClient AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqtA);
$ligne= mysqli_fetch_array($result);
$NomClient=$ligne['NomClient'];

$reqtB ="SELECT Adresse FROM client, intervention WHERE intervention.NumeroClient = client.NumeroClient AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqtB);
$ligne= mysqli_fetch_array($result);
$Adresse=$ligne['Adresse'];

$reqtC ="SELECT TelephoneClient FROM client, intervention WHERE intervention.NumeroClient = client.NumeroClient AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqtC);
$ligne= mysqli_fetch_array($result);
$TelephoneClient=$ligne['TelephoneClient'];

$reqtD ="SELECT Email FROM client, intervention WHERE intervention.NumeroClient = client.NumeroClient AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqtD);
$ligne= mysqli_fetch_array($result);
$Email=$ligne['Email'];

//Requète pour le Bloc materiel
$reqt1 ="SELECT NumeroDeSerie FROM controler WHERE NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqt1);
$ligne= mysqli_fetch_array($result);
$NumeroDeSerie=$ligne['NumeroDeSerie'];

$reqt2 ="SELECT DateDeVente FROM controler, materiel WHERE controler.NumeroDeSerie = materiel.NumeroDeSerie AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqt2);
$ligne= mysqli_fetch_array($result);
$DateDeVente=$ligne['DateDeVente'];

$reqt3 ="SELECT Dateinstallation FROM controler, materiel WHERE controler.NumeroDeSerie = materiel.NumeroDeSerie AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqt3);
$ligne= mysqli_fetch_array($result);
$Dateinstallation=$ligne['Dateinstallation'];

$reqt4 ="SELECT Emplacement FROM controler, materiel WHERE controler.NumeroDeSerie = materiel.NumeroDeSerie AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqt4);
$ligne= mysqli_fetch_array($result);
$Emplacement=$ligne['Emplacement'];

$reqt5 ="SELECT ReferenceInterne FROM controler, materiel WHERE controler.NumeroDeSerie = materiel.NumeroDeSerie AND NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqt5);
$ligne= mysqli_fetch_array($result);
$ReferenceInterne=$ligne['ReferenceInterne'];

$reqt6 ="SELECT LibelleTypeMateriel FROM controler, materiel, typemateriel WHERE controler.NumeroDeSerie = materiel.NumeroDeSerie AND materiel.ReferenceInterne = typemateriel.ReferenceInterne AND NumeroIntervention ='$id'";
$result=mysqli_query($mysqli, $reqt6);
$ligne= mysqli_fetch_array($result);
$LibelleTypeMateriel=$ligne['LibelleTypeMateriel'];

//Requète pour le Bloc intervention
$reqtX ="SELECT DateVisite FROM intervention WHERE NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqtX);
$ligne= mysqli_fetch_array($result);
$DateVisite=$ligne['DateVisite'];

$reqtY ="SELECT HeureDebVisite FROM intervention WHERE NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqtY);
$ligne= mysqli_fetch_array($result);
$HeureDebVisite=$ligne['HeureDebVisite'];

$reqtZ ="SELECT HeureFinVisite FROM intervention WHERE NumeroIntervention = '$id'";
$result=mysqli_query($mysqli, $reqtZ);
$ligne= mysqli_fetch_array($result);
$HeureFinVisite=$ligne['HeureFinVisite'];

?>