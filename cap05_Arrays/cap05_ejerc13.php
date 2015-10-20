<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap05_ejerc13</title>
    
      <style>
          .numeracion td {
            font-size: 1.2em;
            border: 4px solid black;
          }
          .numeracion {
            font-size: 1.2em;
            border: 4px solid black;
          }
          td {
            border: 2px solid black;
            width: 40px;
            height: 40px;
            text-align: center;
          }
          .diagonal {
            color: green;
          } 

      </style>
    
    </head>
      
   
    <body>
           
    <?php
      $numMin = 1000;
      $numAleatorio;
      $noExiste = TRUE;
      $fila = 0;
      $columna = 0;
      $filaMin;
      $columnaMin;

      //RELLENO el array con un número aletorio comprobando antes que no existe ese mismo número.
      while ($fila < 6) {
        $columna = 0;
        
        while ($columna < 9) {
          $numAleatorio = rand(100, 999);
          
          //Al mismo tiempo veo si el nuevo número aletorio es el mínimo.
          if ($numAleatorio <= $numMin) {
            $numMin = $numAleatorio;
            $filaMin = $fila;
            $columnaMin = $columna;
          }
          
          //Compruebo que no existe.
          $noExiste = TRUE;
          for ($i = 0; $i < 6; $i++) {
            for($j = 0; $j < 9; $j++) {
              if ($arrayNumeros[$i][$j] == $numAleatorio) {
                $noExiste = FALSE;
              }
            }
          }
          
          //Si no existe lo guardamos en la posición que corresponde.
          if ($noExiste) {
            $arrayNumeros[$fila][$columna] = $numAleatorio;
            $columna++;
          }
        }//fin while ($columna < 9)
        
        $fila++;
      }//fin while ($fila < 6) 
      
      //Muestro la tabla colorendo en azul el mínimo y verde sus diagonales.
      echo "<table>";
      echo "<tr class='numeracion'><td></td><td>C1</td><td>C2</td><td>C3</td><td>C4</td><td>C5</td><td>C6</td><td>C7</td><td>C8</td><td>C9</td></tr>";
      
      for ($i = 0; $i < 6; $i++) {
        echo "<tr><td class='numeracion'>F". $i. "</td>";
        
        for($j = 0; $j < 9; $j++) {
          if ($arrayNumeros[$i][$j] == $numMin) {                           //Coloreo azul si es minimo
            echo "<td style='color: blue'>". $arrayNumeros[$i][$j]. "</td>";
          } elseif ((abs($i - $filaMin)) == abs(($j - $columnaMin))) {      //Coloreo verde si es diagonal
            echo "<td class='diagonal'>". $arrayNumeros[$i][$j]. "</td>";
          }else {
            echo "<td>". $arrayNumeros[$i][$j]. "</td>";                    //No coloreo ni no cumple las anteriores
          }
        }
      
        echo "</tr>";
      }
      echo "</table>";
      
      echo 'NUMERO MINIMO = '. $numMin;
      
      
         
    ?>
    </body>
</html>
