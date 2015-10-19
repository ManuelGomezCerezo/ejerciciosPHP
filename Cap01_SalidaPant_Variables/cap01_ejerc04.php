<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap01_ejerc04</title>
        <link rel="stylesheet" type="text/css" href="cap01_HojaEstilos.css" title="style" />
    </head>
    <body>
        <?php 
        $a = "DWES";
        $b = "EINEM";
        $c = "DIW";
        $d = "DWEC";
        $e = "DAW";
        $f = "HLC";
        ?>
        <table>
            <?php echo "<h3>HORARIO 2ºDAW 2015-2016</h3> $a";?>
            <tr id="titulos"><td><?php echo 'LUNES'; ?></td><td><?php echo 'MARTES'; ?></td><td><?php echo 'MIERCOLES'; ?></td><td><?php echo 'JUEVES'; ?></td><td><?php echo 'VIERNES'; ?></td></tr>
            <tr><td><?php echo $a; ?></td><td><?php echo $d; ?></td><td><?php echo $a; ?></td><td><?php echo $d; ?></td><td><?php echo $c; ?></td></tr>
            <tr><td><?php echo $a; ?></td><td><?php echo $d; ?></td><td><?php echo $a; ?></td><td><?php echo $d; ?></td><td><?php echo $c; ?></td></tr>
            <tr><td><?php echo $a; ?></td><td><?php echo $d; ?></td><td><?php echo $a; ?></td><td><?php echo $d; ?></td><td><?php echo $c; ?></td></tr>
            <tr><td><?php echo "Descanso"; ?></td><td><?php echo "Descanso"; ?></td><td><?php echo "Descanso"; ?></td><td><?php echo "Descanso"; ?></td><td><?php echo "Descanso"; ?></td></tr>
            <tr><td><?php echo $b; ?></td><td><?php echo $e; ?></td><td><?php echo $f; ?></td><td><?php echo $b; ?></td><td><?php echo $c; ?></td></tr>
            <tr><td><?php echo $c; ?></td><td><?php echo $e; ?></td><td><?php echo $f; ?></td><td><?php echo $b; ?></td><td><?php echo $a; ?></td></tr>
            <tr><td><?php echo $c; ?></td><td><?php echo $e; ?></td><td><?php echo $f; ?></td><td><?php echo $b; ?></td><td><?php echo $a; ?></td></tr>
        </table>
    </body>
</html>
