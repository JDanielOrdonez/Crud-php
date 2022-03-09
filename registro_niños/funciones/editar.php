<?php  

include '../bd/conexion.php';
$id=$_GET['id'];
$sql= "select * from persona were id = '".$id."'";



$resultados = [
      "id"        => $_GET['id'],
      "nombre"    => $_POST['nombre'],
      "apellido"  => $_POST['apellido'],
      "email"     => $_POST['email'],
      "direccion" => $_POST['direccion']
      "hobby"     => $_POST['hobby']
    ];
    
$consultaSQL = "UPDATE resultados SET
  nombre = :nombre,
  apellidos = :apellidos,
  email = :email,
  telefono = :telefono,
  direccion = :direccion,
  hobby = :hobby,
  updated_at = NOW()
  WHERE id = :id";
    
$consulta = $conexion->prepare($consultaSQL);
$consulta->execute($resultados);

	if (!isset($_SESSION['nombre'])) {
		header('Location: login.php');
	}elseif(isset($_SESSION['nombre'])){
		include 'model/conexion.php';
		$id = $_GET['id'];

		$sentencia = $bd->prepare("SELECT * FROM alumno WHERE id_alumno = ?;");
		$sentencia->execute([$id]);
		$persona = $sentencia->fetch(PDO::FETCH_OBJ);
		//print_r($persona);
	}else{
		echo "Error en el sistema";
	}

?>

 <!--<!DOCTYPE html>
<html>
<head>
	<title>+++  +++   </title>
	<meta charset="utf-8">
</head>
<body>
	<center>
		<h3>     ++++       +++:</h3>

	</center>
</body>
</html>