<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $numero = 9;
        
        
        echo '<h3>DIFERENCIA ENTRE COMILLAS DOBLES Y SIMPLES</h3>';
        echo "COMILLAS DOBLES: ";
        echo "El número elegido es = $numero <br>";
        
        echo 'COMILLAS SIMPLES: ';
        echo 'El número elegido es = $numero <br>';
        
        
        echo '<br><br><h3>VACIAR UN ARRAY</h3>';
        //Defino el array original.
        $arrayNumeros = array (1, 2, 3, 4, 5);
        
        //Imprimo el array original
         echo 'Imprimo el array original<br>';
        foreach ($arrayNumeros as $elemento) 
          echo $elemento. ' | ';
        
        //Vacio el arran con:
        $arrayNumeros = [];
        
        //Imprimo el array vacio no debe de salir nada.
        echo '<br><br>Imprimo el array vacio';
        foreach ($arrayNumeros as $elemento) 
          echo $elemento. ' | ';
        
        echo '<br>no debe de salir nada';
        
        
        
        ?>
    </body>
</html>
