<?php

include '../modele/bdd.con.php';

$id = $_GET['id'];

$Stat1 = mysqli_query ($mysqli, "SELECT COUNT(intervention.NumeroIntervention) FROM intervention WHERE intervention.Etat ='Realiser' AND intervention.Matricule ='$id'");

$NbrInter = mysqli_fetch_array($Stat1);

$Stat2 = mysqli_query ($mysqli, "SELECT SUM(client.DistanceKm) FROM client, intervention WHERE client.NumeroClient = intervention.NumeroClient AND intervention.Matricule ='$id'");

$NbrKil = mysqli_fetch_array($Stat2);

$Stat3 = mysqli_query ($mysqli, "SELECT SUM(TIMEDIFF(HeureFinVisite, HeureDebVisite)) FROM intervention WHERE intervention.Matricule = '$id'");

$duree = mysqli_fetch_array($Stat3);

?>