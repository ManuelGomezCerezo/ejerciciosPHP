<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc09b</title>
      
    <style>
      td {
          width: 30px;
          border: 1px solid black;
          text-align: center;
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
        
                
        if (!isset($_REQUEST["numInt"])) {
          $cuentaNum = 0;
      ?>
          FORMULARIO A - INTRODUCIR 10 NÚMEROS ENTEROS<br>
          <span style="color: red">OJO HAY QUE REVISAR ESTE EJERCICIO, solo hay que rotar un espacio</span>
          <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                             action="cap05_ejerc09.php"-->
            <input type="number" name="numInt" required autofocus><br>
            <input type="hidden" name="conNum" value="<?php echo $concatenaNum; ?>">
            <input type="hidden" name="cueNum" value="<?php echo $cuentaNum; ?>">
          </form>
                     
      <?php
        
        } else {
          $concatenaNum = $_REQUEST["conNum"]. ",". $_REQUEST["numInt"];
          $cuentaNum = $_REQUEST["cueNum"];
          
          if (!isset($_REQUEST["calcular"])) {
          $cuentaNum++;
          }
          
          if ($cuentaNum != 10) {
          
          
          
          echo 'Numero introducido = '. $concatenaNum. ' Cuenta numero = '. $cuentaNum. '<br>';
          
      ?>
          FORMULARIO B - INTRODUCIR 10 NÚMEROS ENTEROS<br>
          <form action="#" method="get">
            <input type="number" name="numInt" required autofocus><br>
            <input type="hidden" name="conNum" value="<?php echo $concatenaNum; ?>">
            <input type="hidden" name="cueNum" value="<?php echo $cuentaNum; ?>">
            
          </form>
        
      <?php
      
          } else {
            
              if (!isset($_REQUEST['posIni'])) {

              echo 'Numero introducido = '. $concatenaNum. ' Cuenta numero = '. $cuentaNum. '<br>';

              $concatenaNum = substr($concatenaNum, 1); // Le quita el espacio en blanco del principio
                                            // que ha sido creado la primera vez que se concatena
                                            // $cocNum = $cocNum." ".$numInt;
                                            // De esta forma se ocupará la posición 0 del array
                                            // con el primer numero introducido, no con un espacio
                                            // en blanco fruto del problema producido a concatenar

              $arrayNumeros = explode(',', $concatenaNum);
              
              echo '<table><tr><td>INDICE</td>';
              for ($i = 0; $i < count($arrayNumeros); $i++) {
                echo '<td>'. $i. '</td>';
              }
              echo '</tr><tr><td>NUMEROS</td>';
              for ($i = 0; $i < count($arrayNumeros); $i++) {
                echo '<td>'. $arrayNumeros[$i]. '</td>';
              }
              echo '</tr></table>';

      ?>    
              <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                               action="cap05_ejerc09.php"-->
                FORMULARIO C - ELIGE LA POSICIÓN A DESPLAZAR<br>
                <input type="number" name="posIni" required autofocus><br>
                <input type="number" name="posFin" required autofocus><br>
                <input type="hidden" name="conNum" value="<?php echo $concatenaNum; ?>">
                <input type="hidden" name="cueNum" value="<?php echo $cuentaNum; ?>">
                <input type="submit" name="calcular" value="CALCULAR">
                <input type="hidden" name="numInt" value="">
              </form>
          
      <?php
            } else {
              $posicionInicial = $_REQUEST['posIni'];
              $posicionNueva = $_REQUEST['posFin'];
                                         
              if ($posicionInicial < $posicionNueva) {
                $diferenciaPosiciones = $posicionNueva - $posicionInicial;
                
                echo 'Numero introducido = '. $concatenaNum. ' Cuenta numero = '. $cuentaNum. '<br>';

                //////////////////////////////////////////////////////////////
                //Esto sirve para eliminar el espacion en blanco que se     //
                //crea al final del array cuandoreenviamos el formulario C  // 
                $arrayNumerosAux = explode(',', $concatenaNum);             //
                                                                            //            
                for ($i = 0; $i < (count($arrayNumerosAux) - 1); $i++) {    //
                $arrayNumeros[] = $arrayNumerosAux[$i];                     //
                    }                                                       //
                //////////////////////////////////////////////////////////////  
                
                echo '<br>ARRAY ORIGINAL<br>';
                echo '<table><tr><td>INDICE</td>';
                for ($i = 0; $i < count($arrayNumeros); $i++) {
                  echo '<td>'. $i. '</td>';
                }
                echo '</tr><tr><td>NUMEROS</td>';
                for ($i = 0; $i < count($arrayNumeros); $i++) {
                  echo '<td>'. $arrayNumeros[$i]. '</td>';
                }
                echo '</tr></table>';
                
//                echo '<br>POSICION INICIAL='. $posicionInicial. ' POSICION NUEVA='. $posicionNueva. ' DIFERENCIA POSICION='.$diferenciaPosiciones;
//                echo '<br>Tamaño ArrrayNumeros ='. count($arrayNumeros);
                
                
//                echo '<br>ARRAY original =';
//                foreach ($arrayNumeros as $elemento) {
//                  echo $elemento. '|';
//                }
                
                for ($j = 0; $j < $diferenciaPosiciones; $j++) {
                  
                  $numUltimo = $arrayNumeros[(count($arrayNumeros) - 1)];
                  
                  for ($i = (count($arrayNumeros) -1 ); $i > 0; $i--) {
                    $arrayNumeros[$i] = $arrayNumeros[$i-1];
                  }
                  $arrayNumeros[0] = $numUltimo;
                }            

//                echo '<br>ARRAY MODIFICADA =';
//                foreach ($arrayNumeros as $elemento) {
//                  echo $elemento. '|';
//                }
                
                echo '<br>ARRAY MODIFICADA<br>';
                echo '<table><tr><td>INDICE</td>';
                for ($i = 0; $i < count($arrayNumeros); $i++) {
                  echo '<td>'. $i. '</td>';
                }
                echo '</tr><tr><td>NUMEROS</td>';
                for ($i = 0; $i < count($arrayNumeros); $i++) {
                  echo '<td>'. $arrayNumeros[$i]. '</td>';
                }
                echo '</tr></table>';
              }
              
            }
          }
        }
      
      ?>  
        
    </body>
</html>