<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc02</title>
    </head>
    <body>
      <form action="cap02_ejerc02.php" method="get">
        Introduzca la cantidad en Euros: 
        <input type="number" name="cantidad"><br>
        <input type="hidden" value="Calcular">
      </form>
        <?php
          $euros = $_GET['cantidad'];
          $factor = 166.386;

          echo $euros, " euros son ", round($euros * 166.386, $precision = 2), " pesetas";
        ?>
 
    </body>
</html>
