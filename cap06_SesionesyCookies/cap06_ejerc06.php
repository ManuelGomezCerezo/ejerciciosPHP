<?php
  session_start();//inicio la sesión
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap06_ejerc06</title>
        <style>
            #articulo {
              float: left;
              width: 500px;
              height: 600px;
              border: 3px solid black;
              padding: 10px;
            }
            table {
              width: 400px;
            }
            td {
              width: 100px;
              height: 120px;
            }
            img {
              width: 120px;
              height: auto;
              text-align: center;
              border: 2px solid black;
            }
            #compra {
              float: left;
              width: 500px;
              border: 3px solid black;
              padding: 10px;
            }
            h2 {
              display: inline;
            }
            h4 {
              display: inline;
            }
            .detalle {
              font-size: 0.5em;
            }
          
                     
        </style>    
        
        
    </head>
    <body>
      <?php
      //CREO array de productos con los datos de los productos que tenemos.
      $arrayProductos = array (
        array("marca" => "Apple", "modelo" => "Iphone 5", "precio" => 400,"imagen" => "images/apple.jpeg",
              "informacion" => "Redes inalámbricas y de telefonía móvil

                                Teléfono internacional
                                Wi-Fi 802.11b/g/n (802.11n solo a 2,4 GHz)
                                Tecnología inalámbrica Bluetooth 4.0

                                Localización

                                GPS asistido
                                Brújula digital
                                Wi-Fi
                                Telefonía móvil

                                Pantalla

                                Pantalla Retina
                                Pantalla panorámica de 3,5 pulgadas (diagonal)
                                con Multi-Touch
                                Resolución de 960 por 640 píxeles a 326 p/p

                                Cámara, fotos y vídeo

                                Cámara iSight de 8 megapíxeles"),
        
        array("marca" => "Samsung", "modelo" => "Galaxy", "precio" => 300,"imagen" => "images/samsung.jpg",
              "informacion" => "Galaxy S5 es un smartphone pensado
                                para ofrecer la más completa experiencia
                                de uso que puedas imaginar, con soluciones
                                como su pulsómetro que te ayudan a
                                mantenerte en forma, y un atractivo diseño
                                resistente al agua y al polvo." ),
        
          array("marca" => "lg", "modelo" => "X-25", "precio" => 200, "imagen" => "images/lg.jpeg",
                "informacion" => "Pantalla táctil de 5.2 pulgadas 1080x1920
                con tecnología IPS Procesador Quad-Core
                a 2.26 GHz, con 2 GB de RAM.
                Cámara trasera de 13 megapixels, con
                grabación de vídeo.
                Sistema operativo Android 4.2.2
                Conectividad Bluetooth, WiFi, DLNA,
                NFC, GPS, A-GPS")
      );
      //FIN array procutos.
      $arrayCompra = $_SESSION['compra'];
      $_SESSION['productos'] = $arrayProductos;
            
      //MUESTRO los productos almaceanados en $arrayProductos.
      echo '<div id="articulo"><h2>ARTICULOS</h2><table>';
      for ($i = 0; $i < count($arrayProductos); $i++) {
        ?>
        <tr><td><img src="<?= $arrayProductos[$i]['imagen'] ?>"/></td>
          <td><div>MARCA:</div><div>MODELO:</div><div>PRECIO:</div></td>
          <td><div><?= $arrayProductos[$i]['marca'] ?></div><div><?= $arrayProductos[$i]['modelo'] ?></div><div><?= $arrayProductos[$i]['precio'] ?></div></td>
          <td>
            <form action="cap06_ejerc06.php" method="get">
              <input type="hidden" name="articulo" value="<?= $i ?>">
              <input id="anadir" type="submit" name="comprar" value="AÑADIR">
            </form>
            <form action="cap06_ejerc06detalle.php" method="get">
                <input type="hidden" name="articulo" value="<?= $i ?>">
                <input id="anadir" type="submit" name="comprar" value="DETALLE">
            </form> 
              
          </td>
        </tr>
        <?php    
      }
      echo '</table></div>';
      
      if (isset($arrayCompra)) {
        
        if (array_key_exists($_REQUEST['articulo'], $arrayCompra) && $_REQUEST['articulo'] != "") {
          $arrayCompra[$_REQUEST['articulo']]++;
        } else if ($_REQUEST['articulo'] != "") {
          $arrayCompra[$_REQUEST['articulo']] = 1;
        }
      
        echo '<div id="compra">';
        echo '<h2>COMPRA</h2><h4>-Array compra asociativa-</h4><br>';
                
        foreach ($arrayCompra as $key => $value) {
          //echo 'clave:'. $key;
          //echo ' valor:'. $value. '<br>';
          $idProducto = $key;
          echo $arrayProductos[$idProducto]['marca']. ' | '. $arrayProductos[$idProducto]['modelo']. ' | '. $arrayProductos[$idProducto]['precio']. ' Euros -- '. $arrayCompra[$idProducto]. ' Unidades = '. ($arrayProductos[$idProducto]['precio'])*($arrayCompra[$idProducto]). '<br>';
          $importe = $importe + (($arrayProductos[$idProducto]['precio'])*($arrayCompra[$idProducto]));
        }
                    
        //var_dump($arrayCompra);
        
        echo '<br>TOTAL IMPORTE = '. $importe
        ?>
        <form action="cap06_ejerc06.php" method="get">
          <input type="hidden" name="borradoCompra" value="borrarSesion">
          <input id="anadir" type="submit" name="comprar" value="Borrar Compra">
        </form>  
        <?php 
        echo '</div>';
         
      } else {
        $arrayCompra = array();
        $_SESSION['compra'] = $arrayCompra;
      }
      
      if (isset($_REQUEST['borradoCompra'])) {
        session_destroy();
      }
      
      $_SESSION['compra'] = $arrayCompra;
      ?>
      
    </body>
</html>
