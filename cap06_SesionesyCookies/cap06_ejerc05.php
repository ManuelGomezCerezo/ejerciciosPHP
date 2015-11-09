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
        <title>cap06_ejerc05</title>
        <style>
            #articulo {
              float: left;
              width: 500px;
              height: 600px;
              border: 3px solid black;
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
            }
            h2 {
              display: inline;
            }
            h4 {
              display: inline;
            }
                      
            
        </style>    
        
        
    </head>
    <body>
      <?php
      //DECLARACION DE VARIABLES//////////////////////////////////////////////////////
      //CREO array de productos con los datos de los productos que tenemos.
      $arrayProductos = array (
        array( "marca" => "Apple", "modelo" => "Iphone 5", "precio" => 400,"imagen" => "images/apple.jpeg"),
        array( "marca" => "Samsung", "modelo" => "Galaxy", "precio" => 300,"imagen" => "images/samsung.jpg"),
        array( "marca" => "lg", "modelo" => "X-25", "precio" => 200, "imagen" => "images/lg.jpeg")
      );
      //FIN array procutos.
      $arrayCompra = $_SESSION['compra'];
      ////////////////////////////////////////////////////////////////////////////////
      
      //MUESTRO los productos almaceanados en $arrayProductos.
      echo '<div id="articulo"><h2>ARTICULOS</h2><table>';
      for ($i = 0; $i < count($arrayProductos); $i++) {
        ?>
        <tr><td><img src="<?= $arrayProductos[$i]['imagen'] ?>"/></td>
          <td><div>MARCA:</div><div>MODELO:</div><div>PRECIO:</div></td>
          <td><div><?= $arrayProductos[$i]['marca'] ?></div><div><?= $arrayProductos[$i]['modelo'] ?></div><div><?= $arrayProductos[$i]['precio'] ?></div></td>
          <td>
            <form action="cap06_ejerc05.php" method="get">
              <input type="hidden" name="articulo" value="<?= $i ?>">
              <input id="anadir" type="submit" name="comprar" value="AÑADIR">
            </form>
          </td>
        </tr>
        <?php    
      }
      
      if (isset($_REQUEST['articulo'])) {
        echo '</table></div>';

        //Guardo en $arrayCompra los elementos comprados.
        $arrayCompra[] = $_REQUEST['articulo'];
        
        echo '<div id="compra">';
        echo '<h2>COMPRA</h2><h4>-Array simple-</h4>';
        foreach ($arrayCompra as $numero) {
          echo "<p>". $arrayProductos[$numero]['marca']. ", ". $arrayProductos[$numero]['modelo']. ", ". $arrayProductos[$numero]['precio']. "<p>"; 
          $importe += $arrayProductos[$numero]['precio'];
        }
        echo 'TOTAL IMPORTE = '. $importe
        ?>
        <form action="cap06_ejerc05.php" method="get">
          <input type="hidden" name="borradoCompra" value="borrarSesion">
          <input id="anadir" type="submit" name="comprar" value="Borrar Compra">
        </form>  
        <?php 
        echo '</div>';
         
      }
      
      if (isset($_REQUEST['borradoCompra'])) {
        session_destroy();
      }
      
      $_SESSION['compra'] = $arrayCompra;
      ?>
      
    </body>
</html>
