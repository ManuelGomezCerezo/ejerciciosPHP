<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc03</title>
    </head>
    <body>
      <form action="cap02_ejerc03.php" method="get">
        Introduzca la cantidad en Pesetas: 
        <input type="text" name="cantidad"><br><!--OJO CON LA ETIQUETA type="number" NO SE PUEDE PONER DECIMALES-->
        <input type="hidden" value="Calcular">
      </form>
        <?php
          $pesetas = $_GET['cantidad'];
          $factor = 166.386;

          echo $pesetas, " pesetas son ", round($pesetas / 166.386, 2), " euros";
        ?>
 
    </body>
</html>
