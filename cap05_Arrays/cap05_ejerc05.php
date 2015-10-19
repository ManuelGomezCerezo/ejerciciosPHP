<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc5</title>
      
    <style>
        td {
          width: 20px;
          font-size: 0.5em;
        }
        
        .meses {
          width: 150px;
          height: 20px;
        }
        
        .barras {
          background-color: red;
          width: 20px;
          font-size: 0.5em;
        }
        
        
    </style>
        
    </head>
    <body>
      
      <?php
      
      $arrayTemperaturas = new SplFixedArray(12);
      $arrayMeses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
      
      if (isset($_REQUEST['0'])) {
        
        
        //Relleno el $arrayTemperaturas e imprimo tanto $arrayMeses como $arrayTemperaturas para
        //dibujar las barras.
        echo '<table>';
        for ($i = 0; $i < 12; $i++) {
          $arrayTemperaturas[$i] = $_REQUEST[$i];
        
          echo "<tr><td class='meses'>", $arrayMeses[$i], " = </td>";
          for ($j = 1; $j < $arrayTemperaturas[$i]; $j++) {
            echo "<td class='barras'></td>";
          }
          echo '<td>', $arrayTemperaturas[$i], " Cº</td></tr>";
        }
        echo '</table>';
             
      } else {
           
      ?>
        <form action="#" method="get">
        <table>
          <tr><td>MES</td><td>TEMPERATURA</td></tr>
          
      <?php  
        for ($i = 0; $i < 12; $i++) {
          echo "<tr><td>", $arrayMeses[$i], "</td><td><input type='number' name='", $i, "' required autofocus></td>";
        }
      ?>
        
        </table>
        <input type="submit" value="EJECUTAR">
        </form>        
      <?php  
      }
      ?>
      
    </body>
</html>
