<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc05</title>
    </head>
    <body>
      <h3>CALCULA EL AREA DE UN RECTANGULO</h3>
      <form action="cap02_ejerc05.php" method="get">
        Introduzca longitud de un lado del rectangulo:
        <input type="number" name="lado1"><br>
        Introduzca longitud del otro lado del rectangulo: 
        <input type="number" name="lado2"><br>
        Elija unidad de medida:
        <select name="unidad">    
          <option value="m" selected="selected">metros</option>
          <option value="cm">centímetros</option>
          <option value="mm">milímetros</option>
        </select>
        <input type="submit" value="Calcular">
      </form>
        <?php
        $x = $_GET['lado1'];
        $y = $_GET['lado2'];
        $u = $_GET['unidad'];
        
        echo "El rectangulo de ", $x, $u, " por ", $y, $u, " tiene una superficie de ", $x * $y, " ", $u, "<sup>2</sup>";
        ?>
      <p><sup></sup>
    </body>
</html>
