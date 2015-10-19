<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>cap01_ejerc09</title>
    </head>
    <body>
        <?php
          $pesetas = 1000;
          $factor = 166.386;
         
          echo $pesetas, " pesetas son ",   round($pesetas / $factor, $precision = 2), " euros";
        ?>
    </body>
</html>
