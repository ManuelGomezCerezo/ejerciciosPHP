<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc02</title>
      
    <style>
        
    </style>
        
    </head>
    <body>
      
      <?php
        $numero = $_GET['num'];
        $cocNum = $_GET['numint'];
        $contador = $_GET['cont'];
        $maximo = -999999999;
        $minimo = 99999999;
        
        $cocNum = $cocNum. " ". $numero;
        $contador++;
        //echo "introducidos ", $cocNum;
                     
      if ($contador < 11) {
        
      ?>        
        
        <h3>Introduce 10 números para calcular el máximo y mínimo</h3>
        <form action="cap05_ejerc02.php" method="get">
              <input type="number" autofocus name="num">
              <input type="hidden" name="numint" value="<?php echo $cocNum; ?>">
              <input type="hidden" name="cont" value="<?php echo $contador; ?>">
          </form>
        
      <?php  
      }else{
        $cocNum = substr($cocNum, 2); // FUNCION substr Le quita el espacio en blanco del principio
                                        // que ha sido creado la primera vez que se concatena
                                        // $cocNum = $cocNum." ".$numInt;
                                        // De esta forma se ocupará la posición 0 del array
                                        // con el primer numero introducido, no con un espacio
                                        // en blanco fruto del problema producido a concatenar
          
        //echo "<br>Los numeros introducidos son concatena: ", $cocNum,"<br>";
                
        $arrayNumeros = explode(" ", $cocNum);
        echo '<br>LOS NÚMEROS INTRODUCIDOS SON = ';
        foreach ($arrayNumeros as $n) {
            echo $n, ", ";
        }
        
        for ($i = 0; $i < count($arrayNumeros); $i++) {
          if ($arrayNumeros[$i] >= $maximo) {
            $maximo = $arrayNumeros[$i];
          }
          if ($arrayNumeros[$i] <= $minimo) {
            $minimo = $arrayNumeros[$i];
          }
        }
        
        echo '<br><br><br>MAXIMO = ', $maximo, '<br>';
        echo 'MINIMO = ', $minimo, '<br>';
        
      }
      ?>
    </body>
</html>
