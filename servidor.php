<?php
  function conexion() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $db = "sistemasweb";
     $conexion = mysqli_connect($servidor, $usuario, $password, $db);
     return $conexion;
  }
    $conexion = conexion();

    $sql = "SELECT id_tarea, id_fecha , tarea , estado, fechaInsert FROM t_tareas";
    $respuesta = mysqli_query($conexion, $sql);
   

    $cadenaTabla = "";
    
    $cadenaTabla = $cadenaTabla . '<table border="1" class=" table table-striped">
                                  <thead>
                                      <th>ID_tarea</th>
                                      <th>id_fecha</th>
                                      <th>Tarea</th>
                                      <th>Estado</th>
                                      <th>Fecha</th>"
                                  </thead>';
                                  
    while($mostrar = mysqli_fetch_array($respuesta)){
      $cadenaTabla = $cadenaTabla . '<tr>
                                        <td>' . $mostrar['id_tarea'] . '</td>
                                        <td>' . $mostrar['id_fecha'] . '</td>
                                        <td>' . $mostrar['tarea'] . '</td>
                                        <td>' . $mostrar['estado'] . '</td>
                                        <td>' . $mostrar['fechaInsert'] . '</td>
                                    </tr>';
      

  }
        
    $tituloDePagina = "<h2>Manejo de cadenas con php a html</h2>";
    $boton= '<button class="btn btn-primary"> Registrar</button>';
    $descripcion = '<p>
                       <h3> Esta es una pagina de muestra para ver como obtener html 
                        desde php para asi poder imprimir</h3>
                    </p>';
     $nav='<nav class="navbar navbar-light nava">
    <a class="navbar-brand mx-auto" href="#"><h2> nabvar</h2></a>
    </nav>';

    $form =' <form>
                <label for="nombre">NOMBRE</label>
                <input type="text" class="form-control rounded-pill" name="nombre" placeholder="ingresa tu nombre" required pattern="[A-Za-z]{4,15}"
                <label for="apellidoP">Apellido Paterno</label>
                                    <input type="text" class="form-control rounded-pill" name="apellidoP" placeholder="Apellido Paterno" required pattern="[A-Za-z]{4,15}">
            </form>';


            $jumbo ='<div class="jumbotron">
            <h1 class="display-4">  tag 2</h1>
            <p class="lead"> sirve</p>
            <hr class="my-4">
            <p>aca seguimos en el jumbotron.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">AVER</a>
          </div>';
            

                    
      
      echo $tituloDePagina . $descripcion . $cadenaTabla . $boton . $nav . $jumbo;

  ?>

  