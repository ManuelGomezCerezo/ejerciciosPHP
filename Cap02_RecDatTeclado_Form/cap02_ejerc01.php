<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc01</title>
    </head>
    <body>
      <form action="cap02_ejerc01.php" method="get">
        Introduzca el Primer número --- 
        <input type="number" name="numero1"><br>
        Introduzca el Segundo número --- 
        <input type="number" name="numero2"><br>
        <input type="submit" value="Calcular">
      </form>
        <?php
        $x = $_GET['numero1'];
        $y = $_GET['numero2'];
        
        echo $x, " &nbsp; multiplicado por ", $y, "&nbsp;es igual a&nbsp;", $x * $y;
        ?>
 
    </body>
</html>
