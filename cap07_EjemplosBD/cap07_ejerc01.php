<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>cap07_ejerc01</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <style>
        td {
            width: 200px;
        }
        .nuevo {
            width: 95%;
        }
        .modificado {
            width: 250px;
        }
    </style>
  </head>
  <body>
    <h2>
      CLIENTES (Base de datos Banco)<br>
    </h2>
    <?php
      $conexion = mysql_connect("localhost", "root", "root");
      mysql_select_db("banco", $conexion);
      mysql_set_charset('utf8');
      $consulta = mysql_query("SELECT dni, nombre, direccion, telefono FROM cliente", $conexion);
    ?>
    
    <table border="1">
    <tr>
      <td><b>DNI</b></td>
      <td><b>Nombre</b></td>
      <td><b>Dirección</b></td>
      <td><b>Teléfono</b></td>
    </tr>
    
    <?php
      //INICIO LISTADO CLIENTES
      while ($registro = mysql_fetch_array($consulta)){
    ?>
        
        <tr>
          <td><?= $registro[dni] ?></td>
          <td><?= $registro[nombre] ?></td>
          <td><?= $registro[direccion] ?></td>
          <td><?= $registro[telefono] ?></td>
        </tr>
        
    <?php
      }
      mysql_close(); //Es conveniente cerrar siempre la conexión.
    ?>
    </table><br>
        
    <!--FORMULARIO ALTA CLIENTE--> 
    <table border="1">
    <form action="cap07_ejerc01Alta.php" method="get">
      <tr>
        <td colspan="4">
            <input style="width:100%" id="nuevo" type="submit" value="ALTA NUEVO CLIENTE">
        </td>
      </tr>
      <tr>
        <td><b>DNI</b></td>
        <td><b>Nombre</b></td>
        <td><b>Dirección</b></td>
        <td><b>Teléfono</b></td>
      </tr>
      <tr>
          <td><input class="nuevo" type="text" name="dni_nuevo"></td>
          <td><input class="nuevo" type="text" name="nombre_nuevo"></td>
          <td><input class="nuevo" type="text" name="direccion_nuevo"></td>
          <td><input class="nuevo" type="tel" name="telefono_nuevo"></td>
      </tr>
    </form>
    </table><br>    
        
    <!--FORMULARIO BAJA CLIENTE-->    
    <form action="cap07_ejerc01Baja.php" method="get">
      <input class="modificado" type="submit" value="DAR DE BAJA CLIENTE CON DNI:">
      <input class="modificado" type="text" name="dni_elegido"></td>
    </form><br>
    
    <!--FORMULARIO MODIFICACION CLIENTE-->    
    <form action="cap07_ejerc01Modificacion.php" method="get">
      <input class="modificado" type="submit" value="MODIFICAR CLIENTE CON DNI:">
      <input class="modificado" type="text" name="dni_elegido"></td>
    </form>
    
  </body>
</html>
