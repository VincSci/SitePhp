<?php
$_SESSION['id'] = $id;
$req ="SELECT poste FROM connexion WHERE identifiant = '".$id."'";
$result=mysqli_query($mysqli, $req);
$ligne= mysqli_fetch_array($result);
$poste=$ligne['poste'];
?>