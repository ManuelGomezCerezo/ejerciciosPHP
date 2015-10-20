<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc12b</title>
      
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
      $concatenaPalabra = "";
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
      
      //Guardo todas las claves en un array para poder utilizar el aleatorio
      foreach(array_keys($arrayDiccionario) as $clave){
        $arrayPalabras[] = $clave;
      }
      
//      foreach ($arrayPalabras as $elemento) {
//        echo $elemento. '||';
//      }
      
      $palabraIntroducida = $_REQUEST["palInt"];
      $palabrasElegidas = new SplFixedArray(5);
      $traducciones = 0;
      
      if (!isset($_REQUEST["pal1"])) {
      
        //Elijo aleatoriamente las palabras y las guardo en array elegidas.
        for ($i = 0; $i < 5; $i++) {
          $elegida = rand(0, 9);
          $palabrasElegidas[$i] = $arrayPalabras[$elegida];
        } 
        echo '<table><tr><td>ESPAÑOL</td>';
        foreach ($palabrasElegidas as $elemento) {
          echo '<td>'. $elemento. '</td>';
          //Guardo en un string para poder pasar por formulario en oculto.
          $concatenaPalabra = $concatenaPalabra. ",". $elemento; 
        }
        echo '</tr>';
        
        //echo $concatenaPalabra;
              
        //Creo el Formulario
        echo '<form action="#" method="get">';
        echo '<tr><td>INGLES</td>';
        for ($i = 0; $i < 5; $i++) {
          $nameForm = "pal". $i;
          echo '<td><input type="text" name="'. $nameForm. '" required autofocus></td>';
        }
        echo '</tr>';
        echo '<tr><td id="boton"><input type="submit" name="comprobar" value="COMPRUEBA"></td></tr>';
        echo '<input type="hidden" name="conPal" value="'. $concatenaPalabra. '">';
        echo '</form>';
        echo '</table>';
        
      } else {
        $palabraArray = "";
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
        
        $concatenaPalabra = $_REQUEST['conPal'];
        $aciertos = 0;
        $fallos = 0;
        
        $concatenaPalabra = substr($concatenaPalabra, 1); // Le quita el espacio en blanco del principio
                                        // que ha sido creado la primera vez que se concatena
                                        // $cocNum = $cocNum." ".$numInt;
                                        // De esta forma se ocupará la posición 0 del array
                                        // con el primer numero introducido, no con un espacio
                                        // en blanco fruto del problema producido a concatenar
        
        $palabrasElegidas = explode(',', $concatenaPalabra);
        
//        echo '<br>';
//        foreach ($palabrasElegidas as $elemento) {
//          echo $elemento. '|||';
//        }
        
        echo '<table><tr><td>ESPAÑOL</td><td>INGLES</td><td>ACIERTO</td></tr>';
        for ($i = 0; $i < 5; $i++) {
                    
          if (($arrayDiccionario[($palabrasElegidas[$i])]) == ($_REQUEST["pal". $i])) {
            echo '<tr style="color: blue"><td>'. $palabrasElegidas[$i]. '</td><td>'. $_REQUEST["pal". $i]. '</td><td>ACIERTO</td></tr>';
            $aciertos++;
          } else {
            echo '<tr  style="color: red"><td>'. $palabrasElegidas[$i]. '</td><td>'. $_REQUEST["pal". $i]. '</td><td>FALLO</td></tr>';
            $fallos++;
          }
        }
        echo '</table>';
        
        echo 'HAS TENDO '. $aciertos. ' ACIERTOS,   Y HAS COMITIDO '. $fallos. ' FALLOS';
      }
          
      ?>
      
      
      
        

      
      
       
        
      
      
    </body>
</html>