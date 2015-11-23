<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>cap07_Acceso a bases de datos</title>
    </head>
    <body>
        
      <div>
        1. Crea una aplicación web que permita hacer listado, alta, baja y modificación sobre la tabla cliente de la base de datos banco.<br>
        <ul> 
            <li>Para realizar el listado bastará un SELECT, tal y como se ha visto en los ejemplos.</li>
            <li>El alta se realizará mediante un formulario donde se especificarán todos los campos del nuevo registro. Luego esos datos se enviarán a una página que ejecutará INSERT.</li>
            <li>Para realizar una baja, se pedirá el DNI del cliente mediante un formulario y a continuación se ejecutará DELETE para borrar el registro cuyo DNI coincida con el introducido.</li>
            <li>La modificación se realiza mediante UPDATE . Se pedirá previamente en un formulario el DNI del cliente para el que queremos modificar los datos.</li>
        </ul>
        <a href='cap07_ejerc01.php'>SOLUCION</a><br><br>
      </div>
      <div>
        2. Modifica el programa anterior añadiendo las siguientes mejoras:<br>
        <ul> 
            <li>El listado debe aparecer paginado en caso de que haya muchos clientes.</li>
            <li>Al hacer un alta, se debe comprobar que no exista ningún cliente con el DNI introducido en el formulario.</li>
            <li>La opción de borrado debe pedir confirmación.</li>
            <li>Cuando se realice la modificación de los datos de un cliente, los campos que no se han cambiado deberán permanecer inalterados en la base de datos.</li>
        </ul>
        <a href='cap07_ejerc02.php'>SOLUCION</a><br><br>
      </div>
      <div>
        3. Modifica la tienda virtual realizada anteriormente de tal forma que todos los datos de los artículos se guarden en una base de datos.<br>
        <a href='cap07_ejerc03.php'>SOLUCION</a><br><br>
      </div>
      <div>
        4. Crea el programa GESTISIMAL (GESTIón SIMplifcada de Almacén) para llevar el control de los artículos de un almacén. De cada artículo se debe saber el código, la descripción, el precio de compra, el precio de venta y el stock (número de unidades). La entrada y salida de mercancía supone respectivamente el incremento y decremento de stock de un determinado artículo. Hay quecontrolar que no se pueda sacar más mercancía de la que hay en el almacén. El programa debe tener, al menos, las siguientes funcionalidades: listado, alta, baja, modificación, entrada de mercancía y salida de mercancía.<br>
        <a href='cap07_ejerc04.php'>SOLUCION</a><br><br>
      </div>
      <div>
        Modifica el programa anterior añadiendo las siguientes mejoras:<br>
        <ul> 
          <li>Comprueba la existencia del código en el alta, la baja y la modificación de artículos para evitar errores.</li>
          <li>Cambia la opción “Salida de stock” por “Venta”. Esta nueva opción permitirá hacer una venta de varios artículos y emitir la factura correspondiente. Se debe preguntar por los códigos y las cantidades de cada artículo que se quiere comprar. Aplica un 21% de IVA.</li>
        </ul>
        <a href='cap07_ejerc05.php'>SOLUCION</a>
      </div>
    </body>
</html>