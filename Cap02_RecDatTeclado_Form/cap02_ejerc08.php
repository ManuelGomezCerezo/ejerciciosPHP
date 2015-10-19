<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc08</title>
    </head>
    <body>
      <h3>CALCULA EL SALARIO SEMANAL DE UN OPERARIO</h3>
      <form action="cap02_ejerc08.php" method="post">
        Introduzca el nombre del trabajador.
        <input type="text" name="nombre"><br>  
        Introduzca el numero de horas que ha trabajado el trabajador.
        <input type="text" name="horas"><br><br><br>
        <input type="submit" value="Calcular">
      </form>
        <?php
        $n = $_REQUEST['nombre'];
        $x = $_POST['horas'];
        $importehora = 12;
        
        echo "Nombre trabajador: ", $n, "<br>";
        echo "Horas trabajadas: ", $x, " horas<br>";
        echo "Importe a cobrar esta semana: ", $x * $importehora, " &euro;";
        ?>
      <p><sup></sup>
    </body>
</html>