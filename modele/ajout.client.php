<?php
include '../modele/bdd.con.php';

$req ="SELECT COUNT('NumeroClient') FROM client";
$result=mysqli_query($mysqli, $req);
$ligne= mysqli_fetch_array($result);
$num = $ligne["COUNT('NumeroClient')"];

?>