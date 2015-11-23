<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>cap07_ejerc01Alta</title>
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
      
      //COMPROBAR SI EL DNI DEL NUEVO CLIENTE YÁ EXISTE.
      //Primero hacemos una consulta para extraer todos los DNI existentente en la BD
      $existe = FALSE;
      $sqlDNI = "SELECT dni, nombre, direccion, telefono FROM cliente";
      $consultaDNI = mysql_query($sqlDNI, $conexion);
      
      while ($registro = mysql_fetch_array($consultaDNI)){
        if ($_REQUEST['dni_nuevo'] == $registro['dni']) {
          $existe = TRUE;
        }
      }
      
      //EJECUCIÓN DEL ALTA
      if ($existe) {//Si existe nos manda otra vez a la página del listado
        echo "<h2>YA EXISTE UN CLIENTE CON EL DNI<h2>";
        header("refresh:2; url=cap07_ejerc01.php");
      }  else {//Si no existe ejecuta el INSERT en la base de datos.
        $dni_n = $_REQUEST['dni_nuevo'];
        $nombre_n = $_REQUEST['nombre_nuevo'];
        $direccion_n = $_REQUEST['direccion_nuevo'];
        $telefono_n = $_REQUEST['telefono_nuevo'];
        $sql = "INSERT INTO cliente (dni, nombre, direccion, telefono) VALUES ('". $dni_n ."', '". $nombre_n ."', '". $direccion_n ."', '". $telefono_n ."')";
        $consulta = mysql_query($sql, $conexion);

        header("refresh:2; url=cap07_ejerc01.php");
        //echo $sql;
        echo "<h2>HAS INSERTADO UN NUEVO CLIENTE CON DNI: ". $dni_n ."</h2>";
      }
      
      mysql_close(); //Es conveniente cerrar siempre la conexión.
    ?>
  </body>
</html>