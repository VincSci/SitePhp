<?php
include '../modele/bdd.con.php';

$req = "SELECT COUNT('NumeroIntervention') FROM intervention";
$result =mysqli_query($mysqli, $req);
$ligne = mysqli_fetch_array($result);
$num = $ligne["COUNT('NumeroIntervention')"];

?>