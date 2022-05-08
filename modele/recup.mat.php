<?php
$_SESSION['id'] = $id;
$req ="SELECT matricule FROM connexion WHERE identifiant = '".$id."'";
$result=mysqli_query($mysqli, $req);
$ligne= mysqli_fetch_array($result);
$mat=$ligne['matricule'];
?>