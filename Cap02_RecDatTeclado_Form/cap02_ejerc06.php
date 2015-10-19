<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc06</title>
    </head>
    <body>
      <h3>CALCULA EL AREA DE UN TRIANGULO</h3>
      <form action="cap02_ejerc06.php" method="get">
        Introduzca la longitud de la base del triangulo:
        <input type="number" name="base"><br>
        Introduzca la altura del triangulo: 
        <input type="number" name="altura"><br>
        Elija unidad de medida:
        <select name="unidad">    
          <option value="m" selected="selected">metros</option>
          <option value="cm">centímetros</option>
          <option value="mm">milímetros</option>
        </select>
        <input type="submit" value="Calcular">
      </form>
        <?php
        $x = $_GET['base'];
        $y = $_GET['altura'];
        $u = $_GET['unidad'];
        
        echo "El triangulo con base ", $x, $u, " y altura ", $y, $u, " tiene una superficie de ", $x * $y / 2, " ", $u, "<sup>2</sup>";
        ?>
      <p><sup></sup>
    </body>
</html>