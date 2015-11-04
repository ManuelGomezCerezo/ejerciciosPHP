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
        <title>cap06_ejerc03</title>
    </head>
    <body>
      <h3>CALCULAR MEDIA DE NUMEROS, cuando su suma supere los 10000</h3>  
      <?php            
        $sumaNumeros = $_SESSION['sumNumeros'];
        $contadorNumeros = $_SESSION['contNumeros'];
        
        if (isset($_REQUEST['numInt'])) { $contadorNumeros++; } 
                
        $sumaNumeros = $sumaNumeros + $_REQUEST['numInt'];
        
        $_SESSION['sumNumeros'] = $sumaNumeros;
        $_SESSION['contNumeros'] = $contadorNumeros;
        
        if ($sumaNumeros > 10000) {
          echo '<h3>CONTADOR NÚMERO = '. $contadorNumeros. '</h3>';
          echo '<h3>SUMA NUMEROS = '. $sumaNumeros. '</h3>';
          echo '<h3>LA MEDIA DE LOS NÚMEROS ES = '. $sumaNumeros / $contadorNumeros. '</h3>';
        
        die();  
        } else {
          
          echo 'CONTADOR NÚMERO = '. $contadorNumeros;
          echo '<br>SUMA NUMEROS = '. $sumaNumeros;
          
        }
                       
      ?>
        <!-- OJO con el método get o post y con action="#" hay problemas si se
          mete un número seguido igual, si ponemos get hay que poner en actión el 
          nombre del fichero action="cap06_ejerc01 en vez de action="#" -->
        <br>  
        <form action="#" method="post">
          Introduzca todos los números enteros que quieras y pulsa intro<br>
          Para calcular su media introduzca un número negativo<br>
          <input type="text" name="numInt" required autofocus>
          <input type="submit" name="sumar">
        </form> 

      <?php
        
      ?>
       
    </body>
</html>