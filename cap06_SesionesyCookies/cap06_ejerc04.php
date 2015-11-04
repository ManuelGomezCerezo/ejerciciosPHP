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
        <title>cap06_ejerc04</title>
    </head>
    <body>
      <?php
      //CODIGO NECESARIO PARA LOGUEARSE//////////////////////////////////////////////     
      $usuario = "lolo";
      $clave = "1234";
      
      
      //Comprueba si hemos introducido la clave buena, 
      //si es así pone $_SESSION['acceso'] a verdadero para que entre en el programa,
      //y no muestre el formulario de logueo.
      if ($_REQUEST['usuInt'] == $usuario && $_REQUEST['claInt'] == $clave) {        
        $_SESSION['acceso'] = TRUE;
      }
      
      //Si no se ha accedido todabía con la clave se muestra el formulario de acceso.
      if (!$_SESSION['acceso']) { 
        $_SESSION['acceso'] = FALSE;
        
      ?>
        <form action="#" method="post">
            INTRODUZCA LA CLAVE DE ACCESO:<br>
          USUARIO:<input type="text" name="usuInt" required autofocus><br>
          CONTRASEÑA:<input type="password" name="claInt" required autofocus>
          <input type="submit" name="INTRO" value="ENTRAR">
          
        </form>  
      <?php
      
      //FIN DE LOGUEARSE/////////////////////////////////////////////////////////////
      
      } 
      
      if ($_SESSION['acceso']) {
        
          if ($lolo) {
            $_SESSION["acceso"] = FALSE;
          } 
          
          //INICIO PROGRAMA PRINCIPAL- se ejecuta si estamos logueados./////////////
          $sumaNumeros = $_SESSION['sumNumeros'];
          $contadorNumeros = $_SESSION['contNumeros'];

          if ($_REQUEST['numInt'] >= 0) {
            
      ?>
          <!-- OJO con el método get o post y con action="#" hay problemas si se
          mete un número seguido igual, si ponemos get hay que poner en actión el 
          nombre del fichero action="cap06_ejerc01 en vez de action="#" -->
          <form action="#" method="post">
            CALCULAR MEDIA DE NUMEROS<br>
            Introduzca todos los números enteros que quieras y pulsa intro<br>
            <span style="color: red">Para calcular su media introduzca un número negativo</span><br>
            <input type="text" name="numInt" required autofocus>
            <input type="submit" name="sumar" value="enviar">
            <input type="submit" name="finSesion" value="Finalizar Sesion">
          </form>
          
          
      <?php
            
            $sumaNumeros = $sumaNumeros + $_REQUEST['numInt'];
            $contadorNumeros++;

            echo 'CONTADOR NÚMERO = '. ($contadorNumeros - 1);
            echo '<br>SUMA NUMEROS = '. $sumaNumeros;


            $_SESSION['sumNumeros'] = $sumaNumeros;
            $_SESSION['contNumeros'] = $contadorNumeros;

          } else {

            echo 'CONTADOR NÚMERO = '. ($contadorNumeros - 1);
            echo '<br>SUMA NUMEROS = '. $sumaNumeros;
            echo '<br>LA MEDIA DE LOS NÚMEROS ES = '. $sumaNumeros / ($contadorNumeros - 1);
            
          }//FIN DEL PROGRAMA PRINCIPAL////////////////////////////////////////////
          
      }//FIN IF ACCESO    
      ?>
      
    </body>
</html>
