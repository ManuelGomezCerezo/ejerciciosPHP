<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc08</title>
      
    <style>
      td {
          width: 100px;
          border: 1px solid black;
          text-align: right;
      }
      th {
          width: 100px;
          border: 1px solid black;
      }
      .indices {
          text-align: center;
      }
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
          
        if ($cuentaNum == 10) {

          $concatenaNum = substr($concatenaNum, 1); // Le quita el espacio en blanco del principio
                                        // que ha sido creado la primera vez que se concatena
                                        // $cocNum = $cocNum." ".$numInt;
                                        // De esta forma se ocupará la posición 0 del array
                                        // con el primer numero introducido, no con un espacio
                                        // en blanco fruto del problema producido a concatenar

          $arrayNumeros = explode(",", $concatenaNum);

          echo "<table>";
          echo "<tr><th>INDICE</th><th>NUMERO</th></tr>";
          for ($i = 0; $i < count($arrayNumeros); $i++) {
            echo "<tr><td class='indices'>", $i, "</td><td>", $arrayNumeros[$i], "</td></tr>";
          }
      ?>  
        <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                           action="cap05_ejerc08.php"-->
          <input type="submit" name="calPri" value="CALCULAR PRIMOS"><br>
          <input type="number" name="numInt" value="11">
          <input type="hidden" name="conNum" value="<?php echo $concatenaNum; ?>">
          <input type="hidden" name="cueNum" value="<?php echo $cuentaNum; ?>">
        </form>
      <?php
        if (isset($_REQUEST["calPri"])) {
          echo 'lolo entra bien';
        }
          
        } else {  
        
      ?>
        
        <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                           action="cap05_ejerc08.php"-->
          INTRODUCIR 10 NÚMEROS ENTEROS PARA BUSCAR LOS PRIMOS<br>
          <span style="color: red">OJO ESTE NO ESTÁ TERMINADO<span><br>
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