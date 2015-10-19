<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc07</title>
      
    <style>
    </style>
        
    </head>
    <body>
      <?php
        
        $arrayNumeros = new SplFixedArray(20);
        $contNumeros = 0;
        $contPares = 0;
        $contImpares = 0;

        for ($i = 0; $i < 20; $i++) {
          $arrayNumeros[$i] = rand(0, 100);
        }

        foreach ($arrayNumeros as $elemento) {
          echo $elemento, " | ";
        }

        for ($i = 0; $i < count($arrayNumeros); $i++) {
          if ($arrayNumeros[$i] % 2 == 0) {
            $arrayPares[] = $arrayNumeros[$i];
          } else {
            $arrayImpares[] = $arrayNumeros[$i];
          }
        }

        echo '<br><br>';
        foreach ($arrayPares as $elemento) { 
          echo $elemento, " | ";
        }

        echo '<br><br>';
        foreach ($arrayImpares as $elemento) { 
          echo $elemento, " | ";
        }


        //UNA FORMA DE GUARDAR LOS DATOS DE PARES E IMPARES EN EL ARRAY ORIGINAL MACHACANDO LOS DATOS.
//        while ($contNumeros < 20) {
//          if ($contPares < count($arrayPares)) {
//            $arrayNumeros[$contNumeros] = $arrayPares[$contPares];
//            $contPares++;
//          } else {
//            $arrayNumeros[$contNumeros] = $arrayImpares[$contImpares];
//            $contImpares++;
//          }
//          $contNumeros++;
//        }
        
        //OTRA FORMA DE GRABAR LOS DATOS DE PARES E IMPARES EN EL ARRAY ORIGINAL, DEJANDO EN BLANCO
        //EL ARRAY ORIGINAL Y DESPUES RELLENANDO- Esta opción parece más obtima.
        
        //Primero dejamos en blanco el array original.
        $arrayNumeros = [];
        
        //Segundo cargamos los datos de $arrayPares en $arrayNumeros
        foreach ($arrayPares as $elemento) {
          $arrayNumeros[] = $elemento;
        }
        //Segundo cargamos los datos de $arrayImpares en $arrayNumeros
        foreach ($arrayImpares as $elemento) {
          $arrayNumeros[] = $elemento;
        }

        echo '<br><br>';
        foreach ($arrayNumeros as $elemento) {
          echo $elemento, " | ";
        }

      ?>
      
    </body>
</html>
