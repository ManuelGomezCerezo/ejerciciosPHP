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
	      <title>cap04_ejerc10</title>
    </head>
    <body>
        <?php
          if (isset($_GET["num"])) {
            
            $numIntroducido = $_GET["num"];
            $sumaIntroducidos = $_GET["suma"] + $numIntroducido;
            $contador = $_GET["cont"] + 1;
                        
            if ($_GET["num"] < 0) {
              $contador = $contador - 1;
              $sumaIntroducidos = $sumaIntroducidos - $numIntroducido;
              echo "<h4>La media de los números es ", $sumaIntroducidos/$contador, "</h4>"; 
            }
            
            echo "Suma números introducidos es", $sumaIntroducidos, "<br>";
            echo "Se han introducido ", $contador, " números";
                               
          }else{
            $numIntroducido = "";
            $sumaIntroducidos = 0;
            $contador = 0;
            
          }
        ?>
        
        <h3>Introduce números para calcular la media, para salir escribir un número negativo</h3>
        <form action="cap04_ejerc10.php" method="get">
            <input type="number" autofocus name="num">
            <input type="hidden" name="suma" value="<?php echo $sumaIntroducidos; ?>">
            <input type="hidden" name="cont" value="<?php echo $contador; ?>">
        </form>
    </body>
</html>
