<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap07_ejerc01Baja</title>
    </head>
    <body>
      <?php
      $conexion = mysql_connect("localhost", "root", "root");
      mysql_select_db("banco", $conexion);
      mysql_set_charset('utf8');
      
      $dni = $_REQUEST['dni_elegido'];
      $sql = "DELETE FROM cliente WHERE dni=\"$dni\"";//directriz sql para la petición.
      
      //echo $sql;
      
      $consulta = mysql_query($sql, $conexion);
      
      header("refresh:2; url=cap07_ejerc01.php");
      
      mysql_close(); //Es conveniente cerrar siempre la conexión.
            
      ?>
      <h2>HAS BORRADO EL CLIENTE CON DNI: <?= $dni ?></h2> 
      
        
    </body>
</html>
