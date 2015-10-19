<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc03</title>
      
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
        
        
          
        
        if ($cuentaNum == 15) {
          
          $concatenaNum = substr($concatenaNum, 1); // Le quita el espacio en blanco del principio
                                        // que ha sido creado la primera vez que se concatena
                                        // $cocNum = $cocNum." ".$numInt;
                                        // De esta forma se ocupará la posición 0 del array
                                        // con el primer numero introducido, no con un espacio
                                        // en blanco fruto del problema producido a concatenar
          
          $arrayNumeros = explode(",", $concatenaNum);
          
          echo '<br><br>Array números introducidos = ';
          foreach ($arrayNumeros as $elemento) {
          echo $elemento. ' | ';
          }

          $ultimoNum = $arrayNumeros[count($arrayNumeros)-1];
          //echo '<br>ultimo numero es = '. $ultimoNum;
          for ($i = (count($arrayNumeros)-1); $i >= 0; $i--) {
            $arrayNumeros[($i)] = $arrayNumeros[($i-1)];
          }
          $arrayNumeros[0] = $ultimoNum;
          
          echo '<br><br>Array numeros volteados = ';
          foreach ($arrayNumeros as $elemento) {
            echo $elemento. ' | ';
          }
          
        } else {  
        
      ?>
        
        <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                           action="cap05_ejerc03.php"-->
          INTRODUCIR 15 NÚMEROS ENTEROS PARA DESPUES VOLTEARLOS.<br>
          INTRODUCE UN NUMERO ENTERO
          <input type="number" name="numInt" required autofocus><br>
          <input type="hidden" name="conNum" value="<?php echo $concatenaNum; ?>">
          <input type="hidden" name="cueNum" value="<?php echo $cuentaNum; ?>">
        </form>
      <?php
        }    
      
      ?>
        
      
    </body>
</html>
