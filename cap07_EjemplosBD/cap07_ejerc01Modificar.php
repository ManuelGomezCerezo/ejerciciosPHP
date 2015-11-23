<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>cap07_ejerc01Modificar</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <style>
        #nuevo {
            width: 100%;
        }
        .iconos {
            text-align: center;
        }
    </style>
  </head>
  <body>
    
    <?php
      $conexion = mysql_connect("localhost", "root", "root");
      mysql_select_db("banco", $conexion);
      mysql_set_charset('utf8');
      
      $dni = $_REQUEST['dni_elegido'];
      $dni_n = $_REQUEST['dni_nuevo'];
      $nombre_n = $_REQUEST['nombre_nuevo'];
      $direccion_n = $_REQUEST['direccion_nuevo'];
      $telefono_n = $_REQUEST['telefono_nuevo'];
      
      $sql = "UPDATE cliente SET dni='". $dni_n ."', nombre='". $nombre_n. "', direccion='". $direccion_n. "', telefono='". $telefono_n. "' WHERE dni=\"$dni\"";
      $consulta = mysql_query($sql, $conexion);
    
      header("refresh:2; url=cap07_ejerc01.php");
      
      //echo $sql;
      
    mysql_close(); //Es conveniente cerrar siempre la conexión.
    ?>
      <h2>HAS MODIFICADO EL CLIENTE CON DNI: <?= $dni ?></h2>
       
    </body>
</html>