<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc09</title>
    </head>
    <body>
      <h3>CALCULA EL VOLUMEN DE UN CONO</h3>
      <form action="cap02_ejerc09.php" method="get">
        Introduzca longitud del radio del cono:
        <input type="number" name="radio"><br>
        Introduzca la altura del cono: 
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
        $r = $_GET['radio'];
        $h = $_GET['altura'];
        $u = $_GET['unidad'];
        
        echo "El cono de radio ", $r, $u, " y una altura de ", $h, $u, "<br>";
        echo "Tiene un volumen de ", round(((3.1416 * pow($r, 2) * $h) / 3), $precision = 3), " ", $u, "<sup>3</sup>";
        ?>
      <p>
    </body>
</html>
