<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc01</title>
      
    <style>
        table {
            border: 3px solid black;
        }
        th {
            border: 3px solid black;
        }
        td {
            border: 1px solid black;
            width: 100px;
            text-align: right;
        }
      </style>
        
    </head>
    <body>
      <?php
      //Tres formas de definir el array.  
      $arrayNumeros = new SplFixedArray(20);
      $arrayCuadrado  = [20];
      $arrayCubo = [];
      ?>

      <table>
        <tr><th>NUMERO</th><th>CUADRADO</th><th>CUBO</th></tr>

      <?php  

        for ($i = 0; $i < 20; $i++) {
          $arrayNumeros[$i] = rand(0, 100);
          $arrayCuadrado[$i] = pow($arrayNumeros[$i], 2);
          $arrayCubo[$i] = pow($arrayNumeros[$i], 3);
        }

        for ($i = 0; $i < 20; $i++) {
          echo "<tr><td>", $arrayNumeros[$i], "</td><td>", $arrayCuadrado[$i], "</td><td>", $arrayCubo[$i], "</td></tr>";
        }

      ?>
      </table>
    </body>
</html>
