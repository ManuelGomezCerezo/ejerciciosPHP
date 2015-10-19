<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc12</title>
      
    <style>
        td {
            width: 100px;
            border: 2px solid black;
        }
        input {
            width: 100px;
        }
        #boton {
            border: 0px;
        }
        
    </style>
        
    </head>
    <body>
        
      <h3>PONER LA TRADUCCIÓN DE ESTAS CINCO PALABRAS</h3>
      
      <?php
      
      
      $arrayPalabras = array ("mesa", "silla", "perro", "gato", "cohe", "autobus", "raton", "avion",
                              "cinco", "seis", "siete", "rojo", "azul", "blanco");
      $arrayDiccionario = array( 
                    "mesa" => "table",
                    "silla" => "chair",
                    "perro" => "dog",
                    "gato" => "cat",
                    "coche" => "car",
                    "autobus" => "bus",
                    "ratón" => "mouse",
                    "avion" => "airplane",
                    "cinco" => "five",
                    "seis" => "six",
                    "siete" => "seven",
                    "rojo" => "red",
                    "azul" => "blue",
                    "blanco" => "white"
                  );
      $palabraIntroducida = $_REQUEST["palInt"];
      $palabrasElegidas = new SplFixedArray(5);
      $traducciones = 0;
      
      if (!isset($_REQUEST["palUno"])) {
      
        //Elijo aleatoriamente las palabras y las guardo en array elegidas.
        for ($i = 0; $i < 5; $i++) {
          $elegida = rand(0, 9);
          $palabrasElegidas[$i] = $arrayPalabras[$elegida];
        } 
        echo '<table><tr><td>ESPAÑOL</td>';
        foreach ($palabrasElegidas as $elemento) {
          echo '<td>'. $elemento. '</td>';
        }
        echo '</tr>';
        
        //Guardo en un string para poder pasar por formulario en oculto.
        
      
        //Creo el Formulario
        echo '<form action="#" method="get">';
        echo '<tr><td>INGLES</td>';
        for ($i = 0; $i < 5; $i++) {
          $nameForm = "pal". $i;
          echo '<td><input type="text" name="'. $nameForm. '" required autofocus></td>';
        }
        echo '</tr>';
        echo '<tr><td id="boton"><input type="submit" name="comprobar" value="COMPRUEBA"></td></tr>';
        echo '</table>';
      }
          
      ?>
      
      
      
        

      
      
       
        
      
      
    </body>
</html>