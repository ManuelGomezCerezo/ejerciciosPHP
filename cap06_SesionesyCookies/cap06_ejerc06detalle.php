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
        <title>cap06_ejerc06c</title>
        <style>
            #articulo {
              float: left;
              width: 500px;
              height: 400px;
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
      //RECOJO $_SESSION['compra'] para no perder variable de sesion al cambiar de página.
      $_SESSION['compra'];
      //RECOJO $_SESSION['productos'] por que los datos de los productos entan en la
      //pagina principal de esta forma los tengo también en cap06_ejerc06detalle.
      $arrayProductos = $_SESSION['productos'];
      //RECIBO a traves de formulario el id del artículo que hemos seleccionado detalle 
      $i = $_REQUEST['articulo'];
            
      //MUESTRO el detalle del producto elegido.
      echo '<div id="articulo"><h2>ARTICULO</h2><table>';
        ?>
        
        <tr><td><img src="<?= $arrayProductos[$i]['imagen'] ?>"/></td>
          <td><div>MARCA:</div><div>MODELO:</div><div>PRECIO:</div></td>
          <td><div><?= $arrayProductos[$i]['marca'] ?></div><div><?= $arrayProductos[$i]['modelo'] ?></div><div><?= $arrayProductos[$i]['precio'] ?></div></td>
          <td>
            <form action="cap06_ejerc06.php" method="get">
              <input type="hidden" name="articulo" value="<?= $i ?>">
              <input id="anadir" type="submit" name="comprar" value="AÑADIR">
            </form>
            <form action="cap06_ejerc06.php" method="get">
                <input id="vuelve" type="submit" name="volver" value="VOLVER">
            </form> 
          </td>
        </tr>
        <tr>
            <td id="detalle" colspan="4"><div><b>DETALLES</b><div><?= $arrayProductos[$i]['informacion'] ?></div></td>
        </tr>
        <?php    
      
      echo '</table></div>';
      ?>
      
    </body>
</html>
