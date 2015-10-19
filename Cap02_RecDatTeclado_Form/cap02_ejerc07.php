<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap02_ejerc07</title>
    </head>
    <body>
      <h3>CALCULA EL IMPORTE DE LA FACTURA</h3>
      <form action="cap02_ejerc07.php" method="get"> <!--Método GET presenta en la barra de navegación
                                                         los datos enviados por formulario, mientras
                                                         que el método POST mantiene ocultos los datos
                                                         enviados por formulario-->
        Introduzca la base imponible de la factura.
        <input type="text" name="base"><br>
        Elija el IVA a aplicar a la factura.
        <select name="iva">    
          <option value="4">4%</option>
          <option value="10">10%</option>
          <option value="21" selected="selected">21%</option>
        </select>
        <input type="submit" value="Calcular">
      </form>
        <?php
        $x = $_REQUEST['base'];//con $_REQUEST sirve para recoger en PHP la variable envíada se bien
                               //por el método POST o por el método GET.
        $i = $_REQUEST['iva'];
        
        echo "Base imponible: ", $x, "&euro; --- IVA: ", $i, "% --- IVA a pagar ", round($x * $i / 100, 2), "&euro; --- <b>TOTAL A PAGAR: ", round(($x * $i / 100) + $x, 2), "&euro;</b>";
        ?>
      <p><sup></sup>
    </body>
</html>