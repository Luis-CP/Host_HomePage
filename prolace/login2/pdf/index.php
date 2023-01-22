<?php
require('fpdf.php');
class PDF extends FPDF
{
// Cabecera de página
function Header()
{
    // Logo
    $this->Image('img/prolase logo.png',10,8,33);
    // Arial bold 15
    $this->Ln(20);
    $this->SetFont('Arial','B',8);
    // Movernos a la derecha

    $this->Cell(80);
    // Título
    $this->Cell(50,10,'Reportes de postulacion',1,0,'C');
    // Salto de línea
    $this->Ln(20);
     $this->Cell(50,10,'id_aspirante',1,0,'C',0);
	 $this->Cell(95,10,'cargo_postulacion',1,0,'C',0);
 
 
    
     $this->Cell(40,10,'estado_postulacion',1,0,'C',0);
   

	 $this->Ln(10);
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','B',18);
    // Número de página
    $this->Cell(0,10,'Pagina '.$this->PageNo().'/{nb}',0,0,'C');
}
}

require 'conexion.php';
 session_start();
 
 
 $id_aspirante=$_SESSION['id_aspirante'];
 
$consulta = "SELECT * FROM postulacion_aspirante where id_aspirante='$id_aspirante' ";
$resultado = $mysqli-> query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

while($row =$resultado->fetch_assoc()){

$pdf->Cell(50,10, $row['id_aspirante'],1,0,'C',0);
$pdf->Cell(95,10,$row['cargo_postulacion'],1,0,'C',0);
$pdf->Cell(40,10,$row['estado_postulacion'],1,1,'C',0);
}
$pdf->Output();
?>