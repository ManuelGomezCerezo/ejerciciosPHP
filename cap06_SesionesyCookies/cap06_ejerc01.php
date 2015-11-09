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
        <title>cap06_ejerc01</title>
    </head>
    <body>
        <!-- OJO con el método get o post y con action="#" hay problemas si se
        mete un número seguido igual, si ponemos get hay que poner en actión el 
        nombre del fichero action="cap06_ejerc01 en vez de action="#" -->
        <form action="#" method="post">
        CALCULAR MEDIA DE NUMEROS<br>
        Introduzca todos los números enteros que quieras y pulsa intro<br>
        Para calcular su media introduzca un número negativo<br>
        <input type="text" name="numInt" required autofocus>
        <input type="submit" name="sumar">
      </form>   
      <?php
             
        $sumaNumeros = $_SESSION['sumNumeros'];
        $contadorNumeros = $_SESSION['contNumeros'];
        
        if ($_REQUEST['numInt'] > 0) {
        
          $sumaNumeros += $_REQUEST['numInt'];
          $contadorNumeros++;

          echo 'CONTADOR NÚMERO = '. $contadorNumeros;
          echo '<br>SUMA NUMEROS = '. $sumaNumeros;


          $_SESSION['sumNumeros'] = $sumaNumeros;
          $_SESSION['contNumeros'] = $contadorNumeros;
        
        } else {
          
          echo 'CONTADOR NÚMERO = '. $contadorNumeros;
          echo '<br>SUMA NUMEROS = '. $sumaNumeros;
          echo '<br>LA MEDIA DE LOS NÚMEROS ES = '. $sumaNumeros / $contadorNumeros;
                 
        }
        
      ?>
      
    </body>
</html>
