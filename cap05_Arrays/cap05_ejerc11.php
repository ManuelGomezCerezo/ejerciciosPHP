<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc11</title>
      
    <style>
        td {
            width: 100px;
            border: 2px solid black;
        }
        
    </style>
        
    </head>
    <body>
        
      <h3>SE CREA UN DICCIONARIO ESPAÑOL E INGLES, PARA QUE PIDAMOS UNA PALABRA EN ESPAÑO Y NOS DE LA TRADUCCIÓN EN INGLES</h3>
      
      <?php
      
      $arrayDiccionario = array( 
                    "mesa" => "table",
                    "silla" => "chair",
                    "perro" => "dog",
                    "gato" => "cat",
                    "coche" => "car",
                    "autobus" => "bus",
                    "ratón" => "mouse",
                    "bus" => "autobus",
                    "cinco" => "five",
                    "seis" => "six",
                    "siete" => "seven",
                    "rojo" => "red",
                    "azul" => "blue",
                    "blanco" => "white"
                  );
      $palabraIntroducida = $_REQUEST["palInt"];
      
      ?>
      <h4>ESCRIBE LA PALABRA A TRADUCIR DE ESPAÑOL A INGLES</h4>
      <form action="#" method="get">
            <input type="text" name="palInt" required autofocus><br>
      </form>
      
      <?php
      
      if (isset($_REQUEST["palInt"])) {
      
      echo '<br><h4>TRADUCCIÓN</h4>';
      echo '<table><tr><td>ESPAÑOL</td><td>INGLES</td></tr>';
      echo '<tr><td>'. $palabraIntroducida. '</td><td>'. $arrayDiccionario[$palabraIntroducida]. '</td></tr>';
      
      }  
        
      
      ?>
    </body>
</html>