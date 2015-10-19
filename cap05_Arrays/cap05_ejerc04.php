<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc4</title>
      
    <style>
        
    </style>
        
    </head>
    <body>
      
      <?php
      
      if (isset($_REQUEST['numExi'])) {
        $numExistente = $_REQUEST['numExi'];
        $numNuevo = $_REQUEST['numNue'];
        $concatenaNum = $_REQUEST['conNum'];
        
        //MUESTRO EL NÚMERO A SUSTITUIR Y EL NÚMERO NUEVO.
        echo 'NUMERO EXISTENTE = ', $numExistente, '<br>';
        echo 'NUMERO NUEVO = ', $numNuevo, '<br><br>';
        //echo '<br>NUMERO CONCATENADO = ', $concatenaNum;
        
        $concatenaNum = substr($concatenaNum, 1); // Le quita el espacio en blanco del principio
                                        // que ha sido creado la primera vez que se concatena
                                        // $cocNum = $cocNum." ".$numInt;
                                        // De esta forma se ocupará la posición 0 del array
                                        // con el primer numero introducido, no con un espacio
                                        // en blanco fruto del problema producido a concatenar
        
        $arrayNumeros = explode("|", $concatenaNum);
        
        //MUESTRO EL ARRAY ORIGINAL.
        echo 'ARRAY ORIGINAL<br>';          
        foreach ($arrayNumeros as $elemento) {  
          echo "<span>", $elemento, "|</span>";
          
        }
        //MUESTRO EL ARRAY MODIFICADO.
        echo 'ARRAY MODIFICADA<br>';
        for ($i = 0; $i < 100; $i++) {
          if ($arrayNumeros[$i] == $numExistente) { 
            //Muestro de ROJO el número si este coincide con el número a modificar.
            $arrayNumeros[$i] = $numNuevo;
            echo "<span style='color:red'>", $arrayNumeros[$i], "</span>|"; //Aplicando un estido al <span>
          }  else {
            //Muestro de NEGRO el número si no coincide con el número a modificar
            echo "<span>", $arrayNumeros[$i], "|</span>"; //Si no coincide con el número a modificar lo
                                                          //
          }
        }
        
              
      } else {
        
        $numCalcualados = new SplFixedArray(20); //Defino el array de tamaño 20
              
        //RELLENO EL ARRAY CON NÚMEROS DEL 1 AL 100 ALETORIAMENTE
        for ($i = 0; $i < 100; $i++) {
          $numCalculados[] = rand(0, 20);
        }
        
        //MUESTRO EL ARRAY RELLENA Y CONCATENO UN EL string $concatenaNum para poder enviarlo por formulario.
        echo 'NUMEROS CALCULADOS =';
        foreach ($numCalculados as $elemento) {
          echo $elemento, ' | ';
          $concatenaNum = $concatenaNum. '|'. $elemento;
        }
        
        //echo '<br><br>NUMERO CONCATENADO = ', $concatenaNum;
      ?>
      
      <form action="#" method="get"> <!--Si ponemos action="#" es igual que si pusieramos
                                   action="cap05_ejerc04.php"-->
        <br><br>ESCRIBIR DOS NUMEROS PRIMERO UN NÚMERO EXISTENTE Y DESPUES EL NÚMERO NUEVO<br>
        NUMERO A SUSTITUIR
        <input type="number" name="numExi" required autofocus><br>
        AHORA EL NÚMERO NUEVO
        <input type="number" name="numNue" required autofocus><br>
        <input type="hidden" name="conNum" value="<?php echo $concatenaNum; ?>">
        <input type="submit" name="calcular" value="CALCULAR">
      </form>
        
        
        <span style='color:red'></span>
      <?php
      }
      ?>
      
    </body>
</html>
