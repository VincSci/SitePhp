<?php
include '../modele/bdd.con.php';

$req ="SELECT COUNT('Matricule') FROM employe";
$result=mysqli_query($mysqli, $req);
$ligne= mysqli_fetch_array($result);
$mat=$ligne["COUNT('Matricule')"];

?>