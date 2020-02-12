<form action="" method="post">
	Fecha: <br>
	<input type="date" name="fecha" placeholder="Fecha:">
	<br>
	IDcliente: <br>
	<input type="text" name="IDcliente" placeholder="IDcliente:"> <br>
  Precio: <br>
  <input type="text" name="precio" placeholder="Precio:">
  <br>
  Cantidad: <br>
  <input type="text" name="antidad" placeholder="Cantidad:"> <br>
  Direccion: <br>
  <input type="text" name="direccion" placeholder="Direccion:"> <br>
  IDproducto: <br>
  <input type="text" name="IDproducto" placeholder="IDproducto:"> <br>
  
  
	
	<input type="submit" name="alta" value="Guardar Pedido">
</form>
<?php 
       require_once("pedido.php");
       $obj = new pedido();

    if(isset($_POST["alta"])){
     $IDpedido = $_POST["IDpedido"];
     $fecha = $_POST["fecha"];
    $IDcliente = $_POST["IDcliente"];
     $precio = $_POST["precio"];
      $cantidad = $_POST["cantidad"];
       $direccion = $_POST["direccion"];
       $IDproducto = $_POST["IDproducto"];
      
       $obj->alta($nombre,$tipo,$descripcion,$precio,$stock,$existencia);
       echo "<h2>Pedido registrada</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Fecha</th>
 		<th>IDcliente</th>
 		<th>Precio</th>
    <th>Cantidad</th>
    <th>Direccion</th>
    <th>IDproducto</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["fecha"]."</td>";
      echo"<td>".$fila["IDcliente"]."</td>";
      echo"<td>".$fila["precio"]."</td>";
      echo"<td>".$fila["cantidad"]."</td>";
      echo"<td>".$fila["direccion"]."</td>";
      echo"<td>".$fila["IDproducto"]."</td>";
      

       
        echo "</tr>";
     }
 	 ?>
 </table>