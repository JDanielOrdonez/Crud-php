<?php 

$nombre = $_POST['nombre'];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$direccion = $_POST["direccion"];
$vacunado = $_POST['vacunado'];
$estatura = $_POST['estatura'];
$peso = $_POST['peso'];
$genero = $_POST['genero'];
$tipo_sangre = $_POST['tipo_sangre'];




include '../bd/conexion.php';

try {
	if (empty($nombre) or empty($apellido) or empty($edad) or empty($direccion) or empty($vacunado) or empty($estatura) or empty($peso) or empty($tipo_sangre) or empty($genero)) {
 		echo "Lo siento hubo un problema";
 	}else{
	 	$sql = "INSERT INTO datos VALUES('','$nombre','$apellido','$edad','$direccion','$vacunado','$estatura','$peso','$genero','$tipo_sangre')";
	 	$conexion->query($sql);#el metodo query permite ejecutar consultas

	 	header('Location: ../index.php');

	}

} catch (Exception $e) {
	
}
// el valor


 ?>