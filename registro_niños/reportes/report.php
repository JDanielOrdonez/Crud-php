<?php
require('../fpdf/fpdf.php');

class PDF extends FPDF
{
// Cabecera de página
function Header()
{    
    // Arial bold 15
    $this->SetFont('Arial','B',14);
    // Movernos a la derecha
    $this->Cell(60);
    // Título
    $this->Cell(70,10,'Alumnos registrado',1,0,'C');
    // Salto de línea
    $this->Ln(20);
    $this->Cell(55,10,utf8_decode('Nombre'),1,0,'C',);  
    $this->Cell(70,10,utf8_decode('Apellido'),1,0,'C');  
    $this->Cell(20,10,utf8_decode('Edad'),1,0,'C');  
    $this->Cell(30,10,utf8_decode('Vacunado'),1,0,'C');  
    $this->Cell(15,10,utf8_decode('Peso'),1,1,'C');  
}

// Pie de página
function Footer()
{
    // Posición: a 1,5 cm del final
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Número de página
    $this->Cell(0,10,utf8_decode('Página ').$this->PageNo().'/{nb}',0,0,'C');
}
}

include '../bd/conexion.php'; 

$sql = "SELECT * FROM `datos`"; 
$resultados = $conexion->query("SELECT * FROM datos");  


$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Arial','B',12);

foreach ($resultados as $filas){
    $pdf->Cell(55,10,utf8_decode($filas['nombre']),1,0,'C',);  
    $pdf->Cell(70,10,utf8_decode($filas['apellido']),1,0,'C');  
    $pdf->Cell(20,10,utf8_decode($filas['edad']),1,0,'C');  
    $pdf->Cell(30,10,utf8_decode($filas['vacunado']),1,0,'C');  
    $pdf->Cell(15,10,utf8_decode($filas['peso']),1,1,'C');    
}


$pdf->Output();
?>