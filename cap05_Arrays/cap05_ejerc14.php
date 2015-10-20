<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc14</title>
      
      <style>
          td {
              width: 40px;
              height: 40px;
              text-align: center;
              border: 1px solid black;
              color: red;
          }
          .columnas td {
              border: none;
          }
          .filas {
              border: none;
          }
          .negro {
              background-color: black;
          }
          input {
              width: 30px;
          }
          #dibujar {
              width: 170px;
          }
          p {
              width: 40px;
              height: 40px;
          }
          div {
              width: 30px;
              height: 30px;
              background-color: yellow;
              border-radius: 100%;
          }
      </style>
        
    </head>
    <body>
      <?php
        $arrayColumnas = array("", "A", "B", "C", "D", "E", "F", "G", "H");
        $numeroFila = $_REQUEST['numero'];
        $letraColumna = $_REQUEST['letra'];
        $numeroColumna = 0;
               
        if (!isset($numeroFila)) {
          
          //Muetro el tablero por pantalla sin piezas
          echo "<table>";
          for ($i = 8; $i >= 1; $i--) {
            echo "<tr><td class='filas'>". $i. "</td>";
            for($j = 1; $j <= 8; $j++) {
              if (($i == $numeroFila) && ($j == $numeroColumna)) {
                echo "<td><img src='images/alfil2009.png' style='width: auto; height: 100%;'/></td>";
              } else if (($i % 2 != 0) && ($j % 2 != 0)) {
                echo "<td class='negro'>". $i. "|". $arrayColumnas[$j]. "</td>";
              } else if (($i % 2 == 0) && ($j % 2 == 0)) {
                echo "<td class='negro'>". $i. "|". $arrayColumnas[$j]. "</td>";
              } else {
                echo "<td>". $i. "|". $arrayColumnas[$j]. "</td>";
              }
            }
            echo "</tr>";
          }
          echo "<tr class='columnas'><td></td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td></tr>";
          echo "</table>";
        
        } else {
          
          for ($i = 1 ; $i <= 8; $i++) {
            if ($letraColumna == $arrayColumnas[$i]){
              $numeroColumna = $i;
            }
          }
                    
          //Muetro el tablero por pantalla sin piezas
          echo "<table>";
          for ($i = 8; $i >= 1; $i--) {
            echo "<tr><td class='filas'>". $i. "</td>";
            for($j = 1; $j <= 8; $j++) {
              if (($i == $numeroFila) && ($j == $numeroColumna)) {
                echo "<td><img src='images/alfil2009.png' style='width: auto; height: 100%;'/></td>";
              } else if ((($i % 2 != 0) && ($j % 2 != 0)) && ((abs($i - $numeroFila)) == (abs($j - $numeroColumna)))) {
                echo "<td class='negro'><div>". $i. "|". $arrayColumnas[$j]. "</div></td>";
              } else if ((($i % 2 == 0) && ($j % 2 == 0)) && ((abs($i - $numeroFila)) == (abs($j - $numeroColumna)))) {
                echo "<td class='negro'><div>". $i. "|". $arrayColumnas[$j]. "</div></td>";
              } else if (($i % 2 != 0) && ($j % 2 != 0)) {
                echo "<td class='negro'>". $i. "|". $arrayColumnas[$j]. "</td>";
              } else if (($i % 2 == 0) && ($j % 2 == 0)) {
                echo "<td class='negro'>". $i. "|". $arrayColumnas[$j]. "</td>";
              } else if ((abs($i - $numeroFila)) == (abs($j - $numeroColumna))){
                echo "<td><div>". $i. "|". $arrayColumnas[$j]. "</div></td>";
              } else {
                echo "<td>". $i. "|". $arrayColumnas[$j]. "</td>";
              }
            }
            echo "</tr>";
          }
          echo "<tr class='columnas'><td></td><td>A</td><td>B</td><td>C</td><td>D</td><td>E</td><td>F</td><td>G</td><td>H</td></tr>";
          echo "</table>";
        } 
      ?>    
        <h3>QUE POSICIÓN VA HA TENER EL ALFIL</h3>
        <form action="cap05_ejerc14.php" method="post">
            <span>Fila Numero......<input type="number" autofocus name="numero"><br>
          <span>Columna Letra..</span><input type="text" autofocus name="letra"><br>
          <input id="dibujar" type="submit" value="DIBUJAR">
        </form>
        
    </body>
</html>
