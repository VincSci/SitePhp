<?php 

include '../modele/bdd.con.php';

$id = $_GET['id'];

if (isset($_POST['Oui']))
{	
	$req = mysqli_query ($mysqli, "DELETE From technicien WHERE Matricule = '$id'");
	
	$reqt = mysqli_query ($mysqli, "DELETE From employe WHERE Matricule = '$id'"); //A mettre en Trigger

    if($req)
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