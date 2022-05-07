<?php 

include '../modele/bdd.con.php';

$num = $_GET['id'];

if (isset($_POST['Oui']))
{
	$req = mysqli_query ($mysqli, "DELETE From controler WHERE NumeroIntervention = '$num'");
	
	$reqT = mysqli_query ($mysqli, "DELETE From intervention WHERE NumeroIntervention = '$num'");

    if($req)
    {
        mysqli_close($mysqli);
        header("location:../vue/vueInfoInter.html.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    } 
}

?>