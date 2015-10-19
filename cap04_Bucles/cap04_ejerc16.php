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
	      <title>cap04_ejerc16</title>
    </head>
    <body>
        <?php
        
        $numIntroducido = $_REQUEST['num'];
        $primo = TRUE;
        
        for ($i = 2; $i < $numIntroducido; $i++) {
          if ($numIntroducido % $i == 0) {
            $primo = FALSE;
          }
        }
        
        if (isset($_GET['num'])) {
        
          if ($primo) {
            echo '<h3>El número ', $numIntroducido, ' es primo</h3>';
          } else {
            echo '<h3>El número ', $numIntroducido, ' NO es primo</h3>';
          }
                  
        }      
        
        ?> 
        <h3>Introduce un número para ver si es primo</h3>
          <form action="cap04_ejerc16.php" method="get">
              <input type="number" autofocus name="num">
          </form> 
        
               
    </body>
</html>
