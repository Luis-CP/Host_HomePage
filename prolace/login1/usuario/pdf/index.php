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
    $this->Cell(50,10,'Reportes de pedido',1,0,'C');
    // Salto de línea
    $this->Ln(20);
     $this->Cell(40,10,'Tipo de Producto',1,0,'C',0);
	 $this->Cell(40,10,'Cantidad de Producto',1,0,'C',0);
	 $this->Cell(40,10,'Fecha de pedido',1,0,'C',0);
	 $this->Cell(40,10,'Fecha de entrega',1,0,'C',0);
	 $this->Cell(35,10,'Estado de Producto',1,0,'C',0);

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
 
 
$nombre=$_SESSION['usuario'];
$consulta = "SELECT * FROM usuario_pedidos  where id_usuario='$nombre'  and  EstadoEntrega_pedido='Pendiente'";
$resultado = $mysqli-> query($consulta);


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

while($row =$resultado->fetch_assoc()){

$pdf->Cell(40, 10, $row['tipoProducto_pedido'],1,0,'C',0);
$pdf->Cell(40,10,$row['cantidad_pedido'],1,0,'C',0);
$pdf->Cell(40,10,$row['fechaRealizacion_pedido'],1,0,'C',0);
$pdf->Cell(40,10,$row['fechaEntrega_pedido'],1,0,'C',0);
$pdf->Cell(35,10,$row['EstadoEntrega_pedido'],1,1,'C',0);
}
$pdf->Output();
?>