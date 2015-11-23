<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>cap07_ejerc01Modificacion</title>
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
    <h2>MODIFICAR CLIENTE</h2>
    <?php
      $conexion = mysql_connect("localhost", "root", "root");
      mysql_select_db("banco", $conexion);
      mysql_set_charset('utf8');
      $dni = $_REQUEST['dni_elegido'];
      $sql = "SELECT dni, nombre, direccion, telefono FROM cliente WHERE dni=\"$dni\"";
      $consulta = mysql_query($sql, $conexion);
    ?>
    <form action="cap07_ejerc01Modificar.php" method="get">
    <table border="1">
    <tr>
      <td><b>DNI</b></td>
      <td><b>Nombre</b></td>
      <td><b>Dirección</b></td>
      <td><b>Teléfono</b></td>
    </tr>
    
    <?php
      while ($registro = mysql_fetch_array($consulta)){
             
    ?>
        <tr>
          <td><input type="text" name="dni_nuevo" value="<?= $registro[dni] ?>"></td>
          <td><input type="text" name="nombre_nuevo" value="<?= $registro[nombre] ?>"></td>
          <td><input type="text" name="direccion_nuevo" value="<?= $registro[direccion] ?>"></td>
          <td><input type="tel" name="telefono_nuevo" value="<?= $registro[telefono] ?>"></td>
        </tr>
    <?php
      }   
    ?>
      </table>
      <input type="submit" value="MODIFICAR">
      <input type="hidden" name="dni_elegido" value="<?= $dni ?>">
    </form>
  </body>
</html>
