<?php 

include '../modele/bdd.con.php';

$Numcli = $_GET['id'];

if (isset($_POST['Oui']))
{
	$req = mysqli_query ($mysqli, "DELETE From client WHERE NumeroClient = '$Numcli'");

    if($req)
    {
        mysqli_close($mysqli);
        header("location:../vue/vueInfoClient.html.php");
        exit;
    }
    else
    {
        echo mysqli_error();
    } 
}

?>