<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap04_ejerc04</title>
    </head>
    <body>
      <form action="cap02_ejerc04.php" method="get">
        Introduzca el Primer número --- 
        <input type="number" name="numero1"><br>
        Introduzca el Segundo número --- 
        <input type="number" name="numero2"><br>
        <input type="submit" value="Calcular">
      </form>
        
        <?php
        $x = $_REQUEST['numero1'];
        $y = $_REQUEST['numero2'];
        
        echo $x, " + ", $y, " = ", $x + $y, "<br>";
        echo $x, " - ", $y, " = ", $x - $y, "<br>";
        echo $x, " * ", $y, " = ", $x * $y, "<br>";
        echo $x, " / ", $y, " = ", $x / $y, "<br>";
        ?>
 
    </body>
</html>
