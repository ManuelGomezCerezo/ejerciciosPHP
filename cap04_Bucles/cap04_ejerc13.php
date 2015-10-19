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
	      <title>cap04_ejerc13</title>
    </head>
    <body>
        <?php
        $positivos = $_REQUEST['posit'];
        $negativos = $_REQUEST['negat'];
        $contador = $_REQUEST['cont'];
        $numIntroducido = $_REQUEST['num'];
        
        if (isset($numIntroducido)) {
          if ($numIntroducido >= 0) {
            $positivos++;
          }else{
            $negativos++;
          }
        } 
          
        if (($contador < 11) || !isset($contador)) {
        $contador++;  
        

        }
        ?>
          <h3>Introduce 10 números positivos y negativos</h3>
          <form action="cap04_ejerc13.php" method="get">
              <input type="number" autofocus name="num">
              <input type="hidden" name="posit" value="<?php echo $positivos; ?>">
              <input type="hidden" name="negat" value="<?php echo $negativos; ?>">
              <input type="hidden" name="cont" value="<?php echo $contador; ?>">
          </form> 
        <?php
        
        if ($contador == 11) {
          echo 'Se han introducido ', $positivos, ' numeros positivos<br>';
          echo 'Se han introducido ', $negativos, ' numeros negativos';
        }  
       
        ?>  
        
               
    </body>
</html>
