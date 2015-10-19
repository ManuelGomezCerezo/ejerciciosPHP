<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta content="Manuel Gomez Cerezo" name="author">
	      <title>cap04_ejerc23</title>
    </head>
    <body>
        
        <?php
            
          if (isset($_GET['suma'])){  //No entra al principio por que suma el formulario esta vacio.
                     
            $numIntroducido = $_GET["num"];
            $sumaIntroducidos = $_GET["suma"];
            $contador = $_GET["cont"];
            
            $sumaIntroducidos = $sumaIntroducidos + $numIntroducido;
            $contador++;
            
            if ($sumaIntroducidos > 10000) {
              echo "Suma números introducidos es <b>", $sumaIntroducidos, "</b><br>";
              echo "Se han introducido <b>", $contador, "</b> números<br>";
              echo "La media de los números es <b>", $sumaIntroducidos/$contador, "</b>";
              echo "<br>OJO HE UTILIZADO LA FUNCIÓN DIE() PARA TERMINAR EL PROGRAMA";
            die();
            }
            
          }                                 
            
        ?>
        
        <h3>Introduce números, hasta superar 10000, el programa calcula la suma, los número introducidos y la media</h3>
        <form action="cap04_ejerc23.php" method="get">
            <input type="number" autofocus name="num">
            <input type="hidden" name="suma" value="<?php echo $sumaIntroducidos; ?>">
            <input type="hidden" name="cont" value="<?php echo $contador; ?>">
        </form>
        
    </body>
</html>
