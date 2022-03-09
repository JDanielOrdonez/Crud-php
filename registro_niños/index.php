<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title> 
    <link rel="stylesheet" type="text/css" href="css/estilos.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">    
    <link rel="stylesheet" href="css/layout-grid.css">
</head>
<body>
    
    <!-- TRAER LA CONEXIÓN A LA BASE DE DATOS -->
    <?php 
        include 'bd/conexion.php';         
        $resultados = $conexion->query('SELECT * FROM datos');

     ?>     
        <div class="contenedor">
    
            <header class="row head">
                <div class="col title">
                    <h1 class="mb-0">Registrar</h1>                                                     
                </div>                
            </header>                                                         
                
                <main class="row">
                     <div class="col pl-0 pr-0">
                            <table class="table table-hover table-responsive-lg ">
                                <!-- TITULOS PARA CADA INPUTS -->
                                <thead>                        
                                    <tr>
                                        <th colspan="0">iD</th> 
                                        <th colspan="0">Nombre</th>                                                               
                                        <th colspan="0">Apellido</th>
                                        <th colspan="0">Edad</th>
                                        <th colspan="0">Direccion</th>
                                        <th colspan="0">Vacunado</th> 
                                        <th colspan="0">Estatura</th>
                                        <th colspan="0">Peso</th>                
                                        <th colspan="0">Genero</th>  
                                        <th colspan="0">Tipo de sangre</th>                                                       
                                    </tr>
                                </thead>
                                <tbody>                                    
                                  

                                    <?php foreach ($resultados as $filas) {                                                                
                                    ?>

                                <!-- TRAER Y MOSTRAR DATOS DE LA BD EN CADA TEXTBOX -->
                                <form method="GET" action="modificar-view.php">    
                                    <tr class="table-success">
                                        <td colspan="0"><?php echo $filas['id_niños'] ?></td>
                                        <td colspan="0"><?php echo $filas['nombre'] ?></td>
                                        <td colspan="0"><?php echo $filas['apellido'] ?></td>
                                        <td colspan="0"><?php echo $filas['edad'] ?></td>
                                        <td colspan="0"><?php echo $filas['direccion'] ?></td> 
                                        <td colspan="0"><?php echo $filas['vacunado'] ?></td>
                                        <td colspan="0"><?php echo $filas['estatura'] ?></td>  
                                        <td colspan="0"><?php echo $filas['peso'] ?></td>                                          
                                        <td colspan="0"><?php echo $filas['genero'] ?></td> 
                                        <td colspan="0"><?php echo $filas['tipo_sangre'] ?></td> 
                                        <td colspan="0">                                                                                                                             
                                        <a class="btn btn-warning" style="width: 141px;" href="modificar-view.php?identificador=<?php  echo $filas['id_niños'] ?>">Editar</a>
                                        </td>                                                  
                                    </tr>                        
                                    <?php } ?>                                    
                                </form> 


                                <!-- FORMULARIO PARA INSERTAR -->
                                <form method="post" name="form" action="funciones/insert.php" enctype="multipart/form-data">                                    
                                    <tr class="table-success inputs">
                                        <td colspan="0" >                                            
                                        </td>
                                        <td colspan="0" >
                                        <input class="form-control" type="text" placeholder="Nombre" name="nombre" value="" size =" 12" >                                            
                                        </td>

                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Apellido" name="apellido" value="" size =" 12" >
                                        </td>
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Edad" name="edad" value="" size =" 12" >
                                        </td>
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Direccion" name="direccion" value="" size =" 12" >
                                        </td>
                                        <td colspan="1">
                                        <select class="form-control" name="vacunado" id="vacunado">                                            
                                            <option>SI</option>                                            
                                            <option>NO</option>
                                        </select>                                        
                                        </td>
                                        <td colspan="0">
                                        <input class="form-control" type="text" placeholder="Estatura" name="estatura" size =" 13 ">
                                        </td>
                                        <td colspan="1">
                                        <input class="form-control" type="text" placeholder="Peso" name="peso" size =" 13 ">
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
                                        <td colspan="2">
                                            <button class="btn btn-warning" style="width: 141px;">Agregar</button>                   
                                        </td>                                                                                                                                             
                                    </tr>
                                </form> 


                                <!-- GENERAR REPORTES -->
                                <form action="reportes/report.php">                                    
                                    <tr class="table-success inputs">
                                        <td colspan="2">
                                            <p style="font-size:17px;">Generar reporte</p>
                                        </td>
                                        <td colspan="2">                                          
                                        <button type="submit" style="width: 141px;" class="btn btn-warning">Descargar</button>
                                        </td> 
                                    </tr>                                     
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