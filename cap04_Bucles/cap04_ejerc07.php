<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap04_ejerc07b</title>
    </head>
    <body>
          
        
      <?php
        if (isset($_GET['oport'])) {
          
          $combinacion = $_GET['comb']. $_GET['num'];
          echo "<div>", $combinacion, "<div>";
          $oportunidades = $_GET['oport'];
                    
          if (strlen($combinacion) == 4) {
            $acierto = 1234; 
            if ($combinacion == $acierto) {
              echo '<h3>Has conseguido abrir la caja fuerte</h3>';
              echo '<img src="images/cfabierta.jpeg">';
              $combinacion = "";
            }else{
              echo '<h3>Lo siento has fallado<h3>';
              echo '<img src="images/cfcerrada.jpeg">';
              $oportunidades = $_GET['oport'];
              $oportunidades--;
              echo '<h3>Te quedan ', $oportunidades, " oportunidades</h3>";
              $combinacion = "";
              if ($oportunidades < 1) {
                echo '<h3>LO SIENTO NOOO has conseguido abrir la caja fuerte</h3>';
              }
            }
          }
          
        }else{
          $oportunidades = 5;
          $combinacion = "";
          echo '<img src="images/cfcerrada.jpeg">';
          
        
        }
        
      ?>
                
      <h2>Teclea la clave de 4 cifras y pulse abrir. OJO TIENES 5 OPORTUNIDADES</h2>    
      <form action="cap04_ejerc07b.php" method="get">
        <input type="submit" name="num" value="1">
        <input type="submit" name="num" value="2">
        <input type="submit" name="num" value="3"><br>
        <input type="submit" name="num" value="4">
        <input type="submit" name="num" value="5">
        <input type="submit" name="num" value="6"><br>
        <input type="submit" name="num" value="7">
        <input type="submit" name="num" value="8">
        <input type="submit" name="num" value="9"><br>
        <input type="submit" name="num" value="0">
        <input type="hidden" name="oport" value="<?php echo $oportunidades; ?>">
        <input type="hidden" name="comb" value="<?php echo $combinacion; ?>">
      </form>
      
    </body>
</html>
