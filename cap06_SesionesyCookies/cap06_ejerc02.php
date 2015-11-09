<?php
  session_start();//inicio la sesión
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap06_ejerc02</title>
    </head>
    <body>
        <!-- OJO con el método get o post y con action="#" hay problemas si se
        mete un número seguido igual, si ponemos get hay que poner en actión el 
        nombre del fichero action="cap06_ejerc01 en vez de action="#" -->
        <form action="#" method="post">
        CALCULAR MEDIA DE NUMEROS<br>
        Introduzca todos los números enteros que quieras y pulsa intro<br>
        Para calcular su media introduzca un número negativo<br>
        <input type="number" name="numInt" required autofocus>
        <input type="submit" name="sumar">
      </form>   
      <?php
        
        if (!isset($_REQUEST['numInt'])) {
          $mayorPares = -9999999;
        }
             
        $contadorNumeros = $_SESSION['contNumeros'];
        $contadorImpares = $_SESSION['contImpares'];
        $sumaImpares = $_SESSION['sumImpares'];
        $mayorPares = $_SESSION['mayPares'];
        
        
        if ($_REQUEST['numInt'] >= 0) {
          
          if (isset($_REQUEST['numInt'])) {
            $contadorNumeros++;
          }
          
          if ($_REQUEST['numInt'] % 2 == 0) {
            if ($_REQUEST['numInt'] > $mayorPares) {
              $mayorPares = $_REQUEST['numInt'];
            }
          } else {
            $contadorImpares++;
            $sumaImpares += $_REQUEST['numInt'];
          }

          echo 'CONTADOR números = '. $contadorNumeros;
          echo '<br>SUMA Impares = '. $sumaImpares;
          echo '<br>CONTADOR Impares = '. $contadorImpares;
          echo '<br>MAYOR Pares = '. $mayorPares;
          
          //Guardo las variables cambiadas en las variables de sección.
          $_SESSION['contNumeros'] = $contadorNumeros;
          $_SESSION['contImpares'] = $contadorImpares;
          $_SESSION['sumImpares'] = $sumaImpares;
          $_SESSION['mayPares'] = $mayorPares;
          
        
        } else {
          
          echo 'CONTADOR números = '. $contadorNumeros;
          echo '<br>SUMA Impares = '. $sumaImpares;
          echo '<br>CONTADOR Impares = '. $contadorImpares;
          echo '<br>MAYOR Pares = '. $mayorPares;
          
          echo '<br><h3>CONTADOR números = '. $contadorNumeros. '</h3>';
          echo '<h3>MEDIA Impares = '. $sumaImpares / $contadorImpares. '</h3>';
          echo '<h3>MAYOR Pares = '. $mayorPares. '</h3>';
                 
        }
        
      ?>
      
    </body>
</html>