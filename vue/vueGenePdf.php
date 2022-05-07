<?php
require('../pdf/fpdf.php');
include '../controleur/edite/editPdf.php';

$id = $_GET['id'];

class PDF extends FPDF
{
// En-tête
function Header()
{
// Saut de ligne
$this->Ln(20);
}

// Pied de page
function Footer()
{
// Positionnement à 1,5 cm du bas
$this->SetY(-15);
// Police Arial italique 10
$this->SetFont('Times','B',10);
// Numéro de page
$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}
}

// Instanciation du PDF
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

//Titre
$pdf->SetFont('Times','B',18);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$txtT = "Intervention N° ".$id;
$txtT = utf8_decode($txtT);
$pdf->Multicell(190,10,$txtT,0,'C', TRUE);

// Saut de lignes
$pdf->Ln(10);

// Bloc client
$pdf->SetFont('Times','',14);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$txtA = "Effectué chez : ";
$txtA = utf8_decode($txtA);
$pdf->Multicell(190,10,$txtA,0,'L', TRUE);

$pdf->Ln(2);

$pdf->SetFont('Times','',12);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$txt1 = $NomClient." qui se trouve situé à l'adresse : ".$Adresse." avec pour numéro de téléphone : ".$TelephoneClient." et pour pour adresse mail : ".$Email;
$txt1 = utf8_decode($txt1);
$pdf->Multicell(190,10,$txt1,0,'L', TRUE);

// Saut de lignes
$pdf->Ln(10);

// Bloc materiel
$pdf->SetFont('Times','',14);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$txtB = "Sur le matériel : ";
$txtB = utf8_decode($txtB);
$pdf->Multicell(190,10,$txtB,0,'L', TRUE);

$pdf->Ln(2);

$pdf->SetFont('Times','',12);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$txt2 = $ReferenceInterne." dont le numéro de série est ".$NumeroDeSerie." correspondant à ".$LibelleTypeMateriel." vendu le ".$DateDeVente." et installé le ".$Dateinstallation." à l'emplacement ".$Emplacement;
$txt2 = utf8_decode($txt2);
$pdf->Multicell(190,10,$txt2,0,'L', TRUE);

// Saut de lignes
$pdf->Ln(12);

// Bloc intervention
$pdf->SetFont('Times','',14);
$pdf->SetFillColor(255,255,255);
$pdf->SetTextColor(0,0,0);
$txt3 = "Qui c'est dérouler le : ".$DateVisite." et à débuter à : ".$HeureDebVisite." pour se terminé à ".$HeureFinVisite;
$txt3 = utf8_decode($txt3);
$pdf->Multicell(190,10,$txt3,0,'L', TRUE);

// Création du PDF
$fichier ="ficheInterN".$id.".pdf";
$pdf->Output($fichier,'F');

// Redirection vers le PDF
header('location: ficheInterN'.$id.'.pdf');
?> 