<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
      <meta charset="UTF-8">
      <title>cap05_ejerc10</title>
      
    <style>
        
    </style>
        
    </head>
    <body>
        
      <h3>SE SACAN 10 CARTAS AL AZAR Y SE MIRA QUE PUNTUACIÓN TIENEN SEGÚN LA BRISCA</h3>
      
      <?php
      //As (11 puntos), Tres (10 puntos), Rey (4 puntos), Caballo (3 puntos) y Sota (2 puntos).
      $palo = 0;
      $figura = 0;
      $cartaBuena = TRUE;
      $cartaGuardada = 0;
      $arrayPalos = array ("BASTOS", "ESPADAS", "OROS", "COPAS");
      $arrayFiguras = array ("As", "Dos", "Tres", "Cuatro", "Cinco", "Seis", "Siete", "Ocho", "Nueve", "Sota", "Caballo", "Rey");
      $arrayPuntos = array(
                    "As" => 11,
                    "Dos" => 0,
                    "Tres" => 10,
                    "Cuatro" => 0,
                    "Cinco" => 0,
                    "Seis" => 0,
                    "Siete" => 0,
                    "Ocho" => 0,
                    "Nueve" => 0,
                    "Sota" => 2,
                    "Caballo" => 3,
                    "Rey" => 4
                  );
      ////////////////////////////////////////////////////////////////////////////////
      //OTRA FORMA DE DEFINIR EL $arrayPuntos esta opción es la que se recomienda.  //
      //$arrayPuntos = [                                                            //
      //              "As" => 11,                                                   //
      //              "Dos" => 0,                                                   //
      //              "Tres" => 10,                                                 //
      //              "Cuatro" => 0,                                                //
      //              "Cinco" => 0,                                                 //
      //              "Seis" => 0,                                                  //
      //              "Siete" => 0,                                                 //
      //              "Ocho" => 0,                                                  //
      //              "Nueve" => 0,                                                 //
      //              "Sota" => 2,                                                  //
      //              "Caballo" => 3,                                               //
      //              "Rey" => 4,                                                   //
      //            ];                                                              //
      ////////////////////////////////////////////////////////////////////////////////
      
      $arrayPartida = array (
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      array("palo" => 10, "figura" => 20),
                      );
      
//      for ($i = 0; $i < count($arrayPartida); $i++) {
//        echo "<br>CARTA = ". $arrayPartida[$i]['figura']. " de ". $arrayPartida[$i]['palo'];
//      }
      
      
      //SE VAN SACANDO CARTAS HASTA QUE SALGAN DIEZ DIFERENTES 
      //ya que se comprueba si yá existe en la partida la última carta que se saca.
      echo '<h4>CARTAS SACADAS</h4>';
      while ($cartaGuardada < 10) {
        
        //Aleatorio para elegir el palo.
        $palo = rand(0, 3);
        echo 'ALEATORIO----PALO ='. $palo;
        //Aleatorio para elegir la figura.
        $figura = rand(0, 11);
        echo '---FIGURA ='. $figura. '<br>';
        
        //Se comprueba si existe yá esa carta.
        $cartaBuena = TRUE;
        for ($j = 0; $j < count($arrayPartida); $j++) {
          //echo "<br>CARTA = ". $arrayPartida[$j]['figura']. " de ". $arrayPartida[$j]['palo'];
          
          if ($palo == $arrayPartida[$j]['palo'] && $figura == $arrayPartida[$j]['figura']){
            $cartaBuena = FALSE;
            
          }
          //echo $cartaBuena . '|';
        }
        //echo '<br>';
        
        //Si no existe es decir si $cartaBuena es TRUE, entonces se grava en $arrayPartida.
        if ($cartaBuena) {
          $arrayPartida[$cartaGuardada]['palo'] = $palo;
          $arrayPartida[$cartaGuardada]['figura'] = $figura;
          $cartaGuardada++;
        }
      }
      
      //Muestro por pantalla las cartas que han salido y calculos los puntos.
      echo '<h4>PARTIDA BUENA</h4>';
      for ($i = 0; $i < count($arrayPartida); $i++) {
        $figuraPuntuar = $arrayFiguras[$arrayPartida[$i]['figura']];
        //echo "<br>Figura = ". $figuraPuntuar. " = ". $arrayPuntos[$figuraPuntuar]. " puntos ";
        $puntos = $puntos + $arrayPuntos[$figuraPuntuar];
        echo "CARTA = ". $arrayFiguras[$arrayPartida[$i]['figura']]. " de ". $arrayPalos[$arrayPartida[$i]['palo']]. " = ". $arrayPuntos[$figuraPuntuar]. " puntos<br> ";
      }
      echo '<br><br> PUNTOS TOTALES = '. $puntos. ' puntos';
      
      
      ?>
        
      
    </body>
</html>