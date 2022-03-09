<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Equipo</title>
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/layout-grid.css">
</head>
<body>
    <?php 
        include 'bd/conexion.php'; 
        
        $id_niños = $_GET["identificador"];
        $resultados = $conexion->query("SELECT * FROM datos WHERE id_niños='".$id_niños."'");            
     ?> 
        
        <div class="contenedor">
    
            <header class="row head">
                <div class="col title">
                    <h1 class="mb-0">Modificar equipo</h1>
                </div>
            </header>                                             
                <main class="row">
                     <div class="col pl-0 pr-0">
                            <table class="table table-hover table-responsive-lg ">
                                <thead>                        
                                    <tr>
                                        <th colspan="0">id</th>
                                        <th colspan="1">Nombre</th>
                                        <th colspan="1">Apellido</th>                        
                                        <th colspan="1">Edad</th>
                                        <th colspan="1">Direccion</th>
                                        <th colspan="1">Vacunado</th>       
                                        <th colspan="1">Estatura</th>
                                        <th colspan="1">Peso</th>  
                                        <th colspan="1">Genero</th> 
                                        <th colspan="1">Tipo de sangre</th>                                                             
                                    </tr>
                                </thead>
                                <tbody>

                                <?php foreach ($resultados as $filas) {                                                                
                                    ?>                               
                                <form method="post" action="funciones/modificar.php">    
                                    <tr class="table-success inputs"> 
                                        <td colspan="1">
                                        <input class="form-control" readonly="readonly" type="text" placeholder="id" name="id_niño" value="<?php echo $filas['id_niños'] ?>" size =" 12" >
                                        </td> 
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="<?php echo $filas['nombre'] ?>" size =" 12" >
                                        </td>                                                                               
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Apellido" name="apellido" value="<?php echo $filas['apellido'] ?>" size =" 12" >
                                        </td>
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Edad" name="edad" value="<?php echo $filas['edad'] ?>" size =" 12" >
                                        </td>
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Direccion" name="direccion" value="<?php echo $filas['direccion'] ?>" size =" 12" >
                                        </td>
                                        <td colspan="1">                                        
                                        <select class="form-control" name="vacunado" id="vacunado">                                            
                                            <option>SI</option>                                            
                                            <option>NO</option>
                                        </select>                                        
                                        </td>
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Estatura" name="estatura" value="<?php echo $filas['estatura'] ?>"size =" 13 ">
                                        </td>
                                        <td colspan="0">
                                        <input class="form-control" type="text" placeholder="Peso" name="peso" value="<?php echo $filas['peso'] ?>"size =" 13 ">
                                        </td>                                        
                                        <td colspan="1">
                                        <select class="form-control" name="genero">                                            
                                            <option>Hombre</option>                                            
                                            <option>Mujer</option>
                                        </select>                                        
                                        </td>
                                        <td colspan="1">
                                        <select class="form-control" name="tipo_sangre">
                                            <option>A+</option>
                                            <option>B+</option>
                                            <option>O+</option>
                                            <option>AB+</option>
                                            <option>A-</option>
                                            <option>B-</option>
                                            <option>O-</option>
                                            <option>AB-</option>
                                        </select>  
                                        </td>                                    
                                        <td colspan="1">                                                                                                                                                                   
                                        <input type="submit" class="btn btn-warning">                                                                                                                                                   
                                        </td>                                                           
                                    </tr>     
                                    <?php } ?>                                                                                        
                                </form>                                
                            </tbody>
                        </table>                                                                                         
                    </div>   
                </main>                
        </div>
     
    
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>