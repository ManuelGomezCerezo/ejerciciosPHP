<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc06</title>
      
    <style>
        
    </style>
        
    </head>
    <body>
      
      <?php
      
        if (isset($_REQUEST['numInt'])){

          $concatenaNum = $_REQUEST['conNum']. ",". $_REQUEST['numInt'];
          $cuentaNum = $_REQUEST['cueNum'];

          echo 'numeros introducidos = '. $concatenaNum;
          $cuentaNum++;
        }
        
        
          
        
        if ($cuentaNum == 8) {
          
          $concatenaNum = substr($concatenaNum, 1); // Le quita el espacio en blanco del principio
                                        // que ha sido creado la primera vez que se concatena
                                        // $cocNum = $cocNum." ".$numInt;
                                        // De esta forma se ocupará la posición 0 del array
                                        // con el primer numero introducido, no con un espacio
                                        // en blanco fruto del problema producido a concatenar
          
          $arrayNumeros = explode(",", $concatenaNum);
          
          echo '<br><br>Array números introducidos = ';
          foreach ($arrayNumeros as $elemento) {
          
            if ($elemento%2 == 0) {
              echo "<span style='color: red'>", $elemento, " | </span>"; 
            } else {
              echo "<span style='color: blue'>", $elemento, " | </span>";
            }
            
          }
          
          

                    
        } else {  
        
      ?>
        
        <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                           action="cap05_ejerc03.php"-->
          INTRODUCIR 8 NÚMEROS ENTEROS PAR PONER EN COLORES LOS PARES EN ROJO E IMPARES EN AZUL<br>
          <input type="number" name="numInt" required autofocus><br>
          <input type="hidden" name="conNum" value="<?php echo $concatenaNum; ?>">
          <input type="hidden" name="cueNum" value="<?php echo $cuentaNum; ?>">
        </form>
                    
        <span style='color: red'></span>
      <?php
        }    
      
      ?>
        
      
    </body>
</html>